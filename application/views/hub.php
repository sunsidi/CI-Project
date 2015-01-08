<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Hub</title>
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $PATH_BOOTSTRAP?>css/mosaic.css" type="text/css" media="screen">

<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-tour.min.css" rel="stylesheet">
<style>
	

.marquee span {
    display: inline-block;
    padding-left: 100%;
    text-indent: 0;
    -webkit-marquee-speed: fast;
	-webkit-animation: marquee 70s linear infinite;
   -moz-animation: marquee 70s linear infinite;
    -ms-animation: marquee 70s linear infinite;
     -o-animation: marquee 70s linear infinite;
    animation: marquee 70s linear infinite;
	color:#414042;
	font-size:19px;
}



.marquee span:hover {
    -webkit-animation-play-state: paused; 
    animation-play-state: paused
}

/* Make it move */

@-webkit-keyframes marquee{
    0%   { transform: translate(0, 0); }
    100% { transform: translate(-100%, 0); }
}

@keyframes marquee {
    0%   { transform: translate(0, 0); }
    100% { transform: translate(-100%, 0); }
}

/* Make it pretty */
.microsoft {
    padding-left: 1.5em;
    position: relative;
    font: 16px 'Segoe UI', Tahoma, Helvetica, Sans-Serif;
}

ul.ticket-event-dp > li > a:hover{
    background-image: none;
	background-color:#DB787D;
}



</style>
</head>

<body>
<?php $this->load->view('header');?>

