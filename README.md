Syntax Highlighter (with CKEditor plugin) for PyroCMS
=====================================================

This is a simple easy to use syntax highlighter for PyroCMS.
The script uses the famous SyntaxHighlighter javascript plugin to higlight your embedded sourcecode snippets. The code embedding and editing is very simple with the wyswiwyg plugin without editing html.

Features:
---------
- Full WYSIWYG support (in pages, blog, etc. module)
- Autoload highlight scripts for best performance
- Extendable brush (language) and theme support
- Language support: english (en), hungarian (hu)

Install:
--------
1. Copy the syntax_highlighter folder to the shared addon modules path (/addons/shared_addons/modules).
2. Copy the syntax_highlighter_wysiwyg folder to the pyrocms wysiwyg folder (/system/cms/themes/pyrocms/js/ckeditor/plugins)
3. Log in to your Control Panel and install the addon. 
4. Go to Settings / Wysiwyg tab and apply this changes in your config: 

		['pyroimages', 'pyrofiles'], to  ['pyroimages', 'pyrofiles','Code'],
		extraPlugins: 'pyroimages,pyrofiles',  to  extraPlugins: 'pyroimages,pyrofiles'syntax_highlighter_wysiwyg',

5. Enjoy! 

