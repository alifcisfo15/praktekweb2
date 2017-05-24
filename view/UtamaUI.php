<?php 

require_once 'View.php';
include 'model/Berita.php';
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
	}
}



 ?>