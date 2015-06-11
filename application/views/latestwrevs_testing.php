<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Users</title>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $PATH_BOOTSTRAP?>css/usersmosic.css" type="text/css" media="screen">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
.carousel-indicators {
  bottom:-50px !important;
}
</style>
</head>

<body>
<?php $this->load->view('header_testing');?>

<!--content
==============================================-->
 <div class="container" style="margin-top: 20px;">
	
	<div class="col-md-12 col-sm-12 col-xs-12" style="position: relative;width: 100%; height: 255px;
	background:url(<?php echo $PATH_IMG?>dj_for_showcase.png);">
	<div class="col-md-offset-7 col-md-3">
		<p style="font-size: 23px; letter-spacing:1px; color: white; margin-top: 30px;"><b>Meet the Top Wrevelers</b></p>
		<p style="font-size: 17px; color: white; line-height: 21px; margin-top: -10px;">Looking for the best of the best? Scroll down to find the people and businesses that matter.</p>
		<button style="margin-top: 5px;background:#f8f9fb; color: black; border-radius: 3px; font-size:15px; padding: 9px 30px;">
		Click here to start a Wrevolution</button>
	</div>
	</div>
 
 <?php 
//                    $attr = array('class' => "form-inline", 'style' => "margin-left: 20%");
                    echo form_open(base_url().'users/user_search');
                ?>
	<center><input id="" type="text" name="user_search" style="border-radius: 10px;font-size:16px; width: 70%; height: 50px; padding-left: 20px; margin-top: 20px;" placeholder="Search for users, businesses, and organizations" value=""></center>
