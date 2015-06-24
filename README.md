# This version is adapted to Sumedia coding standards.
It contains a log in the [Sumedia file]() where you can see what I've changed and why.
I've tried to adapt it as much to everybody's needs and sometimes these things change.

If the project requires it, you can change the templates.
Do not:
- change the base
- change _utilities.scss except variables.

This theme contains
* [SusyTwo]()
* [Breakpoint]()
* font-awesome in sass and the fonts
* html5.js a HTML5 shiv




SASS
     normalize by john albin
     variables
     tools (helpers, mixins and such)
JS 
     --html5.js
     custom.js
     modernizr.js
PAGES
     style.css
     index.php
     header.php     
     home.php
     footer.php
     page.php
     functions.php
MU PLUGINS
     all-in-one site migration
     security
     wp-infinity

The markup for the test pages (html elements & image alignment)


31 January 2015

v0.0.1
* all the gems are in place.
* susytwo imported
* sass/compass project started
* git repo initiated
* normalize.scss (by john albin included)

* susytwo implementation
* variables are better organized
1 February 2015

V0.0.1
* Included a basestyle to give all the HTML elements their base styling which stem from variables.scss
* Removed all IE7/8 nonsense from normalize.scss (bring on the fanciness)
* Basestyle has more stuff in it.


07 February 2015

V0.0.2
* html5.js has been added
* Typography partial added
* fixed the google_webfont function

* responsive images pasted in from WP

08 February 2015
* fix. Moved variables to utilities
* added forms, images and other styling

09 February 2015
* jquery added

12 may 2015
* updated Gulp
* removed unnecessary .css

15 may 2015
* fontawesome added
* cleanup for some partials
* added home.php for frontpage


TO DO
=====
1. scripts (custom.js and modernizr)
2. clean the pages.
3. document the variables. 
4. put the helper texts in this theme folder.
5. think about the partial names
6. Add form elements to the test-content
7. Add gulp-notify in Gulpfile.
8. Update jquery.

Partial dumplist
================
(this list is just a temporary measure)
Tables
Captions
Forms
Blockquotes
Typography
Fonts
Icons
Images
Navigation
