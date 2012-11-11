<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Syntax Highlighter Events Class
 * 
 * @package        PyroCMS
 * @subpackage    syntax_highlighter
 * @category    events
 * @author        Peter Varga - Binvision Ltd.
 * @website        http://www.vargapeter.com
 */
class Events_Syntax_Highlighter {
    
    protected $ci;
    
    public function __construct()
    {
        $this->ci =& get_instance();
        Events::register('public_controller', array($this, 'run'));
    }
    
    public function run()
    {
    	$this->ci->load->library("Settings");

    	$syntaxhighlighter=Settings::get('syntaxhighlighter');
    	if($syntaxhighlighter==1){
    	   	$this->ci->load->config("syntax_highlighter/brushes_themes");

    		$plugin_path=SHARED_ADDONPATH.'modules/syntax_highlighter/';
	    	Asset::add_path('syntax_highlighter', $plugin_path);

	    	// include core files
	    	$this->ci->template->append_js("syntax_highlighter::shCore.js");
	    	$this->ci->template->append_js("syntax_highlighter::shAutoloader.js");
	    	$this->ci->template->append_css("syntax_highlighter::shCore.css");
	    	
	    	// include selected theme	
	    	$themes=$this->ci->config->item("syntax_themes");
	    	foreach($themes as $theme){
	    		if($theme["default"]) $this->ci->template->append_css("syntax_highlighter::".$theme["file"]);
			}
	    		    	
	    	// include autoload script 
	    	$brushes=$this->ci->config->item("syntax_brushes");
	    	$ls="$(document).ready(function(){ SyntaxHighlighter.autoloader.apply(null,[";
	    	foreach($brushes as $brush){
				$ls.="'".$brush["alias"]." /".$plugin_path."js/brushes/".$brush["file"]."',";
			}
			$ls.="]); SyntaxHighlighter.defaults['toolbar'] = false; SyntaxHighlighter.all(); });";
			
	    	$this->ci->template->append_metadata('<script type="text/javascript">'.$ls.'</script>');
	    }    	
    }    
    
}
/* End of file events.php */