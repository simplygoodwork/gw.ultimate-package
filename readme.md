# The Ultimate Package
The Ultimate Package is [Erskine Design][]'s framework for rapidly developing the front-end of our projects and is under constant development and improvement by the team at Erskine Design, who use it daily.

## Getting started
The package is a barebones framework to help you rapidly develop your projects. Create templates using the [Twig template engine][] in `/templates` as you need them and use `/templates/elements.html` to check your styles.

## Requirements and setup
* A web server to interpret the PHP files in the package
* [SASS][] - Stylesheet language

### Installing SASS
1. **Install**: Run `gem install sass` from the terminal
2. **Enable**: Run `sass --watch static/css:static/css/compiled --style compressed` from the terminal within your project directory

## Not designed for production!
This codebase is designed solely for development usage, we __strongly__
advise you do not use it in production. The routing is as basic as
possible, and thus has little protection built in.

## Credits
The project is currently maintained by [Wil Linssen][], [Garrett Winder][] and [Chris Rowe][]. The original Ultimate Package was created by [Greg Wood][].

## License
The Ultimate Package is Copyright &copy; 2012 [Erskine Design][] and is licensed under the [Creative Commons 3.0][] license.

[Erskine Design]: http://erskinedesign.com/
[Twig template engine]: http://twig.sensiolabs.org/
[SASS]: http://sass-lang.com/

[Wil Linssen]: http://wil-linssen.com/
[Garrett Winder]: http://garrettwinder.com/
[Chris Rowe]: http://chrisrowe.net/
[Greg Wood]: http://gregorywood.co.uk/

[Creative Commons 3.0]: http://creativecommons.org/licenses/by-nc-sa/3.0/
