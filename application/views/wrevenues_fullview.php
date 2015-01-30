<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Wrevenues</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/business-lightbox.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<script src="https://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false"
            type="text/javascript"></script> 

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="https://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "98b7df42-3881-4ba4-adc3-bcb7a479d75e", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>

<body>
<?php $this->load->view('header');?>

<!--content
==============================================-->
<!-- EDIT WREVENUE MODAL-->
<div class="modal fade" id="editwrevenue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background:#C2D2DC;">
            <div class="modal-header" style="background-color: #628DA3;padding:10px;">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>	
                <p style="font-size: 26px; color: white;text-align: center;"><i class="fa fa-pencil-square-o" style="font-size:30px;"></i> Edit Wrevenue</p>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('wrevenues/edit_wrevenue/'.$wrevenues['id']);?>
                    <div class="form-group row">
                        <label class="col-sm-3">Name:</label>
                            <div class="col-sm-8">
                                <input type="text" name="place" class="form-control">
                            </div>	
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Description:</label>
                        <div class="col-sm-8">
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>	
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Street Address:</label>
                        <div class="col-sm-8">
                            <input name="address" class="form-control"></textarea>
                        </div>	
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">City:</label>
                        <div class="col-sm-8">
                            <input name="city" class="form-control"></textarea>
                        </div>	
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">State:</label>
                        <div class="col-sm-2">
                            <select id="state" name="state" class="form-control" style="padding:0;">
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
                            <input name="zipcode" class="form-control" type="text" value = "" pattern="\d{5,5}(-\d{4,4})?">
                        </div>	
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Phone:</label>
                        <div class="col-sm-8">
                            <input name="telephone" class="form-control">
                        </div>	
                    </div>
                    <div>
                        <label class="col-sm-20"><b><u>Schedule:</u></b></label>
                    </div>
                    <div id="days_base">
                        <div class="form-group row">
                            <label class="col-sm-3">Day:</label>
                            <div class="col-sm-2">
                                <select name="day[]" class="form-control" style="padding:0;">
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
                                <select name="start_time[]" class="form-control" style="padding:0;">
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
                                <select name="end_time[]" class="form-control" style="padding:0;">
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
                        <label class="col-sm-3">Email:</label>
                        <div class="col-sm-8">
                            <input name="email" class="form-control">
                        </div>	
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Website:</label>
                        <div class="col-sm-8">
                            <input name="website" class="form-control">
                        </div>	
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Facebook:</label>
                        <div class="col-sm-8">
                            <input class="form-control">
                        </div>	
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Twitter:</label>
                        <div class="col-sm-8">
                            <input class="form-control">
                        </div>	
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">price:</label>
                        <div class="col-sm-4">
                            <select name="price" class="form-control">
                                <option value="" selected="selected"></option>
                                <option value="$">$</option>
                                <option value="$$">$$</option>
                                <option value="$$$">$$$</option>
                                <option value="$$$$">$$$$</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Header Photo:</label>
                        <div class="col-sm-8" style="border:1px solid white;text-align:center;padding:8%;">
                            <div class="col-sm-7">
                                <div class="image-upload">
                                    <label>Choose a Header Image:</label>
                                    <input id="file-input" name="wrevenue_file" type="file" style="overflow:hidden;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Cover Photo:</label>
                        <div class="col-sm-8" style="border:1px solid white;text-align:center;padding:8%;">
                            <div class="col-sm-7">
                                <div class="image-upload">
                                    <label>Choose a Cover Image:</label>
                                    <input id="file-input" name="wrevenue_cover" type="file" style="overflow:hidden;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Add more Images:</label>
                        <div id="photos_upload" class="col-sm-6">
                            <div class="image-upload">
                                <label>Choose an Image:</label>
                                <input name="wrevenue_file_array[]" type="file" style="overflow:hidden;" />
                            </div>
                        </div>
                        <div>
                            <a class="btn btn-default" onclick="add_more_photos()"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="row" style="text-align:right;padding-right:20px;">
                            <button class="btn" type="submit" style="background:#478ABC;color:white;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!--END OF EDIT WREVENUE MODAL-->

