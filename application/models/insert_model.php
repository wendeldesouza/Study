<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class insert_model extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function form_insert($data){
// Inserting in Table(aluno) of Database(syschool)
		$this->db->insert('aluno', $data);
		$this->load->view('msg_sucesso');
		$this->load->view('nav');
	}

	
}
?>