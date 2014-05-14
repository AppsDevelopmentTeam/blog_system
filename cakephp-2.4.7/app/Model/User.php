<?php
class User extends AppModel
{
    public $name = 'User';
    public $validate = array(
        'username' => array(
            'rule' => 'notEmpty',
            'message' => 'ユーザー名を入力してください。'
            ),
        'email' => array(
            'rule' => 'notEmpty',
            'message' => 'メールアドレスを入力してください。'
            ),
        'password' => array(
            'rule' => 'notEmpty',
            'message' => 'パスワードを入力してください。'
            )
        );
}
?>