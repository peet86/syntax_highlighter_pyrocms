<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Display extends Public_Controller
{
	public function __construct()
	{
		parent::__construct();

	}
	
	public function index()
	{
		$this->load->config("brushes");
		$brushes = $this->config->item('syntax_brushes');
		foreach($brushes as $brush){
			$alias=$brush["alias"];
			$alias_arr=explode(" ",$alias);
			$data[]=array($brush["label"],$alias_arr[0]);
		}
		echo json_encode($data);
	}
}