<!--content
==============================================-->
 <?php $events_info =$this->_ci_cached_vars;?>

 <div style="width:90%;margin-left:auto;margin-right:auto;margin-top:3%;">
		<div class="btn-group ticker-button" style="float:left;">
		<button type="button" class="btn btn-lg dropdown-toggle ticker" data-toggle="dropdown" aria-expanded="false">Featured Events <span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
			<ul class="dropdown-menu ticket-event-dp" role="menu">
				<li><a href="#" class="ticker-event" style="color:white;" onclick="show_featured_events()">Featured Events</a></li>
				<li><a href="#" class="ticker-event" style="color:white;" onclick="show_upcoming_events()">Upcoming Events</a></li>
				<!--<li><a href="#" class="ticker-event" style="color:white;">Friends' Events</a></li>-->
				
			</ul>
		</div>
		<p class="marquee">
			<!--Scrolling Events-->
			<span>
                            <?php if(isset($events)) {
                                $j = 0;
                                for($i = 0; $i < count($events); $i++) {
                                    if($events[$i]['e_featured'] && $j < 5) {?>
                                        <a class="featured_group" href="<?php echo base_url().'event/event_info/latest/'.$events[$i]['event_id'];?>" style="color:#414042;"><?php $originalDate = $events[$i]['e_date']; $newDate = date("F j", strtotime($originalDate)); echo $newDate;?> &nbsp;&nbsp;&nbsp; <strong><?php echo $events[$i]['e_name'];?></strong> &nbsp;&nbsp;&nbsp; <?php echo $events[$i]['e_address'];?> &nbsp;&nbsp;&nbsp; <strong style="color:#2c75bb;font-weight:100;"><?php echo substr($events[$i]['e_description'],0,14);?> &nbsp;&nbsp;&nbsp;</strong></a>
                                    <?php $j++;}
                                        if($i < 15) {?>
                                            <a class="upcoming_group" href="<?php echo base_url().'event/event_info/latest/'.$events[$i]['event_id'];?>" style="color:#414042;" hidden><?php $originalDate = $events[$i]['e_date']; $newDate = date("F j", strtotime($originalDate)); echo $newDate;?> &nbsp;&nbsp;&nbsp; <strong><?php echo $events[$i]['e_name'];?></strong> &nbsp;&nbsp;&nbsp; <?php echo $events[$i]['e_address'];?> &nbsp;&nbsp;&nbsp; <strong style="color:#2c75bb;font-weight:100;"><?php echo substr($events[$i]['e_description'],0,14);?> &nbsp;&nbsp;&nbsp;</strong></a>
                                    <?php }}} else {?>
                                <a href="#" style="color:#414042;">No events here =(</a>
                            <?php }?>
			</span>
		</p>
	</div>
	
<div class="container" id="hub-step" style="margin-top: 3%;padding-bottom:50px; width:90%">
	
	
	
    <div class="col-md-6" style="">
    
<!--Latest Wrevs-->   
     
                
        <div class="panel" style="border:none; width: 100%;border-radius:15px; -moz-box-shadow:1px 1px 1px rgba(0, 0, 0, .3);-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, .3);box-shadow:1px 1px 1px rgba(0, 0, 0, .3);background:rgba(255,255,255,0.5);">
    
            <div class="panel-heading" style="height:60px;background-color: #7874a2;border-top-left-radius:15px; border-top-right-radius:15px;padding:8px 0 0 0;">
                <p style="font-size: 26px; color: white;text-align: center; margin-top:6px;  ">
                <img src="<?php echo $PATH_IMG?>latestwrevs_icon.png" style="z-index:1;width:35px;margin-top:-5px;"/>

                
                    <strong>Latest Wrevs</strong>
                </p>
                
            </div>
      
            <div class="panel-body" style="font-size:16px;">
<!--                <form class="form-inline" role="form"> -->
            <?php echo form_open(base_url().'event/hub_search')?>

            <div class="form-group" style="text-align:center;margin-left:2%;">
                        <div class="left-inner-addon" style="float:left;text-align:left;">
                            <span class="glyphicon glyphicon-search" style="font-size:13px;"></span>
                            <label class="sr-only">Names</label>
                            <input type="text" name="search" class="form-control" style=" height:27px;width: 150px; border:1px solid #717477;font-size:13px;" placeholder="search name"></div>
            </div>
                        
                        <div class="btn-group" style="float:left;">
                            <select name="type" type="text" style=" height:27px;border:1px solid #717477; border-radius:5px; width:100px;font-size:13px;">
                                <option value="icebreakers">icebreakers</option>
                                <option value="meetups">meet ups</option>
                                <option value="parties">parties</option>
                                <option value="clubs">clubs</option>
                                <option value="concerts">concerts</option>
                                <option value="festivals">festivals</option>
                                <option value="lounges">lounges</option>
                                <option value="hotspots">hotspots</option>
                                <option value="romance">love and romance</option>
                                <option value="culture">culture</option>
                                <option value="bars">bars</option>
                                <option value="explore">explore your city</option>
                            </select>
                        </div>

                        <div class="btn-group" style="float:left;">
                        <input name = 'price' type="number" class="form-control" placeholder="price" style="border:1px solid #717477;width:75px;font-size:13px;height:27px;padding-top:3px;" >
                        </div>
                        
           
                            <div class="left-inner-addon" style="float:left;">
                                <i class="fa fa-map=marker"></i>
                                <label class="sr-only" for="exampleInputPassword2">Places</label>
                                <select name="state" type="text" style="border:1px solid #717477; border-radius:5px;width:60px;font-size:13px;height:27px;">
                                
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
                                 <div class="btn-group">
                                  <input name="zipcode" type="text" placeholder="Zip" pattern=".{5,5}" maxlength="5" style="border:1px solid #717477; border-radius:5px;padding:6.5px;width:65px;font-size:13px;height:27px;" onkeypress='return event.charCode >= 48 && event.charCode <= 57' oninput="check(this)">
                                 </div>
                                <!--<input type="text" class="form-control"  style="font-size:20px; width: 180px;" placeholder="New York, NY">-->
                                <input type="submit" class="btn" style="background:#1C74BB; color:white; padding:1px 10px;font-size:14px;" value="go"></input>
                		</div>
                       
        
            
            <?php echo form_close() ?>
<!--        </form> -->
                <!--posting all the events related here!!!!! -->
           <div style="text-align:center;margin-top:5px;font-weight:bold;">
           <?php    
           if(isset($events_info['size'])){                  
                if($events_info['size'] <= 1) {
                    echo $events_info['size']." result found!";
                     }
                else{
                    echo $events_info['size']. " results found!";
                }
            }
                ?>
	  </div>
                <div class="row" style="margin-left:2%; margin-right:2%;">
                <?php 
                if(isset($events_info['size'])){
                echo "<table style='width:100%'>";
                echo "<tr>
                          <td>Name:</td>
                          <td>Date:</td>        
                          <td>Start:</td>
                          <td>Description:</td>
                        </tr> ";

                    for($i=0;$i<$events_info['size'];$i++){
                        echo "<tr>";
                        echo "<td><a href=".base_url()."event/event_info/latest/".$events_info[$i]['event_id'].'>'.$events_info[$i]['e_name']."</a></td>";
                        echo "<td>".$events_info[$i]['e_date']."</td>";
                        echo "<td>".$events_info[$i]['e_start_time']."</td>";
                        echo "<td>".$events_info[$i]['e_description']."</td>";
                        echo "</tr>";
                        }
                echo "</table>";
                    }
                    //print_r($events_info);
            ?>

                </div>
		
		
		
                <div class="row" style="text-align:center; padding:10px;">
<!--                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px; padding:5px;">View more</button></a> -->
                                    <a href="#" data-toggle="modal" data-target="#create" class="btn btn-lg createwrevb" style="font-size:20px; padding:5px 10px;border-radius:10px;">Create a Wrev</a>
                </div>
            </div>
        </div>
        

<!--Groups-->
           
        <div class="panel" style="border:none; width: 100%;border-radius:15px; -moz-box-shadow:1px 1px 1px rgba(0, 0, 0, .3);-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, .3);box-shadow:1px 1px 1px rgba(0, 0, 0, .3);background:rgba(255,255,255,0.5);">
    
            <div class="panel-heading" style="height:60px;background-color: #81a4b5;border-top-left-radius:15px; border-top-right-radius:15px;padding:8px 0 0 0;">
                <p style="font-size: 26px; color: white;text-align: center; margin-top:6px;">
                <img src="<?php echo $PATH_IMG?>groups_icon.png" style="z-index:1;width:30px;margin-top:-5px;"/>

                
                    <strong>Search Users</strong>
                </p>

            </div>
      
            <div class="panel-body" style="font-size:16px;">
               <!--<form class="form-inline" role="form" style="margin-left: 20%">-->
                <?php 
                    $attr = array('class' => "form-inline", 'style' => "margin-left: 20%");
                    echo form_open(base_url().'event/user_search', $attr);
                ?>
            <div class="form-group" style="margin-left:8%;">
                        <div class="left-inner-addon">
                            <span class="glyphicon glyphicon-search" style="font-size:10px;"></span>
                            <label class="sr-only">Names</label>
                            <input type="text" name="search_user" class="form-control" style=" width: 100%; height:27px; font-size:13px;" placeholder="search name of user"></div>
            </div>
            <button type="submit" class="btn" style="background:#1C74BB; color:white; padding:1px 10px;">go</button>
        <?php echo form_close() ?>
       <!-- </form>-->
        <!-- Print out the user search here -->
        <div style="text-align:center;margin-top:5px;font-weight:bold;">
         <?php    
           if(isset($users['size'])){                  
                if($users['size'] <= 1) {
                    echo $users['size']." result found!";
                     }
                else{
                    echo $users['size']. " results found!";
                }
            }
                ?>
	</div>
                <div class="row" style="margin-left:2%; margin-right:2%;">
                <?php 
                if(isset($users['size'])){
                echo "<table style='width:100%'>";
                echo "<tr>
                          <td>Name:</td>
                          <td>Username:</td>        
                        </tr> ";

                    for($i=0;$i<$users['size'];$i++){
                        echo "<tr>";
                        echo "<td><a href=".base_url()."public_profile/user/".$users[$i]['user_id'].'>'.$users[$i]['fullname']."</a></td>";
                        echo "<td>".$users[$i]['username']."</td>";
                        echo "</tr>";
                        }
                echo "</table>";
                    }
                    //print_r($events_info);
            ?>
            <!-- end of user search-->       
                <!--<div class="row" style="padding: 10px; text-align:center;">
                        <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px; padding:5px 10px;border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .5);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .5);box-shadow:2px 2px 2px rgba(0, 0, 0, .5)">View more</button></a>
                        <a href="#"><button type="button" class="btn btn-lg" style="background:#00A79E; color:white; font-size:20px; padding:5px 10px;border-radius:10px;">Create a Group</button></a>
                </div>-->
                          
            </div>
        </div>
            
        </div>
    </div>
    
    <div class="col-md-6" >

