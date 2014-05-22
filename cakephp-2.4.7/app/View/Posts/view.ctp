<?php
echo $this->Html->addCrumb('HOME' ,'/posts');
echo $this->Html->getCrumbs();
?>

<h2><?php echo h($post['Post']['title']) ?></h2>

<p><?php echo nl2br(h($post['Post']['content'])) ?></p>