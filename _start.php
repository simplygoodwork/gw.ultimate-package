<!DOCTYPE html>
<html lang="en" class="js-disabled">

<head>
    
    <!-- META -->
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="Copyright" content="" />
    
    <link type="text/plain" rel="author" href="/humans.txt" />
    
    <!-- TITLE -->
    <title><?php echo $page_title ?> | Site name</title>
    
    <!-- CSS -->
    <link href="/static/css/screen.css" rel="stylesheet" media="screen" />
    
    <!--[if IE 8]><link href="/static/css/screen_ie8.css" rel="stylesheet" media="screen" /><![endif]-->
    <!--[if lte IE 7]><link href="/static/css/screen_ie.css" rel="stylesheet" media="screen" /><![endif]-->
    <!--[if IE 7]><link href="/static/css/screen_ie7.css" rel="stylesheet" media="screen" /><![endif]-->
    <!--[if IE 6]><link href="/static/css/screen_ie6.css" rel="stylesheet" media="screen" /><![endif]-->
        
    <link href="/static/css/print.css" rel="stylesheet" media="print" />
    
    <!-- ALLOW JAVASCRIPT STYLING -->
    <script>
        docElement = this.document.documentElement;
        docElement.className = docElement.className.replace(/\bjs-disabled\b/,'') + ' js-enabled';
    </script>
    
    <!-- ICONS -->
    <link rel="shortcut icon" href="/static/images/site/icons/favicon.png"/>
    <!-- <link rel="apple-touch-icon" href="/static/images/site/icons/apple_touch-icon.png" /> -->
    <!-- <link rel="apple-touch-startup-image" href="/static/images/site/icons/apple_touch-startup.png" /> -->
    
</head>

<body class="<?php echo $body_class ?>">

<ul id="nav_access">
    <li><a href="#navigation_pri">Skip to navigation</a></li>
    <li><a href="#content_wrapper">Skip to content</a></li>
</ul>

<div id="page">
    
    <div id="header">
    
        <?php if ($location == "home") { ?> 
            <h1 id="branding">
                <img src="/static/images/site/branding.png" alt="Branding" width="300" height="38" />
            </h1>
        <?php } else { ?> 
            <p id="branding">
                <a href="/">
                    <img src="/static/images/site/branding.png" alt="Branding" width="300" height="38" />
                </a>
            </p>
        <?php } ?> 
        
        <form action="" id="site_search">
            <fieldset>
                <div>
                    <label for="site_search_keywords">Search</label>
                    <input type="text" id="site_search_keywords" size="20" placeholder="Keywords" title="Keywords" />
                </div>
                <div class="submit">
                    <input type="submit" value="Go" />
                </div>
            </fieldset>
        </form>
    
    </div> <!-- // #header -->
    
    <ul id="navigation_pri">
        <li<?php if ($location == "home") { ?> class="cur"<?php } ?>><a href="/">Home</a></li>
        <li<?php if ($location == "section1") { ?> class="cur"<?php } ?>><a href="/section1">Section1</a></li>
        <li<?php if ($location == "section2") { ?> class="cur"<?php } ?>><a href="/section2">Section2</a></li>
        <li<?php if ($location == "section3") { ?> class="cur"<?php } ?>><a href="/section3">Section3</a></li>
    </ul> <!-- // #navigation_pri -->
