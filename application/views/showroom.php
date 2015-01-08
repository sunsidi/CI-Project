<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Showroom</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<!-- This script is for removing the '#_=_' that gets added to the url after a facebook redirect for some reason.
     There might be a better way to get rid of it but this is the only way that I know of.-->	
<script type="text/javascript">
    if (window.location.hash && window.location.hash == '#_=_') {
        if (window.history && history.pushState) {
            window.history.pushState("", document.title, window.location.pathname);
        } else {
            // Prevent scrolling by storing the page's current scroll offset
            var scroll = {
                top: document.body.scrollTop,
                left: document.body.scrollLeft
            };
            window.location.hash = '';
            // Restore the scroll offset, should be flicker free
            document.body.scrollTop = scroll.top;
            document.body.scrollLeft = scroll.left;
        }
    }
</script>
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-tour.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
.arrow-left {
position:absolute;
	width: 0; 
	height: 0; 
	border-top: 0px solid transparent;
	border-right: 35px solid #02a89e;
	
	border-bottom: 20px solid transparent;
        //margin-left:108px;
        margin-left:50%;
        margin-top:10px;
}

</style>
</head>


<body>

<?php $this->load->view('header');?>

<!--content
==============================================-->
<div class="container" style="padding-bottom:50px;">
<div id="showroom-step">
    <div class="row"  style="margin-top:50px;">

        <div class="col-md-9 col-md-offset-1">
            <div class="col-md-1">
                <img class="fb_pic profile-image" src="<?php echo base_url()."uploads/".$image_key?>" style="position:absolute; z-index:2;  border-radius:150px;  border:2px solid #7874a2;"/>
               </div>
            <div class="col-md-7 profile-name" style="background:#7874a2; color:white;height:65px;">
            <h2 class="profile-fullname"><?php echo $fullname ?></h2>
            </div>
            <div class="col-md-4" style="height:65px;background:#6ca5cc; color:white; border-top-right-radius:5px;" id="reputationInfo" data-content="The more you interact (attending,creating events) on Wrevel, the more points you receive" data-trigger="hover" data-placement="bottom">
            <h2 class="reputation" style="text-align:center;margin-left:-15px;cursor:default;float:left;width:100%;margin-top:12px;">Reputation <span class="badge" style="color:#6ca5cc; background:white;font-size:20px;vertical-align:middle; border-radius:50%; padding:10px 0px; width:40px;height:40px; text-align:center;margin-left:15px;"><?php echo $reputation ?></span><i class="fa fa-question-circle pull-right" style="font-size:15px;margin-top:10px;padding:0;"></i> </h2>
            
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">       
                <div class="panel-body background">
                    <!--Quote
                    <div class="row" style="width:100%;">
			<div class="arrow-left" style="margin-top:20px;margin-left:70px;"></div>
                        <p class="col-md-8 col-md-offset-2 quote-box" style="background:#00A79D; color:white; font-size:18px; border-radius:5px;padding:15px 20px;margin-left:100px;">
                        <?php if($tagline != "") 
                        	echo $tagline;
                              else 
                              	echo "Welcome to my Showroom! Don’t hesitate to shoot me a message or a friend request!";?>
                        </p>
                     </div>-->
                     
                     <div class="col-md-6">
                            <div class="row" style="width:100%;">
			<div class="arrow-left" style="margin-left:70px; margin-top:30px;"></div>
                        <p class="col-md-8 col-md-offset-2 quote-box" style="background:#00A79D; color:white; font-size:18px; border-radius:5px;padding:15px 20px;margin-left:100px; margin-top:20px;">
                        <?php if($tagline != "") 
                        	echo $tagline;
                              else 
                              	echo "Welcome to my Showroom! Don’t hesitate to shoot me a message or a friend request!";?>
                        </p>
                     </div>
                     	<div class="row">
                     	<!--PROFILE-->
                     	   <div class="panel panel-default" style="background:none; box-shadow:none; border:none;">
                                <div class="panel-body">

                                    <p class="info"><span class="glyphicon glyphicon-user" style="width:40px;text-align:center;"></span> Gender: <?php echo $gender ?></p>
                                    <p class="info info-hidden"><i class="fa fa-heart-o" style="width:40px;text-align:center;"></i> Status: <?php echo $relationship ?> </p>
                                    <p class="info info-hidden"><i class="fa fa-calendar" style="width:40px;text-align:center;"></i> Birthday: <?php echo $birthday ?> </p>
                                    <p class="info"><i class="fa fa-map-marker" style="width:40px;text-align:center;"></i> Location: <?php echo $location ?></p>
                                    <p class="info"><i class="fa fa-graduation-cap" style="width:40px;text-align:center;"></i> Education: <?php echo $school ?></p>
                                    <p class="info"><i class="fa fa-envelope" style="width:40px;text-align:center;"></i> Email: <?php echo $email ?></p>
                                    <p class="info"><i class="fa fa-phone" style="width:40px;text-align:center;"></i> Phone: <?php echo $phone ?></p>
                                    <p class="info"><span class="glyphicon glyphicon-link" style="width:40px;text-align:center;"></span> Links: <a target="_blank" href="http://<?php echo $user_reference ?>"> <?php echo $user_reference ?></a></p>

                                        <!--Edit profile button-->

                                  
                                    
  <div style="text-align:center;">
          <a href="#" data-toggle="modal" data-target="#basicModal" class="btn btn-lg edit" style="color:white;border-radius:10px;">Edit Profile
          </a>
          <a href="<? echo base_url()?>account/myaccount_accountinfo" class="btn btn-lg edit" style="color:white;border-radius:10px;">My Account
          </a>
      </div>



 <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" style="height: 550px;">
      

    
    
      <div class="modal-header" style="background-color: #628DA3; height: 80px;padding:20px;">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <p style="font-size: 215%; color: white;text-align:center;">
          <i class="fa fa-pencil-square-o" style="font-size:30px;"></i> Edit Profile</p>
        
      </div>
      
    <div class="modal-body" style="text-align:center;font-size:20px;background:#c2d2dc;">
                    <?php 
                        $requiredthings = array('onsubmit' => 'return check_image()');
                        echo form_open_multipart(base_url().'main/update_profile', $requiredthings);
                    ?>
                    <div class="form-group row">
                        <p>Type of Account</p>
                        <label class="radio-inline" style="padding-right:15px;" id="regular" data-content="Recommended free account for users that want to attend events,connect with friends,and create events quickly without much setup. " data-trigger="hover" data-placement="bottom">
                                <input type="radio" name="account_change" id="inlineRadio1" value="0" checked> Personal
                                </br>
                                <img src="<?php echo $PATH_IMG?>personal_profile_icon.png" style="width:100px;margin-top:10px;"/>
                        </label>
                        <label class="radio-inline" style="margin-left:10px;" id="business" data-content="Recommended free account, ideal for users, organizations and coordinators.  Build a professional portfolio and customize your profile to cater all of your event hosting needs. " data-trigger="hover" data-placement="bottom">
                                <input type="radio" name="account_change" id="inlineRadio2" value="1"> Professional
                                </br>
                                <img src="<?php echo $PATH_IMG?>business_profile_icon.png" style="width:100px;margin-top:10px;"/>
                        </label>
                    </div>  
                    <div class="info-hidden row" style="text-align:center;">
                    <label class="col-sm-2 control-label">Status</label>
					<div class="col-sm-10">
                    <input type="radio" name="relationship" value="S"> Single
                    <input type="radio" name="relationship" value="M"> Married
                    <!--<input type="radio" name="relationship" value="W"> Widowed-->
                    <input type="radio" name="relationship" value="D"> Divorced
                    <input type="radio" name="relationship" value="C"> In a Relationship
					</div>
                    </div>
					
					<div class="row">
                    <label class="col-sm-2 control-label">Gender</label>
					<div class="col-sm-4">
                    <input type="radio" name="gender" value="M"> Male
                    <input type="radio" name="gender" value="F"> Female
					</div>

                    </div>
					
                        <form class="form-horizontal" role="form">
                        <div class="info-hidden">
                         <label class="col-sm-2 control-label">Birthday</label>
                         <div class="col-sm-10">
                           <input name = 'birthday' type="date" class="form-control" value="" style="margin-top: 2%;" placeholder="<?php echo $birthday ?>">
                         </div>
                        </div> 
                         <form class="form-horizontal" role="form">
                         <label class="col-sm-2 control-label">Location</label>
                         <div class="col-sm-10">
                           <input name = 'location' type="text" class="form-control" placeholder="<?php echo $location ?>" style="margin-top: 2%;">
                         </div>
                    
                        <label class="col-sm-2 control-label">Education</label>
                        <div class="col-sm-10">
                         <input name = 'school' type="text" class="form-control" placeholder="<?php echo $school ?>"  style="margin-top: 2%;">
                         </div>
                         
                   

                   
                        <label class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10"> 
                         <input name = 'phone' type="text" class="form-control" placeholder="<?php echo $phone ?>" style="margin-top: 2%;">
                         </div>
                    
                        <label class="col-sm-2 control-label">Links</label>
                        <div class="col-sm-10">
                        <input name = 'user_reference' type="text" class="form-control" placeholder="<?php echo $user_reference ?>" style="margin-top: 2%;">
                        </div>
                    
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                        <input name = 'fullname' type="text" class="form-control" placeholder="<?php echo $fullname ?>" style="margin-top: 2%;">
                        </div>
                    
                        <label class="col-sm-2 control-label">Quote</label>
                        <div class="col-sm-10">
                        <input name = 'tagline' type="text" class="form-control" placeholder="<?php echo $tagline ?> (character limit 85)" style="margin-top: 2%;">
                        </div>

                      
      
                    <div class="image-upload">
                   
                        <label for="file-input-profile">
                        
                            <img src="<?php echo $PATH_IMG?>camera_icon.png"  style="min-width:100%; max-width:100%; margin-top:20px;">
                        	
                        </label>
                            <label for ="file-upload">
                         

                            </label>


                        
                        <input id="file-input-profile" name = "userprofile" type = "file"/>
                        <input id="file-upload" type = "submit" >
                        <button type="submit" class="btn btn-lg" style="background:#478EBF; color:white; margin-top:20px;margin-left:10px;">Submit Changes</button>
                        </form>
                
                    </div>
                
                    <style>

                    .image-upload > input
                    {
                        display: none;
                    }
                   </style>
                
                                        
                    
    </div>
    
 
 
        </div>
      </div>
    </div>

                                </div>
                     	</div><!--END OF PROFILE-->
                     </div>
                     
                     <div class="row">
                     <!--WREVS-->
                          <div class="panel panel-default" style="background:none; box-shadow:none; border:none;">
                                <div class="panel-body">
                                
                                    <ul class="nav nav-pills wrev-tabs">
                                        <li id="past_wrevs" onclick="change_to_past_wrevs()"><a href="#" onclick="return false;">Past Wrevs</a></li>
                                        <li id="attending_wrevs" onclick="change_to_attending_wrevs()"><a href="#" onclick="return false;">Attending Wrevs</a></li>
                                        <li id="mywrevs" onclick="change_to_mywrevs()"><a href="#" onclick="return false;">MyWrevs</a></li>
                                    </ul>
                                  
                                    
                                        <div id="all_wrevs_panel" class="panel" style="background:#E9EEF2;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);border-radius:10px;" hidden>
                                            <div class="panel-body">
                                	<div class="row">
                                	<div class="table-responsive">
                                       <table style='width:100%'>
                                                <tr>
                                                    <td>Name:</td>
                                                    <td>Date:</td>       
                                                    <td>Start:</td>
                                                    <td>Description:</td>
                                                </tr>     
                                                
					<?php
                                            if(isset($attending_events)) {
                                                for ($i = 0;$i < count($attending_events);$i++){?>
                                                  <tr id="<?php echo 'fullwrev'.$i?>" hidden>
                                                    <td><a href="<?php echo base_url().'event/event_info/latest/'.$attending_events[$i]['event_id']?>"><img src="<?php echo base_url().'uploads/'.$attending_events[$i]['e_image'];?>" style="border-radius:150%; width:70px; height:70px;"/>
                                                    <div class="caption">
                                                        <p><?php 
                                                        	$event_name_temp = substr($attending_events[$i]['e_name'], 0, 10);
                                                        	echo $event_name_temp?></p>
                                                    </div></a></td>
                                                    <td id="<?php echo 'wrev'.$i?>"><?php $wrev[$i] = $attending_events[$i]['e_date']; if(strpos($wrev[$i], 'Every') == 0) echo $wrev[$i]; else echo date("m-d-Y", strtotime($wrev[$i]));?></td>
                                                    <td><?php 
				    				echo $attending_events[$i]['e_start_time'];?></td>
                                                    <td><?php 
                                                    		$event_desc_temp = substr($attending_events[$i]['e_description'], 0, 10);
                                                    		echo $event_desc_temp?></td>
                                                  </tr>
                                        <?php }}
                                            else {?>
                                                  <tr>
                                              	     <td>You have no wrevs right now.</td>
                                                  </tr>
                                        <?php }?>
                                                </table>
                                        </div>
                                    </div>
                                    
                                    <!--Shows all users attending -->
                                    <!--<button type="button" class="btn" style="background:#1C74BB; color:white; font-size:20px;border-radius:8px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">View More</button>-->
                                </div>
                                </div>
                                <div class="row" style="text-align:center; padding:10px;">
                                        <a href="#"  data-toggle="modal" data-target="#create" class="btn btn-lg createwrev" style=" font-size:20px; padding:5px;border-radius:10px;">Create a Wrev</a>
                                        <br>
  <div class="modal" id="myModal2" style="padding-right: 200px;">     
  <div class="modal-dialog">
      <div class="modal-content" style="width: 800px; height: 1000px; border-radius: 10px;">

      
    <div class="panel" style="width: 800px; height: 1000px; background-color: #C2D2DC; border-radius: 10px;">
    
    <div class="panel-body">
     <p style="font-size: 230%; color: white;text-align: center;">
    <b>Set up tickets</b>
      </p>
     
      <p style="font-size: 150%; color: white;text-align: justify;">
     This is what your ticket will look like
      </p>
      
      <div class="panel" style="width: 700px; border-color: #006eaa; border-radius: 10px; margin-left:40px;">
    
    <div class="panel-heading" style="background-color: #3b91c6; height: 70px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
        <p style="font-size: 50px;text-align: left; color: white; margin-top: -10px;">
      Hot Rabbit
        
        <img src="<?php echo $PATH_IMG?>wrevel_logo.png"style="width:200px;z-index:1; float: right; margin-top: 10px;"/>
        </p>
    </div>
    
        <div class="panel-body">
      <div class="col-md-8 col-sm-8 col-xs-8">
     
      <p style="font-size: 150%;text-align: justify;">
     Name &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; name
      </p>
             <p style="font-size: 150%;text-align: justify;">
     Ticket Type &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; type
      </p>
        <p style="font-size: 150%;text-align: justify;">
     Wrevenue &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  wrevenue
      </p>
         <p style="font-size: 150%;text-align: justify;">
     Event Title &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; title
      </p>
          <p style="font-size: 150%;text-align: justify;">
    Price &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  price
      </p>
     <p style="font-size: 150%;text-align: justify;">
     Description  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
     description1<br>
     &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;2<br>
     &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;3<br>
     &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;4<br>
     &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;5<br>
     </p>
     <p style="font-size: 150%;text-align: justify;">
     Date &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; date
      </p>
     <p style="font-size: 150%;text-align: justify;">
     Time &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; time
      </p>
     <p style="font-size: 150%;text-align: justify;">
    Location  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; location
      </p>
     
    <hr style="width:1px; height:480px; background-color: grey; margin-top: -480px; margin-left: 400px;"/>
      </div>
      
      <div class="col-md-4 col-sm-4 col-xs-4">
          <img src="<?php echo $PATH_IMG?>2d.png"style="width:200px;z-index:1; margin-top: 25px;"/>
          <p style="font-size:7px; margin-top: 100px;">
        <b>Disclaimer</b><br>
        Please bring a valid photo ID to the event with this ticket.<br>
        Your name on the ticket must match with your photo ID.<br>
        To prevent confusion, we only allow one ticket per person<br>
        and one ticket per group in case of group purchase.<br>
        All sales are final. No refund or exchange can be issued.<br>
        Valid only for the event specified on this ticket<br>
        <br>
        If you have any questions or concerns, feel free to email.<br>
        customer support at admin@wrevel.com
          </p>
      </div>
        
    </div>
      </div>

                    <form style="text-align: center; font-size: 20px; color: white;">
                <input type="radio" name="gender" value="male"> approve
          <input type="radio" name="gender" value="female"> disapprove
              </form>
      
      <button type="submit" class="btn btn-lg" style="color: #006eaa; background-color: white; float: right;">Submit</button>

    </div>
    </div>
 

      </div>
    </div>
