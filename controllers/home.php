<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public $page = array ( "pagetitle" => "Dashboard",
							"nav" => 'final/navheader',
							"template" => 'template/body');
	function __construct()
	{
	  parent::__construct();
	  $this->load->helper('security');
	
	}
	
	public function index()
	{
		$page = $this->page;	
		
		$page['main'] = 'home';
		
		$this->load->view($page['template'], $page);
		
	}
	
	public function login()
	{
		if($this->auth->is_loggedin() == TRUE)
		redirect(base_url());
		$page = $this->page;
		if($_POST){
			if($this->auth->login($this->input->post('email'), $this->input->post('password')) === TRUE)
			redirect(base_url());
		}
		
		$this->load->view('template/login', $page);
		
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */