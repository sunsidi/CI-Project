<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Your Wrev | Wrevel - Discover Your World, Host & Experience Events</title>

<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.vertical-tabs.css">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script>
jQuery(document).ready(function () {
    //hide a div after 3 seconds
    setTimeout(function(){ jQuery("#sentMessage").hide(); }, 5000);
});
</script>
<style>

.tabs-left>li a{
    color:#414042;
	font-size:19px;
}

ul.nav.nav-tabs.tabs-left>li.active a{
	background:transparent;
	color:#146BB2;
	border:none;
	}

ul.nav.nav-tabs.tabs-left>li{
	width:100%;
	}	
</style>
</head>

<body>
<?php $this->load->view('header');?>

<!--content
==============================================-->
  <div class="container" style="padding-bottom:50px;">
	<div class="row" style="margin-top:120px;">
		<div class="col-md-3 col-md-offset-1"> <!-- required for floating -->
            <?php
            $hidden = array(
                'icebreakers'=> 0,
                'meetups'=> 0,
                'parties'=> 0,
                'clubs'=> 0,
                'concerts'=> 0,
                'festivals'=> 0,
                'explore'=> 0,
                'romance'=> 0,
                'lounges'=> 0,
                'bars'=> 0,
                'hotspots'=> 0,
                'culture'=> 0,
            );
            $requiredinput = array('onsubmit' => 'return check_required_input()');
            echo form_open_multipart(base_url().'event/create_event', $requiredinput);
            echo form_hidden($hidden);?>

            <!-- Nav tabs -->
			<div class="panel panel-default" style="border:none;font-weight:bold;">
				<div class="panel-heading" style="background:#44454A;color:white;padding-left:0;padding-right:0;position:relative;">
    					<h3 class="panel-title text-center" style="font-size:20px;font-weight:bold;padding:8px;padding-bottom:15px;">Create a Wrev</h3>
						<img src="<?php echo $PATH_IMG?>color_bar.jpg" style="width:100%;position:absolute;"/>
  				</div>
  				<div class="panel-body" style="background:#F7F7F7;text-align:center;">
					<ul class="nav nav-tabs tabs-left" style="text-align:center;border:none;">
                                            
                                                    <li  class="active"><a href="#category" data-toggle="tab" id = "category_form">Choose a Category</a></li>
                                                    <li><a href="#details" data-toggle="tab" id = "details_form">Type in the Wrevs details</a></li>
                                                    <li><a href="#customize" data-toggle="tab" id = "customize_form" >Customize your Wrev</a></li>
                                                    <li><a href="#setup" data-toggle="tab" id = "tickets_form" style="display: none">Set up Tickets</a></li>
                                                    <li><a href="#delivery" data-toggle="tab" id = "delivery_form" style="display: none">Delivery Method Set up</a></li>
                                                    
					</ul>
				</div>
				<div class="panel-footer" style="background:#44454A;text-align:center;">				
					<p><button type="submit" class="btn" style="border-radius:none;color:white;background:#1B76BD;width:70%;font-size:18px;">Submit Wrev</button></p>
					<p><button class="btn" style="border-radius:none;color:white;background:#6D6E72;width:70%;font-size:18px;">Preview Wrev</button></p>
					<p><button class="btn" style="border-radius:none;color:white;background:#8D4D4D;width:70%;font-size:18px;" onclick="goBack()">Cancel</button></p>
					<script>
					function goBack() {
					window.history.back();
					}
					</script>
				</div>
			</div>
		</div>
		
              
		<div class="col-md-7" style="padding:0;">
			<!-- Tab panes -->
			<div class="tab-content" style="background:#F7F7F7;">
			
				<!--Summary-->
				<div class="tab-pane active default-tabs" id="category" style="color:#404041;text-align:center;">

						<div class="row" style="padding:10% 8%;">
							<div class="col-md-4 col-sm-6" style="background:#F1F1F1;padding:10px;">
								<strong>Choose 1 Main Category</strong>
								<p><em>double-click to confirm</em></p>
								<p>You can add up to 2 sub-categories total</p>
								
							</div>
							<div class="col-md-8 col-sm-6">
								 <div class="apare cwrev_select" id="exhgt" primarySelected="false" >
        
        <img src="<?php echo $PATH_IMG?>hotspots_new.png" class="cwrev_category small" id= '0' name = 'is_hotspot' value = '1' alt="hotspot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> 

        
        <img src="<?php echo $PATH_IMG?>icebreakers_new.png" class="cwrev_category small" id = '1'name = 'is_icebreakers' value = '1' alt="icebreakers" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;"> 

        <img src="<?php echo $PATH_IMG?>culture_new.png" class="cwrev_category small" id= '2' name = 'is_culture' value = '1' alt="culture" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">
     
        <img src="<?php echo $PATH_IMG?>meetups_new.png" class="cwrev_category small" id = '3' name = 'is_meetups' value = '1' alt="meetups" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">

        <img src="<?php echo $PATH_IMG?>exporingyourcity_new.png" class="cwrev_category small" id = '4' name = 'is_exploringyourcity' value = '1' alt="explore city" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">

        <img src="<?php echo $PATH_IMG?>loveandromance_new.png" class="cwrev_category small" id = '5' name = 'is_l&r' value = '1' alt="love and romance" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">

        <img src="<?php echo $PATH_IMG?>parties_new.png" class="cwrev_category small" id = '6' name = 'is_parties' value = '1' alt="parties" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">
  
        <img src="<?php echo $PATH_IMG?>clubs_new.png" class="cwrev_category small" id = '7' name = 'is_clubs' value = '1' alt="clubs" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">
    
        <img src="<?php echo $PATH_IMG?>concerts_new.png" class="cwrev_category small" id = '8' name = 'is_concerts' value = '1' alt="concerts" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">
    
        <img src="<?php echo $PATH_IMG?>festivals_new.png" class="cwrev_category small" id = '9' name = 'is_festivals' value = '1' alt="festivals" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">
        
        <img src="<?php echo $PATH_IMG?>lounges_new.png" class="cwrev_category small" id = '10' name = 'is_lounges' value = '1' alt="lounges" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">
      
        <img src="<?php echo $PATH_IMG?>bars_new.png" class="cwrev_category" id = '11' name = 'is_bars' value = '1' alt="bars" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">
         <div style="visibility: hidden;">
        <input type="checkbox" class = "checkbox" id="i0" name="hotspots" value="1024"  />
        <input type="checkbox" class = "checkbox" id="i1" name="icebreakers" value="1"  />
        <input type="checkbox" class = "checkbox" id="i2" name="culture" value="2048"  />
        <input type="checkbox" class = "checkbox" id="i3" name="meetups" value="2"  />
        <input type="checkbox" class = "checkbox" id="i4" name="explore" value="64"  />
        <input type="checkbox" class = "checkbox" id="i5" name="romance" value="128"  />
        <input type="checkbox" class = "checkbox" id="i6" name="parties" value="4"  />
        <input type="checkbox" class = "checkbox" id="i7" name="clubs" value="8"  />
        <input type="checkbox" class = "checkbox" id="i8" name="concerts" value="16"  />
        <input type="checkbox" class = "checkbox" id="i9" name="festivals" value="32"  />
        <input type="checkbox" class = "checkbox" id="i10" name="lounges" value="256"  />
        <input type="checkbox" class = "checkbox" id="i11" name="bars" value="512" />
         </div>
<!--    <script>-->
<!--        $(document).ready(function(){-->
<!--            $(".checkbox").click(function(){-->
<!--                if($('#exhgt').attr('primaryselected') === 'true'){-->
<!--                     document.getElementById("category_form").innerHTML = "Choose a Category"&#10003;-->
<!--                }-->
<!--            });-->
<!--        });-->
<!---->
<!--    </script>-->
    </div>
							</div>
						</div>
						<div style="width:100%;background:#F1F1F1;padding:10px;">
							
							<button class="btn" style="background:#6D6E72;color:white;">Clear Page</button></a>
							<a href="#details" data-toggle="tab"><button class="btn" style="background:#1D74BB;color:white;">Next</button></a>
						</div>
					
				</div>
                               
				<div class="tab-pane" id="details" style="text-align:center;font-size:18px;">
					<div style="padding:4%;">
						<input id="e_name" name="e_name" type="text" class="form-control" placeholder="Name of Event" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;">
						<textarea id="e_description" class="form-control" rows="3" name = "e_description" placeholder="Event Info" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;"></textarea>
						<textarea class="form-control" rows="1" placeholder="Event Terms (Custom terms ex: Age limit)" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;"></textarea>
						<div class="row" style="margin:0;margin-top:10px;">
							<div style="width:35%;float:left;background:#F2F2F2;padding-top:5px;padding-bottom:5px;">
							<span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Period <i class="fa fa-question-circle" id="period" data-content=" Events that are recurring" data-trigger="hover" data-placement="bottom"></i></span>
							
								<select id="period" name="period" type="number" style="font-size:14px;height:100%;background:transparent;margin-left:5px;">
								<option value="" selected="selected">None</option>
								<option value="1">Every day</option>
								<option value="7">7 days </option>
										<option value="30">1 month</option>
										<option value="365">1 year</option>
										<option value="-1">Every week day</option>
										<option value="-7">Every weekend</option>
								 </select> 
							</div>
							<div style="width:45%;float:left;background:#F2F2F2;padding-top:5px;padding-bottom:5px;margin-left:10px;">
							<span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Multiple Day Event <i class="fa fa-question-circle" data-content="For events lasting more then one day " data-trigger="hover" data-placement="bottom"></i></span>
							
								<select id="multiple-days" style="font-size:14px;height:100%;background:transparent;margin-left:5px;">
								<option value="0" selected="selected">No</option> 
								<option value="1">Yes</option> 
								</select> 
							</div>
							<a class="btn add_day_btn" type="button" onclick="add_day()" id="add_day" style="background:#1D74BB;color:white;display:none;">Add Day</a>
