<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Landing extends CI_Model{
	function GetHotel(){
		$data = $this->db->get('hotels');
		return $data;
	}
}
?>
