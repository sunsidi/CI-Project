<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Toast of Brooklyn | Wrevel - Discover Your World, Host & Experience Events</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/event-lightbox.css" rel="stylesheet">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<meta name="description">

<script src="https://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false"
            type="text/javascript"></script> 
<script>
jQuery(document).ready(function () {
    //hide a div after 3 seconds
    setTimeout(function(){ jQuery("#sentMessage").hide(); }, 5000);
});
</script>

<style>

<!--@media (max-width:430px){
	
	.comment-section{
		width:100%;
		height:300px;
		font-size:12px;
	}
	.status-bar{
	border-top-right-radius:0;
	}
}-->



</style>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "508ee0b6-1f7c-4daa-827e-d76d4d266558", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>

<body>
<?php $this->load->view('header');?>

<!--content
==============================================-->
<div id='sentMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:20px;width: 40%; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>
<div class="container" style="padding-bottom:50px;background:#A25062;">
<div class="toastofbrooklyn" style="margin-top:100px; margin-left:auto;margin-right:auto;">
		<div class="row" style="background:#664B65;color:white;padding:1.5% 3%;">
			<div class="col-md-12">
				<strong style="font-size:17px;">Toast of Brooklyn</strong>  <span style="float:right;">FRI, NOV 6 to SAT, NOV 7</span>
			</div>
        </div>
		<div class="row" style="margin-top:10px;">
			<div class="col-md-5" style="padding-left:0;">
				<div class="row toast_padding" style="background:white;margin-left:0;margin-right:0;padding-left:5%;position:relative;">
					<p><img src="<?php echo $PATH_IMG?>/RMG_LOGO_1.jpg" style="width:80px;float:left;"/> <span style="position:absolute;top:20%;left:50%;">Hosted by </br> <strong>Rockstone Media Group</strong></span></p>
					
					<!--<div>
						<img src="<?php echo $PATH_IMG?>/RMG_LOGO_1.jpg" style="width:100px;"/>
					</div>
					<div>
					<p>Hosted by</p>
					<p><strong>Rockstone Media Group</strong></p>
					</div>-->
				</div>
				
				<div style="margin-top:10px;">
					<div style="width:25%;float:left;padding-right:5px;">
						<div style="background:white;text-align:center;padding:10px;">
							123 <i class="fa fa-heart-o"></i>
						</div>
					</div>
					<div style="width:25%;float:left;padding-right:5px;padding-left:5px;">
						<div style="background:#F0F1F1;text-align:center;padding:10px;">
							<i class="fa fa-share-square-o"></i>
						</div>
					</div>
					<div style="width:25%;float:left;padding-right:5px;padding-left:5px;">
						<div style="background:#F0F1F1;text-align:center;padding:10px;">
							<i class="fa fa-users"></i>
						</div>
					</div>
					<div style="width:25%;float:left;padding-left:5px;">
						<div style="background:#E9EFF3;text-align:center;padding:5.5px;">
							<span class="icon-calendar_icon" style="font-size:25px;"></span>
						</div>
					</div>
				</div>
				
				<div class="row" style="margin-left:0;margin-right:0;">
					<a href="#" class="toast_status">I'm Going</a>
					<a href="#" class="toast_status">Maybe</a>
					<a href="#" class="toast_status">No</a>
				</div>
				
				
				
				<div style="background:white;text-align:center;margin-top:10px;padding:20px 10%;line-height: 100%;">
					<p><strong>Nov 6 at 5:00PM</strong></p>
					<p><strong>Nov 7 at 5:00PM</strong></p>
					<hr style="border-color:black;">
					<p><strong>Brooklyn Center</strong></p>
					<hr style="border-color:black;">
					<p><strong>107 Rivington Street</strong></p>
					<p>New York, NY</p>
					<hr style="border-color:black;">
					<p>Tickets Available from <strong>$20 - $40</strong></p>
					<hr style="border-color:black;">
					<p>This event is for ages 21 and over</p>
				</div>
				
				<a href="#" class="btn toast_buy" data-toggle="modal" data-target="#basicModal">Buy Tickets Now</a>

				<!--buy ticket-->
                <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
					<div class="modal-dialog" style="width:80%; ">
					  <div class="modal-content" style="background-color: transparent; box-shadow: none; border-color: transparent;">
						  <div class="panel" style="background-color: transparent; box-shadow: none; border-color: transparent;">
				      
							  <div class="panel-heading" style="background-color: #2BB473; height: 55px;">
								  <p style="font-size: 150%; color: white;text-align: center;">
									  <b>BUY TICKETS NOW</b>
								  </p>
					  
								   <a href="#" data-dismiss="modal" class="btn"  style="float: right;border-radius:5px;font-size:17px;background: #ffffff;color: black; margin-top: -43px;"><b>Back to event listing</b></a>
				  
							  </div>
							  
							  <div class="panel-heading" style="background-color: #513953; height: 55px;">
								  <span style="font-size: 150%; color: white;text-align: left;">
									  <b>Toast of Brooklyn</b>
								  </span>
					  
								  <span style="font-size: 110%; color: white;float: right;margin-top: 10px;">
									  FRI, NOV 6 or SAT, NOV 7
								  </span>
							  </div>
						  
						  <div class="panel-body" style="text-align:center; padding: 10px 0px;">
						      <div class="col-md-5" style="padding: 0px;">
							  <div style="background-color: white; padding: 30px; height: 300px; font-size: 17px;">
							  <span><b>Nov 6</b> <span style="color: grey;">at</span> <b>5:00pm</b></span><br/>
							  <span><b>Nov 7</b> <span style="color: grey;">at</span> <b>5:00pm</b></span>
							  <hr style="margin: 10px; border-width: 2px; border-color: black;"/>
							  <span><b>Brooklyn Center</b></span><br/>
							  <hr style="margin: 10px;border-width: 2px; border-color: black;"/>
							  <span><b>107 Rivington Street</b> <span style="color: grey;">New York</span></span><br/>
							  <hr style="margin: 10px;border-width: 2px; border-color: black;"/>
							  <span><span style="color: grey;">Tickets available from</span> <b>$20-$40</b></span><br/>
							  <hr style="margin: 10px;border-width: 2px; border-color: black;"/>
							  <span style="color: grey;">This event is for ages 21 and over</span><br/>
							  </div>
				  
						      </div>
						      <div class="col-md-7" style="padding: 0px 10px;">
							  <div style="background-color: #ffffff; padding: 50px 70px; text-align: left;">
							  <p style="font-size:17px;">
							  'Toast Of Brooklyn' - A Wine and Food Festival 2013" on September 14th.A Wine and Food Festival 2013" on September 14th.
							  This Fall festival will combine the distinctive and eclectic taste of Brooklyn's
							  culinary experience with wines and spirits from around the world.
							  Join us for an exciting journey, as guests go on a taste-tour in the elegantly
							  redesigned Courtyard and grand tenting of Bedford Stuyvesant Restoration Plaza.
							  Designed to capture the feel of an...<br/>
							  <a href="#" style="float: right;">Read More</a>
							  </p>
							  </div>
						      </div>
						  </div>
                              <form class="form-horizontal" role="form" method="post" action="<?php echo base_url()."stripe_controller/load_confirm/".$event[0]['event_id']?>" novalidate>

                              <div class="panel-heading" style="background-color: #2c5277; text-align: center;">
								  <span style="font-size: 150%; color: white;">
									  Tickets Available
								  </span>
							  </div>
							  <div class="panel-body" style="text-align:center; background: white;">
							      <div class="col-md-6" style="background: #eaf0f4; text-align: left; font-size: 17px; padding: 5px;">Ticket Type</div>
							      <div class="col-md-2" style="background: #eaf0f4;font-size: 17px;padding: 5px;">Price($)</div>
							      <div class="col-md-4" style="background: #eaf0f4;font-size: 17px;padding: 5px;">Quantity</div>
							      
							      <div class="col-md-6" style="height: 80px; margin-top: 20px; text-align: left;">
								  <span style="font-size: 20px;">General Admission I <span style="color: #05406F">Nov 6</span><br/></span>
								  <span style="color: grey;">Includes general access to event and<br/>
								  unlimited food and drink</span>
							      </div>
							      <div id="span_first_price_1" class="col-md-2" style="color: #009344; height: 80px; margin-top: 20px; font-size: 20px;">20.00</div>
							      <div class="col-md-4" style="height: 80px; margin-top: 20px;"><a href="javascript:chkAddAmount(1, -1)" onfocus="this.blur();">
							      <span class="icon-minus_box" style="font-size: 40px;vertical-align: middle;" align="absmiddle" /></a>&nbsp;
							      <input id="input_count_1" name="input_count_1" type="text" class="input_sl" value="0" style="width: 50px; text-align: center; height: 50px; border: solid 2px grey"/>
							      &nbsp;<a href="javascript:chkAddAmount(1,1)" onfocus="this.blur();">
							      <span class="icon-plus_box" style="font-size: 35px;vertical-align:middle;" align="absmiddle" /></a>
							      </div>
							      
							      <div class="col-md-12">
							      <hr style="border-width: 2px; border-color: black;"/>
							      </div>
							      
							      <div class="col-md-6" style="height: 80px; text-align: left;">
								  <span style="font-size: 20px;">General Admission I <span style="color: #05406F">Nov 7</span><br/></span>
								  <span style="color: grey;">Includes general access to event and<br/>
								  unlimited food and drink</span>
							      </div>
							      <div id="span_first_price_2" class="col-md-2" style="color: #009344; height: 80px; font-size: 20px;">20.00</div>
							      <div class="col-md-4" style="height: 80px;"><a href="javascript:chkAddAmount(2, -1)" onfocus="this.blur();">
							      <span class="icon-minus_box" width="55" height="55" align="absmiddle" /></a>&nbsp;
							      <input id="input_count_2" name="input_count_2" type="text" class="input_sl" value="0"/>
							      &nbsp;<a href="javascript:chkAddAmount(2,1)" onfocus="this.blur();">
							      <span class="icon-plus_box" width="15" height="15" align="absmiddle" /></a>
							      </div>
							      
							      <div class="col-md-12">
							      <hr style="border-width: 2px; border-color: black;"/>
							      </div>
							      
							      <div class="col-md-6" style="height: 100px; text-align: left;">
								  <span style="font-size: 20px;">VIP Admission I <span style="color: #05406F">Nov 6</span><br/></span>
								  <span style="color: grey;">Access to VIP Lounge<br/>
								  Includes general access to event and<br/>
								  unlimited food and drink</span>
							      </div>
							      <div id="span_first_price_3" class="col-md-2" style="color: #009344; height: 100px; font-size: 20px;">40.00</div>
							      <div class="col-md-4" style="height: 100px;"><a href="javascript:chkAddAmount(3, -1)" onfocus="this.blur();">
							      <span class="icon-minus_box" width="15" height="15" align="absmiddle" /></a>&nbsp;
							      <input id="input_count_3" name="input_count_3" type="text" class="input_sl" value="0"/>
							      &nbsp;<a href="javascript:chkAddAmount(3,1)" onfocus="this.blur();">
							      <span class="icon-plus_box"  width="15" height="15" align="absmiddle" /></a>
							      </div>
				  
							      <div class="col-md-12">
							      <hr style="border-width: 2px; border-color: black;"/>
							      </div>
							      
							      <div class="col-md-6" style="height: 100px; text-align: left;">
								  <span style="font-size: 20px;">VIP Admission I <span style="color: #05406F">Nov 7</span><br/></span>
								  <span style="color: grey;">Access to VIP Lounge<br/>
								  Includes general access to event and<br/>
								  unlimited food and drink</span>
							      </div>
							      <div id="span_first_price_4" class="col-md-2" style="color: #009344; height: 100px; font-size: 20px;">40.00</div>
							      <div class="col-md-4" style="height: 100px;"><a href="javascript:chkAddAmount(4, -1)" onfocus="this.blur();">
							      <span class="icon-minus_box" width="15" height="15" align="absmiddle" /></a>&nbsp;
							      <input id="input_count_4" name="input_count_4" type="text" class="input_sl" value="0"/>
							      &nbsp;<a href="javascript:chkAddAmount(4,1)" onfocus="this.blur();">
							      <span class="icon-plus_box"  width="15" height="15" align="absmiddle" /></a>
							      </div>
							  </div>
							  
							  <div class="panel-heading" style="background-color: #2c5277; text-align: center; margin-top: 10px;">
								  <span style="font-size: 150%; color: white;">
									  Payment and Delivery Information
								  </span>
							  </div>
							  
						      <div class="panel-body" style="text-align:center; font-size:15px; background-color: #ffffff;">
