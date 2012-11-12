Syntax Highlighter module for PyroCMS
=====================================
with CKEditor WYSIWYG plugin
----------------------------

This is a simple and easy to use syntax highlighter for PyroCMS.
The script uses the SyntaxHighlighter javascript plugin to higlight your embedded sourcecode snippets. You don't need to edit <pre> tags anymore, the embedding and editing is very simple with the wyswiwyg plugin.
You can easily change your highlighting color theme and extend with your favourite programming language.

Features:
---------
- Full WYSIWYG support for all text editor  (in pages, blog, etc.)
- Autoload highlight scripts for best performance
- Theme support
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
	
- .. and you can easily extend with your favourite programming language brush.
- Module languages: english (en), hungarian (hu)

Install:
--------
1. Copy the syntax_highlighter folder to the shared addon modules path (/addons/shared_addons/modules).
2. Copy the syntax_highlighter_wysiwyg folder to the pyrocms wysiwyg folder (/system/cms/themes/pyrocms/js/ckeditor/plugins)
3. Log in to your Control Panel and install the addon. 
4. Go to Settings / Wysiwyg tab and apply this changes in the "$('textarea.wysiwyg-advanced') ... " config section: 

		['pyroimages', 'pyrofiles'], to  ['pyroimages', 'pyrofiles','Code'],
		extraPlugins: 'pyroimages,pyrofiles',  to  extraPlugins: 'pyroimages,pyrofiles,syntax_highlighter_wysiwyg',

5. Enjoy! 


Change color theme
------------------
Set your default theme in the syntax_highlighter/config/brushes_themes.php


Add new color theme
-------------------
1. Copy your shThemeName.css to the syntax_highlighter/css/ folder.
2. Add a new line in the syntax_highlighter/config/brushes_themes.php file.


Add new brush
-------------
You can download other 3rd party programming language brushes here: 
http://www.undermyhat.org/blog/2009/09/list-of-brushes-syntaxhighligher/

1. Copy your shMyBrush.js to the syntax_highlighter/js/brushes/ folder.
2. Add a new line (aliases + filename + name) in the syntax_highlighter/config/brushes_themes.php file.

The brush will be aviable in the wysiwyg editors and highlight your code automaticaly. 
