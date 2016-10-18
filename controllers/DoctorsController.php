<?php


class DoctorsController extends CI_Controller {

	public $page = array ( "pagetitle" => "Doctors",
							"template" => 'template/body',
							"module" => 'Doctors');

    public function __construct() {
        parent::__construct();
        $this->load->model('Doctors');
        $this->load->model('Clinics');
        $this->load->model('Insurance');
        $this->load->model('Specialization');
        $this->load->model('Appointment');
        $this->load->library('session');
        }
	
	/*
    function for  Doctors.
    return all Doctors.    
    created at 10/17/2016.
    */
	public function index(){
		$page = $this->page;
        $page["doctorss"] = $this->Doctors->getAll();
		$page['main'] = 'doctors/overview-doctors';
        $this->load->view($page['template'], $page);
	}
	
    /*
    function for manage Doctors.
    return all Doctorss.
    
     created at 10/17/2016.
    */
    public function manageDoctors() { 

        $data["doctorss"] = $this->Doctors->getAll();
        $this->load->view('doctors/manage-doctors', $data);
    
    }
    /*
    function for  add Doctors get    
     created at 10/17/2016.
    */
    public function addDoctors() {

		$page = $this->page;
		$page['main'] = 'doctors/add-doctors';
        $this->load->view($page['template'], $page);
    }
    /*
    function for add Doctors post    
     created at 10/17/2016.
    */
    public function addDoctorsPost() {
		$data['first_name'] = $this->input->post('first_name');
		$data['middle_name'] = $this->input->post('middle_name');
		$data['last_name'] = $this->input->post('last_name');
		$data['status'] = 1;
			   
		$this->Doctors->insert($data);
        $this->session->set_flashdata('success', 'Doctor added Successfully');
        redirect('doctors');
    }
    /*
    function for edit Doctors get
    returns  Doctors by id.
    created at 10/17/2016.
    */
    public function editDoctors($doctor_id) {
		$page = $this->page;
        $page['doctor_id'] = $doctor_id;
        $page['doctor'] = $this->Doctors->getDataById($doctor_id);
		$page['clinics'] = $this->Clinics->getDataByDocId($doctor_id);		      
        $page['hospitals'] = $this->Hospitals->getDataByDocId($doctor_id);       
        $page['insurance'] = $this->Insurance->getDataByDocId($doctor_id);       
        $page['specialization'] = $this->Specialization->getDataByDocId($doctor_id);       
        $page['allhospitals'] = $this->Hospitals->getAll();       
        $page['allInsurance'] = $this->Insurance->getAll();		
        $page['allSpecialization'] = $this->Specialization->getAll();		
		$page['main'] = 'doctors/edit-doctors';
        $this->load->view($page['template'], $page);
    }
    /*
    function for edit Doctors post
    created at 10/17/2016.
    */
    public function editDoctorsPost() {

        $doctor_id = $this->input->post('doctor_id');
        $doctors = $this->Doctors->getDataById($doctor_id);
		$data['first_name'] = $this->input->post('first_name');
		$data['middle_name'] = $this->input->post('middle_name');
		$data['last_name'] = $this->input->post('last_name');
                       
		$edit = $this->Doctors->update($doctor_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Doctor Updated');
            redirect('edit-doctors/'.$doctor_id);
        }
    }
    /*
    function for view Doctors get    
     created at 10/17/2016.
    */
    public function viewDoctors($doctor_id) {
		$page = $this->page;
        $page['doctor_id'] = $doctor_id;
        $page['doctors'] = $this->Doctors->getDataById($doctor_id);       
        $page['clinics'] = $this->Clinics->getDataByDocId($doctor_id);       
        $page['hospitals'] = $this->Hospitals->getDataByDocId($doctor_id);       
        $page['insurance'] = $this->Insurance->getDataByDocId($doctor_id);       
        $page['specialization'] = $this->Specialization->getDataByDocId($doctor_id);       
        $page['allhospitals'] = $this->Hospitals->getAll();       
        $page['allInsurance'] = $this->Insurance->getAll();		
        $page['allSpecialization'] = $this->Specialization->getAll();	      
		$page['main'] = 'doctors/view-doctors';
        $this->load->view($page['template'], $page);
    }
    /*
    function for delete Doctors    
     created at 10/17/2016.
    */
    public function deleteDoctors($doctor_id) {
        $delete = $this->Doctors->delete($doctor_id);
        $this->session->set_flashdata('success', 'doctor deleted');
        redirect('doctors');
    }
    /*
    function for activation and deactivation of Doctors.
    created at 10/17/2016.
    */
    public function changeStatusDoctors($doctor_id) {
        $edit = $this->Doctors->changeStatus($doctor_id);
        $this->session->set_flashdata('success', 'doctors '.$edit.' Successfully');
        redirect('doctors');
    }    
	
	
	public function addClinic($doctor_id){
		
		$data['doctors_id'] = $doctor_id;
		$data['address'] = $this->input->post('address');
		$data['status'] = 1;
			   
		$this->Clinics->insert($data);
        $this->session->set_flashdata('success', 'Clinic added Successfully');
        redirect('edit-doctors/'.$doctor_id);
		
	}
	
