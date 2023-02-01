<?php
class Pages extends Controller
{
    public $postModel;

    public function __construct()
    {
        
    }

    public function index($id = null)
    {
        $this->view('/pages/about', ['title' => $id]);
    }

    public function create($user)
    {
        $this->view('/pages/create', ['user' => $user, 'title' => 'create']);
    }
}
