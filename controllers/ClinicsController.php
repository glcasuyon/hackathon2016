<?php


class ClinicsController extends CI_Controller {

	public $page = array ( "pagetitle" => "Clinics",
							"template" => 'template/body',
							"module" => 'Clinics');

    public function __construct() {
        parent::__construct();
        $this->load->model('Clinics');
        $this->load->library('session');
        }
	
	/*
    function for  Clinics.
    return all Clinics.    
    created at 10/17/2016.
    */
	public function index(){
		$page = $this->page;
        $page["clinicss"] = $this->Clinics->getAll();
		$page['main'] = 'clinics/overview-clinics';
        $this->load->view($page['template'], $page);
	}
	
    /*
    function for manage Clinics.
    return all Clinicss.
    
     created at 10/17/2016.
    */
    public function manageClinics() { 

        $data["clinicss"] = $this->Clinics->getAll();
        $this->load->view('clinics/manage-clinics', $data);
    
    }
    /*
    function for  add Clinics get    
     created at 10/17/2016.
    */
    public function addClinics() {

        $this->load->view('clinics/add-clinics');

    }
    /*
    function for add Clinics post    
     created at 10/17/2016.
    */
    public function addClinicsPost() {
		$data['first_name'] = $this->input->post('first_name');
		$data['middle_name'] = $this->input->post('middle_name');
		$data['last_name'] = $this->input->post('last_name');
		$data['status'] = 1;
			   
		$this->Clinics->insert($data);
        $this->session->set_flashdata('success', 'Clinic added Successfully');
        redirect('clinics');
    }
    /*
    function for edit Clinics get
    returns  Clinics by id.
    created at 10/17/2016.
    */
    public function editClinics($clinic_id) {
        $data['clinic_id'] = $clinic_id;
        $data['clinic'] = $this->Clinics->getDataById($clinic_id);
        $this->load->view('clinics/edit-clinics', $data);
    }
    /*
    function for edit Clinics post
    created at 10/17/2016.
    */
    public function editClinicsPost() {

        $clinic_id = $this->input->post('clinic_id');
        $clinics = $this->branches->getDataById($branches_id);
                        $data['branchname'] = $this->input->post('branchname');
                        $data['province'] = $this->input->post('province');
                        $data['city'] = $this->input->post('city');
                        $data['address'] = $this->input->post('address');
                        $data['dateAdded'] = $this->input->post('dateAdded');
                        $data['addedBy'] = $this->input->post('addedBy');
                        $data['dateModified'] = $this->input->post('dateModified');
                        $data['modifiedBy'] = $this->input->post('modifiedBy');
                $edit = $this->clinics->update($clinic_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'clinic Updated');
            redirect('clinics');
        }
    }
    /*
    function for view Clinics get    
     created at 10/17/2016.
    */
    public function viewClinics($clinic_id) {
        $data['clinic_id'] = $clinic_id;
        $data['clinics'] = $this->Clinics->getDataById($clinic_id);
        $this->load->view('clinics/view-clinics', $data);
    }
    /*
    function for delete Clinics    
     created at 10/17/2016.
    */
    public function deleteClinics($clinic_id) {
        $delete = $this->Clinics->delete($clinic_id);
        $this->session->set_flashdata('success', 'clinic deleted');
        redirect('clinics');
    }
    /*
    function for activation and deactivation of Clinics.
    created at 10/17/2016.
    */
    public function changeStatusClinics($clinic_id) {
        $edit = $this->Clinics->changeStatus($clinic_id);
        $this->session->set_flashdata('success', 'clinics '.$edit.' Successfully');
        redirect('clinics');
    }
	
	public function clinic_contacts($doctors_clinic){
		$page = $this->page;
		$page['contacts'] = $this->Clinics->getContact($doctors_clinic);	
		$page['main'] = 'doctors/clinic_contacts';
        $this->load->view($page['main'], $page);
	}
    
}