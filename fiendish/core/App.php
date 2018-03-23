<?php

class mainApp {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = '';

    public function __construct() {
        $url = $this->getUrl();
        if (isset($url[0])) {
            if (file_exists(ROOT . '/fiendish/controllers/' . $url[0] . '.php')) {
                include ROOT . '/fiendish/controllers/' . $url[0] . '.php';
                $this->controller = $url[0];
                $this->controller = new $this->controller;
                unset($url[0]);
                if (isset($url[1])) {
                    if(method_exists($this->controller, $url[1])){
                        $this->method = $url[1];
                        unset($url[1]);
                    }
                }
                $this->params = $url ? array_values($url) : [];
                call_user_func_array([$this->controller,$this->method], $this->params);
            }
        }
    }

    private function getUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

}
