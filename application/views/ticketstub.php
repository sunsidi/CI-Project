<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ticket Stub | Wrevel - Discover Your World, Host & Experience Events</title>

<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
p{
margin:0;
}
.rotation{
 	transform: rotate(-90deg);
	-ms-transform: rotate(-90deg);
	-webkit-transform: rotate(-90deg);

	bottom: 45%;
	position: absolute;
	margin:0;
}
</style>
<body style="background:none;font-family:Monaco;">
<div class="container"> 
<div class="row">
	<div class="col-md-9 col-md-offset-2" style="padding-top: 40px; padding-bottom: 80px;padding-left:3%;padding-right:3%;font-weight:bold;">
		<div class="col-md-12">
			<div class="row" style="position:relative;">
				<div class="col-xs-1" style="background:#0087A7;height:380px;width:10%;">
					<img src="<?php echo $PATH_IMG?>wrevel_logo.png" class="rotation" style="width:200px;z-index:5;margin-left:-70px;"/>
				</div>
				<div class="col-xs-8" style="background:#E5E6E7 url('<?php echo $PATH_IMG?>background_ticket.png') no-repeat center center;background-size:auto 100%; height:380px;">
					<div style="width:100%;padding:20px;padding-left:0;">
					<img src="<?php echo $PATH_IMG?>color_bar.jpg" style="-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-ms-transform: rotate(270deg);-o-transform: rotate(270deg);transform: rotate(270deg);width:380px;position:absolute;margin-left:-197px;margin-top:162px;"/>
					<div style="padding:20px;padding-left:50px;position:relative;font-size:15px;">
					<p style="text-align:right;font-size:14px;">Type of Ticket</p>
					<h3 style="font-weight:bold;font-size:21px;">Event name</h3>
					<p style="font-size:18px;">Venue</p>
					<p style="margin-top:10px; font-weight:normal;">Street Address</p>
					<p style="font-weight:normal;">City, State Country</p>
					<p style="font-size:16px;margin-top:10px;">Time</p>
					<p style="font-weight:normal;margin-top:10px;font-size:13px;">Price: </p>
					<p style="font-weight:normal;font-size:13px;">Event terms</p>
					
					<p  style="font-weight:normal;font-size:14px;"><span style="display:inline-block;width:200px;margin-top:50px;">Order #: #</span>Purchased by: username</p>
					</div>
					</div>
				</div>
				<div class="col-xs-2" style="background:#F0F1F1;height:380px;">
					<div style="font-size:12px;padding:0;">
					<p class="rotation" style="left:0;margin-left:-50px;">Type of Ticket - $Price</p>
					<p class="rotation">Date Time</p>
					<img src="<?php echo $PATH_IMG?>barcode_ticket_mockup.png" style="margin-left:55px;margin-top:40px;"/>
					<!--<img src="<?php echo base_url().'application/controllers/barcode.php?barcode='.$ticket[$i]['barcode'].'&width=205&height=110'?>"/>-->
					</div>
				</div>
			</div>
			
		</div>
		   
	</div>
</div>	
</div>  

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