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


<div id='alertMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left: 32%; margin-top:20px;width: 500px; background-color: green; color: white;  border: 1px solid white;text-align:center;">'.$this->session->flashdata('message').'</p>';?></div>


<div class="container" style="padding:50px; ">
	
	<div class="row" style="">
	    <div style="background-image: url(<?php echo $PATH_IMG?>contact_us_box.png); background-size: 500px 450px;width: 500px; height: 450px;margin-left:auto; margin-right:auto;">
		        <p style="padding-top: 5px;text-align:center;font-size: 40px; color: white;">
                        Contact Us
                        </p>
			
			<div class="panel" style="padding-left: 30px;background: transparent; height: 450px;">
			    <div class="panel-body" style="color: white;text-align:center; font-size:15px; background: transparent;">
			    <div class="container">
			    <div class="row">
			    
				<form class="form-horizontal" action="<?php echo base_url().'info/contactWrevel' ?>" method="post">
				<fieldset>
    
            <!-- To input-->
            <div class="form-group">
              <div class="col-md-2 col-sm-2 col-xs-2" for="name" style="">To</div>
              <div class="col-md-9 col-sm-9 col-xs-9">
                Wrevel
              </div>
            </div>
    
            <!--Email input-->
            <div class="form-group">
              <div class="col-md-2 col-sm-2 col-xs-2" for="email" style="">Email</div>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <input id="name" name="email" type="email" class="form-control" style="width: 350px;" required>
              </div>
            </div>

            <!-- Subject input-->	    
	    <div class="form-group">
              <div class="col-md-2 col-sm-2 col-xs-2" for="email" style="">Subject</div>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <input id="name" name="subject" type="text" class="form-control" style="width: 350px;" required>
              </div>
            </div>
	    
	    <!--Message input-->
            <div class="form-group">
              <div class="col-md-2 col-sm-2 col-xs-2" for="message" style="">Message</div>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <textarea class="form-control" id="message" name="message" rows="5" style="width: 350px;"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
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