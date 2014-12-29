<!doctype html>
<html>
<head>
 <meta charset="utf-8">

 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
 <link href="<?php echo $PATH_BOOTSTRAP?>css/main.css">
 <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">

        
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
        <div class="modal-content" style="color:white; background:#aebdc6; ">
        <div class="panel" style="border:none; background:#aebdc6;">
        <div class="panel-body" style="background:#aebdc6;">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h1 class="cw_heading" style="text-align:center;font-family:GillSans;padding:10px;">create a wrev</h1>
          
          <div class="col-md-4" style="padding:0 10px; ">
              <p style="text-align:center;font-size:15px;"><span style="color:red;font-weight:normal;font-size:23px;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">* </span> Please select one primary category (by double-clicking on the icon), select as many sub categories as you want.
                  
              </p>
              
  
    
    
    <div class="apare cwrev_select" id="exhgt" primarySelected="false" >
        
        <img src="<?php echo $PATH_IMG?>hotspots_fullbutton.png" class="cwrev_category small" id= '0' name = 'is_hotspot' value = '1' alt="hotspot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;" /> &nbsp; &nbsp;

        
        <img src="<?php echo $PATH_IMG?>icebreakers_fullbutton.png" class="cwrev_category small" id = '1'name = 'is_icebreakers' value = '1' alt="icebreakers" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;"> &nbsp; &nbsp;

        <img src="<?php echo $PATH_IMG?>culture_fullbutton.png" class="cwrev_category small" id= '2' name = 'is_culture' value = '1' alt="culture" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
     
        <img src="<?php echo $PATH_IMG?>meetups_fullbutton.png" class="cwrev_category small" id = '3' name = 'is_meetups' value = '1' alt="meetups" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;

        <img src="<?php echo $PATH_IMG?>explore_fullbutton.png" class="cwrev_category small" id = '4' name = 'is_exploringyourcity' value = '1' alt="explore city" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;

        <img src="<?php echo $PATH_IMG?>romance_fullbutton.png" class="cwrev_category small" id = '5' name = 'is_l&r' value = '1' alt="love and romance" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;

        <img src="<?php echo $PATH_IMG?>parties_fullbutton.png" class="cwrev_category small" id = '6' name = 'is_parties' value = '1' alt="parties" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
  
        <img src="<?php echo $PATH_IMG?>clubs_fullbutton.png" class="cwrev_category small" id = '7' name = 'is_clubs' value = '1' alt="clubs" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
    
        <img src="<?php echo $PATH_IMG?>concerts_fullbutton.png" class="cwrev_category small" id = '8' name = 'is_concerts' value = '1' alt="concerts" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
    
        <img src="<?php echo $PATH_IMG?>festivals_fullbutton.png" class="cwrev_category small" id = '9' name = 'is_festivals' value = '1' alt="festivals" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
        
        <img src="<?php echo $PATH_IMG?>lounges_fullbutton.png" class="cwrev_category small" id = '10' name = 'is_lounges' value = '1' alt="lounges" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
      
        <img src="<?php echo $PATH_IMG?>bars_fullbutton.png" class="cwrev_category" id = '11' name = 'is_bars' value = '1' alt="bars" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
         <div style="visibility: hidden;">
        <input type="checkbox" id="i0" name="hotspots" value="1024"  />
        <input type="checkbox" id="i1" name="icebreakers" value="1"  />
        <input type="checkbox" id="i2" name="culture" value="2048"  />
        <input type="checkbox" id="i3" name="meetups" value="2"  />
        <input type="checkbox" id="i4" name="explore" value="64"  />
        <input type="checkbox" id="i5" name="romance" value="128"  />
        <input type="checkbox" id="i6" name="parties" value="4"  />
        <input type="checkbox" id="i7" name="clubs" value="8"  />
        <input type="checkbox" id="i8" name="concerts" value="16"  />
        <input type="checkbox" id="i9" name="festivals" value="32"  />
        <input type="checkbox" id="i10" name="lounges" value="256"  />
        <input type="checkbox" id="i11" name="bars" value="512" />
         </div>
    </div>
    
            </div>
            <div class="col-md-8 create-form-border" >
              <div class="row" style="padding:0 10px;">                 
      
                <form class="form-horizontal" role="form">
           
            <div class="form-group row">
              <label class="col-sm-2 control-label">title:
                  <span style="color:red;font-weight:normal;font-size:23px;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">*</span>
              </label>
              <div class="col-sm-10">
                  <input id="e_name" type="text" class="form-control" name = "e_name" placeholder="type in something witty">
              </div>
            
              </div>  
              	   
                    <div class="form-group row">
              		<label class="col-sm-2 control-label">info:
                  	<span style="color:red;font-weight:normal;font-size:23px;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">*</span>
              		</label>
              		<div class="col-sm-10">
                  <textarea id="e_description" class="form-control" rows="2" name = "e_description" placeholder="type in something attention grabbing" ></textarea>	
              		</div>
           	  </div>
           	 
           	  
           	   <div class="form-group row">
              		<label class="col-sm-2 control-label" >date: <span style="color:red;font-weight:normal;font-size:23px;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">*</span></label>
              		<div class="col-sm-3">
              		<!-- Probably need to check for browser compatibility with HTML 5 before using this.-->
                   		<input id="e_date" type="text" name = "e_date" class="form-control" placeholder="mm/dd/yyyy">
              		</div>
              
            		<label class="col-sm-2 control-label">time<span class="star1" style="color:red;font-weight:normal;font-size:23px;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">*</span> start:<span class="star2" style="color:red;font-weight:normal;font-size:23px;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">*</span>
                                
                            </label>
                            <div class="col-sm-2">
                               <select id="e_start_time" name="e_start_time" type="time" class="form-control" style="padding:0;font-size:10px;">
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
                            <label class="col-sm-1 control-label" style="padding-top:10px;">time end:</label>
                            <div class="col-sm-2">
                              <select id="e_end_time" name="e_end_time" type="time" class="form-control" style="padding:0;font-size:10px;">
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
              	 
                    
                      
           	  
                 <!--   <div class="form-group">
                      <div class="form-group row">
                          <label class="col-sm-3 control-label" name = "e_date" style="margin-left:10px;">date:
                              <span style="color:red;">*</span>
                          </label>
                            <div class="col-sm-4">
                              <input id="e_date" type="date" name = "e_date" class="form-control" value = "">
                            </div>
                            <label class="col-sm-2 control-label">time start:
                                <span style="color:red;font-weight:normal;font-size:25px;">*</span>
                            </label>
                            <div class="col-sm-3">
                              <input id="e_start_time" type="time" class="form-control" name = "e_start_time" placeholder="hours?">
                                <span style="color:red;font-weight:normal;font-size:25px;">*</span>
                            </div>
                         </div>
      <label class="col-sm-2 control-label">time <span style="color:red;font-weight:normal;font-size:25px;">*</span>end:</label>
                            <div class="col-sm-3">
                              
                            </div>
                    </div>
                    <br/>
        <br/>
        <br/>
        <br/>-->
                <!--<div class="form-group row">
                    <label class="col-sm-3 control-label">capacity:</label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" name = "e_capacity" placeholder="# of people">
                            </div>
                </div>  -->         
                
                    <div class="form-group row">
					<label class="col-sm-1 control-label" style="padding-top:10px;">period:</label>
                            <div class="col-sm-2">
                              <select id="period" name="period" type="number" class="form-control" style="padding:0;font-size:10px;">
              			<option value="" selected="selected"></option> 
              			<option value="1">Every day</option>
              			<option value="7">7 days </option>
                                <option value="30">1 month</option>
                                <option value="365">1 year</option>
                                <option value="-1">Every week day</option>
                                <option value="-7">Every weekend</option>
            		      </select> 
                            </div>
              <label class="col-sm-1 control-label">street:</label>
              <div class="col-sm-4">
                  <input id="location1" type="text" name = "e_address" class="form-control" placeholder="where is it?">
              </div>
                 <label class="col-sm-1 control-label" >city:</label>
                            <div class="col-sm-3" >
                              <input id="location2" type="text" class="form-control" name = "e_city">
                            </div>
            </div>
                    
                    <div class="form-group">
                      <div class="form-group row">
                          <label class="col-sm-1 control-label">state:</label>
                            <div class="col-sm-2">
                              <select id="location3" name="e_state" type="text" class="form-control" style="padding:0;">
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
                            
                            
                            <label class="col-sm-1 control-label">zip:</label>
              		    <div class="col-sm-2">
                  		<input id="location4" type="text" name = "e_zipcode" class="form-control" style="padding:5px;" >
              		    </div>
                            
                            <label class="col-sm-1 control-label" >cnt:</label>
                            <div class="col-sm-5">
                              <select id="location5" name="e_country" type="text" class="form-control" style="padding:0;font-size:12px;">
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
                            
                         </div>   
                    </div>
                 <!--   <div class="form-group row">
              <label class="col-sm-3 control-label">zip:</label>
              <div class="col-sm-3">
                  <input id="location6" type="text" name = "e_zipcode" class="form-control" >
              </div>
              <label class="col-sm-2 control-label"  style="margin-left:10px;">country:</label>
                            <div class="col-sm-3">
                              <input type="text" name = "e_country" class="form-control">
                            </div>
            </div>-->
                    
                    <div class="form-group row">
                     
                            <label class="col-sm-2 control-label" >phone:</label>
                            <div class="col-sm-3">
                              <input type="tel" class="form-control" name = "e_phone">
                            </div>
                            
                            <label class="col-sm-2 control-label">email:</label>
              		    <div class="col-sm-5">
                  		<input type="text" class="form-control" name = "e_email">
              		    </div>                           
                    </div>
                    
                    
                    <div class="form-group row">
            		 <label class="col-sm-2 control-label">link(s):</label>
              		<div class="col-sm-10">
                  	<input type="text" name = "e_website" class="form-control" >
              		</div>
            	</div>
            	
            <!--	<div class="form-group row">
                      <label class="col-sm-2">event type</label>
                        <div class="col-sm-4">
                          <input type="radio" name = "e_type" value="public" checked> public 
                            <input type="radio" name = "e_type" value="private"> private
                        </div>
                        
                        <label class="col-sm-2">online event</label>
                        <div class="col-sm-3">
                          <input type="checkbox">  
                           
                        </div>
                        <label class="col-sm-3">Hide event address <i class="fa fa-question-circle" id="info" data-content="The address of this event will remain hidden until you approve the finalized attendee list." data-trigger="hover" data-placement="left"></i></label>
                        <div class="col-sm-3">
                          
                          <input type="radio" name = "e_is_hide" value="1"> yes 
                          <input type="radio" name = "e_is_hide" value="0" checked> no
                          
                        </div>
                    </div>-->
              <div class="form-group row">
                      <label class="col-sm-2">event image</label>
                     <div class="col-sm-4">
                 <div class="image-upload">
                   
                        <label for="file-input">
                        
                    <i class="fa fa-camera fa-flip-horizontal fa-5x"></i>
                        
                        </label>
                        
                            <label for ="file-upload" >
                         
                            </label>


                        
                        <input id="file-input" name = "userfile" type = "file" style="overflow:hidden;"/>
                        <input id="file-upload" type = "submit" >
                
                    </div>
                        
                </div>
                      
