<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_biaya extends CI_Model {


	public function select_all(){
		$this->db->select('*');
		return $this->db->get('tb_biaya');
	}
		
}