<script>
    $('#multiple-days').on('change', function () {
        if (this.value == '1') {
            $(".add_day_btn").show();
            $("select#period").prop('disabled', true);//disbale the period select box

        } else {
            $(".add_day_btn").hide();
            $("select#period").prop('disabled', false);
        }
    });
    $('select#period').on('change', function () {
        if (this.value != '') {
            $("select#multiple-days").prop('disabled', true);//disable the multiple-days select box

        } else {
            $("select#multiple-days").prop('disabled', false);
        }
    });
</script>						</div>
						
						<div id="event_day">
						<div class="row" style="margin:0;margin-top:10px;">
							<div style="width:30%;float:left;background:#F2F2F2;padding-top:5px;padding-bottom:5px;">
							<label style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Date
							<input type="text" style="font-size:14px;height:100%;background:transparent;border:1px solid #999999;" id="e_date" name="e_date[]">
							</label>
								
							</div>
							<div style="width:34%;float:left;background:#F2F2F2;padding-top:10px;padding-bottom:10px;margin-left:10px;height:44px;vertical-align:middle;">
							<span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Time Start</span>
								<select id="e_start_time" name="e_start_time[]" type="time" style="font-size:14px;background:transparent;margin-left:5px;">
									<option value="" selected="selected"></option> 
									<option value="00:00">12:00am</option>
									<option value="00:30">12:30am</option>
											<option value="01:00">1:00am</option>
									<option value="01:30">1:30am</option>
											<option value="02:00">2:00am</option>
									<option value="02:30">2:30am</option>
											<option value="03:00">3:00am</option>
									<option value="03:30">3:30am</option>
											<option value="04:00">4:00am</option>
									<option value="04:30">4:30am</option>
											<option value="05:00">5:00am</option>
									<option value="05:30">5:30am</option>
											<option value="06:00">6:00am</option>
									<option value="06:30">6:30am</option>
											<option value="07:00">7:00am</option>
									<option value="07:30">7:30am</option>
											<option value="08:00">8:00am</option>
									<option value="08:30">8:30am</option>
											<option value="09:00">9:00am</option>
									<option value="09:30">9:30am</option>
											<option value="10:00">10:00am</option>
									<option value="10:30">10:30am</option>
											<option value="11:00">11:00am</option>
									<option value="11:30">11:30am</option>
											<option value="12:00">12:00pm</option>
									<option value="12:30">12:30pm</option>
											<option value="13:00">1:00pm</option>
									<option value="13:30">1:30pm</option>
											<option value="14:00">2:00pm</option>
									<option value="14:30">2:30pm</option>
											<option value="15:00">3:00pm</option>
									<option value="15:30">3:30pm</option>
											<option value="16:00">4:00pm</option>
									<option value="16:30">4:30pm</option>
											<option value="17:00">5:00pm</option>
									<option value="17:30">5:30pm</option>
											<option value="18:00">6:00pm</option>
									<option value="18:30">6:30pm</option>
											<option value="19:00">7:00pm</option>
									<option value="19:30">7:30pm</option>
											<option value="20:00">8:00pm</option>
									<option value="20:30">8:30pm</option>
											<option value="21:00">9:00pm</option>
									<option value="21:30">9:30pm</option>
											<option value="22:00">10:00pm</option>
									<option value="22:30">10:30pm</option>
											<option value="23:00">11:00pm</option>
									<option value="23:30">11:30pm</option>
							  </select> 
							</div>
							<div style="width:33%;float:left;background:#F2F2F2;padding-top:10px;padding-bottom:10px;margin-left:10px;height:44px;">
							<span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Time End</span>
								<select id="e_end_time" name="e_end_time[]" type="time" style="font-size:14px;background:transparent;margin-left:5px;">
									<option value="" selected="selected"></option> 
									<option value="00:00">12:00am</option>
									<option value="00:30">12:30am</option>
											<option value="01:00">1:00am</option>
									<option value="01:30">1:30am</option>
											<option value="02:00">2:00am</option>
									<option value="02:30">2:30am</option>
											<option value="03:00">3:00am</option>
									<option value="03:30">3:30am</option>
											<option value="04:00">4:00am</option>
									<option value="04:30">4:30am</option>
											<option value="05:00">5:00am</option>
									<option value="05:30">5:30am</option>
											<option value="06:00">6:00am</option>
									<option value="06:30">6:30am</option>
											<option value="07:00">7:00am</option>
									<option value="07:30">7:30am</option>
											<option value="08:00">8:00am</option>
									<option value="08:30">8:30am</option>
											<option value="09:00">9:00am</option>
									<option value="09:30">9:30am</option>
											<option value="10:00">10:00am</option>
									<option value="10:30">10:30am</option>
											<option value="11:00">11:00am</option>
									<option value="11:30">11:30am</option>
											<option value="12:00">12:00pm</option>
									<option value="12:30">12:30pm</option>
											<option value="13:00">1:00pm</option>
									<option value="13:30">1:30pm</option>
											<option value="14:00">2:00pm</option>
									<option value="14:30">2:30pm</option>
											<option value="15:00">3:00pm</option>
									<option value="15:30">3:30pm</option>
											<option value="16:00">4:00pm</option>
									<option value="16:30">4:30pm</option>
											<option value="17:00">5:00pm</option>
									<option value="17:30">5:30pm</option>
											<option value="18:00">6:00pm</option>
									<option value="18:30">6:30pm</option>
											<option value="19:00">7:00pm</option>
									<option value="19:30">7:30pm</option>
											<option value="20:00">8:00pm</option>
									<option value="20:30">8:30pm</option>
											<option value="21:00">9:00pm</option>
									<option value="21:30">9:30pm</option>
											<option value="22:00">10:00pm</option>
									<option value="22:30">10:30pm</option>
											<option value="23:00">11:00pm</option>
									<option value="23:30">11:30pm</option>
							  </select> 
							</div>
						</div>	
						</div>
						
						<input id="location1" type="text" name = "e_address" class="form-control" placeholder="Address" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;">
						<div class="row" style="margin:0;">
							<div class="col-sm-6" style="padding-left:0;">
								<input name="e_venue" class="form-control" placeholder="Name of Venue (Optional)" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;">
							</div>
							<div class="col-sm-6" style="padding-right:0;">
								<input id="location2" type="text" class="form-control" name = "e_city" placeholder="City" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;">
							</div>
						</div>
						<div class="row" style="margin:0;margin-top:10px;">
							<div style="width:50%;float:left;background:#F2F2F2;padding-top:5px;padding-bottom:5px;">
							<span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Country</span>
								<select id="location5" name="e_country" type="text" style="font-size:14px;height:100%;background:transparent;margin-left:5px;">
									<option value="" selected="selected"></option>            			
									<option value="Afghanistan">Afghanistan</option> 
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Antigua and Barbuda">Antigua and Barbuda</option>
									<option value="Argentina">Argentina</option> 
									<option value="Armenia">Armenia</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas, The">Bahamas, The</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia">Bolivia</option>
									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Brazil">Brazil</option>
									<option value="Brunei">Brunei </option> 
									<option value="Bulgaria">Bulgaria</option> 
									<option value="Burkina Faso">Burkina Faso</option>
									<option value="Burma">Burma</option>
									<option value="Burundi">Burundi</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option> 
									<option value="Cape Verde">Cape Verde</option>
									<option value="Central African Republic">Central African Republic</option>
									<option value="Chad">Chad</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
									<option value="Congo, Republic of the">Congo, Republic of the</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Cote d'Ivoire">Cote d&rsquo;Ivoire</option>
									<option value="Croatia">Croatia</option>
									<option value="Cuba">Cuba</option>
									<option value="Curacao">Curacao</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option> 
									<option value="Dominican Republic">Dominican Republic</option> 
									<option value="Ecuador">Ecuador</option>
									<option value="East Timor">East Timor</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option> 
									<option value="Ethiopia">Ethiopia</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia, The">Gambia, The</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Greece">Greece</option>
									<option value="Grenada">Grenada</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guinea">Guinea</option>
									<option value="Guinea-Bissau">Guinea-Bissau</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Honduras">Honduras</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option> 
									<option value="India">India</option> 
									<option value="Indonesia">Indonesia</option>
									<option value="Iran">Iran</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option> 
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Korea North">Korea North</option>
									<option value="Korea South">Korea South</option>
									<option value="Kosovo">Kosovo</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Laos">Laos</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libya">Libya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option> 
									<option value="Luxembourg">Luxembourg</option> 
									<option value="Macedonia">Macedonia</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malawi">Malawi</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option> 
									<option value="Malta">Malta</option>
									<option value="Marshall Islands">Marshall Islands</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mexico">Mexico</option>
									<option value="Micronesia">Micronesia</option>
									<option value="Moldova">Moldova</option>
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montenegro">Montenegro</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar(Burma)">Myanmar(Burma)</option>
									<option value="Namibia">Namibia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands, The">Netherlands, The</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Nicaragua">Nicaragua</option> 
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau">Palau</option>
									<option value="Palestinian State">Palestinian State</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Philippines">Philippines</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option> 
									<option value="Qatar">Qatar</option>
									<option value="Romania">Romania</option>
									<option value="Russia">Russia</option>
									<option value="Rwanda">Rwanda</option>
									<option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
									<option value="St. Lucia">St. Lucia</option>
									<option value="St. Vincent & The Grenadines">St. Vincent & The Grenadines </option>
									<option value="Samoa">Samoa</option>
									<option value="San Marino">San Marino</option>
									<option value="Sao Tome & Principe">Sao Tome & Principe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
									<option value="Serbia">Serbia</option>
									<option value="Seychelles">Seychelles</option> 
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Slovakia">Slovakia</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Solomon Islands">Solomon Islands</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="South Sudan">South Sudan</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option> 
									<option value="Switzerland">Switzerland</option>
									<option value="Syria">Syria</option>
									<option value="Taiwan">Taiwan</option> 
									<option value="Tajikistan">Tajikistan</option>
									<option value="Tanzania">Tanzania</option>
									<option value="Thailand">Thailand</option>
									<option value="Togo">Togo</option>
									<option value="Tonga">Tonga</option>
									<option value="Trinidad & Tobago">Trinidad & Tobago</option>
									<option value="Tunisia">Tunisia</option>
									<option value="Turkey">Turkey</option>
									<option value="Turkmenistan">Turkmenistan</option>
									<option value="Tuvalu">Tuvalu</option>
									<option value="Uganda">Uganda</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Emirates">United Arab Emirates</option>
									<option value="United Kingdom">United Kingdom</option> 
									<option value="United States of America">United States of America</option>
									<option value="Uruguay">Uruguay</option>
									<option value="Uzbekistan">Uzbekistan</option> 
									<option value="Vanuatu">Vanuatu</option>
									<option value="Vatican City (Holy See)">Vatican City (Holy See)</option>
									<option value="Venezuela">Venezuela</option>
									<option value="Vietnam">Vietnam</option>
									<option value="Yemen">Yemen</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>
					
								</select> 
							</div>
							<div style="width:48.5%;float:left;margin-left:10px;">
							<input id="location4" type="text" name = "e_zipcode" class="form-control" placeholder="Zip Code" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;">
							</div>
						</div>
						<input type="text" class="form-control" name = "e_email" placeholder="Email" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;">
						<input type="tel" class="form-control" name = "e_phone" placeholder="Phone" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;">
						<input type="text" name = "e_website" class="form-control" placeholder="Website" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;">
					</div>	
					
					<div style="width:100%;background:#F1F1F1;padding:10px;">
						<a href="#category" data-toggle="tab" class="btn" style="background:#1D74BB;color:white;">Previous</a>
						<button class="btn" style="background:#6D6E72;color:white;">Clear Page</button></a>
						<a href="#customize" data-toggle="tab"><button class="btn" style="background:#1D74BB;color:white;">Next</button></a>
					</div>
					
				</div>
      
				
				<div class="tab-pane" id="customize" style="font-size:18px;">	
                    <div class="row" style="padding:5%;">
						<div class="col-md-5">
							<div style="background:#F1F1F1;height:180px;text-align:center;">
<!--								<span class="glyphicon glyphicon-camera" style="font-size:50px;margin-top:60px;"></span>-->
                                   <img id="myImg" src="" class="glyphicon glyphicon-camera" style="font-size:50px;margin-top:60px;">
							</div>
                            <div style="height:0px;overflow:hidden">
							<input id="fileInput" type="file" class="btn btn-block hide" name ="uploadImage" hidden>
                            </div>
                            <button type="button" onclick="chooseFile();" class="btn btn-block" style="margin-top:10px;background:#92ADC0;color:white;">Upload Main Image</button>
                            <button type="button" onclick="add_more_event_images();" class="btn btn-block" style="margin-top:10px;background:#908F94;color:white;">Upload More Images</button>
						</div>

                        <script>
                            //upload one image
                            function chooseFile() {
                                $("#fileInput").click();
                            }

                            $(function () {
                                $(":file").change(function () {
                                    if (this.files && this.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = imageIsLoaded;
                                        reader.readAsDataURL(this.files[0]);
                                    }
                                });
                            });

                            function imageIsLoaded(e) {
                                $('#myImg').attr('src', e.target.result);
                            };

                            //upload more images
                            function add_more_event_images() {
                                var content = '<div class="image-upload">'
                                    +'<input id="file-input" name = "event_photos[]" type = "file"/>'
                                '</div>';
                                $('#event_images_base').append(content);

                            }
                        </script>

						<div class="col-md-7">
							<div class="row" style="background:#F2F2F2;padding:5px 8px;">
								<div class="col-xs-6">
								<span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Event type</span>
								</div>
								<div class="col-xs-6">
									<select  name="e_type" type="text" class="pull-right" style="font-size:14px;height:100%;background:transparent;margin-left:5px;">
										<option value="0" selected="selected">Public</option>
										<option value="1">Private</option>
									</select>
								</div>
							</div>
							<div class="row" style="background:#F2F2F2;padding:5px 8px;margin-top:10px;">
								<div class="col-xs-6">
								<span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Hide Address?</span>
								</div>
								<div class="col-xs-6">
									<select  name="e_is_hide" type="text" class="pull-right" style="font-size:14px;height:100%;background:transparent;margin-left:5px;">
										<option value="0" selected="selected">No</option>
										<option value="1">Yes</option>
									</select>
								</div>
							</div>
							<div class="row" style="margin-top:10px;">
								<div style="width:48.5%;float:left;background:#F2F2F2;padding:5px 20px;">
								<span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Free</span>			
									<select name="e_is_free" id="freeticket" class="pull-right" style="font-size:14px;height:100%;background:transparent;margin-left:5px;">
									<option value="1">Yes</option>
									<option value="0" selected="selected">No</option>
									</select> 
								</div>
								<div style="width:48.5%;float:left;background:#F2F2F2;padding:5px 20px; margin-left:10px;">
								<span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Ticketed</span>
								
									<select name="e_is_ticketed" id="isTicked" class="pull-right" style="font-size:14px;height:100%;background:transparent;margin-left:5px;">
									<option value="0" selected="selected">No</option>
									<option value="1">Yes</option>
									</select> 
								</div>
							</div>
							<div class="row" style="margin-top:10px;background:#F2F2F2; padding:5px 8px;">
								<div class="col-xs-6">
								<span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Hide Quantity of Tickets</span>
								</div>
								<div class="col-xs-6">
									<select name="e_is_quantity_hide" class="pull-right" type="text" style="font-size:14px;height:100%;background:transparent;margin-left:5px;">
										<option value="1" selected="selected">Yes</option>
										<option value="0">No</option>
									</select>
								</div>

							</div>
                            <div class="row" style="margin-top:10px;background:#F2F2F2; padding:5px 8px;">
                                <div class="col-xs-6">
                                    <label class="col-sm-6">online event <i class="fa fa-question-circle" id="online-info" data-content="This event will have a virtual location." data-trigger="hover" data-placement="top"></i></label>
                                </div>
                                <div class="col-xs-6">
                                    <input id="e_is_online" name = "e_is_online" value="1" type="checkbox">
                                </div>
                            </div>
                            <div id="event_images_base" class="row" style="margin-top:10px;">

                            </div>
							<!--
							<div class="row" style="margin-top:10px;">
								<div class="col-md-3">
									<div style="background:#F2F2F2;">
									<span class="glyphicon glyphicon-camera"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div style="background:#F2F2F2;">
									<span class="glyphicon glyphicon-camera"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div style="background:#F2F2F2;">
									<span class="glyphicon glyphicon-camera"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div style="background:#F2F2F2;">
									<span class="glyphicon glyphicon-camera"></span>
									</div>
								</div>
							</div>-->
							
						</div>
						
					</div>
					<div style="width:100%;background:#F1F1F1;padding:10px;text-align:center;">
						<a href="#details" data-toggle="tab" class="btn" style="background:#1D74BB;color:white;">Previous</a>
						<button class="btn" style="background:#6D6E72;color:white;">Clear Page</button></a>
						<a href="#setup" data-toggle="tab"><button class="btn" style="background:#1D74BB;color:white;">Next</button></a>
					</div>					
				</div>
      
				
				<div class="tab-pane add_ticket_type" id="setup" style="position: relative;">
