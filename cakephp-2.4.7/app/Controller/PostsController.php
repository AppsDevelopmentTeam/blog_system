<?php

class PostsController extends AppController
{
	public function index()
	{
		$results = $this->Post->find('all', array('order'=>'created desc'));
		$this->set('results', $results);
	}
}

?>