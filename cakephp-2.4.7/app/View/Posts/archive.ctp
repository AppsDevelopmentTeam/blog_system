<?php
echo $this->Html->addCrumb('HOME' ,'/posts');
echo $this->Html->getCrumbs();
?>
<ul>
<?php foreach ($results as $result): ?>
<li>
<?php
echo h($result['Post']['title']);
echo "</br>";
echo "</br>";
echo nl2br(h($result['Post']['content']));
?>
</li>
</br>
<?php endforeach ?>
</ul>