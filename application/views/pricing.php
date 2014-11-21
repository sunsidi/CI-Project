<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pricing</title>
<meta name="description" content="Wrevel’s pricing page. Use the cheapest ticketing platform on the market.">
<meta name="keywords" content="event hosting, parties, low priced tickets, tickets, wrevel, online tickets, tech company, pricing page, buy tickets, pricing, cheap tickets">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

<?php $this->load->view('header');?>

<!--content
==============================================-->

	
<div class="container" style="padding-bottom:50px;">
<div class="col-md-offset-2 col-md-8">
<h1 class="title" style="text-align:center;font-family:GillSans;color:white;"><img class="w_logo" src="<?php echo $PATH_IMG?>w1.png"/>Pricing</h1>
    <!--Gazette-->   
        <div class="panel" style="background-color: #d7e0e9; border:none ; border-radius: 10px;">
	    
	    <div class="panel-body" style="background-color: #d7e0e9; border-radius: 10px;">
		<!--<p style="text-align: center; color: #787e84; font-size: 30px;">Simple Pricing</p>
		<hr width="100%"/>-->
		
		<div class="col-md-6 col-sm-6" style="background: #4a97c9; border-radius: 10px; margin-top: 30px;">
		<p style="text-align: center;color: white; font-size: 27px; padding-top: 70px;"><img src="<?php echo $PATH_IMG?>pig.png"/>  <b>Simple payment system</b></p><br/>
		    <ul class="pricing-points">
			<li> <p style="color: white; font-size: 18px;"><span style="color:#7ACF08;font-size: 20px;">&#x2713; </span> No start-up fees or extra<br/>charges</p></li>
			<li> <p style="color: white; font-size: 18px;"><span style="color:#7ACF08;font-size: 20px;">&#x2713; </span> Accept all credit cards<br/></p></li>
		    </ul>
		<p style="text-align: left;margin-left:15%;color: white; font-size: 27px; padding-top: 50px;"><img src="<?php echo $PATH_IMG?>dollar.png"/> <b>No website fee</b></p><br/>
		    <ul class="pricing-points">
			<li> <p style="color: white; font-size: 18px;"><span style="color:#7ACF08;font-size: 20px;">&#x2713; </span> We charge $0 to use our <br/>services</p></li>
			<li> <p style="color: white; font-size: 18px; padding-bottom: 70px;"><span style="color:#7ACF08;font-size: 20px;">&#x2713; </span> No monthly fees</p></li>
		    </ul>
		</div>
		
		<div class="col-md-6 col-sm-6">
		    <p style="line-height: 0px;text-align: center;color: #0076be; font-size: 20px; padding-top: 70px;"><img src="<?php echo $PATH_IMG?>w.png"/>  Wrevel fee</p><br/>
		    <p style="line-height: 0px;text-align: center;color: #0076be; font-size: 35px; padding-top: 10px;"><b>1.5% + .50&#162</b></p><br/>
		    <p style="line-height: 0px;text-align: center;color: #0076be; font-size: 15px;"><b>per successful charge</b></p><br/>

		    <p style="line-height: 0px;text-align: center;color: #0076be; font-size: 20px; padding-top: 25px;"><img src="<?php echo $PATH_IMG?>card.png"/> Credit Card fee</p><br/>
		    <p style="line-height: 0px;text-align: center;color: #0076be; font-size: 35px; padding-top: 10px;"><b>2.9% + .30&#162 </b><font size="2">Vat</font></p><br/>
		    <p style="line-height: 0px;text-align: center;color: #0076be; font-size: 15px;"><b>per successful charge</b></p><br/>
		    <hr width="80%" color="#c4cfda"/>
		    <div class="col-md-5 col-sm-6 col-xs-6">
			<p style="color: #0076be; font-size: 25px;"><b>Example:</b></p>
			<p style="color: #0076be; font-family:GillSans; font-size: 70px;">$20</p>
			<p style="line-height: 0px;text-align: center;color: #0076be; font-size: 17px;">ticket price</p>
		    </div>
		    <div class="col-md-7 col-sm-6 col-xs-6">
			<p style="line-height: 20px;color: #0076be; font-size: 20px; padding-top: 30px;">The event goer Pays</p>
			<p style="line-height: 20px;color: #0076be; font-size: 35px;"><b>$21.72</b></p>
		    	<p style="line-height: 20px;color: #0076be; font-size: 20px;">and you get</p>
			<p style="line-height: 20px;color: #0076be; font-size: 35px;"><b>$20</b></p>
			<br/><br/><br/>
		    </div>
			<p style="text-align: center; line-height: 20px;color: #0076be; font-size: 17px; padding-bottom: 80px;">Wrevel&rsquo;s fee of .80&#162 and a credit card fee of .72&#162</p>
		</div>
	     </div>
        </div>
	
	<!--What to do-->
        <div class="panel" style="border: none; border-radius: 10px;background: #4a97c9;">
           <div class="panel-body" style="border-radius: 10px;">
		<p style="text-align:center;font-size:28px;"><font color="white"><img src="<?php echo $PATH_IMG?>thumbsup.png" style="width:30px;"/> Free Events</font></p><br/>
		<p style="text-align:center;font-size:22px;margin-top:-15px;"><font color="white">You can still use our beautiful ticket system for absolutely<br/>
		free. We make money only when you make money.</font></p>
            </div>
        </div>
	
