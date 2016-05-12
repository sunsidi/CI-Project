<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MyWrevs</title>

<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">

<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<!--header
===========================================-->
<div class="navbar"  role="navigation" style="background:#6A8BA8; height:60px; position:relative;-moz-box-shadow:   1px 2px 2px 3px rgba(0, 0, 0, .2);-webkit-box-shadow: 1px 2px 2px 3px rgba(0, 0, 0, .2); box-shadow:  1px 2px 2px 3px rgba(0, 0, 0, .2); ">
      <div class="logo dropdown navbar-brand">
          <button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" style="background:none; padding:0;">
          <img src="<?php echo $PATH_IMG?>menu_button.png" style="margin-left:15px;"> </button>
            <ul class="dropdown-menu" role="menu">
               <li><a href="#">Username</a></li>
          <li><a href="#">Inbox <span class="badge" style="background:#BE1E2D;">#</span></a></li>
          <li><a href="notifications.html">Notifications <span class="badge" style="background:#BE1E2D;">#</span></a></li>
          <li><a href="#">Search</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo base_url()."main/loginout" ?>">Logout</a></li>
        </ul>
        </div>
        <div class="profile">
          <!--profile image-->
          <a class="navbar-brand collapse navbar-collapse" href="#"><img src="<?php echo base_url()."uploads/".$image_key?>" 
                                                style="width:55px; height:55px; border-radius: 150px;
                                                margin-left:10px; border:2px solid #662E91;"/></a>
          
            <a href="#" class="navbar-brand collapse navbar-collapse">
            <p style="color: white; font-size: 20px; margin-left:10px;margin-top:18px;"><?php echo $fullname?> </p></a>
        </div>

        <div class="abcd">
        <a class="navbar-brand collapse navbar-collapse " href="<?php echo base_url()."chat/MessageView"?>"><button class="btn" type="button" style="background:none;float:left; margin-top:5px;"><i class="fa fa-envelope" style="color:white; font-size:30px;"> <span class="badge" style="background:#BE1E2D;"></span></i></button></a>

        <div class="navbar-brand dropdown collapse navbar-collapse" style="margin-top:5px;">
        <button class="btn" type="button" onclick = "myFunction()" id="dropdownMenu1" data-toggle="dropdown" style="background:none;">
          
            <i id = "herdzz" class="fa fa-user" style="color:white; font-size:30px;">
                    <span class="badge" id = "here" style="background:#BE1E2D;"><?php echo $counters ?> </span>
            </i>
   
          </button>

          


         <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="text-align:center; width:500px; background:#F2F2F2; padding:0; padding-bottom:10px;">
            <p style="background:#1D75BD; color:white;font-size:25px; padding:10px;"><strong>Notifications</strong> <a href="#"><i class="fa fa-cog pull-right" ></i></a></p>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                      
                      <div style="padding:10px; text-align:left;">
                          <p style="color:gray; text-align:center;"><?php echo $time_sent ?> &nbsp;&nbsp;</p>
                            <p><img src="<?php echo base_url()."uploads/".$notification_senders_image?>" style="width:55px; height:55px;border-radius: 150px;border:2px solid #662E91;"><span style="color:white;background:#662E91; padding:5px 10px; border-radius:5px;"> <?php echo $last_word?> </span>  

            
                   <?php echo $notification?>
                     </p>


                        </div>



                        </a>
                    </li>
          
            
                       
         </ul>
      </div>
      </div>
      
       
          <a href="#" class="brand" style="margin:0 auto; float:none; position:absolute; left:50%; margin-left:-50px; display:block; "><img src="<?php echo $PATH_IMG?>wrevel_logo.png"
                                                style="width:150px; margin-top:10px;display:block;" /></a>
        
        
        <div id="navbarCollapse" class="collapse navbar-collapse"  style="float: right;">
        <div role="search" class="navbar-form navbar-left">
          <?php echo form_open(base_url().'main/get_latest_events/')?>
            <div class="form-group">
                <input type="text" placeholder="Search" class="form-control" style="background:#B4C4D3;border:none;color:white;">
                <!-- this is commented just incase you need it.
                <type="text" name='search' class="form-control" placeholder="Search"> -->
            </div>
             <?php echo form_close()?>
        </div>
      </div>
        
    </div>
