<ul>
<?php
foreach ($results as $post):
?>
<li>
<?php
echo "【タイトル】" . h($post['Post']['title']);
echo $post['Post']['created'];
echo "</br>";
echo "</br>";
echo h(nl2br($post['Post']['content']));
?>
</li>
</br>
<?php
endforeach;
?>
</ul>