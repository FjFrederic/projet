<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chauffeur extends CI_Controller {

	

	function __construct()
	{
		parent::__construct();
		$this->load->model('Chauffeurs');
	}
	function liste()
	{
		$this->load->helper('url');
		$this->load->view('templates/chauffeur');
	}
	function chauffeur_crud()
	{
		$action=$this->input->post('action');
		switch ($action) {
			case 'add' :
				$result = $this->Chauffeurs->add_chauffeur();
					echo json_encode($result);
				break;

			case 'modal':
				$result = $this->Chauffeurs->edit_modal();
					echo json_encode($result);
				break;

			case 'update' :
				$result = $this->Chauffeurs->modifier(); 
					 echo json_encode($result);
				break;

			case 'delete' :
				$result = $this->Chauffeurs->delete();
					echo json_encode($result);
				break;

			default:
				$result = $this->Chauffeurs->pagine_Data();
					echo json_encode($result);
				break;
		}
	}

}
?>