<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<meta name="description" content="Contact Wrevel.">
<meta name="keywords" content="contact us, contact wrevel, email us, send message, parties, tickets, wrevel, online tickets, tech company, events, buy tickets">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


<script>
jQuery(document).ready(function () {
    //hide a div after 5 seconds
    setTimeout(function(){ jQuery("#alertMessage").hide(); }, 5000);
});
</script>


</head>

<body>
<?php $this->load->view('header');?>
<!--content
==============================================-->


<div id='alertMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:20px;width: 40%; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>


<div class="container contact-container" style="padding:4%;">
	
	<div class="row row-centered">
		<div class="col-md-5 col-xs-11 col-sm-9 col-centered">
			<div class="panel" style="border:none; border-radius:10px;">
				<div class="panel-heading" style="background-image: url(<?php echo $PATH_IMG?>contact_us_header.png); height: 60px;background-size:100% 60px;border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <p style="color: white; font-size: 30px; text-align: center;">Contact Us</p>
				</div>
				<div class="panel-body" style="background:#74A1C5; color:white;text-align:center;font-size:15px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
				
			    
				<form class="form-horizontal" action="<?php echo base_url().'info/contactWrevel' ?>" method="post">
				<fieldset>
    
             <!--To input-->
            <div class="form-group row">
              <div class="col-md-2 col-sm-2" for="name" style="">To</div>
              <div class="col-md-9 col-sm-9">
                Wrevel
              </div>
            </div>
    
           <!--Email input-->
            <div class="form-group row">
              <div class="col-md-2 col-sm-2" for="email" style="">Email</div>
              <div class="col-md-9 col-sm-9">
                <input id="name" name="email" type="email" class="form-control"  required>
              </div>
            </div>

             <!--Subject input-->    
	    <div class="form-group row">
              <div class="col-md-2 col-sm-2" for="email" style="">Subject</div>
              <div class="col-md-9 col-sm-9">
                <input id="name" name="subject" type="text" class="form-control" required>
              </div>
            </div>
	    
	    <!--Message input-->
            <div class="form-group row">
              <div class="col-md-2 col-sm-2" for="message" style="">Message</div>
              <div class="col-md-9 col-sm-9">
                <textarea class="form-control" id="message" name="message" rows="5"></textarea>
              </div>
            </div>
    
            <!--Form actions -->
            <div class="form-group row">
              <div class="col-md-offset-7 col-sm-offset-7 col-xs-offset-7" style="">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Send</button>
              </div>
            </div>
	    
				</fieldset>
				</form>
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
   <!--<script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
   
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>-->
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
	
  
</body>
</html> 