<html>
<head>
	<title>Need Login</title>
</head>
<body>

<?php
        echo form_open('welcome/PW_CHECK/');
            
	    echo "<p>ENTER PW!!:";
            echo form_input('PW');
            echo "</p>";
            
            echo "<p>Submit:";
            echo form_submit('Submit', 'Submit');
            echo "</p>";
         
            
        echo form_close();

    
?>

</body>
</html>