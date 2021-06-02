<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parcours extends CI_Controller {

	

	function __construct()
	{
		parent::__construct();
		$this->load->model('Parcourss');
	}
	function liste()
	{
		$this->load->helper('url');
		$this->load->view('templates/parcours');
	}
	function parcours_crud()
	{
		$action=$this->input->post('action');
		switch ($action) {
			case 'add' :
				$result = $this->Parcourss->add_parcours();
					echo json_encode($result);
				break;

			case 'modal':
				$result = $this->Parcourss->edit_modal();
					echo json_encode($result);
				break;

			case 'update' :
				$result = $this->Parcourss->modifier(); 
					 echo json_encode($result);
				break;

			case 'delete' :
				$result = $this->Parcourss->delete();
					echo json_encode($result);
				break;

			default:
				$result = $this->Parcourss->pagine_Data();
					echo json_encode($result);
				break;
		}
	}

}
?>