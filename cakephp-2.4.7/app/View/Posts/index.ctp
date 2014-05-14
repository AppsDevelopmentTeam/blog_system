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
echo nl2br(h($post['Post']['content']));
?>
</li>
</br>
<?php
endforeach;
?>
</ul>

<ul>
<?php
echo $this->paginator->first($title = '<< ');
echo $this->paginator->prev($title = '< ');
echo $this->paginator->numbers(array(
    'currentClass' => 'pager-active',
    'class' => 'pager',
    'modulus' => 3));
echo $this->paginator->next($title = ' >');
echo $this->paginator->last($title = ' >>');
?>
</ul>