</div>
  
                                    </div>
                                </div>
                            </div><!--END OF WREVS-->
                     </div>
                     
                     <div class="row">
                     <!--PALETTE
                     <div class="panel panel-default" style="background:none; box-shadow:none; border:none;">
                                <div class="panel-body">
                                    <h3 style="text-align:center;"><span class="badge" style="color:white; background:#27AAE2;font-size:20px; border-radius:150px; padding:10px;width:40px;height:40px;">5</span> Items on Palette</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default" style="background:#70A9D6; border-radius:10px;">
                                                <div class="panel-body">
                                                    <img src="images/palette-uparrow.png" class="arrows"/>
                                                    <div class="panel panel-default" style="border-radius:15px;">
                                                        <div class="panel-body" style="padding-bottom:0px;">-->
                                                            <!--
                                                            <div class="row">
                                                                <div class="col-md-8" style="background:#2E5A7C;">
                                                                    <p style="color:white; font-size:15px; padding-top:5px;"><i class="fa fa-calendar"></i> Date</p>
                                                                </div>
                                                                <div class="col-md-4" style="background:#D5DEE5;">
                                                                    <p style="text-align:right; font-size:15px; padding-top:5px;"> # <i class="fa fa-heart-o"></i> | <i class="fa fa-share-square-o"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel-footer">
                                                            <p style="color:white; font-size:15px; padding-top:5px;"><i class="fa fa-calendar"></i> Date</p>
                                                            <p style="text-align:right; font-size:15px; padding-top:5px;"> # <i class="fa fa-heart-o"></i> | <i class="fa fa-share-square-o"></i></p>
                                                        </div>
                                                    </div>           
                                                    <img src="<?php echo $PATH_IMG?>palette-downarrow.png" class="arrows"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>END OF PALETTE-->
                     </div>
                     
                     <div class="row">
                     <!--GROUPS
                     <div class="panel panel-default" style="background:none; box-shadow:none; border:none;">
                                <div class="panel-body">
                                    <h3 style="text-align:center;">Groups</h3>
                                    
                                    <div class="row">








                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                    <p>546 Members</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                    <p>546 Members</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                    <p>546 Members</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                    <!-- DISPLAY PICTURES -->
                                    <!-- 
                                    <?php /*   for(int i =0;i<6;i++)
                                    {
                                        //echo everything
                                        ehco "";
                                        if(i%3==2)
                                            echo "<div class="col-md-4">".
                                                    "<div class="thumbnail default">".
                                                "<img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>"
                                                "<div class="caption" style="text-align:center;">"
                                                    "<p>Party Animals</p>"
                                                    "<p>546 Members</p>"
                                                "</div>"
                                            "</div>"
                                        "</div>";



                                    } */?>
                                -->




				<!--

                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                    <p>546 Members</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                    <p>546 Members</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                    <p>546 Members</p>
                                                </div>
                                            </div>
                                        </div>







                                    </div>
                                    <div class="row" style="text-align:center">
                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px; padding:5px;border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">View more</button></a>
                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#00A79E; color:white; font-size:20px; padding:5px;border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">Create a Group</button></a></div>
                                    </div>
                            </div>END OF GROUPS-->
                     </div>
                     
                     </div> <!--end of column-->
                     
                     <div class="col-md-6">
                     <div class="row">
                     <!--MESSAGING-->
                      <div class="panel panel-default" style="background:none; box-shadow:none; border:none;">
                                <div class="panel-body">
                                    <!--Check Inbox-->
                                    <div class="row inbox-btn" style="padding-top:10px;">                                     
                                        <a href="<?php echo base_url()."chat/MessageView"?>" class="btn btn-lg btn-block blue-button" style="border-radius:10px;border:2px solid #478EBF;"><span class="glyphicon glyphicon-user"></span> Check Inbox</a>
                                    </div>
                                    <!--Chatbox-->
                                    <div class="row" style="padding-top:15px;">
                                        <p style="text-align:center; font-size:25px;">Chatbox</p>
                                        
                                        <div id = "comment-block" style="overflow:auto; background:#8aa8c0; color:white; border-radius:10px;  width:95%; margin-left: 15px;height: 300px; padding: 10px;">
                        </div>
                    <script>
                        $(document).ready(
                            function() {
                                setInterval(function() {
                                //var randomnumber = Math.floor(Math.random() * 100);
                                $( "#comment-block" ).load( "<?php echo $chatBoxLocation; ?>","limit=20");
                                }, 1000);
                            });
                    </script>     
                        <?php echo form_open('showroom/chatbox_comment/'.$username); ?>
                       
                                    </div>
                                    <div class="row left-inner-addon post-input" style="padding-top:10px;float:left;">
                                        <!--<span class="glyphicon glyphicon-comment"></span>-->
                                        <!--<input type="text" class="form-control" placeholder="write something">-->
                                         <span class="glyphicon glyphicon-comment fa-flip-horizontal" style="margin-top:10px;" ></span>
                                        <input type="text" name="comment" class="form-control post-textarea" rows="1" placeholder="write something" style="resize:none;"></textarea>
                                    </div>
                                    
                                        <!--<a href="#" class="blue-button post">Post Comment</a> <a href="#" class="blue-button upload"><span class="glyphicon glyphicon-camera"></span></a>-->
                                        <a href="#"><button type="submit" class="btn btn-lg post-comment-btn" style="background:#478EBF; color:white; padding:5px; border-radius:10px;">Post Comment</button></a>
                                        <?php echo form_close() ?>
                                       <!-- <a href="#"><button type="button" class="btn btn-lg" style="background:#2CA8DC; color:white; font-size:20px;"><span class="glyphicon glyphicon-camera"></span></button></a>-->
                                    
                                </div>
                            </div><!--END OF MESSAGING-->
                     </div>
                     
                     <div class="row">
                     <!--FRIENDS-->
                     	<div class="panel panel-default" style="background:#E9EEF2;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);border-radius:10px;">
                            <div class="panel-body">
                                <h3 style="text-align:center;"><span class="badge" style="color:white; background:#478EBF;font-size:20px; border-radius:150px; padding:18px 10px;width:55px;height:55px;"><?php echo intval($number_of_friends)?></span> Friends</h3>                        
                                    <div class="row">
                                        <?php if(isset($all_friends)){
                                            for($i = 0; $i < $number_of_friends && $i < 6; $i++) {?>
                                                <div class="col-md-4 col-sm-3 col-xs-6">
                                                    	<a href="<?php echo base_url().'main/delete_friend/'.$all_friends[$i]['friend_user_id']?>" class="pull-right" onclick="return confirm_delete()">X</a>
                                                    	<a href="<?php echo base_url().'public_profile/user/'.$all_friends[$i]['friend_user_id']?>">
                                                            <img src="<?php echo base_url().'uploads/'.$all_friends[$i]['friend_picture']?>" style="border-radius:150%; width:100px; height:100px;"/>
                                                                <div class="caption" style="text-align:center;">
                                                                    <p><?php echo $all_friends[$i]['friend_fullname'];?></p></a>

                                                            </div>
                                                   
                                                </div>
                                        <?php }}
                                            else {?>
                                                <div style="padding-left:25px;"> You have no friends.</div>
                                        <?php }?>
                                    </div>
                                    <a href="#" data-toggle="modal" data-target="#showmore"><button type="button" class="btn btn-lg" style="background:#478EBF; color:white; font-size:20px; margin-left:auto; margin-right:auto; display:block; padding:5px; border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">View All</button></a>
                            </div>
                        </div><!--END OF FRIENDS--> 
                    </div>
                
                <!--Show more friends modal-->
          	<div class="modal fade" id="showmore" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                         <div class="modal-content" style="background:#C2D2DC;">
                              <div class="modal-header" style="background:#628da3; color:white;">
                                   <button type="button" class="close" data-dismiss="modal" style="color:white;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <p style="text-align:center;padding:0;font-size:25px;"><i class="fa fa-users"></i> Friends List</p>
                               </div>
                               <div class="modal-body" style="color:black; font-size:18px;">  
                                         <div style="text-align:left; height:360px; overflow-y:auto; display:inline-block; padding-top:10px;">   
						<?php if(isset($all_friends)){
	                                        for($i = 0; $i < $number_of_friends; $i++) {?>
                                                <div class="col-md-4 col-sm-3 col-xs-6">
                                                    <div class="thumbnail default">
                                                    	<a href="<?php echo base_url().'main/delete_friend/'.$all_friends[$i]['friend_user_id']?>" class="pull-right" onclick="return confirm_delete()">X</a>
                                                    	<a href="<?php echo base_url().'public_profile/user/'.$all_friends[$i]['friend_user_id']?>">
                                                            <img src="<?php echo base_url().'uploads/'.$all_friends[$i]['friend_picture']?>" style="border-radius:150%; width:100px; height:100px;"/>
                                                                <div class="caption" style="text-align:center;">
                                                                    <p><?php echo $all_friends[$i]['friend_fullname'];?></p></a>

                                                            </div>
                                                    </div>
                                                </div>
	                                        <?php }}
	                                            else {?>
	                                                <div><b>You have no friends</b></div>
	                                        <?php }?>
                                         </div>
                                </div>
                           </div>
                       </div>
                </div><!--end of popup-->
                     
                     <div class="row">
                     <!--PHOTOS AND VIDEOS
                     	<div class="panel panel-default" style="background:none; box-shadow:none; border:none;">
                                <div class="panel-body">
                                    <ul class="nav nav-pills nav-justified wrev-tabs" style="font-size:24px;">
                                        <li class="active"><a href="#">Photos</a></li>
                                        <li><a href="#">Videos</a></li>
                                    </ul>
                                    
                                    <div class="row" style="padding-top:10px;text-align:center;">
                                       
                                        <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px;border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);padding:5px;">Browse all</button></a>
                                        <a href="#"><button type="button" class="btn btn-lg" style="background:#2CA8DC; color:white; font-size:20px;border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);padding:8.5px;"><span class="glyphicon glyphicon-camera"></span></button></a>
                                    </div>
                                </div>
                            </div>END OF PHOTOS AND VIDEOS-->
                     </div>
                     </div> <!--end of column-->
                     
                     
                   
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--end of content-->

