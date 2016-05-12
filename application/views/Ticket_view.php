<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php $ticket = $this->session->userdata('ticket'); echo $ticket['cost_per_ticket'][0]['e_name']?> | Wrevel - Discover Your World, Host & Experience Events</title>

<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
	<div class="col-md-6 col-md-offset-3" style="padding-top: 40px; padding-bottom: 45px;font-family: Geneva,Tahoma,Verdana,sans-serif;">
		<div class="panel" style="border:none;border-top-left-radius: 10px; border-top-right-radius: 10px;">
		<div class="panel-heading" style="background-color: #4A90CB; height: 70px; border-top-left-radius: 10px; border-top-right-radius: 10px;padding:15px 30px;">
		    <p style="font-size: 30px;text-align: left; color: white;font-family:GillSans;">
			<?php $ticket = $this->session->userdata('ticket'); echo $ticket['cost_per_ticket'][0]['e_name']?>
		    
		    <img src="<?php echo $PATH_IMG?>wrevel_logo.png"style="width:150px;z-index:1; float: right; "/>
		    </p>
		</div>
		
		    <div class="panel-body" style="font-size:18px;background:#E2E9EE;">
			<div class="col-md-8 col-sm-8 col-xs-8" style="border-right-style: solid;border-right-color:#DDDDDD;border-right-width:1px;">
     
	    <p style="text-align: justify;">
		 <span style="font-family:GillSans;">Name</span> <span style="margin-left:100px;"><?php $temp_data = $this->session->userdata('ticket'); echo $temp_data['f_name'].$temp_data['l_name']?></span>
	    </p>
             <p style="text-align: justify;">
		 <span style="font-family:GillSans;">Ticket Type</span> <span style="margin-left:60px;"><?php echo $temp_data['type']?></span>
	    </p>
	      <!--<p style="text-align: justify;">
		 Wrevenue &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  wrevenue
	    </p>-->
	       <p style="text-align: justify;">
		 <span style="font-family:GillSans;">Event Title</span> <span style="margin-left:67px;"><?php echo $temp_data['cost_per_ticket'][0]['e_name']?></span>
	    </p>
		<p style="text-align: justify;">
		<span style="font-family:GillSans;">Ticketing Price</span> <span style="margin-left:38px;"><?php echo $temp_data['ticket_price']?></span>
	    </p>
	       	<p style="text-align: justify;">
		<span style="font-family:GillSans;">Fees</span> <span style="margin-left:114px;">
		<?php
			echo $temp_data['fees']
			
		?></span>
	    </p>
	        <p style="text-align: justify;">
		<span style="font-family:GillSans;">Total Price</span> <span style="margin-left:69px;">
		<?php
			echo $temp_data['total_price']
		?></span>
	    </p>
		 <p style="text-align: justify;">
		 <span style="font-family:GillSans;">Description</span>  
		 	<span style="margin-left:59px;">
			<?php echo $ticket['cost_per_ticket'][0]['e_description'];
		 	?></span>
		 </p>
		 <p style="text-align: justify;">
		 <span style="font-family:GillSans;">Date</span> <span style="margin-left:109px;">
		 <?php
			echo $temp_data['cost_per_ticket'][0]['e_date'];
					//echo unix_to_human($event[0]['e_end_time'])
					
		?></span>
	    </p>
		 <p style="text-align: justify;">
		 <span style="font-family:GillSans;">Time</span> <span style="margin-left:109px;">
		 <?php
			echo $temp_data['cost_per_ticket'][0]['e_start_time'];			
                ?></span>
	    </p>
		 <p style="text-align: justify;">
		<span style="font-family:GillSans;">Location</span> <span style="margin-left:84px;">
	    	<?php echo $temp_data['cost_per_ticket'][0]['e_address'];?></span></br>
	    	<span style="margin-left:152px;"><?php echo $temp_data['cost_per_ticket'][0]['e_city']." ";
			echo $temp_data['cost_per_ticket'][0]['e_state']." , ".$temp_data['cost_per_ticket'][0]['e_zipcode'];
		?></span>
	    </p>
		
			</div>
			
			<div class="col-md-4 col-sm-4 col-xs-4">
			    <img src="<?php echo $PATH_IMG?>2d.png"style="width:200px;z-index:1; "/>
			    <p style="font-size:9px;  margin-left: 5px;">
				<b>Disclaimer</b><br>
				Please bring a valid photo ID to the event with this ticket.
				Your name on the ticket must match with your photo ID.
				To prevent confusion, we only allow one ticket per person
				and one ticket per group in case of group purchase.
				All sales are final. No refund or exchange can be issued.
				Valid only for the event specified on this ticket
				<br>
				If you have any questions or concerns, feel free to email
				customer support at support@wrevel.com
			    </p>
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