<?php echo form_close() ?>
	
		<?php 
			if(isset($users_search)){
				$size=$users_search['size'];
			?>
        <div class="row row-centered" style="margin-top:30px;">
					<div class="col-md-11 col-centered col-sm-11 col-xs-11" style="color:white;text-align:center;padding:10px 10%;">
	  
			<p style="text-align:center;font-weight:bold;font-size:26px;"><?php echo $users_search['size']?><span style="color:white;"> results found!</span></p>
			
    	
    	<div class="row" style="text-align:left;">
      <?php
      $i = 0;
      $group_page = 1;
      $size_left = $size;
      if (isset($size)){
      	while($size_left > 0){
      	    for($j=0; $j < 12 && $size_left != 0; $j++) {   //Yuan change this number from 21 to 12
      	    	$size_left--;
      	    	if($group_page == 1) {
      ?>
	      <div class="<?php echo 'event_group'.$group_page?> col-md-3 col-sm-6" style="padding:0 9px;">
	      <?php } else {?>
	      <div class="<?php echo 'event_group'.$group_page?> col-md-3 col-sm-6" style="padding:0 9px;" hidden>
	      <?php }?>
                <div class="mosaic-block bar2" onclick="location.href='<?php echo base_url().'public_profile/user/'.$users_search[$i]["user_id"]?>';" style="margin-top:18px;cursor:pointer; border-radius:10px; -moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);" > <!-- <- box to link to full view -->
               

        <a target="_blank" class="mosaic-overlay latest-box" style="background-color:rgba(178,154,158,1);display: inline; left: 0px;">
      <div class="col-md-12" style="height: 50px; background-color: rgba(159,129,134,1); position:relative;">
                            <p style="text-align:center; color:white; font-size:20px; margin-top:8px;">
                                    <strong style="text-shadow: 1px 1px 0.5px #000000;"><?php 
                                    $event_name_temp = substr($users_search[$i]['fullname'], 0, 14);
                                    echo $event_name_temp?></strong> </p>
      </div>
                        <!--Location of event-->
                        <p class="location location-romance"><i class="fa fa-map-marker"></i> <?php echo $users_search[$i]['location'] ?> </p>
                        
                        <!--Description -->
                        <p class="description" style="height: 40px;text-overflow:ellipsis;">
                        <?php 
    	                        if($users_search[$i]["tagline"]){
    	                        	$event_description_temp=$users_search[$i]["tagline"];
    	                        }else{
    	                        	$event_description_temp="A good Meetup Group description explains what your Meetup Group is about,who should join, .......";}
    	                        	$event_description_temp=substr($event_description_temp, 0, 140); echo $event_description_temp;
    	                        	?>......                     
                        </p>
                        
                        <!--Click to lead to individual listing page-->
                        <p class="more">Show more >></p>
        </a>
      
      <div class="mosaic-backdrop" style="display: block;">
                                <div style="position: absolute; border-radius:7px; background-color: rgba(239,186,183,0.3); width: 100%; height: 280px; z-index: 0;"></div>
                        <!--Event Image-->
        <img src="<?php
if($users_search[$i]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $users_search[$i]['image_key'];}else if(substr($users_search[$i]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $users_search[$i]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $users_search[$i]['image_key'];
}?>"    style="max-width:100%; min-width:100%; max-height:100%; min-height:100%;">

                        </div>
    </div>
              </div>
            
            <?php $i++;}
            $group_page++;}}?>  
</div></div>
</div>
<div class="text-center">
    <ul class="pagination">
    	<li><a href="javascript:void(0)" onclick="show_page(1)" class="pagenumber"><<</a></li>
    	<li><a href="javascript:void(0)"onclick="show_page(-1)" class="pagenumber"><</a></li>
    	<?php for($i = 0; $i < $size / 24; $i++) {?>
        	<li><a id="page_number<?php echo $i+1?>" class="page_number_class pagenumber" href="javascript:void(0)" onclick="show_page(<?php echo $i+1?>)"><?php echo $i+1?></a></li> 
        <?php }?>
        <li><a href="javascript:void(0)" onclick="show_page(-2)" class="pagenumber">></a></li> 
        <li><a href="javascript:void(0)" onclick="show_page(<?php echo (int)($size/21)+1?>)" class="pagenumber"> >> </a></li> 
    </ul>
</div>
		</div>	
			
<?php 
}?>
		
		
		
<!--most active-->


	<div style="background: #C49496; margin-top: 20px; height: 400px;">
	<p style="font-size: 25px; padding-top: 20px;margin-left: 15%; color: white;"><b>Most Active Users</b></p>
	<center><hr style="width: 70%; margin-top: -5px;border:0;height: 1px;border-bottom:1px solid white;"/></center>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">


 
   <div class="item active">
        <div class="container" style="margin-top: -1px; margin-left: 3%;">
    
    
              <div class="col-md-offset-1 col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none; opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $active_users[0]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($active_users[0]['tagline']){
                        	echo $active_users[0]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo$active_users[0]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
                        <?php 
			if($active_users[0]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			
			<center><img class="fb_pic" src="<?php
if($active_users[0]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $active_users[0]['image_key'];}else if(substr($active_users[0]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from fb
					echo $active_users[0]['image_key'];}else{ // have fb connect, use photo from wrevel account
echo base_url()?>uploads/<?php echo $active_users[0]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $active_users[0]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $active_users[0]["location"]?></center>
			</div>
		</div>
	     </div>
	      
	      
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 30px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $active_users[1]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($active_users[1]['tagline']){
                        	echo $active_users[1]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo$active_users[1]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
                        <?php 
			if($active_users[1]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($active_users[1]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $active_users[1]['image_key'];}else if(substr($active_users[1]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $active_users[1]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $active_users[1]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $active_users[1]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $active_users[1]["location"]?></center>
			</div>
		</div>
	     </div>
	    
	    
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 30px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $active_users[2]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($active_users[2]['tagline']){
                        	echo $active_users[2]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo$active_users[2]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($active_users[2]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($active_users[2]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $active_users[2]['image_key'];}else if(substr($active_users[2]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $active_users[2]['image_key'];}else{ // have fb connect, use photo from fb
echo base_url()?>uploads/<?php echo $active_users[2]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $active_users[2]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $active_users[2]["location"]?></center>
			</div>
		</div>
	     </div>
	     
	     
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left:30px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $active_users[3]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($active_users[3]['tagline']){
                        	echo $active_users[3]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo$active_users[3]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($active_users[3]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($active_users[3]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $active_users[3]['image_key'];}else if(substr($active_users[3]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $active_users[3]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $active_users[3]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $active_users[3]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $active_users[3]["location"]?></center>
			</div>
		</div>
	     </div>
	</div>
	        
    </div>
    
    
    

    <div class="item">
        <div class="container" style="margin-top: -1px; margin-left: 3%;">
    
    
              <div class="col-md-offset-1 col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $active_users[4]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($active_users[4]['tagline']){
                        	echo $active_users[4]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo$active_users[4]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($active_users[4]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($active_users[4]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $active_users[4]['image_key'];}else if(substr($active_users[4]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $active_users[4]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $active_users[4]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $active_users[4]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $active_users[4]["location"]?></center>
			</div>
		</div>
	     </div>
	      
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $active_users[5]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($active_users[5]['tagline']){
                        	echo $active_users[5]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo$active_users[5]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($active_users[5]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($active_users[5]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $active_users[5]['image_key'];}else if(substr($active_users[5]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $active_users[5]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $active_users[5]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $active_users[5]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $active_users[5]["location"]?></center>
			</div>
		</div>
	     </div>
	    
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $active_users[6]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($active_users[6]['tagline']){
                        	echo $active_users[6]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo$active_users[6]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($active_users[6]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($active_users[6]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $active_users[6]['image_key'];}else if(substr($active_users[6]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $active_users[6]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $active_users[6]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $active_users[6]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $active_users[6]["location"]?></center>
			</div>
		</div>
	     </div>
	     
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $active_users[7]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($active_users[7]['tagline']){
                        	echo $active_users[7]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo$active_users[7]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($active_users[7]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($active_users[7]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $active_users[7]['image_key'];}else if(substr($active_users[7]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $active_users[7]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $active_users[7]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $active_users[7]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $active_users[7]["location"]?></center>
			</div>
		</div>
	     </div>
	</div>
    
    </div>

    
    
    <div class="item">
        <div class="container" style="margin-top: -1px; margin-left: 3%;">
    
    
              <div class="col-md-offset-1 col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $active_users[8]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($active_users[0]['tagline']){
                        	echo $active_users[8]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo$active_users[8]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($active_users[8]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($active_users[8]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $active_users[8]['image_key'];}else if(substr($active_users[8]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $active_users[8]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $active_users[8]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $active_users[8]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $active_users[8]["location"]?></center>
			</div>
		</div>
	     </div>
	      
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $active_users[9]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($active_users[9]['tagline']){
                        	echo $active_users[9]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo$active_users[9]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($active_users[9]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($active_users[9]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $active_users[9]['image_key'];}else if(substr($active_users[9]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $active_users[9]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $active_users[9]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $active_users[9]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $active_users[9]["location"]?></center>
			</div>
		</div>
	     </div>
	    
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $active_users[10]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($active_users[10]['tagline']){
                        	echo $active_users[10]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo$active_users[10]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($active_users[10]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($active_users[10]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $active_users[10]['image_key'];}else if(substr($active_users[10]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $active_users[10]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $active_users[10]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $active_users[10]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $active_users[10]["location"]?></center>
			</div>
		</div>
	     </div>
	     
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $active_users[11]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($active_users[11]['tagline']){
                        	echo $active_users[11]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo$active_users[11]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($active_users[11]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($active_users[11]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $active_users[11]['image_key'];}else if(substr($active_users[11]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $active_users[11]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $active_users[11]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $active_users[11]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $active_users[11]["location"]?></center>
			</div>
		</div>
	     </div>
	</div>

    </div>
    
    
    
    
    
  </div>
</div>
	</div>
	
<!--top earners-->
	
	
		<div style="background: #AFC5D0; height: 400px;">
	<p style="font-size: 25px; padding-top: 20px;margin-left: 15%; color: white;"><b>Our Top Earners</b></p>
	<center><hr style="width: 70%; margin-top: -5px;border:0;height: 1px;border-bottom:1px solid white;"/></center>
	<div id="myCarousel0" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel0" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel0" data-slide-to="1"></li>
    <li data-target="#myCarousel0" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">


 
   <div class="item active">
        <div class="container" style="margin-top: -1px; margin-left: 3%;">
    
    
              <div class="col-md-offset-1 col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none; opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $eaner_users[0]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($eaner_users[0]['tagline']){
                        	echo $eaner_users[0]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $eaner_users[0]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
                        <?php 
			if($eaner_users[0]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($eaner_users[0]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $eaner_users[0]['image_key'];}else if(substr($eaner_users[0]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $eaner_users[0]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $eaner_users[0]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $eaner_users[0]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $eaner_users[0]["location"]?></center>
			</div>
		</div>
	     </div>
	      
	      
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 30px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $eaner_users[1]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($eaner_users[1]['tagline']){
                        	echo $eaner_users[1]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $eaner_users[1]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
                        <?php 
			if($eaner_users[1]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($eaner_users[1]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $eaner_users[1]['image_key'];}else if(substr($eaner_users[1]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $eaner_users[1]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $eaner_users[1]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $eaner_users[1]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $eaner_users[1]["location"]?></center>
			</div>
		</div>
	     </div>
	    
	    
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 30px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $eaner_users[2]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($eaner_users[2]['tagline']){
                        	echo $eaner_users[2]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $eaner_users[2]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($eaner_users[2]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($eaner_users[2]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $eaner_users[2]['image_key'];}else if(substr($eaner_users[2]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $eaner_users[2]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $eaner_users[2]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $eaner_users[2]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $eaner_users[2]["location"]?></center>
			</div>
		</div>
	     </div>
	     
	     
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left:30px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $eaner_users[3]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($eaner_users[3]['tagline']){
                        	echo $eaner_users[3]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $eaner_users[3]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($eaner_users[3]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($eaner_users[3]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $eaner_users[3]['image_key'];}else if(substr($eaner_users[3]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $eaner_users[3]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $eaner_users[3]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $eaner_users[3]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $eaner_users[3]["location"]?></center>
			</div>
		</div>
	     </div>
	</div>
	        
    </div>
    
    
    <div class="item">
        <div class="container" style="margin-top: -1px; margin-left: 3%;">
    
    
              <div class="col-md-offset-1 col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $eaner_users[4]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($eaner_users[4]['tagline']){
                        	echo $eaner_users[4]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $eaner_users[4]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($eaner_users[4]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($eaner_users[4]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $eaner_users[4]['image_key'];}else if(substr($eaner_users[4]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $eaner_users[4]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $eaner_users[4]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $eaner_users[4]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $eaner_users[4]["location"]?></center>
			</div>
		</div>
	     </div>
	      
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $eaner_users[5]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($eaner_users[5]['tagline']){
                        	echo $eaner_users[5]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $eaner_users[5]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($eaner_users[5]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($eaner_users[5]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $eaner_users[5]['image_key'];}else if(substr($eaner_users[5]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $eaner_users[5]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $eaner_users[5]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $eaner_users[5]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $eaner_users[5]["location"]?></center>
			</div>
		</div>
	     </div>
	    
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $eaner_users[6]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($eaner_users[6]['tagline']){
                        	echo $eaner_users[6]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $eaner_users[6]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($eaner_users[6]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($eaner_users[6]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $eaner_users[6]['image_key'];}else if(substr($eaner_users[6]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $eaner_users[6]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $eaner_users[6]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $eaner_users[6]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $eaner_users[6]["location"]?></center>
			</div>
		</div>
	     </div>
	     
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $eaner_users[7]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($eaner_users[7]['tagline']){
                        	echo $eaner_users[7]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $eaner_users[7]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($eaner_users[7]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($eaner_users[7]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $eaner_users[7]['image_key'];}else if(substr($eaner_users[7]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $eaner_users[7]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $eaner_users[7]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $eaner_users[7]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $eaner_users[7]["location"]?></center>
			</div>
		</div>
	     </div>
	</div>
    
    </div>

    
    
    <div class="item">
        <div class="container" style="margin-top: -1px; margin-left: 3%;">
    
    
              <div class="col-md-offset-1 col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $eaner_users[8]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($eaner_users[0]['tagline']){
                        	echo $eaner_users[8]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $eaner_users[8]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($eaner_users[8]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($eaner_users[8]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $eaner_users[8]['image_key'];}else if(substr($eaner_users[8]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $eaner_users[8]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $eaner_users[8]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $eaner_users[8]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $eaner_users[8]["location"]?></center>
			</div>
		</div>
	     </div>
	      
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $eaner_users[9]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($eaner_users[9]['tagline']){
                        	echo $eaner_users[9]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $eaner_users[9]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($eaner_users[9]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($eaner_users[9]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $eaner_users[9]['image_key'];}else if(substr($eaner_users[9]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $eaner_users[9]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $eaner_users[9]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $eaner_users[9]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $eaner_users[9]["location"]?></center>
			</div>
		</div>
	     </div>
	    
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $eaner_users[10]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($eaner_users[10]['tagline']){
                        	echo $eaner_users[10]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $eaner_users[10]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($eaner_users[10]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($eaner_users[10]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $eaner_users[10]['image_key'];}else if(substr($eaner_users[10]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $eaner_users[10]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $eaner_users[10]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $eaner_users[10]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $eaner_users[10]["location"]?></center>
			</div>
		</div>
	     </div>
	     
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $eaner_users[11]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($eaner_users[11]['tagline']){
                        	echo $eaner_users[11]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $eaner_users[11]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($eaner_users[11]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($eaner_users[11]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $eaner_users[11]['image_key'];}else if(substr($eaner_users[11]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $eaner_users[11]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $eaner_users[11]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $eaner_users[11]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $eaner_users[11]["location"]?></center>
			</div>
		</div>
	     </div>
	</div>

    </div>
    
  </div>
</div>
	</div>



		
	<!--top buyer-->	
		
		
		
			<div style="background: #BDD2D3; height: 400px;">
	<p style="font-size: 25px; padding-top: 20px;margin-left: 15%; color: white;"><b>Our Top Buyers</b></p>
	<center><hr style="width: 70%; margin-top: -5px;border:0;height: 1px;border-bottom:1px solid white;"/></center>
	<div id="myCarousel1" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel1" data-slide-to="1"></li>
    <li data-target="#myCarousel1" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">


 
   <div class="item active">
        <div class="container" style="margin-top: -1px; margin-left: 3%;">
    
    
              <div class="col-md-offset-1 col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none; opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $buyer_users[0]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($buyer_users[0]['tagline']){
                        	echo $buyer_users[0]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $buyer_users[0]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
                        <?php 
			if($buyer_users[0]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($buyer_users[0]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $buyer_users[0]['image_key'];}else if(substr($buyer_users[0]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $buyer_users[0]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $buyer_users[0]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $buyer_users[0]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $buyer_users[0]["location"]?></center>
			</div>
		</div>
	     </div>
	      
	      
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 30px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $buyer_users[1]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($buyer_users[1]['tagline']){
                        	echo $buyer_users[1]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $buyer_users[1]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
                        <?php 
			if($buyer_users[1]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($buyer_users[1]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $buyer_users[1]['image_key'];}else if(substr($buyer_users[1]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $buyer_users[1]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $buyer_users[1]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $buyer_users[1]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $buyer_users[1]["location"]?></center>
			</div>
		</div>
	     </div>
	    
	    
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 30px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $buyer_users[2]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($buyer_users[2]['tagline']){
                        	echo $buyer_users[2]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $buyer_users[2]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($buyer_users[2]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($buyer_users[2]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $buyer_users[2]['image_key'];}else if(substr($buyer_users[2]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $buyer_users[2]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $buyer_users[2]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $buyer_users[2]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $buyer_users[2]["location"]?></center>
			</div>
		</div>
	     </div>
	     
	     
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left:30px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $buyer_users[3]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($buyer_users[3]['tagline']){
                        	echo $buyer_users[3]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $buyer_users[3]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($buyer_users[3]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($buyer_users[3]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $buyer_users[3]['image_key'];}else if(substr($buyer_users[3]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $buyer_users[3]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $buyer_users[3]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $buyer_users[3]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $buyer_users[3]["location"]?></center>
			</div>
		</div>
	     </div>
	</div>
	        
    </div>
    
    
    <div class="item">
        <div class="container" style="margin-top: -1px; margin-left: 3%;">
    
    
              <div class="col-md-offset-1 col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $buyer_users[4]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($buyer_users[4]['tagline']){
                        	echo $buyer_users[4]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $buyer_users[4]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($buyer_users[4]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($buyer_users[4]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $buyer_users[4]['image_key'];}else if(substr($buyer_users[4]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $buyer_users[4]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $buyer_users[4]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $buyer_users[4]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $buyer_users[4]["location"]?></center>
			</div>
		</div>
	     </div>
	      
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $buyer_users[5]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($buyer_users[5]['tagline']){
                        	echo $buyer_users[5]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $buyer_users[5]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($buyer_users[5]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($buyer_users[5]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $buyer_users[5]['image_key'];}else if(substr($buyer_users[5]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $buyer_users[5]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $buyer_users[5]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $buyer_users[5]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $buyer_users[5]["location"]?></center>
			</div>
		</div>
	     </div>
	    
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $buyer_users[6]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($buyer_users[6]['tagline']){
                        	echo $buyer_users[6]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $buyer_users[6]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($buyer_users[6]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($buyer_users[6]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $buyer_users[6]['image_key'];}else if(substr($buyer_users[6]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $buyer_users[6]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $buyer_users[6]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $buyer_users[6]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $buyer_users[6]["location"]?></center>
			</div>
		</div>
	     </div>
	     
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $buyer_users[7]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($buyer_users[7]['tagline']){
                        	echo $buyer_users[7]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $buyer_users[7]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($buyer_users[7]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($buyer_users[7]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $buyer_users[7]['image_key'];}else if(substr($buyer_users[7]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $buyer_users[7]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $buyer_users[7]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $buyer_users[7]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $buyer_users[7]["location"]?></center>
			</div>
		</div>
	     </div>
	</div>
    
    </div>

    
    
    <div class="item">
        <div class="container" style="margin-top: -1px; margin-left: 3%;">
    
    
              <div class="col-md-offset-1 col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $buyer_users[8]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($buyer_users[0]['tagline']){
                        	echo $buyer_users[8]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $buyer_users[8]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($buyer_users[8]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($buyer_users[8]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $buyer_users[8]['image_key'];}else if(substr($buyer_users[8]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $buyer_users[8]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $buyer_users[8]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $buyer_users[8]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $buyer_users[8]["location"]?></center>
			</div>
		</div>
	     </div>
	      
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $buyer_users[9]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($buyer_users[9]['tagline']){
                        	echo $buyer_users[9]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $buyer_users[9]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($buyer_users[9]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($buyer_users[9]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $buyer_users[9]['image_key'];}else if(substr($buyer_users[9]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $buyer_users[9]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $buyer_users[9]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $buyer_users[9]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $buyer_users[9]["location"]?></center>
			</div>
		</div>
	     </div>
	    
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $buyer_users[10]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($buyer_users[10]['tagline']){
                        	echo $buyer_users[10]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $buyer_users[10]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($buyer_users[10]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($buyer_users[10]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $buyer_users[10]['image_key'];}else if(substr($buyer_users[10]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $buyer_users[10]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $buyer_users[10]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $buyer_users[10]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $buyer_users[10]["location"]?></center>
			</div>
		</div>
	     </div>
	     
	    <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 230px; height: 255px;margin-left: 25px;">
                <div class="mosaic-block bar2" style="width: 230px; height: 255px; margin-left:-15px;">
		    <a target="_blank" class="mosaic-overlay" style="display: inline; left: 0px;text-decoration: none;opacity: 1;padding: 0px 10px;">
                        <!--Description -->
			<p style="text-align: center; margin-top: 50px; color: white; font-size:23px;"><?php echo $buyer_users[11]["fullname"]?></p>
                        <p class="description" style="padding: 5px 20px; text-align: center;">
                        <?php 
                        if($buyer_users[11]['tagline']){
                        	echo $buyer_users[11]['tagline'];
                        }else{
                        	echo 'A good Meetup Group description explains what your Meetup Group is about,who should join, .......';}
                        ?>
			</p>
			<center><button style="background:#f8f9fb; color: black; border-radius: 5px; font-size:15px; padding: 5px 10px;" onclick="goto_showroom(<?php echo $buyer_users[11]['user_id']?>)">Find Out More</button></center>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block; background: #f8f9fb;padding: 10px 20px;">
			<?php 
			if($buyer_users[11]['business']==0)
				echo'<img src="https://wrevel.com/src/data/img/personal_profile_icon.png" style="width:30px;margin-left:90%;">';
			else
				echo'<img src="https://wrevel.com/src/data/img/business_profile_icon.png" style="width:30px;margin-left:90%;">';
			?>
			<center><img class="fb_pic" src="<?php
if($buyer_users[11]['f_b']==0){  // no fb connect,use photo from wrevel account
				echo base_url()?>uploads/<?php echo $buyer_users[11]['image_key'];}else if(substr($buyer_users[11]['image_key'],0,6)=='//grap'){ //have fb connect,use photo from wrevel account
					echo $buyer_users[11]['image_key'];}else{ // have fb connect, use photo from fb
						echo base_url()?>uploads/<?php echo $buyer_users[11]['image_key'];
}?>"
			style="width:130px; height:130px; border-radius: 150px;"/></center>
			<center><div style="margin-top: 5px;">
			<span style="font-size: 25px; color: black; text-align: center;"><?php echo $buyer_users[11]["fullname"]?></span>
			</div></center>
			<center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $buyer_users[11]["location"]?></center>
			</div>
		</div>
	     </div>
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
    
    <script type="text/javascript" src="<?php echo $PATH_BOOTSTRAP?>js/mosaic.1.0.1.js"></script>
  <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="<? echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>jquery.cookie.js"></script>
        <script type="text/javascript" src="<?php echo $PATH_BOOTSTRAP?>js/mosaic.1.0.1.js"></script>

    
    <script type="text/javascript">  
			
			jQuery(function($){
				
				$('.circle').mosaic({
					opacity		:	0.8			//Opacity for overlay (0-1)
				});
				
				$('.fade').mosaic();
				
				$('.bar2').mosaic({
					animation	:	'slide'		//fade or slide
				});
			});
			
			function goto_showroom($userid){
   window.location.href ="https://wrevel.com/public_profile/user/"+$userid;
    
    }
		    
			$(document).ready(function(){

				<?php if (isset($users_search['size'])){?>

					<?php }?>
			});

		    
  </script>
  
      <script>
    	var current_page = 1; 
    	var max_page = <?php echo $group_page?>;
    	function show_page(number) {
    		if(number == -1 && current_page > 1) {
    			current_page--;
    		}
    		else if(number == -2 && current_page < max_page-1) {
    			current_page++;
    		}
    		else {
	    		if(number > 0) {
	    			current_page = number;
	    		}
    		}
    		var temp = '.event_group'+current_page;
    		var temp2 = '.page_number'+current_page;
    		$('[class*="event_group"]').hide();
    		$('.page_number_class').removeClass('active');
    		$(temp2).addClass('active');
    		$(temp).show();
    		$page_id='page_number'.current_page;
    		$('#'.$page_id).css("font-weight","bold")
  
    	}
    </script>
</body>
</html> 