<?php $this->load->view('footer');?>


 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="https://code.jquery.com/jquery.js"></script>
    <!--<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>-->
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>  
    <script src="<?php echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script>
	$('#reputationInfo').popover();
	$('#regular').popover();
	$('#business').popover();
	</script>
	
<script>
	
    function myFunction()
{
document.getElementById("herdzz").innerHTML = " ";

}
    </script>
    <script>
        function check_image()
        {
            if(<?php if($image_key == 'default_profile.jpg')echo true?>){
                if($('#file-input-profile').val()){}
                else{
                    if(confirm('You still have a default profile picture.\n Are you sure you want to continue anyways?\n')){
                        return true;
                    }
                    else return false;
                }
            }
            else{
                alert('not gonna upload');
            }
        }
    </script>
    <script>//Changes the wrevs view in the showroom to show only the specific ones that the user wants.
        function change_to_past_wrevs() {
            if($('#past_wrevs').hasClass('active'))
            {
                $('#all_wrevs_panel').show();
                <?php 
                    $today = date("m-d-Y");
                    if(isset($attending_events)) {
                    for($i = 0; $i < count($attending_events); $i++) {
                        if($wrev[$i] < $today)
                            echo '$("#fullwrev'.$i.'").show();';
                        else 
                            echo '$("#fullwrev'.$i.'").hide();';
                    }
                    }
                ?>
            }
            else {
                $('#past_wrevs').addClass('active');
                $('#all_wrevs_panel').show();
                <?php 
                    $today = date("m-d-Y");
                    if(isset($attending_events)) {
                    for($i = 0; $i < count($attending_events); $i++) {
                        if($wrev[$i] < $today)
                            echo '$("#fullwrev'.$i.'").show();';
                        else 
                            echo '$("#fullwrev'.$i.'").hide();';
                    }
                    }
                ?>
            }
            $('#attending_wrevs').removeClass('active');
            $('#mywrevs').removeClass('active');
        }
        function change_to_attending_wrevs() {
            if($('#attending_wrevs').hasClass('active')){
                $('#all_wrevs_panel').show();
                <?php 
                    $today = date("m-d-Y");
                    if(isset($attending_events)) {
                    for($i = 0; $i < count($attending_events); $i++) {
                        if($wrev[$i] >= $today)
                            echo '$("#fullwrev'.$i.'").show();';
                        else 
                            echo '$("#fullwrev'.$i.'").hide();';
                    }
                    }
                ?>
            }
            else {
                $('#attending_wrevs').addClass('active');
                $('#all_wrevs_panel').show();
                <?php 
                    $today = date("m-d-Y");
                    if(isset($attending_events)) {
                    for($i = 0; $i < count($attending_events); $i++) {
                        if($wrev[$i] >= $today)
                            echo '$("#fullwrev'.$i.'").show();';
                        else 
                            echo '$("#fullwrev'.$i.'").hide();';
                    }
                    }
                ?>
            }
            $('#past_wrevs').removeClass();
            $('#mywrevs').removeClass();
        }
        function change_to_mywrevs() {
            if($('#mywrevs').hasClass('active')){
                $('#all_wrevs_panel').show();
                <?php 
                    //echo 'alert("'.$email.'")';
                    if(isset($attending_events)) {
                    for($i = 0; $i < count($attending_events); $i++) {
                        if($attending_events[$i]['creator_email'] == $email)
                            echo '$("#fullwrev'.$i.'").show();';
                        else 
                            echo '$("#fullwrev'.$i.'").hide();';
                    }
                    }
                ?>
                                        
            }
            else {
                $('#mywrevs').addClass('active');
                $('#all_wrevs_panel').show();
                <?php 
                    //echo 'alert("'.$email.'")';
                    if(isset($attending_events)) {
                    for($i = 0; $i < count($attending_events); $i++) {
                        if($attending_events[$i]['creator_email'] == $email)
                            echo '$("#fullwrev'.$i.'").show();';
                        else 
                            echo '$("#fullwrev'.$i.'").hide();';
                    }
                    }
                ?>
            }
            $('#past_wrevs').removeClass();
            $('#attending_wrevs').removeClass();
        }
    
    </script>
    <script>
    	$(document).ready(function(){
    		<?php if(strpos($image_key, 'facebook')){?>
            		$('.fb_pic').attr("src","<?php echo $image_key;?>" + "?type=large");
            	<?php }?>
        })
    </script>
    <script>
        $(document).ready(function(){
            $('#attending_wrevs').click();
        })
    </script>
    <script>
    	function confirm_delete() {
    		if(confirm("Are you sure you want to delete this person?"))
    			return true;
    		else
    			return false; 
    	}
    </script>
	<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap-tour.min.js"></script>
 	<script src="<?php echo $PATH_BOOTSTRAP?>js/tour.js"></script> 
</body>
</html> 