<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Latest Wrevs | Wrevel - Discover Your World, Host & Experience Events</title>

 <?php $event_info =$this->_ci_cached_vars;?>

<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $PATH_BOOTSTRAP?>css/mosaic.css" type="text/css" media="screen">

<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $PATH_CSS?>redmond/jquery-ui-1.10.4.custom.css" rel="stylesheet">
</head>

<body>
<?php $this->load->view('header');?>

<!--content
==============================================-->
<div class="container" style="margin-top:90px;">
<div class="row" style="margin:30px;">
  <p class="event"><img src="<?php echo $PATH_IMG?>latest_wrevs_icon.png" class="wrev-image" style="width:50px;"/> <strong>Wrev</strong> <span class="pronounce">[rev]</span></p>
  <p class="definition"><i>noun</i>&nbsp;&nbsp; an event on Wrevel.com</p> 
          <div class="eventlist">
     <div style="margin-left:auto;margin-right:auto;">
                	<div style="margin-left:25%;margin-right:auto;margin-top:25px;">     
      <!--<form class="form-inline" role="form">-->

                	
                	<?php $save_search = array('onsubmit' => 'return save_search()');
      echo form_open(base_url().'main/get_latest_events_search/', $save_search)?>
       
              <div class="left-inner-addon" style="float:left; border-radius:5px;">
                <span class="glyphicon glyphicon-search"></span>
          <label class="sr-only">Email address</label>
          <input id="cookie_search" type="text" name="search" class="form-control" style="font-size:20px;width: 220px;" placeholder="search name of wrev"></div>
          <div class="btn-group" style="float:left; border-radius:5px;">
         <input id="cookie_price" type="number" name="price" class="form-control" data-toggle="dropdown" style="font-size:20px; padding:1px 10px;" placeholder="price"></input>
        
          <!--<span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Dropdown link</a></li>
            <li><a href="#">Dropdown link</a></li>
        </ul>
      -->
        </div>
			
        
        <div class="left-inner-addon" style="font-size:20px;">
                
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <select id="cookie_state" name="state" type="text" style="float:left; border-radius:5px;padding:4px;">
              <option value="" selected="selected">Select a State</option> 
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
        </div>
      <div class="col-xs-1" style="padding:0;">
            <input id="cookie_zipcode" name="zipcode" type="text" pattern=".{5,5}" maxlength="5" class="form-control" placeholder="Zip" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
           </div>
       <div class="col-xs-1" style="padding:0;">
            <input id="cookie_date" name="search_date" class="form-control" type="text" placeholder="Date">
        </div>
        
      
  
        <input type="submit" class="btn" style="background:#1C74BB; color:white; font-size:20px; padding:1px 10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);" value="go"></input>
    <!--</form>-->
          <?php echo form_close()?>
</div>
    </div>
	</div>
    <!--<div class="text-center">
    <ul class="pagination">
    	<li><a href="javascript:void(0)" onclick="show_page(1)"><<</a></li>
    	<li><a href="javascript:void(0)"onclick="show_page(-1)"><</a></li>
    	<?php for($i = 0; $i < $size / 24; $i++) {?>
        	<li><a href="javascript:void(0)" onclick="show_page(<?php echo $i+1?>)"><?php echo $i+1?></a></li> 
        <?php }?>
        <li><a href="javascript:void(0)" onclick="show_page(-2)">></a></li> 
        <li><a href="javascript:void(0)" onclick="show_page(<?php echo (int)($size/24)+1?>)"> >> </a></li> 
    </ul>
