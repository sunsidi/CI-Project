<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Event</title>

<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<?php $this->load->view('header');?>

	<div class="col-md-6 col-md-offset-3">
		
		<div class="panel" style="background:none; border:none; box-shadow:none; color:white;border-radius:10px;">
    		<div class="panel-body" style="border-radius:10px;">
				<div class="row" style="border-top-left-radius:10px;border-top-right-radius:10px;">
        			<div class="col-md-6" style="background:#79749E; height:75px; text-align:center; padding-top:15px; border-top-left-radius:10px;">
            			<img src="<?php echo $PATH_IMG?>wrevel_logo.png"style="width:180px;z-index:1;"/>
        			</div>
         			<div class="col-md-6" style="background:#6CA5CC; height:75px; text-align:center; font-size:35px; padding:15px 10px 10px 0; border-top-right-radius:10px;">
            			<p>Success</p>
        			</div>
     			</div>
     			<div class="row" style="background:#E2E9EE; height:335px; text-align:center; padding:20px; font-size:20px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;color:black;">
     				
                    		<p style="margin-top:25px;">You&rsquo;re going to <?php echo $this->session->userdata('e_name')?>.</p>
                    		
                    		<p>Your order has been saved to <a style="color:black; text-decoration:underline;" href="<? echo base_url().'account/myaccount_ticketmanagement'?>" style="color:white;text-decoration:underline;">MyAccount - Events I&rsquo;m Attending.</a></p>
                    		
                    		<p><span style="color:#7ACF08;">&#x2713;</span> <?php echo 'Order #'.$this->session->userdata('ticket_id')?></p>
                    		<p><span style="color:#7ACF08;">&#x2713;</span> Your ticket has been sent to <?php echo $this->session->userdata('send_email')?></p>
                    		
                   <p style="color:white;"><a style="color:black; text-decoration:underline;" href="<?php echo base_url()."stripe_controller/print_ticket"?>"> Click here to email tickets</a></p>
                   
                   <?php echo form_open('stripe_controller/print_ticket');?>
                    <button type="submit" action = "<?php echo base_url()."stripe_controller/print_ticket"?>" class="btn print" style="font-size:20px;">Print Ticket and Receipt</button>
    			<?php echo form_close();?>
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
	<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script> 
</body>
</html>