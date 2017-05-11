<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __Construct(){
	  parent::__Construct ();
	   $this->load->database(); // load database
$this->load->model('Apoderados_model','apoderado');
	}
	//- See more at: https://arjunphp.com/retrieve-data-database-codeigniter/#sthash.O7TjnKZD.dpuf
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
	public function index()
	{
		//$this->load->helper('form');

		$this->load->view('shared/navbar');
		//$this->load->view('shared/carousel');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->view('Registro_apoderados');
		//$this->load->view('shared/menuizquierdo');
		//$this->data['posts'] = $this->apoderado->ultimosregistros(); // calling Post model method getPosts()
	   //$this->load->view('Home', $this->data); // load the view file , we are passing $data array to view fil

	//- See more at: https://arjunphp.com/retrieve-data-database-codeigniter/#sthash.O7TjnKZD.dpuf
	//	$this->load->view('Home');
		$this->load->view('shared/footer');

	//	$this->Apoderados_model->insert_entry();
	}
	public function insertar(){
		$this->load->model('Apoderados_model','apoderados');
//$this->load->model->('Apoderados_model','apoderados');
$this->apoderados->insertar();


	}
}
