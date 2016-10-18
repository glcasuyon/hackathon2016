<?php

class DoctorsContacts extends CI_Model {

    /*
    return all Doctors.
    created at 10/17/2016
    
    */
    public function getAll() {
        return $this->db->get('doctors')->result();
    }
    /*
    function for create Doctors.
    return Doctors inserted id.
    created at 10/17/2016
    
    */
    public function insert($data) {
        $this->db->insert('doctors', $data);
        return $this->db->insert_id();
    }
    /*
    return Doctors by id.
    created at 10/17/2016
    
    */
    public function getDataById($id) {
        $this->db->where('doctors_id', $id);
        return $this->db->get('doctors')->result();
    }
    /*
    function for update Doctors.
    return true.
    created at 10/17/2016
    
    */
    public function update($id,$data) {
        $this->db->where('doctors_id', $id);
        $this->db->update('doctors', $data);
        return true;
    }
    /*
    function for delete Doctors.
    return true.
    created at 10/17/2016
    
    */
    public function delete($id) {
        $this->db->where('doctors_id', $id);
        $this->db->delete('doctors');
        return true;
    }
    /*
    function for change status of Doctors.
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
	


}