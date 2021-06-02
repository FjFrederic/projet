<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicule extends CI_Controller {

	

	function __construct()
	{
		parent::__construct();
		$this->load->model('Vehicules');
	}
	function liste()
	{
		$this->load->helper('url');
		$this->load->view('templates/vehicule');
	}
	function vehicule_crud()
	{
		$action=$this->input->post('action');
		switch ($action) {
			case 'add' :
				$result = $this->Vehicules->add_vehicule();
					echo json_encode($result);
				break;

			case 'modal':
				$result = $this->Vehicules->edit_modal();
					echo json_encode($result);
				break;

			case 'update' :
				$result = $this->Vehicules->modifier(); 
					 echo json_encode($result);
				break;

			case 'delete' :
				$result = $this->Vehicules->delete();
					echo json_encode($result);
				break;

			case 'disponibilite' :
				$result = $this->Vehicules->changeStatus();
					echo json_encode($result);
				break;

			case 'nonDisponible' :
				$result = $this->Vehicules->pagine_DataNondispo();
					echo json_encode($result);
				break;

			case 'disponible' :
				$result = $this->Vehicules->pagine_DataDisponible();
					echo json_encode($result);
				break;

				
				default:
				$result = $this->Vehicules->pagine_Data();
					echo json_encode($result);
				break;
		}
	}

	function liste2()
	{
		$this->load->helper('url');
		$this->load->view('templates/vehiculeDispo');
	}

	function liste3()
	{
		$this->load->helper('url');
		$this->load->view('templates/vehiculeNonDispo');
	}


}
?>