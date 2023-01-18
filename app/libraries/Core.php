<?php

    class Core {
        protected $currentController = "Pages";
        protected $currentMethod = "index";
        protected $params = [];

        public function __construct()
        {
            $url = $this->getUrl();
            //check if controller exists -> set variable
            if($url && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }
            // require the controller -> intialize it
            require_once '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;
            // check if method exists -> set variable
            if(isset($url[1])){
                if(method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];
                }
            }
            // check if params exist 
            $this->params = $url ? array_values($url) : [];
            // call method inside the controller with the params
            call_user_func_array([$this->currentController, $this->currentMethod], 
            $this->params);
        }

        public function getUrl() {
            if(isset($_GET['url'])) {
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
    }