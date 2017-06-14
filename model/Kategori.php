<?php 

/**
* 
*/

include_once 'Model.php';
class Kategori extends Model
{
	
	public function ambilKategori()
	{
		$query = $this->db->prepare("SELECT * FROM kategori");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}


 ?>