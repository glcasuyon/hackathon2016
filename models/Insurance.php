<?php

class Insurance extends CI_Model {

    /*
    return all Insurance.
    created at 10/17/2016
    
    */
    public function getAll() {
        return $this->db->get('insurance_company')->result();
    }
    /*
    function for create Insurance.
    return Insurance inserted id.
    created at 10/17/2016
    
    */
    public function insert($data) {
        $this->db->insert('insurance_company', $data);
        return $this->db->insert_id();
    }
    /*
    return Insurance by id.
    created at 10/17/2016
    
    */
    public function getDataById($id) {
        $this->db->where('insurance_company_id', $id);
        return $this->db->get('insurance_company')->result();
    }
    /*
    function for update Insurance.
    return true.
    created at 10/17/2016
    
    */
    public function update($id,$data) {
        $this->db->where('insurance_company_id', $id);
        $this->db->update('insurance_company', $data);
        return true;
    }
    /*
    function for delete Insurance.
    return true.
    created at 10/17/2016
    
    */
    public function delete($id) {
        $this->db->where('insurance_company_id', $id);
        $this->db->delete('insurance_company');
        return true;
    }
    /*
    function for change status of Insurance.
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
        $this->db->insert('accredited_insurance_company', $data);
        return $this->db->insert_id();
    }
	
	public function getDataByDocId($id) {
        $this->db->where('doctors_id', $id);
		$this->db->join("insurance_company", "insurance_company.insurance_company_id = accredited_insurance_company.insurance_company_id");
        return $this->db->get('accredited_insurance_company')->result();
    }
	
	public function getDoctors($insurance_company_id){
		$this->db->where('insurance_company_id', $insurance_company_id);
		$this->db->join('doctors', 'doctors.doctors_id = accredited_insurance_company.doctors_id');
		 return $this->db->get('accredited_insurance_company')->result();
	}

}