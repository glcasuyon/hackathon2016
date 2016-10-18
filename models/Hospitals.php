<?php

class Hospitals extends CI_Model {

    /*
    return all Branchess.
    created by your name
    created at 12-08-16.
    */
    public function getAll() {
		$this->db->where('status', 1);
        return $this->db->get('hospital')->result();
    }
    /*
    function for create Branches.
    return Branches inserted id.
    created by your name
    created at 12-08-16.
    */
    public function insert($data) {
        $this->db->insert('hospital', $data);
        return $this->db->insert_id();
    }
    /*
    return Branches by id.
    created by your name
    created at 12-08-16.
    */
    public function getDataById($id) {
        $this->db->where('hospital_id', $id);
        return $this->db->get('hospital')->result();
    }
	
    /*
    function for update Branches.
    return true.
    created by your name
    created at 12-08-16.
    */
    public function update($id,$data) {
        $this->db->where('hospital_id', $id);
        $this->db->update('hospital', $data);
        return true;
    }
    /*
    function for delete Branches.
    return true.
    created by your name
    created at 12-08-16.
    */
    public function delete($id) {
        $this->db->where('hospitals_id', $id);
        $this->db->delete('hospital');
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
        $this->db->insert('doctors_hospital', $data);
        return $this->db->insert_id();
    }
	
	public function getDataByDocId($id) {
        $this->db->where('doctors_hospital.doctors_id', $id);
		$this->db->join("hospital", "hospital.hospital_id = doctors_hospital.hospital_id");
        return $this->db->get('doctors_hospital')->result();
    }
	
	public function getDoctors($hospital_id){
		$this->db->where('hospital_id', $hospital_id);
		$this->db->join('doctors', 'doctors.doctors_id = doctors_hospital.doctors_id');
		 return $this->db->get('doctors_hospital')->result();
	}
}