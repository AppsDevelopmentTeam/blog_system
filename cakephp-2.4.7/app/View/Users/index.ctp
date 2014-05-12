<h1>管理画面</h1>

<h2>タイトル</h2>
<?php
// echo $this->Form->create('User', array('action' => '/'));
// echo $this->Form->create('Post', array('url' => array('controller' => 'users', 'action' => 'index')));
echo $this->Form->create('Post', array('action' => 'index'));
echo $this->Form->text('Post.title', array('required' => false));
?>
</br>
</br>
<?php
echo $this->Form->textarea('Post.content', array('required' => false, 'rows' => 20, 'wrap' => 'hard'));
echo $this->Form->end('投稿する');
?>