<!--Newsfeed-->   
    <div class="panel" style="border:none; width: 100%;border-radius:15px; -moz-box-shadow:1px 1px 1px rgba(0, 0, 0, .3);-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, .3);box-shadow:1px 1px 1px rgba(0, 0, 0, .3);background:rgba(255,255,255,0.5);">
    
            <div class="panel-heading" style="height:60px;background-color: #478ebf; border-top-left-radius:15px; border-top-right-radius:15px;padding:5px 0 0 0;">
		<p style="font-size: 26px; color: white;text-align: center;margin-top:8px;">
               <img src="<?php echo $PATH_IMG?>newsfeed_icon.png" style="z-index:1;margin-top:-5px;"/>

                
                    <strong>Newsfeed</strong>
                </p>
                
            </div>
      
            <div class="panel-body" style="height:650px;overflow-y:auto;">
			
			<div class="row">	
            	<div style="padding: 0 15px;position:relative;">
            		<p style="text-align:center;">2014-12-20 4:00PM</p>
					<img src="<?php echo $PATH_IMG?>latest_fullbutton.png" style="width:70px; height:70px;border-radius: 150px;z-index:5;position:relative;"><span style="color:white;background:#7874a2; padding:5px 25px 5px 40px; border-radius:5px;margin-left:-20px;z-index:3;">The Wrevel Team</span>
					<div class="arrow-left" style="position:absolute;width: 0; height: 0; border-top: 0px solid transparent;border-right: 35px solid #4991c9;
