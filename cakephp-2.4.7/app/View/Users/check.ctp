<h1>確認画面</h1>

<?php echo $this->Session->read('User.username'); ?>
</br>
<?php echo $this->Session->read('User.email'); ?>
</br>
<?php echo $this->Session->read('User.password'); ?>
</br>
<?php echo $this->Html->image($this->Session->read('User.picture')); ?>
</br>
<?php echo $this->Form->create('User', array('action' => 'thanks')); ?>	
<?php echo $this->Form->end('登録する') ?>