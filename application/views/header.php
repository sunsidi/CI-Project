<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-tour.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
@media screen and (max-width:950px){
	div.abcd{
	display:none;
	}
}



</style>
<body>
<?php $this->load->library('session'); if(!$this->session->userdata('is_logged_in')) {?>
<!--header not logged in
===========================================-->
    <div class="navbar navbar-fixed-top"  role="navigation" style="background:#6A8BA8; height:60px; border-radius:none; -moz-box-shadow:   1px 2px 2px 3px rgba(0, 0, 0, .2);-webkit-box-shadow: 1px 2px 2px 3px rgba(0, 0, 0, .2); box-shadow:  1px 2px 2px 3px rgba(0, 0, 0, .2); ">
    	<div class="logo dropdown navbar-brand pull-left" style="margin-left:15px;">
        	<button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" style="background:none; padding:0;">
        	<img src="<?php echo $PATH_IMG?>menu_button.png"> </button>
            <ul class="dropdown-menu" role="menu">
            	<li><a href="<?php echo base_url()."main/mywrevs"?>">MyWrevs</a></li>
  			</ul>
        </div>
       <!-- <a class="navbar-brand" href="https://www.facebook.com/wrevelinc" style="padding:5px 10px; margin-left:20px;"><img src="<?php echo $PATH_IMG?>facebook_icon.png" alt="wrevel-facebook"/>
		</a>
		<a class="navbar-brand" href="https://twitter.com/wrevelco" style="padding:5px 10px;"><img src="<?php echo $PATH_IMG?>twitter_icon.png" alt="wrevel-twitter"/>
		</a>-->
        
           <a href="<?php echo base_url()?>" class="brand" style="margin:0 auto; float:none; position:absolute; left:48%; margin-left:-50px; display:block; "><img src="<?php echo $PATH_IMG?>wrevel_logo.png"style="width:150px; margin-top:10px;display:block;" /></a>
        
        
        <div id="navbarCollapse" class="collapse navbar-collapse"  style="float: right;">
        	<!--<div class="pull-left notlogged" style="margin-top:8px;">
        	<a href="<?php echo base_url().'welcome/home'?>" class="btn header-button">Sign Up</a> &nbsp;
        	<a href="<?php echo base_url().'welcome/home'?>" class="btn header-button">Log In</a>
        	</div>-->
        <div role="search" class="navbar-form navbar-left">
          <?php echo form_open(base_url().'main/get_latest_events/')?>
            <div class="form-group">
                <input type="text" name='search' placeholder="Search" class="form-control" style="background:#B4C4D3;border:none;color:white;">
                <!-- this is commented just incase you need it.
                <type="text" name='search' class="form-control" placeholder="Search"> -->
            </div>
             <?php echo form_close()?>
        </div>
    	</div>
        
    </div>
    
<!--end of header not logged in-->
<?php }else {?>
<!--header logged in
===========================================-->
<?php $nav_data = get_navi_data()?>
 <div class="navbar navbar-fixed-top"  role="navigation" style="background:#6A8BA8; height:60px; -moz-box-shadow:   1px 2px 2px 3px rgba(0, 0, 0, .2);-webkit-box-shadow: 1px 2px 2px 3px rgba(0, 0, 0, .2); box-shadow:  1px 2px 2px 3px rgba(0, 0, 0, .2); ">
      <div class="logo dropdown navbar-brand">
          <button class="btn" type="button" id="dropdownMenu1" data-toggle="dropdown" style="background:none; padding:0;">
          <img src="<?php echo $PATH_IMG?>menu_button.png" style="margin-left:15px;"> </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<? echo base_url()?>showroom/profile"><?php echo $nav_data['fullname']?></a></li>
          <!--<li class="header-link"><a href="<?php echo base_url()."chat/MessageView"?>">Inbox</a></li>-->
          <li class="header-link"><a href="<?php echo base_url().'showroom/notify2'?>">Notifications <span class="badge" style="background:#BE1E2D;"><?php echo $nav_data['counter'] ?></span></a></li>
          <!--<li class="header-link"><a href="#">Search</a></li>-->
          <?php if($nav_data['admin_level'] >= 1) {?>
            <li><a href="<? echo base_url()?>admin/admin_account">Admin Console</a></li>
          <?php }?>
          <li><a href="<? echo base_url()?>account/myaccount_accountinfo">My Account</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo base_url()."main/loginout" ?>">Logout</a></li>
        </ul>
        </div>
        <div class="profile">
          <!--profile image-->
          <a class="navbar-brand collapse navbar-collapse" href="<? echo base_url()?>showroom/profile"><img class="fb_pic" src="<?php echo base_url()."uploads/".$nav_data['image_key']?>" 
                                                style="width:55px; height:55px; border-radius: 150px;
                                                margin-left:10px; border:2px solid #7874A2;"/></a>
          
            <a href="<? echo base_url()?>showroom/profile" class="navbar-brand collapse navbar-collapse">
            <p style="color: white; font-size: 20px; margin-left:10px;margin-top:18px;"><?php echo $nav_data['fullname']?> </p></a>
        </div>

        <div class="abcd">
        <a class="navbar-brand collapse navbar-collapse " href="<?php echo base_url()."chat/MessageView"?>"><button class="btn" type="button" style="background:none;float:left; margin-top:5px;"><i class="fa fa-envelope" style="color:white; font-size:30px;"> <span class="badge" style="background:#BE1E2D;"></span></i></button></a>

        <div class="navbar-brand dropdown collapse navbar-collapse" style="margin-top:5px;">
        <button class="btn" type="button" onclick = "myFunction()" id="dropdownMenu1" data-toggle="dropdown" style="background:none;">
            <i id = "herdzz" class="fa fa-user" style="color:white; font-size:30px;">
                <?php if($nav_data['counter'] != 0) {?>
                <span class="badge" id = "here" style="background:#BE1E2D;display:block;margin-top:-15px;left:20px;"><?php echo $nav_data['counter'] ?> </span>
                <?php }?>
            </i>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="text-align:center; background:#d9e3ea; padding:0; padding-bottom:10px;border:none;border-radius:8px;width:500px;">
            <p style="background:#3e8fbb; color:white;font-size:20px; padding:10px;border-top-left-radius:8px;border-top-right-radius:8px;"><strong>Notifications</strong> <!--<a href="#"><i class="fa fa-cog pull-right" ></i></a>--></p>
                <?php if(isset($nav_data['all_notifications'])) {
                        for($i = 0; $i < $nav_data['number_of_notes'] && $i < 5; $i++) {?>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url().'showroom/notify2'?>">
                                <div style="text-align:left;padding:0 15px;">
                                    <p style="color:gray; text-align:center;"><?php echo $nav_data['all_notifications'][$i]['time_sent'];?> &nbsp;&nbsp; </p><span> <a href="<?php echo base_url().'main/remove_notification/'.$nav_data['all_notifications'][$i]['id'];?>"> X</a></span>
                                    
                                        <p><img src="<?php echo base_url()."uploads/".$nav_data['all_notifications'][$i]['other_picture'];?>" style="width:55px; height:55px;border-radius: 150px;border:2px solid #7874A2;z-index:5;position:relative;"><span style="color:white;background:#7874A2; padding:5px 12px 5px 30px; border-radius:5px;margin-left:-20px;z-index:3;"> <?php echo $nav_data['all_notifications'][$i]['other_fullname']?> </span>  
                                            &nbsp; <b style="word-wrap: break-word;"><?php echo $nav_data['all_notifications'][$i]['message'];?></b></p>
                                            <?php if(strpos($nav_data['all_notifications'][$i]['message'], "friend request")) {?>
                                                    <form action="<?php echo base_url().'main/accept_decline/'.$nav_data['all_notifications'][$i]['email_explode'][0].'/'.$nav_data['all_notifications'][$i]['email_explode'][1].'/'.$nav_data['all_notifications'][$i]['id'];?>" method="post" accept-charset="utf-8">
                                                        <button type="submit" name = "submit" value = "Accept">Accept</button>
                                                        <button type="submit" name = "submit" value = "Decline">Decline</button>
                                                    </form>
                                            <?php }?>
                                </div>
                            </a></li>
                <?php }}
                      else {?>
                            <div>
                                <p>You have no new notifications</p>
                            </div>
                <?php }?>
        </ul>
      </div>
      </div> <!-- end of notifications-->
      
       
          <a href="<?php echo base_url();?>" class="brand" style="margin:0 auto; float:none; position:absolute; left:48%; margin-left:-50px; display:block; "><img src="<?php echo $PATH_IMG?>wrevel_logo.png"
                                                style="width:150px; margin-top:10px;display:block;" /></a>
        
        
        <div id="navbarCollapse" class="collapse navbar-collapse"  style="float: right;">
        <a href="#" id="create-step" data-toggle="modal" data-target="#create" class="pull-left"><button class="btn" type="button" style="background:none;margin-top:5px;"><i class="fa fa-plus-circle" style="color:white; font-size:30px;"></i></button></a>
        <div role="search" class="navbar-form navbar-left">
          <?php echo form_open(base_url().'main/get_latest_events/')?>
            <div class="form-group">
                <input type="text" name='search' placeholder="Search" class="form-control" style="background:#B4C4D3;border:none;color:white;">
                <!-- this is commented just incase you need it.
                <type="text" name='search' class="form-control" placeholder="Search"> -->
            </div>
             <?php echo form_close()?>
        </div>
      </div>
        
    </div>

<!--end of header logged in-->
<!--tabs
===========================================-->
  <!--  <div class="center-block">
        <div class="col-md-offset-4 col-sm-offset-3 col-xs-offset-2">
            <div class="btn-group btn-group-lg sub">
                <a href="<?php echo base_url()."main/mywrevs"?>" class="btn tab" style="font-size:30px;">mywrevs</a>
                <a href="<? echo base_url()?>event/hub" class="btn tab" style="font-size:30px;">the hub</a>
                <a href="<? echo base_url()?>showroom/profile" class="btn tab active" style="font-size:30px;">showroom</a>
             <a href="<? echo base_url()?>main/mynotify"><button type="button" class="btn tab " >Notifications</button></a>

            </div>
        </div>
    </div>-->
      <div class="row" style="text-align:center;margin-top:80px;">
            <div class="btn-group btn-group-lg sub">
                <a href="<?php echo base_url()."main/mywrevs"?>" class="btn tab">mywrevs</a>
                <a href="<? echo base_url()?>event/hub" class="btn tab">the hub</a>
                <a href="<? echo base_url()?>showroom/profile" class="btn tab">showroom</a>
            </div>
     </div>


<!--end of tabs-->
<?php }?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="https://code.jquery.com/jquery.js"></script>
    <!--<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>-->
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
<script>
    	$(document).ready(function(){
    		<?php if(isset($nav_data)) {
				if(strpos($nav_data['image_key'], 'facebook')){?>
            		$('.fb_pic').attr("src","<?php echo $nav_data['image_key'];?>" + "?type=large");
            	<?php }} else{?>
				var donothing = true;
				<?php }?>
        });
    </script>
	<!--<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap-tour.min.js"></script>--> <!--Remove the arrows for this once tutorial is fixed-->
	<!--<script src="<?php echo $PATH_BOOTSTRAP?>js/tour.js"></script>-->
</html>