<!--                                  id="span_sumPirce"-->
						      <div class="col-md-5">
						      <div class="panel" style="background-color: transparent;border-color: black;">
				  
							  <div class="panel-heading" style="background-color: #1a1718; text-align: center;">
								  <span style="font-size: 100%; color: white;">
									  Price Breakdown
								  </span>
							  </div>
							  <div class="panel-heading" style="background-color: #513953; text-align: center; border-radius: 0px;height: 42px;">
								  <span style="font-size: 100%; color: white; float: left;">
									  Toast of Brooklyn
								  </span>
								  <span style="font-size: 100%; color: white; float: right;">
									  11/6 - 11/7
								  </span>
							  </div>
							  
							  <div class="panel-body" style="text-align:center; font-size:15px;">
							      <div class="admission1" hidden><span style="float: left;">General Admission I Nov 6 x </span><span id="span_subtotal_num_1" style="float: left;"> 1</span><span id="span_subtotal_price_1" style="float:right; color:#009344; ">20.00</span><span style="float:right; color:#009344;">$</span><br/><br/></div>
                                  <div class="admission2" hidden><span style="float: left;">General Admission I Nov 7 x </span><span id="span_subtotal_num_2" style="float: left;"> 1</span><span id="span_subtotal_price_2"style="float:right; color:#009344; ">40.00</span><span style="float:right; color:#009344;">$</span><br/><br/></div>
                                  <div class="admission3" hidden><span style="float: left;">VIP Admission I Nov 6 x </span><span id="span_subtotal_num_3" style="float: left;"> 1</span><span id="span_subtotal_price_3"style="float:right; color:#009344; ">40.00</span><span style="float:right; color:#009344;">$</span><br/><br/></div>
                                  <div class="admission4" hidden><span style="float: left;">VIP Admission I Nov 7 x </span><span id="span_subtotal_num_4" style="float: left;"> 1</span><span id="span_subtotal_price_4"style="float:right; color:#009344; ">40.00</span><span style="float:right; color:#009344;">$</span><br/><br/></div>
							      <div style="background:#eaf0f4; height: 20px; ">
							      <span style="float: left;">Delivery Method</span><span id="delivery_name" style="float:right; color: #5f6063;">Standard Shipping</span>
							      </div><br/>
							      <span style="float: left;">Delivery Charge</span><span id="deliveryCost" style="float:right; color:#009344; ">0</span><span style="float:right; color:#009344;">$</span><br/><br/>
							      <span style="float: left;">Service Fee</span><span id="serviceFee" style="float:right; color:#009344; ">4.00</span><span style="float:right; color:#009344;">$</span><br/><br/>
							      <div style="background:#ededed; height: 20px; ">
							      <span style="float: left;">Total Price</span><span style="float:right; color:#004A22; "><span id="span_sumPirce"style="float:right; color:#009344; ">0</span><span style="float:right; color:#009344;">$</span></span>
							      </div>
							  </div>
							  
						      </div>
				  
						      </div>
						      <div class="col-md-7">
							  <div class="col-md-3" style="text-align: left; font-size: 15px; padding: 40px;"><b><span>Select a <br/>Delivery <br/>Method</span></b></div>
							  <div class="col-md-3">
							      <button id="delivery1" name="will_call" type="button" class="btn btn-lg delivery_type willcall">
								  <span class="icon-willcall_icon" style="font-size: 80px; color: black;"></span><br/>
								  <span style="color: black;font-size: 15px;">Will Call</span><br/>
								  <span style="color: grey; font-size: 13px;">Free</span>
                                  <input id="input_will_call" name="will_call_input" type="text" value="will call" hidden>
							  </div>
							  <div class="col-md-3">
							      <button id="delivery2" name="print" type="button" class="btn btn-lg delivery_type print">
								  <span class="icon-printathome_icon" style="font-size: 80px; color: black;"></span><br/>
								  <span style="color: black;font-size: 15px;">Print at Home</span><br/>
								  <span style="color: grey; font-size: 13px;">Free</span></button>
                                  <input id="input_print" name="print_input" type="text" value="print" hidden>
							  </div>
							  <div class="col-md-3">
							      <button id="delivery3" name="mail" type="button" class="btn btn-lg delivery_type shipping">
								  <span class="icon-standardshipping_icon" style="font-size: 80px; color: black;"></span><br/>
								  <span style="color: black;font-size: 15px;">Standard Shipping</span><br/>
								  <span style="color: grey; font-size: 13px;">$4.95</span></button>
                                  <input id="input_mail" name="mail_input" type="text" value="mail" hidden>
							  </div>
							
							<div class="col-md-12 willcall_info" style="display:none;margin-top:20px;" hidden>
							  <input name= 'person_pickup' type="text" class="form-control" placeholder="Person picking up ticket" required style=" background: #e4e5e7; height: 50px;">
							</div>	
							
							<div class="col-md-12 shipping_info" style="display:none;margin-top:20px;" hidden>
							  <input name= 'address' type="text" class="form-control" placeholder="Address" required style=" background: #e4e5e7; height: 50px;">
							  <input name= 'city' type="text" class="form-control" placeholder="City" required style="width: 50%;float: right; background: #e4e5e7; height: 50px;margin-top:10px;">
							  <select name="state" type="text" style="height:50px;padding:4px;float:left;width:45%;margin-top:10px;background:#E4E5E7;">
							     <option value="" selected="selected">State</option> 
								<option value="AK">AK</option>
								<option value="AL">AL</option>
								<option value="AR">AR</option>
								<option value="AZ">AZ</option>
								<option value="CA">CA</option>
								<option value="CO">CO</option>
								<option value="CT">CT</option>
								<option value="DC">DC</option>
								<option value="DE">DE</option>
								<option value="FL">FL</option>
								<option value="GA">GA</option>
								<option value="HI">HI</option>
								<option value="IA">IA</option>
								<option value="ID">ID</option>
								<option value="IL">IL</option>
								<option value="IN">IN</option>
								<option value="KS">KS</option>
								<option value="KY">KY</option>
								<option value="LA">LA</option>
								<option value="MA">MA</option>
								<option value="MD">MD</option>
								<option value="ME">ME</option>
								<option value="MI">MI</option>
								<option value="MN">MN</option>
								<option value="MO">MO</option>
								<option value="MS">MS</option>
								<option value="MT">MT</option>
								<option value="NC">NC</option>
								<option value="ND">ND</option>
								<option value="NE">NE</option>
								<option value="NH">NH</option>
								<option value="NJ">NJ</option>
								<option value="NM">NM</option>
								<option value="NV">NV</option>
								<option value="NY">NY</option>
								<option value="OH">OH</option>
								<option value="OK">OK</option>
								<option value="OR">OR</option>
								<option value="PA">PA</option>
								<option value="RI">RI</option>
								<option value="SC">SC</option>
								<option value="SD">SD</option>
								<option value="TN">TN</option>
								<option value="TX">TX</option>
								<option value="UT">UT</option>
								<option value="VA">VA</option>
								<option value="VT">VT</option>
								<option value="WA">WA</option>
								<option value="WI">WI</option>
								<option value="WV">WV</option>
								<option value="WY">WY</option>
								</select> 
								<input name= 'zip' type="text" class="form-control" placeholder="Zip" required style="width: 50%;float: right; background: #e4e5e7; height: 50px;margin-top:10px;">
							</div>		