<div class="col-sm-6">
<div class="row">
                        <label class="col-sm-5">Hide event address <i class="fa fa-question-circle" id="info" data-content="The address of this event will remain hidden until you approve the finalized attendee list." data-trigger="hover" data-placement="top"></i></label>
                        <div class="col-sm-6">
                          
                          <input type="radio" name = "e_is_hide" value="1"> yes 
                          <input type="radio" name = "e_is_hide" value="0" checked> no
                          
                        </div>
</div>
<div class="row">
<label class="col-sm-5">event type</label>
                        <div class="col-sm-7">
                          <input type="radio" name = "e_type" value="public" checked> public 
                            <input type="radio" name = "e_type" value="private"> private
                        </div>
                        </div>
                        <div class="row">
                        	<label class="col-sm-6">online event <i class="fa fa-question-circle" id="online-info" data-content="This event will have a virtual location." data-trigger="hover" data-placement="top"></i></label>
                        	<div class="col-sm-3">
                          		<input id="e_is_online" name = "e_is_online" value="1" type="checkbox" onchange="change_to_online()">  
                           	</div>
                        </div>

                    <style>

                    .image-upload > input
                    {
                        display: none;
                    }
                   </style>
</div>
                    <label class="col-sm-4">More Event Images.</label>
                        <div class="col-sm-6" id="event_images_base">
                            <div class="image-upload">
                                <input id="file-input" name = "event_photos[]" type = "file"/>
                            </div>
                        </div>
                        <a id="add_more_event_images" class="btn" type="button" onclick="add_more_event_images()">Add More</a>
                    </div>
                  
                    
  		<hr>
  		
  		<strong>Step 2: Set up tickets</strong>
  		
  		<div class="form-group row">
  			<div style="text-align:center;">
                        ticketed <input type="radio" name="e_is_ticketed" value = "1"> 
                	nonticketed <input type="radio" name="e_is_ticketed" value = "0" checked> 
                  	<div>
  		</div>
  		
  		<div>
  			<div class="panel" style="background:none;padding:0;box-shadow:none;">
  				<div class="add_ticket_type" style="padding:0;">
  					
  				</div>
  			</div>
  		</div><!--end of add ticket type-->
  		
  		<div id="add_more_base" style="text-align:right;" hidden>
  		<a id="add_more" type="button" class="btn" style="background:#478EBF;color:white;padding:3px;font-size:12px;margin-right:20px;margin-top:15px;"> Add More</a>
  		</div>
  		
           <!-- <div class="form-group row">
                      <label class="col-sm-3 control-label">free?</label>
              <div class="col-sm-9">
                       <input type="checkbox" name="e_is_free" value= 1> yes
               <input type="checkbox" name="e_is_free" value= 0> no
                               
              </div>
                     </div>  
                     <div class="form-group row">
              <label class="col-sm-3 control-label">price($):</label>
              <div class="col-sm-9">
                  <input type="text" name = "e_price" class="form-control">
              </div>
              
               <div class="form-group row">
              <div class="col-sm-offset-3 col-sm-9">
                  
                  <form>
                        ticketed <input type="radio" name="e_is_ticket" value = "Tickited"> 
                nonticketed <input type="radio" name="e_is_ticket" value = "unTickited"> 
                  </form>
                  
              </div>
            </div>  -->
                  
                     </div> 
                     
                    
                    
                      
        </form>
                  </div>
                  <!--  <div class="col-md-4" style="text-align:center;">

                 
                       <div class="image-upload">
                   
                        <label for="file-input">
                        
                    <i class="fa fa-camera fa-flip-horizontal fa-5x"></i>
                        
                        </label>
                        
                            <label for ="file-upload" >
                         
                            </label>


                        
                        <input id="file-input" name = "userfile" type = "file" style="width:160px;"/>
                        <input id="file-upload" type = "submit" >
                        </form>
                
                    </div>
                
                    <style>

                    .image-upload > input
                    {
                        display: none;
                    }
                   </style>



                    <div style="margin-top:25px;">
                      hide event address <input type="checkbox" name = "e_is_hide" value = "Yes">
                    </div>
                
                    Set up tickets
                    <i class="fa fa-ticket fa-flip-horizontal fa-5x" style="margin-top:25px;"></i>
                    <a data-toggle="modal" href="#myModal2" class="btn" type="button" style="background:#47AFEA; color:white;">set up tickets</a>
                
                </div>-->
               
                <!--<hr width="90%">
               <div class="row">
                  <div class="row">

                     </div>
                     <div class="row" style="margin-top:35px;">
                      <div class="col-md-3" style="text-align:center;">
                      <i class="fa fa-tag fa-5x"></i>
                        <button type="button" class="btn" style="background:#47AFEA; color:white;">create tags</button>
                        </div>
                        
                        <div class="col-md-8">
                        <textarea class="form-control" rows="3"></textarea>
                        
                        <button type="button" style="color:#216EAD;">add</button>
                        <button type="button" style="color:#216EAD;">delete</button>
                        
                        </div>
                     </div>
               </div>-->
            </div>
            <div class="pull-right" style="display:inline;padding-right:20px;">
            
             
             <input type="submit" name = "submit" value = "Submit" class="btn btn-lg" style="color:white;background:#3e8fbb;"></input>
             </div>
      <?php echo form_close();?>
        </div>
        </div>
        </div>
      </div>
  </div>
