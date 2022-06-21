<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {
    public function __construct()
    {
        // Load the constructer from MY_Controller
		$this->load->model('Crud');
		$this->load->model('GetData');
        parent::__construct();
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function index()
	{
        //
		$this->load->view('register');
	}
	public function DoRegister()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$cpassword = $this->input->post('cpassword');
		$nik = $this->input->post('nik');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$nohp = $this->input->post('nohp');
		$now = date('Y-m-d H:i:s');

		//Cek Multiple Nik
		$buyers = $this->GetData->GetBuyer("where nik = '" . $nik . "'");
		if ($buyers->num_rows() > 0) {
			$this->session->set_flashdata('VTarif', "<div class='alert alert-danger'>NIK Telah digunakan!</div>");
			header('location:'.base_url().'Register/index');
		} else {
			$res = $this->Crud->InsertData('buyers', array(
				'name'			=> $nama,
				'nik'			=> $nik,
				'address'		=> $tarif,
				'gender'		=> $jk,
				'phone'			=> $nohp,
				'created_at'	=> $now,
				'updated_at'	=> $now,
			));
			if ($res > 0) {
				$this->session->set_flashdata('VTarif', "<div class='alert alert-success'>Register Berhasil!</div>");
				header('location:'.base_url().'Register/index');
			} else {
				show_404();
			}
		}
	}
}
