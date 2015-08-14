<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $event[0]['e_name']?> | Wrevel - Discover Your World, Host & Experience Events</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="<?php echo $path['PATH_BOOTSTRAP']?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $path['PATH_BOOTSTRAP']?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $path['PATH_BOOTSTRAP']?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $path['PATH_BOOTSTRAP']?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $path['PATH_BOOTSTRAP']?>css/main.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/event-lightbox.css" rel="stylesheet">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<meta name="description" content="<?php echo $event[0]['e_description']?>">

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
<div class="container event-full-view-container" style="padding-bottom:50px; margin-top:80px;">
<div class="row" style="margin-top:50px; font-size:25px; ">
			<div class="col-md-1">
            
            	<!--Image changes based on what type of event-->
                <?php if($category != 'latest') {?>
            	<a href="<?php echo base_url().'main/get_related_events/'.$category?>"><img class="event-type-image" src="<?php echo $path['PATH_IMG'].$category;?>_fullbutton.png" style="position:absolute; z-index:1;  display:block;"/></a>
                <?php } else {?>
                <a href="<?php echo base_url().'main/get_latest_events'?>"><img class="event-type-image" src="<?php echo $path['PATH_IMG'].$category;?>_fullbutton.png" style="position:absolute; z-index:1;  display:block;"/></a>
                <?php }?>
            </div>
		<div class="col-md-10 event-stuff" style="color:white;padding:0 26px;">
        	
            
			<div class="col-md-6 event-title" style="background:<?php echo $style[$category]['theme-color-1']?>; padding:17px; text-align:center;">
                            <!--name of event-->
                    <strong><small><?php $event_name_temp = substr($event[0]['e_name'],0,14); echo $event_name_temp?></small></strong>
                        <?php if(isset($email)) {
                            if($email == $user_email_temp[0]['email']) {?>
                        <a id="check_user" class="pull-right" href="#" data-toggle="modal" data-target="#editEventModal">
                            <button type="button" class="btn evtlistingbtn" style="z-index:2;">Edit Event Listing</button>
                        </a>
                        <?php }}?>
                        <div class="modal fade" id="editEventModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style="background:#c2d2dc;border:none;">
                                    
                                        <div class="modal-header" style="background-color: 
                                        #628DA3;padding:10px;">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>	
                                            <p style="font-size: 26px; color: white;text-align: center;"><i class="fa fa-pencil-square-o" style="font-size:30px;"></i> Edit Your Wrev</p>
                                        </div>
                                        <div class="modal-body" style="text-align:left;font-size:20px; color:black;background:#c2d2dc;">
                                            <?php echo form_open_multipart(base_url().'event/edit_event/'.$event[0]['event_id'])?>   
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group row">
                                                         <label class="col-sm-2 control-label">Title</label>
                                                            <div class="col-sm-10">
                                                                <input id="e_name" name="e_name" type="text" class="form-control" placeholder="<?php echo $event[0]['e_name']?>" >
                                                            </div>
                                                    </div>       
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label">Info</label>
                                                            <div class="col-sm-10">
                                                                <textarea id="e_description" name="e_description" class="form-control" rows="3" placeholder="<?php echo $event[0]['e_description']?>"></textarea>
                                                            </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label">Date</label>
                                                            <div class="col-sm-3">
                                                                <input id="e_date" name="e_date" type="date" class="form-control" placeholder="<?php echo $event[0]['e_date']?>">
                                                            </div>
                                                            <label class="col-sm-1 control-label">Start Time</label>
                                                                <div class="col-sm-2">
                                                                    <select id="e_start_time" name="e_start_time" type="time" class="form-control" style="padding:0;">
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
                                                                <label class="col-sm-1 control-label">End Time</label>
                                                                <div class="col-sm-2">
                                                                    <select id="e_end_time" name="e_start_time" type="time" class="form-control" style="padding:0;">
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
                                                    <!--<div class="form-group text-left" >
                                                        <label class="control-label" style="margin-left:20px;">Hide Location</label>
                                                            <input type="checkbox" name="yes" value="yes"> 
                                                    </div>-->  
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label">Location</label>
                                                            <div class="col-sm-10">
                                                                <input id="e_address" name="e_address" type="text" class="form-control" placeholder="<?php echo $event[0]['e_address']?>">
                                                            </div>
                                                    </div>    
                                                    <div class="form-group">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 control-label">City</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" class="form-control" name = "e_city" placeholder="<?php echo $event[0]['e_city']?>">
                                                                </div>
                                                                <label class="col-sm-1 control-label">State</label>
                                                                    <div class="col-sm-2">
                                                                        <select name="e_state" type="text" class="form-control">
                                                                            <option value="" selected="selected"></option> 
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
                                                                    <label class="col-sm-1 control-label">Zip</label>
                                                                        <div class="col-sm-2">
                                                                            <input name="e_zipcode" type="text" class="form-control" placeholder="<?php echo $event[0]['e_zipcode']?>">
                                                                        </div>
                                                        </div>   
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label">Country</label>
                                                            <div class="col-sm-10">
                                                                <select name="e_country" type="text" class="form-control" style="padding:0;font-size:12px;">
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
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 control-label">Phone</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" class="form-control" placeholder="<?php echo $event[0]['e_phone']?>">
                                                                </div>
                                                                <label class="col-sm-2 control-label">Email</label>
                                                                    <div class="col-sm-5">
                                                                        <input name="e_email" type="email" class="form-control" placeholder="<?php echo $event[0]['e_email']?>">
                                                                    </div>
                                                        </div>   
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label">Website</label>
                                                            <div class="col-sm-10">
                                                                <input name="e_website" type="text" class="form-control" placeholder="<?php echo $event[0]['e_website']?>" >
                                                            </div>
                                                    </div>
                                                    <!--<div class="form-group row">
                                                        <label class="col-sm-2 control-label">Price</label>
                                                            <div class="col-sm-10">
                                                                <input name="e_pricetemp" type="text" class="form-control" placeholder="<?php echo $event[0]['e_pricetemp']?>" >
                                                            </div>
                                                    </div>-->
                                                    <div class="form-group row">
                                                        <label class="col-sm-2">Event Image</label>
                                                        <div class="col-sm-4">
                                                            <div class="image-upload">
                                                                <label for="file-input-event">
                                                                    <img src="<?php echo base_url()."uploads/".$event[0]['e_image']?>"style="max-width:90%; min-width:90%; padding:2%;"/>
                                                                </label>
                                                                <label for ="file-upload" ></label>
                                                                <input id="file-input-event" name = "eventfile" type = "file" style="overflow:hidden;"/>
                                                                <input id="file-upload" type = "submit" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2">Event Photos</label>
                                                        <div class="col-sm-4" id="edit_event_photos_base">
                                                            <div class="image-upload">
                                                                <input id="file-input" name = "edit_event_photos[]" type = "file" style="overflow:hidden;"/>
                                                            </div>
                                                        </div>
                                                        <a id="edit_more_event_photos" class="btn pull-right" type="button" onclick="edit_more_event_photos()">Add More</a>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2">Event Type</label>
                                                        <input type="radio" name="e_private" value="public"> public
                                                        <input type="radio" name="e_private" value="1"> private
                                                    </div>
                                                    <div class="row" style="text-align:center;">
                                                        <input type="submit" name="submit" value="Submit" class="btn btn-lg" style="background:#1C75BC;margin-top:20px; color:white;">
                                                    </div> 
                                            <?php echo form_close();?>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
            <div class="col-md-2 col-sm-6 likeshareinvite" style="background:#566699; padding:17px;">
            	<!--number of likes-->
            	<!--<?php echo $event[0]['e_likes']?> <i class="fa fa-heart-o"></i>-->
            	<!--Click to Like-->
            	<?php if($this->session->userdata('is_logged_in')) {?>
            	<a style="color:white;" href="<?php echo base_url().'event/like_event/'.$event_id?>"><i class="fa fa-heart-o"></i></a> | 
                <?php }?>
                
                <!--Click to Add to Palette  (Rollout feature)
                <a style="color:white;" href="#"><span class="glyphicon glyphicon-list-alt"></span></a> | -->
                
                <!--Click to Share-->
                <a style="color:white;" href="#" data-toggle="modal" data-target="#shareModal"><i class="fa fa-share-square-o"></i></a> 
                
                <!--Popup for share this-->
                <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                         <div class="modal-content" style="background:#c2d2dc;">
                              <div class="modal-header" style="background:#628da3; color:white;text-align:center;">
                              <button type="button" class="close" data-dismiss="modal" style="color:white;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <i class="fa fa-share-square-o"></i> Share on Social Media
                              </div>
                              <div class="modal-body">
                                   
