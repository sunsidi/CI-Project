<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ticket Confirmation | Wrevel - Discover Your World, Host & Experience Events</title>

<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<?php $this->load->view('header');?>

<div class="row">
	<div class="col-md-8 col-md-offset-2" style="padding-top: 80px; padding-bottom: 45px;">
		<div class="row" style="background:#2BB473;text-align:center;padding:8px;color:white;font-size:150%;margin:0;font-weight:bold;">
			<strong style="vertical-align:middle;">BUY TICKETS CONFIRMATION PAGE</strong>
			<a href="#" class="btn"  style="float: right;border-radius:5px;font-size:17px;background: #ffffff;color: black;"><b>Back to event listing</b></a>
		</div>
		<div class="row confirm-info" style="font-weight:bold;margin-top:10px;">
			<div class="col-md-5 confirm-info-left">
				<p style="background:#664B65;color:white;">Toast of Brooklyn <span>11/6 - 11/7</span></p>
				<p>General Admission | Nov 6 x # <span style="color:#009349;">$0.00</span></p>
				<p>VIP Admission | Nov 6 x # <span style="color:#009349;">$0.00</span></p>
				<p style="background:#EFF3F6;">Delivery Method <span>Standard Shipping</span></p>
				<p>Delivery Charge <span style="color:#009349;">$4.95</span></p><!--only shows up if shipping is selected-->
				<p>Service Fee <span style="color:#009349;">$4.00</span></p>
				<p style="background:#F1F1F1;">Total Price <span style="color:#044E2D;">$21.00</span></p>
				
			</div>
			<div class="col-md-7 confirm-info-right">
				<p><span>Event Location</span>107 Rivington St, New York</p>
				<p><span>Venue</span>Brooklyn Center</p>
				<p><span>Name of Purchaser</span>Chris Williams</p>
				<p><span>Email Address</span>chris.williams@gmail.com</p>
				<p style="background:#EFF3F6;"><span>Will Call Pick-Up</span>Chris Williams</p><!--only shows up if willcall is selected-->
				<p style="background:#F8F9FD;"><span>Will Call Location</span>Corner of West Street and Greenpoint Av</p><!--only shows up if willcall is selected-->
				<p><span>Billing Address</span>67 West Street, Brooklyn, NY</p><!--only shows up if shipping is selected-->
				<p style="background:#D4E7E5;"><span>Shipping Address</span>Same as Billing Address</p><!--only shows up if shipping is selected-->
				<p style="background:#F1F1F1;"><span>CC to Charge</span>Mastercard XX90</p>
				<p style="text-align:center;"><a class="btn confirm-button">Confirm</a> <a class="btn cancel-button">Cancel</a></p>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer');?>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script> 
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