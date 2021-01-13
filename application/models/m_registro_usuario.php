<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_registro_usuario extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/Lima');
	}

	function get_all_usuario(){
		/*$query = $this->db->get("v_login");
		return $query->result_array();*/
		return $this->db->get('v_login')->result();
	}

	function get_all_perfil(){
		$query = $this->db->get("tipo_usuario");
		return $query->result_array();
	}
	function get_all_centro_costo(){
		$query = $this->db->get("v_centro_costo_activos");
		return $query->result_array();
	}
	function get_all_sede(){
		$query = $this->db->get("sede");
		return $query->result_array();
	}
	function get_by_base($id){
		$this->db->where("Id_sede",$id);
		$this->db->order_by("Centro_costo", "asc");
		$query =$this->db->get("v_centro_costo_activos");
		return $query->result_array();
	}
	

}?>