<!--							<script>-->
<!--								$('.willcall').click(function() {-->
<!--								  $('.willcall_info').toggle('slow');-->
<!--								  $(this).toggleClass('type-clicked');-->
<!--								});-->
<!--								-->
<!--								$('.print').click(function() {-->
<!--								  $(this).toggleClass('type-clicked');-->
<!--								});-->
<!--								-->
<!--								$('.shipping').click(function() {-->
<!--								  $('.shipping_info').toggle('slow');-->
<!--								  $(this).toggleClass('type-clicked');-->
<!--								});-->
<!--								-->
<!--							</script>-->
				  
							  <div class="col-md-12" style="margin-top:20px;">
								
							  <input name= 'email' type="text" class="form-control" placeholder="Email" required style=" background: #e4e5e7; height: 50px;">
							      
							  <input name = "f_name" type="text" class="form-control" placeholder="First Name" required style="width: 35%;float: left; background-color: #e4e5e7; height: 50px;margin-top:10px;">
							  <input name= "l_name" type="text" class="form-control" placeholder="Last Name" required style="width: 60%;float: right; background: #e4e5e7; height: 50px;margin-top:10px;">
<!--							      <div class="col-md-5" style="height: 50px; background:#e4e5e7; float: left; margin-top: 10px; ">-->
<!--							      <span>Type</span>-->
<!--							      <select id="Type" name="state" type="text" style="height:34px;padding:4px;">-->
<!--							      <option value="Credit" selected="selected">Credit</option>-->
<!--							      <option value="Debit">Debit</option>-->
<!--							      </select>-->
<!--							      </div>-->
                                  <input name = 'cvc' type="text" class="form-control" placeholder="CVC" required style="width:35%;height: 50px; background:#e4e5e7; float: left; margin-top: 10px;">
							      <div class="col-md-6 col-md-offset-1" style="height: 50px; background:#e4e5e7; float: left; margin-top: 10px;">
							      <span>Exp Date</span>
							      <select id="Type" name="exp_month" type="text" style="height:34px;padding:4px;">
							      <option value="01" selected="selected">01</option>
                                  <option value="02">02</option>
                                  <option value="03">03</option>
                                  <option value="04">04</option>
                                  <option value="05">05</option>
                                  <option value="06">06</option>
                                  <option value="07">07</option>
                                  <option value="08">08</option>
							      <option value="09">09</option>
							      <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
							      </select>
							      <select id="Type" name="exp_year" type="text" style="height:34px;padding:4px;">
                                  //every year need to change the number
							      <option value="15" selected="selected">15</option> 
							      <option value="16">16</option>
							      <option value="17">17</option>
							      <option value="18">18</option>
							      <option value="19">19</option>
							      <option value="20">20</option>
							      <option value="21">21</option>
							      <option value="22">22</option>
							      <option value="23">23</option>
							      </select>
							      </div>
							      <div class="col-md-12" style="margin-top: 10px; padding: 0px;">
								  <input name= 'card' type="text" class="form-control" placeholder="Card Number" required style=" background: #e4e5e7; height: 50px;">
							      </div>
							      </div>
						      </div>
						      <div class="col-md-12" style="margin-top: 10px; float: right;">
								  <a href="#" type="submit" data-dismiss="modal" class="btn btn-lg" style="float: right;margin-left:15px; background:#BC1E2D; color:white; padding: 10px 30px;font-size: 25px;">Cancel </a>
								  <button type="submit" class="btn btn-lg" style="margin-left: 20px;float: right; background:#2BB473; color:white; padding: 10px 30px;font-size: 25px;">Pay now </button>
						      </div>
