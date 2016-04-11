<?php

class Users_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_user($user, $pass) {
        $this->db->count_all_results('users');
        $this->db->where('user', $user);
        $this->db->where('pass', $pass);
        $this->db->from('users');
        $query = $this->db->count_all_results();
        return $query->row_array();
    }

}
