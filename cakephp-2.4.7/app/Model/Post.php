<?php
class Post extends AppModel
{
    public $name = 'Post';
    public $hasMany = "Comment";
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty',
            'message' => 'タイトルを記入してください。'
            ),
        'content' => array(
            'rule' => 'notEmpty',
            'message' => '内容を記入してください。')
        );
}
?>