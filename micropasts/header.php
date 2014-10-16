<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">

    <title>MicroPasts</title>
   
    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>

<body background='<?php include ("bg.php"); echo $selectedBg; ?>'>

<div class="header-container">

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="menu-container">

      <div class="navbar-header">
         <a href="http://micropasts.org/" class="logo"><img src="http://micropasts.org/wp-content/uploads/2014/04/mp_transparent.png" alt="MicroPasts" width="130" height="24"></a>
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
      </div>  
      <div class="navbar-collapse collapse">  
         <ul class="nav navbar-nav">
            <li><a href="http://crowdsourced.micropasts.org/">Crowd-sourcing</a></li>
            <li><a href="https://crowdfunded.micropasts.org/">Crowd-funding</a></li>
            <li><a href="http://community.micropasts.org">Forum</a></li>
            <li<?php if (is_page('data-centre')) { echo " class=\"active\""; }?>><a href="/data-centre">Data</a></li>
            <li<?php if (is_page('learning')) { echo " class=\"active\""; }?>><a href="/learning">Learning</a></li>
            <li<?php if (is_page('About')) { echo " class=\"active\""; }?>><a href="/about">About</a></li>
            <li><a href="http://research.micropasts.org">Blog</a></li>
         </ul>
      </div>

   </div>
   </div>
</div>