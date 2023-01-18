<?php 
    class Pages {
        public function __construct()
        {
            echo 'Pages Loaded!';
        }

        public function create($user){
            echo '<br/>';
            echo 'create the user: ' . $user;
        }
    }