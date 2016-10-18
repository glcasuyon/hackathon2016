<?php


class SpecializationController extends CI_Controller {

	public $page = array ( "pagetitle" => "Specialization",
							"template" => 'template/body',
							"module" => 'Specialization');

    public function __construct() {
        parent::__construct();
        $this->load->model('Specialization');
        $this->load->model('Doctors');
        $this->load->library('session');
        }
	
	/*
    function for  Specialization.
    return all Specialization.    
    created at 10/17/2016.
    */
	public function index(){
		$page = $this->page;
        $page["specializations"] = $this->Specialization->getAll();
		$page['main'] = 'specialization/overview-specialization';
        $this->load->view($page['template'], $page);
	}
	
    /*
    function for manage Specialization.
    return all Specializations.
    
     created at 10/17/2016.
    */
    public function manageSpecialization() { 

        $data["specializations"] = $this->Specialization->getAll();
        $this->load->view('specialization/manage-specialization', $data);
    
    }
    /*
    function for  add Specialization get    
     created at 10/17/2016.
    */
    public function addSpecialization() {

        $this->load->view('specialization/add-specialization');
		
    }
    /*
    function for add Specialization post    
     created at 10/17/2016.
    */
    public function addSpecializationPost() {
		$data['first_name'] = $this->input->post('first_name');
		$data['middle_name'] = $this->input->post('middle_name');
		$data['last_name'] = $this->input->post('last_name');
		$data['status'] = 1;
			   
		$this->Specialization->insert($data);
        $this->session->set_flashdata('success', 'Specialization added Successfully');
        redirect('specialization');
    }
    /*
    function for edit Specialization get
    returns  Specialization by id.
    created at 10/17/2016.
    */
    public function editSpecialization($specialization_id) {
		$page =$this->page;
        $page['specialization_id'] = $specialization_id;
        $page['specialization'] = $this->Specialization->getDataById($specialization_id);
       // $this->load->view('specialization/edit-specialization', $data);
		$page['main'] = 'specialization/edit-specialization';
        $this->load->view($page['main'], $page);
    }
    /*
    function for edit Specialization post
    created at 10/17/2016.
    */
    public function editSpecializationPost() {

        $specialization_id = $this->input->post('specialization_id');
		$data['specialization_desc'] = $this->input->post('specialization_desc');
        $edit = $this->specialization->update($specialization_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'specialization Updated');
            redirect('specialization');
        }
    }
    /*
    function for view Specialization get    
     created at 10/17/2016.
    */
    public function viewSpecialization($specialization_id) {
		$page = $this->page;
        $page['specialization_id'] = $specialization_id;
        $page['specialization'] = $this->Specialization->getDataById($specialization_id);
        $page['doctors'] = $this->Specialization->getDataBySpecId($specialization_id);
        //$this->load->view('specialization/view-specialization', $data);
		$page['main'] = 'specialization/view-specialization';
        $this->load->view($page['template'], $page);
    }
    /*
    function for delete Specialization    
     created at 10/17/2016.
    */
    public function deleteSpecialization($specialization_id) {
        $delete = $this->Specialization->delete($specialization_id);
        $this->session->set_flashdata('success', 'specialization deleted');
        redirect('specialization');
    }
    /*
    function for activation and deactivation of Specialization.
    created at 10/17/2016.
    */
    public function changeStatusSpecialization($specialization_id) {
        $edit = $this->Specialization->changeStatus($specialization_id);
        $this->session->set_flashdata('success', 'specialization '.$edit.' Successfully');
        redirect('specialization');
    }
	
	public function specialization_contacts($doctors_specialization){
		$page = $this->page;
		$page['contacts'] = $this->Specialization->getContact($doctors_specialization);	
		$page['main'] = 'doctors/specialization_contacts';
        $this->load->view($page['main'], $page);
	}
    
}