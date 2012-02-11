<!DOCTYPE html>
<html lang="en" class="js-disabled">

    <head>

        <!-- META -->
        <meta charset="UTF-8" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="author" content="Erskine Design" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title><?php echo $page_title ?> | Site name</title>

        <link rel="author" type="text/plain" href="/humans.txt" />

        <!-- CSS -->
        <link rel="stylesheet" media="all" type="text/css" href="/static/css/screen.css" />
        <link rel="stylesheet" media="all" type="text/css" href="/static/css/components.css" />

        <!-- IE CSS -->
        <!--[if IE 8]><link rel="stylesheet" media="all" type="text/css" href="/static/css/ie/screen_ie8.css" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" media="all" type="text/css" href="/static/css/ie/screen_ie7.css" /><![endif]-->

        <link rel="stylesheet" media="print" type="text/css" href="/static/css/print.css" />

        <!-- ICONS -->
        <link rel="icon" type="image/png" href="/static/images/site/icons/favicon.png" />
        <!--
        <link rel="apple-touch-icon" size="57x57" href="/assets/images/site/icons/touch-iphone.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/site/icons/touch-ipad.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/site/icons/touch-iphone4.png" />
        <link rel="apple-touch-startup-image" size="320x460" href="/assets/images/site/icons/touch-startup.png" />
        -->

        <!-- RSS -->
        <!-- <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/rss/feed.xml" /> -->

        <!-- THE EDJ -->
        <script src="/static/js/EDJ.bootstrap.js"></script>

    </head>

    <body class="<?php echo $body_class ?>" dir="ltr">

        <ul id="nav_access">
            <li><a href="#nav_pri">Skip to navigation</a></li>
            <li><a href="#content_wrapper">Skip to content</a></li>
        </ul> <!-- // #nav_access -->

        <div id="page">

            <div id="header" role="banner">

                <?php if ($location == "home") { ?> 
                    <h1 id="branding">
                        <img src="/static/images/site/branding/branding.png" alt="Your branding" width="480" height="100" />
                    </h1> <!-- // #branding -->
                <?php } else { ?> 
                    <p id="branding">
                        <a href="/">
                            <img src="/static/images/site/branding/branding.png" alt="Your branding" width="480" height="100" />
                        </a>
                    </p> <!-- // #branding -->
                <?php } ?> 

                <form action="#" id="">
                    <fieldset>
                        <dl>
                            <dt><label for="id_search_keywords">Search</label></dt>
                            <dd><input type="text" name="search_keywords" id="id_search_keywords" /></dd>
                        </dl>
                        <button type="submit">Go</button>
                    </fieldset>
                </form>

            </div> <!-- // #header -->

            <ul class="horizontal" id="nav_pri" role="navigation">
                <li<?php if ($location == "home") { ?> class="cur"<?php } ?>><a href="/">Home</a></li>
                <li<?php if ($location == "section_1") { ?> class="cur"<?php } ?>><a href="/section1">Section 1</a></li>
                <li<?php if ($location == "section_2") { ?> class="cur"<?php } ?>><a href="/section2">Section 2</a></li>
                <li<?php if ($location == "section_3") { ?> class="cur"<?php } ?>><a href="/section3">Section 3</a></li>
            </ul> <!-- // #nav_pri -->
