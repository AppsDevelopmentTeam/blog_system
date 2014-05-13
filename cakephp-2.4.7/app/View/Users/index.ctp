<h2>記事一覧</h2>

<ul>
<?php foreach ($posts as $post): ?>
<li>
<?php
echo $this->Html->link($post['Post']['title'],'../posts/view/'.$post['Post']['id']);
?>
<?php echo $this->Html->link('編集', array('action'=>'../posts/edit', $post['Post']['id'])); ?>
<?php
echo $this->Form->postlink('削除',array('action'=>'delete', $post['Post']['id']), array('confirm'=>'sure?'));
?>
</li>
<?php endforeach; ?>
</ul>

<h2>Add Post</h2>
<?php echo $this->Html->link('Add Post', array('controller'=>'posts', 'action'=>'add')) ?>
