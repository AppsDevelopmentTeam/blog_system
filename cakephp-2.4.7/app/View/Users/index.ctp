<h2>記事一覧</h2>

<ul>
<?php foreach ($posts as $post): ?>
<li>
<?php
echo $this->Html->link($post['Post']['title'], array('action' => '../users/view/'.$post['Post']['id']));
?> 
<?php echo $this->Html->link('編集', array('action'=>'../posts/edit', $post['Post']['id'])); ?> 
<?php
echo $this->Form->postlink('削除',array('action'=>'delete', $post['Post']['id']), array('confirm'=>'sure?'));
?>
</li>
<?php endforeach; ?>
</ul>
</br>
<?php echo $this->Html->link('投稿画面', array('controller'=>'posts', 'action'=>'add')) ?>
</br>
<?php echo $this->Html->link('ログアウト', array('action' => 'logout')) ?>