<?php
class Pages extends Controller
{
    public function __construct()
    {
        echo '<br/> Pages Loaded! <br/>';
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