</div>-->

        <div class="row row-centered" style="margin-top:30px;">
		<div class="col-md-11 col-centered col-sm-11 col-xs-11" style="color:white;text-align:center;padding:10px 10%;">
	  
      <div class="row">
        <!--modify -->
        <?php if($size > 1) {
            	echo '<span style="color:black; font-size:26px;font-weight:bold;">'.$size.' <span style="color:white;">results found!</span></span>';
             }
             else{
             	echo '<span style="color:black; font-size:26px;font-weight:bold;">'.$size.' <span style="color:white;">result found!</span></span>';
                
            }?>
      </div>
    	
    	<div class="row" style="text-align:left;">
      <?php
      $i = 0;
      $group_page = 1;
      $size_left = $size;
      if (isset($size)){
      	while($size_left > 0){
      	    for($j=0; $j < 24 && $size_left != 0; $j++) {   //Yuan change this number from 21 to 24
      	    	$size_left--;
      	    	if($group_page == 1) {
      ?>
	      <div class="<?php echo 'event_group'.$group_page?> col-md-3 col-sm-6" style="padding:0 9px;">
	      <?php } else {?>
	      <div class="<?php echo 'event_group'.$group_page?> col-md-3 col-sm-6" style="padding:0 9px;" hidden>
	      <?php }?>
                <div class="mosaic-block bar2" onclick="location.href='<?php echo base_url().'event/event_info/latest/'.$event_info[$i]["event_id"]?>';" style="margin-top:18px;cursor:pointer; border-radius:10px; -moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);" > <!-- <- box to link to full view -->
               

        <a target="_blank" class="mosaic-overlay latest-box" style="background-color:rgba(178,154,158,1);display: inline; left: 0px;">
      <div class="col-md-12" style="height: 50px; background-color: rgba(159,129,134,1); position:relative;">
                            <p style="text-align:center; color:white; font-size:20px; margin-top:8px;">
                                    <strong style="text-shadow: 1px 1px 0.5px #000000;"><?php 
                                    $event_name_temp = substr($event_info[$i]['e_name'], 0, 14);
                                    echo $event_name_temp?></strong> </p>
      </div>
                        <!--Location of event-->
                        <p class="location location-romance"><i class="fa fa-map-marker"></i> <?php echo $event_info[$i]['e_state'] ?> </p>
                        
                        <!--Description -->
                        <p class="description" style="height: 40px;text-overflow:ellipsis;">
                        <?php $event_description_temp = substr($event_info[$i]['e_description'], 0, 140); echo $event_description_temp; ?>......                       
                        </p>
                        
                        <!--Click to lead to individual listing page-->
                        <p class="more">Show more >></p>
        </a>
      
      <div class="mosaic-backdrop" style="display: block;">
                                <div style="position: absolute; border-radius:7px; background-color: rgba(239,186,183,0.3); width: 100%; height: 280px; z-index: 0;"></div>
                        <!--Event Image-->
        <img src="<?php echo base_url()."uploads/". $event_info[$i]['e_image']?>" style="max-width:100%; min-width:100%; max-height:100%; min-height:100%;">
        <div class="details">
                                    <p style="font-size:17px;">
									<!--Date of event-->
									<span class="badge date latest-date"><?php echo $event_info[$i]['e_date']?></span>
									<span class="pull-right" style="text-shadow: 1px 1px 0.5px #000000;"><i class="fa fa-clock-o"></i><?php echo $event_info[$i]['e_start_time']; ?></span>
									</p> 
                                    
                                    
                                    <!--Number of people attending-->
                                    <p style="font-size:17px;">
									<span class="badge attending"><?php echo $event_info[$i]['e_attending'] ?></span> <span style="text-shadow: 1px 1px 0.5px #000000;">Attending</span>
									<span class="pull-right" style="text-shadow: 1px 1px 0.5px #000000;"><span><?php echo $event_info[$i]['e_likes'] ?> </span><i class="fa fa-heart-o"></i></span>
                                    </p>
                                </div>
                        </div>
    </div>
              </div>
            
            <?php $i++;}
            $group_page++;}}?>  
