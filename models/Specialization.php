<?php

class Specialization extends CI_Model {

    /*
    return all Clinics.
    created at 10/17/2016
    
    */
    public function getAll() {
        return $this->db->get('specialization')->result();
    }
    /*
    function for create Clinics.
    return Clinics inserted id.
    created at 10/17/2016
    
    */
    public function insert($data) {
        $this->db->insert('specialization', $data);
        return $this->db->insert_id();
    }
    /*
    return Clinics by id.
    created at 10/17/2016
    
    */
    public function getDataById($id) {
        $this->db->where('specialization_id', $id);
        return $this->db->get('specialization')->result();
    }
	

    /*
    function for update Clinics.
    return true.
    created at 10/17/2016
    
    */
    public function update($id,$data) {
        $this->db->where('specialization_id', $id);
        $this->db->update('specialization', $data);
        return true;
    }
    /*
    function for delete Clinics.
    return true.
    created at 10/17/2016
    
    */
    public function delete($id) {
        $this->db->where('specialization_id', $id);
        $this->db->delete('specialization');
        return true;
    }
    /*
    function for change status of Clinics.
    return activated of deactivated.
    created at 10/17/2016
    
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
        $this->db->insert('doctors_specialization', $data);
        return $this->db->insert_id();
    }
	
	public function getDataByDocId($id) {
        $this->db->where('doctors_id', $id);
		$this->db->join("specialization", "specialization.specialization_id = doctors_specialization.specialization_id");
        return $this->db->get('doctors_specialization')->result();
    }
	
	public function getDataBySpecId($id) {
        $this->db->where('specialization_id', $id);
		$this->db->join("doctors", "doctors.doctors_id = doctors_specialization.doctors_id");
        return $this->db->get('doctors_specialization')->result();
    }
	
}