<!--					<div class="row" style="padding:4%;">-->

                        <div class="row ticket_group form-group-row" id="ticket_base0" style="padding:4%;">
						<div class="col-md-6">
							<input type="text" name='type[]' class="select_type form-control" placeholder="Ticket Type" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;">
							<textarea name='info[]' class="form-control" rows="3" placeholder="Ticket Info" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;"></textarea>
							<input type='text' name='max_date[]' class='form-control' placeholder='Deadline Date (yyyy/mm/dd)' style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;"><!--Need to change format to mm/dd/yyyy-->
							<div class="row" style="margin:0;margin-top:10px;background:#F2F2F2;padding-top:5px;padding-bottom:5px;">
								<div class="col-xs-6">
								<span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Deadline Time</span>
								</div>
								<div class="col-xs-6">
									<select name='max_time[]' type='time' type="text" class="pull-right form-control" style="font-size:14px;height:100%;background:transparent;margin-left:5px;">
										<option value="" selected="selected"></option> 
									<option value="00:00">12:00am</option>
									<option value="00:30">12:30am</option>
											<option value="01:00">1:00am</option>
									<option value="01:30">1:30am</option>
											<option value="02:00">2:00am</option>
									<option value="02:30">2:30am</option>
											<option value="03:00">3:00am</option>
									<option value="03:30">3:30am</option>
											<option value="04:00">4:00am</option>
									<option value="04:30">4:30am</option>
											<option value="05:00">5:00am</option>
									<option value="05:30">5:30am</option>
											<option value="06:00">6:00am</option>
									<option value="06:30">6:30am</option>
											<option value="07:00">7:00am</option>
									<option value="07:30">7:30am</option>
											<option value="08:00">8:00am</option>
									<option value="08:30">8:30am</option>
											<option value="09:00">9:00am</option>
									<option value="09:30">9:30am</option>
											<option value="10:00">10:00am</option>
									<option value="10:30">10:30am</option>
											<option value="11:00">11:00am</option>
									<option value="11:30">11:30am</option>
											<option value="12:00">12:00pm</option>
									<option value="12:30">12:30pm</option>
											<option value="13:00">1:00pm</option>
									<option value="13:30">1:30pm</option>
											<option value="14:00">2:00pm</option>
									<option value="14:30">2:30pm</option>
											<option value="15:00">3:00pm</option>
									<option value="15:30">3:30pm</option>
											<option value="16:00">4:00pm</option>
									<option value="16:30">4:30pm</option>
											<option value="17:00">5:00pm</option>
									<option value="17:30">5:30pm</option>
											<option value="18:00">6:00pm</option>
									<option value="18:30">6:30pm</option>
											<option value="19:00">7:00pm</option>
									<option value="19:30">7:30pm</option>
											<option value="20:00">8:00pm</option>
									<option value="20:30">8:30pm</option>
											<option value="21:00">9:00pm</option>
									<option value="21:30">9:30pm</option>
											<option value="22:00">10:00pm</option>
									<option value="22:30">10:30pm</option>
											<option value="23:00">11:00pm</option>
									<option value="23:30">11:30pm</option>
									</select>
								</div>
							</div>

						</div>
						<div class="col-md-6">
                            <input name="ticket_event_date[]" type="text" class="form-control" placeholder="Event Date" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;">
                            <div class="row" style="margin:0;margin-top:10px;background:#F2F2F2;padding-top:5px;padding-bottom:5px;">
                                <div class="col-xs-6">
                                    <span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Event Start</span>
                                </div>
                                <div class="col-xs-6">
                                    <select  name="ticket_start_time[]"type="text" class="pull-right" style="font-size:14px;height:100%;background:transparent;margin-left:5px;">
                                        <option value="" selected="selected"></option>
                                        <option value="00:00">12:00am</option>
                                        <option value="00:30">12:30am</option>
                                        <option value="01:00">1:00am</option>
                                        <option value="01:30">1:30am</option>
                                        <option value="02:00">2:00am</option>
                                        <option value="02:30">2:30am</option>
                                        <option value="03:00">3:00am</option>
                                        <option value="03:30">3:30am</option>
                                        <option value="04:00">4:00am</option>
                                        <option value="04:30">4:30am</option>
                                        <option value="05:00">5:00am</option>
                                        <option value="05:30">5:30am</option>
                                        <option value="06:00">6:00am</option>
                                        <option value="06:30">6:30am</option>
                                        <option value="07:00">7:00am</option>
                                        <option value="07:30">7:30am</option>
                                        <option value="08:00">8:00am</option>
                                        <option value="08:30">8:30am</option>
                                        <option value="09:00">9:00am</option>
                                        <option value="09:30">9:30am</option>
                                        <option value="10:00">10:00am</option>
                                        <option value="10:30">10:30am</option>
                                        <option value="11:00">11:00am</option>
                                        <option value="11:30">11:30am</option>
                                        <option value="12:00">12:00pm</option>
                                        <option value="12:30">12:30pm</option>
                                        <option value="13:00">1:00pm</option>
                                        <option value="13:30">1:30pm</option>
                                        <option value="14:00">2:00pm</option>
                                        <option value="14:30">2:30pm</option>
                                        <option value="15:00">3:00pm</option>
                                        <option value="15:30">3:30pm</option>
                                        <option value="16:00">4:00pm</option>
                                        <option value="16:30">4:30pm</option>
                                        <option value="17:00">5:00pm</option>
                                        <option value="17:30">5:30pm</option>
                                        <option value="18:00">6:00pm</option>
                                        <option value="18:30">6:30pm</option>
                                        <option value="19:00">7:00pm</option>
                                        <option value="19:30">7:30pm</option>
                                        <option value="20:00">8:00pm</option>
                                        <option value="20:30">8:30pm</option>
                                        <option value="21:00">9:00pm</option>
                                        <option value="21:30">9:30pm</option>
                                        <option value="22:00">10:00pm</option>
                                        <option value="22:30">10:30pm</option>
                                        <option value="23:00">11:00pm</option>
                                        <option value="23:30">11:30pm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="margin:0;margin-top:10px;background:#F2F2F2;padding-top:5px;padding-bottom:5px;">
                                <div class="col-xs-6">
                                    <span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Event End</span>
                                </div>
                                <div class="col-xs-6">
                                    <select  name="ticket_end_time[]" type="text" class="pull-right" style="font-size:14px;height:100%;background:transparent;margin-left:5px;">
                                        <option value="" selected="selected"></option>
                                        <option value="00:00">12:00am</option>
                                        <option value="00:30">12:30am</option>
                                        <option value="01:00">1:00am</option>
                                        <option value="01:30">1:30am</option>
                                        <option value="02:00">2:00am</option>
                                        <option value="02:30">2:30am</option>
                                        <option value="03:00">3:00am</option>
                                        <option value="03:30">3:30am</option>
                                        <option value="04:00">4:00am</option>
                                        <option value="04:30">4:30am</option>
                                        <option value="05:00">5:00am</option>
                                        <option value="05:30">5:30am</option>
                                        <option value="06:00">6:00am</option>
                                        <option value="06:30">6:30am</option>
                                        <option value="07:00">7:00am</option>
                                        <option value="07:30">7:30am</option>
                                        <option value="08:00">8:00am</option>
                                        <option value="08:30">8:30am</option>
                                        <option value="09:00">9:00am</option>
                                        <option value="09:30">9:30am</option>
                                        <option value="10:00">10:00am</option>
                                        <option value="10:30">10:30am</option>
                                        <option value="11:00">11:00am</option>
                                        <option value="11:30">11:30am</option>
                                        <option value="12:00">12:00pm</option>
                                        <option value="12:30">12:30pm</option>
                                        <option value="13:00">1:00pm</option>
                                        <option value="13:30">1:30pm</option>
                                        <option value="14:00">2:00pm</option>
                                        <option value="14:30">2:30pm</option>
                                        <option value="15:00">3:00pm</option>
                                        <option value="15:30">3:30pm</option>
                                        <option value="16:00">4:00pm</option>
                                        <option value="16:30">4:30pm</option>
                                        <option value="17:00">5:00pm</option>
                                        <option value="17:30">5:30pm</option>
                                        <option value="18:00">6:00pm</option>
                                        <option value="18:30">6:30pm</option>
                                        <option value="19:00">7:00pm</option>
                                        <option value="19:30">7:30pm</option>
                                        <option value="20:00">8:00pm</option>
                                        <option value="20:30">8:30pm</option>
                                        <option value="21:00">9:00pm</option>
                                        <option value="21:30">9:30pm</option>
                                        <option value="22:00">10:00pm</option>
                                        <option value="22:30">10:30pm</option>
                                        <option value="23:00">11:00pm</option>
                                        <option value="23:30">11:30pm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px;">
                                <div class="col-sm-6">
                                    <input type='number' min='1' name='e_quantity[]' class='form-control' placeholder="Quantity" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;">
                                </div>
                                <div class="col-sm-6">
                                    <input id="e_price" type="number" step="0.01" min="0.00" name="e_price[]"  class="e_price form-control" placeholder="Price" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;">
                                </div>
                            </div>
