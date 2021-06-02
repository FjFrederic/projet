<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entretien extends CI_Controller {

	

	function __construct()
	{
		parent::__construct();
		$this->load->model('Entretiens');
	}
	function liste()
	{
		$this->load->helper('url');
		$this->load->view('templates/entretien');
	}
	function entretien_crud()
	{
		$action=$this->input->post('action');
		switch ($action) {
			case 'add' :
				$result = $this->Entretiens->add_entretien();
					echo json_encode($result);
				break;

			case 'modal':
				$result = $this->Entretiens->edit_modal();
					echo json_encode($result);
				break;

			case 'update' :
				$result = $this->Entretiens->modifier(); 
					 echo json_encode($result);
				break;

			case 'delete' :
				$result = $this->Entretiens->delete();
					echo json_encode($result);
				break;

			default:
				$result = $this->Entretiens->pagine_Data();
					echo json_encode($result);
				break;
		}
	}

}
?>