<div class="modal" id="myModal2" style="padding-right: 200px;">     
  <div class="modal-dialog">
      <div class="modal-content" style="width: 800px; height: 1000px; border-radius: 10px;">

      
    <div class="panel" style="width: 800px; height: 1000px; background-color: #006eaa; border-radius: 10px;">
    
    <div class="panel-body">
     <p style="font-size: 230%; color: white;text-align: center;">
    <b>Set up tickets</b>
      </p>
     
      <p style="font-size: 150%; color: white;text-align: justify;">
     This is what your ticket will look like
      </p>
      
      <div class="panel" style="width: 700px; border-color: #006eaa; border-radius: 10px; margin-left:40px;">
    
    <div class="panel-heading" style="background-color: #3b91c6; height: 70px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
        <p style="font-size: 50px;text-align: left; color: white; margin-top: -10px;">
      Hot Rabbit
        
        <img src="<?php echo $PATH_IMG?>wrevel_logo.png"style="width:200px;z-index:1; float: right; margin-top: 10px;"/>
        </p>
    </div>
    
        <div class="panel-body">
      <div class="col-md-8 col-sm-8 col-xs-8">
     
      <p style="font-size: 150%;text-align: justify;">
     Name &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; name
      </p>
             <p style="font-size: 150%;text-align: justify;">
     Ticket Type &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; type
      </p>
        <p style="font-size: 150%;text-align: justify;">
     Wrevenue &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  wrevenue
      </p>
         <p style="font-size: 150%;text-align: justify;">
     Event Title &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; title
      </p>
          <p style="font-size: 150%;text-align: justify;">
    Price &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  price
      </p>
     <p style="font-size: 150%;text-align: justify;">
     Description  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
     description1<br>
     &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;2<br>
     &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;3<br>
     &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;4<br>
     &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;5<br>
     </p>
     <p style="font-size: 150%;text-align: justify;">
     Date &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; date
      </p>
     <p style="font-size: 150%;text-align: justify;">
     Time &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; time
      </p>
     <p style="font-size: 150%;text-align: justify;">
    Location  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; location
      </p>
     
    <hr style="width:1px; height:480px; background-color: grey; margin-top: -480px; margin-left: 400px;"/>
      </div>
      
      <div class="col-md-4 col-sm-4 col-xs-4">
          <img src="<?php echo $PATH_IMG?>2d.png"style="width:200px;z-index:1; margin-top: 25px;"/>
          <p style="font-size:7px; margin-top: 100px;">
        <b>Disclaimer</b><br>
        Please bring a valid photo ID to the event with this ticket.<br>
        Your name on the ticket must match with your photo ID.<br>
        To prevent confusion, we only allow one ticket per person<br>
        and one ticket per group in case of group purchase.<br>
        All sales are final. No refund or exchange can be issued.<br>
        Valid only for the event specified on this ticket<br>
        <br>
        If you have any questions or concerns, feel free to email.<br>
        customer support at admin@wrevel.com
          </p>
      </div>
        
    </div>
      </div>

                    <form style="text-align: center; font-size: 20px; color: white;">
                <input type="radio" name="gender" value="male"> approve
          <input type="radio" name="gender" value="female"> disapprove
              </form>
      
      <button type="submit" class="btn btn-lg" style="color: #006eaa; background-color: white; float: right;">Submit</button>

    </div>
    </div>
 

      </div>
    </div>
