<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>sample</title>

<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <?php if(isset($ticket)) {
            for($i = 0; $i < count($ticket); $i++) {?>
	<div class="col-md-6 col-md-offset-3" style="padding-top: 40px; padding-bottom: 45px;">
		<div class="panel" style="border:none;border-top-left-radius: 10px; border-top-right-radius: 10px;">
		<div class="panel-heading" style="background-color: #4A90CB; height: 70px; border-top-left-radius: 10px; border-top-right-radius: 10px;padding:15px 30px;">
		    <p style="font-size: 30px;text-align: left; color: white;font-family:GillSans;">
			<?php echo $ticket[$i]['e_name']?>
		    
		    <img src="<?php echo $PATH_IMG?>wrevel_logo.png"style="width:150px;z-index:1; float: right; "/>
		    </p>
		</div>
		
		    <div class="panel-body" style="font-size:18px;background:#E2E9EE;">
			<div class="col-md-8 col-sm-8 col-xs-8" style="border-right-style: solid;border-right-color:#DDDDDD;border-right-width:1px;">
            
            <p style="text-align: justify;">
		 <span style="font-family:GillSans;">Ticket Number</span> <span style="margin-left:30px;"><?php echo $ticket[$i]['id']?></span>
<<<<<<< HEAD
	    </p>
	    <p style="text-align: justify;">
		 <span style="font-family:GillSans;">Name</span> <span style="margin-left:100px;"><?php echo $ticket[$i]['fullname']?></span>
	    </p>
             <p style="text-align: justify;">
		 <span style="font-family:GillSans;">Ticket Type</span> <span style="margin-left:60px;"><?php echo $ticket[$i]['ticket_type']?></span>
=======
	    </p>-->
	    <p style="text-align: justify; margin-top: 20px;">
		 <span style="font-size: 15px;color: gray;font-family: ProximaNova-Light;">Who's Going?</span><span style="font-size: 20px;font-family:GillSans;margin-left:40px;"><?php echo ucfirst($ticket[$i]['fullname'])?></span>
	    </p>
             <p style="text-align: justify;">
		 <span style="font-size: 15px;color: gray;font-family: ProximaNova-Light;">Ticket Type</span> <span style="font-size: 20px;font-family:GillSans;margin-left:53px;"><?php echo ucfirst($ticket[$i]['ticket_type'])?></span>
	    </p>
	    <!--<p style="text-align: justify;">
		 <span style="font-size: 15px;color: gray;font-family: ProximaNova-Light;">Wrevenue</span> <span style="font-size: 20px;font-family:GillSans;margin-left:60px;">Wrevenue</span>
	    </p>-->
	    <p style="text-align: justify;">
		 <span style="font-size: 15px;color: gray;font-family: ProximaNova-Light;">Event Title</span> <span style="font-size: 20px;font-family:GillSans;margin-left:63px;"><?php echo $ticket[$i]['e_name']?></span>
>>>>>>> kevin_dev
	    </p>
	      <!--<p style="text-align: justify;">
		 Wrevenue &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  wrevenue
	    </p>-->
	       <p style="text-align: justify;">
		 <span style="font-family:GillSans;">Event Title</span> <span style="margin-left:67px;"><?php echo $ticket[$i]['e_name']?></span>
	    </p>
		<p style="text-align: justify;">
		<span style="font-family:GillSans;">Ticketing Price</span> <span style="margin-left:38px;"><?php echo '$'.$ticket[$i]['ticket_price']?></span>
	    </p>
	       	<p style="text-align: justify;">
		<span style="font-family:GillSans;">Fees</span> <span style="margin-left:114px;">
		<?php
			echo '$'.$ticket[$i]['fees']
			
		?></span>
	    </p>
	        <p style="text-align: justify;">
		<span style="font-family:GillSans;">Total Price</span> <span style="margin-left:69px;">
		<?php
			echo '$'.$ticket[$i]['total_price']
		?></span>
	    </p>
		 <p style="text-align: justify;">
		 <span style="font-family:GillSans;">Description</span>  
		 	<span style="margin-left:59px;">
			<?php echo $ticket[$i]['e_description']
		 	?></span>
		 </p>
		 <p style="text-align: justify;">
		 <span style="font-family:GillSans;">Date</span> <span style="margin-left:109px;">
		 <?php
			echo $ticket[$i]['e_date']
					//echo unix_to_human($event[0]['e_end_time'])
					
		?></span>
	    </p>
		 <p style="text-align: justify;">
		 <span style="font-family:GillSans;">Time</span> <span style="margin-left:109px;">
		 <?php
			echo $ticket[$i]['e_start_time']		
                ?></span>
	    </p>
		 <p style="text-align: justify;">
		<span style="font-family:GillSans;">Location</span> <span style="margin-left:84px;">
	    	<?php echo $ticket[$i]['e_address']?></span></br>
	    	<span style="margin-left:135px;font-size: 20px;font-family:GillSans;"><?php echo $ticket[$i]['e_city']." ";
                        if(isset($ticket[$i]['e_state']) && !empty($ticket[$i]['e_state'])) {echo $ticket[$i]['e_state']." , "; } if(isset($ticket[$i]['e_zipcode'])) { echo $ticket[$i]['e_zipcode'];};
		?></span>
	    </p>
		
			</div>
			
			<div class="col-md-4 col-sm-4 col-xs-4">
                            <img src="<?php echo base_url().'application/controllers/barcode.php?barcode='.$ticket[$i]['barcode'].'&width=205&height=120'?>">
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
<<<<<<< HEAD
=======
			    </div></center>
			</div>
			
			<div class="col-md-12" style="height: 52px;background-color: #CEDBE1;border-bottom-left-radius:10px; border-bottom-right-radius: 10px;">
			    <p style="font-size: 30px;text-align:center; color: black;font-family:GillSans;">
                                <?php if($ticket[$i]['ticket_type'] == 'free') echo 'FREE';
                                      else if($ticket[$i]['ticket_type'] == 'regular') echo 'GENERAL ADMISSION';
                                      else if($ticket[$i]['ticket_type'] == 'early bird') echo 'EARLY BIRD';
                                      else if($ticket[$i]['ticket_type'] == 'v.i.p.') echo 'VIP';?>
                            </p>
>>>>>>> kevin_dev
			</div>
		</div>
		   
		</div>
	</div>
    <?php }}?>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script> 
</body>
</html>