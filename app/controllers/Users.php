<?php
    class Users extends Controller {
        public function __construct()
        {
            
        }

        public function register(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

            } else {
                $data = [
                    'name' => '',
                    'name_err' => '',
                    'email' => '',
                    'email_err' => '',
                    'password' => '',
                    'password_err' => '',
                    'confirm_password' => '',
                    'confirm_password_err' => ''
                ];

                $this->view('users/register');
            }
        }
    }