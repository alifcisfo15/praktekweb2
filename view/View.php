<?php 

/**
* 
*/
class View
{
	public $title;
	public $subtitle;
	public $content;
	public $sidebar;


	function __construct()
	{
		include_once 'template/navigation.php';
		include_once 'template/header.php';
		//include_once 'template/content.php';
		
	}

	protected function end()
	{
				include_once 'template/sidebar.php';
				include 'template/footer.php';
	}
	
}


 ?>