<!-- WRITE A REVIEW MODAL-->
<div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background:#C2D2DC;">
            <div class="modal-header" style="background-color: #628DA3;padding:10px;">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>	
                <p style="font-size: 26px; color: white;text-align: center;"><i class="fa fa-pencil-square-o" style="font-size:30px;"></i> Write Your Review</p>
            </div>
            <div class="modal-body" style="color:#414042;">
                <form class="form-horizontal" role="form">
                    <div class="form-group row">
                        <label class="col-sm-3">Rating:</label>
                        <div class="col-sm-5">
                            <div class="rating">
                                <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p>Roll over stars, </br>then click to rate.</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Your Review </br><span style="font-weight:200;">140 character limit</span></label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="3" maxlength="140"></textarea>
                        </div>		
                    </div>
                </form>
                <div class="row" style="text-align:right;">
                        <button class="btn" type="submit" style="background:#478ABC;color:white;">Post</button>
                </div>
            </div>
        </div>
    </div>
</div><!--END OF WRITE A REVIEW MODAL-->

<!-- MORE REVIEWS MODAL-->
<div class="modal fade" id="allreviews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background:#C2D2DC;">
            <div class="modal-header" style="background-color: #628DA3;padding:10px;">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>	
                <p style="font-size: 26px; color: white;text-align: center;"> <img src="<?php echo $PATH_IMG?>shoutout_iconwhite.png"/> All Reviews</p>
            </div>
            <div class="modal-body" style="color:#414042;">

            </div>
        </div>
    </div>
</div><!--END OF MORE REVIEWS MODAL-->

