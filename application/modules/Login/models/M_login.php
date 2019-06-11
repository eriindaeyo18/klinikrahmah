<?php

/**
 * 
 */
class M_login extends CI_Model
{
	
	function login($data)
	{
		 $query = $this->db->select('*')
				->from('login')
				->where('username',$data['username'])
				->where('password',$data['password'])
				->get();
				if ($query->num_rows()==1) {
					return $query->result();
				}
				else{
					echo "<script>alert('username atau password Anda salah, periksa kembali !');window.location.href = '".base_url('Login/index')."'</script>";die;
				}
	}
}
?>