<!--                                  </form>-->

						  </div>
				       </form>
					      </div>
				  
					      
					      
					  </div>
					</div>
				    </div>      <!--end of buy ticket--> 

				
				<div style="background:white;text-align:center;margin-top:10px;padding:15px;">
					<p><strong><span class="icon-contacts_icon" style="font-size:20px;vertical-align:middle;"></span> Contact Info for Event</strong></p>
					<p style="color:#2874B0;font-weight:bold;">(800) 888-8888</p>
					<p style="color:#2874B0;font-weight:bold;">timetoparty@hotmail.com</p>
				</div>
				
				<div style="background:white;text-align:center;margin-top:10px;padding:15px;">
					<p><span class="icon-link_icon" style="font-size:20px;vertical-align:top;"></span> Links<p>
					<a href="https://www.facebook.com/toastbrooklyn" target="a_blank" style="color:#2874B0;font-weight:bold;">https://www.facebook.com/toastbrooklyn</a>
				</div>
				
			</div>
			
			<div class="col-md-7">
				<div class="row">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner toast_pictures" role="listbox">
					<div class="item active">
					  <img src="<?php echo $PATH_IMG?>/background.png" alt="...">
					  
					</div>
					<div class="item">
					  <img src="<?php echo $PATH_IMG?>/bucket_list.png" alt="...">
					 
					</div>
					<div class="item">
					  <img src="<?php echo $PATH_IMG?>/workenvironment_image.jpg" alt="...">
					 
					</div>
					
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
				</div>
				
				<div class="row" style="background:white;padding:15px 50px;margin-top:10px;">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				
					<div class="row" style="margin-top:10px;text-align:center;padding:0;background:white;font-size:12px;">
						<div class="col-md-2 col-sm-6" style="padding:20px;padding-bottom:0;background:white;">
						<img src="<?php echo $PATH_IMG?>/experience_image.png" class="attendees"/>
						<p>Christopher Garcia</p>
						</div>
						<div class="col-md-2 col-sm-6" style="padding:20px;padding-bottom:0;background:white;">
						<img src="<?php echo $PATH_IMG?>/experience_image.png" class="attendees"/>
						<p>Christopher Garcia</p>
						</div>
						<div class="col-md-2 col-sm-6" style="padding:20px;padding-bottom:0;background:white;">
						<img src="<?php echo $PATH_IMG?>/experience_image.png" class="attendees"/>
						<p>Christopher Garcia</p>
						</div>
						<div class="col-md-2 col-sm-6" style="padding:20px;padding-bottom:0;background:white;">
						<img src="<?php echo $PATH_IMG?>/experience_image.png" class="attendees"/>
						<p>Christopher Garcia</p>
						</div>
						<div class="col-md-2 col-sm-6" style="padding:20px;padding-bottom:0;background:white;">
						<img src="<?php echo $PATH_IMG?>/experience_image.png" class="attendees"/>
						<p>Wrevel</p>
						</div>
						<div class="col-md-2 col-sm-6" style="padding-top:20px;padding-bottom:25px;color:white;background:#1D74BB;">
						<p><span class="icon-plus_icon" style="font-size:25px;"></span></p>
						<strong style="font-size:25px;">1,230</strong> Going
						</div>
					</div>
				
				<div class="row" style="height:200px;overflow:hidden;margin-top:10px;position:relative;">
					<img src="http://www.brandeis.edu/about/images/newformat/map2.jpg"/>
					<a href="#" class="btn toast_directions">Get Directions</a>
				</div>
				
				<div class="row" style="margin-top:10px;">
					<div class="col-sm-10" style="padding:0;">
					<textarea class="form-control" rows="1" placeholder="Type something in here"></textarea>
					</div>
					<div class="col-md-2" style="padding:0;">
					<button class="btn toast_comment_btn">Post Comment</button>
					</div>
				</div>
				<!--where the comments show up-->
				<div class="row" style="background:white;height:150px;">
					
				</div>
			</div>
		</div>
    </div>            
