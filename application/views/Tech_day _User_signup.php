<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-tour.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<title>Sign up for Wrevel</title>
</head>
<body>
<img src="https://wrevel.com/src/data/img/wrevel_logo.png" style="width:50%;margin-left:25%;margin-right:25%;float:left;">
<div style="margin-left:40%;margin-right:40%;width:20%;">
<form id="signin" action="<?php echo base_url()."users/signupRegister"?>" method="POST">
		<span style="width:100%;font-size:21px;font-weight:bold;margin-top:20px;float:left;color:white;">First Name</span><br/>
		<input style="width:100%;float:left;font-size:18px;font-weight:bold;" type="text" id='first_name' name="first_name"/><br/>
		<span style="width:100%;font-size:21px;font-weight:bold;margin-top:20px;float:left;color:white;">Email</span><br/>	
		<input style="width:100%;float:left;font-size:18px;font-weight:bold;" type="text" id='email_signup' name='email_signup'/><br/>
	<button type="submit" class="btn btn-lg" style="background:#00aade; color:white; font-size:18px;width:30%;float:left;margin-top:20px;">Sign up</button>
	</form>
</div></body>