	public function addHospital($doctor_id){
		
		$data['doctors_id'] = $doctor_id;
		$data['hospital_id'] = $this->input->post('hospital_id');
		$data['status'] = 1;
			   
		$this->Hospitals->insertDoctor($data);
        $this->session->set_flashdata('success', 'Hospital added Successfully');
        redirect('edit-doctors/'.$doctor_id);
		
	}
	
	public function addInsurance($doctor_id){
		
		$data['doctors_id'] = $doctor_id;
		$data['insurance_company_id'] = $this->input->post('insurance_company_id');
		$data['status'] = 1;
			   
		$this->Insurance->insertDoctor($data);
        $this->session->set_flashdata('success', 'Insurance Company added Successfully');
        redirect('edit-doctors/'.$doctor_id);
		
	}
	
	public function addSpecial($doctor_id){
		
		$data['doctors_id'] = $doctor_id;
		$data['specialization_id'] = $this->input->post('specialization_id');
		$data['status'] = 1;
			   
		$this->Specialization->insertDoctor($data);
        $this->session->set_flashdata('success', 'Insurance Company added Successfully');
        redirect('edit-doctors/'.$doctor_id);		
	}
	
	public function appointments($doctor_id){
		$page = $this->page;
        $page['doctor_id'] = $doctor_id;
        $page['doctors'] = $this->Doctors->getDataById($doctor_id);  
		$page['specialization'] = $this->Specialization->getDataByDocId($doctor_id);   		
		$page['appointments']=$this->Appointment->getDataByDocId($doctor_id);
		$page['main']= "doctors/appointments";
		$this->load->view($page['template'], $page);
		
	}
	
	public function addAppointment(){
		$page = $this->page;
		$data['doctors_id'] = $this->input->post('doctors_id');
		$data['first_name'] = $this->input->post('first_name');
		$data['middle_name'] = $this->input->post('middle_name');
		$data['last_name'] = $this->input->post('last_name');
		$data['mobile_no'] = $this->input->post('mobile_no');
		$data['complaints'] = $this->input->post('complaints');
		$data['date_of_appointment'] = $this->input->post('date_of_appointment');
		$data['time_of_appointment'] = $this->input->post('time_of_appointment');
		
		$this->Appointment->insert($data);
		$this->session->set_flashdata('success', 'Appointment was posted. The Doctor will keep in touch with anytime.');
		//echo $this->db->last_query();
        redirect('view-doctors/'.$data['doctors_id']);
	}
	
	public function viewAppointment($id){
		$page=$this->page;
		$page['appointment'] = $this->Appointment->getDataById($id);
		$page['appointment_id'] = $id;
		$this->load->view('doctors/view-appointment', $page);
	}
	
	public function updateAppointment(){
		$page=$this->page;
		$id = $this->input->post('appointments_id');
		$did = $this->input->post('doctors_id');
		$data['remarks'] = $this->input->post('remarks');
		$this->Appointment->update($id,$data);
		redirect('appointments/'.$did);
	}
	
}