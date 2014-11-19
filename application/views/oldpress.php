<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>press</title>
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

<?php $this->load->view('header');?>

<!--content
==============================================-->

<!--Press-->   
	<div class="col-md-offset-2 col-xs-offset-2">
	<img src="<?php echo $PATH_IMG?>PresspageHeader.png"style="width: 80%"/>
	</div>
	
<div class="container">
<div class="col-md-offset-2 col-md-8" style="margin-top: 5%;padding-bottom:50px;">
<!--DNA-->

            
        <div class="panel" style="background-color: #71acd2; border-color:#71acd2; border-radius: 10px;padding-top: 30px;padding-bottom: 30px;padding-left: 10px;padding-right: 10px;">
           <div class="panel-body" style="background-color: #71acd2; border-radius: 10px;">
		<div class="col-md-6">
		    <img src="<?php echo $PATH_IMG?>DNA-logo.png"style="width:300px;"/>
		    <p style="padding-bottom: 10px;padding-left: 20px;padding-right: 20px;padding-top: 10px;"><font color="white" size="5">"New Party-Finding App Helps Eager Revelers Find Their Match"</font></p>
		    <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 100px;background: #4859a5;">Click For More</button>
		</div>
		
		<div class="col-md-6">
		    <img src="<?php echo $PATH_IMG?>Copy of Dance Sing Celebrate (posted).jpg" style="margin-top: 20px; width: 300px;"/>
		</div>
	    </div>
        </div>

<!--Gazette-->   
        <div class="panel" style="margin-top: 80px;background-color: #71acd2; border-color:#71acd2; border-radius: 10px;padding-top: 30px;padding-bottom: 30px;padding-left: 10px;padding-right: 10px;">
           <div class="panel-body" style="background-color: #71acd2; border-radius: 10px;">
		<div class="col-md-6">
		    <img src="<?php echo $PATH_IMG?>greenpoint-gazette-logo.png"style="width: 300px;"/>
		    <p style="padding-bottom: 10px;padding-left: 20px;padding-right: 20px;padding-top: 10px;"><font color="white" size="5">"New Greenpoint Company Wants to Tell You Where the Party Is!!!"</font></p>
		    <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 100px;background: #4859a5;">Click For More</button>
		</div>
		
		<div class="col-md-6">
		    <img src="<?php echo $PATH_IMG?>Copy of Rejuvinate Meet partyy (posted).jpg"style="margin-top: 20px;width: 300px;"/>
		</div>
            </div>
        </div>
	
<!--What to do-->
        <div class="panel" style="margin-top: 80px;background-color: #71acd2; border-color:#71acd2; border-radius: 10px;">
           <div class="panel-body" style="background-color: #71acd2; border-radius: 10px;">
		<p style="padding-bottom: 10px;padding-left: 20px;padding-right: 20px;padding-top: 10px;"><font color="white" size="5"><b>What to do a feature on us? Contact us at </b>publicrelations@wrevel.com.</font></p>
            </div>
        </div>
    
</div>
</div>
<!--end of content-->

<?php $this->load->view('footer');

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
   
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>-->
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
</body>
</html> 