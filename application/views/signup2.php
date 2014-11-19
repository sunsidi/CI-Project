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
        
            echo form_open('main/signup_validation');
            
	    echo validation_errors();
            
            echo "<p>Email:";
            echo form_input('email', $this->input->post('email'));
            echo "</p>";
            
            echo "<p>Password:";
            echo form_password('PW');
            echo "</p>";
            
            echo "<p>Confirm Password:";
            echo form_password('CPW');
            echo "</p>";
            
            echo "<p>Submit:";
            echo form_submit('Submit', 'Sign Up');
            echo "</p>";
            
            
            echo form_close();
        
        ?>
		
</div>

</body>
</html>