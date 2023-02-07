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

    public function mainPage($user)
    {
        $this->view('/pages/mainpage', ['user' => $user, 'title' => 'Main Page']);
    }
}
