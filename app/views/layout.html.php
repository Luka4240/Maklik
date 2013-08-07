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
    <link rel="stylesheet" href="//f.fontdeck.com/s/css/hHe2eeOPSef/0iNrBlOdAIYMato/lukehoward.me.uk/35410.css" type="text/css" />
    <link rel="stylesheet" href="//f.fontdeck.com/s/css/hHe2eeOPSef/0iNrBlOdAIYMato/www.lukehoward.me.uk/35410.css" type="text/css" />

	<!-- HTML5Shiv.js & Respond.js -->
    <!--[if lte IE 8]>
        <script type="text/javscript" src="jquery/html5shiv.js"></script>
        <script type="text/javscript" src="jquery/respond.js"></script>
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
                    
            
            <?php echo content(); ?>
                    
        </div>
        
        <div class="one-third column">
            <?php foreach($posts as $p):?> 
        <ul class="blog-post-list">
            
           
	       
            <li><a href="<?php echo $p->url?>"><?php echo $p->title ?></a></li>

                </ul>

<?php endforeach;?>
            
        
        
        </div>
        
    </div>
    
    
<footer class="row">
    <div class="sixteen columns">
    <p>&copy; Copyright 2013. Luke Howard.</p>
    </div>    
    
</footer>    
    
    
</body>
</html>
