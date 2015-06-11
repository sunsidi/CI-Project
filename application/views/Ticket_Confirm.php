<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $ticket['cost_per_ticket'][0]['e_name']?> -  Ticket Confirmation | Wrevel - Discover Your World, Host & Experience Events</title>

<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<?php $this->load->view('header');?>


	<div class="col-md-6 col-md-offset-3" style="padding-top: 80px; padding-bottom: 45px;">
		<p style="color: white;text-align:center;font-size:25px;">Please review your order before continuing! </p>
		
		<div class="panel" style="border:none;border-top-left-radius: 10px; border-top-right-radius: 10px;margin-top:20px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
		<div class="panel-heading" style="background-color: #6CA5CC; height: 70px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
		    <p style="font-size: 30px;text-align: left; color: white; ">
			<?php echo $ticket['cost_per_ticket'][0]['e_name']?>
		    
		    <img src="<?php echo $PATH_IMG?>wrevel_logo.png"style="width:170px;z-index:1; float: right;margin-top:5px;"/>
		    </p>
		</div>
		
		    <div class="panel-body" style="background:#E2E9EE;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
			<div class="col-md-12 col-sm-12 col-xs-12" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
     
	    <p style="font-size: 150%;text-align:justify;">
		 <strong>Name</strong> <span class="pull-right"><?php
		 $ticket = $this->session->userdata('ticket');
		 echo $ticket['f_name']." ".$ticket['l_name']?></span>
	    </p>
             <p style="font-size: 150%;text-align: justify;">
		 <strong>Ticket Type</strong> <span class="pull-right"><?php echo $ticket['type']?></span>
	    </p>
	      <!--<p style="font-size: 150%;text-align: justify;">
		 Wrevenue &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  wrevenue
	    </p>-->
	       <p style="font-size: 150%;text-align: justify;">
		 <strong>Event Title</strong> <span class="pull-right"><?php echo $ticket['cost_per_ticket'][0]['e_name']?></span>
	    </p>
		<p style="font-size: 150%;text-align: justify;">
		<strong>Ticketing Price</strong> <span class="pull-right"><?php echo $ticket['ticket_price']?></span>
	    </p>
	       	<p style="font-size: 150%;text-align: justify;">
		<strong>Fees</strong> <span class="pull-right">
		<?php
			echo $ticket['fees']
			
		?></span>
	    </p>
	        <p style="font-size: 150%;text-align: justify;">
		<strong>Total Price</strong> <span class="pull-right">
		<?php
			echo $ticket['total_price']
		?></span>
	    </p>
		 <p style="font-size: 150%;text-align:justify;">
		 <strong>Description</strong>  
		 </br>
		 	<?php echo $ticket['cost_per_ticket'][0]['e_description'];
		 	?>
		 </p>
		 
		 <p style="font-size: 150%;text-align: justify;">
		 <strong>Date</strong> <span class="pull-right">
		 <?php
			$temp = $this->session->userdata('ticket');

			echo $temp['cost_per_ticket'][0]['e_date'];			
		?></span>
	    </p>
		 <p style="font-size: 150%;text-align: justify;">
		 <strong>Time</strong> <span class="pull-right">
		 <?php
			echo $temp['cost_per_ticket'][0]['e_start_time'];
		 ?></span>
	    </p>
		 <p style="font-size: 150%;text-align: justify;">
		<strong>Location</strong>  <span class="pull-right">
		<?php
			echo $temp['cost_per_ticket'][0]['e_address']."<br/>".$temp['cost_per_ticket'][0]['e_city']." ";
			echo $temp['cost_per_ticket'][0]['e_state']." , ".$temp['cost_per_ticket'][0]['e_zipcode'];
		?></span>
	    </p>
		 
		
			</div>
			
			
		</div>
		   
		</div>
		 <form method = "post" style="text-align: center; font-size: 20px;" action= "<?php echo base_url()."stripe_controller/charge/".$temp['cost_per_ticket'][0]['event_id']?>">
       			    <input type="radio" name="approve" value="true"> approve
			    <input type="radio" name="approve" value="false"> disapprove
			    <button type="submit" class="btn btn-lg" style="color: white; background-color: #006eaa; float: right;">Submit</button>
         	</form>
	    
	    
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