border-bottom: 20px solid transparent;margin-left:14%;float:left;"></div>
					<div style="padding:15px 5%;background:#4991C9;width:80%;float:right;color:white;border-radius:10px;">
							<p style="text-align:left; font-size:16px;">One of our summer interns, Varagon (Jenny) wrote this awesome blog on what project phoenix (Wrevel 2.0) is all about. <a style="color:white;text-decoration:underline;" href="<?php echo base_url()."info/blog1"?>">Click here</a> to learn more about it! </p>
            			<a href="<?php echo base_url()."info/blog1"?>"><img class="img-responsive" src="<?php echo $PATH_IMG?>blogscreenshot.png"></a>     	
            		</div>
            
				</div>
			</div>			
			<hr>	
			<div class="row" style="margin-top:20px;padding-bottom:25px;">	
            	<div style="padding: 0 15px;position:relative;">
            		<p style="text-align:center;">2014-11-14 2:15PM</p>
					<img src="<?php echo $PATH_IMG?>latest_fullbutton.png" style="width:70px; height:70px;border-radius: 150px;z-index:5;position:relative;"><span style="color:white;background:#7874a2; padding:5px 25px 5px 40px; border-radius:5px;margin-left:-20px;z-index:3;">The Wrevel Team</span>
					<div class="arrow-left" style="position:absolute;width: 0; height: 0; border-top: 0px solid transparent;border-right: 35px solid #4991c9;
border-bottom: 20px solid transparent;margin-left:14%;float:left;"></div>
					<div style="padding:15px 5%;background:#4991C9;width:80%;float:right;color:white;border-radius:10px;">
							<p style="text-align:left; font-size:16px;">Welcome to the new Wrevel! We are delighted to have you on board and can’t wait for you to check out all the new features we have for you. You can start by clicking on the <a style="color:white;text-decoration:underline;" href="<?php echo base_url()."main/mywrevs"?>"> MYWREVS</a> tab above and browse through the 12 new categories. Happy Wrevel-ing! :D</p>
            			<img class="img-responsive" src="<?php echo $PATH_IMG?>projectphoenix_image.jpg">       	
            		</div>
            
				</div>
			</div>	
                 <!--<form class="form-inline" role="form" style="margin-left:10%;" >
            <div class="form-group">
                        <!--<div class="left-inner-addon">
                            <span class="glyphicon glyphicon-comment"></span>
                            <label class="sr-only">Names</label>
                            <input type="search" class="form-control" style="font-size:20px;border:1px solid #717477;" placeholder="write something"></div>-->
            		</div>
                        
                        <!--<div class="btn-group">
                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px;padding:3px 5px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">Post Comment</button></a>
                        </div>
                        
                        <div class="btn-group">
                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#2CA8DC; color:white; font-size:20px; padding:2px 5px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);"><span class="glyphicon glyphicon-camera"></span></button></a>
                        </div>-->
                        
            </div>
    </div>
    
    </div>
    
</div>
<!--end of content-->

<?php $this->load->view('footer');?>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script>
        $(".dropdown-menu li a").click(function(){
            var selText = $(this).text();
            $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
        });

        $("#btnSearch").click(function(){
            alert($('.btn-select').text()+", "+$('.btn-select2').text());
        });
    </script>
    <script>
    	function check(input){
    		if (input.value.search(new RegExp(input.getAttribute('pattern'))) >= 0) {
        	// Input is fine. Reset error message.
	        input.setCustomValidity('');
    		} 
    		else {
        		input.setCustomValidity('Enter a valid zipcode.');
    		}
	}
    </script>
    <script>
        function show_featured_events() {
            $('.upcoming_group').hide();
            $('.featured_group').show();
        }
        function show_upcoming_events() {
            $('.featured_group').hide();
            $('.upcoming_group').show();
        }
    </script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="<? echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>

	<script type="text/javascript" src="<?php echo $PATH_BOOTSTRAP?>js/mosaic.1.0.1.js"></script>

	<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap-tour.min.js"></script>
	<script src="<?php echo $PATH_BOOTSTRAP?>js/tour.js"></script>
</body>
</html> 