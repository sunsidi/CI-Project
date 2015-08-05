<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $ticket['cost_per_ticket'][0]['e_name']?> Ticket Confirmation | Wrevel - Discover Your World, Host & Experience Events</title>

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
			<a href="<?php echo base_url()."main/mywrevs"?>" class="btn"  style="float: right;border-radius:5px;font-size:17px;background: #ffffff;color: black;"><b>Back to event listing</b></a>
		</div>
		<div class="row confirm-info" style="font-weight:bold;margin-top:10px;">
			<div class="col-md-5 confirm-info-left">
                <?php
                    $ticket = $this->session->userdata('ticket');
                ?>
				<p style="background:#664B65;color:white;"><?php echo $ticket['cost_per_ticket']['0']['e_name'] ?><span><?php echo $ticket['cost_per_ticket']['0']['e_date'] ?></span></p>
                <?php for($i = 0; $i < count($event_ticket_types); $i++) {
//                    if ($ticket['quantity']['General6'] > 0) {
//                        echo '<p>General Admission | Nov 6 x' . $ticket['quantity']['General6'] . '<span style="color:#009349;">$' . $ticket['quantity']['General6'] * $ticket['e_price']['General6'] . '</span></p>';
//                    }
//                    if ($ticket['quantity']['General7'] > 0) {
//                        echo '<p>General Admission | Nov 7 x' . $ticket['quantity']['General7'] . '<span style="color:#009349;">$' . $ticket['quantity']['General7'] * $ticket['e_price']['General7'] . '</span></p>';
//                    }
//                    if ($ticket['quantity']['VIP6'] > 0) {
//                        echo '<p>VIP Admission | Nov 6 x' . $ticket['quantity']['VIP6'] . '<span style="color:#009349;">$' . $ticket['quantity']['VIP6'] * $ticket['e_price']['VIP6'] . '</span></p>';
//                    }
//                    if ($ticket['quantity']['VIP7'] > 0) {
//                        echo '<p>VIP Admission | Nov 7 x' . $ticket['quantity']['VIP7'] . '<span style="color:#009349;">$' . $ticket['quantity']['VIP7'] * $ticket['e_price']['VIP7'] . '</span></p>';
//                    }
                    if ($ticket['quantity'][$i] > 0) {
                        echo '<p>' . $ticket['type'][$i] . ' x ' . $ticket['quantity'][$i] . '<span style="color:#009349;">$' . $ticket['quantity'][$i] * $ticket['e_price'][$i] . '</span></p>';
                    }
                }
                    if ($ticket['mail'] == "mail") {
                        echo "<p style='background:#EFF3F6;'>Delivery Method <span>" . $ticket['mail'] . "</span></p>";
                        echo "<p>Delivery Charge <span style='color:#009349;'>$4.95</span></p><!--only shows up if shipping is selected-->";
                    } else if ($ticket['print'] == "print") {
                        echo "<p style='background:#EFF3F6;'>Delivery Method <span>" . $ticket['print'] . "</span></p>";
                    } else if ($ticket['will_call'] == "will call") {
                        echo "<p style='background:#EFF3F6;'>Delivery Method <span>" . $ticket['will_call'] . "</span></p>";
                    } else {
                        echo "<p style='background:#EFF3F6;'>Delivery Method <span>you don't choose delivery method</span></p>";
                    }
                ?>

				<p>Service Fee <span style="color:#009349;">$<?php echo $ticket['fees']?></span></p>
				<p style="background:#F1F1F1;">Total Price <span style="color:#044E2D;">$<?php echo $ticket['total_price']?></span></p>
				
			</div>
			<div class="col-md-7 confirm-info-right">
				<p><span>Event Location</span>107 Rivington St, New York</p>
				<p><span>Venue</span>Brooklyn Center</p>
				<p><span>Name of Purchaser</span><?php
                    $ticket = $this->session->userdata('ticket');
                    echo $ticket['f_name']." ".$ticket['l_name']?> </p>
				<p><span>Email Address</span><?php echo $ticket['email'] ?></p>
                <?php if($ticket['person_pickup']!=""){?>
				<p style="background:#EFF3F6;"><span>Will Call Pick-Up</span><?php echo $ticket['person_pickup'] ?></p><!--only shows up if willcall is selected-->
                <p style="background:#F8F9FD;"><span>Will Call Location</span>Corner of West Street and Greenpoint Av</p><!--only shows up if willcall is selected-->
                <?php } ?>
<!--                <p><span>Billing Address</span>67 West Street, Brooklyn, NY</p><!--only shows up if shipping is selected-->
                <?php if($ticket['mail']=="mail"){?>
                <p style="background:#D4E7E5;"><span>Shipping Address</span><?php echo $ticket['address']." , ".$ticket['city']." , ".$ticket['state']?></p><!--only shows up if shipping is selected-->
                <?php } ?>
<!--                <p style="background:#F1F1F1;"><span>CC to Charge</span>Mastercard XX90</p>-->
				  <form method = "post" style="text-align: center; font-size: 20px;" action= "<?php echo base_url()."stripe_controller/charge/".$ticket['cost_per_ticket'][0]['event_id']?>">
                    <p style="text-align:center;"><button id="confirm_button" name="approve" type="submit" class="btn confirm-button" value="approve">Confirm</button>
                        <button id="cancel_button" type="submit" name="disapprove" class="btn cancel-button" value="disapprove">Cancel</button>
                    </p>
                </form>

			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer');?>

<script type="text/javascript">
    document.getElementById("cancel_button").onclick=function(){changeSubmitToCancel()};
    function changeSubmitToCancel()
    {
        document.getElementById("confirm_button").setAttribute('name', 'disapprove');

    }
</script>


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