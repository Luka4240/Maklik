<!DOCTYPE html>
<html>
<head>
	<title><?php echo isset($title) ? _h($title) : config('blog.title') ?></title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />
	<meta name="description" content="<?php echo config('blog.description')?>" />

	<link rel="alternate" type="application/rss+xml" title="<?php echo config('blog.title')?>  Feed" href="<?php echo site_url()?>rss" />

	<link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet" />
    <link href="http://lukehoward.me.uk/dev/stylesheets/style.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&subset=latin,cyrillic-ext" rel="stylesheet" />

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>
<body>
    <header class="full-row page-header">
    <div class="row">
        <div class="sixteen columns header">
            <img class="logo" src="http://lukehoward.me.uk/dev/images/logo.png" alt="Luke Howard" width="300" height="80" />
            <nav>
                <ul class="mooi-menu-horizontal  mooi-menu-right">
                    <li><a href="#">Home</a></li>    
                    <li><a href="#">About</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>        
</header> 
	
    <div class="row">
        <div class="two-thirds column">
        
        <?php echo content() ?>
        
        </div>
    
    </div>
    
    
<footer class="row">
    <div class="sixteen columns">
    <p>&copy; Copyright 2013. Luke Howard.</p>
    </div>    
    
</footer>    
    
    
</body>
</html>
