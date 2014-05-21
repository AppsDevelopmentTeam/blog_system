<ul>
<?php
foreach ($results as $post):
?>
<li>
<?php
echo $this->Html->link($post['Post']['title'], array('action' => 'view/'.$post['Post']['id']));
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
<?php foreach ($year_month as $value): ?>
<li>
<?php echo $this->Html->link($value[0]['y_m'], array('action' => $value[0]['y_m'])); ?>
</li>
<?php endforeach ?>
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