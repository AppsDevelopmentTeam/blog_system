<?php
class UsersController extends AppController
{
	public $name = 'Users';
	public $uses = array('User','Post');
	public $components = array('Session');


	public function index()
	{
		/*
		$this->Session->read('User.id');
		if(!empty($this->data))
		{
			$this->Post->set($this->data);
			if($this->Post->validates())
			{
				$this->Post->save(
					array(
						'Post' => array(
							'user_id' => $this->Session->read('User.id'),
							'title' => $this->data['Post']['title'],
							'content' => $this->data['Post']['content']
							)
						)
					);
				$this->redirect('/posts');
			}
		}
		*/
	}


	public function add()
	{
		if(!empty($this->data))
		{
			$this->User->set($this->data);
			if($this->User->validates())
			{
				$this->Session->write('User.username', $this->data['User']['username']);
				$this->Session->write('User.email', $this->data['User']['email']);
				$this->Session->write('User.password', $this->data['User']['password']);

				$path = IMAGES;
				$image = $this->data['User']['picture'];
				move_uploaded_file($image['tmp_name'], $path . DS . $image['name']);
				$this->Session->write('User.picture', $image['name']);
				$this->redirect('check');
			}
		}	
	}


	public function check()
	{

	}


	public function thanks()
	{
		$this->User->save($this->Session->read());
	}


	public function login()
	{
		if(!empty($this->data))
		{
			$user = $this->User->find('first', array(
				'conditions' => array(
					'User.email' => $this->data['User']['email'],
					'User.password' => $this->data['User']['password'])
				)
			);
			if($user)
			{
				$this->Session->write('User.id', $user['User']['id']);
				$this->redirect('/posts');
			} else {
				$this->Session->setFlash('ログインに失敗しました。');
			}
		}

	}


	public function logout()
	{
		$this->Session->destroy();
	}

}

?>