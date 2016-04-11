<?php

class News_model extends CI_Model {

    public function __construct() {
        $this->load->helper('date');
        $this->load->database();
    }
//get de todos los articulos
    public function get_news($slug = FALSE) {
        if ($slug === FALSE) {
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get('articulos');
            return $query->result_array();
        }

        $query = $this->db->get_where('articulos', array('slug' => $slug));
        return $query->row_array();
    }
//geter de los últimos 5 articulos
    public function get_last_news() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('articulos', 5);
        return $query->result_array();
    }
//seter de articulo
    public function set_news() {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        if ($_POST['autor'] !== '') {
            $user = $this->input->post('autor');
        } else {
            $user = 'anonimo';
        }
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'autor' => $user,
            'fecha' => standard_date('DATE_W3C', now()),
            'text' => $this->input->post('text')
        );
        return $this->db->insert('articulos', $data);
    }
//eliminar articulo
    public function del_news($id) {
        $this->db->where('id', $id);
        return $this->db->delete('articulos');
    }

    public function get_user() {

        $user = $this->input->post('user');
        $pass = $this->input->post('pass');

        $this->db->count_all_results('users');
        $this->db->where('user', $user);
        $this->db->where('pass', $pass);
        $this->db->from('users');
        $query = $this->db->count_all_results();
        return $query;
    }
//seter de comentario
    public function set_comments() {
        $this->load->helper('url');
        $date = mdate('%Y-%m-%d', time());
        if ($_POST['user'] !== '') {
            $user = $this->input->post('user');
        } else {
            $user = 'anonimo';
        }
        $data = array(
            'idArticulo' => $this->input->post('idArt'),
            'user' => $user,
            'fecha' => $date,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('comentarios', $data);
    }
//geter de comentarios
    public function get_comments($id) {
        $query = $this->db->get_where('comentarios', array('idArticulo' => $id));
        return $query->result_array();
    }
//eliminar comentario
    public function del_comments($id) {
        $this->db->where('id', $id);
        return $this->db->delete('comentarios');
    }

}