<!--                            <div class="row" style="text-align:right;margin-top:10px">-->
<!--                                <button class="btn" style="background:#808186;color:white;">Delete</button>-->
<!--                            </div>-->
						</div>

                            <div class="row" style="text-align:right;margin-top:10px;">
                                <button type="button" id="add_more" onclick="addMoreTickets();"class="btn" style="background:#2173BD;color:white;">Add</button>
                            </div>

					</div>



					<div style="width:100%;background:#F1F1F1;padding:10px;text-align:center;position:absolute;bottom: 0;">
						<a href="#customize" data-toggle="tab" class="btn" style="background:#1D74BB;color:white;">Previous</a>
						<button class="btn" style="background:#6D6E72;color:white;">Clear Page</button>
						<a href="#delivery" data-toggle="tab"><button class="btn" style="background:#1D74BB;color:white;">Next</button></a>
					</div>	
				</div>
                               
                                
                      
				
				<div class="tab-pane" id="delivery">
                    <div class="row" style="padding:8%;">
						<div class="col-md-3">
							<p><strong>Select the Delivery Method(s) you are offering</strong><p>
						</div>
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<button  id="delivery1" name="will_call" type="button" class="btn btn-lg delivery-method will-call" style="background:none;" >
										  <span class="icon-willcall_icon" style="font-size: 70px; color: black;"></span><br/>
										  <span style="color: black;font-size: 15px;font-weight:bold;">Will Call</span><br/>
										  <input id="input_will_call" name="will_call_input" type="text" value="1" hidden>
                                    </button>
								</div>	
								<div class="col-md-3 col-sm-6">
									<button id="delivery2" name="print" type="button" class="btn btn-lg delivery-method" style="background:none;">
										  <span class="icon-printathome_icon" style="font-size: 70px; color: black;"></span><br/>
										  <span style="color: black;font-size: 15px;font-weight:bold;">Print at Home</span><br/>
                                        <input id="input_print" name="print_input" type="text" value="2" hidden>
									</button>	
								</div>	
								<div class="col-md-3 col-sm-6">
									<button id="delivery3" name="mail" type="button" class="btn btn-lg delivery-method" style="background:none;">
										  <span class="icon-standardshipping_icon" style="font-size: 70px; color: black;"></span><br/>
										  <span style="color: black;font-size: 15px;font-weight:bold;">Standard Shipping</span><br/>
                                        <input id="input_mail" name="mail_input" type="text" value="4" hidden>
									</button>	
								</div>		
								<div class="col-md-3 col-sm-6">
									<button id="delivery4" name="paperless" type="button" class="btn btn-lg delivery-method paperless" style="background:none;">
										  <span class="icon-paperless_mobile_icon" style="font-size: 70px; color: black;"></span><br/>
										  <span style="color: black;font-size: 15px;font-weight:bold;">Paperless Version</span><br/>
                                        <input id="input_paperless" name="paperless_input" type="text" value="8" hidden>
									</button>	
								</div>
								
							</div>	
							<div class="row">
								<input name="will_call_info" class='form-control will-call-info' placeholder="Will Call Info (ie. Address for pick up)" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px; display:none;" hidden>
								<input name="paperless_info" class='form-control paperless-info' placeholder="Paperless Info" style="border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px; display:none;" hidden>
