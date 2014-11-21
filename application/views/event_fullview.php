<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $event[0]['e_name']?></title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="<?php echo $path['PATH_BOOTSTRAP']?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $path['PATH_BOOTSTRAP']?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $path['PATH_BOOTSTRAP']?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $path['PATH_BOOTSTRAP']?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $path['PATH_BOOTSTRAP']?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false"
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
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "98b7df42-3881-4ba4-adc3-bcb7a479d75e", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>

<body>
<?php $this->load->view('header');?>

<!--content
==============================================-->
<div id='sentMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:20px;width: 40%; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>
<div class="container event-full-view-container" style="padding-bottom:50px; ">
<div class="row" style="margin-top:50px; font-size:25px; ">
			<div class="col-md-1">
            
            	<!--Image changes based on what type of event-->
            	<a href="<?php echo base_url().'main/get_related_events/'.$category?>"><img class="event-type-image" src="<?php echo $path['PATH_IMG'].$category;?>_fullbutton.png" style="position:absolute; z-index:1;  display:block;"/></a>
            </div>
		<div class="col-md-10 event-stuff" style="color:white;padding:0 26px;">
        	
            
			<div class="col-md-6 event-title" style="background:<?php echo $style[$category]['theme-color-1']?>; padding:17px; text-align:center;">
                            <!--name of event-->
                            <strong><small><?php echo $event[0]['e_name']?></small></strong>
                        
                        <a id="check_user" class="pull-right" href="#" data-toggle="modal" data-target="#editEventModal" hidden>
					    <button type="button" class="btn evtlistingbtn" style="z-index:2;">Edit Event Listing</button>
                        </a>
                        <div class="modal fade" id="editEventModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style="background:#c2d2dc;border:none;">
                                    
                                        <div class="modal-header" style="background-color: #628DA3;padding:10px;">
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
                                                    	<input type="radio" name="status" value="public"> public
                                                        <input type="radio" name="status" value="private"> private
                                                                   

                            <!--<div style="width:200px; height:200px; margin:25px auto;">
                                  <img src="images/camera_icon.png" style="min-width:100%; max-width:100%;">
                            </div>


                            <button type="button" class="btn btn-lg" style="background:#47AFEA; color:white;">Upload Image</button>

                            <br>-->
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
            	<a href="<?php echo base_url()."event/attend_event/".$event_id."/5"?>" class="btn status" style="border:1px solid white; font-size:20px;border-radius:10px;">I&rsquo;m going</a>
                <a href="<?php echo base_url()."event/attend_event/".$event_id."/5"?>" class="btn status" style="border:1px solid white; font-size:20px;border-radius:10px;">Maybe</a>
                <a href="#" class="btn status" style="border:1px solid white; font-size:20px;border-radius:10px;">No</a>
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
                            <div class="row" style="padding:0 10px 0;">
                            	
                                    <h3><i class="fa fa-exclamation-circle"></i> What is this?</h3>
                                    
                                    <!--Description-->
                                    <p style="padding:10px 20px;word-break:break-all;"><?php echo $event[0]['e_description']?></p>
                            </div>
                        </div>
                        <div class="col-md-6" style="text-align:center;margin-top:10px;">              	
                            <div class="row" style="color:white;">
                            	<a href="http://wrevenues.wrevel.com" class="btn viewmorewrevs" style="border-radius:10px;font-size:23px;color:white;">View Wrevenue</a>
                                
                                <!--Ticketing System button-->
                                <?php if($event[0]['e_is_ticketed']) {?>
                                	<a href="#" data-toggle="modal" data-target="#largeModal" class="btn viewmorewrevs buy-ticket" style="border-radius:10px;font-size:23px;color:white;">Buy Tickets</a>
                                <?php }?>
				<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
					<div class="modal-dialog" >
						<div class="modal-content" style="background:#C2D2DC;">
							<div class="modal-heading">	
								<div class="col-md-6 col-hide" style="background:#628DA3; height:75px; padding-top:20px; ">
									<img src="<?php echo $path['PATH_IMG']?>wrevel_logo.png"style="width:160px;z-index:1;"/>
								</div>
								<div class="col-md-6" style="background:#478EBF; height:75px; font-size:30px; padding:18px 10px 10px 0; ">
								<button type="button" class="close" data-dismiss="modal" style="z-index:2;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
									<p>Order Tickets</p>
								</div>
						    </div>    
							<div class="modal-body" style="text-align:left;">
								
								<form class="form-horizontal" role="form" method="post" action="<?php echo base_url()."stripe_controller/load_confirm/".$event[0]['event_id']?>">
									<div class="row">
										<div class="col-md-12"  style="margin-top:20px;">
											<p style="font-size:26px;text-align:center;color:#478EBF;">Event Info</p>
											<hr style="border-color:#5992C2";> 
												<div class="form-group row">
													<label class="col-sm-3 control-label">Event ID</label>
														<div class="col-sm-8">
															<?php echo $event[0]['event_id']?>
														</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 control-label">Full Name</label>
													<div class="col-sm-8">
														<?php echo $event[0]['e_name']?>
													</div>
												</div>
												<?php if(isset($event_ticket_types)){?>
													<div class ="form-group row">
														<label class="col-sm-3 control-label">Ticket Type</label>
														<div class="col-sm-8">
														<select id="ticket_type" name="ticket_type" type="text" class="form-control" onchange="change_qty_price()" required>
															<option value="" selected="selected">Select a ticket type</option>
														<?php for($i = 0; $i < count($event_ticket_types); $i++) {?>
															<option value="<?php echo $event_ticket_types[$i]['type'].'|'.$event_ticket_types[$i]['quantity'].'|'.$event_ticket_types[$i]['price'].'|'.$event_ticket_types[$i]['info'].'|'.$event_ticket_types[$i]['date']?>"><?php echo $event_ticket_types[$i]['type']?></option>
														<?php }?>
														</select></div>
													</div>
												<?php }?>
												<div id="info_base" class="form-group row" hidden>
														<label class="col-sm-3 control-label">Info</label>
														<div id="ticket_info" class="col-sm-9" style="text-align:left; padding-top:7px;">
															
														</div>
												</div>
												<div id="deadline_base" class="form-group row" hidden>
														<label class="col-sm-3 control-label">Deadline</label>
															<div id="ticket_deadline" class="col-sm-3"></div>
												</div>
												<div id="pricing_base" hidden>
													<div class="form-group row">
														<label class="col-sm-3 control-label">Price</label>
														<div id="price_type" class="col-sm-2" style="text-align:left; padding-top:7px;">
															<span type="text" id="ticket_price2"  class="col-sm-12" name="ticket_price2"></span>
															<input type="hidden" id="ticket_price" name="ticket_price" value ="">
														</div>
														<label class="col-sm-3 control-label">Quantity</label>
															<div id="quantity_base" class="col-sm-2"></div>
															<div id="quantity_left" style="color:black;font-weight:bold;">0 left. </div>
													</div>
													<!--<div class="form-group row">
														<label class="col-sm-3 control-label">Quantity</label>
															<div id="quantity_base" class="col-sm-3"></div>
															<div id="quantity_left">0 left.</div>
															
													</div>-->
												</div>
												<div class="form-group row">
													<label class="col-sm-3 control-label">Delivery Form</label>
													<div class="col-sm-8 text-left">
														<input type="checkbox" value = "print" name = "mail" checked> print at home (free) </br>
														<!--<input type="checkbox" value = "mail" name = "mail"> mail form ($3.45)-->
													</div>
												</div>            
										</div>  
									</div>
									<div id="not_set_up" class="row" style="margin-top:50px;" hidden>
										The creator has not set up payment information. Please purchase one of the free ticket types.
									</div>
									<div id="billing_info" class="row" style="margin-top:50px;" hidden>
									
										<div class="col-md-12">
											<p style="font-size:26px;text-align:center;color:#478EBF;">Billing Info</p>
											<hr style="border-color:#5992C2";>
												<?php if(isset($card_data)) {?>
												<div class="form-group row">
													<label class="col-sm-3 control-label">Select</label>
														<div class="col-sm-6">
															<input type="radio" name="saved_card" value="<?php echo $card_data?>">Use Saved Card
															<input type="radio" name="saved_card" value="false" checked>Enter Card
														</div>
												</div>
												<?php }?>
												<div class="form-group row">
													
													<label class="col-sm-3 control-label">Name</label>
														<div class="col-sm-8">
															<input type="text" class="enter_card form-control" name = "f_name">
														</div>
												</div>
												<!--<div class="form-group row">
													<label class="col-sm-3 control-label" >Last Name</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name = "l_name">
														</div>
												</div>-->
												<div class="form-group row">
													<label class="col-sm-3 control-label">Email</label>
														<div class="col-sm-8">
															<input type="text" class="enter_card form-control" name = "email">
														</div>
												</div>
												<!--<div class="form-group row">
													<label class="col-sm-3 control-label">Address</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name = "address" >
														</div>
												</div> 
												<div class="form-group row">
													<label class="col-sm-3 control-label">City</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name = "city">
														</div>
												</div> 
												<div class="form-group row">
													<label class="col-sm-3 control-label">State</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name = "state">
														</div>
												</div>   
												<div class="form-group row">
													<label class="col-sm-3 control-label">Zip Code</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name = "zip">
													</div>
												</div> -->
												<div class="form-group row">
													<label class="col-sm-3 control-label">Credit Card</label>
													<div class="col-sm-6">
														<input type="text" class="enter_card form-control" name = "card">
													</div>
													<div class="col-sm-2">
														<input type="text" class="enter_card form-control" placeholder="CVC" name="cvc">
													</div>
												</div>   
												<div class="form-group row">
													<label class="col-sm-3 control-label">Exp. Date</label>
													<div class="col-sm-3">
														<input type="text" class="enter_card form-control" placeholder="MM" name="exp_month">
													</div>
													<div class="col-sm-3">
														<input type="text" class="enter_card form-control" placeholder="YYYY" name = "exp_year">
													</div>
												</div>
										</div>
									</div>
									<div class="row">
										<button id="payment_submit" type="submit" class="btn btn-lg pull-right" style="background:#00AEEF; color:white;margin-right:50px;">submit</button>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div> 
                         
			   
			   <div class="row" style="margin-top:15px;font-size:23px;">
								<h3 style="color:black;"><em>Posted By</em></h3>
								<a href="<?php echo base_url().'public_profile/user/'. $posterID?>"><img src="<?php echo base_url().'uploads/'. $poster_image_key?>" style="width:100px; height:100px;border-radius: 150px;border:2px solid #7874a2;z-index:5;position:relative;"><span style="color:white;background:#7874a2; padding:5px 25px 5px 40px; border-radius:5px;margin-left:-20px;z-index:3;"><?php echo $posted_fullname?></span></a>  
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
      						<img src="<?php echo base_url(). 'uploads/'.$attendees[$i]['image_key'];?>" style="border-radius:150%; width:100px; height:100px;"/>
                                                    <div class="caption" style="text-align:center;">
                                                            <p><?php echo $attendees[$i]['fullname'];?></p>
                                                    </div></a>
                                            </div>
                                        </div>
                                        <?php }} else {?>
                                        <div class="col-md-10">
                                                <div class="caption pull-middle" style="text-align:center;">
                                                    <p><h3>Be the first to attend this event!</h3></p>
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
									if(isset($attendees)){
                                                			for ($i = 0; $i < count($attendees); $i++){?>
									<div style="float-left; width:130px;display:inline-block;">
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
                            <?php if($event[0]['e_is_address_hide']) {?>
                            	<span style="color:red">Event's Address is hidden. Please wait for event creator's notification.</span>
                            <?php }else { echo $event[0]['e_address']; ?>
                            
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
                            <?php }?>
                            </div>

                	 </div>
                        
                        <div class="col-md-8">
                          
                        <?php if(!$event[0]['e_is_address_hide']) {?>
                        <div id="pano" style="max-width:100%;min-width:100%; height: 200px;"></div>
                        <div id="map_canvas" style="max-width:100%;min-width:100%; height: 200px;"></div> 
                       
                        	<!--   Google Map Goes Here, different depending on where location is-->

                            
                        </div>
       
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

                                <a target= "_blank" href="<?php echo 'http://'.$event[0]['e_website']?>"><?php echo $event[0]['e_website']?></a>
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
                       <script>
    $(document).ready(
            function() {
                setInterval(function() {
                    //var randomnumber = Math.floor(Math.random() * 100);
                   
                    $( "#comment-block" ).load( "<?php echo $commentLocation; ?>","limit=20");

                }, 1000);
            });

          </script>    
         
                   <?php echo form_open('event/event_comment/'.$category."/".$event[0]['event_id']); ?>
                   <div style="margin-left:20%;margin-top:20px;">
                    <div class="left-inner-addon pull-left">
                    <span class="glyphicon glyphicon-comment fa-flip-horizontal"></span>
                         <input type="text" class="form-control" id="comment" name= "comment" style="font-size:20px; width:100%;" placeholder="send a message!">                       
                          
                 </div>       
                        <!--Submit comment-->
                       <!-- <button type="button" class="btn btn-lg" style="background:#1C74BB;color:white; padding:5px 10px;">Post Comment</button>-->
                        <button type="submit" class="btn btn-lg" style="background:#1C74BB;color:white; padding:5px 10px;margin-left:10px;border-radius:8px;">Post Comment</button>
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
        $(document).ready(function(){
            <?php
                if($email == $user_email_temp[0]['email']) {
                    echo '$("#check_user").show();';
                }
            ?>
        })
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
		    		$('#ticket_price').attr('value', price_number);
		    		$('#ticket_price2').html('$'+price_number);
		    		
		    		$('#quantity_left').html(temp[1] + ' left.');
		    		$('#ticket_info').html(temp[3]);
		    		$('#ticket_deadline').html(temp[4]);
		    		max_tickets = temp[1];
		    		
		    		var content = '<select id="quantity_type" class="form-control" placeholder="0" name = "quantity">';
		    		//Commented out until we can handle multiple ticket requests.
		    		/*for(var i = 0; i <= max_tickets; i++) {
		    			content += '<option value="'+i+'">'+i+'</option>';
		    		}*/
		    		content += '<option value="0">0</option>';
		    		if(Number(temp[1])) 
		    			content += '<option value="1">1</option>';
		    		content += '</select>';
		    		if(price_number == 0) {
		    			$('#billing_info').hide();
		    		}
		    		else {
		    			<?php if($posted_recip_id != "") {?>
		    				$('#billing_info').show();
		    			<?php } else {?>
		    				$('#not_set_up').show();
		    				$('#payment_submit').attr('disabled','disabled');
		    			<?php }?>
		    		}
		    		$('#quantity_base').append(content);
		    	
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
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  -->
    <!--<script src="<?php echo $path['PATH_BOOTSTRAP']?>js/bootstrap.min.js"></script>
	<script src="<?php echo $path['PATH_BOOTSTRAP']?>js/bootstrap.js"></script> -->
</body>
</html>