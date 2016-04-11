<?php

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
        $this->load->helper('date');
        $this->load->library('session');
    }

//funcion para crear comentario

    public function creaComment() {
        $data['title'] = '';
        $data['slug'] = 'dsfg';
        $this->news_model->set_comment();
        $this->load->view('news/success');
//        $this->load->view('templates/header', $data);
//        $this->load->view('news/view', $data);
//        $this->load->view('templates/footer');
    }
    
//funcion para borrar comentario
    
    public function borrarComment() {
        $this->load->helper('form');
        $this->news_model->del_comment($_POST['id']);

        $this->load->view('news/success');
    }
}