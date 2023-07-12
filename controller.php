<?php

class Controller {

    /**
     * Instancia a classe View como propriedade privada da controller
     */
    private $view;
    public function __construct(){
        $this->view = new View();
    }
    public function do_Register(){
        $this->view->render_view('register');
    }

    public function do_Login(){
        $this->view->render_view('login');
    }

    public function do_Not_Found(){
        http_response_code(404);
        $this->view->render_view('not_found');
    }
}