<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}
	public function Simpan($table, $data){
		return $this->db->insert($table, $data);
	}
	public function getUserByUsername($where,$tabel){
		$query = $this->db->get_where($tabel,$where);
		$result= $query->num_rows();

		if ($result==1){
			return true;
		}else{
			return false;
		}
	}
}