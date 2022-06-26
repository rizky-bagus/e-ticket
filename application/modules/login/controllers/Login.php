<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // Load the constructer from MY_Controller
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
        $this->load->view('login');
	}

	public function actionLogin()
	{
        $email = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$dataBuyer = $this->db->query("SELECT b.id as BuyerId, a.id as AuthId, b.name as Name, a.email as Email, a.status as Status, b.phone as Phone FROM `buyers` b inner join `auths` a on b.auth_id = a.id WHERE a.email = '".$email."' and a.password = '".$password."';")->row_array();
		if ($dataBuyer != NULL) {
			if ($dataBuyer['Status'] == "Active") {
				$this->session->set_userdata('buyerId', $dataBuyer['BuyerId']);
				$this->session->set_userdata('authId', $dataBuyer['AuthId']);
				$this->session->set_userdata('email', $dataBuyer['Email']);
				$this->session->set_userdata('phone', $dataBuyer['Phone']);
				$this->session->set_userdata('name', $dataBuyer['Name']);

				header('location: '.base_url().'landing');
			}
		} else {
			echo "Login Failed. Username/Password is not correct! <a href='".base_url()."login'>Back</a>";
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		header('location:'.base_url());
	}
}
