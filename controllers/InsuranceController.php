<?php


class InsuranceController extends CI_Controller {

	public $page = array ( "pagetitle" => "Insurance",
							"template" => 'template/body',
							"module" => 'Insurance');

    public function __construct() {
        parent::__construct();
        $this->load->model('Insurance');
        $this->load->model('Specialization');
        $this->load->library('session');
        }
	
	/*
    function for  Insurance.
    return all Insurance.    
    created at 10/17/2016.
    */
	public function index(){
		$page = $this->page;
        $page["insurances"] = $this->Insurance->getAll();
		$page['main'] = 'insurance/overview-insurance';
        $this->load->view($page['template'], $page);
	}
	
    /*
    function for manage Insurance.
    return all Insurances.
    
     created at 10/17/2016.
    */
    public function manageInsurance() { 

        $data["insurances"] = $this->Insurance->getAll();
        $this->load->view('insurance/manage-insurance', $data);
    
    }
    /*
    function for  add Insurance get    
     created at 10/17/2016.
    */
    public function addInsurance() {

        $this->load->view('insurance/add-insurance');

    }
    /*
    function for add Insurance post    
     created at 10/17/2016.
    */
    public function addInsurancePost() {
		$data['company_name'] = $this->input->post('company_name');
		$data['company_address'] = $this->input->post('company_address');		
		$data['status'] = 1;
			   
		$this->Insurance->insert($data);
        $this->session->set_flashdata('success', 'Insurance Company added Successfully');
        redirect('medical_insurance');
    }
    /*
    function for edit Insurance get
    returns  Insurance by id.
    created at 10/17/2016.
    */
    public function editInsurance($insurance_company_id) {
		$page = $this->page;
        $page['insurance_company_id'] = $insurance_company_id;
        $page['insurance'] = $this->Insurance->getDataById($insurance_company_id);
        $page['main'] = 'insurance/edit-insurance';
		$this->load->view($page['main'], $page);
    }
    /*
    function for edit Insurance post
    created at 10/17/2016.
    */
    public function editInsurancePost() {

        $insurance_company_id = $this->input->post('insurance_company_id');
        $insurance = $this->Insurance->getDataById($insurance_company_id);
		$data['company_name'] = $this->input->post('company_name');
		$data['company_address'] = $this->input->post('company_address');
                        
                $edit = $this->Insurance->update($insurance_company_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'insurance Updated');
            redirect('medical_insurance');
        }
    }
    /*
    function for view Insurance get    
     created at 10/17/2016.
    */
    public function viewInsurance($insurance_company_id) {
		$page = $this->page;
        $page['insurance_company_id'] = $insurance_company_id;
        $page['insurance'] = $this->Insurance->getDataById($insurance_company_id);
		$page['doctors'] = $this->Insurance->getDoctors($insurance_company_id);
        $page['main'] = 'insurance/view-insurance';
		$this->load->view($page['template'], $page);
    }
    /*
    function for delete Insurance    
     created at 10/17/2016.
    */
    public function deleteInsurance($insurance_company_id) {
        $delete = $this->Insurance->delete($insurance_company_id);
        $this->session->set_flashdata('success', 'insurance deleted');
        redirect('medical_insurance');
    }
    /*
    function for activation and deactivation of Insurance.
    created at 10/17/2016.
    */
    public function changeStatusInsurance($insurance_company_id) {
        $edit = $this->Insurance->changeStatus($insurance_company_id);
        $this->session->set_flashdata('success', 'insurance '.$edit.' Successfully');
        redirect('medical_insurance');
    }
    
}