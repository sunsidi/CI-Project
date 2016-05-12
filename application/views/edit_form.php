<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
</head>
<body>

<div id="container">
	<h1>Sign Up</h1>
        <?php
        
            echo form_open('main/update_profile');
            
	    //echo validation_errors();
            echo "<p>Full Name:";
            echo form_input('fullname');
            echo "</p>";

            echo "<p>Quote:";
            echo form_input('tagline');
            echo "</p>";
            

            /*echo "<p>Gender:";
            echo form_input('gender');
            echo "</p>";
            */

            echo "<p>Status:";
            echo form_input('relationship');
            echo "</p>";
            /*
            echo "<p>Birthday:";
            echo form_input('birthday');
            echo "</p>";
            */

            echo "<p>Location:";
            echo form_input('location');
            echo "</p>";

            echo "<p>Education:";
            echo form_input('school');
            echo "</p>";

            echo "<p>Phone:";
            echo form_input('phone');
            echo "</p>";

             echo "<p>Link:";
            echo form_input('user_reference');
            echo "</p>";
            
            echo "<p>Submit:";
            echo form_submit('Submit', 'Change');
            echo "</p>";
         
            
            echo form_close();
        
        ?>
		
</div>

</body>
</html>