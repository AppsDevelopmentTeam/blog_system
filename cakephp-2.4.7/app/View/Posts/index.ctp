<?php echo $this->Html->link('管理画面', '/users'); ?>

<ul>
<?php
foreach ($results as $post):
?>
<li>
<?php
echo "【タイトル】" . $post['Post']['title'];
echo $post['Post']['created'];
echo "</br>";
echo "</br>";
echo $post['Post']['content'];
?>
</li>
</br>
<?php
endforeach;
?>
</ul>