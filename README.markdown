Ultimate Package
================

The Ultimate Package is [Erskine Design][ed]'s framework for rapidly developing the front-end of our projects, and was initially realised by the gentleman [Gregory Wood][c1].

Status
======

The package is under constant development and improvement by the team at Erskine Design, who use it daily.

Developers
----------

The project is currently maintained by the team at Erskine Design, including [Wil Linssen][wl], [Garrett Winder][gw] and [Chris Rowe][cr].

[wl]: http://wil-linssen.com/
[gw]: http://garrettwinder.com/
[cr]: http://chrisrowe.com/

Requirements
------------

A web server to interpret the PHP files in the package, and a browser to render them.

Getting started
---------------

The package is a barebones framework to help you rapidly develop your projects. Create templates using the [Twig template engine][http://twig.sensiolabs.org/] in `/templates/` as you need them, use `/templates/elements.html` to check your styles.

*Installing SASS*

If you don't already have SASS installed, open a terminal window and type: `gem install sass`

If you're using TextMate, be sure to install the TextMate bundle:

* [TM1][https://github.com/kuroir/SCSS.tmbundle]
* [TM2][https://gist.github.com/1633355]

To run SASS from the command line, open a terminal window and type: `sass --watch static/css --style compressed`

Before you deploy to production
-------------------------------

Firstly, don't forget to remove the following files or folders:

* `templates/elements.html`
* `static/images/dev/`

Then, the following are also worth considering:

* Update your `humans.txt` file in the root directory
* Update the holding assets in `/holding/`

License
=======

Copyright 2012 [Erskine Design][ed].

Additional Credits
------------------

* [Greg Wood][c1] for the original Ultimate Package

[c1]: http://gregorywood.co.uk/
[ed]: http://erskinedesign.com/