<?php

class Clinics extends CI_Model {

    /*
    return all Clinics.
    created at 10/17/2016
    
    */
    public function getAll() {
        return $this->db->get('doctors_clinic')->result();
    }
    /*
    function for create Clinics.
    return Clinics inserted id.
    created at 10/17/2016
    
    */
    public function insert($data) {
        $this->db->insert('doctors_clinic', $data);
        return $this->db->insert_id();
    }
    /*
    return Clinics by id.
    created at 10/17/2016
    
    */
    public function getDataById($id) {
        $this->db->where('doctors_clinic_id', $id);
        return $this->db->get('doctors_clinic')->result();
    }
	
	/*
    return Clinics by Doctors id.
    created at 10/17/2016
    
    */
    public function getDataByDocId($id) {
        $this->db->where('doctors_id', $id);
        return $this->db->get('doctors_clinic')->result();
    }
    /*
    function for update Clinics.
    return true.
    created at 10/17/2016
    
    */
    public function update($id,$data) {
        $this->db->where('doctors_clinic_id', $id);
        $this->db->update('doctors_clinic', $data);
        return true;
    }
    /*
    function for delete Clinics.
    return true.
    created at 10/17/2016
    
    */
    public function delete($id) {
        $this->db->where('doctors_clinic_id', $id);
        $this->db->delete('doctors_clinic');
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
	
	public function getContact($doctors_clinic){
		$this->db->where('doctors_clinic_id', $doctors_clinic);
		$this->db->join('contact_type', 'contact_type.contact_type_id = doctors_clinic_contacts.contact_type_id');
		return $this->db->get('doctors_clinic_contacts')->result();
	}
}