<?php 

require_once 'View.php';
include 'model/Buku.php';
/**
* 
*/
class BukuUI extends View
{
	
	public function tampilBuku()
	{
		include_once 'model/Buku.php';

		$buku = new Buku();

		$nama_buku = $buku->ambilBuku();

		include_once 'pages/namabuku.php';
		$this->end();
	}
}



 ?>