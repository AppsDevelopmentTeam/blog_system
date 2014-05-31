<?php

class PostsController extends AppController
{
    public $name = 'Posts';
    public $uses = array('Post');
    public $components = array('Session');
    //public $scaffold;

    public function index()
    {
        // ページネーション
        $this->paginate = array(
            'Post' => array(
                'page' => 1,
                'limit' => 5,
                'order' => 'Post.created desc')
            );
        $results = $this->paginate('Post');
        $this->set('results', $results);

        // 月別アーカイブ
        $query = "SELECT DATE_FORMAT(Post.created, '%Y') AS y, DATE_FORMAT(Post.created, '%m') AS m, COUNT(*)
            FROM myblog.posts AS Post
            GROUP BY DATE_FORMAT(Post.created, '%Y%m')
            ORDER BY Post.created DESC";
                                 
        $date = $this->Post->query($query);
        $this->set('date', $date);
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

    public function view($id = null)
    {
        $this->Post->id = $id;
        $this->set('post',$this->Post->read());
    }

    public function year()
    {
        $year = $this->request->params['year'];
    }

    public function archive()
    { 
        $year_month = $this->request->params['year_month'];
        $results = $this->Post->find('all', array(
            'order' => 'created desc',
            'conditions' => array(
                    'created between ? and ?' => array($year_month. '01', $year_month. '31')
                ),
            ));
        $this->set('results', $results);
    }

}

?>