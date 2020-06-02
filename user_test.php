<?php
session_start();

// initializing variables
$user_name = "";
$user_email = "";
$errors = array(); 

// connect to the database
$db_sysgo = mysqli_connect('localhost', 'root', '', 'sysgo');

// REGISTER USER
if (isset($_POST['user_reg'])) {
  // receive all input values from the form
  $user_name = mysqli_real_escape_string($db_sysgo, $_POST['user_name']);
  $user_email = mysqli_real_escape_string($db_sysgo, $_POST['user_email']);
  $user_pass1 = mysqli_real_escape_string($db_sysgo, $_POST['user_pass1']);
  $user_pass2 = mysqli_real_escape_string($db_sysgo, $_POST['user_pass2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($user_name)) { array_push($errors, "Username is required"); }
  if (empty($user_email)) { array_push($errors, "Email is required"); }
  if (empty($user_pass1)) { array_push($errors, "Password is required"); }
  if ($user_pass1 != $user_pass2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE user_name='$user_name' OR user_email='$user_email' LIMIT 1";
  $result = mysqli_query($db_sysgo, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['user_name'] === $user_name) {
      array_push($errors, "Username already exists");
    }

    if ($user['user_email'] === $user_email) {
      array_push($errors, "email already exists");
    }
  }

  // Register user if there are no errors in the form
  if (count($errors) == 0) {
  	$user_pass = md5($user_pass1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (user_name, user_email, user_pass) 
  			  VALUES('$user_name', '$user_email', '$user_pass')";
  	mysqli_query($db_sysgo, $query);
  	$_SESSION['user_name'] = $user_name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login'])) {
  $user_name = mysqli_real_escape_string($db_sysgo, $_POST['user_name']);
  $user_pass = mysqli_real_escape_string($db_sysgo, $_POST['user_pass']);

  if (empty($user_name)) {
    array_push($errors, "Username is required");
  }
  if (empty($user_pass)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $user_pass = md5($user_pass);
    $query = "SELECT * FROM users WHERE user_name='$user_name' AND user_pass='$user_pass'";
    $results = mysqli_query($db_sysgo, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['user_name'] = $user_name;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>


<?php  if (count($errors) > 0) : ?>
  <div class="error">
    <?php foreach ($errors as $error) : ?>
      <p><?php echo $error ?></p>
    <?php endforeach ?>
  </div>
<?php  endif ?>