<!--									<script>-->
<!--									-->
<!--									$('.will-call').click(function(){-->
<!--										$('input.will-call-info').toggle('show');-->
<!--										$(this).toggleClass('delivery-method-clicked');-->
<!--									});-->
<!--									-->
<!--									$('.paperless').click(function(){-->
<!--										$('input.paperless-info').toggle('show');-->
<!--									});-->
<!--									</script>-->
							</div>
						</div>
						
					</div>	
					<div style="width:100%;background:#F1F1F1;padding:10px;text-align:center;">
						<a href="#setup" data-toggle="tab" class="btn" style="background:#1D74BB;color:white;">Previous</a>
						<button class="btn" style="background:#6D6E72;color:white;">Clear Page</button></a>
						
					</div>
                    <?php echo form_close();?>
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
    <!--<script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
   
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>-->
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/checkbox.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/imgpick.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
	    <script>
    	var vc='';
        function check_required_input() {
            if($('#exhgt').attr('primaryselected') === 'true'){}
            else{
                alert("Please make sure you selected a primary event category.");
                return false;
            }
            if($('#e_name').val()){}
            else{
                alert("Please make sure your event has a Title.");
                return false;
            }
            if($('#e_description').val()){}
            else{
                alert("Please make sure your event has a Description.");
                return false;
            }
            if($('#e_date').val()){
                var date_check = ($('#e_date').val()).split("/");
                //Check for 3 values.
                if(date_check.length === 3) {
                    //Check the month.
                    if(date_check[0].length === 2 && parseInt(date_check[0]) <= parseInt('12') && parseInt(date_check[0]) > parseInt('0')) {
                        //Check the day.
                        if(date_check[1].length === 2 && parseInt(date_check[1]) <= parseInt('31') && parseInt(date_check[1]) > parseInt('0')) {
                            //Check the year.
                            if(date_check[2].length === 4 && parseInt(date_check[2]) <= parseInt('9999') && parseInt(date_check[2]) > parseInt('0')) {}
                            else{
                                alert('Your date is invalid. Please try again and make sure you follow the format.');
                                return false;
                            }
                        }
                        else {
                            alert('Your date is invalid. Please try again and make sure you follow the format.');
                            return false;
                        }
                    }
                    else {
                        alert('Your date is invalid. Please try again and make sure you follow the format.');
                        return false;
                    }
                }
                else {
                    alert('Your date is invalid. Please try again and make sure you follow the format.')
                    return false;
                }
            }
            else{
                alert("Please make sure your event has a Date.");
                return false;
            }
            var good_deadline = true;
            $('.d_date').each(function() { 
	            if($(this).val()){
	                var date_check = ($(this).val()).split("/");
	                //Check for 3 values.
	                if(date_check.length === 3) {
	                    //Check the month.
	                    if(date_check[0].length === 2 && parseInt(date_check[0]) <= parseInt('12') && parseInt(date_check[0]) > parseInt('0')) {
	                        //Check the day.
	                        if(date_check[1].length === 2 && parseInt(date_check[1]) <= parseInt('31') && parseInt(date_check[1]) > parseInt('0')) {
	                            //Check the year.
	                            if(date_check[2].length === 4 && parseInt(date_check[2]) <= parseInt('9999') && parseInt(date_check[2]) > parseInt('0')) {}
	                            else{
	                                good_deadline = false;
	                                return false;
	                            }
	                        }
	                        else {
	                            good_deadline = false;
	                            return false;
	                        }
	                    }
	                    else {
	                        good_deadline = false;
	                        return false;
	                    }
	                }
	                else {
	                    good_deadline = false;
	                    return false;
	                }
	            }
	    });
	    if(good_deadline) {}
	    else {
	    	alert("Your deadline date is invalid. Please try again and make sure you follow the format.");
	    	return false;
	    }
            if($('#e_start_time').val()){}
            else{
                alert("Please make sure your event has a start time.");
                return false;
            }
//            if($('#verification_input').val()){}
//            else{
//                alert("Please make sure you entered the verification code.");
//                return false;
//            }

//            if($('#verification_input').val()==vc){
//
//              $('#vc_match').css('visibility','hidden');
//            }
//            else{
//                $('#vc_match').css('visibility','visible');
//                return false;
//            }
//            if($('#file-input').val()){}
//            else{
//                if(confirm('You did not select a file to upload, are you sure you want to continue?\n'
//                        + 'You will be given a default image')){
//                    return true;
//                }
//                else return false;
//            }
        }
        
        
                function reloadVerificationCode(){
	vc="";
	for(var i=1;i<4;i++){
	
	var p=Math.floor((Math.random() * 8) + 2);
	vc=vc+p;
	$('#verification_code_pic'+i).attr('src','https://wrevel.com/src/data/img/vc_'+p+'.png');
	}
//	window.alert("works"+vc);

}
        
    </script>
	
	
	<!--Add multiple days-->
	<script>
        function add_day() {
            var content = '<div class="row" style="margin:0;margin-top:10px;">'
			
							+'<div style="width:30%;float:left;background:#F2F2F2;padding-top:5px;padding-bottom:5px;">'
							+'<label style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Date '
							+'<input name="e_date[]" type="text" style="font-size:14px;height:100%;background:transparent;border:1px solid #999999;">'
							+'</label>'
							
							+'</div>'
							+'<div style="width:34%;float:left;background:#F2F2F2;padding-top:10px;padding-bottom:10px;margin-left:10px;height:44px;vertical-align:middle;">'
							+'<span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Time Start </span>'
								+'<select id="e_start_time" name="e_start_time[]" type="time" style="font-size:14px;background:transparent;margin-left:5px;">'
									+'<option value="" selected="selected"></option> '
									+'<option value="00:00">12:00am</option>'
									+'<option value="00:30">12:30am</option>'
											+'<option value="01:00">1:00am</option>'
									+'<option value="01:30">1:30am</option>'
											+'<option value="02:00">2:00am</option>'
									+'<option value="02:30">2:30am</option>'
											+'<option value="03:00">3:00am</option>'
									+'<option value="03:30">3:30am</option>'
											+'<option value="04:00">4:00am</option>'
									+'<option value="04:30">4:30am</option>'
											+'<option value="05:00">5:00am</option>'
									+'<option value="05:30">5:30am</option>'
											+'<option value="06:00">6:00am</option>'
									+'<option value="06:30">6:30am</option>'
											+'<option value="07:00">7:00am</option>'
									+'<option value="07:30">7:30am</option>'
											+'<option value="08:00">8:00am</option>'
									+'<option value="08:30">8:30am</option>'
											+'<option value="09:00">9:00am</option>'
									+'<option value="09:30">9:30am</option>'
											+'<option value="10:00">10:00am</option>'
									+'<option value="10:30">10:30am</option>'
											+'<option value="11:00">11:00am</option>'
									+'<option value="11:30">11:30am</option>'
											+'<option value="12:00">12:00pm</option>'
									+'<option value="12:30">12:30pm</option>'
											+'<option value="13:00">1:00pm</option>'
									+'<option value="13:30">1:30pm</option>'
											+'<option value="14:00">2:00pm</option>'
									+'<option value="14:30">2:30pm</option>'
											+'<option value="15:00">3:00pm</option>'
									+'<option value="15:30">3:30pm</option>'
											+'<option value="16:00">4:00pm</option>'
									+'<option value="16:30">4:30pm</option>'
											+'<option value="17:00">5:00pm</option>'
									+'<option value="17:30">5:30pm</option>'
											+'<option value="18:00">6:00pm</option>'
									+'<option value="18:30">6:30pm</option>'
											+'<option value="19:00">7:00pm</option>'
									+'<option value="19:30">7:30pm</option>'
											+'<option value="20:00">8:00pm</option>'
									+'<option value="20:30">8:30pm</option>'
											+'<option value="21:00">9:00pm</option>'
									+'<option value="21:30">9:30pm</option>'
											+'<option value="22:00">10:00pm</option>'
									+'<option value="22:30">10:30pm</option>'
											+'<option value="23:00">11:00pm</option>'
									+'<option value="23:30">11:30pm</option>'
							  +'</select>' 
							+'</div>'
							+'<div style="width:33%;float:left;background:#F2F2F2;padding-top:10px;padding-bottom:10px;margin-left:10px;height:44px;vertical-align:middle;">'
							+'<span style="font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;">Time End </span>'
								+'<select id="e_end_time" name="e_end_time[]" type="time" style="font-size:14px;background:transparent;margin-left:5px;">'
									+'<option value="" selected="selected"></option> '
									+'<option value="00:00">12:00am</option>'
									+'<option value="00:30">12:30am</option>'
											+'<option value="01:00">1:00am</option>'
									+'<option value="01:30">1:30am</option>'
											+'<option value="02:00">2:00am</option>'
									+'<option value="02:30">2:30am</option>'
											+'<option value="03:00">3:00am</option>'
									+'<option value="03:30">3:30am</option>'
											+'<option value="04:00">4:00am</option>'
									+'<option value="04:30">4:30am</option>'
											+'<option value="05:00">5:00am</option>'
									+'<option value="05:30">5:30am</option>'
											+'<option value="06:00">6:00am</option>'
									+'<option value="06:30">6:30am</option>'
											+'<option value="07:00">7:00am</option>'
									+'<option value="07:30">7:30am</option>'
											+'<option value="08:00">8:00am</option>'
									+'<option value="08:30">8:30am</option>'
											+'<option value="09:00">9:00am</option>'
									+'<option value="09:30">9:30am</option>'
											+'<option value="10:00">10:00am</option>'
									+'<option value="10:30">10:30am</option>'
											+'<option value="11:00">11:00am</option>'
									+'<option value="11:30">11:30am</option>'
											+'<option value="12:00">12:00pm</option>'
									+'<option value="12:30">12:30pm</option>'
											+'<option value="13:00">1:00pm</option>'
									+'<option value="13:30">1:30pm</option>'
											+'<option value="14:00">2:00pm</option>'
									+'<option value="14:30">2:30pm</option>'
											+'<option value="15:00">3:00pm</option>'
									+'<option value="15:30">3:30pm</option>'
											+'<option value="16:00">4:00pm</option>'
									+'<option value="16:30">4:30pm</option>'
											+'<option value="17:00">5:00pm</option>'
									+'<option value="17:30">5:30pm</option>'
											+'<option value="18:00">6:00pm</option>'
									+'<option value="18:30">6:30pm</option>'
											+'<option value="19:00">7:00pm</option>'
									+'<option value="19:30">7:30pm</option>'
											+'<option value="20:00">8:00pm</option>'
									+'<option value="20:30">8:30pm</option>'
											+'<option value="21:00">9:00pm</option>'
									+'<option value="21:30">9:30pm</option>'
											+'<option value="22:00">10:00pm</option>'
									+'<option value="22:30">10:30pm</option>'
											+'<option value="23:00">11:00pm</option>'
									+'<option value="23:30">11:30pm</option>'
							  +'</select>' 
							+'</div>'
						+'</div>'	;
						
            $('#event_day').append(content);
            
        }
    </script>
	
	 <script>
	$('#period').popover();
	$('#multiple').popover();
	</script>
	
	
    <script>
        function change_op_type(op_number) {
            $("#op_type_user").attr("value", op_number);
        }
    </script>
