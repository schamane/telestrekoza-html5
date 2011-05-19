#  HTML5 Boilerplate (Wordpress Barebones Remix)

The theme developer's WordPress theme.

__Development is currently underway. Expect a lot of instability.__


## Features

* Faithful to the HTML5 specifaction.
* Usable, out of the box.
* Quickly disable these built-in styles from the options page and make your own.
* Skeleton CSS document ready for you to customize.
* Clean, self-documenting code. (In PHP, no less!)
* Universal device and browser support. 
* Supports Wordpress' Widget system.
* Hooked into WordPress' administration system. 

#### top.php & bottom.php
<ul>
	<li>We use a <a href="http://paulirish.com/2010/the-protocol-relative-url/">protocol-relative url</a> for the jQuery include, to prevent the mixed content warning.</li>
	<li>The order of <code>&lt;meta></code> tags, <code>&lt;title></code>, and charset has been <a href="https://github.com/paulirish/html5-boilerplate/wiki/The-markup">documented more extensively now</a>. TL;DR: You are <a href="https://github.com/paulirish/html5-boilerplate/commit/4b67ea5cabb8c2b75faf2e255344cdffdf190464">safe to use the boilerplate's order of tags</a>.</li>
	<li>We've shortened up the Google Analytics snippet.</li>
	<li>Added an ARIA <code>role</code> attribute to <code>div#main</code>. This assumes your main content goes within that container.</li>
	<li>IE9 doesn't get it's own conditional class! Yay!</li>		
</ul>


## What else is there?

jQuery, Google Analytics, Modernizr, QUnit, Chrome Frame, etc.

## Configuration options

Configuratble options for this theme are under the *Settings* tab in the Wordpress Administration area.

* _Font style_ Options from Nathan Ford's [Revised Font Stacks](http://www.awayback.com/revised-font-stack/)  
* _Google Analytics tracker ID_ Automatic Google Analytics integration.

Providing any of these will create a link on your blog's sidebar:

* _Twitter user name_
* _Facebook user name_
* _Google user name_    

# Theme anatomy
* */css/style.css* The base HTML5 Boilerplate CSS file. Includes CSS reset, mobile fixes, print display, etc...
* */css/wordpress.css* All elements added to theme Wordpress are included in this file.

