<?php


class HospitalsController extends CI_Controller {

	public $page = array ( "pagetitle" => "Hospitals",
							"template" => 'template/body',
							"module" => 'Hospitals');

    public function __construct() {
        parent::__construct();
        $this->load->model('Hospitals');
        $this->load->model('Specialization');
        $this->load->library('session');
        }
	
	/*
    function for  Module.
    return all Modules.
    created by your name
    created at 28-08-12.
    */
	public function index(){
		$page = $this->page;
        $page["hospitalss"] = $this->Hospitals->getAll();
		$page['main'] = 'hospitals/overview-hospitals';
        $this->load->view($page['template'], $page);
	}
	
    /*
    function for manage Hospitals.
    return all Hospitalss.
    created by your name
    created at 12-08-16.
    */
    public function manageHospitals() { 

        $data["hospitalss"] = $this->Hospitals->getAll();
        $this->load->view('hospitals/manage-hospitals', $data);
    
    }
    /*
    function for  add Hospitals get
    created by your name
    created at 12-08-16.
    */
    public function addHospitals() {

		$page = $this->page;
		$page['main'] = 'hospitals/add-hospitals';
        $this->load->view($page['template'], $page);

    }
    /*
    function for add Hospitals post
    created by your name
    created at 12-08-16.
    */
    public function addHospitalsPost() {
		$data['hospital_type_id'] = $this->input->post('hospital_type');
		$data['hospital_name'] = $this->input->post('hospital_name');
		$data['hospital_address'] = $this->input->post('hospital_address');
		$data['status'] = 1;
			   
		$this->Hospitals->insert($data);
        $this->session->set_flashdata('success', 'Hospital added Successfully');
        redirect('hospitals');
    }
    /*
    function for edit Hospitals get
    returns  Hospitals by id.
    created by your name
    created at 12-08-16.
    */
    public function editHospitals($hospital_id) {
		$page = $this->page;
        $page['hospital_id'] = $hospital_id;
        $page['hospital'] = $this->Hospitals->getDataById($hospital_id);
        $page['main'] = 'hospitals/edit-hospitals';
        $this->load->view($page['main'], $page);
    }
    /*
    function for edit Hospitals post
    created by your name
    created at 12-08-16.
    */
    public function editHospitalsPost() {

        $hospital_id = $this->input->post('hospital_id');
        $hospitals = $this->Hospitals->getDataById($hospital_id);
		$data['hospital_type_id'] = $this->input->post('hospital_type');
		$data['hospital_name'] = $this->input->post('hospital_name');
		$data['hospital_address'] = $this->input->post('hospital_address');
		$edit = $this->Hospitals->update($hospital_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Hospital Updated');
            redirect('hospitals');
        }
    }
    /*
    function for view Hospitals get
    created by your name
    created at 12-08-16.
    */
    public function viewHospitals($hospital_id) {
		$page = $this->page;
        $page['hospital_id'] = $hospital_id;
        $page['hospitals'] = $this->Hospitals->getDataById($hospital_id);        
        $page['doctors'] = $this->Hospitals->getDoctors($hospital_id);        
		$page['main'] = 'hospitals/view-hospitals';
        $this->load->view($page['template'], $page);
		
    }
    /*
    function for delete Hospitals    created by your name
    created at 12-08-16.
    */
    public function deleteHospitals($hospital_id) {
        $delete = $this->Hospitals->delete($hospital_id);
        $this->session->set_flashdata('success', 'hospital deleted');
        redirect('hospitals');
    }
    /*
    function for activation and deactivation of Hospitals.
    created by your name
    created at 12-08-16.
    */
    public function changeStatusHospitals($hospital_id) {
        $edit = $this->Hospitals->changeStatus($hospital_id);
        $this->session->set_flashdata('success', 'hospitals '.$edit.' Successfully');
        redirect('hospitals');
    }
	
	
}