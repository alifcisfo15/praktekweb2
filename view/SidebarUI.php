<?php 

require_once 'View.php';
include 'model/Kategori.php';
/**
* 
*/
class SidebarUI extends View
{
	
	public function tampilkanKategori()
	{
		include_once 'model/Kategori.php';
		$ktgr = new Kategori();
		$isi_kategori = $ktgr->ambilKategori();
		include_once 'pages/sidebarkategori.php';
		$this->end();
	}
}



 ?>