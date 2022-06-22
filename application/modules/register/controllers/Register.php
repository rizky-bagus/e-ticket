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
		$jk = $this->input->post('gender');
		$nohp = $this->input->post('nohp');
		$now = date('Y-m-d H:i:s');

		//Cek Multiple Nik
		$buyers = $this->GetData->GetBuyer("where nik = '" . $nik . "'");
		if ($buyers->num_rows() > 0) {
			echo "NIK Telah digunakan, Registrasi gagal! <a href='".base_url()."Register/index'>Ok</a>";
		} else {
			$getRoleBuyer = $this->GetData->GetRoles("where name = 'buyer'")->row_array();
			$insertAuth = $this->Crud->InsertData('auths', array(
				'email' 		=> $email,
				'password' 		=> md5($password),
				'status' 		=> "Active",
				'role_id' 		=> $getRoleBuyer['id'],
				'created_at'	=> $now,
				'updated_at'	=> $now
			));
			if ($insertAuth > 0) {
				$getLastBuyer = $this->GetData->GetAuth("order by id desc")->row_array();
				$insertBuyer = $this->Crud->InsertData('buyers', array(
					'auth_id'		=> $getLastBuyer['id'],
					'name'			=> $nama,
					'nik'			=> $nik,
					'address'		=> $alamat,
					'gender'		=> $jk,
					'phone'			=> $nohp,
					'created_at'	=> $now,
					'updated_at'	=> $now
				));
				if ($insertBuyer > 0) {
					echo "Registrasi Berhasil! <a href='".base_url()."Login/index'>Ok</a>";
				} else {
					show_404();
				}
			} else {
				show_404();
			}
		}
	}
}
