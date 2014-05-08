<h1>ユーザー登録</h1>

<?php
echo $this->Form->create('User', array('action' => 'add', 'type' => 'file'));
echo $this->Form->input('User.username', array('required' => false));
echo $this->Form->input('User.email', array('required' => false));
echo $this->Form->input('User.password', array('required' => false));
echo $this->Form->input('User.picture', array('label' => false, 'type' => 'file','accept' => 'image/*', 'multiple'));
echo $this->Form->end('入力画面を確認する');
?>