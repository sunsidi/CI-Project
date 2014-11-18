<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php echo $error; ?>
<?php echo form_open_multipart('up/upload2'); ?>
<input type= "file" name= "userfile"/>
<input type = "submit" name = "submit" value="upload image">
<span>or</span>
<input name="Continue" type = "submit" name = "no_pic" value="continue without uploading">
</form>
</body>
</html>