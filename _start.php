<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>

        <!-- META -->
        <meta charset="utf-8" />
        <meta name="author" content="Good Work" />
        <meta name="description" content="" />
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->

        <title><?php echo $page_title; ?> | Project name</title>

        <link rel="author" type="text/plain" href="/humans.txt" />

        <!-- CSS -->
        <link href="/static/css/screen.css" rel="stylesheet" type="text/css" />

        <!--[if lt IE 9]>
        <script src="/static/js/libs/ie/respond.js"></script>
        <![endif]-->

        <!-- ICONS -->
        <link rel="icon" type="image/png" href="/static/images/favicons/favicon.png" rel="icon" />

        <!-- RSS -->
        <!-- <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/rss/feed.xml" /> -->

        <!-- MODERNIZR -->
        <script src="/static/js/libs/modernizr.min.js" async></script>

    </head>

    <body dir="ltr">

        <ul id="nav_access">
            <li><a href="#primary-navigation">Skip to navigation</a></li>
            <li><a href="#primary-content">Skip to content</a></li>
        </ul> <!-- // #nav_access -->

        <header class="wrapper" role="banner">
            <div class="wrapper__container">

                <div class="branding">
                    <?php if ($section == "home") { ?>
                        <img src="/static/images/branding/project-name-logo.png" width="160" height="102" alt="Project name" />
                    <?php } else { ?>
                        <a href="/">
                            <img src="/static/images/branding/project-name-logo.png" width="160" height="102" alt="Project name" />
                        </a>
                    <?php } ?>
                </div> <!-- // .branding -->

            </div> <!-- // .wrapper__container -->
        </header>

        <nav id="primary-navigation" class="wrapper" role="navigation">
            <div class="wrapper__container">

                <ul class="navigation navigation--pri">
                    <li<?php if ($section == "home") { ?> class="cur"<?php } ?>><a href="/">Section 1</a></li>
                    <li<?php if ($section == "section-2") { ?> class="cur"<?php } ?>><a href="">Section 2</a></li>
                    <li<?php if ($section == "section-3") { ?> class="cur"<?php } ?>><a href="">Section 3</a></li>
                    <li<?php if ($section == "section-4") { ?> class="cur"<?php } ?>><a href="">Section 4</a></li>
                </ul>

            </div> <!-- // .wrapper__container -->
        </nav>
