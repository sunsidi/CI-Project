<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $other_fullname ?> | Wrevel - Discover Your World, Host & Experience Events</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script>
jQuery(document).ready(function () {
    //hide a div after 3 seconds
    setTimeout(function(){ jQuery("#sentMessage").hide(); }, 5000);
});
</script>

<style type="text/css">
.arrow-left {
position:absolute;
	width: 0; 
	height: 0; 
	border-top: 0px solid transparent;
	border-right: 35px solid #02a89e;
	
	border-bottom: 20px solid transparent;
        margin-left:108px;
        margin-top:10px;
}

</style>
</head>


<body>

<?php $this->load->view('header');?>

<!--content
==============================================-->
<div id='sentMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:20px;width: 500px; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>
<div class="container" style="padding-bottom:50px;">
    <div class="row" style="margin-top:120px;">

        <div class="col-md-9 col-md-offset-1">
            <div class="col-md-1">
                <img src="<?php echo base_url()."uploads/".$other_image_key?>" class="profile-image" style="position:absolute; z-index:2;  border-radius:150px;  border:2px solid #7874a2;"/>
               </div>
            <div class="col-md-7 profile-name" style="background:#7874a2; color:white;height:65px;">
            <h2 class="profile-fullname"><?php echo $other_fullname ?> &nbsp;<span id="status" data-content="This user is online." data-trigger="hover" data-placement="bottom" style="border-radius:50%;background:#7BCA3D;width:15px;height:15px;display:inline-block;vertical-align:middle;"></span></h2>
            </div>
            <div class="col-md-4" style="height:65px;background:#6ca5cc; color:white; border-top-right-radius:5px;" id="reputationInfo" data-content="The more you interact (attending,creating events) on Wrevel, the more points you receive" data-trigger="hover" data-placement="bottom">
            <h2 class="reputation" style="text-align:center;margin-left:-15px;cursor:default;float:left;width:100%;margin-top:12px;">Reputation <span class="badge" style="color:#6ca5cc; background:white;font-size:20px;vertical-align:middle; border-radius:50%; padding:10px 0px; width:40px;height:40px; text-align:center;margin-left:15px;"><?php echo (int)($other_reputation/20) ?></span><i class="fa fa-question-circle pull-right" style="font-size:15px;margin-top:10px;padding:0;"></i> </h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">       
                <div class="panel-body background">
                    <!--Quote
                    <div class="row" style="width:100%;">
                    			<div class="arrow-left" style=""></div>

                    	
                        <p class="col-md-8 col-md-offset-2 quote-box" style="background:#00A79D; color:white; font-size:18px; border-radius:5px;padding:15px 20px;width:300px;">
                        <?php if($other_tagline != "") 
                        	echo $other_tagline;
                              else
                              	echo "Welcome to my Showroom! Don’t hesitate to shoot me a message or a friend request!";?>
                        </p>
                     </div>-->
                     
                     <div class="col-md-6">
                     <div class="row" style="width:100%;">
			<div class="arrow-left" style="margin-left:70px; margin-top:30px;"></div>
                        <p class="col-md-8 col-md-offset-2 quote-box" style="background:#00A79D; color:white; font-size:18px; border-radius:5px;padding:15px 20px;margin-left:100px; margin-top:20px;">
                        <?php if($other_tagline != "") 
                        	echo $other_tagline;
                              else
                              	echo "Welcome to my Showroom! Don’t hesitate to shoot me a message or a friend request!";?>
                        </p>
                     </div>
                     	<div class="row">
                     	<!--PROFILE-->
                     	   <div class="panel panel-default" style="background:none; box-shadow:none; border:none;">
                                <div class="panel-body">

                                    <p class="info"><span class="glyphicon glyphicon-user" style="width:40px;text-align:center;"></span> Gender: <?php echo $other_gender ?></p>
                                    <p class="info info-hidden"><i class="fa fa-heart-o" style="width:40px;text-align:center;"></i> Status: <?php echo $other_relationship ?> </p>
                                    <p class="info info-hidden"><i class="fa fa-calendar" style="width:40px;text-align:center;"></i> Birthday: <?php echo $other_birthday ?> </p>
                                    <p class="info"><i class="fa fa-map-marker" style="width:40px;text-align:center;"></i> Location: <?php echo $other_location ?></p>
                                    <p class="info"><i class="fa fa-graduation-cap" style="width:40px;text-align:center;"></i> Education: <?php echo $other_school ?></p>
                                    <p class="info"><i class="fa fa-envelope" style="width:40px;text-align:center;"></i> Email: <?php echo $other_email ?></p>
                                    <p class="info"><i class="fa fa-phone" style="width:40px;text-align:center;"></i> Phone: <?php echo $other_phone ?></p>
                                    <p class="info"><span class="glyphicon glyphicon-link" style="width:40px;text-align:center;"></span> Links: <a target="_blank" href="http://<?php echo $other_user_reference ?>"> <?php echo $other_user_reference ?></a></p>


                                </div>
                     	</div><!--END OF PROFILE-->
                     </div>

                <?php if($is_friend){ ?>
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
                                                </br>
                                         <!--Shows all users attending -->
                                         <!--<button type="button" class="btn" style="background:#1C74BB; color:white; font-size:20px;border-radius:8px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">View More</button>-->
                                                <a id="viewWre"  onclick = "view_All_wrevels()"  href="#" data-toggle="modal" data-target="#showmoreWrevel"><button  type="button" class="btn btn-lg" style="background:#478EBF; color:white; font-size:20px; margin-left:auto; margin-right:auto; display:block; padding:5px; border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">View All</button></a>
                                            </div>
                                 </div>
                             </div>
                         </div><!--END OF WREVS-->
                     </div>
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
                                                            if($attending_events[$i]['creator_email'] == $other_email){
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
                <?php }?>
                     <!--<div class="row">
                     WREVS
                          <div class="panel panel-default" style="background:none; box-shadow:none; border:none;">
                                <div class="panel-body">
                                    <ul class="nav nav-pills wrev-tabs">
                                        <li class="active"><a href="#">Past Wrevs</a></li>
                                        <li><a href="#">Attending Wrevs</a></li>
                                        <li><a href="#">MyWrevs</a></li>
                                    </ul>
                                    
                                    <div class="row" style="text-align:center; padding:10px;">
                                    <a href="#" class="btn btn-lg viewmorewrevs" style="color:white; font-size:20px; padding:5px;border-radius:10px;">View more</a>
                                    
  
                                    </div>
                                </div>
                            </div>END OF WREVS
                     </div>-->

                     </div> <!--end of column-->
                     
                     <div class="col-md-6" >
                     <div class="row">
                     <!--MESSAGING-->
                      <div class="panel panel-default" style="background:none; box-shadow:none; border:none;">
                                <div class="panel-body">
                                    <!--Message User-->
                                    <div class="row">
                                        <a href="#" data-toggle="modal" data-target="#basicModal"  class="btn btn-lg btn-block blue-button" style="border-radius:10px;"><i class="fa fa-envelope"></i> Message <?php echo $other_fullname?></a>
                                    </div>
                                    <!--Add to Friends-->
                                    <?php if(!$is_friend){ 
                                    echo  "<div class='row' style='padding-top:10px;'>";
                                    echo  "<a href='".base_url()."main/friend_request/".$other_id."' class='btn btn-lg btn-block blue-button' style='border-radius:10px;'><span class='glyphicon glyphicon-user'></span> Add to Friends List</button></a>";
                                    echo  "</div>";
                                    }?>
                                                                         
                                        
                                    

                                    <!--Chatbox-->
                                    <div class="row" style="padding-top:15px;">
                                        <p style="text-align:center; font-size:25px;">Chatbox</p>
                                        
                                        <div id = "comment-block" style="overflow:auto; background:#8aa8c0; color:white; border-radius:10px; height: 300px; width:95%;margin-left: 15px; padding: 10px">
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
                                    
                                </div>
                            </div><!--END OF MESSAGING-->
                     </div>
                         <?php if($is_friend){ ?>
                         <div class="row">
                             <!--FRIENDS-->
                             <div class="panel panel-default" style="background:#E9EEF2;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);border-radius:10px;">
                                 <div class="panel-body">
                                     <h3 style="text-align:center;"><span class="badge" style="color:white; background:#478EBF;font-size:20px; border-radius:150px; padding:18px 10px;width:55px;height:55px;"><?php echo intval($number_of_friends)?></span> Friends</h3>
                                     <div class="row">
                                         <?php if(isset($all_friends)){
                                         for($i = 0; $i < $number_of_friends && $i < 6; $i++) {?>
                                         <div class="col-md-4 col-sm-3 col-xs-6">
<!--                                             <a href="--><?php //echo base_url().'main/delete_friend/'.$all_friends[$i]['friend_user_id']?><!--" class="pull-right" onclick="return confirm_delete()">X</a>-->
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
<!--                                                <a href="--><?php //echo base_url().'main/delete_friend/'.$all_friends[$i]['friend_user_id']?><!--" class="pull-right" onclick="return confirm_delete()">X</a>-->
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

                <?php }?>
                <!--<div class="row">
                <!--FRIENDS-->
                     	<!-- commented out until later.
                        <div class="panel panel-default" style="background:none; box-shadow:none; border:none;">
                                <div class="panel-body">
                                    <h3 style="text-align:center;"><span class="badge" style="color:white; background:#27AAE2;font-size:20px; border-radius:150px; padding:18px 10px;width:55px;height:55px;"><?php echo intval($number_of_friends)?></span> Friends</h3>                        
                                    <div class="row">
                                      <?php echo $friends_html?>
                                    </div>
                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px; margin-left:auto; margin-right:auto; display:block; padding:5px; border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">Show More</button></a>
                                </div>
                            </div><!--END OF FRIENDS
                     </div>-->
                     </div> <!--end of column-->
                     

                   
                </div>
            </div>
        </div>
    </div>
</div>

<!-- THIS IS THE MESSAGE MODAL-->
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
                <input id="to" name="to" type="text" placeholder="To" class="form-control" value="<?php echo $other_fullname?>"  readonly>
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

<!--end of content-->

<?php $this->load->view('footer');?>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


    
    <script>
        function change_value(){	
            $('#to').val('<?php echo $other_username;?>');
            console.log($("#to").val());
        }
        
    </script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
    <script>
	$('#reputationInfo').popover();
	$('#status').popover();
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
                $countWre = 0;
                 global $Number_Wrevel;
                $Number_Wrevel = count($attending_events);
                }
             ?>
            $("#NumberWrevelsSpan").text(<?php echo $Number_Wrevel; ?>);

            <?php

            if(isset($attending_events)) {
                for($i = 0; $i < count($attending_events); $i++) {
                    if($attending_events[$i]['creator_email'] == $other_email){
                        ++$countWre;
                        echo '$("#fullwrev'.$i.'").show();';
                        if($countWre==4){
                            for(++$i;$i<count($attending_events); $i++){
                                if($attending_events[$i]['creator_email'] == $other_email){
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
                    if($attending_events[$i]['creator_email'] == $other_email){
                        ++$countWre;
                        echo '$("#fullwrev'.$i.'").show();';
                        if($countWre==4){
                            for(++$i;$i<count($attending_events); $i++){
                                if($attending_events[$i]['creator_email'] == $other_email){
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
        $('#attending_wrevs').click();

    })
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