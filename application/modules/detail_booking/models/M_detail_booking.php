<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Detail_booking extends CI_Model{
	function GetHotel($id){
		$data = $this->db->get('hotels');
		return $data;
	}

    function detail_booking($id){
        $this->db->where('id', 1);
        // here we select every column of the table
        $q = $this->db->get('hotels');
        $data = $q->result_array();
        // console.log("idnya", $id);
        // $query = $this->db->query("SELECT * FROM hotels where id='1'");
        // console.log("aaaa", $query->result_array())
        // $data = $query->result_array();
        return $data;
    }
}
?>
