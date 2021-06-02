<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicules extends CI_Model {

	var $table = "vehicule";
	var $select_column = array("Id","Referance","CodImmo","NumMatricule","NomChauff","DebutKm","KmActuel","KmRestant","DateVisite","DateProchVisite","Disponibilite");
	var $order_column = array("Id","Referance","CodImmo","NumMatricule","NomChauff","DebutKm","KmActuel","KmRestant","DateVisite","DateProchVisite","Disponibilite");
		
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
			$this->db->like("Referance", $_POST['search']['value']);
			$this->db->or_like("Id", $_POST['search']['value']);
			$this->db->or_like("CodImmo", $_POST['search']['value']);
			$this->db->or_like("NumMatricule", $_POST['search']['value']);
			$this->db->or_like("NomChauff", $_POST['search']['value']);
			$this->db->or_like("DebutKm", $_POST['search']['value']);
			$this->db->or_like("KmActuel", $_POST['search']['value']);
			$this->db->or_like("KmRestant", $_POST['search']['value']);
			$this->db->or_like("DateVisite", $_POST['search']['value']);
			$this->db->or_like("DateProchVisite", $_POST['search']['value']);
		}
		if(isset($_POST['order']))
		{
			$this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else
		{
			$this->db->order_by('Referance','ASC');
		}
	}

	//RECHERCHE VEHICULE DISPONIBLE
	function searchVehiculeDisponible()
	{
		$this->db->select($this->select_column);
		$this->db->from($this->table);
		if(isset($_POST['search']['value']))
		{
			$this->db->where("Disponibilite", 0);
		}
		if(isset($_POST['order']))
		{
			$this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else
		{
			$this->db->order_by('Referance','ASC');
		}
	}

	//RECHERCHE VEHICULE NON DISPONIBLE
	function searchVehiculeNoDisponible()
	{
		$this->db->select($this->select_column);
		$this->db->from($this->table);
		if(isset($_POST['search']['value']))
		{
			$this->db->where("Disponibilite", 1);
		}
		if(isset($_POST['order']))
		{
			$this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else
		{
			$this->db->order_by('Referance','ASC');
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
			$disponibilite = $row->Disponibilite;
			if($disponibilite ==="0"){
				$display="block";
			}else{
				$display="none";
			}
			$empRows = array();			
			$empRows = array();			
			$empRows[] = $row->Id;
			$empRows[] = ucfirst($row->Referance);
			$empRows[] = $row->CodImmo;	
			$empRows[] = $row->NumMatricule;
			$empRows[] = $row->NomChauff;
			$empRows[] = $row->DebutKm;	
			$empRows[] = $row->KmActuel;
			$empRows[] = $row->KmRestant;
			$empRows[] = $row->DateVisite;
			$empRows[] = $row->DateProchVisite;				
			$empRows[] = '<button type="button" class="btn btn-warning btn-sm editer" id="'.$row->Id.'" data-toggle="modal" data-target="#modal-warning"><span class="glyphicon glyphicon-pencil"></span></button>
						<button type="button" class="btn btn-danger btn-sm supprimer" id="'.$row->Id.'" id1="'.$row->Referance.'" ><span class="glyphicon glyphicon-trash"></span></button>';
			$empRows[] = '<a style="display:'.$display.'" href="liste3" class="btn btn-primary" onclick="disponibilite('.$row->Id.','.$row->Disponibilite.')";>Mission</a>';
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

	//PAGINATION ET AFFICHAGE VEHICULE NON DISPONIBLE
	function pagine_DataNondispo()
	{
		$this->searchVehiculeNoDisponible();
		if($_POST["length"] !=-1)
		{
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get()->result();
		$employeeData = array();	
		foreach ($query as $row) {
			$disponibilite = $row->Disponibilite;
			if($disponibilite ==="1"){
				$display="block";
			}else{
				$display="none";
			}
			$empRows = array();		
			$empRows = array();			
			$empRows[] = $row->Id;
			$empRows[] = ucfirst($row->Referance);
			$empRows[] = $row->CodImmo;	
			$empRows[] = $row->NumMatricule;
			$empRows[] = $row->NomChauff;
			$empRows[] = $row->DebutKm;	
			$empRows[] = $row->KmActuel;
			$empRows[] = $row->KmRestant;
			$empRows[] = $row->DateVisite;
			$empRows[] = $row->DateProchVisite;					
			$empRows[] = '<a style="display:'.$display.'" class="btn btn-primary" onclick="disponibilite('.$row->Id.','.$row->Disponibilite.')";>Fin mission</a>';
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
	
	//PAGINATION ET AFFICHAGE VEHICULE DISPONIBLE
	function pagine_DataDisponible()
	{
		$this->searchVehiculeDisponible();
		if($_POST["length"] !=-1)
		{
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get()->result();
		$employeeData = array();	
		foreach ($query as $row) {
			$disponibilite = $row->Disponibilite;
			if($disponibilite ==="0"){
				$display="block";
			}else{
				$display="none";
			}
			$empRows = array();		
			$empRows = array();			
			$empRows[] = $row->Id;
			$empRows[] = ucfirst($row->Referance);
			$empRows[] = $row->CodImmo;	
			$empRows[] = $row->NumMatricule;
			$empRows[] = $row->NomChauff;
			$empRows[] = $row->DebutKm;	
			$empRows[] = $row->KmActuel;
			$empRows[] = $row->KmRestant;
			$empRows[] = $row->DateVisite;
			$empRows[] = $row->DateProchVisite;					
			$empRows[] = '<a style="display:'.$display.'" class="btn btn-primary" onclick="disponibilite('.$row->Id.','.$row->Disponibilite.')";>Mission</a>';
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

	//AJOUTER UN VEHICULE
	function add_vehicule()
	{		
		$form = array();
		$form['Referance']=$this->input->post('Referance');
		$form['CodImmo']=$this->input->post('CodeImmo');
		$form['NumMatricule']=$this->input->post('NumMatricule');
		$form['NomChauff']=$this->input->post('NomChauff');
		$form['DebutKm']=$this->input->post('DebutKm');
		$form['KmActuel']=$this->input->post('kmActuel');
		$form['KmRestant']=$this->input->post('KmRestant');
		$form['DateVisite']=$this->input->post('DateVisite');
		$form['DateProchVisite']=$this->input->post('DateProchVisite');
		$result=$this->db->insert('vehicule',$form);
		return $result;
	}

	//MODAL
	function edit_modal()
	{
		$id=$this->input->post('id');
		$this->db->where('Id', $id);
		$query = $this->db->get('vehicule');
		if ($query->num_rows() > 0) {return $query->row();}
		else {return false;}
	}

	//MODIFIER
	function modifier()
	{
		$id=$this->input->post('vehicule');
		$form = array();
		$form['Referance']=$this->input->post('Referance');
		$form['CodImmo']=$this->input->post('CodeImmo');
		$form['NumMatricule']=$this->input->post('NumMatricule');
		$form['NomChauff']=$this->input->post('NomChauff');
		$form['DebutKm']=$this->input->post('DebutKm');
		$form['KmActuel']=$this->input->post('KmActuel');
		$form['KmRestant']=$this->input->post('KmRestant');
		$form['DateVisite']=$this->input->post('DateVisite');
		$form['DateProchVisite']=$this->input->post('DateProchVisite');
		$this->db->where('Id', $id);
		$result = $this->db->update('vehicule', $form);
		return $result;

	}

	//MODIFIER DISPONIBILITE
	function changeStatus()
	{

		$id = $this->input->post('id');
		$disponibilite = $this->input->post('disponibilite');
		if($disponibilite === "0"){
			$this->db->set('Disponibilite', 1);
		}else{
			$this->db->set('Disponibilite', 0);
		};
		$this->db->where('id', $id);
		$result = $this->db->update('vehicule');
		return $result;

	}

	//SUPPRIMER
	function delete()
	{
		$id=$this->input->post('id');
		$this->db->where('Id', $id);
		$result = $this->db->delete('vehicule');
		return $result;
	}

}
?>