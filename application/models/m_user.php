<?php 
// class M_user extends Ci_Model{
// 	public function tampil_data()
// 	{
// 		// memanggil data di database tb_user
// 		return $this->db->get('tb_user');	// lalu buat view user
// 	}
// }


//NEWEST

class M_user extends Ci_Model{
	public function tampil_data()
	{
		// memanggil data di database tb_user
		return $this->db->get('tb_user');	// lalu buat view user
	}

	public function input_data()
        {
                $this->username_user    = $_POST['username_user']; // please read the below note
                $this->password_user  = $_POST['password_user'];
                $this->email_user  = $_POST['email_user'];

                $this->db->insert('tb_user', $this);
        }
        
    public function hapus_data($where,$table)
    {
    	$this->db->where($where);
    	$this->db->delete($table);

    }

    public function edit_data($where,$table)
    {
        return $this->db->GET_where($table,$where);
       

    }

    // bikin update data
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }



}// end class




 ?>