<!--stripe
	<div class="panel" style="border: none;background: -webkit-linear-gradient(#4450a5, #ad99d1);
	-o-linear-gradient(#4450a5, #ad99d1);
	-moz-linear-gradient(#4450a5, #ad99d1);
	linear-gradient(#4450a5, #ad99d1);
	border-radius: 10px;padding-top: 80px;padding-bottom: 80px;padding-left: 50px;padding-right: 50px;">
           <div class="panel-body" style="border-radius: 10px;">
	    
		<hr color="white" width="100%">
		<div class="col-md-6">
		   <font color="white"; size="3">
			No surprises<br/><br/>
			Stripe won't charge you extra for<br/>
			failed transactions. American Express<br/>
			cards, international cards, stored cards,<br/>
			or recurring payments<br/><br/><br/><br/>
		  
		   
			International cards<br/><br/>
			Accept major international debit or credit<br/>
			cards, including Visa, MasterCard, American<br/>
			Express, Discover, Diners Club and JCB, <br/>
			right out of the box.<br/><br/><br/><br/>
		   
		   
			Transfers<br/><br/>
			Automatically get paid out to your bank ac-<br/>
			count for free, or send funds to any third-<br/>
			party bank account for just 25/&#162; per transfer<br/>
			($1 fee if the transfer fails).<br/>
		   </font>
		</div>
		
		<div class="col-md-6">
		   <font color="white"; size="3">
			Disputes & chargebacks<br/><br/>
			Stripe actively works to prevent fraudulent<br/>
			charges, but there is a $15 fee for charge-<br/>
			backs. If the dispute is resolved in your<br/>
			favor, Stripe refunds this fee.<br/><br/><br/><br/>
		  
		   
			Other currencies<br/><br/>
			United States users can accept payments in<br/>
			139 currencies, Stripe fees remain the same,<br/>
			but conversion incurs a 2% fee atop market<br/>
			exchange rates.<br/><br/><br/><br/>
		   
		   
			Accounting integrations<br/><br/>
			With real-time access to reporting data, you<br/>
			can connect Stripe with your existing ac-<br/>
			counting or ERP systems.<br/>
			<br/>
		   </font>
		</div>
	    </div>
        </div>-->
    
</div>
</div>
<!--end of content-->

<?php $this->load->view('footer');?>

 <!--Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <!--<script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>-->
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
</body>
</html> 