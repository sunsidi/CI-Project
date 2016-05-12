<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>My Account - Events Attending | Wrevel - Discover Your World, Host & Experience Events</title>
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script>
jQuery(document).ready(function () {
    //hide a div after 3 seconds
    setTimeout(function(){ jQuery("#sentMessage").hide(); }, 5000);
});
jQuery(document).ready(function () {
    //hide a div after 3 seconds
    setTimeout(function(){ jQuery("#alertMessage").hide(); }, 5000);
});
</script>
</head>

<body>

<?php $this->load->view('header');?>

<!--content
==============================================-->
<div id='sentMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:80px;width: 500px; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>
  <div class="container" style="padding-bottom:50px;">
  <?php if(isset($_POST['submit'])){ ?><p id="alertMessage" style="margin-left:auto;margin-right:auto; margin-top:80px;width: 40%; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">Cancellation request received.<br> We will review it and get back to you soon.</p> <?php } ?>
	<div class="row" style="margin-top:110px;">
    
		<div class="col-md-3 col-md-offset-1">
        	<div class="panel panel-default" style="border:none;">
  				<div class="panel-heading" style="background:#628DA3;color:white;">
    				<h3 class="panel-title text-center" style="font-size:28px;">My Account</h3>
  				</div>
  				<div class="panel-body" style="background:#DDE0E7;">
   					<a href="<? echo base_url()?>account/myaccount_accountinfo"><button type="button" class="btn btn-lg btn-block account">Account Information</button></a>
                    <a href="<? echo base_url()?>account/myaccount_eventattending" style="color:#628DA3;"><button type="button" class="btn btn-lg btn-block account-active">Events I&rsquo;m Attending</button></a>
                    <a href="<? echo base_url()?>account/myaccount_eventlisting"><button type="button" class="btn btn-lg btn-block account">My Event Listings</button></a>
                    <a href="<? echo base_url()?>account/myaccount_ticketmanagement"><button type="button" class="btn btn-lg btn-block account">Ticket Sales Management</button></a>
					<a href="<? echo base_url()?>account/myaccount_stats"><button type="button" class="btn btn-lg btn-block account">Statistics and Analysis</button></a>
  				</div>
			</div>           
        </div>
        <div class="col-md-7">
        	<div class="panel panel-default" style="border:none; background:#DFE2E9;">
  				<div class="panel-heading" style="background:none; border:none;">
    				<h3 class="panel-title text-center" style="font-size:25px;padding-top:20px;"><img src="<?php echo $PATH_IMG?>ticket_order_icon.png" style="vertical-align:middle;"/> Event Status/Ticket Orders</h3>
  				</div>
  				<div class="panel-body" style="height:800px; overflow-y:auto;">
   					<div class="table-responsive">
						<table>
                            <thead style="color:#1B74BC; font-weight:normal;">
                                <th>Event Id</th>
                                <th>Event Name</th>
                                <th>Event Date</th>
                                <!--<th>Qty</th>-->
                                <th>Price</th>
                                <!--<th>Order Date</th>-->
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <?php
                                    if(isset($attending_events)) {
                                    for ($i = 0;$i < count($attending_events);$i++){?>
                                        <tr>
                                            <td><?php echo $attending_events[$i]['event_id'];?></td>
                                            <td><a href="<?php echo base_url().'event/event_info/latest/'.$attending_events[$i]['event_id']?>"><p><?php echo $attending_events[$i]['e_name']?></p></a></td>
                                            <td><?php echo $attending_events[$i]['e_date'];?></td>
                                            <td><?php echo $attending_events[$i]['e_price']?></td>
                                            <td>Attending</td>
                                            <!--<td><a href="#" onclick="removal()">[Remove]</a></td>-->
                                            <?php if($attending_events[$i]['ticket']) {?>
                                            <td><a href="<?php echo base_url().'account/view_ticket/'.$attending_events[$i]['event_id'].'/'. $attending_events[$i]['ticket'][0]['ticket_id']?>" target="_blank">[View Order/Print Ticket]</a></td>
                                            <td><a href="#" data-toggle="modal" data-target="#cancel<?php echo $i; ?>">[Cancel Order]</a></td>
                                            <?php }?>
                                        </tr>
    										<!--</div>
                                            
  										</div>-->
  					
                                <?php }} else {?>
                                <tr>You have no attending events right now</tr>
                                <?php }?>
                            </tbody>
                        </table>
					</div>
  				</div>
			</div> 
			
			<?php
                                    if(isset($attending_events)) {
                                    for ($i = 0;$i < count($attending_events);$i++){?>
                                    
			<div class="modal fade" id="cancel<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  				<div class="modal-dialog">
    					<div class="modal-content" style="text-align:center;">
      					<div class="modal-header" style="background:#628DA3; color:white;">
       						 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        					<h4 class="modal-title" id="myModalLabel" style="font-size:30px;"><i class="fa fa-times"></i> Cancel Order</h4>
      					</div>
      					<div class="modal-body" style="background:#C2D2DC;padding:5%;">
        					<form class="form-horizontal" action="<?php echo base_url().'account/cancel_order'?>" method="post">
							<fieldset>
    							<input name ="eventID" type="hidden" value="<?php echo $attending_events[$i]['event_id'];?>" >
    							<input name="eventName" type="hidden" value="<?php echo $attending_events[$i]['e_name']?>">
    							
    							<div class="form-group">Please fill out your reason for cancellation.<br>
    							We will review it and get back to you within 48 hours.
    							</div>&nbsp;
    							
            						<!-- To input-->
            						<div class="form-group">
              							<div class="col-md-2 col-sm-2 col-xs-2" for="name" style="">To</div>
              								<div style="text-align:left;">
                							&nbsp; &nbsp; Wrevel
              								</div>
            							</div>
    
            						<!--Email input-->
            						<div class="form-group">
              							<div class="col-md-2 col-sm-2 col-xs-2" for="email" style="">Email</div>
              								<div class="col-md-9 col-sm-9 col-xs-9">
                							<input disabled value="<?php echo $this->session->userdata('email')?> "id="name" name="name" type="text" class="form-control" style="width: 350px;">
              								</div>
            							</div>

            						<!-- Subject input-->	    
	    						<div class="form-group">
              							<div class="col-md-2 col-sm-2 col-xs-2" for="email" style="">Reason for Cancellation</div>
              								<div class="col-md-9 col-sm-9 col-xs-9">
                							<input id="name" name="reason" type="text" class="form-control" style="width: 350px;">
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
            						<div class="form-group" style="padding:20px;">
              						<div class="pull-right">
                						<button type="submit" class="btn account-btn" name="submit">Send</button>
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
         <?php }} ?>   		
<!--end of content-->

<?php $this->load->view('footer');?>
  
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
	<script>
		function removal(){
			confirm("Are you sure?");
		}
	</script>
		<script src="https://code.jquery.com/jquery.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
   
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>-->
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