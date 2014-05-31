<?php
echo $this->Html->addCrumb('HOME' ,'/posts');
echo $this->Html->getCrumbs();
?>
<ul>
<?php foreach ($results as $post): ?>
<li>
<?php
echo $this->Html->link($post['Post']['title'], array('action' => 'view/'.$post['Post']['id']));
echo "</br>";
echo "</br>";
echo nl2br(h($post['Post']['content']));
?>
</li>
</br>
<?php endforeach ?>
</ul>