<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_Syntax_Highlighter extends Module {

	public $version = '1.0';

	public function info()
	{
		return array(
			'name' => array(
				'en' => 'Syntax Highlighter',
				'hu' => 'Syntax Highlighter'
			),
			'description' => array(
				'en' => 'Highlight your code snippets!',
				'hu' => 'Színezd ki a kódod!'
			),
			'frontend' => TRUE,
			'backend' => FALSE,
			'menu' => ''
		);
	}

	public function install()
	{		
		
		$this->db->insert('settings', array(
    			'slug' => 'syntaxhighlighter',
    			'title' => 'Syntax Highlighter',
    			'description' => 'Enable or disable Syntax Highlighter plugin',
    			'`default`' => '1',
    			'`value`' => '1',
    			'type' => 'radio',
    			'options'=>'1=Enabled|2=Disabled',
    			'is_required' => 1,
    			'is_gui' => 1,
    			'module' => 'syntax_highlighter'
    		));
		
			return true;

	}

	public function uninstall()
	{
		$this->db->delete('settings', array('module' => 'syntaxhighlighter'));
		return TRUE;
	}


	public function upgrade($old_version)
	{
		// Your Upgrade Logic
		return TRUE;
	}

	public function help()
	{
		// Return a string containing help info
		// You could include a file and return it here.
		return "No documentation has been added for this module.<br />Contact the module developer for assistance.";
	}
}
/* End of file details.php */
