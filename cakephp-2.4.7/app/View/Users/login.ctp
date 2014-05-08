<h1>ログイン</h1>

<?php
echo $this->Form->create();
echo $this->Form->input('User.email',array('required' => false));
echo $this->Form->input('User.password',array('required' => false));
echo $this->Form->end('ログイン');
?>