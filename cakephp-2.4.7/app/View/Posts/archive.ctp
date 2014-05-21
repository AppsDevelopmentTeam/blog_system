<?php echo $this->Html->link('HOME', array('action' => '/')); ?>
<ul>
<?php foreach ($results as $result): ?>
<li>
<?php
echo h($result['Post']['title']);
echo "</br>";
echo "</br>";
echo nl2br(h($result['Post']['content']))
?>
</li>
</br>
<?php endforeach ?>
</ul>