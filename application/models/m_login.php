<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_login extends CI_Model
{
	function __construct(){
		parent::__construct();
		//carga la base de datos 
		$this->load->database();
	}
	function validate($email,$pwd){
		//donde el parametro de email y contraseña que se obtiene de controller coincide con el de la vista v_login
		$this->db->where('Email',$email);
		$this->db->where('Password',$pwd);
		//v_login de db siga
		$query = $this->db->get('v_login');
		//$detalle=$query->result_array();
		//retorna los siguiente
		if($query->num_rows() == 1){
		 	return $query->row();
		 	//echo "ingresa";
		 	/*foreach($detalle as $row)
		 		{echo $row['id_centro_costo'];}*/
		} else{
		 	$this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
		 	//redirect('http://161.132.98.20:8080/logistica/index.php/login','refresh');
		 	redirect($this->config->item('ip').'siga/index.php/login','refresh');
		}
	}

	function registrar($post){
		$email=strtolower(substr($post['nombre'], 0, 1)).strtolower($post['apellido_paterno']).'@vipusa.pe';
		$data=array(
			'Nombre' => $post['nombre'],
			'Apellido_paterno' => $post['apellido_paterno'],
			'Apellido_materno' => $post['apellido_materno'],
			'Dni' => $post['dni'],
			'Email' => $email,
			'Id_centro_costo' => $post['id_area'],
			'Perfil' => 1,
			'Password' => $post['password'],
			'Estado' => 1,
			'Abreviatura' => strtoupper(substr($post['nombre'], 0, 1)).strtoupper($post['apellido_paterno'])
		);
		if ($post['id_area']=='2012' || $post['id_area']=='3002' || $post['id_area']=='4004' || $post['id_area']=='5009') {
			$data['Perfil'] =10;
		}else if ($post['id_area']=='4003' || $post['id_area']=='5006') {
			$data['Perfil'] =11;
		}
		$this->db->insert('usuario',$data);
		return $email;
	}

	function get_detail($id){
		$this->db->where('id_centro_costo', $id);//donde el id obtenido coinciden con id_centro_costo de la tabla sistema_centro_costo obtiene los datos y los devuelve en arreglo.		
		$query=$this->db->get('sistema_centro_costo');
		return $query->result_array();		
	}
}