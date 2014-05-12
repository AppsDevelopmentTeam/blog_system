<?php echo $this->Html->link('管理画面', '/users'); ?>

<h2>タイトル</h2>
<?php
// echo $this->Form->create('User', array('action' => '/'));
// echo $this->Form->create('Post', array('url' => array('controller' => 'users', 'action' => 'index')));
echo $this->Form->create('Post', array('action' => 'index'));
echo $this->Form->text('Post.title', array('required' => false));
echo $this->Form->error('Post.title');
?>
</br>
</br>
<?php
echo $this->Form->textarea('Post.content', array('required' => false, 'rows' => 20, 'wrap' => 'hard'));
echo $this->Form->error('Post.content');
echo $this->Form->end('投稿する');
?>

<!--
<ul>
<?php
foreach ($results as $post):
?>
<li>
<?php
echo "【タイトル】" . $post['Post']['title'];
echo $post['Post']['created'];
echo "</br>";
echo "</br>";
echo $post['Post']['content'];
?>
</li>
</br>
<?php
endforeach;
?>
</ul>
-->