<!--end of header-->

<!--tabs
===========================================-->
     <div class="row" style="text-align:center;">
            <div class="btn-group btn-group-lg">
                <a href="<?php echo base_url()."main/mywrevs"?>"><button type="button" class="btn tab active" >mywrevs</button></a>
                <a href="<?php echo base_url()."event/hub"?>"><button type="button" class="btn tab" >the hub</button></a>
                <a href="<?php echo base_url()."showroom/profile"?>"><button type="button" class="btn tab">showroom</button></a>
            </div>
    </div>

<!--end of tabs-->

<!--content
==============================================-->
<div class="container">
<div class="row" style="padding-bottom:50px;">
   
       
                <p style="color: white; margin-top:10%; text-align:center; font-size: 60px; font-family:GillSans;">Discover your world.</p>
          
       
    	<div style="margin-top:70px;">
        <div class="col-md-6 col-xs-10">
        	<div style="background:rgba(237,28,36,0.7); width:98px; height:30px; margin-left: 50%;">
        		<p style="color: white;font-size:27px;">exclusive</p>
        	</div>
            <a href="<?php echo base_url()."main/get_related_events/"?>hotspots"><img src="<?php echo $PATH_IMG?>/hotspots_button.png" style="width:26%;margin-left: 14%;margin-top:2%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>icebreakers"><img src="<?php echo $PATH_IMG?>/icebreakers_button.png" style="width:26%;margin-left: 3%;margin-top:2%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>culture"><img src="<?php echo $PATH_IMG?>/culture_button.png" style="width:26%;margin-left: 3%;margin-top:2%;"></a>
                <div style="position:absolute; background:rgba(237,28,36,0.7); width:90px; height:30px;margin-left: 48%;margin-top:15%;">
        		<p style="color: white;font-size:27px;">interests</p>
        	</div>
            <a href="<?php echo base_url()."main/get_related_events/"?>meetups"><img src="<?php echo $PATH_IMG?>/meetups_button.png" style="width:26%; margin-top:22%; margin-left: 14%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>explore"><img src="<?php echo $PATH_IMG?>/exploringyourcity_button.png" style="width:26%; margin-top:22%; margin-left: 3%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>romance"><img src="<?php echo $PATH_IMG?>/loveandromance_button.png" style="width:26%; margin-top:22%; margin-left: 3%;"></a>
            <a href="<?php echo base_url()."main/get_latest_events/"?>"><img src="<?php echo $PATH_IMG?>/clickhereforlatestwrevs_button.png" style="margin-left:90%;width:27%; margin-top:-77%;"></a>
            <img src="<?php echo $PATH_IMG?>/horizontal.png" class="line" style="width:82%; height: 2px; margin-top: -82%; margin-left: 10%;">
            <img src="<?php echo $PATH_IMG?>/horizontal.png" class="line" style="width:2px; height: 222px; margin-top: -150%; margin-left: 104%;">
            <img src="<?php echo $PATH_IMG?>/horizontal.png" class="line" style="width:2px; height: 222px; margin-top: -38%; margin-left: 104%;">
        </div>
    
        
        <div class="col-md-5 col-xs-10">
                	<div style="background:rgba(237,28,36,0.7); width:108px; height:35px; margin-left:50%; margin-top:-3%;">
        		<p style="color: white;font-size:27px;">categories</p>
        	</div>
            <a href="<?php echo base_url()."main/get_related_events/"?>parties"><img src="<?php echo $PATH_IMG?>/parties_button.png" style="margin-left:24%;width:31%; margin-top:2%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>clubs"><img src="<?php echo $PATH_IMG?>/clubs_button.png" style="width:31%; margin-top:2%; margin-left:8%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>concerts"><img src="<?php echo $PATH_IMG?>/concerts_button.png" style="margin-left:23%;width:32%; margin-top:1%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>festivals"><img src="<?php echo $PATH_IMG?>/festivals_button.png" style="margin-left:7%;width:32%; margin-top:1%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>lounges"><img src="<?php echo $PATH_IMG?>/lounges_button.png" style="margin-left:23%;width:32%; margin-top:1%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>bars"><img src="<?php echo $PATH_IMG?>/bars_button.png" style="margin-left:8%;width:32%; margin-top:1%;"></a>
        </div>
        </div>
    
        <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2" style="background-color: #4e80bb; margin-top:5%; border-radius:10px; -moz-box-shadow:4px 4px 4px rgba(0, 0, 0, .3);-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, .3);box-shadow:4px 4px 4px rgba(0, 0, 0, .3);">
            <div class="col-md-8" style="padding-bottom: 10px; padding-left: 30px;">
                <p style="color: white;font-family:GillSans;font-size:60px;">what is mywrevs?</p>
                <p class="text" style="color: white; font-size: 220%;"><b>mywrevs</b> allows you to create/host your own parties and events, which also include a unique ticket system.</p>
            </div>
            <div class="col-md-4">
            <a href="#"  data-toggle="modal" data-target="#create"><img src="<?php echo $PATH_IMG?>theme_image_3.png"
                            style="width:80%; margin-left:7%; margin-top:25%;"/></a>
            <!--<a href="<?php echo base_url()."event/create_wrevel_view"?>"><img src="<?php echo $PATH_IMG?>theme_image_3.png"
                            style="width:80%; margin-left:7%; margin-top:25%;"/></a>-->
            </div>
        </div>
        
        <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2" style="background-color: #6baaaf; margin-top:5%;border-radius:10px; -moz-box-shadow:4px 4px 4px rgba(0, 0, 0, .3);-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, .3);box-shadow:4px 4px 4px rgba(0, 0, 0, .3);">
            <div class="col-md-8" style="padding-bottom: 10px; padding-left: 30px;">
                <p style="color: white;font-family:GillSans;font-size:60px;">wrevenues.</p>
                <p class="text" style="color: white; font-size: 220%;">Looking for the coolest locations to visit or host your next party? Check out <b>Wrevenues</b> where you can find the best venues near you!</p>
            </div>
            <div class="col-md-4">
            <a href="http://wrevenues.wrevel.com" ><img src="<?php echo $PATH_IMG?>theme_image_5.png"
                            style="width:90%; margin-left:7%; margin-top:40%;"/></a>
        </div>
    </div>