<span class='st_sharethis_large' displayText='ShareThis'></span>
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_email_large' displayText='Email'></span>
                               </div>
                         </div>
                    </div>
                 </div>
                 
                <!--Click to Invite friends--> 
                <?php if($this->session->userdata('is_logged_in')) {?>
                | <a style="color:white;" href="#" data-toggle="modal" data-target="#invite"><i class="fa fa-users"></i></a>
                <?php }?>
                <!--Popup to invite friends-->
                <div class="modal fade" id="invite" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                         <div class="modal-content" style="background:#C2D2DC;">
                              <div class="modal-header" style="background:#628da3; color:white;">
                                   <button type="button" class="close" data-dismiss="modal" style="color:white;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <i class="fa fa-users"></i> Invite Your Friends
                               </div>
                               <div class="modal-body" style="color:black; font-size:18px;">  
                                    <!--<input type="checkbox"> Select All -->
                                    <form class="form-horizontal" role="form" method="post" action="<?php echo base_url()."event/invite_friends/".$event[0]['event_id']?>">
                                         <div style="text-align:left; height:360px; overflow-y:auto; display:inline-block; padding-top:10px;">   
						<?php 
						if(isset($friends_to_invite)){
					     for($i = 0; $i < count($friends_to_invite); $i++) {?>
						<div style="float-left; width:130px;display:inline-block;">
							<label class="checkbox-inline">
							<input type="checkbox" name="friend_box[]" value="<?php echo $friends_to_invite[$i]['user_id']?>"> <img src="<?php echo base_url().'uploads/'.$friends_to_invite[$i]['image_key']?>" style="border-radius:150%; width:80px; height:80px;"/><p style="text-align:center; width:auto;"><?php echo $friends_to_invite[$i]['fullname'];?></p>
							</label>
						</div>
					     <?php }}?>	
                                         </div>
	                                 <button class="btn" type="submit" style="font-size:18px; background:#1D74B9;color:white;">Send Invitation</button> 
	                            </form>  
                                </div>
                           </div>
                       </div>
                </div><!--end of popup-->
            </div>
            <div class="col-md-4 col-sm-6 status-bar" style="background:#33a4a7; padding:14px; text-align:center;">
            	<?php if(!$event[0]['finalized']){?>
                    <a href="<?php echo base_url()."event/attend_event/".$event_id."/5"?>" class="btn status" style="border:1px solid white; font-size:20px;border-radius:10px;">I&rsquo;m going</a>
                    <a href="<?php echo base_url()."event/attend_event/".$event_id."/5"?>" class="btn status" style="border:1px solid white; font-size:20px;border-radius:10px;">Maybe</a>
                    <a href="<?php echo base_url()."event/remove_event/".$event_id."/5"?>" class="btn status" style="border:1px solid white; font-size:20px;border-radius:10px;">No</a>
                <?php } else {?>
                    <a href="javascript:void(0);" class="btn status" style="border:1px solid white; font-size:20px;border-radius:10px;"><strike>I&rsquo;m going</strike></a>
                    <a href="javascript:void(0);" class="btn status" style="border:1px solid white; font-size:20px;border-radius:10px;"><strike>Maybe</strike></a>
                    <a href="javascript:void(0);" class="btn status" style="border:1px solid white; font-size:20px;border-radius:10px;"><strike>No</strike></a>
                <?php }?>
            </div>
        </div>    
	</div>
    <div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default" style="-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3); border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-top-left-radius:0px;border-top-right-radius:0px;">    	
        		<div class="panel-body background" style="padding: 1% 5% ; font-size:20px;">
                	<div class="row" style="text-align:center; font-size:23px;padding:3%;">
                    	
                    	<div class="col-md-2 col-sm-2 col-xs-6">
                        	
                                	<p><span class="glyphicon glyphicon-calendar"></span> Date</p>
                                    
                                    <!-- Date of event happening -->
                                    <p style="font-size:20px;"><?php echo $event[0]['e_date']?></p>
                                    <img src="<?php echo $PATH_IMG?>/dot.png" class="line" style="width:1px; height: 70px; margin-top:-130px; margin-left:120%;">
                                
                        </div>
                        
                        <div class="col-md-3 col-sm-3 col-xs-6" style"border-style: solid; border-left-color: black;">
                        	
                                	<p><span class="glyphicon glyphicon-time"></span> Time</p>
                                    
                                    <!--Time event takes place -->
                                    <p style="font-size:20px;"><?php
					$this->load->helper('date');
					$datestring = "%h:%i";
				    
					echo $event[0]['e_start_time'];
					//echo unix_to_human($event[0]['e_end_time'])
					
					
					?> - 
					<?php
					
					//$datestring = "%h:%i";
					
					echo $event[0]['e_end_time'];
					//echo unix_to_human($event[0]['e_end_time'])
					
					
					?>
					
				    </p>
				    <img src="<?php echo $PATH_IMG?>/dot.png" class="line hide-line" style="width:1px; height: 70px; margin-left:110%;">
                                
                        </div>
                        
                        <div class="col-md-2 col-sm-2 col-xs-4">
                        	
                                	<p><i class="fa fa-money"></i> Price</p>
                                    
                                    <!--how much event cost-->
                                    <p style="font-size:20px;"><?php echo $event[0]['e_pricetemp']?></p>
                                    
                               <img src="<?php echo $PATH_IMG?>/dot.png" class="line" style="width:1px; height: 70px; margin-top:-130px;margin-left:110%;">
                        </div>
                        
                        <div class="col-md-3 col-sm-3 col-xs-4">
                        	
                                	<p><span class="glyphicon glyphicon-user"></span> Attending</p>
                                    
                                    <!--how many people are attending-->
                                    <p style="font-size:20px;"><?php echo $event[0]['e_attending']?></p>
                                    <img src="<?php echo $PATH_IMG?>/dot.png" class="line attending-line" style="width:1px; height: 70px; margin-left:110%;">
                               
                        </div>
                         <div class="col-md-2 col-sm-2 col-xs-4">
                        	
                                	<p><i class="fa fa-heart-o"></i> Likes</p>
                                    
                                    <!--how many likes-->
                                    <p style="font-size:20px;"><?php echo $event[0]['e_likes']?> </p>
                                    
                               
                        </div>
                    </div>
                    <!--<hr style="border-color:#C7D1DA;">-->
                    <div class="row">
                    	<div class="col-md-6">
                        	<div class="row" style="text-align:center;">
                            	<!--image of event-->
                            	<!--<img src="<?php echo $path['PATH_IMG']?>party.jpg" style="max-width:0%; min-width:100%; "/>-->
                            	 <img src="<?php echo base_url()."uploads/".$event[0]['e_image']?>"style="max-width:90%; min-width:90%; padding:2%;"/>

                            </div>
                            <!-- PHOTOS -->
                            <div style="margin-top:40px;">
                                <h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>photo_icon.png"/> &nbsp; Photos:</h4>
                                <?php if(!empty($event['photos'])) {?>
                                <div style="padding:0% 5%;font-size:18px;line-height:70%;">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                        <div class="carousel-inner" role="listbox">
                                            <?php 
                                            $first = true;
                                            foreach($event['photos'] as $picture){
                                                    if($first) {?>
                                                    <div class="item active">
                                                            <a href="<?php echo base_url().'uploads/events/'.$event[0]['event_id'].'/photos/'.$picture?>" rel="lightbox">
                                                            <img class="img-responsive" style="margin-left:auto;margin-right:auto;height:250px;max-height:250px;" src="<?php echo base_url().'uploads/events/'.$event[0]['event_id'].'/photos/'.$picture?>" alt="...">
                                                            </a>
                                                    </div>
                                                    <?php $first = false;
                                                    } else {?>
                                                    <div class="item">
                                                            <a href="<?php echo base_url().'uploads/events/'.$event[0]['event_id'].'/photos/'.$picture?>" rel="lightbox"> <img class="img-responsive" style="margin-left:auto;margin-right:auto;height:250px;max-height:250px;" src="<?php echo base_url().'uploads/events/'.$event[0]['event_id'].'/photos/'.$picture?>" alt="..."></a>
                                                    </div>

                                            <?php }}?> 
                                        </div>
                                        <a class="left carousel-control" style="background:none;" href="#carousel-example-generic" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" style="background:none;" href="#carousel-example-generic" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <?php } else { echo 'There are no photos for this event'; }?>
                            </div><!-- END OF PHOTOS -->
                            <div class="row" style="padding:0 10px 0;">
                            	
                                    <h3><i class="fa fa-exclamation-circle"></i> What is this?</h3>
                                    
                                    <!--Description-->
                                    <p style="padding:10px 20px;"><?php echo $event[0]['e_description']?></p>
                            </div>
                        </div>
                        <div class="col-md-6" style="text-align:center;margin-top:10px;">              	
                            <div class="row" style="color:white;">
                            	<a href="<?php echo base_url().'wrevenues/wrevenues_main'?>" class="btn viewmorewrevs" style="border-radius:10px;font-size:23px;color:white;">View Wrevenue</a>
                                
                                <!--Ticketing System button-->
                                <?php if($event[0]['e_is_ticketed']) {?>
                                	<a <?php if(!$this->session->userdata('is_logged_in')){ ?>
                                         href= "<?php echo base_url()."event/attend_event/".$event[0]['event_id']."/5"?>" <?php
                                        $previous_page = $this->session->userdata('refresh_page');
                                        $this->session->set_userdata('redirect', $previous_page.$event[0]['event_id']);
                                    }else{ ?>
                                        href='#' data-toggle='modal' data-target='#largeModal'<?php } ?> class='btn viewmorewrevs buy-ticket' style='border-radius:10px;font-size:23px;color:white;'>Buy Tickets</a>
                                    <?php } ?>

                                <!--buy ticket-->
                                <div style="color:black;">
                                <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
									  <b><?php echo $event[0]['e_name'] ?></b>
								  </span>

								  <span style="font-size: 110%; color: white;float: right;margin-top: 10px;">
									  <?php echo $event[0]['e_date'] ?>
								  </span>
                                </div>

                                <div class="panel-body" style="text-align:center; padding: 10px 0px;">
                                    <div class="col-md-5" style="padding: 0px;">
                                        <div style="background-color: white; padding: 30px; height: 300px; font-size: 17px;">
                                            <span><b><?php echo $event[0]['e_date'] ?></b> <span style="color: grey;">at</span> <b><?php echo $event[0]['e_start_time'] ?></b></span><br/>
<!--                                            <span><b>Nov 7</b> <span style="color: grey;">at</span> <b>5:00pm</b></span>-->
<!--                                            <hr style="margin: 10px; border-width: 2px; border-color: black;"/>-->
<!--                                            <span><b>Brooklyn Center</b></span><br/>-->
                                            <hr style="margin: 10px;border-width: 2px; border-color: black;"/>
                                            <span><b><?php echo $event[0]['e_address'] ?></b> <span style="color: grey;"><?php echo $event[0]['e_city'] ?></span></span><br/>
<!--                                            <hr style="margin: 10px;border-width: 2px; border-color: black;"/>-->
<!--                                            <span><span style="color: grey;">Tickets available from</span> <b>$20-$40</b></span><br/>-->
                                            <?php if(!isset($event[0]['e_address'])){?><hr style="margin: 10px;border-width: 2px; border-color: black;"/> <?php }?>
                                            <span style="color: grey;">This event is for ages 21 and over</span><br/>
                                        </div>

                                    </div>
                                    <div class="col-md-7" style="padding: 0px 10px;">
                                        <div style="background-color: #ffffff; padding: 50px 70px; text-align: left;">
                                            <p style="font-size:17px;">
                                                <?php echo $event[0]['e_description'] ?><br/>
<!--                                                <a href="#" style="float: right;">Read More</a>-->
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
                                    <?php for($i = 0; $i < count($event_ticket_types); $i++) {?>
                                    <div class="col-md-6" style="height: 80px; margin-top: 20px; text-align: left;">
                                        <span style="font-size: 20px;"><?php echo $event_ticket_types[$i]['type'];?><br/></span>
								  <span style="color: grey;"><?php echo $event_ticket_types[$i]['info'];?></span>
                                    </div>
                                    <div id="span_first_price_<?php echo $i+1;?>" class="col-md-2" style="color: #009344; height: 80px; margin-top: 20px; font-size: 20px;"><?php echo $event_ticket_types[$i]['price'];?></div>
                                    <div class="col-md-4" style="height: 80px; margin-top: 20px;"><a href="javascript:chkAddAmount(<?php echo $i+1;?>, -1)" onfocus="this.blur();">
                                            <span class="icon-minus_box" style="font-size: 40px;vertical-align: middle;" align="absmiddle" /></a>&nbsp;
                                        <input id="input_count_<?php echo $i+1;?>" name="input_count_<?php echo $i+1;?>" type="text" class="input_sl" value="0" style="width: 50px; text-align: center; height: 50px; border: solid 2px grey"/>
                                        &nbsp;<a href="javascript:chkAddAmount(<?php echo $i+1;?>, 1)" onfocus="this.blur();">
                                            <span class="icon-plus_box" style="font-size: 35px;vertical-align:middle;" align="absmiddle" /></a>
                                    </div>

                                    <div class="col-md-12">
                                        <hr style="border-width: 2px; border-color: black;"/>
                                    </div>
                                    <?php } ?>
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
									  <?php echo $event[0]['e_name']; ?>
								  </span>
								  <span style="font-size: 100%; color: white; float: right;">
									  <?php echo $event[0]['e_date']; ?>
								  </span>
                                            </div>

                                            <div class="panel-body" style="text-align:center; font-size:15px;">
                                                <?php for($i = 0; $i < count($event_ticket_types); $i++) {?>
                                                <div class="admission<?php echo $i+1;?>" hidden><span style="float: left;"><?php echo $event_ticket_types[$i]['type']; ?> x </span><span id="span_subtotal_num_<?php echo $i+1;?>" style="float: left;"> 1</span><span id="span_subtotal_price_<?php echo $i+1;?>" style="float:right; color:#009344; "><?php echo $event_ticket_types[$i]['price'];?></span><span style="float:right; color:#009344;">$</span><br/><br/></div>
                                                <?php } ?>
                                                <div style="background:#eaf0f4; height: 20px; ">
                                                    <span style="float: left;">Delivery Method</span><span id="delivery_name" style="float:right; color: #5f6063;">Standard Shipping</span>
                                                </div><br/>
                                                <span style="float: left;">Delivery Charge</span><span id="deliveryCost" style="float:right; color:#009344; ">0</span><span style="float:right; color:#009344;">$</span><br/><br/>
                                                <span style="float: left;">Service Fee</span><span id="serviceFee" style="float:right; color:#009344; ">0</span><span style="float:right; color:#009344;">$</span><br/><br/>
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

                                        <div class="col-md-12" id ="payment_info" style="margin-top:20px;" hidden>

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
                                </div>



                         
			   
			   <div class="row" style="margin-top:15px;font-size:23px;">
								<h3 style="color:black;"><em>Posted By</em></h3>
								<a href="<?php echo base_url().'public_profile/user/'. $posterID?>">
								<img 
								src="<?php if(substr($poster_image_key,0,6)=='//grap'){ //use photo from fb
					echo $poster_image_key;}else{ // use photo from wrevel account
						echo base_url()?>uploads/<?php echo $poster_image_key;
}?>"
								
								 class="user-posted" style="border-radius: 150px;border:2px solid #7874a2;z-index:5;position:relative;">
								<span class="username-posted" style="color:white;background:#7874a2; padding:5px 25px 5px 40px; border-radius:5px;margin-left:-20px;z-index:3;"><?php echo $posted_fullname?></span></a>  
			 </div>
			   
			   <div style="margin-top:50px;">
                            <h3 style="color:black;"><span class="glyphicon glyphicon-user"></span> Who&rsquo;s Attending?</h3>
                            
                            <div class="panel" style="background:#E9EEF2;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);border-radius:10px;">
                            	<div class="panel-body">
                                	<div class="row">
					<?php 
                                            if(isset($attendees)){
                                                for ($i = 0; $i < count($attendees) && $i < 6; $i++){
                                        ?>
                                    	<div class="col-md-4 col-sm-3 col-xs-6" style="height:220px;">
                                            <div class="thumbnail default">
                                                <a href="<?php echo base_url().'public_profile/user/'.$attendees[$i]['user_id']?>">
      						<img 
      						src="<?php if(substr($attendees[$i]['image_key'],0,6)=='//grap'){ //use photo from fb
					echo $attendees[$i]['image_key'];}else{ // use photo from wrevel account
						echo base_url()?>uploads/<?php echo $attendees[$i]['image_key'];
}?>" 
      						style="border-radius:150%; width:100px; height:100px;"/>
                                                    <div class="caption" style="text-align:center;">
                                                            <p><?php echo $attendees[$i]['fullname'];?></p>
                                                    </div></a>
                                            </div>
                                        </div>
                                        <?php }} else {?>
                                        <div class="col-md-10">
                                                <div class="caption pull-middle" style="text-align:center;">
                                                    <p><h3 style="color:#414042;">Be the first to attend this event!</h3></p>
      						</div>
                                        </div>
                                        <?php }?>
                                    </div>
                                    
                                    <!--Shows all users attending -->
                                    <a href="#" data-toggle="modal" data-target="#more_attendees" class="btn viewmorewrevs" style="font-size:20px;border-radius:8px;color:white;">View More</a>
                                    
                                    <div class="modal fade" id="more_attendees" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			                    <div class="modal-dialog">
			                         <div class="modal-content" style="background:#C2D2DC;">
			                              <div class="modal-header" style="background:#628da3; color:white;">
			                                   <button type="button" class="close" data-dismiss="modal" style="color:white;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			                                    <i class="fa fa-users"></i> All Attendees
			                               </div>
			                               <div class="modal-body" style="color:black; font-size:18px;">  
			                                    <!--<input type="checkbox"> Select All -->
			                                    
			                                         <div style="text-align:left; height:360px; overflow-y:auto; display:inline-block; padding-top:10px;">   
									<?php 
                                                                        $show_address = false;
									if(isset($attendees)){
                                                			for ($i = 0; $i < count($attendees); $i++){
                                                                            if(isset($my_user_id)) {
                                                                                if($my_user_id == $attendees[$i]['user_id']){
                                                                                    $show_address = true;
                                                                                }
                                                                            }?>
									<div style="float-left; width:130px;display:inline-block;">
                                                                            <?php if(isset($email)) {
                                                                            if($email == $user_email_temp[0]['email']) {
                                                                                if(!($my_user_id == $attendees[$i]['user_id'])) {?>                                                                            
                                                                                <a class="allow_delete pull-right" href="<?php echo base_url().'event/remove_from_event/'.$attendees[$i]['user_id'].'/'.$event_id?>">X</a>
                                                                            <?php }}}?>
										<a href="<?php echo base_url().'public_profile/user/'.$attendees[$i]['user_id']?>">
				      						<img src="<?php echo base_url(). 'uploads/'.$attendees[$i]['image_key'];?>" style="border-radius:150%; width:100px; height:100px;"/>
				                                                <div class="caption" style="text-align:center;">
				                                                    <p><?php echo $attendees[$i]['fullname'];?></p>
				                                                </div></a>
									</div>
								     	<?php }} else {?>
				                                        <div class="col-md-10">
				                                                <div class="caption pull-middle" style="text-align:center;">
				                                                    <p><h3>Be the first to attend this event!</h3></p>
				      						</div>
				                                        </div>
				                                        <?php }?>	
			                                         </div>
				                                  
			                                </div>
			                           </div>
			                       </div>
			                </div><!--end of popup-->
                                        <?php if(isset($email)) {
                                            if($email == $user_email_temp[0]['email'] && !$event[0]['finalized'] && $event[0]['e_is_address_hide']) {?>
                                       
                                            <a id="finalize_button" href="<?php echo base_url().'account/unhide_event/'.$event_id?>" class="btn viewmorewrevs" style="font-size:20px;border-radius:8px;color:white;">Finalize Event</a>
                                        
                                       
                                            <?php }}?>
                                </div>
                            </div>
				</div>
                         </div>
                        </div>
                    </div>
                    <!--Location of event-->
                    <div class="row" style="margin-top:50px;text-align:left;">
                    	<div class="col-md-4">
                       
                        	
                            <h3><i class="fa fa-map-marker"></i> Where is it?</h3>
                            <!--Address-->
                            <div style="padding:10px 20px 0; line-height:18px; text-align:left;">
                            <!--Address line-->
                            <p>
                            <?php if($event[0]['e_is_online'] == 0) {
                                if($event[0]['e_is_address_hide']) {?>
                            	<span style="color:red">Event's Address is hidden. Please wait for event creator's notification.</span>
                            <?php }else if($event[0]['finalized'] && $show_address == false) {?>
                                <span style="color:red">Event's Address is hidden. </span>
                            <?php }else {echo $event[0]['e_address']; 
                            ?>
                            
			    </p>
                            <!-- City , State , Zip Code-->
                            <p>
                            <?php echo $event[0]['e_city'];
                     echo ", ";
                     echo $event[0]['e_state'];
                     echo " ";

                    echo $event[0]['e_zipcode'];
                    ?>
                    </p>

                            <p>
                            <?php echo $event[0]['e_country'];
                           
                          
                            }?>
                              </p>
                            </div>
                            
                            <div style="padding:10px 0;margin-left:20px;">
                            <!--Button that leads to Google Maps-->


			    <?php if(!$event[0]['e_is_address_hide']) {?>
                            <a target="_blank" href="https://www.google.com/maps/dir//<?php echo $event[0]['e_address']."+".$event[0]['e_city']."+".$event[0]['e_state']."+".$event[0]['e_zipcode'];?>"class="btn viewmorewrevs" style="font-size:23px;color:white; border-radius:8px;">Get directions</a>
                            <?php }}else {?>
                            <span style="color:green">Online event!</span>
                            <?php }?>
                            </div>

                	 </div>
                        
                        <div class="col-md-8">
                          
                        <?php if(!$event[0]['e_is_address_hide']) {?>
                        <div id="pano" style="max-width:100%;min-width:100%; height: 200px;"></div>
                        <?php if(!$event[0]['e_is_online']) {?>
                        <div id="map_canvas" style="max-width:100%;min-width:100%; height: 200px;"></div> 
                       
                        	<!--   Google Map Goes Here, different depending on where location is-->

                            
                        </div>
                        <?php } else {?>
                        <div id="map_canvas_empty" style="max-width:100%;min-width:100%; height: 200px;"></div>
                        <?php }?>
                        <?php }else {?>
                        <div class="vault">
                        	<img src="<?php echo base_url().'src/data/img/vault_closed_fix.png'?>" onmouseover="this.src='<?php echo $PATH_IMG?>/vault_openwidth1.png'" onmouseout="this.src='<?php echo $PATH_IMG?>/vault_closed_fix.png'" style="max-width:100%;min-width:100%;height:400px;">
                        </div>
                        <?php }?>
                    </div>
           
                    <div class="row" style="margin-top:50px;">	
                    	<div class="col-md-6 col-sm-6 middle-line">
                    	<h3><i class="fa fa-comment-o"></i> Contact</h3>
                        <!-- Contact Info -->
                        <p style="margin-left:20px;"><i class="fa fa-phone"></i> 

                        
                            <?php echo $event[0]['e_phone'];
                         
                    ?>
                        </p>

                        <p style="margin-left:20px;"><i class="fa fa-envelope-o"></i>  <?php echo $event[0]['e_email'];
                         
                    ?></p>
                        
                        <!--
                        <ul style="text-align:center;">
                        	<li style=" display:inline; padding:10px;"><i class="fa fa-phone"></i> (455) 456-4648</li>
                            <li style=" display:inline;"> <i class="fa fa-envelope-o"></i> ndgfjn@gmail.com</li>
                        </ul>-->
                        
                    	</div>
                    
                   	<div class="col-md-6 col-sm-6">
                    	<h3><span class="glyphicon glyphicon-link"></span> Links</h3>
                        
                        <!--Links-->
                        	<ul style="list-style-type: none; margin-left:10px; word-break: break-all;">

                                <a target= "_blank" href="<?php if(strpos($event[0]['e_website'], 'http://') === false) echo 'http://'.$event[0]['e_website']; else echo $event[0]['e_website']?>"><?php echo $event[0]['e_website']?></a>
                              <!--<?php echo $event[0]['e_website']?>-->
                            </ul>
                        </div>    
                    </div>
                    
                    <!--<div class="row" style="padding:10px 30px 20px;">
                    	Uploaded Photos and Videos of events
                    	<h3><span class="glyphicon glyphicon-picture"></span> Photos/Videos</h3>
                        
                        <div class="row" style="text-align:center;">	
                        	<button type="button" class="btn btn-lg" style="background:#1C74BB;color:white; font-size:20px;">Browse All</button>
                        </div>
                    </div>-->
                    
                    <!--Needs to disappear with there are no tags
                    	<div class="row" style="padding:10px 30px 20px;">
                    	Tags for events
                    	<h3><span class="glyphicon glyphicon-tag"></span> Tags</h3>
                    </div>-->
                    <?php if($this->session->userdata('is_logged_in')) {?>
                    <div class="row" style="padding:1% 2% 2%; margin-top:15px;">
                    	<h3><i class="fa fa-comments"></i> Chatbox</h3>
                       <!-- <div style="text-align:center;">-->
                         <div id = "comment-block" class="comment_section">
                        </div>
                       <div hidden>
                                            <div id="event_temp_chat_loading">
                                            </div>
                                        </div>
                       <script>
    $(document).ready(
            function() {
                setInterval(function() {
                    //var randomnumber = Math.floor(Math.random() * 100);
                   
                    $( "#event_temp_chat_loading" ).load( "<?php echo $commentLocation; ?>","limit=20");
                    setTimeout(function(){
                                        $("#event_temp_chat_loading").children('p').each(function() {
                                            $('<input name="event_chatbox_test" value="'+$(this).html()+'" hidden><button type="submit">Delete</button>').appendTo(this);
                                            $(this).wrap('<?php echo form_open("event/delete_chatbox_comment/".$event_id)?></form>');
                                        });
                                        $("#comment-block").html($("#event_temp_chat_loading").html());
                                    },50);

                }, 1000);
            });

          </script>    
         
                   <?php echo form_open('event/event_comment/'.$category."/".$event[0]['event_id']); ?>
                   <div class="event-comment-section">
                    <div class="left-inner-addon pull-left event-comment-input">
                    <span class="glyphicon glyphicon-comment fa-flip-horizontal"></span>
                         <input type="text" class="form-control event-post-textarea" id="comment" name= "comment" placeholder="send a message!">                       
                          
                 </div>       
                        <!--Submit comment-->
                       <!-- <button type="button" class="btn btn-lg" style="background:#1C74BB;color:white; padding:5px 10px;">Post Comment</button>-->
                        <button type="submit" class="btn btn-lg event-post-btn" style="background:#1C74BB;color:white; padding:5px 10px;margin-left:10px;border-radius:8px;">Post Comment</button>
                        <?php echo form_close() ?>

                        <!--Upload Photo to comment box-->
						<!--<button type="button" class="btn btn-lg" style="background:#27AAE2;color:white; padding:5px 10px;"><i class="fa fa-camera"></i></button>	
                        </div>
                   </div>
                    </div>
                    <div class="row" style="padding:0px 30px;">
                    	<div class="panel">
                        	<div class="panel-body">
                            <!-- Comment Box-->
                            
                            </div>
                        </div>
                        <?php }?>
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
    <script>
    	var max_tickets = 0;
    	function change_qty_price() {
    		if($('#ticket_type').val() == "") {
    			$('#pricing_base').hide();
    			$('#info_base').hide();
    			$('#deadline_base').hide();
    			$('#billing_info').hide();
    			$('#not_set_up').hide();
    		}
    		else {
    				$("#payment_submit").removeAttr('disabled');
    				$('#not_set_up').hide();
	    			$('#pricing_base').show();
	    			$('#info_base').show();
	    			$('#deadline_base').show();
		    		$('#quantity_base').children().remove();
		    		var temp = ($('#ticket_type').val()).split('|');
                                var price_number = Number(temp[2]).toFixed(2);
                                if(temp[5] != 0) {  //YUan change temp[5]==0 to temp[5]!=0
                                    $('#ticket_price').attr('value', price_number);
                                    $('#ticket_price2').html('$'+price_number);
                                    $('#quantity_left').html(temp[1] + ' left.');
                                    $('#ticket_info').html(temp[3]);
                                    $('#ticket_deadline').html(temp[4]);
                                    max_tickets = temp[1];
                                    var content = '<select id="quantity_type" class="form-control" placeholder="0" name = "quantity">';
                                    for(var i = 0; i <= max_tickets; i++) {
		    			content += '<option value="'+i+'">'+i+'</option>';
                                    }
                                    //Commented out until we can handle multiple ticket requests. FINISHED
                                    /*content += '<option value="0">0</option>';
                                    if(Number(temp[1])) 
                                    	content += '<option value="1">1</option>';*/
                                    content += '</select>';
                                    $('#quantity_base').append(content);
                                    if(price_number == 0) {
		    			$('#billing_info').hide();
                                    }
                                    else {
                                            <?php if($posted_recip_id == "") {?>
                                                    $('#billing_info').show();
                                            <?php } else {?>
                                                    $('#not_set_up').show();
                                                    $('#payment_submit').attr('disabled','disabled');
                                            <?php }?>
                                    }
                                }
                                else {
                                    $('#pricing_base').hide();
                                    $('#info_base').hide();
                                    $('#deadline_base').hide();
                                    $('#billing_info').hide();
                                    $('#not_set_up').hide();
                                    $('#expired_base').show();
                                    $('#payment_submit').attr('disabled','disabled');
                                }
                                
	    	}
    	}
    </script>
    <script>
    	$(document).ready(function() {
    		$('input[type=radio][name=saved_card]').change(function() {
        		if (this.value == 'false') {
        			$(".enter_card").attr('disabled', false);
        		}
        		else {
        			$(".enter_card").attr('disabled', true);
        		}
    		});
	});
    </script>
    <script>
        function edit_more_event_photos() {
            var content = '<div class="image-upload">'
                                +'<input id="file-input" name = "edit_event_photos[]" type = "file"/>'
                            '</div>';
            $('#edit_event_photos_base').append(content);
        }
    </script>

    //add payment function
    <script>
    var varPostage = 0 ;	//邮费
    var g_maxNumber = 99 ; //最大购买数量

    //得到对象


    function getObj(id) {
        return $("#" + id);
    }


    var total = <?php echo count($event_ticket_types) ?>; //总数

    function chkAddAmount(id, type) {
        //得到数量文本框
        var varObj = getObj(createCountId(id));
        var varObjValue = varObj.val();
        if(type==0){
            //为空，用于计算用户输入数量，不改变文本框值，重新计算商品总金额
        }else if (type == 1) {
            varObjValue++;
        }
        else {
            varObjValue--;
        }

        //$(document).ready(function()
        //{
        if (varObjValue > 0) {
            $(".admission"+id).show();
        }else{
            $(".admission"+id).hide();
        }
        //});

        //判断数量是否大于最大购买数量
        if (varObjValue > g_maxNumber) {
            alert('a'+g_maxNumber+'b');
            varObj.val(g_maxNumber);
            changeSumPrice();
            changeSubtotal(id,g_maxNumber);
            return;
        }
        //判断数量是否小于1
        if (varObjValue < 1) {
            //当前文本框数量为1
            varObj.val(0);
            //设置当前文本框的
            getObj(createSubtotalId(id)).text(getObj(createFirstId(id)).text());
            //改变余额
            changeSumPrice();
            return;
        }
        varObj.val(varObjValue);
        changeSubtotal(id, varObjValue);

    }

    //改变小计

    function changeSubtotal(id, amount) {
        //得到单价
        var varFirstPrice = getObj(createFirstId(id)).text();
        //单价乘以数量
        var varSubtotal = floatCounstrue(varFirstPrice * amount);
        //赋值
        getObj(createSubtotalId(id)).text(varSubtotal);
        getObj(createNumId(id)).text(amount);

        //余额赋值
        changeSumPrice();
    }

    //改变余额

    function changeSumPrice() {
        var index = 1;
        var varSumPrice = parseFloat(getObj("serviceFee").text()) + parseFloat(getObj("deliveryCost").text());
        for (index; index <= total; index++) {
            var amount = getObj(createCountId(index)).val();
            var varFirstPrice = parseFloat(getObj(createFirstId(index)).text());
            varSumPrice +=  varFirstPrice * amount;
            //varSumPrice += parseFloat(getObj(createSubtotalId(index)).text());
            // alert(getObj(createSubtotalId(index)).text(1));
        }

        varSumPrice = floatCounstrue(varSumPrice);
        if(varSumPrice>0){
            $("#payment_info").show();
        }else{
            $("#payment_info").hide();
        }
        getObj("span_sumPirce").text(varSumPrice);
        getObj("b_sumPirce").text(varSumPrice);
    }

    //浮点型分析

    function floatCounstrue(val) {

        val = val.toString();
        var index = val.indexOf(".");
        if (index > 0) {
            return val.substring(0, index + 3);
        }
        else {
            return val + ".00";
        }
    }


    //创建单价Id

    function createFirstId(id) {
        return "span_first_price_" + id;
    }

    //创建数量 I

    function createCountId(id) {
        return "input_count_" + id;
    }

    //创建显示购票数量
    function createNumId(id){
        return "span_subtotal_num_"+ id;
    }


    //创建小计Id

    function createSubtotalId(id) {
        return "span_subtotal_price_" + id;
    }

    function fnChangePictrue(number,flag){
        switch(number){
            case 1:

                break;
            case 2:
                var varImagePath1 = baseLocation+"web/images/message_btn.png";
                var varImagePath2 = baseLocation+"web/images/message_btn1.png";
                if(flag){
                    alert(varImagePath1);
                    getObj("next2 > img").attr("src",varImagePath2);
                }else{
                    alert(varImagePath2);
                    getObj("next2 > img").attr("src",varImagePath1);
                }

                break;

        }
    }


    //delivery charge
    document.getElementById("delivery1").onclick=function(){displayDeliveryCharge1()};
    function displayDeliveryCharge1()
    {   //change price
        document.getElementById("deliveryCost").innerHTML= 0;
        changeSumPrice();
        //change delivery method name
        document.getElementById("delivery_name").innerHTML="Will Call";
        //add info to fill
        $(".willcall_info").show();
        $(".shipping_info").hide();
        //edit the name of three buttons so that we can get what we want in controller file
        document.getElementById("input_will_call").setAttribute('name', 'will_call_active');
        document.getElementById("input_print").setAttribute('name', 'print_input');
        document.getElementById("input_mail").setAttribute('name', 'mail_input');
    }

    document.getElementById("delivery2").onclick=function(){displayDeliveryCharge2()};
    function displayDeliveryCharge2()
    {
        //change price
        document.getElementById("deliveryCost").innerHTML= 0;
        changeSumPrice();
        //change delivery method name
        document.getElementById("delivery_name").innerHTML="Print at home";

        $(".willcall_info").hide();
        $(".shipping_info").hide();

        //edit the name of three buttons so that we can get what we want in controller file
        document.getElementById("input_will_call").setAttribute('name', 'will_call_input');
        document.getElementById("input_print").setAttribute('name', 'print_active');
        document.getElementById("input_mail").setAttribute('name', 'mail_input');
    }

    document.getElementById("delivery3").onclick=function(){displayDeliveryCharge3()};
    function displayDeliveryCharge3()
    {
        //change price
        document.getElementById("deliveryCost").innerHTML= 4.95;
        changeSumPrice();

        //change delivery method name
        document.getElementById("delivery_name").innerHTML="Standard Shipping";
        //add info to fill
        $(".willcall_info").hide();
        $(".shipping_info").show();

        //edit the name of three buttons so that we can get what we want in controller file
        document.getElementById("input_will_call").setAttribute('name', 'will_call_input');
        document.getElementById("input_print").setAttribute('name', 'print_input');
        document.getElementById("input_mail").setAttribute('name', 'mail_active');
    }


    </script>

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  -->
    <!--<script src="<?php echo $path['PATH_BOOTSTRAP']?>js/bootstrap.min.js"></script>
	<script src="<?php echo $path['PATH_BOOTSTRAP']?>js/bootstrap.js"></script> -->
<!--        <script src="--><?php //echo $PATH_BOOTSTRAP?><!--js/buy_pos_v2.js"></script>-->
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