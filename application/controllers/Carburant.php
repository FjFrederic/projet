<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carburant extends CI_Controller {

	

	function __construct()
	{
		parent::__construct();
		$this->load->model('Carburants');
	}
	function liste()
	{
		$this->load->helper('url');
		$this->load->view('templates/carburant');
	}
	function carburant_crud()
	{
		$action=$this->input->post('action');
		switch ($action) {
			case 'add' :
				$result = $this->Carburants->add_carburant();
					echo json_encode($result);
				break;

			case 'modal':
				$result = $this->Carburants->edit_modal();
					echo json_encode($result);
				break;

			case 'update' :
				$result = $this->Carburants->modifier(); 
					 echo json_encode($result);
				break;

			case 'delete' :
				$result = $this->Carburants->delete();
					echo json_encode($result);
				break;

			default:
				$result = $this->Carburants->pagine_Data();
					echo json_encode($result);
				break;
		}
	}

}
?>