</div>


<!--end of content-->

<?php $this->load->view('footer');?>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
     <script type="text/javascript">

            var userLocation =  <?php echo json_encode($event[0]['e_address']. "," . $event[0]['e_state'] . "," .$event[0]['e_city']. "," . $event[0]['e_zipcode']); ?>;


            if (GBrowserIsCompatible()) {
                var geocoder = new GClientGeocoder();
                geocoder.getLocations(userLocation, function (locations) {
                    if (locations.Placemark)
                    {
                        var north = locations.Placemark[0].ExtendedData.LatLonBox.north;
                        var south = locations.Placemark[0].ExtendedData.LatLonBox.south;
                        var east  = locations.Placemark[0].ExtendedData.LatLonBox.east;
                        var west  = locations.Placemark[0].ExtendedData.LatLonBox.west;

                        var bounds = new GLatLngBounds(new GLatLng(south, west),
                            new GLatLng(north, east));

                        var map = new GMap2(document.getElementById("map_canvas"));

                        map.setCenter(bounds.getCenter(), map.getBoundsZoomLevel(bounds));
                        map.addOverlay(new GMarker(bounds.getCenter()));

                        new GStreetviewPanorama(document.getElementById("pano"),
                            { latlng: bounds.getCenter() })
                    }
                });
            }
        </script>
