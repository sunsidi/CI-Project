<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>MyWrevs | Wrevel - Discover Your World, Host & Experience Events</title>

<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">

<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-tour.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

<?php $this->load->view('header');?>

<!--content
==============================================-->
<div class="container">
<div class="row" style="padding-bottom:50px;margin-top:50px;" >
   
       
         <p style="font-size:40px;color: white; margin-top:2%; text-align:center;font-family:GillSans;">discover your world.</p>
          
       
    	<div style="margin-top:70px;" id="mywrevs-step">
	 <div class="mywrev-icon">
        <div class="col-md-6 col-xs-10">
        	<div class="col-hide"><div style="background:rgba(237,28,36,0.7); width:90px; height:30px; margin-left: 55%; border-radius:10px; padding-left:7px;margin-top:5px;">
        		<p style="color: white;font-size:23px;">discover</p>
        	</div></div>
            <a href="<?php echo base_url()."main/get_related_events/"?>hotspots"><img src="<?php echo $PATH_IMG?>/hotspots_button.png" onmouseover="this.src='<?php echo $PATH_IMG?>/hotspots_altbutton1.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/hotspots_button.png'" style="width:20%;margin-left: 28%;margin-top:2%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>icebreakers"><img src="<?php echo $PATH_IMG?>/icebreakers_button.png" onmouseover="this.src='<?php echo $PATH_IMG?>/icebreakers_altbutton1.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/icebreakers_button.png'" style="width:20%;margin-left: 3%;margin-top:2%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>culture"><img src="<?php echo $PATH_IMG?>/culture_button.png" onmouseover="this.src='<?php echo $PATH_IMG?>/culture_altbutton1.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/culture_button.png'" style="width:20%;margin-left: 3%;margin-top:2%;"></a>
                <div class="col-hide"><div style="position:absolute; background:rgba(237,28,36,0.7); width:115px; height:30px;margin-left: 52%;margin-top:12%;border-radius:10px; padding-left:7px;">
        		<p style="color: white;font-size:23px; ">experience</p>
        	</div></div>
            <a href="<?php echo base_url()."main/get_related_events/"?>meetups"><img src="<?php echo $PATH_IMG?>/meetups_button.png" onmouseover="this.src='<?php echo $PATH_IMG?>/meetups_altbutton.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/meetups_button.png'" style="width:20%; margin-top:20%; margin-left: 28%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>explore"><img src="<?php echo $PATH_IMG?>/exploringyourcity_button.png"onmouseover="this.src='<?php echo $PATH_IMG?>/exploringyourcity_altbutton.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/exploringyourcity_button.png'" style="width:20%; margin-top:20%; margin-left: 4%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>romance"><img src="<?php echo $PATH_IMG?>/loveandromance_button.png" onmouseover="this.src='<?php echo $PATH_IMG?>/loveandromance_altbutton.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/loveandromance_button.png'" style="width:20%; margin-top:20%; margin-left: 3%;"></a>
            <a href="<?php echo base_url()."main/get_latest_events/"?>"><img src="<?php echo $PATH_IMG?>/clickhereforlatestwrevs_button.png" onmouseover="this.src='<?php echo $PATH_IMG?>/latestwrevs_altbutton1.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/clickhereforlatestwrevs_button.png'" style="margin-left:93%;width:24%; margin-top:-64%;z-index: 2;position:relative;"></a>
            <img src="<?php echo $PATH_IMG?>/horizontal.png" class="line" style="width:65%; height: 2px; margin-top: -70%; margin-left: 30%;">
            <div class="col-hide"><img src="<?php echo $PATH_IMG?>/horizontal.png" class="line" style="z-index:1;width:2px; height: 550px; margin-top: -75%; margin-left: 105%;"></div>
        </div>
	 </div>
    
      <div class="mywrev-righticon">
        <div class="col-md-5 col-xs-10" style="">
                	<div class="col-hide"><div style="background:rgba(237,28,36,0.7); width:97px; height:32px; margin-left:43%; margin-top:-3%;border-radius:10px; padding-left:7px;">
        		<p style="color: white;font-size:25px;">socialize</p>
        	</div></div>
        	
            <a href="<?php echo base_url()."main/get_related_events/"?>parties"><img src="<?php echo $PATH_IMG?>/parties1_button.png" onmouseover="this.src='<?php echo $PATH_IMG?>/parties_altbutton1.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/parties1_button.png'" style="margin-left:24%;width:25%; margin-top:2%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>clubs"><img src="<?php echo $PATH_IMG?>/clubs_button1.png" onmouseover="this.src='<?php echo $PATH_IMG?>/clubs_altbutton.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/clubs_button1.png'" style="width:25%; margin-top:2%; margin-left:6%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>concerts"><img src="<?php echo $PATH_IMG?>/concerts_button.png" onmouseover="this.src='<?php echo $PATH_IMG?>/concerts_altbutton.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/concerts_button.png'" style="margin-left:23%;width:26%; margin-top:1%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>festivals"><img src="<?php echo $PATH_IMG?>/festivals_button.png" onmouseover="this.src='<?php echo $PATH_IMG?>/festivals_altbutton.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/festivals_button.png'" style="margin-left:6%;width:26%; margin-top:1%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>lounges"><img src="<?php echo $PATH_IMG?>/lounges_button.png" onmouseover="this.src='<?php echo $PATH_IMG?>/lounges_altbutton.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/lounges_button.png'" style="margin-left:23%;width:26%; margin-top:1%;"></a>
            <a href="<?php echo base_url()."main/get_related_events/"?>bars"><img src="<?php echo $PATH_IMG?>/bars_button.png" onmouseover="this.src='<?php echo $PATH_IMG?>/bars_altbutton.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/bars_button.png'" style="margin-left:6%;width:26%; margin-top:1%;"></a>
            
        </div>
        </div>
	</div>
    </div>
