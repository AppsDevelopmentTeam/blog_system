<?php

class PostsController extends AppController
{
    public $name = 'Posts';
    public $uses = array('Post');
    public $components = array('Session');
    //public $scaffold;

    public function index()
    {
        $this->paginate = array(
            'Post' => array(
                'page' => 1,
                'limit' => 5,
                'order' => 'Post.created desc'),
            );
        $result = $this->paginate('Post');
        $this->set('results', $result);
    }

    public function add()
    {
        $this->Session->read('User.id');
        if(!empty($this->request->data))
        {
            $result = $this->Post->save(array(
                        'Post' => array(
                            'user_id' => $this->Session->read('User.id'),
                            'title' => $this->request->data['Post']['title'],
                            'content' => $this->request->data['Post']['content']
                            )
                        )
                    );
            if($result)
            {
                $this->redirect('../users');
            }
            else
            {
                $this->Post->validationErrors;
            }
        }
    }

    public function edit($id = null)
    {
        $this->Post->id = $id;
        if ($this->request->is('get'))
        {
            $this->request->data = $this->Post->read();
        }
        else
        {
            if($this->Post->save($this->request->data))
            {
                $this->redirect(array('action'=>'../users'));
            }
            else
            {
                $this->Session->setFlash('Failed!');
                $this->Post->validationErrors;
            }
        }
    }


}

?>