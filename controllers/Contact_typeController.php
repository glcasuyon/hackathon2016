<?php


class Contact_typeController extends CI_Controller {

	public $page = array ( "pagetitle" => "Contact Type",
							"template" => 'template/body',
							"module" => 'contact_type');

    public function __construct() {
        parent::__construct();
        $this->load->model('contact_type');
        $this->load->library('session');
        }
		
	/*
    function for  Module.
    return all Modules.
    created by your name
    created at 18-08-16.
    */
	public function index(){
		$page = $this->page;       
		$page['main'] = 'contact_type/overview-contact_type';
        $this->load->view($page['template'], $page);
	}
    /*
    function for manage Contact_type.
    return all Contact_types.
    created by your name
    created at 18-08-16.
    */
    public function manageContact_type() { 

        $data["contact_types"] = $this->contact_type->getAll();
        $this->load->view('contact_type/manage-contact_type', $data);
    
    }
    /*
    function for  add Contact_type get
    created by your name
    created at 18-08-16.
    */
    public function addContact_type() {

        $this->load->view('contact_type/add-contact_type');

    }
    /*
    function for add Contact_type post
    created by your name
    created at 18-08-16.
    */
    public function addContact_typePost() {
                        $data['value'] = $this->input->post('value');
                                $data['description'] = $this->input->post('description');
                        $this->contact_type->insert($data);
        $this->session->set_flashdata('success', 'Contact_type added Successfully');
        redirect('contact_type');
    }
    /*
    function for edit Contact_type get
    returns  Contact_type by id.
    created by your name
    created at 18-08-16.
    */
    public function editContact_type($contact_type_id) {
		$page = $this->page;       
		$page['main'] ='contact_type/edit-contact_type';
        $page['contact_type_id'] = $contact_type_id;
        $page['contact_type'] = $this->contact_type->getDataById($contact_type_id);
		$this->load->view($page['template'], $page);
    }
    /*
    function for edit Contact_type post
    created by your name
    created at 18-08-16.
    */
    public function editContact_typePost() {

        $contact_type_id = $this->input->post('contact_type_id');
        $contact_type = $this->contact_type->getDataById($contact_type_id);
		$data['value'] = $this->input->post('value');
		$data['description'] = $this->input->post('description');
                $edit = $this->contact_type->update($contact_type_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Contact_type Updated');
            redirect('contact_type');
        }
    }
    /*
    function for view Contact_type get
    created by your name
    created at 18-08-16.
    */
    public function viewContact_type($contact_type_id) {
		$page = $this->page;
        $page['contact_type_id'] = $contact_type_id;
        $page['contact_type'] = $this->contact_type->getDataById($contact_type_id);
		$page['main'] = 'view-contact_type';
        $this->load->view($page['template'], $page);
    }
    /*
    function for delete Contact_type    created by your name
    created at 18-08-16.
    */
    public function deleteContact_type($contact_type_id) {
        $delete = $this->contact_type->delete($contact_type_id);
        $this->session->set_flashdata('success', 'contact_type deleted');
        redirect('contact_type');
    }
    /*
    function for activation and deactivation of Contact_type.
    created by your name
    created at 18-08-16.
    */
    public function changeStatusContact_type($contact_type_id) {
        $edit = $this->contact_type->changeStatus($contact_type_id);
        $this->session->set_flashdata('success', 'contact_type '.$edit.' Successfully');
        redirect('contact_type');
    }
    
}