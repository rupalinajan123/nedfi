<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {

    public function insertRecord($tbl_name,$data_array,$insert_id=true)
	{
		if($this->db->insert($tbl_name,$data_array))
		{
			if($insert_id==true)
			{return $this->db->insert_id();}
			else
			{return true;}
		}
		else
		{return false;}
	}

	public function getRecords($tbl_name,$condition=FALSE,$select=FALSE,$order_by=FALSE,$start=FALSE,$limit=FALSE)
	{
		if($select!="")
		{$this->db->select($select);}
		
		if((is_array($condition) && count($condition)>0) && $condition!="")
		{
			$condition=$condition;
		}
		else
		{$condition=array();}
		
		if((is_array($order_by) && count($order_by)>0) && $order_by!="")
		{
			foreach($order_by as $key=>$val)
			{$this->db->order_by($key,$val);}
		}
		if($limit!="" || $start!="")
		{
			$this->db->limit($limit,$start);
		}
		$rst=$this->db->get_where($tbl_name,$condition);
		return $rst->result_array();
	}

	public function updateRecord($tbl_name,$data_array,$where_arr)
	{
		$this->db->where($where_arr,NULL,FALSE);
		if($this->db->update($tbl_name,$data_array))
		
		
		{return true;}
		else
		{return false;}
	}


	public function getResetCount($id) {
		$this->db->select('reset_count');
		$this->db->from('employer_registration');
		$this->db->where('id', $id);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$row = $query->row();
			return $row->reset_count;
		} else {
            return 0; // Default to 0 if the user doesn't exist or has no reset count set
        }
    }

    public function incrementResetCount($id) {
    	$reset_count = $this->getResetCount($id);
    	$reset_count++;

    	$data = array('reset_count' => $reset_count);
    	$this->db->where('id', $id);
    	$this->db->update('employer_registration', $data);
    }

	public function getUserDataById($id)
{
    $this->db->where('id', $id);
    $query = $this->db->get('employer_registration');
    return $query->row_array();
}
  

    public function getApiData()
	{
		$this->db->select("*");
		$this->db->from("employer_registration");
		$query=$this->db->get();
		$response=$query->result_array();
		return $response;
	}

}
