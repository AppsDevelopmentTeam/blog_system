<?php
echo $this->Html->addCrumb('HOME' ,'/posts');
echo $this->Html->getCrumbs();
?>

<h2><?php echo h($post['Post']['title']) ?></h2>

<p><?php echo nl2br(h($post['Post']['content'])) ?></p>

<h3>コメント</h3>
<ul>
<?php foreach ($post['Comment'] as $comment): ?>
<li><?php echo h($comment['content']) ?> by <?php echo h($comment['commenter']); ?></li>
<?php endforeach; ?>
</ul>

<?php
echo $this->Form->create('Comment', array('action'=>'add'));
echo $this->Form->input('commenter');
echo $this->Form->input('content', array('rows'=>3));
echo $this->Form->input('Comment.post_id', array('type'=>'hidden', 'value'=>$post['Post']['id']));
echo $this->Form->end('コメントする');
?>