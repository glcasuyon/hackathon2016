<?php

class Appointment extends CI_Model {

    /*
    return all Branchess.
    created by your name
    created at 12-08-16.
    */
    public function getAll() {
		$this->db->where('status', 1);
        return $this->db->get('appointments')->result();
    }
    /*
    function for create Branches.
    return Branches inserted id.
    created by your name
    created at 12-08-16.
    */
    public function insert($data) {
        $this->db->insert('appointments', $data);
        return $this->db->insert_id();
    }
    /*
    return Branches by id.
    created by your name
    created at 12-08-16.
    */
    public function getDataById($id) {
        $this->db->where('appointments_id', $id);
        return $this->db->get('appointments')->result();
    }
	
    /*
    function for update Branches.
    return true.
    created by your name
    created at 12-08-16.
    */
    public function update($id,$data) {
        $this->db->where('appointments_id', $id);
        $this->db->update('appointments', $data);
        return true;
    }
    /*
    function for delete Branches.
    return true.
    created by your name
    created at 12-08-16.
    */
    public function delete($id) {
        $this->db->where('appointments_id', $id);
        $this->db->delete('appointments');
        return true;
    }
    /*
    function for change status of Branches.
    return activated of deactivated.
    created by your name
    created at 12-08-16.
    */
    public function changeStatus($id) {
        $table=$this->getDataById($id);
             if($table[0]->status==0)
             {
                $this->update($id,array('status' => '1'));
                return "Activated";
             }else{
                $this->update($id,array('status' => '0'));
                return "Deactivated";
             }
    }
	
	public function insertDoctor($data) {
        $this->db->insert('doctors_appointments', $data);
        return $this->db->insert_id();
    }
	
	public function getDataByDocId($id) {
        $this->db->where('doctors_id', $id);
		$this->db->order_by('date_of_appointment', 'ASC');
        return $this->db->get('appointments')->result();
    }
	
	public function getDoctors($appointments_id){
		$this->db->where('appointments_id', $appointments_id);
		$this->db->join('doctors', 'doctors.doctors_id = doctors_appointments.doctors_id');
		return $this->db->get('doctors_appointments')->result();
	}
}