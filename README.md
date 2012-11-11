Syntax Highlighter (with CKEditor plugin) for PyroCMS
=====================================================

This is a simple easy to use syntax highlighter for PyroCMS.
The script uses the famous SyntaxHighlighter javascript plugin to higlight your embedded sourcecode snippets. The code embedding and editing is very simple with the wyswiwyg plugin without editing html.

Features:
---------
- Full WYSIWYG support (in pages, blog, etc. module)
- Autoload highlight scripts for best performance
- Customizable theme
- All SyntaxHighlighter native brushes aviable: 
	- ActionScript3
	- Bash/shell		
	- ColdFusion	
	- C#	
	- C++	
	- CSS
	- Delphi
	- Diff
	- Erlang	
	- Groovy	
	- JavaScript	
	- Java	
	- JavaFX	
	- Perl	
	- PHP	
	- Plain Text	
	- PowerShell	
	- Python	
	- Ruby	
	- Scala	
	- SQL	
	- Visual Basic
	- XML
	
- Extendable brush (language) and theme support
- Plugin language support: english (en), hungarian (hu)

Install:
--------
1. Copy the syntax_highlighter folder to the shared addon modules path (/addons/shared_addons/modules).
2. Copy the syntax_highlighter_wysiwyg folder to the pyrocms wysiwyg folder (/system/cms/themes/pyrocms/js/ckeditor/plugins)
3. Log in to your Control Panel and install the addon. 
4. Go to Settings / Wysiwyg tab and apply this changes in your config: 

		['pyroimages', 'pyrofiles'], to  ['pyroimages', 'pyrofiles','Code'],
		extraPlugins: 'pyroimages,pyrofiles',  to  extraPlugins: 'pyroimages,pyrofiles'syntax_highlighter_wysiwyg',

5. Enjoy! 

Color theme configuration:
-------------------------
Set your default theme in the syntax_highlighter/config/brushes_themes.php


Extend brushes:
---------------
Here are some other 3rd party brushes: http://www.undermyhat.org/blog/2009/09/list-of-brushes-syntaxhighligher/

1. Copy your shMyBrush.js to the syntax_highlighter/js/brushes/ folder.
2. Add a new line in the syntax_highlighter/config/brushes_themes.php file.

The brush will be added to the wysiwyg plugin automaticaly.
