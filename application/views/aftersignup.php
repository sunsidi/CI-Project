<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up Confirmation | Wrevel - Discover Your World, Host & Experience Events</title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body style="background-image:url('<?php echo $PATH_IMG?>welcome_background.png');background-size: 100% ; ">
<!--header
===========================================-->
  
    <div class="navbar"  role="navigation" style="background:#6A8BA8; height:60px; border-radius:none; -moz-box-shadow:   1px 2px 2px 3px rgba(0, 0, 0, .2);-webkit-box-shadow: 1px 2px 2px 3px rgba(0, 0, 0, .2); box-shadow:  1px 2px 2px 3px rgba(0, 0, 0, .2); position:relative">
    	<div class="logo dropdown navbar-brand pull-left" style="margin-left:15px;">
        	<button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" style="background:none; padding:0;">
        	<img src="<?php echo $PATH_IMG?>menu_button.png"> </button>
            <ul class="dropdown-menu" role="menu">
            	<li><a href="<?php echo base_url()."showroom/profile"?>">MyWrevs</a></li>
  			</ul>
        </div>
       <!-- <a class="navbar-brand" href="https://www.facebook.com/wrevelinc" style="padding:5px 10px; margin-left:20px;"><img src="<?php echo $PATH_IMG?>facebook_icon.png" alt="wrevel-facebook"/>
		</a>
		<a class="navbar-brand" href="https://twitter.com/wrevelco" style="padding:5px 10px;"><img src="<?php echo $PATH_IMG?>twitter_icon.png" alt="wrevel-twitter"/>
		</a>-->
        
          <a href="#" class="brand" style="margin:0 auto; float:none; position:absolute; left:50%; margin-left:-70px; display:block; margin-top:5px;"><img src="<?php echo $PATH_IMG?>wrevel_logo_header.png" alt="wrevel logo" style="width:150px; display:block;"/></a>
        
        
        <div id="navbarCollapse" class="collapse navbar-collapse"  style="float: right;">
        <form role="search" class="navbar-form navbar-left" >
            <div class="form-group">
                <input type="text" placeholder="Search" class="form-control" style="background:#B4C4D3;border:none;color:white;">
            </div>
        </form>
    	</div>
        
    </div>
    
<!--end of header-->

<!--content
==============================================-->
    
    <div class="col-md-offset-3" style="width: 500px; margin-top: 10%;">
                
        <div class="panel" style="border:none; width: 120%;">
    
            <div class="panel-heading" style="background-color: #628DA3;padding-top:10px;padding-bottom:2px;">
                
               <p style="font-size: 200%; color: white;text-align: center; ">
                <img src="<?php echo base_url(). 'src/data/img/latestwrevs_icon.png'?>"style="width:40px;z-index:1;"/>

                
                    Wrevel
                </p>
                
            </div>
      
            <div class="panel-body" style="background: rgba(228,234,239,0.8);">

                <P style="font-size: 20px;">We have just sent you a confirmation email.<br/>Please check it and confirm your account with the link provided.<br/>Please check your Spam folder if you can't see the email in your inbox.</br>Click 
				<a href="<?php echo base_url().'showroom/profile'?>">here</a> to sign in after you have done that.</P>
		
            </div>
        </div>
        
        </div>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
	<script src="<?php echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41514976-1', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html> 