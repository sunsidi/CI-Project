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
		<div class="panel" style="border:none;border-radius: 10px; background-color: #E7ECEF">
		
		<!--<div class="panel-heading" style="background-color: #4A90CB; height: 70px; border-top-left-radius: 10px; border-top-right-radius: 10px;padding:15px 30px;">
		    <p style="font-size: 30px;text-align: left; color: white;font-family:GillSans;">
			<?php echo $ticket[$i]['e_name']?>
		    
		    <img src="<?php echo $PATH_IMG?>wrevel_logo.png"style="width:150px;z-index:1; float: right; "/>
		    </p>
</div>-->
	    <div class="col-md-7 col-sm-7 col-xs-7" style="height: 500px;border-top-left-radius: 10px;border-right-style: solid;border-right-color:#DDDDDD;border-right-width:1px;background-color: #E7ECEF;">
            <p style="font-size: 35px;text-align:center; color: black;font-family:GillSans;margin-top: 20px;">
			<?php echo $ticket[$i]['e_name']?></p>
            <!--<p style="text-align: justify;">
		 <span style="font-family:GillSans;">Ticket Number</span> <span style="margin-left:30px;"><?php echo $ticket[$i]['id']?></span>
	    </p>-->
	    <p style="text-align: justify; margin-top: 20px;">
		 <span style="font-size: 15px;color: gray;font-family: ProximaNova-Light;">Who's Going?</span><span style="font-size: 20px;font-family:GillSans;margin-left:40px;"><?php echo $ticket[$i]['fullname']?></span>
	    </p>
             <p style="text-align: justify;">
		 <span style="font-size: 15px;color: gray;font-family: ProximaNova-Light;">Ticket Type</span> <span style="font-size: 20px;font-family:GillSans;margin-left:53px;"><?php echo $ticket[$i]['ticket_type']?></span>
	    </p>
	    <p style="text-align: justify;">
		 <span style="font-size: 15px;color: gray;font-family: ProximaNova-Light;">Wrevenue</span> <span style="font-size: 20px;font-family:GillSans;margin-left:60px;">Wrevenue</span>
	    </p>
	    <p style="text-align: justify;">
		 <span style="font-size: 15px;color: gray;font-family: ProximaNova-Light;">Event Title</span> <span style="font-size: 20px;font-family:GillSans;margin-left:63px;"><?php echo $ticket[$i]['e_name']?></span>
	    </p>
		<!--<p style="text-align: justify;">
		<span style="font-family:GillSans;">Ticketing Price</span> <span style="margin-left:38px;"><?php echo '$'.$ticket[$i]['ticket_price']?></span>
	    </p>
	       	<p style="text-align: justify;">
		<span style="font-family:GillSans;">Fees</span> <span style="margin-left:114px;">
		<?php
			echo '$'.$ticket[$i]['fees']
			
		?></span>
	    </p>-->
	        <p style="text-align: justify;">
		<span style="font-size: 15px;color: gray;font-family: ProximaNova-Light;">Total Price</span> <span style="font-size: 20px;font-family:GillSans;margin-left:62px;">
		<?php
			echo '$'.$ticket[$i]['total_price']
		?></span>
	    </p>
		 <!--<p style="text-align: justify;">
		 <span style="font-family:GillSans;">Description</span>  
		 	<span style="margin-left:59px;">
			<?php echo $ticket[$i]['e_description']
		 	?></span>
		 </p>-->
		 <p style="text-align: justify;">
		 <span style="font-size: 15px;color: gray;font-family: ProximaNova-Light;">Date</span> <span style="font-size: 20px;font-family:GillSans;margin-left:100px;">
		 <?php
			echo $ticket[$i]['e_date']
					//echo unix_to_human($event[0]['e_end_time'])
					
		?></span>
	    </p>
		 <p style="text-align: justify;">
		 <span style="font-size: 15px;color: gray;font-family: ProximaNova-Light;">Time</span> <span style="font-size: 20px;font-family:GillSans;margin-left:100px;">
		 <?php
			echo $ticket[$i]['e_start_time']		
                ?></span>
	    </p>
		 <p style="text-align: justify;">
		<span style="font-size: 15px;color: gray;font-family: ProximaNova-Light;">Location</span> <span style="font-size: 20px;font-family:GillSans;margin-left:75px;">
	    	<?php echo $ticket[$i]['e_address']?></span></br>
	    	<span style="margin-left:135px;font-size: 20px;font-family:GillSans;"><?php echo $ticket[$i]['e_city']." ";
			echo $ticket[$i]['e_state']." , ".$ticket[$i]['e_zipcode'];
		?></span>
	    </p>
		
			</div>
			
			<div class="col-md-5 col-sm-5 col-xs-5" style="height: 500px;border-top-right-radius: 10px; padding-bottom: 20px;
background: -ms-linear-gradient(top, #D4E0E4, #E3E9ED);       /* IE 10 */
background: -o-linear-gradient(top, #D4E0E4,#E3E9ED);  /* Opera 11.10+*/ 
background:-moz-linear-gradient(top,#D4E0E4,#E3E9ED); 
background: -webkit-linear-gradient(top, #D4E0E4,#E3E9ED);   /*Safari5.1 Chrome10+*/
background:-webkit-gradient(linear, 0% 0%, 0% 100%,from(#D4E0E4), to(#E3E9ED));">
			    <center><img src="<?php echo $PATH_IMG?>wrevel_icon_for_ticket.png"style="width:170px;z-index:1;margin-top: 10px;"/></center>
                            <center><img style="    -webkit-transform: rotate(27deg);
    -moz-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg); margin-top: 50px;"src="<?php echo base_url().'application/controllers/barcode.php?barcode='.$ticket[$i]['barcode'].'&width=205&height=150'?>"></center>
			    <center><div style="background-color: white; border:solid 1px black; margin-top:40px;width: 95%;padding: 1px 10px;">
			    <p style="margin-top: 5px; font-size:9px; text-align: justify; width: 100%;font-family: ProximaNova-Light;">
				<b style="font-family:GillSans;">Disclaimer</b><br><br>
				Please bring a valid photo ID to the event with this ticket.
				Your name on the ticket must match with your photo ID.
				To prevent confusion, we only allow one ticket per person
				and one ticket per group in case of group purchase.
				All sales are final. No refund or exchange can be issued.
				Valid only for the event specified on this ticket
				<br><br>
				If you have any questions or concerns, feel free to email
				customer support at support@wrevel.com
			    </p>
			    </div></center>
			</div>
			
			<div class="col-md-12" style="height: 52px;background-color: #CEDBE1;border-bottom-left-radius:10px; border-bottom-right-radius: 10px;">
			    <p style="font-size: 30px;text-align:center; color: black;font-family:GillSans;">
			GENERAL ADMISSION</p>
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