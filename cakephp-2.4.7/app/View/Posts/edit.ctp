<h2>編集</h2>

<?php
echo $this->Form->create('Post',array('action'=>'edit'));
echo $this->Form->text('title');
echo $this->Form->error('title');
?>
</br>
</br>
<?php
echo $this->Form->textarea('content',array('rows'=>10));
echo $this->Form->error('content');
echo $this->Form->end('再投稿');
?>