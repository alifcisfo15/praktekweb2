<?php 

require_once 'View.php';
/**
* 
*/
class UtamaUI extends View
{
	
	public function tampilkanHalaman()
	{
		include_once 'pages/utama.php';
		$this->end();
	}
}



 ?>