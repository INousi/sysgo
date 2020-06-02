<?php 

// form validation (correctly filled)
if (isset($_POST['user_name'])) {
	echo "Username is required"; 
	} if (isset($user_email)) { 
		echo "Email is required"; 
		} if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) { 
			echo "Invalid email!"; 
			} if (isset($user_pass1)) { 
				echo "Password is required"; 
				} if (isset($user_pass2)) { 
					echo "Confirm password is required"; 
					} if ($user_pass1 != $user_pass2) { 
						echo "The two passwords do not match"; 
} else {
	$pass2 = $pass;
	echo "Successfully registered";
}


function testaemail_bd ($user_email)

require '../dbconn.php';

if (isset($_POST['user_email'])) {
	$user_email = mysql_real_escape_string($_POST['user_email']);
	if (!empty($user_email)) {
    	$user_email_query = mysql_query("SELECT *
                                    FROM users
                                    WHERE user_email = '$user_email'");
    	$count=mysql_num_rows( $user_email_query);
		if($count==0){             
			exit;
		} else {
    		echo "User email already exists";
		exit;
		}
	}
}
?>




//db connection
$db_sysgo = mysqli_connect('localhost', 'root', '', 'sysgo');

// receive all input values from the form and register into Sysgo db
$query = "INSERT INTO users (user_name, user_email, user_pass) 
		  VALUES('$user_name', '$user_email', '$user_pass')";
mysqli_query($db_sysgo, $query);
  	$_SESSION['user_name'] = $user_name;
  	$_SESSION['success'] = "You are now logged in";
header('location: index.php');
  
mysqli_close($db_sysgo);
?>