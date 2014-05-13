<?php
class UsersController extends AppController
{
	public $name = 'Users';
	public $uses = array('User','Post');
	public $components = array('Session');


	public function index()
	{
		$post = $this->Post->find('all', array('order' => 'modified desc'));
		$this->set('posts',$post);
	}


	public function add()
	{
		if(!empty($this->request->data))
		{
			$this->User->set($this->request->data);
			if($this->User->validates())
			{
				$this->Session->write('User.username', $this->request->data['User']['username']);
				$this->Session->write('User.email', $this->request->data['User']['email']);
				$this->Session->write('User.password', $this->request->data['User']['password']);

				$path = IMAGES;
				$image = $this->request->data['User']['picture'];
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
		if(!empty($this->request->data))
		{
			$user = $this->User->find('first', array(
				'conditions' => array(
					'User.email' => $this->request->data['User']['email'],
					'User.password' => $this->request->data['User']['password'])
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

	public function delete($id)
	{
		if ($this->request->is('get'))
		{
			throw new MethodNotAllowedException();
		}
		if ($this->Post->delete($id))
		{
			$this->redirect(array('action'=>'index'));
		} 
	}

}

?>