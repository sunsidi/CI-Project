<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Wrevenues</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<?php $this->load->view('header');?>

<!--content
==============================================-->
<div class="container" style="width:90%;padding-bottom:50px;">
	<div class="row" style="margin-top:50px;">
	<h1 class="title" style="text-align:center;font-family:GillSans;color:white;"><img class="w_logo" src="<?php echo $PATH_IMG?>w1.png"/>Wrevenues</h1>	
		<div class="form-group row" style="padding:20px;">		
			<div class="left-inner-addon  col-md-2 col-sm-3 col-xs-6 col-md-offset-3 col-sm-offset-1" style="padding:0;">
				<span class="glyphicon glyphicon-search"></span>
				<label class="sr-only">Names</label>
				<input  type="text" name="search" class="form-control" placeholder="search name of wrevenue">
			</div>
			<div class="col-md-1 col-sm-2" style="padding:0;">
				<select class="form-control">
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
			</div>
			<div class="col-md-1 col-sm-2" style="padding:0;">
				<input class="form-control" placeholder="City">
			</div>
			<div class="col-md-1 col-sm-2" style="padding:0;">
				<input class="form-control" placeholder="Neighborhood">
			</div>
			<div class="col-md-1 col-sm-1" style="padding:0;">
				<input name="zipcode" type="text" pattern=".{5,5}" maxlength="5" class="form-control" placeholder="Zip" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
			</div>
			<!--<input type="submit" class="btn" style="background:#1C74BB; color:white;font-size:20px; padding:1px 10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);" value="advanced search">-->
			<input type="submit" class="btn" style="background:#1C74BB; color:white;font-size:20px; padding:1px 10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);" value="go">
		</div>
		<div class="row row-centered">
			<div class="col-md-11 col-centered col-sm-11 col-xs-11" style="color:white;text-align:center;">
				<h4 style="text-align:left;margin-left:10%;"><em>Newest Wrevenues</em></h4>
				
				<div class="row">
					<!--one wrevenue-->
                                        <?php if(isset($wrevenues)) {
                                            for($i = 0; $i < count($wrevenues); $i++) {?> <!--THIS WILL CREATE AS MANY WREVENUES THAT EXISTS-->
					<div class="col-md-4">
						<div class="panel" style="padding:8%;padding-bottom:9%;border-radius:10px;background:linear-gradient(rgba(70, 107, 121, 0.45), rgba(70, 107, 121, 0.45)),url(<?php echo $PATH_IMG?>balt.jpg); background-size:100%;text-align:center;font-family:GillSans;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);height:379px;">
							<div class="panel-body" style="padding:0;text-shadow: 2px 2px 4px #000000;">
								<div class="row">
									<div class="col-sm-12">
								
										<a href="<?php echo base_url().'wrevenues/wrevenues_fullview/'.$wrevenues[$i]['id']?>" class="btn wrevenues-venue"><?php echo $wrevenues[$i]['place'];?></a>
										<!--<p><i class="fa fa-money"></i> </p>-->
								
										<h2>54 <i class="fa fa-heart-o"></i></h2>
										<a class="btn wrevenues-palette"><span class="glyphicon glyphicon-list-alt"></span></a>
										<a class="btn wrevenues-share"><i class="fa fa-share-square-o"></i></a>
										<!--<p><i class="fa fa-clock-o" style="width:50px;"></i> Open Mon, Tues, Wed, Thurs, Fri, Sat, and Sun</p>-->
									</div>
								</div>
								<div class="row" style="font-size:18px;margin-top:8px;">
									<div class="col-sm-12" style="font-size:20px;">
										<!--need to check old wrevenues code, dollar signs is stored in database and is being called-->
										<p><img src="<?php echo $PATH_IMG?>dollarbills_icon.png"/><?php echo $wrevenues[$i]['price'];?></p>
									</div>
									<div class="col-sm-12">
										<p style="padding:0 50px;"><i class="fa fa-clock-o"></i> Open Mon, Tues, Wed, Thurs, Fri, Sat, and Sun</p>
									</div>
							
									<div class="col-sm-12">
										<p><i class="fa fa-map-marker"></i> <?php echo $wrevenues[$i]['city']. ', '.$wrevenues[$i]['state'];?></p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12" style="text-shadow: 2px 2px 4px #000000;">
								
										<i class="fa fa-star fa-2x"></i>
										<i class="fa fa-star fa-2x"></i>
										<i class="fa fa-star fa-2x"></i>
										<i class="fa fa-star fa-2x"></i>
										<i class="fa fa-star fa-2x"></i>
										(#)
									</div>
								</div>
							</div>
						</div>
					</div><!--end of wrevenue-->
                                            <?php }}?>
				</div>
				
				<div class="row">
				<a class="btn btn-lg btn-wrevenues">Click for more</a>
				<a class="btn btn-lg btn-wrevenues" href="#" data-toggle="modal" data-target="#create_wrevenue">Create a Wrevenue</a>
				
				<div class="modal fade" id="create_wrevenue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content wrevenue-background">
                                            <div class="modal-header" style="border:none;">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 style="font-family:GillSans; font-size:27px;">add a wrevenue</h4>
                                            </div>
                                            <div class="modal-body" style="padding:2% 4%;text-align:left;">
                                                <form class="form-horizontal" action="<?php echo base_url().'wrevenues/create_wrevenue';?>" role="form">
                                                <div class="row">
                                                    <div class="col-md-6  create-form-border-left" style="padding:0 5%;">
                                                        <div class="form-group row">
                                                            <label>header photo</label>
                                                            <div class="col-sm-12" style="border:1px solid white;text-align:center;padding:8%;">
                                                                <i class="fa fa-camera fa-4x"></i>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2">name:</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder="name of venue">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2">day:</label>
                                                            <div class="col-sm-3">
                                                                <select class="form-control" style="padding:0;">
                                                                    <option value="" selected="selected"></option>
                                                                    <option value="Mon">Mon</option>
                                                                    <option value="Tues">Tues</option>
                                                                    <option value="Wed">Wed</option>
                                                                    <option value="Thurs">Thurs</option>
                                                                    <option value="Fri">Fri</option>
                                                                    <option value="Sat">Sat</option>
                                                                    <option value="Sun">Sun</option>
                                                                </select>	
                                                            </div>
                                                            <label class="col-sm-2">start hour:</label>
                                                            <div class="col-sm-4">
                                                                <select class="form-control" style="padding:0;">
                                                                    <option value="" selected="selected"></option>
                                                                    <option value="1:00AM">1:00AM</option>
                                                                    <option value="2:00AM">2:00AM</option>
                                                                    <option value="3:00AM">3:00AM</option>
                                                                    <option value="4:00AM">4:00AM</option>
                                                                    <option value="5:00AM">5:00AM</option>
                                                                    <option value="6:00AM">6:00AM</option>
                                                                    <option value="7:00AM">7:00AM</option>
                                                                    <option value="8:00AM">8:00AM</option>
                                                                    <option value="9:00AM">9:00AM</option>
                                                                    <option value="10:00AM">10:00AM</option>
                                                                    <option value="11:00AM">11:00AM</option>
                                                                    <option value="12:00PM">12:00PM</option> 
                                                                    <option value="1:00PM">1:00PM</option>
                                                                    <option value="2:00PM">2:00PM</option>
                                                                    <option value="3:00PM">3:00PM</option>
                                                                    <option value="4:00PM">4:00PM</option>
                                                                    <option value="5:00PM">5:00PM</option>
                                                                    <option value="6:00PM">6:00PM</option>
                                                                    <option value="7:00PM">7:00PM</option>
                                                                    <option value="8:00PM">8:00PM</option>
                                                                    <option value="9:00PM">9:00PM</option>
                                                                    <option value="10:00PM">10:00PM</option>
                                                                    <option value="11:00PM">11:00PM</option>
                                                                    <option value="12:00AM">12:00AM</option> 
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2">end hour:</label>
                                                            <div class="col-sm-4">
                                                                <select class="form-control" style="padding:0;">
                                                                    <option value="" selected="selected"></option>
                                                                    <option value="1:00AM">1:00AM</option>
                                                                    <option value="2:00AM">2:00AM</option>
                                                                    <option value="3:00AM">3:00AM</option>
                                                                    <option value="4:00AM">4:00AM</option>
                                                                    <option value="5:00AM">5:00AM</option>
                                                                    <option value="6:00AM">6:00AM</option>
                                                                    <option value="7:00AM">7:00AM</option>
                                                                    <option value="8:00AM">8:00AM</option>
                                                                    <option value="9:00AM">9:00AM</option>
                                                                    <option value="10:00AM">10:00AM</option>
                                                                    <option value="11:00AM">11:00AM</option>
                                                                    <option value="12:00PM">12:00PM</option> 
                                                                    <option value="1:00PM">1:00PM</option>
                                                                    <option value="2:00PM">2:00PM</option>
                                                                    <option value="3:00PM">3:00PM</option>
                                                                    <option value="4:00PM">4:00PM</option>
                                                                    <option value="5:00PM">5:00PM</option>
                                                                    <option value="6:00PM">6:00PM</option>
                                                                    <option value="7:00PM">7:00PM</option>
                                                                    <option value="8:00PM">8:00PM</option>
                                                                    <option value="9:00PM">9:00PM</option>
                                                                    <option value="10:00PM">10:00PM</option>
                                                                    <option value="11:00PM">11:00PM</option>
                                                                    <option value="12:00AM">12:00AM</option> 
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                    <a class="btn btn-default"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3">location:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" placeholder="where is it?">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4">neighborhood:</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Greenpoint">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2">state:</label>											
                                                            <div class="col-sm-3">
                                                                <select class="form-control" style="padding:0;">
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
                                                            <label class="col-sm-1">city:</label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-1">zip:</label>
                                                            <div class="col-sm-3">
                                                                    <input type="text" pattern=".{5,5}" maxlength="5" class="form-control">
                                                            </div>
                                                            <label class="col-sm-2">country:</label>
                                                            <div class="col-sm-6">
                                                                <select type="text" class="form-control" style="padding:0;font-size:10px;">
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
                                                        <div class="form-group row">
                                                            <label class="col-sm-2">phone:</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4">email address:</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <a class="btn btn-default"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2">link(s):</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <a class="btn btn-default"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2" style="text-align:right;"><i class="fa fa-facebook"></i></label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2" style="text-align:right;"><i class="fa fa-twitter"></i></label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-5">latest wrevs <i class="fa fa-question-circle" id="latestwrevInfo" data-content="Add your latest event here" data-trigger="hover" data-placement="bottom"></i></label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <a class="btn btn-default"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3">price <i class="fa fa-question-circle" id="pricingInfo" data-html="true" data-content="$ - Free to $10  $$ - $11 to 25  $$$ - $26 to 49  $$$$ - $50 to higher" data-trigger="hover" data-placement="top"></i></label>
                                                            <div class="col-sm-4">
                                                                <select class="form-control">
                                                                    <option value="" selected="selected"></option>
                                                                    <option value="$">$</option>
                                                                    <option value="$$">$$</option>
                                                                    <option value="$$$">$$$</option>
                                                                    <option value="$$$$">$$$$</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="padding:0 5%;">
                                                        <div class="form-group">
                                                            <label>wrevenues details</label>
                                                            <textarea class="form-control" rows="4" placeholder="type something attention grabbing"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>shoutout <i class="fa fa-question-circle" id="shoutoutInfo" data-content="Use shoutout as a way to announce your latest updates" data-trigger="hover" data-placement="bottom"></i></label>
                                                            <input type="text" class="form-control" placeholder="type something attention grabbing">
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-5">Who's shouting?</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <button class="btn" style="background:#27AAE0;"><i class="fa fa-camera"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>photos/videos:</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>create tags</label>
                                                            <textarea class="form-control" rows="3"></textarea>
                                                            <div style="margin-top:10px;">
                                                                <button type="button" style="color:#216EAD;">add</button>
                                                                <button type="button" style="color:#216EAD;">delete</button>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="padding-right:3%;">
                                                            <button type="submit" class="btn pull-right" style="background:#6B94A8;font-size:20px;">submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
				</div>
				
				</div>
			</div>
			<div class="col-md-7 col-centered col-sm-11 col-xs-11">	
				<div class="panel" style="color:#414042;margin-top:3%;background:none;text-align:center;box-shadow:none;">
					<div class="panel-body">
						<h3><em>Cities to <strong>Wrevel</strong> in</em></h3>
						
						<div class="row">

							<div class="col-md-4 col-sm-4 col-xs-6" style="margin-top:5%;">
								<img class="img-responsive" src="<?php echo $PATH_IMG?>losangeles.png"/>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6" style="margin-top:5%;">
								<img class="img-responsive" src="<?php echo $PATH_IMG?>lasvegas.png"/>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6" style="margin-top:5%;">
								<img class="img-responsive" src="<?php echo $PATH_IMG?>chicago.png"/>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6" style="margin-top:5%;">
								<img class="img-responsive" src="<?php echo $PATH_IMG?>newyork.png"/>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6" style="margin-top:5%;">
								<img class="img-responsive" src="<?php echo $PATH_IMG?>miami.png"/>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6" style="margin-top:5%;">
								<img class="img-responsive" src="<?php echo $PATH_IMG?>boston.png"/>
							</div>
							
						</div>
					</div>
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
	<script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
	<script>
	$('#pricingInfo').popover();
	$('#shoutoutInfo').popover();
	$('#latestwrevInfo').popover();
	</script>
</body>
</html> 