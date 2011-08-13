<!DOCTYPE html>
<html lang="en" class="js-disabled">

    <head>
    
        <!-- METADATA -->
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta name="author" content="Erskine Design" />
        <link rel="author" type="text/plain" href="/humans.txt" />
        <title><?php echo $page_title ?> | Site name</title>
        
        <!-- CSS -->
        <link rel="stylesheet" media="all" type="text/css" href="/static/css/screen_prototype.css" />
        
        <!-- INTERNET EXPLORER CSS -->
        <!--[if IE 8]><link rel="stylesheet" media="all" type="text/css" href="/static/css/ie/screen_ie8.css" /><![endif]-->
        <!--[if lte IE 7]><link rel="stylesheet" media="all" type="text/css" href="/static/css/ie/screen_ie.css" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" media="all" type="text/css" href="/static/css/ie/screen_ie7.css" /><![endif]-->
        <!--[if IE 6]><link rel="stylesheet" media="all" type="text/css" href="/static/css/ie/screen_ie6.css" /><![endif]-->
        
        <link rel="stylesheet" media="print" type="text/css" href="/static/css/print.css" />
        
        <!-- ICONS -->
        <link rel="icon" type="image/png" href="/static/images/site/icons/favicon.png" />
            
        <!-- RSS -->
        <!-- <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/rss/feed.xml" /> -->
        
        <!-- ALLOW JAVASCRIPT STYLING -->
        <script>
            docElement = this.document.documentElement;
            docElement.className = docElement.className.replace(/\bjs-disabled\b/,'') + ' js-enabled';
        </script>
    
    </head>
    
    <body class="<?php echo $body_class ?>">
    
        <ul id="nav_access">
            <li><a href="#navigation_pri">Skip to navigation</a></li>
            <li><a href="#content_wrapper">Skip to content</a></li>
        </ul> <!-- // #nav_access -->
        
        <div id="page">
        
            <div id="header">
            
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
                
                <form action="#" id="site_search">
                    <fieldset>
                        <div>
                            <label for="site_search_keywords">Search</label>
                            <input type="search" id="site_search_keywords" size="20" placeholder="Keywords" title="Keywords" />
                        </div>
                        <div class="submit">
                            <input type="submit" value="Go" />
                        </div>
                    </fieldset>
                </form> <!-- // #site_search -->
            
            </div> <!-- // #header -->
            
            <ul id="navigation_pri">
                <li<?php if ($location == "home") { ?> class="cur"<?php } ?>><a href="/">Home</a></li>
                <li<?php if ($location == "section_1") { ?> class="cur"<?php } ?>><a href="/section1">Section 1</a></li>
                <li<?php if ($location == "section_2") { ?> class="cur"<?php } ?>><a href="/section2">Section 2</a></li>
                <li<?php if ($location == "section_3") { ?> class="cur"<?php } ?>><a href="/section3">Section 3</a></li>
            </ul> <!-- // #navigation_pri -->
    