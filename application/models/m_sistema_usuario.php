<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_sistema_usuario extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
		//date_default_timezone_set('America/Lima');
	}

function get_sistemas_by_centro_costo($id){
		$data=array(//formamos arreglo por que se repite el id
			'Id_centro_costo' => $id
		);
		$query = $this->db->get_where('sistema_centro_costo', $data);
		return $query->result_array();//manda el arreglo con los datos de las filas que coinciden con Id_centro_costo
	}
}