<?php

class PostsController extends AppController
{
	public $name = 'Posts';
	public $uses = array('Post');
	public $components = array('Session');
	//public $scaffold;

	public function index()
	{
		// $results = $this->Post->find('all', array('order'=>'created desc'));
		// $this->set('results', $results);
		$this->Session->read('User.id');
		if(!empty($this->data))
		{
			$result = $this->Post->save(array(
						'Post' => array(
							'user_id' => $this->Session->read('User.id'),
							'title' => $this->data['Post']['title'],
							'content' => $this->data['Post']['content']
							)
						)
					);
			if($result)
			{
				$this->redirect('/posts');
			}
			else
			{
				$this->Post->validationErrors;
			}
		}
	}

}

?>