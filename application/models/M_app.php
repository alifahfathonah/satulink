<?php
class m_app extends CI_Model {

	//Function untuk ambil semua data
	public function getAllData($table)
    {
        return $this->db->get($table);
    }

	//Function untuk ambil selected data
	public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }

	//Function untuk insert data
	function insertData($table,$data)
    {
        $query=$this->db->insert($table,$data);
        if($query) {
            return TRUE; //if query is true
        } else {
            return FALSE; //if query is wrong
        }
	}

//Function untuk update data
  function updateData($table,$data,$field_key)
  {
      $query=$this->db->update($table,$data,$field_key);
      if($query) {
          return TRUE; //if query is true
      } else {
          return FALSE; //if query is wrong
      }
  }

	//Function untuk select data dengan sum
	function getSumData($table,$data)
	{
			$this->db->select_sum($data);
			return $this->db->get($table);
	}

	//Function untuk select data dengan sum
	function getJoinData1Table($field,$table,$jointable1,$fieldjoin1)
	{
		$this->db->select($field);
		$this->db->from($table);
		$this->db->join($jointable1, $fieldjoin1);
		return $this->db->get();
	}

	//Function untuk select data dengan sum
	function getJoinData2Table($field,$table,$jointable1,$fieldjoin1,$jointable2,$fieldjoin2)
	{
		$this->db->select($field);
		$this->db->from($table);
		$this->db->join($jointable1, $fieldjoin1);
		$this->db->join($jointable2, $fieldjoin2);
		return $this->db->get();
	}

	//Function untuk select data dengan sum
	function getLeftJoinData2Table($field,$table,$jointable1,$fieldjoin1,$tipejoin1,$jointable2,$fieldjoin2,$tipejoin2)
	{
		$this->db->select($field);
		$this->db->from($table);
		$this->db->join($jointable1, $fieldjoin1, $tipejoin1);
		$this->db->join($jointable2, $fieldjoin2, $tipejoin2);
		return $this->db->get();
	}

	//Function untuk select data dengan sum
	function getJoinData3TableWhere($field,$table,$jointable1,$fieldjoin1,$jointable2,$fieldjoin2,$jointable3,$fieldjoin3,$field_key)
	{
		$this->db->select($field);
		$this->db->from($table);
		$this->db->join($jointable1, $fieldjoin1);
		$this->db->join($jointable2, $fieldjoin2);
		$this->db->join($jointable3, $fieldjoin3);
		$this->db->where($field_key);
		return $this->db->get();
	}

	//Function untuk create kode personal agen
	function buatKodePersonalAgen()
	{
			$q = $this->db->query("select MAX(RIGHT(kode_personal_agen,17)) as kd_max from tbl_mpersonal_agen");
			$kd = "";
			if($q->num_rows()>0)
			{
					foreach($q->result() as $k)
					{
							$tmp = ((int)$k->kd_max)+1;
							$kd = sprintf("%017s", $tmp);
					}
			}
			else
			{
					$kd = "00000000000000001";
			}
			return "KPA".$kd;
	}

	//Function untuk create kode rekening agen
	function buatKodeRekeningAgen()
	{
		$q = $this->db->query("select MAX(RIGHT(kode_rekening_agen,17)) as kd_max from tbl_mrekening_agen");
		$kd = "";
		if($q->num_rows()>0)
		{
			foreach($q->result() as $k)
			{
				$tmp = ((int)$k->kd_max)+1;
				$kd = sprintf("%017s", $tmp);
			}
		}
		else
		{
			$kd = "00000000000000001";
		}
		return "KRA".$kd;
	}

	//Function untuk create kode usaha agen
	function buatKodeUsahaAgen()
	{
		$q = $this->db->query("select MAX(RIGHT(kode_usaha_agen,17)) as kd_max from tbl_musaha_agen");
		$kd = "";
		if($q->num_rows()>0)
		{
			foreach($q->result() as $k)
			{
				$tmp = ((int)$k->kd_max)+1;
				$kd = sprintf("%017s", $tmp);
			}
		}
		else
		{
			$kd = "00000000000000001";
		}
		return "KUA".$kd;
	}

	//Function untuk create kode agen
	function buatKodeAgen()
	{
		$q = $this->db->query("select MAX(RIGHT(kode_agen,4)) as kd_max from tbl_magen");
		$kd = "";
		if($q->num_rows()>0)
		{
			foreach($q->result() as $k)
			{
				$tmp = ((int)$k->kd_max)+1;
				$kd = sprintf("%04s", $tmp);
			}
		}
		else
		{
			$kd = "0001";
		}
			$alphabet = '1234567890';
			$randomize = array();
			$alpha_length = strlen($alphabet) - 1;
			for ($i = 0; $i < 6; $i++)
			{
					$n = rand(0, $alpha_length);
					$randomize[] = $alphabet[$n];
			}
		return implode($randomize).$kd;
	}


  //Function untuk create kode siswa
  function buatKodeUser()
	{
		$q = $this->db->query("select MAX(RIGHT(kode_user,19)) as kd_max from tbl_muser");
		$kd = "";
		if($q->num_rows()>0)
		{
			foreach($q->result() as $k)
			{
				$tmp = ((int)$k->kd_max)+1;
				$kd = sprintf("%019s", $tmp);
			}
		}
		else
		{
			$kd = "0000000000000000001";
		}
		return "U".$kd;
	}

	function random_password()
	{
	    $alphabet = '1234567890';
	    $password = array();
	    $alpha_length = strlen($alphabet) - 1;
	    for ($i = 0; $i < 6; $i++)
	    {
	        $n = rand(0, $alpha_length);
	        $password[] = $alphabet[$n];
	    }
	    return implode($password);
	}

}
?>