</div>
  
<script src="https://code.jquery.com/jquery.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>  
    <!--<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>-->
    <script src="<?php echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/checkbox.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/imgpick.js"></script> 
    <script>
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
            if($('#file-input').val()){}
            else{
                if(confirm('You did not select a file to upload, are you sure you want to continue?\n'
                        + 'You will be given a default image')){
                    return true;
                }
                else return false;
            }
        }
    </script>
    
    <script>
    	var type_counters = 0;
    	$(document).ready(function() {
    		$("#add_more").click(function(){
    		 var content = "<div class='ticket_group form-group-row' id='ticket_base" +type_counters+ "'>"
    		 		  +"<div class='row'>"
				  +"<div class='col-sm-3'>"
				  +"<div>"
				  +"Type"
				  
				      +"<select name='type[]' type='text' class='select_type form-control' style='padding:0;' required>"
				          +"<option value='' selected='selected'></option>"
				          +"<option value='free'>Free</option>"
				          +"<option value='regular'>Regular</option>"
				          +"<option value='early bird'>Early Bird</option>"
				          +"<option value='v.i.p'>V.I.P.</option>"
				       +"</select></div><div>"
				       +"Price"
				       +"<input id='e_price' type='number' step='0.01' min='0.00' name='e_price[]' value='0.00' class='e_price form-control'>"
				       +"<input type='hidden' value='nothing here'>"
				   +"</div></div>"
				  +"<div class='col-sm-4' alt='You can drag this text box around to make it larger' title='You can drag this text box around to make it larger'> Info"
				      +"<textarea name='info[]' class='form-control' rows='3'></textarea>"
				  +"</div>"
				  +"<div class='col-sm-2'>Qty."
				      +"<input type='number' max='500' min='1' name='e_quantity[]' class='form-control'>"
				      +"Deadline"
				      +"<input type='text' name='max_date[]' class='d_date form-control' placeholder='mm/dd/yyyy'>"
				  +"</div>"
				  
				  
				  +"<div class='col-sm-2'>Time"
				      +"<select name='max_time[]' type='time' class='form-control' style='padding:0;'>"
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
				  +"<a href='#' class='remove_ticket'>X</a>"
				+"</div>"
    		$('.add_ticket_type').append(content);
    		$('.remove_ticket').on("click", function() {
    			$(this).parent().remove();
    			type_counters--;
    		});
    		$('.select_type').change(function() {
    			//alert($(this).parent().parentchildren());
    			if($(this).val() == 'free') {
    			console.log($(this).parent().parent().children().children('.e_price'));
    				$(this).parent().parent().children().children('.e_price').attr('value', '0.00');
    				$(this).parent().parent().children().children('.e_price').parent().hide();
    			}
    			else
    				$(this).parent().parent().children().children('.e_price').parent().show();
    		});
    		type_counters++;
    	})});
    	
    </script>
    <script>
    	$(document).ready(function() {
    		$('input[type=radio][name=e_is_ticketed]').change(function() {
        		if (this.value == '1') {
        			$("#add_more_base").show();
           			$("#add_more").trigger("click");
        		}
        		else if (this.value == '0') {
        			$("#add_more_base").hide();
            			$(".ticket_group").remove();
        		}
    		});
	});
    </script>
    <script>
	$('#info').popover();
	$('#online-info').popover();
	</script>
	<script>
	$('#drag').popover();
	</script>
    <script>
    	function change_to_online() {
    		if($('#e_is_online').prop('checked')) {
    		console.log('hello');
    			$('#location1').attr('disabled', true);
    			$('#location2').attr('disabled', true);
    			$('#location3').attr('disabled', true);
    			$('#location4').attr('disabled', true);
    			$('#location5').attr('disabled', true);
    		}
    		else {
    			$('#location1').attr('disabled', false);
    			$('#location2').attr('disabled', false);
    			$('#location3').attr('disabled', false);
    			$('#location4').attr('disabled', false);
    			$('#location5').attr('disabled', false);
    		}
	}
    </script>
    <script>
        function add_more_event_images() {
            var content = '<div class="image-upload">'
                                +'<input id="file-input" name = "event_photos[]" type = "file"/>'
                            '</div>';
            $('#event_images_base').append(content);
        }
    </script>
</body>
</html>