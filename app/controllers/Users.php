<?php
    class Users extends Controller {
        private $userModel;

        public function __construct()
        {
            $this->userModel = $this->model('User');
        }
 
        public function register(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $data = [
                    'name' => trim($_POST['name']),
                    'name_err' => '',
                    'email' => trim($_POST['email']),
                    'email_err' => '',
                    'password' => trim($_POST['password']),
                    'password_err' => '',
                    'confirm_password' => trim($_POST['confirm_password']),
                    'confirm_password_err' => '',
                ];

                if (empty($data['name'])) {
                    $data['name_err'] = 'please enter your name';
                }

                $email_pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';

                if (empty($data['email'])) {
                    $data['email_err'] = 'please enter email';
                } else if (preg_match($email_pattern, $data['email']) != 1) {
                    $data['email_err'] = 'invalid email';
                } else if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'email is already taken';
                }

                if (empty($data['password'])) {
                    $data['password_err'] = 'please enter a password';
                }

                if (empty($data['confirm_password'])) {
                    $data['confirm_password_err'] = 'please confirm your password';
                } else if ($data['password'] !== $data['confirm_password']) {
                    $data['confirm_password_err'] = 'passwords do not match';
                }

                if (empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
                    die('SUCCESS');
                } else {
                    $this->view('/users/register', $data);
                }

            } else {
                $data = [
                    'name' => '',
                    'name_err' => '',
                    'email' => '',
                    'email_err' => '',
                    'password' => '',
                    'password_err' => '',
                    'confirm_password' => '',
                    'confirm_password_err' => '',
                ];

                $this->view('/users/register', $data);
            }
        }

        public function login() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                 $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                 $data = [
                    'email' => trim($_POST['email']),
                    'email_err' => '',
                    'password' => trim($_POST['password']),
                    'password_err' => ''
                 ];

                 if(empty($data['email'])) {
                    $data['email_err'] = 'please make sure you enter a valid email';
                 } else {
                    if ($this->userModel->findUserByEmail($data['email'])) {

                    }
                 }

                 if(empty($data['password'])) {
                    $data['password_err'] = 'please enter your password';
                 }

                 if(empty($data['email_err']) && empty($data['password_err'])) {
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                 } else {
                    $this->view('/users/login', $data);
                 }

            } else {
                $data = [
                    'email' => '',
                    'email_err' => '',
                    'password' => '',
                    'password_err' => ''
                ];
;
                $this->view('/users/login', $data);
            }
        }
    }
?>