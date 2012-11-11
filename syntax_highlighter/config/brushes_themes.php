<?php 

// EXTEND BRUSHES
// 1. Copy the brush js file to the syntax_highlighter/js/brushes/ folder.
// 2. Add a new line here..

$config["syntax_brushes"]=array(
  array('alias'=>'applescript'            ,'file'=>'shBrushAppleScript.js',	'label'=>'AppleScript'),
  array('alias'=>'actionscript3 as3'      ,'file'=>'shBrushAS3.js',			'label'=>'AS3'),
  array('alias'=>'bash shell'             ,'file'=>'shBrushBash.js',		'label'=>'Bash-Shell'),
  array('alias'=>'coldfusion cf'          ,'file'=>'shBrushColdFusion.js',	'label'=>'ColdFusion'),
  array('alias'=>'cpp c'                  ,'file'=>'shBrushCpp.js',			'label'=>'Cpp'),
  array('alias'=>'c# c-sharp csharp'      ,'file'=>'shBrushCSharp.js',		'label'=>'CSharp'),
  array('alias'=>'css'                    ,'file'=>'shBrushCss.js',			'label'=>'Css'),
  array('alias'=>'delphi pascal'          ,'file'=>'shBrushDelphi.js',		'label'=>'Delphi-Pascal'),
  array('alias'=>'diff patch pas'         ,'file'=>'shBrushDiff.js',		'label'=>'Diff'),
  array('alias'=>'erl erlang'             ,'file'=>'shBrushErlang.js',		'label'=>'Erlang'),
  array('alias'=>'groovy'                 ,'file'=>'shBrushGroovy.js',		'label'=>'Groovy'),
  array('alias'=>'java'                   ,'file'=>'shBrushJava.js',		'label'=>'Java'),
  array('alias'=>'jfx javafx'             ,'file'=>'shBrushJavaFX.js',		'label'=>'JavaFX'),
  array('alias'=>'js jscript javascript'  ,'file'=>'shBrushJScript.js',		'label'=>'JavaScript'),
  array('alias'=>'perl pl'                ,'file'=>'shBrushPerl.js',		'label'=>'Perl'),
  array('alias'=>'php'                    ,'file'=>'shBrushPhp.js',			'label'=>'Php'),
  array('alias'=>'text plain'             ,'file'=>'shBrushPlain.js',		'label'=>'Text-Plain'),
  array('alias'=>'py python'              ,'file'=>'shBrushPython.js',		'label'=>'Python'),
  array('alias'=>'ruby rails ror rb'      ,'file'=>'shBrushRuby.js',		'label'=>'Ruby'),
  array('alias'=>'sass scss'              ,'file'=>'shBrushSass.js',		'label'=>'Sass'),
  array('alias'=>'scala'                  ,'file'=>'shBrushScala.js',		'label'=>'Scala'),
  array('alias'=>'sql'                    ,'file'=>'shBrushSql.js',			'label'=>'Sql'),
  array('alias'=>'vb vbnet'               ,'file'=>'shBrushVb.js',			'label'=>'Vb'),
  array('alias'=>'xml xhtml xslt html'    ,'file'=>'shBrushXml.js',			'label'=>'Html/X*ml')
);

// EXTEND THEMES 
// 1. Copy the brush js file to the syntax_highlighter/js/brushes/ folder.
// 2. Add a new line here..

// SELECT DEFAULT THEME:
// Set the theme's default key value true.
 
$config["syntax_themes"]=array(
	array("default"=>false,	"file"=>"shThemeDefault.css"),
	array("default"=>false,	"file"=>"shThemeDjango.css"),
	array("default"=>false,	"file"=>"shThemeEclipse.css"),
	array("default"=>false,	"file"=>"shThemeEmacs.css"),
	array("default"=>true,	"file"=>"shThemeFadeToGrey.css"),
	array("default"=>false,	"file"=>"shThemeMDUltra.css"),
	array("default"=>false,	"file"=>"shThemeMidnight.css"),
	array("default"=>false,	"file"=>"shThemeRDark.css")
);