</div>

<div class="container" style="padding-bottom:5%;">
    		<div class="col-md-offset-3 col-md-3" style="height: 280px;margin-top: 5%;background:rgba(255,255,255,0.7); border-radius:10px;  color:#414042;">
    			 
    			 <div style="padding-bottom: 30px; padding-left: 12%;padding-top:30px;">
                <p style="font-family:GillSans;font-size:25px;"><i class="fa fa-info-circle" style="font-size:30px;"></i>
what is mywrevs?</p>
                <p class="text" style=" font-size: 18px; width:80%;"><b>mywrevs</b> allows you to create/host your own parties and events, which also include a unique ticket system.</p>
            
            <?php if($this->session->userdata('is_logged_in')) {?>
            <a href="#" data-toggle="modal" data-target="#create" class="btn btn-lg create-btn" style=" font-size:25px; padding:5px 10px;border-radius:5px;border:2px solid #414042; margin-left:15%; ">create a wrev</a>
           <?php }?>
            </div>
            
    		</div>
    		<div class="col-md-offset-1 col-md-3"  style="height: 280px;margin-top: 5%;background-color: #81a4b5;border-radius:10px;">
    		<div style="padding-bottom: 30px; padding-left: 12%;padding-top:30px;">
                <p style="color: white;font-family:GillSans;font-size:25px;"><span class="glyphicon glyphicon-globe" style="font-size:27px;"></span> wrevenues.</p>
                <p class="text" style="color: white; font-size: 18px; width:85%;">Looking for the coolest locations to visit or host your next party? Check out <b>Wrevenues</b> where you can find the best venues near you!</p>
            
            <?php if($this->session->userdata('is_logged_in')) {?>
			<div style="text-align:center;">
            <a href="<?php echo base_url().'wrevenues/wrevenues_main'?>" class="btn btn-lg wrevenues-btn" style="font-size:25px; padding:5px 10px;border-radius:5px;border:2px solid rgba(255,255,255,0.7); margin-left:auto;margin-right:auto;">go to wrevenues</a></div>
            <?php }?>
        	</div>
    		</div>
</div>

<!--end of content-->

<?php $this->load->view('footer');?>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="<? echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
	<!--<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap-tour.min.js"></script>
	<script src="<?php echo $PATH_BOOTSTRAP?>js/tour.js"></script>-->
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