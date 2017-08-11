<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insert_ctrl extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('insert_model');
	}

	public function index(){
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="error"><i>', '</i></div>');

		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('cpf', 'CPF', 'trim|required|min_length[11]|max_length[11]');
		$this->form_validation->set_rules('rg', 'RG', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('sexo', 'Sexo', 'trim|required');
		$this->form_validation->set_rules('datanasc', 'Nascimento', 'trim|required');
		$this->form_validation->set_rules('nomemae', 'Nome da Mãe', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('nomepai', 'Nome do Pai', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('telefone', 'Telefone', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('cep', 'CEP', 'trim|required|min_length[7]');
		$this->form_validation->set_rules('rua', 'Rua', 'trim|required');
		$this->form_validation->set_rules('bairro', 'Bairro', 'trim|required');
		$this->form_validation->set_rules('cidade', 'Cidade', 'trim|required');
		$this->form_validation->set_rules('uf', 'UF', 'trim|required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('msg_falha');
			$this->load->view('nav');
			$this->load->view('insert_view');
		}else{
			$data = array(
				'nome' => $this->input->post('nome'),
				'cpf' => $this->input->post('cpf'),
				'rg' => $this->input->post('rg'),
				'sexo' => $this->input->post('sexo'),
				'datanasc' => $this->input->post('datanasc'),
				'nomemae' => $this->input->post('nomemae'),
				'nomepai' => $this->input->post('nomepai'),
				'telefone' => $this->input->post('telefone'),
				'email' => $this->input->post('email'),
				'cep' => $this->input->post('cep'),
				'rua' => $this->input->post('rua'),
				'bairro' => $this->input->post('bairro'),
				'cidade' => $this->input->post('cidade'),
				'uf' => $this->input->post('uf')
				);

			$this->insert_model->form_insert($data);
			$data['message'] = 'Dados Inseridos com Sucesso!';

			$this->load->view('insert_view',$data);
		}
	}
	


}