</div>
</div>
<!--end of content-->

<!--footer
==================================================-->
    <div id="footer navbar-fixed-bottom"  style="background:#A5B9CB;">
      <div class="row" style="padding:20px;">	
		<div class="col-md-4" style="text-align:center;margin-top:10px;">
			<img src="<?php echo $PATH_IMG?>wrevel_logo.png" style="width:207px;"/>
			<p style="font-size:25px; margin-top:10px;color:white;">
				<a href="https://www.facebook.com/wrevelinc" style="color:white;"><i class="fa fa-facebook" style="padding:20px 15px;"></i></a>
				<a href="https://twitter.com/wrevelco" style="color:white;"><i class="fa fa-twitter" style="padding:20px 15px;"></i></a>
				<a href="http://instagram.com/wrevel" style="color:white;"><i class="fa fa-instagram" style="padding:20px 15px;"></i></a>
				<a href="http://wrevel.tumblr.com" style="color:white;"><i class="fa fa-tumblr" style="padding:20px 15px;"></i></a>
				<a href="http://www.youtube.com/wrevelinc" style="color:white;"><i class="fa fa-youtube" style="padding:20px 15px;"></i></a>
			</p>
			<p class="copy_right">&copy; Wrevel, Inc.</p>
		</div>
		<div class="col-md-8">
			<div class="col-md-4">
			<ul class="links">
				<li>Company.</li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Press</a></li>
				<li><a href="#">Terms of Use</a></li>
				<li><a href="#">Privacy Policy</a></li>
			</ul>
			</div>
			<div class="col-md-4">
			<ul class="links">
				<li>Discover.</li>
				<li><a href="#">How Wrevel Works</a></li>
				<li><a href="#">Wrevenues</a></li>
				<li><a href="#">Pricing</a></li>
				<li><a href="#">F.A.Q.</a></li>
			</ul>
			</div>
			<div class="col-md-4">
			<ul class="links">
				<li>Reach.</li>
				<li><a href="#">Partners</a></li>
				<li><a href="#">Nation</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			</div>
		</div>
		
		
	</div> 
      
</div>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="<? echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
    <!--<script src="<? echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>-->
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="https://code.jquery.com/jquery.js"></script>
    
</body>
</html> 