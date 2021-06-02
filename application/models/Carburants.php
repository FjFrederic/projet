<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carburants extends CI_Model {

	var $table = "carburant";
	var $select_column = array("Id","DateSaisi","DateAjout","Vehicule","CarburantVille","CarburantMission","PrixUnit","MontantVille","MontantMission","MontantTotal");
	var $order_column = array("Id","DateSaisi","DateAjout","Vehicule","CarburantVille","CarburantMission","PrixUnit","MontantVille","MontantMission","MontantTotal",NULL);
		
	function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	//DATATABLE {
	//RECHERCHE DONNEES
	function search_Data()
	{
		$this->db->select($this->select_column);
		$this->db->from($this->table);
		if(isset($_POST['search']['value']))
		{
			$this->db->like("Vehicule", $_POST['search']['value']);
            $this->db->or_like("Id", $_POST['search']['value']);
			$this->db->or_like("DateSaisi", $_POST['search']['value']);
			$this->db->or_like("DateAjout", $_POST['search']['value']);
			$this->db->or_like("CarburantVille", $_POST['search']['value']);
			$this->db->or_like("CarburantMission", $_POST['search']['value']);
			$this->db->or_like("PrixUnit", $_POST['search']['value']);
			$this->db->or_like("MontantVille", $_POST['search']['value']);
			$this->db->or_like("MontantMission", $_POST['search']['value']);
			$this->db->or_like("MontantTotal", $_POST['search']['value']);
		}
		if(isset($_POST['order']))
		{
			$this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else
		{
			$this->db->order_by('Id','ASC');
		}
	}
	//PAGINATION ET AFFICHAGE
	function pagine_Data()
	{
		$this->search_Data();
		if($_POST["length"] !=-1)
		{
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get()->result();
		$employeeData = array();	
		foreach ($query as $row) {
			$empRows = array();			
			$empRows = array();			
			$empRows[] = $row->Id;
			$empRows[] = ucfirst($row->DateSaisi);
			$empRows[] = $row->DateAjout;	
			$empRows[] = $row->Vehicule;
			$empRows[] = $row->CarburantVille;
			$empRows[] = $row->CarburantMission;	
			$empRows[] = $row->PrixUnit;
			$empRows[] = $row->MontantVille;
			$empRows[] = $row->MontantMission;
			$empRows[] = $row->MontantTotal;						
			$empRows[] = '<button type="button" class="btn btn-warning btn-sm editer" id="'.$row->Id.'" data-toggle="modal" data-target="#modal-warning"><span class="glyphicon glyphicon-pencil"></span></button>
						<button type="button" class="btn btn-danger btn-sm supprimer" id="'.$row->Id.'" id1="'.$row->Vehicule.'" ><span class="glyphicon glyphicon-trash"></span></button>';
		$employeeData[] = $empRows;
		}
		$output = array(
			"draw"				=>	intval($_POST['draw']),
			"recordsTotal"  	=>  $this->get_all_data(),
			"recordsFiltered" 	=> 	$this->get_filtered_data(),
			"data"    			=> 	$employeeData
		);
		return $output;
	}
	//DONNEES FILTREES
	function get_filtered_data()
	{
		$this->search_Data();
		$query = $this->db->get();
		return $query->num_rows();
	}
	//TOUS LES DONNEES DU SELECT
	function get_all_data()
	{
		$this->db->select("*");
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	//AJOUTER UN CARBURANT
	function add_carburant()
	{		
		$form = array();
		//$form['Id']=$this->input->post('carburant');
		$form['DateSaisi']=$this->input->post('DateSaisi');
		$form['DateAjout']=$this->input->post('DateAjout');
		$form['Vehicule']=$this->input->post('Vehicule');
		$form['CarburantVille']=$this->input->post('CarburantVille');
		$form['CarburantMission']=$this->input->post('CarburantMission');
		$form['PrixUnit']=$this->input->post('PrixUnit');
		$form['MontantVille']=$this->input->post('MontantVille');
		$form['MontantMission']=$this->input->post('MontantMission');
		$form['MontantTotal']=$this->input->post('MontantTotal');
		$result=$this->db->insert('carburant',$form);
		return $result;
	}

	//MODAL
	function edit_modal()
	{
		$id=$this->input->post('id');
		$this->db->where('Id', $id);
		$query = $this->db->get('carburant');
		if ($query->num_rows() > 0) {return $query->row();}
		else {return false;}
	}

	//MODIFIER
	function modifier()
	{
		$id=$this->input->post('carburant');
		$form = array();
		//$form['Id']=$this->input->post('carburant');
		$form['DateSaisi']=$this->input->post('DateSaisi');
		$form['DateAjout']=$this->input->post('DateAjout');
		$form['Vehicule']=$this->input->post('Vehicule');
		$form['CarburantVille']=$this->input->post('CarburantVille');
		$form['CarburantMission']=$this->input->post('CarburantMission');
		$form['PrixUnit']=$this->input->post('PrixUnit');
		$form['MontantVille']=$this->input->post('MontantVille');
		$form['MontantMission']=$this->input->post('MontantMission');
		$form['MontantTotal']=$this->input->post('MontantTotal');
		$this->db->where('Id', $id);
		$result = $this->db->update('carburant', $form);
			return $result;

	}

	//SUPPRIMER
	function delete()
	{
		$id=$this->input->post('id');
		$this->db->where('Id', $id);
		$result = $this->db->delete('carburant');
			return $result;
	}
}
?>