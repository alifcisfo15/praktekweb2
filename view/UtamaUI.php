<?php 

require_once 'View.php';
include 'model/Berita.php';
include 'model/Kategori.php';
/**
* 
*/
class UtamaUI extends View
{
	
	public function tampilkanHalaman()
	{
		include_once 'model/Berita.php';
		$brt = new Berita();
		$isi_berita = $brt->ambilBerita();
		include_once 'pages/utama.php';
		$this->end();
		include_once 'model/Kategori.php';
		$ktgr = new Kategori();
		$isi_kategori = $ktgr->ambilKategori();
		include_once 'pages/sidebarkategori.php';
		$this->end();
	}


		
}



 ?>