<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Business Profile | Wrevel - Discover Your World, Host & Experience Events</title>
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
                <img class="profile-image" src="<?php echo base_url().'/uploads/'. $image_key?>" style="position:absolute; z-index:2;  border-radius:150px;  border:2px solid #7874a2;"/>
               </div>
            <!--<div class="col-md-7 profile-name" style="background:#7874a2; height:65px;">
            <h2 class="profile-fullname"><?php echo $fullname;?></h2>
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
					
					<h3 style="margin-top:80px;"><p style="margin-left:15%;font-family:GillSans;text-shadow:1px 1px 3px #000000;"><?php echo $fullname;?> <span class="pull-right" style="font-size:18px;">
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
                     
                     <div class="col-md-6">
                            <div class="row" style="width:100%;">
			<div class="arrow-left" style="margin-left:72px; margin-top:30px;"></div>
			<div class="arrow-left2" style="margin-left:75px; margin-top:31px;"></div>
                        <p class="col-md-8 col-md-offset-2 quote-box" style="background:none; color:#414042; border:1px solid #414042; font-size:18px; border-radius:10px;padding:15px 20px;margin-left:100px; margin-top:20px;">
                            <?php if($tagline != "") 
                                    echo $tagline;
                                  else 
                                    echo "Welcome to my Showroom! Don't hesitate to shoot me a message or a friend request!";?>
                        </p>
                     </div>

					<div style="margin-top:40px;padding:0 25px;">	
						<div style="background:rgba(255,255,255,0.30);padding:10px;border-radius:10px;">
							<h4><img src="<?php echo $PATH_IMG?>details_icon.png"/> &nbsp;About Us</h4>
							<div class="row" style="padding:0 15% 30px; font-size:16px;">
							<?php echo $profile['description'];?>
								
							</div>
						</div>
					</div>
					
					<div style="text-align:center;margin-top:20px;">
						<a href="#" data-toggle="modal" data-target="#basicModal" class="btn btn-lg edit" style="color:white;border-radius:10px;padding:5px 15px;">Edit Profile
						</a>
						<a href="<? echo base_url()?>account/myaccount_accountinfo" class="btn btn-lg edit" style="color:white;border-radius:10px;padding:5px 15px;">My Account
						</a>
					</div>
                     	<div class="row">
                     	<!--PROFILE-->
                     	   <div class="panel panel-default" style="background:none; box-shadow:none; border:none;padding:20px 15% 5px;">
                                <div class="panel-body" >
									<div style="padding:7%;background:rgba(255,255,255,0.3);border-radius:10px;">
                                                                            <?php if(!empty($profile['website'])) {?>
                                                                            <p style="word-break:break-all;"><a href="<?php if(strpos($profile['website'], 'http://') === false && strpos($profile['website'], 'https://') === false) echo 'http://'.$profile['website']; else echo $profile['website'];?>" class="info"><span style="padding-right:24px;"><img src="<?php echo $PATH_IMG?>globe_icon2.png"/></span> <?php echo $profile['website'];?> </a></p>
                                                                            <?php } if(!empty($profile['facebook'])) {?>
                                                                            <p style="word-break:break-all;"><i class="fa fa-facebook" style="width:41px;margin-left:6px;"></i><a href="<?php if(strpos($profile['facebook'], 'http://') === false && strpos($profile['facebook'], 'https://') === false) echo 'http://'.$profile['facebook']; else echo $profile['facebook'];?>" class="info"> <?php echo $profile['facebook'];?> </a></p>
                                                                            <?php } if(!empty($profile['twitter'])) {?>
                                                                            <p style="word-break:break-all;"><i class="fa fa-twitter" style="width:41px;margin-left:6px;"></i><a href="<?php if(strpos($profile['twitter'], 'http://') === false && strpos($profile['twitter'], 'https://') === false) echo 'http://'.$profile['twitter']; else echo $profile['twitter'];?>" class="info"> <?php echo $profile['facebook'];?> </a></p>
                                                                            <?php } if(!empty($phone)) {?>
                                                                            <p style="word-break:break-all;" class="info"><span style="padding-right:27px;"><img src="<?php echo $PATH_IMG?>phone_icon2.png"/></span> <?php echo $phone;?></p>
                                                                            <?php } if(!empty($email)) {?>
                                                                            <p style="word-break:break-all;" class="info"><span style="padding-right:22px;"><img src="<?php echo $PATH_IMG?>email_icon2.png"/></span> <?php echo $email;?></p>
                                                                            <?php }?>
									</div>
									
									
                                        <!--Edit profile button-->

                                  
                                    
  



    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog" style="width:45%;">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #628DA3; height: 80px;padding:20px;">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <p style="font-size: 215%; color: white;text-align:center;">
                            <i class="fa fa-pencil-square-o" style="font-size:30px;"></i> Edit Profile
                        </p>
                </div>
                <div class="modal-body" style="font-size:15px;background:#c2d2dc;">
                    <?php 
                        $requiredthings = array('onsubmit' => 'return check_image()');
                        echo form_open_multipart(base_url().'main/update_profile', $requiredthings);
                    ?>
                    <div class="form-group row" style="text-align:center;">
                        <p><strong>Type of Account</strong></p>
                        <label class="radio-inline" style="padding-right:15px;" id="regular" data-content="Recommended free account for users that want to attend events,connect with friends,and create events quickly without much setup. " data-trigger="hover" data-placement="bottom">
                                <input type="radio" name="account_change" id="inlineRadio1" value="0"> Personal
                                </br>
                                <img src="<?php echo $PATH_IMG?>personal_profile_icon.png" style="width:100px;margin-top:10px;"/>
                        </label>
                        <label class="radio-inline" style="margin-left:10px;" id="business" data-content="Recommended free account, ideal for users, organizations and coordinators.  Build a professional portfolio and customize your profile to cater all of your event hosting needs." data-trigger="hover" data-placement="bottom">
                                <input type="radio" name="account_change" id="inlineRadio2" value="1" checked> Professional
                                </br>
                                <img src="<?php echo $PATH_IMG?>business_profile_icon.png" style="width:100px;margin-top:10px;"/>
                        </label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input name="fullname" type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Quote</label>
                        <div class="col-sm-10">
                            <input name="tagline" type="text" class="form-control" placeholder=" (character limit 85)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">About Us</label>
                        <div class="col-sm-10">
                            <textarea name="business-description" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2">Address:</label>
                        <div class="col-sm-10">
                            <input name="business-address" class="form-control"></textarea>
                        </div>	
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2">City:</label>
                        <div class="col-sm-3">
                            <input name="business-city" class="form-control"></textarea>
                        </div>	
						<label class="col-sm-2">State:</label>
                        <div class="col-sm-2">
                            <select id="state" name="business-state" class="form-control" style="padding:0;">
              			<option value="" selected="selected"></option> 
              			<option value="AK">AK</option>
              			<option value="AL">AL</option>
              			<option value="AR">AR</option>
              			<option value="AZ">AZ</option>
              			<option value="CA">CA</option>
              			<option value="CO">CO</option>
              			<option value="CT">CT</option>
              			<option value="DC">DC</option>
              			<option value="DE">DE</option>
              			<option value="FL">FL</option>
              			<option value="GA">GA</option>
              			<option value="HI">HI</option>
              			<option value="IA">IA</option>
              			<option value="ID">ID</option>
              			<option value="IL">IL</option>
              			<option value="IN">IN</option>
              			<option value="KS">KS</option>
              			<option value="KY">KY</option>
              			<option value="LA">LA</option>
              			<option value="MA">MA</option>
              			<option value="MD">MD</option>
              			<option value="ME">ME</option>
              			<option value="MI">MI</option>
              			<option value="MN">MN</option>
              			<option value="MO">MO</option>
              			<option value="MS">MS</option>
              			<option value="MT">MT</option>
              			<option value="NC">NC</option>
              			<option value="ND">ND</option>
              			<option value="NE">NE</option>
              			<option value="NH">NH</option>
              			<option value="NJ">NJ</option>
              			<option value="NM">NM</option>
              			<option value="NV">NV</option>
              			<option value="NY">NY</option>
              			<option value="OH">OH</option>
              			<option value="OK">OK</option>
              			<option value="OR">OR</option>
              			<option value="PA">PA</option>
              			<option value="RI">RI</option>
              			<option value="SC">SC</option>
              			<option value="SD">SD</option>
              			<option value="TN">TN</option>
              			<option value="TX">TX</option>
              			<option value="UT">UT</option>
              			<option value="VA">VA</option>
              			<option value="VT">VT</option>
              			<option value="WA">WA</option>
              			<option value="WI">WI</option>
              			<option value="WV">WV</option>
              			<option value="WY">WY</option>
            		      </select> 
                        </div>
                        <label class="col-sm-1">Zip:</label>
                        <div class="col-sm-2">
                            <input name="business-zipcode" class="form-control" type="text" value = "" pattern="\d{5,5}(-\d{4,4})?">
                        </div>	
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-4"> 
                            <input name="phone" type="text" class="form-control" placeholder="">
                        </div>
						<label class="col-sm-2">Website:</label>
                        <div class="col-sm-4">
                            <input name="business-website" class="form-control">
                        </div>	
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-2">Facebook:</label>
                        <div class="col-sm-4">
                            <input name="business-facebook" class="form-control">
                        </div>	
						<label class="col-sm-2">Twitter:</label>
                        <div class="col-sm-4">
                            <input name="business-twitter" class="form-control">
                        </div>	
                    </div>
                  
                    <div>
                        <label class="col-sm-20"><b><u>Hours:</u></b></label>
                    </div>
                    <div id="days_base">
                        <div class="form-group row">
                            <label class="col-sm-2">Day:</label>
                            <div class="col-sm-2">
                                <select name="business-day[]" class="form-control" style="padding:0;">
                                    <option value="" selected="selected"></option>
                                    <option value="Mon">Mon</option>
                                    <option value="Tues">Tues</option>
                                    <option value="Wed">Wed</option>
                                    <option value="Thurs">Thurs</option>
                                    <option value="Fri">Fri</option>
                                    <option value="Sat">Sat</option>
                                    <option value="Sun">Sun</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select name="business-start_time[]" class="form-control" style="padding:0;">
                                    <option value="" selected="selected"></option>
                                    <option value="01:00">1:00AM</option>
                                    <option value="02:00">2:00AM</option>
                                    <option value="03:00">3:00AM</option>
                                    <option value="04:00">4:00AM</option>
                                    <option value="05:00">5:00AM</option>
                                    <option value="06:00">6:00AM</option>
                                    <option value="07:00">7:00AM</option>
                                    <option value="08:00">8:00AM</option>
                                    <option value="09:00">9:00AM</option>
                                    <option value="10:00">10:00AM</option>
                                    <option value="11:00">11:00AM</option>
                                    <option value="12:00">12:00PM</option>
                                    <option value="13:00">1:00PM</option>
                                    <option value="14:00">2:00PM</option>
                                    <option value="15:00">3:00PM</option>
                                    <option value="16:00">4:00PM</option>
                                    <option value="17:00">5:00PM</option>
                                    <option value="18:00">6:00PM</option>
                                    <option value="19:00">7:00PM</option>
                                    <option value="20:00">8:00PM</option>
                                    <option value="21:00">9:00PM</option>
                                    <option value="22:00">10:00PM</option>
                                    <option value="23:00">11:00PM</option>
                                    <option value="24:00">12:00AM</option>
                                </select>
                            </div>
                            <label class="col-sm-1">TO</label>
                            <div class="col-sm-2">
                                <select name="business-end_time[]" class="form-control" style="padding:0;">
                                    <option value="" selected="selected"></option>
                                    <option value="01:00">1:00AM</option>
                                    <option value="02:00">2:00AM</option>
                                    <option value="03:00">3:00AM</option>
                                    <option value="04:00">4:00AM</option>
                                    <option value="05:00">5:00AM</option>
                                    <option value="06:00">6:00AM</option>
                                    <option value="07:00">7:00AM</option>
                                    <option value="08:00">8:00AM</option>
                                    <option value="09:00">9:00AM</option>
                                    <option value="10:00">10:00AM</option>
                                    <option value="11:00">11:00AM</option>
                                    <option value="12:00">12:00PM</option>
                                    <option value="13:00">1:00PM</option>
                                    <option value="14:00">2:00PM</option>
                                    <option value="15:00">3:00PM</option>
                                    <option value="16:00">4:00PM</option>
                                    <option value="17:00">5:00PM</option>
                                    <option value="18:00">6:00PM</option>
                                    <option value="19:00">7:00PM</option>
                                    <option value="20:00">8:00PM</option>
                                    <option value="21:00">9:00PM</option>
                                    <option value="22:00">10:00PM</option>
                                    <option value="23:00">11:00PM</option>
                                    <option value="24:00">12:00AM</option>
                                </select>
                            </div>
                        <a class="btn btn-default" id="days_end"onclick="add_more_days()"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5">Edit Profile Image:</label>
                        <div class="image-upload">
                            <label for="file-input-profile">
                                <img src="<?php echo $PATH_IMG?>camera_icon.png"  style="min-width:100%; max-width:100%; margin-top:20px;">
                            </label>
                            <label for ="file-upload" hidden>
                            </label>
                            <input id="file-input-profile" name = "userprofile" type = "file" style="display:none"/>
                            <input id="file-upload" type = "submit" hidden>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2">Cover Photo:</label>
                        <div class="image-upload">
                            <label for="file-input-cover">
                                <img src="<?php echo $PATH_IMG?>camera_icon.png"  style="min-width:100%; max-width:100%; margin-top:20px;">
                            </label>
                            <label for ="file-upload" hidden>
                            </label>
                            <input id="file-input-cover" name = "usercover" type = "file" style="display:none"/>
                            <input id="file-upload" type = "submit" hidden>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5">Add Photos to your Profile:</label>
                        <div id="photos_upload" class="col-sm-5">
                            <div class="image-upload">
                                <label>Choose an Image:</label>
                                <input name="profile_file_array[]" type="file" style="overflow:hidden;" />
                            </div>
                        </div>
                        <div>
                            <a class="btn btn-default" onclick="add_more_photos()"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
					<div style="text-align:center;">
                    <button type="submit" class="btn btn-lg" style="background:#478EBF; color:white; margin-top:20px;margin-left:10px;">Submit Changes</button>
					</div>
                    </form>
                    
                </div>
            </div>
        </div>
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
                                                <h3 style="text-align:center;"><span id="NumberWrevelsSpan" class="badge" style="color:white; background:#478EBF;font-size:20px; border-radius:150px; padding:18px 10px;width:55px;height:55px;"><?php  $Number_Wrevel = count($attending_events); echo intval($Number_Wrevel);?></span> Wrevels</h3>

                                                <div class="row">
                                	<div class="table-responsive">
                                        <?php
                                        if(isset($attending_events)) {
                                            for ($i = 0;$i < count($attending_events);$i++){?>
                                                <div id="<?php echo 'fullwrev'.$i?>" class="row" style="padding:3% 10% 0%;" hidden>
                                                    <div class="col-md-12" style="position:relative;background-image:url(<?php echo base_url().'uploads/'.$attending_events[$i]['e_image'];?>); background-size:100%;padding:10px 0px 0px; color:white;">
                                                        <div style="padding:0 10px 30px;">
                                                            <p style="text-align:right;"><span class="wrevenue-attending"><?php echo $attending_events[$i]['e_attending'];?></span><span class="wrevenue-attending-text">Attending</span></p>
                                                            <div style="margin-left:auto;margin-right:auto;text-align:center;">
                                                                <a href="<?php echo base_url().'event/event_info/latest/'.$attending_events[$i]['event_id'];?>" class="btn wrevenue-wrev"><?php echo substr($attending_events[$i]['e_name'], 0, 10);?></a>
                                                                <span class="pull-right" style="color:black; position:relative;"><i class="fa fa-clock-o"></i><?php echo $attending_events[$i]['e_start_time'];?></span>
                                                            </div>
                                                        </div>
                                                        <div style="background:rgba(0,0,0,0.5);postion:absolute;bottom:0;left:0;padding:5px 10px;">
                                                            <i class="fa fa-calendar"></i> <?php $wrev[$i] = $attending_events[$i]['e_date']; if(strpos($wrev[$i], 'Every') == 0) echo $wrev[$i]; else echo date("m-d-Y", strtotime($wrev[$i]));?> <span class="pull-right"><?php echo $attending_events[$i]['e_likes'];?><i class="fa fa-heart-o"></i> | <a href=""><span class="glyphicon glyphicon-list-alt"></span></a> | <a href=""><i class="fa fa-share-square-o"></i></a></span>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            <?php }}
                                        else {?>
                                            <!--<tr>
                                                 <td>You have no wrevs right now.</td>
                                            </tr>-->
                                            <div style="padding:10px;">
                                                You have no wrevs right now.
                                            </div>
                                        <?php }?>
                                        </div>
                                    </div>
                                    
                                    <!--Shows all users attending -->
                                    <!--<button type="button" class="btn" style="background:#1C74BB; color:white; font-size:20px;border-radius:8px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">View More</button>-->
                                                <a id="viewWre"  onclick = "view_All_wrevels()"  href="#" data-toggle="modal" data-target="#showmoreWrevel"><button  type="button" class="btn btn-lg" style="background:#478EBF; color:white; font-size:20px; margin-left:auto; margin-right:auto; display:block; padding:5px; border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">View All</button></a>

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

                     <div class="modal fade" id="showmoreWrevel" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content" style="background:#C2D2DC;">
                                 <div class="modal-header" style="background:#628da3; color:white;">
                                     <button type="button" class="close" data-dismiss="modal" style="color:white;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                     <p style="text-align:center;padding:0;font-size:25px;"><i class="fa fa-users"></i> Wrevels List</p>
                                 </div>
                                 <div class="modal-body" style="color:black; font-size:18px;">
                                     <div style="text-align:left; height:360px; overflow-y:auto; padding-top:10px;">
                                         <div class="row">

                                             <div class="events_past">
                                                 <?php
                                                 if(isset($attending_events)) {
                                                     for ($i = 0;$i < count($attending_events);$i++){
                                                         $today = date("Y-m-d");
                                                         $wrev[$i] = $attending_events[$i]['e_date'];
                                                         if($wrev[$i] < $today){
                                                             ?>
                                                             <div id="<?php echo 'fullwrev-'.$i?>" class="row" style="padding:3% 10% 0%;" >
                                                                 <div class="col-md-12" style="position:relative;background-image:url(<?php echo base_url().'uploads/'.$attending_events[$i]['e_image'];?>); background-size:100%;padding:10px 0px 0px; color:white;">
                                                                     <div style="padding:0 10px 30px;">
                                                                         <p style="text-align:right;"><span class="wrevenue-attending"><?php echo $attending_events[$i]['e_attending'];?></span><span class="wrevenue-attending-text">Attending</span></p>
                                                                         <div style="margin-left:auto;margin-right:auto;text-align:center;">
                                                                             <a href="<?php echo base_url().'event/event_info/latest/'.$attending_events[$i]['event_id'];?>" class="btn wrevenue-wrev"><?php echo substr($attending_events[$i]['e_name'], 0, 10);?></a>
                                                                             <span class="pull-right" style="color:black; position:relative;"><i class="fa fa-clock-o"></i><?php echo $attending_events[$i]['e_start_time'];?></span>
                                                                         </div>
                                                                     </div>
                                                                     <div style="background:rgba(0,0,0,0.5);postion:absolute;bottom:0;left:0;padding:5px 10px;">
                                                                         <i class="fa fa-calendar"></i> <?php  if(strpos($wrev[$i], 'Every') == 0) echo $wrev[$i]; else echo date("m-d-Y", strtotime($wrev[$i]));?> <span class="pull-right"><?php echo $attending_events[$i]['e_likes'];?><i class="fa fa-heart-o"></i> | <a href=""><span class="glyphicon glyphicon-list-alt"></span></a> | <a href=""><i class="fa fa-share-square-o"></i></a></span>
                                                                     </div>
                                                                 </div>
                                                                 <hr>
                                                             </div>
                                                         <?php }}}
                                                 else {?>
                                                     <!--<tr>
                                                          <td>You have no wrevs right now.</td>
                                                     </tr>-->
                                                     <div style="padding:10px;">
                                                         You have no wrevs right now.
                                                     </div>
                                                 <?php }?>
                                             </div>

                                             <div class="events_current">
                                                 <?php
                                                 if(isset($attending_events)) {
                                                     for ($i = 0;$i < count($attending_events);$i++){
                                                         $today = date("Y-m-d");
                                                         $wrev[$i] = $attending_events[$i]['e_date'];
                                                         if($wrev[$i] >= $today){
                                                             ?>
                                                             <div id="<?php echo 'fullwrev-'.$i?>" class="row" style="padding:3% 10% 0%;" >
                                                                 <div class="col-md-12" style="position:relative;background-image:url(<?php echo base_url().'uploads/'.$attending_events[$i]['e_image'];?>); background-size:100%;padding:10px 0px 0px; color:white;">
                                                                     <div style="padding:0 10px 30px;">
                                                                         <p style="text-align:right;"><span class="wrevenue-attending"><?php echo $attending_events[$i]['e_attending'];?></span><span class="wrevenue-attending-text">Attending</span></p>
                                                                         <div style="margin-left:auto;margin-right:auto;text-align:center;">
                                                                             <a href="<?php echo base_url().'event/event_info/latest/'.$attending_events[$i]['event_id'];?>" class="btn wrevenue-wrev"><?php echo substr($attending_events[$i]['e_name'], 0, 10);?></a>
                                                                             <span class="pull-right" style="color:black; position:relative;"><i class="fa fa-clock-o"></i><?php echo $attending_events[$i]['e_start_time'];?></span>
                                                                         </div>
                                                                     </div>
                                                                     <div style="background:rgba(0,0,0,0.5);postion:absolute;bottom:0;left:0;padding:5px 10px;">
                                                                         <i class="fa fa-calendar"></i> <?php if(strpos($wrev[$i], 'Every') == 0) echo $wrev[$i]; else echo date("m-d-Y", strtotime($wrev[$i]));?> <span class="pull-right"><?php echo $attending_events[$i]['e_likes'];?><i class="fa fa-heart-o"></i> | <a href=""><span class="glyphicon glyphicon-list-alt"></span></a> | <a href=""><i class="fa fa-share-square-o"></i></a></span>
                                                                     </div>
                                                                 </div>
                                                                 <hr>
                                                             </div>
                                                         <?php }}}
                                                 else {?>
                                                     <!--<tr>
                                                          <td>You have no wrevs right now.</td>
                                                     </tr>-->
                                                     <div style="padding:10px;">
                                                         You have no wrevs right now.
                                                     </div>
                                                 <?php }?>
                                             </div>

                                             <div class="events_all">
                                                 <?php
                                                 if(isset($attending_events)) {
                                                     for ($i = 0;$i < count($attending_events);$i++){
                                                         if($attending_events[$i]['creator_email'] == $email){
                                                             ?>
                                                             <div id="<?php echo 'fullwrev-'.$i?>" class="row" style="padding:3% 10% 0%;" >
                                                                 <div class="col-md-12" style="position:relative;background-image:url(<?php echo base_url().'uploads/'.$attending_events[$i]['e_image'];?>); background-size:100%;padding:10px 0px 0px; color:white;">
                                                                     <div style="padding:0 10px 30px;">
                                                                         <p style="text-align:right;"><span class="wrevenue-attending"><?php echo $attending_events[$i]['e_attending'];?></span><span class="wrevenue-attending-text">Attending</span></p>
                                                                         <div style="margin-left:auto;margin-right:auto;text-align:center;">
                                                                             <a href="<?php echo base_url().'event/event_info/latest/'.$attending_events[$i]['event_id'];?>" class="btn wrevenue-wrev"><?php echo substr($attending_events[$i]['e_name'], 0, 10);?></a>
                                                                             <span class="pull-right" style="color:black; position:relative;"><i class="fa fa-clock-o"></i><?php echo $attending_events[$i]['e_start_time'];?></span>
                                                                         </div>
                                                                     </div>
                                                                     <div style="background:rgba(0,0,0,0.5);postion:absolute;bottom:0;left:0;padding:5px 10px;">
                                                                         <i class="fa fa-calendar"></i> <?php $wrev[$i] = $attending_events[$i]['e_date']; if(strpos($wrev[$i], 'Every') == 0) echo $wrev[$i]; else echo date("m-d-Y", strtotime($wrev[$i]));?> <span class="pull-right"><?php echo $attending_events[$i]['e_likes'];?><i class="fa fa-heart-o"></i> | <a href=""><span class="glyphicon glyphicon-list-alt"></span></a> | <a href=""><i class="fa fa-share-square-o"></i></a></span>
                                                                     </div>
                                                                 </div>
                                                                 <hr>
                                                             </div>
                                                         <?php }}}
                                                 else {?>
                                                     <!--<tr>
                                                          <td>You have no wrevs right now.</td>
                                                     </tr>-->
                                                     <div style="padding:10px;">
                                                         You have no wrevs right now.
                                                     </div>
                                                 <?php }?>
                                             </div>

                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>







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
                                                <div class="col-md-4 col-sm-3 col-xs-6">
                                                    	<a href="<?php echo base_url().'main/delete_friend/'.$all_friends[$i]['friend_user_id']?>" class="pull-right" onclick="return confirm_delete()">X</a>
                                                    	<a href="<?php echo base_url().'public_profile/user/'.$all_friends[$i]['friend_user_id']?>" style="color:#414042;">
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
                                    <p style="text-align:center;padding:0;font-size:25px;"><i class="fa fa-users"></i> Followers List</p>
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
                     
					 <!--<div class="row" style="text-align:center;">
                    Reviews COMMENTED OUT
                     	
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
										<!--Person's profile image of who posted here--><!-- COMMENTED OUT
										<img src="<?php echo $PATH_IMG?>/balt.jpg" class="shoutout-image"/>
										<p style="margin-top:10px;">Name</p>
										
										<p style="margin-top:20px;">"Review here"</p>
									</div>
								</div>
								</div>
                                    <a href="#" data-toggle="modal" data-target="" class="btn morereviews" style="font-size:20px;margin-top:10px;">More Reviews</a>
                            
                    <!--END OF reviews 
                    </div>-->
					 
                     </div> <!--end of column-->
                     
                     <div class="col-md-6" style="background:#d5dade;">
                     <div class="row">
                     <!--MESSAGING-->
                      <div class="panel panel-default" style="background:none; box-shadow:none; border:none;">
                                <div class="panel-body">
                                    <!--Check Inbox-->
                                    <div class="row inbox-btn" style="padding-top:10px;">                                     
                                        <a href="<?php echo base_url().'chat/messageView';?>" class="btn btn-lg btn-block blue-button bp-button" style="border-radius:10px;width:55%;"><span class="glyphicon glyphicon-user"></span> Check Inbox</a>
                                    </div>

                                
                                    
                                </div>
                            </div><!--END OF MESSAGING-->
                     </div>
                     
                     
                     
                     <div class="row">
                     <!--PHOTOS AND VIDEOS-->
                     	<div class="panel panel-default" style="background:none; box-shadow:none; border:none;padding:0 7%;">
                                <div class="panel-body" style="background:rgba(255,255,255,0.3);border-radius:10px;">
                                    <!--<ul class="nav nav-pills nav-justified" style="font-size:20px;">
                                        <li class="active"><a href="#photos" aria-controls="photos" role="tab" data-toggle="tab">Photos</a></li>
                                        <li><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab">Videos</a></li>
                                    </ul>-->
                                    <h3 style="text-align:center;"> <img src="<?php echo $PATH_IMG?>photo_icon.png"/> &nbsp;Photos</h3>
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
                                                            <a class="left carousel-control"  style="background:none;"  href="#carousel-example-generic" role="button" data-slide="prev">
                                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="right carousel-control" style="background:none;" href="#carousel-example-generic" role="button" data-slide="next">
                                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                            </a>
                                                    </div>
                                            </div>
                                            <!--<div role="tabpanel" class="tab-pane active" id="videos">

                                            </div>-->
                                    </div>
                                    <div class="row" style="padding-top:10px;text-align:center;">
                                       
                                        <!--<a href="#" class="btn btn-lg photos-button" style="font-size:18px;border-radius:10px;padding:5px 20px;">Browse all</button></a>
                                        <a href="#" class="btn btn-lg" style="background:#2CA8DC; color:white; font-size:18px;border-radius:10px;padding:5px 8px;"><span class="glyphicon glyphicon-camera"></span></button></a>-->
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
                                                                            if($profile['day'][$i] != false) {?>
                                                                                <p><em><?php echo ucfirst($profile['day'][$i]['day']);?></em> &nbsp;&nbsp <?php echo $profile['day'][$i]['start_time'].' to '.$profile['day'][$i]['end_time'];?></p>
                                                                    <?php }}?>
								</div>
							</div>
					 </div>
					 
					 <!--location-->
					 <div class="row" style="margin-top:15px;padding-left:10%;padding-right:10%;">
						<div style="background:rgba(255,255,255,0.3);padding:10px; border-radius:10px;">
						<h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>map_icon.png"/> &nbsp; Where is it?</h4>
							<div style="text-align:center;font-size:18px;padding:20px;line-height:60%;">
								<p><?php echo $profile['address'].', '.$profile['city']. ', '.$profile['state']. ' '.$profile['zipcode'];?></p>
							</div>
							
							<!-- GOOGLE MAPS -->
                                                        <div class="col-md-12">
                                                            <div id="pano" style="max-width:100%;min-width:100%; height: 200px;"></div>
                                                            <div id="map_canvas" style="max-width:100%;min-width:100%; height: 200px;"></div> 
                                                            <!--   Google Map Goes Here, different depending on where location is-->
                                                        </div><!-- END OF GOOGLE MAPS -->
							
							<div style="text-align:center;">
							<a class="btn viewmorewrevs" style="font-size:18px;color:white; border-radius:8px;">Get directions(COMING SOON)</a>
							</div>
						</div>	
					 </div>
					 
					     <!--Chatbox-->
                         <div class="row" style="padding-top:15px;">
                                        <h3 style="text-align:center;"> Chatbox</h3>
                                        
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
                        <?php echo form_open('showroom/chatbox_comment/'.$username); ?>
                       
                                    </div>
									<div style="padding-bottom:15px;">
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
            $("#viewWre").attr("class", "past");
            if($('#past_wrevs').hasClass('active'))
            {
                $('#all_wrevs_panel').show();

                <?php
                    $today = date("Y-m-d");
                    if(isset($attending_events)) {
                        global $Number_Wrevel;
                        $Number_Wrevel=0;
                        for($i = 0; $i < count($attending_events); $i++) {
                            $wrev[$i] = $attending_events[$i]['e_date'];
                            if($wrev[$i] < $today){
                               ++$Number_Wrevel;
                            }
                        }
                    }
                 ?>
                $("#NumberWrevelsSpan").text(<?php echo $Number_Wrevel; ?>);

                <?php

                if(isset($attending_events)) {

                    $countWre =0;
                    for($i = 0; $i < count($attending_events); $i++) {
                    $wrev[$i] = $attending_events[$i]['e_date'];
                        if($wrev[$i] < $today){
                            ++$countWre;
                            echo '$("#fullwrev'.$i.'").show();';
                            if($countWre==4){
                                for(++$i;$i<count($attending_events); $i++){
                                    echo '$("#fullwrev'.$i.'").hide();';
                                }
                                break;
                            }
                        }
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
                    $today = date("Y-m-d");
                    if(isset($attending_events)) {
                        global $Number_Wrevel;
                        $Number_Wrevel=0;
                        for($i = 0; $i < count($attending_events); $i++) {
                            $wrev[$i] = $attending_events[$i]['e_date'];
                            if($wrev[$i] < $today){
                               ++$Number_Wrevel;
                            }
                        }
                     }
                 ?>
                $("#NumberWrevelsSpan").text(<?php echo $Number_Wrevel; ?>);

                <?php

                if(isset($attending_events)) {
                    $countWre =0;
                    for($i = 0; $i < count($attending_events); $i++) {
                    $wrev[$i] = $attending_events[$i]['e_date'];

                       if($wrev[$i] < $today){
                            ++$countWre;
                            echo '$("#fullwrev'.$i.'").show();';
                            if($countWre==4){
                                for(++$i;$i<count($attending_events); $i++){
                                    echo '$("#fullwrev'.$i.'").hide();';
                                }
                                break;
                            }
                        }
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
        $("#viewWre").attr("class", "attending");
        if($('#attending_wrevs').hasClass('active')){
            $('#all_wrevs_panel').show();
            <?php
                $today = date("Y-m-d");
                if(isset($attending_events)) {

                global $Number_Wrevel;
                $Number_Wrevel=0;
                for($i = 0; $i < count($attending_events); $i++) {
                    $wrev[$i] = $attending_events[$i]['e_date'];
                    if($wrev[$i] >= $today){
                       ++$Number_Wrevel;
                    }
                }
                }
             ?>
            $("#NumberWrevelsSpan").text(<?php echo $Number_Wrevel; ?>);
            <?php
            if(isset($attending_events)) {
                $countWre =0;
                for($i = 0; $i < count($attending_events); $i++) {
                    $wrev[$i] = $attending_events[$i]['e_date'];
                    if($wrev[$i] >= $today){
                        ++$countWre;
                        echo '$("#fullwrev'.$i.'").show();';
                        if($countWre==4){
                            for(++$i;$i<count($attending_events); $i++){
                                echo '$("#fullwrev'.$i.'").hide();';
                            }
                            break;
                        }
                    }



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
                $today = date("Y-m-d");
                if(isset($attending_events)) {
                global $Number_Wrevel;
                $Number_Wrevel=0;
                for($i = 0; $i < count($attending_events); $i++) {
                    $wrev[$i] = $attending_events[$i]['e_date'];
                    if($wrev[$i] >= $today){
                       ++$Number_Wrevel;
                    }
                }

                 }
             ?>
            $("#NumberWrevelsSpan").text(<?php echo $Number_Wrevel; ?>);

            <?php

            if(isset($attending_events)) {

                $countWre =0;
                for($i = 0; $i < count($attending_events); $i++) {
                    $wrev[$i] = $attending_events[$i]['e_date'];
                    if($wrev[$i] >= $today){
                        ++$countWre;
                        echo '$("#fullwrev'.$i.'").show();';
                        if($countWre==4){
                            for(++$i;$i<count($attending_events); $i++){
                                echo '$("#fullwrev'.$i.'").hide();';
                            }
                            break;
                        }
                    }
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
        $('#viewWre').attr("class", "allwrev");
        if($('#mywrevs').hasClass('active')){
            $('#all_wrevs_panel').show();
            <?php
                //echo 'alert("'.$email.'")';
                if(isset($attending_events)) {

                global $Number_Wrevel;
                $Number_Wrevel = count($attending_events);
                }
             ?>
            $("#NumberWrevelsSpan").text(<?php echo $Number_Wrevel; ?>);

            <?php

            if(isset($attending_events)) {
                $countWre = 0;
                for($i = 0; $i < count($attending_events); $i++) {
                    if($attending_events[$i]['creator_email'] == $email){
                        ++$countWre;
                        echo '$("#fullwrev'.$i.'").show();';
                        if($countWre==4){
                            for(++$i;$i<count($attending_events); $i++){
                                if($attending_events[$i]['creator_email'] == $email){
                                    echo '$("#fullwrev'.$i.'").hide();';
                                }
                            }
                            break;
                        }
                    }

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

                global $Number_Wrevel;
                $Number_Wrevel = count($attending_events);
                }
             ?>
            $("#NumberWrevelsSpan").text(<?php echo $Number_Wrevel; ?>);

            <?php

            if(isset($attending_events)) {
                $countWre = 0;
                for($i = 0; $i < count($attending_events); $i++) {
                    if($attending_events[$i]['creator_email'] == $email){
                        ++$countWre;
                        echo '$("#fullwrev'.$i.'").show();';
                        if($countWre==4){
                            for(++$i;$i<count($attending_events); $i++){
                                if($attending_events[$i]['creator_email'] == $email){
                                    echo '$("#fullwrev'.$i.'").hide();';
                                }
                            }
                            break;
                        }
                    }
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
    function view_All_wrevels() {
        if ($('#viewWre').hasClass('allwrev')) {
            $('.events_all').show();
            $('.events_past').hide();
            $('.events_current').hide();

        } else if ($('#viewWre').hasClass('past')) {
            $('.events_past').show();
            $('.events_all').hide();
            $('.events_current').hide();

        } else if ($('#viewWre').hasClass('attending')) {
            $('.events_current').show();
            $('.events_past').hide();
            $('.events_all').hide();

        }
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

    var userLocation =  <?php echo json_encode($profile['address']. "," . $profile['state'] . "," .$profile['city']. "," . $profile['zipcode']); ?>;

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
        function add_more_days() {
            $('#days_end').remove();
            var content = '<div class="form-group row">'
                        +'<label class="col-sm-2">Day:</label>'
                        +'<div class="col-sm-2">'
                            +'<select name="business-day[]" class="form-control">'
                                +'<option value="" selected="selected"></option>'
                                +'<option value="Mon">Mon</option>'
                                +'<option value="Tues">Tues</option>'
                                +'<option value="Wed">Wed</option>'
                                +'<option value="Thurs">Thurs</option>'
                                +'<option value="Fri">Fri</option>'
                                +'<option value="Sat">Sat</option>'
                                +'<option value="Sun">Sun</option>'
                            +'</select>'	
                        +'</div>'
                        +'<div class="col-sm-2">'
                            +'<select name="business-start_time[]" class="form-control">'
                                +'<option value="" selected="selected"></option>'
                                +'<option value="01:00">1:00AM</option>'
                                +'<option value="02:00">2:00AM</option>'
                                +'<option value="03:00">3:00AM</option>'
                                +'<option value="04:00">4:00AM</option>'
                                +'<option value="05:00">5:00AM</option>'
                                +'<option value="06:00">6:00AM</option>'
                                +'<option value="07:00">7:00AM</option>'
                                +'<option value="08:00">8:00AM</option>'
                                +'<option value="09:00">9:00AM</option>'
                                +'<option value="10:00">10:00AM</option>'
                                +'<option value="11:00">11:00AM</option>'
                                +'<option value="12:00">12:00PM</option>' 
                                +'<option value="13:00">1:00PM</option>'
                                +'<option value="14:00">2:00PM</option>'
                                +'<option value="15:00">3:00PM</option>'
                                +'<option value="16:00">4:00PM</option>'
                                +'<option value="17:00">5:00PM</option>'
                                +'<option value="18:00">6:00PM</option>'
                                +'<option value="19:00">7:00PM</option>'
                                +'<option value="20:00">8:00PM</option>'
                                +'<option value="21:00">9:00PM</option>'
                                +'<option value="22:00">10:00PM</option>'
                                +'<option value="23:00">11:00PM</option>'
                                +'<option value="24:00">12:00AM</option>'
                            +'</select>'
                        +'</div>'
                        +'<label class="col-sm-1">TO</label>'
                        +'<div class="col-sm-2">'
                            +'<select name="business-end_time[]" class="form-control">'
                                +'<option value="" selected="selected"></option>'
                                +'<option value="01:00">1:00AM</option>'
                                +'<option value="02:00">2:00AM</option>'
                                +'<option value="03:00">3:00AM</option>'
                                +'<option value="04:00">4:00AM</option>'
                                +'<option value="05:00">5:00AM</option>'
                                +'<option value="06:00">6:00AM</option>'
                                +'<option value="07:00">7:00AM</option>'
                                +'<option value="08:00">8:00AM</option>'
                                +'<option value="09:00">9:00AM</option>'
                                +'<option value="10:00">10:00AM</option>'
                                +'<option value="11:00">11:00AM</option>'
                                +'<option value="12:00">12:00PM</option>' 
                                +'<option value="13:00">1:00PM</option>'
                                +'<option value="14:00">2:00PM</option>'
                                +'<option value="15:00">3:00PM</option>'
                                +'<option value="16:00">4:00PM</option>'
                                +'<option value="17:00">5:00PM</option>'
                                +'<option value="18:00">6:00PM</option>'
                                +'<option value="19:00">7:00PM</option>'
                                +'<option value="20:00">8:00PM</option>'
                                +'<option value="21:00">9:00PM</option>'
                                +'<option value="22:00">10:00PM</option>'
                                +'<option value="23:00">11:00PM</option>'
                                +'<option value="24:00">12:00AM</option>' 
                            +'</select>'
                        +'</div>'
                        +'<a class="btn btn-default" id="days_end"onclick="add_more_days()"><i class="fa fa-plus"></i></a>';
            $('#days_base').append(content);
        }
    </script>
    <script>
        function add_more_photos() {
            var content =   '<div class="image-upload">'
                                +'<label>Choose an Image:</label>'
                                +'<input name = "profile_file_array[]" type = "file" style="overflow:hidden;"/>'
                            +'</div>';
            $('#photos_upload').append(content);
        }
    </script>
    <script>
	$('#regular').popover();
	$('#business').popover();
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