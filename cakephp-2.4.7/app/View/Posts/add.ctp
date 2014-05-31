<?php echo $this->Html->link('管理画面', '/users'); ?>

<h2>タイトル</h2>
<?php
echo $this->Form->create('Post', array('action' => 'add'));
echo $this->Form->text('title', array('required' => false));
echo $this->Form->error('title');
?>
</br>
</br>
<?php
echo $this->Form->textarea('content', array('required' => false, 'rows' => 10, 'wrap' => 'hard'));
echo $this->Form->error('content');
echo $this->Form->end('投稿する');
?>