<!-- START OF PAGE -->
<div class="container" style="padding-bottom:50px;">
    <div class="row" style="margin-top:50px;">
		
		<h1 class="title" style="text-align:center;font-family:GillSans;color:white;"><a href="<?php echo base_url().'wrevenues/wrevenues_main'?>" style="color:white;"><img class="w_logo" src="<?php echo $PATH_IMG?>w1.png"/>Wrevenues</a></h1>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel" style="border:none;border-radius:15px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">
                
                <!-- EVENT HEADER -->
                <?php if(!empty($wrevenues['cover'])) {?>
                <div class="panel-header" style="font-family:GillSans;text-align:center;color:white;background:linear-gradient(rgba(70, 107, 121, 0.45), rgba(70, 107, 121, 0.45)),url(<?php echo base_url().'uploads/wrevenues/'.$wrevenues['id'].'/cover/'.$wrevenues['cover']?>); background-size:100%;border-top-left-radius:10px;border-top-right-radius:10px;"> <?php }?>
                    <div class="row" style="padding:2%;">
                        
                        <!-- LIKES -->
                        <div class="col-sm-4">
                            <h2><?php echo $wrevenues['total_likes'];?> <i class="fa fa-heart-o"></i></h2>
                            <!-- what does this do? <a class="btn wrevenues-palette"><span class="glyphicon glyphicon-list-alt"></span></a>-->
                            <a class="btn wrevenues-share" href="#" data-toggle="modal" data-target="#shareModal"><i class="fa fa-share-square-o"></i></a>
                            <!--<p><i class="fa fa-clock-o" style="width:50px;"></i> Open Mon, Tues, Wed, Thurs, Fri, Sat, and Sun</p>-->
                        </div><!-- END OF LIKES -->
                        
                        <!--Popup for share this-->
                        <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                            <div class="modal-dialog">
                                 <div class="modal-content" style="background:#c2d2dc;">
                                      <div class="modal-header" style="background:#628da3; color:white;text-align:center;font-size:26px;font-family:GillSans Light;">
                                      <button type="button" class="close" data-dismiss="modal" style="color:white;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                      <i class="fa fa-share-square-o"></i> Share on Social Media
                                      </div>
                                      <div class="modal-body">

                                            <span class='st_sharethis_large' displayText='ShareThis'></span>
                                            <span class='st_facebook_large' displayText='Facebook'></span>
                                            <span class='st_twitter_large' displayText='Tweet'></span>
                                            <span class='st_linkedin_large' displayText='LinkedIn'></span>
                                            <span class='st_pinterest_large' displayText='Pinterest'></span>
                                            <span class='st_email_large' displayText='Email'></span>
                                       </div>
                                 </div>
                            </div>
                         </div>
                        
                        <!-- EVENT NAME -->
                        <div class="col-sm-4" style="padding-top:3%;">
                            <a class="btn wrevenues-name" style="cursor:default;"><?php echo $wrevenues['place'];?></a>
                            <h4 style="font-size:19px;" id="pricingInfo" data-html="true" data-content="$ - Free to $10 </br> $$ - $11 to 25 </br> $$$ - $26 to 49 </br> $$$$ - $50 to higher" data-trigger="hover" data-placement="bottom"><img src="<?php echo $PATH_IMG?>dollarbills_icon.png"/><?php echo $wrevenues['price'];?></h4>
                        </div><!-- END OF EVENT NAME -->
                        
                        <!-- EDIT AND RATINGS MODAL -->
                        <div class="col-sm-4">
                            <?php if($id_check == $wrevenues['creator_id']) {?>
                            <div>
                                <a href="#" data-toggle="modal" data-target="#editwrevenue" class="btn edit-wrevenue">Edit Wrevenue</a>
                            </div>
                            <?php }?>
                            <!-- COMMENTED OUT <div style="margin-top:7px;">
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <span style="font-size:20px;">(#)</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#review" class="btn review-btn">Write a Review</a>-->
			</div><!-- END OF EDIT AND RATINGS MODAL -->
                    </div>
                </div><!-- END OF EVENT HEADER -->
                
                <!-- START OF INNER PANEL -->
		<div class="panel-body background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
                    <div class="row" style="padding-bottom:20px;">
                        <div class="col-md-6">
                            
                            <!-- SHOUTOUT -->
                            <h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>shoutout_icon.png"/> &nbsp; Shoutout:</h4>
                            <div class="row" style="padding:3% 20% 0%; font-size:15px;text-align:center;">
                                <img src="<?php echo base_url().'uploads/'.$wrevenues['image_key']?>" class="shoutout-image"/>
                                <p><?php echo $wrevenues['name'];?></p>
                                <?php if(!empty($wrevenues['shoutout'])) {?>
                                <div style="background:#F0F3F6;border-radius:8px;padding:10px;"><?php echo $wrevenues['shoutout']?></div>
                                <?php }else {?>
                                <div style="background:#F0F3F6;border-radius:8px;padding:10px;"> Send us a message if you have any questions!</div>
                                <?php }?>
                            </div><!-- END OF SHOUTOUT -->
                            
                            <!-- DESCRIPTION -->		
                            <div style="margin-top:40px;">
                                <h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>details_icon.png"/> &nbsp; Wrevenue Details:</h4>
                                <div class="row" style="padding:3% 20% 0%; font-size:15px;">
                                    <?php echo $wrevenues['description'];?>
                                </div>
                            </div><!-- END OF DESCRIPTION -->
							
                            <!-- UPCOMING WREVS -->
                            <div style="margin-top:40px;">
                                <h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>w_icon2.png"/> &nbsp; Upcoming Wrevs</h4>
                                <?php if(isset($latest_event)) {?>
                                <div class="row" style="padding:3% 10% 0%;">
                                    <div class="col-md-12" style="position:relative;background-image:url(<?php echo base_url().'uploads/'.$latest_event['e_image'];?>); background-size:100%;padding:10px 0px 0px; color:white;">
                                        <div style="padding:0 10px 30px;">
                                            <p style="text-align:right;"><span class="wrevenue-attending"><?php echo $latest_event['e_attending'];?></span><span class="wrevenue-attending-text">Attending</span></p>
                                            <div style="margin-left:auto;margin-right:auto;text-align:center;">
                                                <a href="<?php echo base_url().'event/event_info/latest/'.$latest_event['event_id'];?>" class="btn wrevenue-wrev"><?php echo $latest_event['e_name'];?></a>
                                                <span class="pull-right" style="position:relative;"><i class="fa fa-clock-o"></i><?php echo $latest_event['e_start_time'];?></span>
                                            </div>
                                        </div>		
                                        <div style="background:rgba(0,0,0,0.5);postion:absolute;bottom:0;left:0;padding:5px 10px;">
                                            <i class="fa fa-calendar"></i> <?php echo $latest_event['e_date'];?> <span class="pull-right"><?php echo $latest_event['e_likes'];?> <i class="fa fa-heart-o"></i> | <a href="<?php echo base_url().'event/event_info/latest/'.$latest_event['event_id'];?>"><span class="glyphicon glyphicon-list-alt"></span></a> | <a href="<?php echo base_url().'event/event_info/latest/'.$latest_event['event_id'];?>"><i class="fa fa-share-square-o"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                                <?php } else { echo '<div style="padding-left:70px;">There are no upcoming wrevs for this wrevenue</div>';}?>
                            </div><!-- END OF UPCOMING WREVS -->
							
                            <!-- CONTACT INFO -->
                            <div style="margin-top:40px;">
                            <h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>primary_contact_icon.png"/> &nbsp; Contact</h4>
                                <div style="padding:3% 17%">
                                    <?php if(!empty($wrevenues['website'])) {?>
                                    <p><a href="<?php if(strpos($wrevenues['website'], 'http://') === false && strpos($wrevenues['website'], 'https://') === false) echo 'http://'.$wrevenues['website']; else echo $wrevenues['website'];?>" class="info"><span style="padding-right:30px;"><img src="<?php echo $PATH_IMG?>globe_icon2.png"/></span> <?php echo $wrevenues['website'];?> </a></p>
                                    <?php } if(!empty($wrevenues['facebook'])) {?>
                                    <p><i class="fa fa-facebook" style="width:47px;margin-left:6px;"></i><a href="<?php if(strpos($wrevenues['facebook'], 'http://') === false && strpos($wrevenues['facebook'], 'https://') === false) echo 'http://'.$wrevenues['facebook']; else echo $wrevenues['facebook'];?>" class="info"> <?php echo $wrevenues['facebook'];?> </a></p>
                                    <?php } if(!empty($wrevenues['twitter'])) {?>
                                    <p><i class="fa fa-twitter" style="width:47px;margin-left:6px;"></i><a href="<?php if(strpos($wrevenues['twitter'], 'http://') === false && strpos($wrevenues['twitter'], 'https://') === false) echo 'http://'.$wrevenues['twitter']; else echo $wrevenues['twitter'];?>" class="info"> <?php echo $wrevenues['facebook'];?> </a></p>
                                    <?php } if(!empty($wrevenues['telephone'])) {?>
                                    <p class="info"><span style="padding-right:33px;"><img src="<?php echo $PATH_IMG?>phone_icon2.png"/></span> <?php echo $wrevenues['telephone'];?></p>
                                    <?php } if(!empty($wrevenues['email'])) {?>
                                    <p class="info"><span style="padding-right:28px;"><img src="<?php echo $PATH_IMG?>email_icon2.png"/></span> <?php echo $wrevenues['email'];?></p>
                                    <?php }?>
                                </div>
                            </div><!-- END OF CONTACT INFO -->
                            
			</div>
                        <div class="col-md-6">
                            
                            <!-- ADDRESS -->
                            <h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>map_icon.png"/> &nbsp; Where is it?</h4>
                            <div style="text-align:center;font-size:18px;padding:20px;line-height:60%;">
                                <p><?php echo $wrevenues['address'].', '.$wrevenues['city']. ', '.$wrevenues['state']. ' '.$wrevenues['zipcode'];?></p>
                            </div><!-- END OF ADDRESS -->
                            
                            <!-- GOOGLE MAPS -->
                            <div class="col-md-13">
                                <div id="pano" style="max-width:100%;min-width:100%; height: 200px;"></div>
                                <div id="map_canvas" style="max-width:100%;min-width:100%; height: 200px;"></div> 
                                <!--   Google Map Goes Here, different depending on where location is-->
                            </div><!-- END OF GOOGLE MAPS -->
                            
                            <!-- HOURS -->
                            <div style="margin-top:40px;">
                                <h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>clock_icon.png"/> &nbsp; Hours</h4>
                                <?php $hours_check = 0;?>
                                <div style="padding:0% 17%;font-size:18px;line-height:70%;">
                                    <?php for($i = 0; $i < 7; $i++) {
                                            if($wrevenues['day'][$i] != false) { $hours_check = 1;?>
                                                <p><?php echo strtoupper($wrevenues['day'][$i]['day']);?> &nbsp;&nbsp <?php echo $wrevenues['day'][$i]['start_time'].' to '.$wrevenues['day'][$i]['end_time'];?></p>
                                    <?php }}?>
                                </div>
                                <?php if(!$hours_check) { echo '<div style="padding-left:70px;">There are no hours for this wrevenue</div>'; }?>
                            </div><!-- END OF HOURS -->
                            
                            <!-- PHOTOS -->
                            <div style="margin-top:40px;">
                                <h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>photo_icon.png"/> &nbsp; Photos:</h4>
                                <?php if(!empty($wrevenues['photos'])) {?>
                                <div style="padding:0% 5%;font-size:18px;line-height:70%;">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
										<div class="carousel-inner" role="listbox">
											<?php 
											$first = true;
											foreach($wrevenues['photos'] as $picture){
												if($first) {?>
												<div class="item active">
													<a href="<?php echo base_url().'/uploads/wrevenues/'.$wrevenues['id'].'/photos/'.$picture?>" rel="lightbox">
													<img class="img-responsive" style="margin-left:auto;margin-right:auto;height:250px;max-height:250px;" src="<?php echo base_url().'/uploads/wrevenues/'.$wrevenues['id'].'/photos/'.$picture?>" alt="...">
													</a>
												</div>
												<?php $first = false;
												} else {?>
												<div class="item">
													<a href="<?php echo base_url().'/uploads/wrevenues/'.$wrevenues['id'].'/photos/'.$picture?>" rel="lightbox"> <img class="img-responsive" style="margin-left:auto;margin-right:auto;height:250px;max-height:250px;" src="<?php echo base_url().'/uploads/wrevenues/'.$wrevenues['id'].'/photos/'.$picture?>" alt="..."></a>
												</div>

											<?php }}} else { echo '<div style="padding-left:70px;">There are no photos for this wrevenue</div>'; }?> 
									
										</div>
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
                            </div><!-- END OF PHOTOS -->
                            
                            <!-- REVIEWS BLOCK --> <!-- COMMENTED OUT UNTIL REVIEWS ARE DONE 
                            <div style="margin-top:40px;text-align:center;">
                                <h4><img src="<?php echo $PATH_IMG?>reviews_icon.png"/> &nbsp; Reviews</h4>
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
                                            <!--Person's profile image of who posted here 
                                            <img src="<?php echo $PATH_IMG?>/balt.jpg" class="shoutout-image"/>
                                            <p style="margin-top:10px;">Name</p>
                                            <p style="margin-top:20px;">"Review here"</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#allreviews" class="btn morereviews" style="margin-top:10px;">More Reviews</a>
                            </div><!-- END OF REVIEWS BLOCK --> 
                            
			</div>
                    </div>
                </div> <!-- END OF INNER PANEL -->
                
            </div>
        </div>
    </div>
</div>
<!--end of content-->

<?php $this->load->view('footer');?>
  
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->	
	<script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
	<script src="<? echo $PATH_BOOTSTRAP?>js/lightbox.js"></script>
    <script type="text/javascript"> 

    var userLocation =  <?php echo json_encode($wrevenues['address']. "," . $wrevenues['state'] . "," .$wrevenues['city']. "," . $wrevenues['zipcode']); ?>;

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
	$('#pricingInfo').popover();
    </script>
    <script>
        function add_more_days() {
            $('#days_end').remove();
            var content = '<div class="form-group row">'
                        +'<label class="col-sm-3">Day:</label>'
                        +'<div class="col-sm-2">'
                            +'<select name="day[]" class="form-control">'
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
                            +'<select name="start_time[]" class="form-control">'
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
                            +'<select name="end_time[]" class="form-control">'
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
                                +'<input name = "wrevenue_file_array[]" type = "file" style="overflow:hidden;"/>'
                            +'</div>';
            $('#photos_upload').append(content);
        }
    </script>
</body>
</html> 