</div></div>
</div>
<div class="text-center">
    <ul class="pagination">
    	<li><a href="javascript:void(0)" onclick="show_page(1)" class="pagenumber"><<</a></li>
    	<li><a href="javascript:void(0)"onclick="show_page(-1)" class="pagenumber"><</a></li>
    	<?php for($i = 0; $i < $size / 24; $i++) {?>
        	<li><a id="page_number<?php echo $i+1?>" class="page_number_class pagenumber" href="javascript:void(0)" onclick="show_page(<?php echo $i+1?>)"><?php echo $i+1?></a></li> 
        <?php }?>
        <li><a href="javascript:void(0)" onclick="show_page(-2)" class="pagenumber">></a></li> 
        <li><a href="javascript:void(0)" onclick="show_page(<?php echo (int)($size/21)+1?>)" class="pagenumber"> >> </a></li> 
    </ul>
</div>
            <div class="row" style="text-align:center; padding:10px;">
            <!--<a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:25px; padding:10px; border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .5);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .5);box-shadow:2px 2px 2px rgba(0, 0, 0, .5);">View more</button></a>-->
            <?php if($this->session->userdata('is_logged_in')) {?>
            <a href="#" data-toggle="modal" data-target="#create" class="btn btn-lg createwrev" style="font-size:25px; padding:10px;border-radius:10px;">Create a Wrev</a>
            <?php }?>
			</div>              
</div>
</div>
</div>

<!--end of content-->

<?php $this->load->view('footer');?>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="<? echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
    <script type="text/javascript" src="<?php echo $PATH_BOOTSTRAP?>js/mosaic.1.0.1.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>jquery.cookie.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>jquery-ui-1.10.4.custom.js"></script>
    <script>
        $(function() {
          $("#cookie_date").datepicker();
        });
    </script>
    <script type="text/javascript">  
      
      jQuery(function($){
        
        $('.circle').mosaic({
          opacity   : 0.8     //Opacity for overlay (0-1)
        });
        
        $('.fade').mosaic();
        
        $('.bar2').mosaic({
          animation : 'slide'   //fade or slide
        });
      });
        
  </script>
  <script>
    	function check(input){
    		if (input.value.search(new RegExp(input.getAttribute('pattern'))) >= 0) {
        	// Input is fine. Reset error message.
	        input.setCustomValidity('');
    		}
    		else {
        		input.setCustomValidity('Enter a valid zipcode.');
    		}
	}
    </script>
    <script>
    	function save_search() {
    		$.cookie("search", $("#cookie_search").val());
    		$.cookie("price", $("#cookie_price").val());
    		$.cookie("state", $("#cookie_state").val());
    		$.cookie("zipcode", $("#cookie_zipcode").val());
                $.cookie("date", $("#cookie_date").val());
    	}
    </script>
    <script>
    	$(document).ready(function() {
    		$("#cookie_search").attr('value', $.cookie("search"));
    		$("#cookie_price").attr('value', $.cookie("price"));
    		$("#cookie_state").val($.cookie("state"));
    		$("#cookie_zipcode").attr('value', $.cookie("zipcode"));
                $("#cookie_date").attr('value', $.cookie("date"));
    		$.cookie("search", "");
    		$.cookie("price", "");
    		$.cookie("state", "");
    		$.cookie("zipcode", "");
                $.cookie("date", "");
    	});
    </script>
    <script>
    	var current_page = 1; 
    	var max_page = <?php echo $group_page?>;
    	function show_page(number) {
    		var $page_id='page_number'+current_page;
    		$('#'+$page_id).css("font-weight","normal");
    		$('#'+$page_id).css("color","#428bca");
    		if(number == -1 && current_page > 1) {
    			current_page--;
    		}
    		else if(number == -2 && current_page < max_page-1) {
    			current_page++;
    		}
    		else {
	    		if(number > 0) {
	    			current_page = number;
	    		}
    		}
    		var temp = '.event_group'+current_page;
    		var temp2 = '.page_number'+current_page;
    		$('[class*="event_group"]').hide();
    		$('.page_number_class').removeClass('active');
    		$(temp2).addClass('active');
    		$(temp).show();
    		
    		$page_id='page_number'+current_page;
    		$('#'+$page_id).css("font-weight","900");
    		$('#'+$page_id).css("color","#000000");
  
    	}
    </script>
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