<!--<script>-->
<!--    var max_tickets = 0;-->
<!--    function change_qty_price() {-->
<!--        if($('#ticket_type').val() == "") {-->
<!--            $('#pricing_base').hide();-->
<!--            $('#info_base').hide();-->
<!--            $('#deadline_base').hide();-->
<!--            $('#billing_info').hide();-->
<!--            $('#not_set_up').hide();-->
<!--        }-->
<!--        else {-->
<!--            $("#payment_submit").removeAttr('disabled');-->
<!--            $('#not_set_up').hide();-->
<!--            $('#pricing_base').show();-->
<!--            $('#info_base').show();-->
<!--            $('#deadline_base').show();-->
<!--            $('#quantity_base').children().remove();-->
<!--            var temp = ($('#ticket_type').val()).split('|');-->
<!--            var price_number = Number(temp[2]).toFixed(2);-->
<!--            if(temp[5] != 0) {  //YUan change temp[5]==0 to temp[5]!=0-->
<!--                $('#ticket_price').attr('value', price_number);-->
<!--                $('#ticket_price2').html('$'+price_number);-->
<!--                $('#quantity_left').html(temp[1] + ' left.');-->
<!--                $('#ticket_info').html(temp[3]);-->
<!--                $('#ticket_deadline').html(temp[4]);-->
<!--                max_tickets = temp[1];-->
<!--                var content = '<select id="quantity_type" class="form-control" placeholder="0" name = "quantity">';-->
<!--                for(var i = 0; i <= max_tickets; i++) {-->
<!--                    content += '<option value="'+i+'">'+i+'</option>';-->
<!--                }-->
<!--                //Commented out until we can handle multiple ticket requests. FINISHED-->
<!--                /*content += '<option value="0">0</option>';-->
<!--                 if(Number(temp[1]))-->
<!--                 content += '<option value="1">1</option>';*/-->
<!--                content += '</select>';-->
<!--                $('#quantity_base').append(content);-->
<!--                if(price_number == 0) {-->
<!--                    $('#billing_info').hide();-->
<!--                }-->
<!--                else {-->
<!--                    --><?php //if($posted_recip_id == "") {?>
//                    $('#billing_info').show();
//                    <?php //} else {?>
//                    $('#not_set_up').show();
//                    $('#payment_submit').attr('disabled','disabled');
//                    <?php //}?>
//                }
//            }
//            else {
//                $('#pricing_base').hide();
//                $('#info_base').hide();
//                $('#deadline_base').hide();
//                $('#billing_info').hide();
//                $('#not_set_up').hide();
//                $('#expired_base').show();
//                $('#payment_submit').attr('disabled','disabled');
//            }
//
//        }
//    }
<!--//</script>-->
<!--<script>-->
<!--    $(document).ready(function() {-->
<!--        $('input[type=radio][name=saved_card]').change(function() {-->
<!--            if (this.value == 'false') {-->
<!--                $(".enter_card").attr('disabled', false);-->
<!--            }-->
<!--            else {-->
<!--                $(".enter_card").attr('disabled', true);-->
<!--            }-->
<!--        });-->
<!--    });-->
<!--</script>-->
<script>
    function edit_more_event_photos() {
        var content = '<div class="image-upload">'
            +'<input id="file-input" name = "edit_event_photos[]" type = "file"/>'
        '</div>';
        $('#edit_event_photos_base').append(content);
    }
</script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  -->
<!--<script src="<?php echo $path['PATH_BOOTSTRAP']?>js/bootstrap.min.js"></script>
	<script src="<?php echo $path['PATH_BOOTSTRAP']?>js/bootstrap.js"></script> -->
<script src="<?php echo $PATH_BOOTSTRAP?>js/buy_pos_v2.js"></script>
<script src="<?php echo $PATH_BOOTSTRAP?>js/lightbox.js"></script>
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