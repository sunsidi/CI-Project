<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Buy Ticket Successful | Wrevel - Discover Your World, Host & Experience Events</title>

<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<?php $this->load->view('header');?>

	<div class="container" style="margin-top: 90px; width: 90%;">
        	<div class="panel" style="background-color: transparent; box-shadow: none; border-color: transparent;">
    
      			<div class="panel-heading" style="background-color: #208756; height: 55px;">
        			<p style="font-size: 180%; color: white;text-align: center;">
          				<b>YOUR EVENT HAS BEEN BOOKED</b>
        			</p>
        
      			         <a href="#" class="btn" style="float: right;border-radius:5px;font-size:17px;background: #ffffff;color: black; margin-top: -48px;"><b>Back to event listing</b></a>

      			</div>
			
			<div class="panel-heading" style="background-color: #513953; text-align: center; margin-top: 10px; border-radius: 0px;height: 55px;">
        			<span style="font-size: 150%; color: white; ">
          				You're going to Toast of Brooklyn
        			</span>
      			</div>
			
			<div class="panel-body" style="text-align:center; font-size:15px; background-color: white;">
			    <span style="font-size: 30px;">Order #&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#1677C5; font-size: 30px;">4637294960gk184950243</span><br/>
			    <div style="margin-top: 8px;">
			    <span style="font-size: 22px; margin-top: 10px;">Your order has been saved to </span><span style="font-size:20px;"><b>MyAccount - Event's I'm Attending</b></span><br/>
			    </div>
			    <div style="background:#eaf0f4; padding: 10px 10px; margin-top: 8px;">
			    <span style="font-size: 18px;">Your ticket(s) have been sent to xxxx.xxxx@gmail.com</span>
			    </div><br/>
		  
			<div>
			<button type="submit" class="btn btn-lg" style="background:#44535E; color:white; padding: 10px 30px;font-size: 20px;">Re-send Email </button>
			
			<?php echo form_open('stripe_controller/print_ticket/'.$event_id.'/'.$ticket_id);?>
			<button type="submit" class="btn btn-lg" style="background:#44535E; color:white; padding: 10px 30px;font-size: 20px;">Print Ticket(s) </button>
			<?php echo form_close();?>
			    </div>
		</div>
	</div>
		
<?php $this->load->view('footer');?>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
	<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script> 
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