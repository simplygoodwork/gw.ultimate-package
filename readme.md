# The Ultimate Package
The Ultimate Package is [Erskine Design][]'s framework for rapidly developing 
the front-end of our projects and is under constant development and improvement 
by the team at Erskine Design, who use it daily.

## Getting started
The package is a barebones framework to help you rapidly develop your projects. 
Create templates using the [Twig template engine][] in `/templates` as you need
them and use `/templates/elements.html` to check your styles.

The app will render your template directly from the url, so if you go to
`/my/page.html` it will render the template in `/templates/my/page.html`.

## Requirements and setup
* A __PHP >= 5.3__ web server to interpret the PHP files in the package
* [SASS][] - Stylesheet language

### Installing the Ultimate Package
1. Clone the repository, or probably better still - [download it][download] so you
don't have all of our Git history.
2. Install the submodules by running `git submodule init` then `git submodule update`
3. Point your web server to the `/web` folder

### Installing SASS
1. **Install**: Run `gem install sass` from the terminal
2. **Enable**: Run `sass --watch web/static/scss:web/static/css --style compressed` 
from the terminal within your project directory

## Not designed for production!
This codebase is designed solely for development usage, we __strongly__
advise you do not use it in production. The routing is as basic as
possible, and thus has little protection built in.

## Credits
The project is currently maintained by [the team at Erskine Design][]. The original Ultimate Package was created by [Greg Wood][].

![Erskine logo](data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFcAAAAeCAMAAABuQXL6AAAAM1BMVEX///8AAAAPDw/Pz8+vr69/f39vb29fX19PT08/Pz8vLy8fHx/v7+/f39+/v7+Pj4+fn58bJ9idAAACFklEQVR4XrWW68rcMAxEdeT7Pe//tOUTcU3DFpZtd345DjkaRkJE3lTCyRc0+A53gXxDiTq/wW2Ahv+OnUCD65l6/kvoV36PWyBJZBvetMIJx+fijg1eVvMPrIcmEjbXs/bndTuOQDs20guso4j0UNn43iCK5J1Du7kJoPW7xNojLgvtB9d9WOPnECgyFUhyvEwZMLZ7O3RMwRwS5LpTGYo/WK+ADjE7ASCctFCRQhHTPlyQe6ZZCe1S6EaqJwUrUpMSDFMBdScFKJLYdsDffIZ0m5JJlnmXSxbNViKJTIJIwRTPm1JJiX0TaZufRSSjXSahN8zJBU6OlG4dl8mf3AV2xXahxN01fw9Fn8RMMKzld0S12t7sqms7hwsuD7B7vO48HLTdVa1AvbFJnlxRFWMsmaD+xkrElC1thZ26Px3HnnqE2h8LYIgndQXzcSlECdaVBnUkO0rCpmxUKLLlY4Uakm63R5E6C7GCoUScgtp5YCYS5JAB1ozKY1skAJqXh4Zi0kY7Y8uyLBjn09QwoY9VU0p6Urc/aK7tfsbNzdS7Ui7Fi2ugqZHfXt26ri5N++/HanEp4YWN4t7DXvdkebeXgLNNIQ6mfKxlWNPZWcYN8Dk2PbAXzW7DXjMfqT+xkoh7wyjrQ6yrT6xkavc2cv3jP4fAwZ4cTFNkUD/LoEIZLwKHZnMw+kfcCullONPJv6gR5Qv6BbiLD7urGduOAAAAAElFTkSuQmCC)

## License
The Ultimate Package is Copyright &copy; 2012 [Erskine Design][] and is licensed under the [Creative Commons 3.0][] license.

[Erskine Design]: http://erskinedesign.com/
[Twig template engine]: http://twig.sensiolabs.org/
[SASS]: http://sass-lang.com/

[the team at Erskine Design]: https://twitter.com/erskinedesign/team/members
[Greg Wood]: http://gregorywood.co.uk/

[Creative Commons 3.0]: http://creativecommons.org/licenses/by-nc-sa/3.0/

[download]: https://github.com/erskinedesign/ed.ultimate_package/zipball/master