<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('login');
	}
	public function menu(){
		//verifica_login();
		$this->load->view('menu');
		$this->load->view('nav');
	}
	public function insert_view(){
		$this->load->view('insert_view');
		$this->load->view('nav');

	}
	public function insert(){
		$this->load->model('Aluno_model','aluno');

		if ($this->db->insert('aluno', $data)) {
			redirect('aluno');
			$this->load->view('msg_sucesso');
		}else{
			$this->load->view('msg_falha');

		}
	}
	
	public function aluno(){
		$this->load->view('nav');
		$this->load->view('aluno');
		
	}
	public function turma(){
		$this->load->view('nav');
		$this->load->view('turma');
	}
	public function disciplina(){
		$this->load->view('nav');
		$this->load->view('disciplina');
	}
	public function professor(){
		$this->load->view('nav');
		$this->load->view('professor');
	}


}




