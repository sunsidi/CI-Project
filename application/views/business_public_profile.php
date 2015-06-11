<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $other_fullname;?> | Wrevel - Discover Your World, Host & Experience Events</title>
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
<link href="<?php echo $PATH_BOOTSTRAP?>css/business-lightbox.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
.arrow-left {
position:absolute;
	width: 0; 
	height: 0; 
	border-top: 0px solid transparent;
	border-right: 28px solid #414042;
	
	border-bottom: 20px solid transparent;
        //margin-left:108px;
        margin-left:50%;
        margin-top:10px;
	z-index:99;	
}
.arrow-left2 {
position:absolute;
	width: 0; 
	height: 0; 
	border-top: 0px solid transparent;
	border-right: 26px solid #e4e5e6;;
	
	border-bottom: 18px solid transparent;
        //margin-left:108px;
        margin-left:50%;
        margin-top:10px;
		z-index:100;
}

</style>
<script>
jQuery(document).ready(function () {
    //hide a div after 3 seconds
    setTimeout(function(){ jQuery("#sentMessage").hide(); }, 5000);
});
</script>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false"
            type="text/javascript"></script> 
</head>


<body>

<?php $this->load->view('header');?>

<!--content
==============================================-->
<div id='sentMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:20px;width: 500px; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>
<div class="container" style="padding-bottom:50px;">
    <div class="row" style="margin-top:50px;">

        <div class="col-md-9 col-md-offset-1">
			<div style="color:white;">
            <div class="col-md-1">
                <img class="profile-image" src="<?php echo base_url().'uploads/'.$other_image_key?>" style="position:absolute; z-index:2;  border-radius:150px;  border:2px solid #7874a2;"/>
               </div>
            <!--<div class="col-md-7 profile-name" style="background:#7874a2; height:65px;">
            <h2 class="profile-fullname"><?php echo $other_fullname;?></h2>
            </div>	 
            <div class="col-md-4" style="height:65px;background:#6ca5cc; border-top-right-radius:5px;text-align:center;text-shadow: 1px 1px 0.5px #000000;">
				<h3>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<span style="text-shadow:none;">(#)</span>
				</h3>
            </div>-->
			<div class="col-md-11" style="position:relative;height:125px;background-image:url(<?php echo base_url().'uploads/'.$profile['cover_photo'];?>);background-size:100%;">
					
					<h3 style="margin-top:80px;"><p style="margin-left:15%;font-family:GillSans;text-shadow:1px 1px 3px #000000;"><?php echo $other_fullname;?> <span class="pull-right" style="font-size:18px;">
					<!--<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<span style="text-shadow:none;">(#)</span>--></span></p></h3>
					
			</div>
			</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="border:none;">       
                <div class="panel-body" style="padding:0;background:#e4e5e6;">
                     
                     <div class="col-md-6" >
                            <div class="row" style="width:100%;">
			<div class="arrow-left" style="margin-left:72px; margin-top:30px;"></div>
			<div class="arrow-left2" style="margin-left:75px; margin-top:31px;"></div>
                        <p class="col-md-8 col-md-offset-2 quote-box" style="background:none; color:#414042; border:1px solid #414042; font-size:18px; border-radius:10px;padding:15px 20px;margin-left:100px; margin-top:20px;">
                            <?php if($other_tagline != "") 
                                    echo $other_tagline;
                                  else 
                                    echo "Welcome to my Showroom! Don��t hesitate to shoot me a message or a friend request!";?>
                        </p>
                     </div>
						
						<div style="margin-top:40px;padding:0 25px;">
							<div style="background:rgba(255,255,255,0.30);padding:10px;border-radius:10px;">
										<h4><img src="<?php echo $PATH_IMG?>details_icon.png"/> &nbsp;About Us:</h4>
										<div class="row" style="padding:0 15% 30px; font-size:16px;">
                                                                                    <?php echo $other_profile['description'];?>
								
										</div>
							</div>
						</div>
                     	<div class="row">
                     	<!--PROFILE-->
                     	   <div class="panel panel-default" style="background:none; box-shadow:none; border:none;padding:20px 15% 5px;">
                                <div class="panel-body" >
									<div style="padding:7%;background:rgba(255,255,255,0.3);border-radius:10px;">
										<?php if(!empty($other_profile['website'])) {?>
                                                                                <p><a href="<?php if(strpos($other_profile['website'], 'http://') === false && strpos($other_profile['website'], 'https://') === false) echo 'http://'.$other_profile['website']; else echo $other_profile['website'];?>" class="info"><span style="padding-right:30px;"><img src="<?php echo $PATH_IMG?>globe_icon2.png"/></span> <?php echo $other_profile['website'];?> </a></p>
                                                                                <?php } if(!empty($other_profile['facebook'])) {?>
                                                                                <p><i class="fa fa-facebook" style="width:47px;margin-left:6px;"></i><a href="<?php if(strpos($other_profile['facebook'], 'http://') === false && strpos($other_profile['facebook'], 'https://') === false) echo 'http://'.$other_profile['facebook']; else echo $other_profile['facebook'];?>" class="info"> <?php echo $other_profile['facebook'];?> </a></p>
                                                                                <?php } if(!empty($other_profile['twitter'])) {?>
                                                                                <p><i class="fa fa-twitter" style="width:47px;margin-left:6px;"></i><a href="<?php if(strpos($other_profile['twitter'], 'http://') === false && strpos($other_profile['twitter'], 'https://') === false) echo 'http://'.$other_profile['twitter']; else echo $other_profile['twitter'];?>" class="info"> <?php echo $other_profile['facebook'];?> </a></p>
                                                                                <?php } if(!empty($other_phone)) {?>
                                                                                <p class="info"><span style="padding-right:33px;"><img src="<?php echo $PATH_IMG?>phone_icon2.png"/></span> <?php echo $other_phone;?></p>
                                                                                <?php } if(!empty($other_email)) {?>
                                                                                <p class="info"><span style="padding-right:28px;"><img src="<?php echo $PATH_IMG?>email_icon2.png"/></span> <?php echo $other_email;?></p>
                                                                                <?php }?>
									</div>
									
									
                                       

                                  
                                    
                                </div>
							</div><!--END OF PROFILE-->
						</div>
                     
                     <div class="row">
                     <!--WREVS-->
                          <div class="panel panel-default" style="background:none; box-shadow:none; border:none;padding:0 10%;">
                                <div class="panel-body" style="background:rgba(255,255,255,0.3);border-radius:10px;">
                                
                                    <ul class="nav nav-pills wrev-tabs wrev-tabs2">
                                        <li id="past_wrevs" onclick="change_to_past_wrevs()"><a href="#" onclick="return false;">Past Wrevs</a></li>
                                        <li id="attending_wrevs" onclick="change_to_attending_wrevs()"><a href="#" onclick="return false;">Attending Wrevs</a></li>
                                        <li id="mywrevs" onclick="change_to_mywrevs()"><a href="#" onclick="return false;">MyWrevs</a></li>
                                    </ul>
                                  
                                    
                                        <div id="all_wrevs_panel" class="panel" style="background:none;" hidden>
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
                                              	     <td>You have no wrevs right now. :(</td>
                                                  </tr>
                                        <?php }?>
                                                </table>
                                        </div>
                                    </div>
                                    
                                    <!--Shows all users attending -->
                                    <!--<button type="button" class="btn" style="background:#1C74BB; color:white; font-size:20px;border-radius:8px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">View More</button>-->
                                </div>
                                
    
  
                                    </div>
                                </div>
                            </div><!--END OF WREVS-->
                     </div>
                     
                     <div class="row">
                     <!--Followers-->
                     	<div class="panel panel-default" style="background:none;border:none;box-shadow:none;">
                            <div class="panel-body">
                                <h3 style="text-align:center;"><span class="badge" style="color:white; background:#478EBF;font-size:20px; border-radius:150px; padding:18px 10px;width:55px;height:55px;"><?php echo $number_of_friends;?></span> Friends</h3>                        
                                    <div style="padding:0 15%;">
									<div class="row" style="background:rgba(255,255,255,0.3);border-radius:10px;">
                                        <?php if(isset($all_friends)){
                                            for($i = 0; $i < $number_of_friends && $i < 6; $i++) {?>
                                                <div class="col-md-4 col-sm-3 col-xs-6" style="padding:15px;">
                                                    	<a href="<?php echo base_url().'public_profile/user/'.$all_friends[$i]['friend_user_id']?>">
                                                            <img src="<?php echo base_url().'uploads/'.$all_friends[$i]['friend_picture']?>" style="border-radius:150%; width:80px; height:80px;"/>
                                                                <div class="caption" style="text-align:center;">
                                                                    <p><?php echo $all_friends[$i]['friend_fullname'];?></p></a>

                                                            </div>
                                                   
                                                </div>
                                        <?php }}
                                            else {?>
                                                <div style="padding:25px;"> You have no friends. :(</div>
                                        <?php }?>
                                    </div>
									</div>
									<div style="text-align:center;margin-top:20px;">
                                    <a href="#" data-toggle="modal" data-target="#showmore"><button type="button" class="btn btn-lg" style="background:#478EBF; color:white; font-size:20px; padding:5px; border-radius:10px;">View All</button></a>
									</div>
							</div>
                        </div><!--END OF followers--> 
                    </div>
                
                <!--Show more followers modal-->
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
                     
					 <div class="row" style="text-align:center;">
                     <!--Reviews-->
                     	<!-- COMMENTED OUT WILL DO LATER 
                                <h3 style="text-align:center;"><span class="badge" style="color:white; background:#478EBF;font-size:20px; border-radius:150px; padding:18px 10px;width:55px;height:55px;">#</span> Reviews</h3>                        
									<div style="padding-left:20%;padding-right:20%;">
								<div style="padding:0% 17%;font-size:18px;line-height:70%;background:#F6F8F9;border-radius:10px;padding:10px;">
									<div style="text-shadow: 1px 1px 3px #000000;color:white;">
										<i class="fa fa-star" style="font-size:25px;"></i>
										<i class="fa fa-star" style="font-size:25px;"></i>
										<i class="fa fa-star" style="font-size:25px;"></i>
										<i class="fa fa-star" style="font-size:25px;"></i>
										<i class="fa fa-star" style="font-size:25px;"></i>
									</div>
									<div style="margin-top:20px;">
										<!--Person's profile image of who posted here--><!--
										<img src="<?php echo $PATH_IMG?>/balt.jpg" class="shoutout-image"/>
										<p style="margin-top:10px;">Name</p>
										
										<p style="margin-top:20px;">"Review here"</p>
									</div>
								</div>
								</div>
                                    <a href="#" data-toggle="modal" data-target="" class="btn morereviews" style="font-size:20px;margin-top:10px;">More Reviews</a>
                            
                        <!--END OF reviews--> 
                    </div>
					 
                     </div> <!--end of column-->
                     
                     <div class="col-md-6" style="background:#d5dade;">
                     <div class="row">
                     <!--MESSAGING-->
                      <div class="panel panel-default" style="background:none; box-shadow:none; border:none;">
                                <div class="panel-body">
                                    <!--Check Inbox-->
                                   <div class="row">
                                        <a href="#" data-toggle="modal" data-target="#basicModal"  class="btn btn-lg btn-block blue-button bp-button" style="border-radius:10px;width:60%;"><i class="fa fa-envelope"></i> Send Message</a>
                                    </div>
									<div class="row" style="padding-top:10px;">
                                        <a href="<?php echo base_url().'main/friend_request/'.$other_id;?>" class="btn btn-lg btn-block blue-button bp-button" style="border-radius:10px;width:60%;"><span class="glyphicon glyphicon-user"></span> Click to Follow</a>
                                    </div>

									<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog ">
      <div class="modal-content">
          
    
            <div class="modal-header" style="background-color: #628DA3;padding:5px;padding-top:8px;">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <p style="font-size: 215%; color: white; text-align: center;">
                  <i class="fa fa-envelope"></i> Message
              </p>
            </div>
                
                <div class="modal-body" style="text-align:center; font-size:20px;background:#c2d2dc;">
                  <div class="container">
      <div class="row">
          <!-- START of COMPOSE MESSAGE FORM -->
    
            <!-- From input-->
            <?php 
            	$change_value = array('onsubmit' => 'return change_value()');
            	echo form_open('chat/composeMessage', $change_value); 
            ?>
                                     
                           
                           
    
            <!-- To input-->
            <div class="form-group">
              <div class="col-md-2 col-sm-2" for="email" style="margin-left: 10px;">To:</div>
              <div class="col-md-9 col-sm-9">
                <input id="to" name="to" type="text" placeholder="To" class="form-control" value=""  readonly>
              </div>
            </div>
      
      <!-- Title input
            <div class="form-group">
              <div class="col-md-2 col-sm-2 col-xs-2" for="name" style="margin-left:10px;">Title:</div>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <input id="name" name="name" type="text" placeholder="Title" class="form-control" style="width: 400px;">
              </div>
            </div>
            -->
    
            <!-- Message body -->
            <div class="form-group">
              <div class="col-md-2 col-sm-2" for="message" style="margin-left: 8px;">Your message:</div>
              <div class="col-md-9 col-sm-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5" style="margin-top:10px;height:170px;"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 col-sm-12 col-xs-12" style="margin-left: 5px; margin-top:10px;">
                <button type="submit" class="btn btn-primary btn-lg">Send</button>
              </div>
            </div>
            <?php echo form_close();?>
      
        <!--END OF COMPOSE MESSAGE FORM -->
      </div>
      
    </div>
    </div>
            
            
      </div>
        </div>
    </div> <!-- END OF MESSAGE MODAL -->
	
                                    
                                    
                                </div>
                            </div><!--END OF MESSAGING-->
                    </div>
                     
                     
                     
                    <div class="row">
                     <!--PHOTOS AND VIDEOS-->
                    <div class="panel panel-default" style="background:none; box-shadow:none; border:none;padding:0 7%;">
                        <div class="panel-body" style="background:rgba(255,255,255,0.3);border-radius:10px;">
                            <h3 style="text-align:center;"><img src="<?php echo $PATH_IMG?>photo_icon.png"/> &nbsp;Photos</h3>
                                <div class="tab-content">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                        <div role="tabpanel" class="tab-pane active" id="photos">
                                            <div class="carousel-inner" role="listbox">
                                                <?php if(!empty($profile['photos'])) {
                                                        $first = true;
                                                        foreach($profile['photos'] as $picture){
                                                            if($first) {?>
                                                                <div class="item active">
                                                                    <a href="<?php echo base_url().'/uploads/profile/'.$profile['user_id'].'/photos/'.$picture?>" rel="lightbox"><img class="img-responsive" style="margin-left:auto;margin-right:auto;height:250px;max-height:250px;" src="<?php echo base_url().'/uploads/profile/'.$profile['user_id'].'/photos/'.$picture?>" alt="..."></a>
                                                                </div>
                                                            <?php $first = false;
                                                            } else {?>
                                                            <div class="item">
                                                                <a href="<?php echo base_url().'/uploads/profile/'.$profile['user_id'].'/photos/'.$picture?>" rel="lightbox"><img class="img-responsive" style="margin-left:auto;margin-right:auto;height:250px;max-height:250px;" src="<?php echo base_url().'/uploads/profile/'.$profile['user_id'].'/photos/'.$picture?>" alt="..."></a>
                                                            </div>

                                                <?php }}}?>                                                                    
                                            </div>
                                            <!-- Controls -->
                                            <a class="left carousel-control" style="background:none;" href="#carousel-example-generic" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" style="background:none;" href="#carousel-example-generic" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>	
                                <div class="row" style="padding-top:10px;text-align:center;">
                                    <!--<a href="#" class="btn btn-lg photos-button" style="font-size:20px;border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);padding:5px 20px;">Browse all</button></a>
                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#2CA8DC; color:white; font-size:20px;border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);padding:5px 8px;"><span class="glyphicon glyphicon-camera"></span></button></a>-->
                                </div>
                        </div>
                            </div><!--END OF PHOTOS AND VIDEOS-->
                     </div>
					 
					 <!--Hours-->
					 <div class="row" style="padding:10px 15%;">
							<div style="background:rgba(255,255,255,0.3);border-radius:10px;padding:13px 0;">
							<h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>clock_icon.png"/> &nbsp; Hours</h4>
								<div style="padding:0% 17%;font-size:18px;line-height:70%;">
                                                                    <?php for($i = 0; $i < 7; $i++) {
                                                                            if($other_profile['day'][$i] != false) {?>
                                                                                <p><em><?php echo ucfirst($other_profile['day'][$i]['day']);?></em> &nbsp;&nbsp <?php echo $other_profile['day'][$i]['start_time'].' to '.$other_profile['day'][$i]['end_time'];?></p>
                                                                    <?php }}?>
								</div>
							</div>
					 </div>
					 
					 <div class="row" style="margin-top:15px;padding-left:10%;padding-right:10%;">
					 <div style="background:rgba(255,255,255,0.3);padding:10px; border-radius:10px;">
						<h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>map_icon.png"/> &nbsp; Where is it?</h4>
							<div style="text-align:center;font-size:18px;padding:20px;line-height:60%;">
								<p><?php echo $other_profile['address'].', '.$other_profile['city']. ', '.$other_profile['state']. ' '.$other_profile['zipcode'];?></p>
							</div>
							
							<!-- GOOGLE MAPS -->
                                                        <div class="col-md-12">
                                                            <div id="pano" style="max-width:100%;min-width:100%; height: 200px;"></div>
                                                            <div id="map_canvas" style="max-width:100%;min-width:100%; height: 200px;"></div> 
                                                            <!--   Google Map Goes Here, different depending on where location is-->
                                                        </div><!-- END OF GOOGLE MAPS -->
							
							<div style="text-align:center;">
							<a href="" class="btn viewmorewrevs" style="font-size:18px;color:white; border-radius:8px;">Get directions</a>
							</div>
						</div>	
					 </div>
					 
					 <!--Chatbox-->
					 
                                    <div class="row" style="padding-top:15px;">
                                        <h3 style="text-align:center;">Chatbox</h3>
                                        
                                        <div id = "comment-block" style="overflow:auto; background:rgba(255,255,255,0.3); color:#414042; border-radius:10px;  width:95%; margin-left: 15px;height: 300px; padding: 10px;">
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
                        <?php echo form_open('public_profile/chatbox_comment/'.$other_id); ?>
                       
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
					 
						<!--Tags NOT YET!
						<div class="row" style="padding:20px;">
							<h4><i class="fa fa-tag"></i> &nbsp; Tags</h4>
							
						</div><!--end of tags-->
                     </div> <!--end of column-->
                     
                     
                   
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
	<script src="<?php echo $PATH_BOOTSTRAP?>js/lightbox.js"></script>
    <script>
	$('#reputationInfo').popover();
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
                        if($attending_events[$i]['creator_email'] == $other_email)
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
    <script type="text/javascript"> 

    var userLocation =  <?php echo json_encode($other_profile['address']. "," . $other_profile['state'] . "," .$other_profile['city']. "," . $other_profile['zipcode']); ?>;

    if (GBrowserIsCompatible()) {
       var geocoder = new GClientGeocoder();
       geocoder.getLocations(userLocation, function (locations) {         
          if (locations.Placemark)
          {
             var north = locations.Placemark[0].ExtendedData.LatLonBox.north;
             var south = locations.Placemark[0].ExtendedData.LatLonBox.south;
             var east  = locations.Placemark[0].ExtendedData.LatLonBox.east;
             var west  = locations.Placemark[0].ExtendedData.LatLonBox.west;

             var bounds = new GLatLngBounds(new GLatLng(south, west), 
                                            new GLatLng(north, east));

             var map = new GMap2(document.getElementById("map_canvas"));

             map.setCenter(bounds.getCenter(), map.getBoundsZoomLevel(bounds));
             map.addOverlay(new GMarker(bounds.getCenter()));

             new GStreetviewPanorama(document.getElementById("pano"),
                                     { latlng: bounds.getCenter() })
          }
       });
    }
    </script>
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