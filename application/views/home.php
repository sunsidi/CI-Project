<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wrevel</title>
<meta name="google-site-verification" content="kAxBt1NwfJYcyPHrv4UMLNOWcRRunDS1iariPYvdRsE" />
<meta name="description" content="Wrevel’s is a social networking platform that provides it’s users with the power to easily connect with people by creating, sharing, hosting, and finding parties and events online.">
<meta name="keywords" content="event finder, ticketing platform, tickets, parties, event space, discover, socialize, experience, hotspots, icebreakers, culture, love and romance">
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	
</head>

<body style="background-image:url('<?php echo $PATH_IMG?>welcome_background.png');background-size: 100% ; ">

<?php $this->load->view('header');?>

<!--content
==============================================-->
<div class="container">
<div class="row" style="margin-top:30px;">
<div class="col-md-12" style ="width:100%; color:white;text-align:center;">
	<p style="margin-top:50px;"><img src="<?php echo $PATH_IMG?>large_w_logo.png" class="logo_lg" alt="Welcome to Wrevel"/></p>
	<h1 style="font-size:52px; text-align:center;font-family:'Lobster';"><span style="font-size:36px;">Welcome to</span> Wrevel</h1>
		<div style="text-align:center;">
		<a href="#" style="padding-left:15px;" data-toggle="modal" data-target="#sign-in"><img src="<?php echo $PATH_IMG?>sign_in_button.png" class="sign-in-button" alt="Sign in"/></a> 
			<div class="modal fade" id="sign-in" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
      
						
    
							<div class="modal-header" style="background-color: #628DA3;">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<p style="font-size: 215%; color: white;text-align: center;padding-top:10px;">
							Welcome to
							
        
							<img src="<?php echo $PATH_IMG?>wrevel_logo.png" style="width:150px;z-index:1;margin-top:-10px;" alt="welcome"/></p>
							</div>
      
							<div class="modal-body" style="text-align:left;background:#C2D2DC;">
								<form id="signin" action="<?php echo base_url()."main/login_validation"?>" method="POST">
								<div class="form-group">
                                                                    <input type="text" class="form-control" name="email" placeholder="Email address" required="" autofocus="">
                                                                <div class="pull-left">
                                                                    <font color="red"><?php echo form_error('email'); ?></font>
                                                                </div>
                                                                </div>
        
								<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Password" required="" style="margin-top: 2%;">
                                                                <div class='pull-left'>
                                                                    <font color="red"><?php echo form_error('password'); ?></font>
                                                                </div>
                                                                </div>
								<br>
     
								<p>
								<a href="javascript:void(0)" style="float: left; margin-top: -15px;" onclick="show_forgot_password()">
								Forgot password?
								</a>
                
								<label class="checkbox" style="float:right; margin-top: -15px;">
								<input type="checkbox" value="remember-me"> Remember me
								</label>
                
								</p>
            
								<div class="form-group row" style="text-align:right;margin-top:5px;">	
								<a href="<?php echo $login_url;?>">
									<img src="<?php echo $PATH_IMG?>fbconnect_button.png" alt="Connect with Facebook" style="z-index: 1;width: 145px;">
								</a>
        
								<!--<p style="margin-top: -40px; margin-left: 400px;font-size:25px;">
									or
								</p>-->
        
								<a href="#">
									<button type="submit" class="btn btn-lg" style="background:#00aade; color:white; font-size:18px;">Sign in</button>
								</a>
								</div>
								<!--<hr style="margin-top: 15px;">-->
                
								<!--<p style="float: left; margin-top: 5px; margin-left: 100px; font-size:25px;">
								New to Wrevel?
								</p>

								<a href="#">
								<button type="button" class="btn btn-lg pull-right" style="background:#0074b9; color:white; font-size:15px; margin-left: -50px;">Join Now</button>
								</a>-->
								</form>
								<div id="forgot_password_div" hidden style="height:auto; padding-top:15px;">
									<p style="font-size: 20px; color: #628DA3;text-align: center;">Forgot Password?</p>
									<form id="forgot_password" action="<?php echo base_url()."main/forgot_password"?>" method="POST">
									<div class="form-group">
									<div class="col-sm-9">
	                                                                    <input type="text" class="form-control" name="email_reset" placeholder="Email address" required="" autofocus="">
	                                                                <div class="pull-left">
	                                                                    <font color="red"><?php echo form_error('email'); ?></font>
	                                                                </div>
	                                                                </div>
	                                                                </div>
	                                                                <div class="row">
	                                                                <button type="submit" class="btn btn-lg pull-left" style="background:#00aade; color:white; font-size:15px;margin-left: 20px;padding:7px 10px;">Send Reset</button>
	                                                                </div>
	                                                                </form>
                                                                </div>
							</div>
						</div>
 
 
					
				</div>
			</div>
	
	    <a href="#" style="padding:15px;" data-toggle="modal" data-target="#sign-up"><img src="<?php echo $PATH_IMG?>signup_button.png" class="sign-up-button" alt="Sign up"/></a>
			<div class="modal fade" id="sign-up" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content" style="background:#C2D2DC;">
						
    
							<div class="modal-header" style="background-color: #628DA3;">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<p style="font-size: 215%; color: white;text-align:center;padding-top:10px;">
								Sign Up for
								
        
								<img src="<?php echo $PATH_IMG?>wrevel_logo.png" style="width:150px;z-index:1;" alt="wrevel sign up"/></p>
							</div>
                
							<div class="modal-body" style="text-align:center; font-size:20px;color:black;background:#C2D2DC;">
								<p>Join through <a href="<?php echo $login_url;?>">
									<img src="<?php echo $PATH_IMG?>fbconnect_button.png" alt="Join through Facebook" style="z-index: 1;width: 145px;">
								</a></p>
								<hr>
								 <?php echo form_open(base_url().'main/registration_validation');?>
                   <!-- <form> -->
       			
         			<!--</form> -->
                    <input name= 'username-signup' type="text" class="form-control" placeholder="Username" required style="margin-top: 2%;">
                    <font color="red"><?php echo form_error('username-signup'); ?></font>
                    <!--<input name= 'full_name-signup' type="text" class="form-control" placeholder="First and Last Name"  required style="margin-top: 2%;">-->
                    <input name= 'first_name-signup' type="text" class="form-control" placeholder="First Name"  required style="margin-top: 2%;width:49%;float:left;">
                    <input name= 'last_name-signup' type="text" class="form-control" placeholder="Last Name"  required style="margin-top: 2%;width:49%;float:right;">
                    <input name = 'email-signup' type="text" class="form-control" placeholder="Email" required style="margin-top: 10%;">
                    <font color="red"><?php echo form_error('email-signup'); ?></font>
                    <input name = 'password-signup' type="password" class="form-control" placeholder="Password" required style="margin-top: 2%;">
                    <font color="red"><?php echo form_error('password-signup'); ?></font>
                    <input name = 'cpassword-signup' type="password" class="form-control" placeholder="Re-enter Password" required style="margin-top: 2%;">
                    <font color="red"><?php echo form_error('cpassword-signup'); ?></font>
                    </br>
					
					<div class="form-group row">
					<p>Type of Account</p>
					<label class="radio-inline" style="padding-right:15px;" id="regular" data-content="Recommended free account for users that want to attend events,connect with friends,and create events quickly without much setup. " data-trigger="hover" data-placement="bottom">
						<input type="radio" name="business" id="inlineRadio1" value="0" checked> Personal
						</br>
						<img src="<?php echo $PATH_IMG?>personal_profile_icon.png" style="width:100px;margin-top:10px;"/>
					</label>
					<label class="radio-inline"  style="margin-left:10px;" id="business" data-content="Recommended free account, ideal for users, organizations and coordinators.  Build a professional portfolio and customize your profile to cater all of your event hosting needs." data-trigger="hover" data-placement="bottom">
						<input type="radio" name="business" id="inlineRadio2" value="1"> Professional
						</br>
						<img src="<?php echo $PATH_IMG?>business_profile_icon.png" style="width:100px;margin-top:10px;"/>
					</label>
					</div>
                    
					<label>
      					<input name = "agreement-signup" type="checkbox" required> <span style="font-size:15px;">I agree with the <a href="<?php echo base_url().'info/terms'?>">terms of use</a></span>
      					<font color="red"><?php echo form_error('agreement-signup'); ?></font>
    				</label>
					
                    </br>
                    <button type="submit" class="btn btn-lg" style="background:#1C75BC; color:white;">Join now </button>
                    <?php echo form_close();?>
                    
							</div>
						</div>
            
            
					</div>
				</div>
			</div> 
		
		</div>
		
