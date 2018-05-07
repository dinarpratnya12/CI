<?php 

class Model_id extends CI_Model
{
	public $id;
	public $nama;
	public $nim;
	public $alamat;
	
	public function get_last_ten_entries()
	{
		$query = $this->db->get('enteries', 10);
		return $query->result();
	}

	public function insert_entry()
	{
		$this->id 	= $_POST['id'];
		$this->nama = $_POST['nama'];
		$this->nim 	= $_POST['nim'];
		$this->nama = $_POST['nama'];

		$this->db->insert('entries', $this);
	}

	public function update_entry()
	{
		$this->id 	= $_POST['id'];
		$this->nama = $_POST['nama'];
		$this->nim 	= $_POST['nim'];
		$this->nama = $_POST['nama'];

		$this->db->update('entries', $this, array('id' => $_POST['id']));
	}
}

?>