//add multiple tickets
<script>
    var type_counters = 1;
    //$(document).ready(function() {
        //reloadVerificationCode(); // load the code pic first
        function addMoreTickets(){
            var content = "<div class='row ticket_group form-group-row' id='ticket_base" +type_counters+ "' style='padding:4%;'>"
                +"<div class='col-md-6'>"

                +"<input name='type[]' type='text' class='select_type form-control' placeholder='Ticket Type' style='border-radius:0;background:#F2F2F2;border:none;box-shadow:none;' required>"
                +"<textarea name='info[]' class='form-control' rows='3' placeholder='Ticket Info' style='border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;'></textarea>"
                +"<input type='text' name='max_date[]' class='form-control' placeholder='Deadline Date (yyyy/mm/dd)' style='border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;'>"
                +"<div class='row' style='margin:0;margin-top:10px;background:#F2F2F2;padding-top:5px;padding-bottom:5px;'>"
                +"<div class='col-xs-6'>"
                +"<span style='font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;'>Deadline Time</span>"
                +"</div>"
                +"<div class='col-xs-6'>"
                +"<select name='max_time[]' type='time' class='pull-right form-control' style='font-size:14px;height:100%;background:transparent;margin-left:5px;'>"
                +"<option value='' selected='selected'></option>"
                +"<option value='00:00'>12:00am</option>"
                +"<option value='00:30'>12:30am</option>"
                +"<option value='01:00'>1:00am</option>"
                +"<option value='01:30'>1:30am</option>"
                +"<option value='02:00'>2:00am</option>"
                +"<option value='02:30'>2:30am</option>"
                +"<option value='03:00'>3:00am</option>"
                +"<option value='03:30'>3:30am</option>"
                +"<option value='04:00'>4:00am</option>"
                +"<option value='04:30'>4:30am</option>"
                +"<option value='05:00'>5:00am</option>"
                +"<option value='05:30'>5:30am</option>"
                +"<option value='06:00'>6:00am</option>"
                +"<option value='06:30'>6:30am</option>"
                +"<option value='07:00'>7:00am</option>"
                +"<option value='07:30'>7:30am</option>"
                +"<option value='08:00'>8:00am</option>"
                +"<option value='08:30'>8:30am</option>"
                +"<option value='09:00'>9:00am</option>"
                +"<option value='09:30'>9:30am</option>"
                +"<option value='10:00'>10:00am</option>"
                +"<option value='10:30'>10:30am</option>"
                +"<option value='11:00'>11:00am</option>"
                +"<option value='11:30'>11:30am</option>"
                +"<option value='12:00'>12:00pm</option>"
                +"<option value='12:30'>12:30pm</option>"
                +"<option value='13:00'>1:00pm</option>"
                +"<option value='13:30'>1:30pm</option>"
                +"<option value='14:00'>2:00pm</option>"
                +"<option value='14:30'>2:30pm</option>"
                +"<option value='15:00'>3:00pm</option>"
                +"<option value='15:30'>3:30pm</option>"
                +"<option value='16:00'>4:00pm</option>"
                +"<option value='16:30'>4:30pm</option>"
                +"<option value='17:00'>5:00pm</option>"
                +"<option value='17:30'>5:30pm</option>"
                +"<option value='18:00'>6:00pm</option>"
                +"<option value='18:30'>6:30pm</option>"
                +"<option value='19:00'>7:00pm</option>"
                +"<option value='19:30'>7:30pm</option>"
                +"<option value='20:00'>8:00pm</option>"
                +"<option value='20:30'>8:30pm</option>"
                +"<option value='21:00'>9:00pm</option>"
                +"<option value='21:30'>9:30pm</option>"
                +"<option value='22:00'>10:00pm</option>"
                +"<option value='22:30'>10:30pm</option>"
                +"<option value='23:00'>11:00pm</option>"
                +"<option value='23:30'>11:30pm</option>"
                +"</select>"
                +"</div>"
                +"</div>"
                +"</div>"

                +"<div class='col-md-6'>"

                +"<input name='ticket_event_date[]' type='text' class='select_type form-control' placeholder='Event Date'style='border-radius:0;background:#F2F2F2;border:none;box-shadow:none;margin-top:10px;'>"
                +"<div class='row' style='margin:0;margin-top:10px;background:#F2F2F2;padding-top:5px;padding-bottom:5px;'>"
                +"<div class='col-xs-6'>"
                +"<span style='font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;'>Event Start</span>"
                +"</div>"
                +"<div class='col-xs-6'>"
                +"<select name='ticket_start_time[]' type='time' class='pull-right form-control' style='font-size:14px;height:100%;background:transparent;margin-left:5px;'>"
                +"<option value='' selected='selected'></option>"
                +"<option value='00:00'>12:00am</option>"
                +"<option value='00:30'>12:30am</option>"
                +"<option value='01:00'>1:00am</option>"
                +"<option value='01:30'>1:30am</option>"
                +"<option value='02:00'>2:00am</option>"
                +"<option value='02:30'>2:30am</option>"
                +"<option value='03:00'>3:00am</option>"
                +"<option value='03:30'>3:30am</option>"
                +"<option value='04:00'>4:00am</option>"
                +"<option value='04:30'>4:30am</option>"
                +"<option value='05:00'>5:00am</option>"
                +"<option value='05:30'>5:30am</option>"
                +"<option value='06:00'>6:00am</option>"
                +"<option value='06:30'>6:30am</option>"
                +"<option value='07:00'>7:00am</option>"
                +"<option value='07:30'>7:30am</option>"
                +"<option value='08:00'>8:00am</option>"
                +"<option value='08:30'>8:30am</option>"
                +"<option value='09:00'>9:00am</option>"
                +"<option value='09:30'>9:30am</option>"
                +"<option value='10:00'>10:00am</option>"
                +"<option value='10:30'>10:30am</option>"
                +"<option value='11:00'>11:00am</option>"
                +"<option value='11:30'>11:30am</option>"
                +"<option value='12:00'>12:00pm</option>"
                +"<option value='12:30'>12:30pm</option>"
                +"<option value='13:00'>1:00pm</option>"
                +"<option value='13:30'>1:30pm</option>"
                +"<option value='14:00'>2:00pm</option>"
                +"<option value='14:30'>2:30pm</option>"
                +"<option value='15:00'>3:00pm</option>"
                +"<option value='15:30'>3:30pm</option>"
                +"<option value='16:00'>4:00pm</option>"
                +"<option value='16:30'>4:30pm</option>"
                +"<option value='17:00'>5:00pm</option>"
                +"<option value='17:30'>5:30pm</option>"
                +"<option value='18:00'>6:00pm</option>"
                +"<option value='18:30'>6:30pm</option>"
                +"<option value='19:00'>7:00pm</option>"
                +"<option value='19:30'>7:30pm</option>"
                +"<option value='20:00'>8:00pm</option>"
                +"<option value='20:30'>8:30pm</option>"
                +"<option value='21:00'>9:00pm</option>"
                +"<option value='21:30'>9:30pm</option>"
                +"<option value='22:00'>10:00pm</option>"
                +"<option value='22:30'>10:30pm</option>"
                +"<option value='23:00'>11:00pm</option>"
                +"<option value='23:30'>11:30pm</option>"
                +"</select>"
                +"</div>"
                +"</div>"

                +"<div class='row' style='margin:0;margin-top:10px;background:#F2F2F2;padding-top:5px;padding-bottom:5px;'>"
                +"<div class='col-xs-6'>"
                +"<span style='font-weight:normal;font-size:14px;text-align:left;color:#999999;margin-top:5px;'>Event End</span>"
                +"</div>"
                +"<div class='col-xs-6'>"
                +"<select name='ticket_end_time[]' type='time' class='pull-right form-control' style='font-size:14px;height:100%;background:transparent;margin-left:5px;'>"
                +"<option value='' selected='selected'></option>"
                +"<option value='00:00'>12:00am</option>"
                +"<option value='00:30'>12:30am</option>"
                +"<option value='01:00'>1:00am</option>"
                +"<option value='01:30'>1:30am</option>"
                +"<option value='02:00'>2:00am</option>"
                +"<option value='02:30'>2:30am</option>"
                +"<option value='03:00'>3:00am</option>"
                +"<option value='03:30'>3:30am</option>"
                +"<option value='04:00'>4:00am</option>"
                +"<option value='04:30'>4:30am</option>"
                +"<option value='05:00'>5:00am</option>"
                +"<option value='05:30'>5:30am</option>"
                +"<option value='06:00'>6:00am</option>"
                +"<option value='06:30'>6:30am</option>"
                +"<option value='07:00'>7:00am</option>"
                +"<option value='07:30'>7:30am</option>"
                +"<option value='08:00'>8:00am</option>"
                +"<option value='08:30'>8:30am</option>"
                +"<option value='09:00'>9:00am</option>"
                +"<option value='09:30'>9:30am</option>"
                +"<option value='10:00'>10:00am</option>"
                +"<option value='10:30'>10:30am</option>"
                +"<option value='11:00'>11:00am</option>"
                +"<option value='11:30'>11:30am</option>"
                +"<option value='12:00'>12:00pm</option>"
                +"<option value='12:30'>12:30pm</option>"
                +"<option value='13:00'>1:00pm</option>"
                +"<option value='13:30'>1:30pm</option>"
                +"<option value='14:00'>2:00pm</option>"
                +"<option value='14:30'>2:30pm</option>"
                +"<option value='15:00'>3:00pm</option>"
                +"<option value='15:30'>3:30pm</option>"
                +"<option value='16:00'>4:00pm</option>"
                +"<option value='16:30'>4:30pm</option>"
                +"<option value='17:00'>5:00pm</option>"
                +"<option value='17:30'>5:30pm</option>"
                +"<option value='18:00'>6:00pm</option>"
                +"<option value='18:30'>6:30pm</option>"
                +"<option value='19:00'>7:00pm</option>"
                +"<option value='19:30'>7:30pm</option>"
                +"<option value='20:00'>8:00pm</option>"
                +"<option value='20:30'>8:30pm</option>"
                +"<option value='21:00'>9:00pm</option>"
                +"<option value='21:30'>9:30pm</option>"
                +"<option value='22:00'>10:00pm</option>"
                +"<option value='22:30'>10:30pm</option>"
                +"<option value='23:00'>11:00pm</option>"
                +"<option value='23:30'>11:30pm</option>"
                +"</select>"
                +"</div>"
                +"</div>"

                +"<div class='row' style='margin-top:10px;'>"
                +"<div class='col-sm-6'>"
                +"<input type='number' max='500' min='1' name='e_quantity[]' class='form-control' placeholder='Quantity' style='border-radius:0;background:#F2F2F2;border:none;box-shadow:none;'>"
                +"</div>"
                +"<div class='col-sm-6'>"
                +"<input id='e_price' type='number' step='0.01' min='0.00' name='e_price[]' value='0.00' class='e_price form-control'  placeholder='Price' style='border-radius:0;background:#F2F2F2;border:none;box-shadow:none;'>"
                +"</div></div>"
                +"<div class='row'  style='text-align:right;margin-top:10px'>"
                +"<button type='button' class='remove_ticket btn' style='background:#808186;color:white;' >Delete</button>"
                +"</div>"
                +"</div>"
                +"</div>";

            $('.add_ticket_type').append(content);
            if($('#freeticket').val() == '1') {
                $('.e_price').hide();
            }
            else {
                $('.e_price').show();
            }
            $('.remove_ticket').on("click", function() {
                $(this).parent().parent().parent().remove();
                type_counters--;
            });

            type_counters++;
        }
    $('#freeticket').change(function () {
        if($(this).val() == '1') {
            $('.e_price').hide();
        }
        else {
            $('.e_price').show();
        }
    });
