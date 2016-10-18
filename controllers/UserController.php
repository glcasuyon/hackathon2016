<?php


class UserController extends CI_Controller {

	public $page = array ( "pagetitle" => "User",
							"template" => 'template/body',
							"module" => 'User');

    public function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->library('session');
        }
		
	/*
    function for  User.
    return all User.
    created by your name
    created at 28-07-16.
    */
	public function index(){
		$page = $this->page;
        $page["users"] = $this->user->getAll();
		$page['main'] = 'user/overview-user';
        $this->load->view($page['template'], $page);
	}
	
    /*
    function for manage User.
    return all Users.
    created by your name
    created at 27-07-16.
    */
    public function manageUser() { 
		$page = $this->page;
        $page["users"] = $this->user->getAll();
        $page['main'] = 'user/manage-user';
		$this->load->view($page['main'], $page);
    }
    /*
    function for  add User get
    created by your name
    created at 27-07-16.
    */
    public function addUser() {

        $this->load->view('user/add-user');

    }
    /*
    function for add User post
    created by your name
    created at 27-07-16.
    */
    public function addUserPost() {
		$data['username'] = $this->input->post('username');
		$data['firstname'] = $this->input->post('firstname');
		$data['lastname'] = $this->input->post('lastname');
		$data['email'] = $this->input->post('email');
		$data['password'] = md5($this->input->post('password'));
		$data['salt'] = $this->input->post('salt');
		$data['contact'] = $this->input->post('contact');
		$data['group_id'] = $this->input->post('group_id');
		$data['branch_id'] = $this->input->post('branch_id');
		$this->user->insert($data);
        $this->session->set_flashdata('success', 'User added Successfully');
        redirect('user');
    }
    /*
    function for edit User get
    returns  User by id.
    created by your name
    created at 27-07-16.
    */
    public function editUser($user_id) {
		$page = $this->page;
        $page['user_id'] = $user_id;
        $page['user'] = $this->user->getDataById($user_id);        
		$page['main'] = 'user/edit-user';
		$this->load->view($page['template'], $page);
    }
    /*
    function for edit User post
    created by your name
    created at 27-07-16.
    */
    public function editUserPost() {

        $user_id = $this->input->post('user_id');
        $user = $this->user->getDataById($user_id);
				$data['username'] = $this->input->post('username');
				$data['firstname'] = $this->input->post('firstname');
				$data['lastname'] = $this->input->post('lastname');
				$data['email'] = $this->input->post('email');
				$data['salt'] = $this->input->post('salt');
				$data['contact'] = $this->input->post('contact');
				$data['group_id'] = $this->input->post('group_id');
				$data['branch_id'] = $this->input->post('branch_id');
		$edit = $this->user->update($user_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'User Updated');
            redirect('user');
        }
    }
    /*
    function for view User get
    created by your name
    created at 27-07-16.
    */
    public function viewUser($user_id) {
        $data['user_id'] = $user_id;
        $data['user'] = $this->user->getDataById($user_id);
        $this->load->view('user/view-user', $data);
    }
    /*
    function for delete User    created by your name
    created at 27-07-16.
    */
    public function deleteUser($user_id) {
        $delete = $this->user->delete($user_id);
        $this->session->set_flashdata('success', 'user deleted');
        redirect('user');
    }
    /*
    function for activation and deactivation of User.
    created by your name
    created at 27-07-16.
    */
    public function changeStatusUser($user_id) {
        $edit = $this->user->changeStatus($user_id);
        $this->session->set_flashdata('success', 'user '.$edit.' Successfully');
        redirect('user');
    }
    
}