<p style="text-align:center;font-size:32px; padding:8px;"><a href="#" data-toggle="modal" data-target="#video" style="color:white;"><img src="<?php echo $PATH_IMG?>play_button.png" alt="Play video" style="padding:0 10px; margin-top:10px;"/> <strong>play video</strong></a></p> 
	<div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" style="background:black;">
				<div class="modal-header" style="border:none;">
                <a href="javascript:;" onClick="toggleVideo('hide');" style="float: right;"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></a>
				</div>
			<div class="modal-body">	
				<iframe style="width:100%;" height="315" src="//www.youtube.com/embed/ekb_yJ874kA" frameborder="0" allowfullscreen style="z-index:3;"></iframe>
			</div>
      
			</div>
		</div>
        </div> 
        </div>

	
<div style="margin:0 20px;">
	<div class="col-md-4">
		<a href="<?php echo base_url()."main/get_related_events/culture"?>"><div class="panel featured_category_panel" style="background-image:url(<?php echo $PATH_IMG?>culture1.png);-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  color:white; text-align:center; border:2px solid #3F4553; border-radius:15px;">
			<div class="panel-body">
				<p class="featured_category_title"><b>Discover.</b><p>
				<p class="featured_category_button"><img src="<?php echo $PATH_IMG?>culture_button_discover.png" class="featured_category_image" alt="Discover Culture."/></p>
				<p class="featured_category_pronounce">[kuhl-cher]</p>
				<p class="featured_category_definition"> <i>verb</i> &nbsp; Getting out of your comfort zone to try something new. </p>
			</div>
		</div></a>
	</div>
	<div class="col-md-4">
		<a href="<?php echo base_url()."main/get_related_events/icebreakers"?>"><div class="panel featured_category_panel" style="background-image:url(<?php echo $PATH_IMG?>icebreakers1.png);-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;color:white; text-align:center;  border:2px solid #3F4553;border-radius:15px;">
			<div class="panel-body">
				<p class="featured_category_title"><b>Socialize.</b></p>
				<p class="featured_category_button"><img src="<?php echo $PATH_IMG?>icebreakers_button_socialize.png" class="featured_category_image" alt="Socialize through Icebreakers."/></p>
				<p class="featured_category_pronounce">[ahys-brey-kers]</p>
				<p class="featured_category_definition"> <i>noun</i> &nbsp; A way to meet people with similar interests. </p>
			</div>
		</div></a>
	</div>
	<div class="col-md-4">
		<a href="<?php echo base_url()."main/get_related_events/hotspots"?>"><div class="panel featured_category_panel" style="background-image:url(<?php echo $PATH_IMG?>hotspots1.png);-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;color:white; text-align:center; border-radius:15px; border:2px solid #3F4553;">
			<div class="panel-body">
				<p class="featured_category_title"><b>Experience.</b></p>
				<p class="featured_category_button"><img src="<?php echo $PATH_IMG?>hotspots_button_experience.png" class="featured_category_image" alt="Experience new things through Hotspots"/></p>
				<p class="featured_category_pronounce">[hat-spats]</p>
				<p class="featured_category_definition"> <i>noun</i> &nbsp; A place to showcase your talents. </p>
			</div>
		</div></a>
	</div>
	