</script>

    <script>
        function show_users(e) {
            //var regex = new RegExp("^[a-zA-Z0-9_]*$");
            if (e.keyCode) key = e.keyCode;
            //else if(e.which) key = e.which;
            if(/[a-zA-Z0-9 ]/.test(String.fromCharCode(key)) || key == 8) {
                var search_value = $('#search_users').val();
                //First set the search_value checker .
                (function(search_value) {
                    //Amount of time to wait before actually doing the search.
                    setTimeout(function () {
                        $('.users_group').each(function() { 
                            //If value isn't finished typing then skip this function and go to the next.
                            if(search_value != $('#search_users').val()) {
                                return false;
                            }
                            //Check if an alphanumeric is typed in.
                            else {
                                if(($(this).html()).indexOf($('#search_users').val()) > -1 && $('#search_users').val().length >= 0) {
                                    $(this).parent().show();
                                }
                                else
                                    $(this).parent().hide();
                            }
                        })
                    },1000);
                }(search_value));
            }
        }
    </script>
    <script>
        function show_events(e) {
            //var regex = new RegExp("^[a-zA-Z0-9_]*$");
            if (e.keyCode) key = e.keyCode;
            //else if(e.which) key = e.which;
            if(/[a-zA-Z0-9 ]/.test(String.fromCharCode(key)) || key == 8) {
                var search_value = $('#search_events').val();
                //First set the search_value checker .
                (function(search_value) {
                    //Amount of time to wait before actually doing the search.
                    setTimeout(function () {
                        $('.events_group').each(function() { 
                            //If value isn't finished typing then skip this function and go to the next.
                            if(search_value != $('#search_events').val()) {
                                return false;
                            }
                            //Check if an alphanumeric is typed in.
                            else {
                                if(($(this).html()).indexOf($('#search_events').val()) > -1 && $('#search_events').val().length >= 0) {
                                    $(this).parent().show();
                                }
                                else
                                    $(this).parent().hide();
                            }
                        })
                    },1000);
                }(search_value));
            }
        }
    </script>
    <script>
        function show_featured(e) {
            //var regex = new RegExp("^[a-zA-Z0-9_]*$");
            if (e.keyCode) key = e.keyCode;
            //else if(e.which) key = e.which;
            if(/[a-zA-Z0-9 ]/.test(String.fromCharCode(key)) || key == 8) {
                var search_value = $('#search_featured').val();
                //First set the search_value checker .
                (function(search_value) {
                    //Amount of time to wait before actually doing the search.
                    setTimeout(function () {
                        $('.featured_group').each(function() { 
                            //If value isn't finished typing then skip this function and go to the next.
                            if(search_value != $('#search_featured').val()) {
                                return false;
                            }
                            //Check if an alphanumeric is typed in.
                            else {
                                if(($(this).html()).indexOf($('#search_featured').val()) > -1 && $('#search_featured').val().length >= 0) {
                                    $(this).parent().show();
                                }
                                else
                                    $(this).parent().hide();
                            }
                        })
                    },1000);
                }(search_value));
            }
        }
    </script>
    <script>
        function show_all_users() {
            $('.users_group').parent().show();
            $('#search_users').val('');
        }
        function show_new_users() {
            $('.users_group_date').each(function() {
                if(parseInt($(this).next().html()) < 7) {
                    $(this).parent().show();
                }
                else {
                    $(this).parent().hide();
                }
            });
        }
        function show_current_users() {     
            $('.users_group_date').each(function() {
                if(parseInt($(this).next().html()) < 1) {
                    $(this).parent().show();
                }
                else {
                    $(this).parent().hide();
                }
            }); 
        }
    </script>
    <script>
        function show_all_events() {
            $('.events_group').parent().show();
            $('#search_events').val('');
        }
        function show_new_events() {
            $('.events_group_created').each(function() {
                if(parseInt($(this).next().html()) < 7) {
                    $(this).parent().show();
                }
                else {
                    $(this).parent().hide();
                }
            });
        }
        function show_current_events() {     
            $('.events_group_created').each(function() {
                if(parseInt($(this).next().html()) < 1) {
                    $(this).parent().show();
                }
                else {
                    $(this).parent().hide();
                }
            }); 
        }
    </script>
    <script>
        function change_category(i, value) {
            $(i).parent().parent().parent().siblings('#category_change').attr("value", value);
            $(i).parent().parent().parent().children('#category_button').html($(i).html());
            console.log($(i).parent().parent().parent().siblings('#category_change').val());
        }
    </script>
    <script>
        function set_display_values(id,title,body,author) {
            $('#blog_id_edit').attr('value', id);
            $('#blog_title_edit').attr('placeholder', title);
            $('#blog_body_edit').attr('placeholder', body);
            $('#blog_author_edit').attr('placeholder', author);
        }
    </script>

    <script>
    	$(document).ready(function() {
    		$('input[type=radio][name=multi_e_is_ticketed0]').change(function() {
            if (this.value == '1') {
                $("#multi_add_more_base").show();
                $(this).parent().parent().siblings("#multi_add_more_base").children().click();
                //$(this).siblings("#multi_add_more").trigger("click");
            }
            else if (this.value == '0') {
                $("#multi_add_more_base").hide();
                $(".multi_ticket_group").remove();
            }
        });
	});
    </script>

    <script>
        //second form
        document.getElementById("e_name").onkeyup=function(){TypeInWrevsDetails()};
        document.getElementById("e_description").onkeyup=function(){TypeInWrevsDetails()};
        document.getElementById("e_date").onkeyup=function(){TypeInWrevsDetails()};
        document.getElementById("e_start_time").onclick=function(){TypeInWrevsDetails()};
        function TypeInWrevsDetails()
        {

            var name_value = document.getElementById("e_name").value;
            var description_value = document.getElementById("e_description").value;
            var date_value = document.getElementById("e_date").value;
            var start_time_value = document.getElementById("e_start_time").value;
            if(name_value!="" && description_value!="" && date_value!="" && start_time_value!=""){

                document.getElementById("details_form").innerHTML = "Type in the Wrevs details &#10003";
            }else{
                document.getElementById("details_form").innerHTML = "Type in the Wrevs details";
            }

        }

        //third form
        document.getElementById("isTicked").onclick=function(){isChooseTicked();};
            function isChooseTicked(){
                if($( "#isTicked option:selected" ).val()=="0"){
                    $("#tickets_form").hide();
                    $("#delivery_form").hide();
                }else{
                    if($("#freeticket").val()=="1"){
                        $('.e_price').hide();
                        $("#tickets_form").show();
                        $("#delivery_form").show();
                    }
                    else{
                        $('.e_price').show();
                        $("#tickets_form").show();
                        $("#delivery_form").show();
                    }
                }
            }



        //fifth from:delivery choose
        document.getElementById("delivery1").onclick=function(){displayDeliveryCharge1()};
        function displayDeliveryCharge1()
        {
            //add info to fill
            $(".paperless-info").hide();

            //edit the name of three buttons so that we can get what we want in controller file
            var $$ = $("#delivery1");
            if( !$$.is('.checked')){
                $$.addClass('checked');
                document.getElementById("input_will_call").setAttribute('name', 'will_call_active');
                $(".will-call-info").show();
            }
            else {
                $$.removeClass('checked');
                document.getElementById("input_will_call").setAttribute('name', 'will_call_input');
                $(".will-call-info").hide();
            }
            document.getElementById("delivery_form").innerHTML = "Delivery Method Set up &#10003";
        }

        document.getElementById("delivery2").onclick=function(){displayDeliveryCharge2()};
        function displayDeliveryCharge2()
        {

            $(".will-call-info").hide();
            $(".paperless-info").hide();

            //edit the name of three buttons so that we can get what we want in controller file
            var $$ = $("#delivery2");
            if( !$$.is('.checked')){
                $$.addClass('checked');
                document.getElementById("input_print").setAttribute('name', 'print_active');
            }
            else {
                $$.removeClass('checked');
                document.getElementById("input_print").setAttribute('name', 'print_input');
            }
            document.getElementById("delivery_form").innerHTML = "Delivery Method Set up &#10003";
        }

        document.getElementById("delivery3").onclick=function(){displayDeliveryCharge3()};
        function displayDeliveryCharge3()
        {
            //add info to fill
            $(".will-call-info").hide();
            $(".paperless-info").hide();

            //edit the name of three buttons so that we can get what we want in controller file
            var $$ = $("#delivery3");
            if( !$$.is('.checked')){
                $$.addClass('checked');
                document.getElementById("input_mail").setAttribute('name', 'mail_active');
            }
            else {
                $$.removeClass('checked');
                document.getElementById("input_mail").setAttribute('name', 'mail_input');
            }

            document.getElementById("delivery_form").innerHTML = "Delivery Method Set up &#10003";
        }

        document.getElementById("delivery4").onclick=function(){displayDeliveryCharge4()};
        function displayDeliveryCharge4()
        {
            //add info to fill
            $(".will-call-info").hide();

            //edit the name of three buttons so that we can get what we want in controller file
            var $$ = $("#delivery4");
            if( !$$.is('.checked')){
                $$.addClass('checked');
                document.getElementById("input_paperless").setAttribute('name', 'paperless_active');
                $(".paperless-info").show();
            }
            else {
                $$.removeClass('checked');
                document.getElementById("input_paperless").setAttribute('name', 'paperless_input');
                $(".paperless-info").hide();
            }

            document.getElementById("delivery_form").innerHTML = "Delivery Method Set up &#10003";
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