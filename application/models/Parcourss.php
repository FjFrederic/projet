<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parcourss extends CI_Model {

	var $table = "parcours";
	var $select_column = array("Id","DateSaisi","DateParcours","Vehicule","KmDebut","KmFin","KmVille","KmMission","KmParcours");
	var $order_column = array("Id","DateSaisi","DateParcours","Vehicule","KmDebut","KmFin","KmVille","KmMission","KmParcours",NULL);
		
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
			$this->db->or_like("DateParcours", $_POST['search']['value']);
			$this->db->or_like("KmDebut", $_POST['search']['value']);
			$this->db->or_like("KmFin", $_POST['search']['value']);
			$this->db->or_like("KmVille", $_POST['search']['value']);
			$this->db->or_like("KmMission", $_POST['search']['value']);
			$this->db->or_like("KmParcours", $_POST['search']['value']);
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
			$empRows[] = $row->DateParcours;	
			$empRows[] = $row->Vehicule;
			$empRows[] = $row->KmDebut;
			$empRows[] = $row->KmFin;	
			$empRows[] = $row->KmVille;
			$empRows[] = $row->KmMission;
			$empRows[] = $row->KmParcours;						
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
	function add_parcours()
	{		
		$form = array();
		//$form['Id']=$this->input->post('parcours');
		$form['DateSaisi']=$this->input->post('DateSaisi');
		$form['DateParcours']=$this->input->post('DateParcours');
		$form['Vehicule']=$this->input->post('Vehicule');
		$form['KmDebut']=$this->input->post('KmDebut');
		$form['KmFin']=$this->input->post('KmFin');
		$form['KmVille']=$this->input->post('KmVille');
		$form['KmMission']=$this->input->post('KmMission');
		$form['KmParcours']=$this->input->post('KmParcours');
		$result=$this->db->insert('parcours',$form);
		return $result;
	}

	//MODAL
	function edit_modal()
	{
		$id=$this->input->post('id');
		$this->db->where('Id', $id);
		$query = $this->db->get('parcours');
		if ($query->num_rows() > 0) {return $query->row();}
		else {return false;}
	}

	//MODIFIER
	function modifier()
	{
		$id=$this->input->post('parcours');
		$form = array();
		$form['Id']=$this->input->post('parcours');
		$form['DateSaisi']=$this->input->post('DateSaisi');
		$form['DateParcours']=$this->input->post('DateParcours');
		$form['Vehicule']=$this->input->post('Vehicule');
		$form['KmDebut']=$this->input->post('KmDebut');
		$form['KmFin']=$this->input->post('KmFin');
		$form['KmVille']=$this->input->post('KmVille');
		$form['KmMission']=$this->input->post('KmMission');
		$form['KmParcours']=$this->input->post('KmParcours');
		//var_dump($form);die();
		$this->db->where('Id', $id);
		$result = $this->db->update('parcours', $form);
			return $result;

	}

	//SUPPRIMER
	function delete()
	{
		$id=$this->input->post('id');
		$this->db->where('Id', $id);
		$result = $this->db->delete('parcours');
			return $result;
	}
}
?>