</div>


    
    <div class="row">
     	<h2 class="section-title">How It Works</h2>
		<div class="col-md-4 col-md-offset-1 col-sm-6">
			<p style="font-size: 45px; color: white; margin-top:45px;"><strong>Find an event</strong></p>
			<p style="font-size: 25px; color: white;">Find events with much more ease.
	    Everything is simply categorized for
	    all types of events; whether you&rsquo;re
	    looking for house parties or clubs
	    we have it all.</p>
		</div>
		<div class="col-md-6 col-sm-6">
			<img src="<?php echo $PATH_IMG?>macbook_events.png" alt="Find events." style="width: 100%; "/>
		</div>
    </div>

    <div class="row">
		<div class="col-md-4 col-md-offset-1 col-sm-6">
			<img src="<?php echo $PATH_IMG?>samantha.png" alt="profile" style="width:90%;"/>
		</div>
		<div class="col-md-5 col-md-offset-1 col-sm-6">
			<p style="font-size: 45px; color: white; padding-top: 100px;font-center;"><strong>Create an event</strong></p>
			<p style="font-size: 25px; color: white; padding-bottom: 50px;">If you cannot find the event of your
	    choice, <b>create it</b>! Have fun experimenting
	    and make it public for others to attend.
	    You can even <b>customize your own tickets</b>
	    for the events you make.</p>
		</div>
    </div>
      
    <div class="row" style="background:#A5B9CB; padding:25px 0;">
    	    <h2 class="section-title">Pricing</h2>	
	    <div class="col-md-6">
		<p style="text-align: center; color: white; font-size: 33px;font-family:GillSans;"><img src="<?php echo $PATH_IMG?>no_fee_icon.png" alt="affordable" style="margin-top:-7px;"/> Most Affordable</p>
	        <p style="text-align: center;color: white; font-size: 24px;"><strong>Lowest prices </strong>in the ticketing industry!</p></br>
	    
		<p style="text-align: center; color: white; font-size: 33px;font-family:GillSans;"><img src="<?php echo $PATH_IMG?>wrevel_fee_icon.png" alt="wrevel fees"/> Wrevel Fee</p>
	    <p style="text-align: center;color: white; font-size: 24px;">1.5% + .50&#162; per ticket</p></br>
	    
	    <p style="text-align: center; color: white; font-size: 33px;font-family:GillSans;"><img src="<?php echo $PATH_IMG?>cc_fee_icon.png" alt="credit card processing fee style="margin-top:-7px;"/> Credit Card Fee</p>
	    <p style="text-align: center;color: white; font-size: 24px;">Credit Card Processing Fee</p>
	    <p style="text-align: center;color: white; font-size: 19px;">(VAT where applicable)</p>
	    
	   
		</div>
		<div class="col-md-6" style="line-height:175%;">
	    <p style="text-align: center; color: white; font-size: 30px;font-family:GillSans;"><img src="<?php echo $PATH_IMG?>payment_icon.png" alt="wrevel payment system" style="margin-top:-7px;"/> Simple Payment System</p>
	    <p style="text-align: center;color: white; font-size: 25px;"><b>No start-up fees</b> or extra charges.</p>
	    <p style="text-align: center;color: white; font-size: 25px; ">We accept <b>all credit cards.</b></p></br>
	    
	    <p style="text-align: center;"><img src="<?php echo $PATH_IMG?>mastercard_icon.png" alt="mastercard"/>&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $PATH_IMG?>visa_icon.png" alt="visa"/>&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $PATH_IMG?>amex_icon.png" alt="amex"/>&nbsp;&nbsp;&nbsp;&nbsp;
	    <img src="<?php echo $PATH_IMG?>dinersclub_icon.png" alt="diners club"/>&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $PATH_IMG?>discover_icon.png" alt="discover"/>&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $PATH_IMG?>jcb_icon.png" alt="jcb"/></p></br></br>
	    
	    <p style="line-height: 20px;text-align: center;color: white; font-size: 30px; font-family:GillSans;"><img src="<?php echo $PATH_IMG?>thumbsup_icon.png" alt="thumbups for free events" style="margin-top:-7px;"/> Free Events</p>
	    <p style="text-align: center;color: white; font-size: 25px;">You can still use our beautiful tickets</p>
	    <p style="text-align: center;color: white; font-size: 25px;">system for <b>absolutely free.</b> We make</p>
	    <p style="text-align: center;color: white; font-size: 25px;">money only when you make money.</p>
	    
		</div>
    </div>
    <div class="row">
    <div class="col-md-12" style="background:#58595B;padding:30px 30px 50px;">
    	<h2 class="section-title">Press</h2>	
    	<div class="row">	
    	   <div class="col-md-3 col-xs-6"><a href="http://www.brooklynpaper.com/stories/37/44/cl-wrevel-greenpoint-facebook-2014-10-31-bk_37_44.html" target="_blank"><img src="<?php echo $PATH_IMG?>bkpaper(1).png" alt="Brooklyn Paper" class="press_bkpaper"/></a></div>
      	   <div class="col-md-3 col-xs-6"><a href="http://www.dnainfo.com/new-york/20130826/greenpoint/new-party-finding-app-helps-eager-revelers-find-their-match" target="_blank"><img src="<?php echo $PATH_IMG?>dnainfo.png" alt="DNAinfo" class="press_dnainfo"/></a></div>
    	   <div class="col-md-3 col-xs-6"><a href="http://www.greenpointnews.com/entertainment/6332/wrevel-to-relauch-with-exhaustive-partying-options" target="_blank"><img src="<?php echo $PATH_IMG?>gpgazette.png" alt="Greenpoint Gazette" class="press_gpgazette"/></a></div>
       	   <div class="col-md-3 col-xs-6"><a href="http://technical.ly/brooklyn/2014/04/28/8-brooklyn-ventures-saw-pier-92-new-york-tech-day-2014" target="_blank"><img src="<?php echo $PATH_IMG?>technically.png" alt="Technically" class="press_technically"/></a></div>
    	 </div> 
    	</div>
    </div>
</div>

<?php $this->load->view('footer');?>

  
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
	<script src="<?php echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
	<script src="<?php echo $PATH_BOOTSTRAP?>js/popupvideo.js"></script>
	<script>
		function show_forgot_password() {
			$('#forgot_password_div').show();
		}
	</script>
	<script>
	$('#regular').popover();
	$('#business').popover();
	</script>
	


</body>
</html> 