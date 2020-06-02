<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <title>Dreams Tourism</title>
  <meta name="author" content="Irene Nousiainen">
  <link rel="stylesheet" type="text/css" href="reg_user_style.css">
  <link rel="icon" type="image/png" href="../images/dreams_tour.png">
</head>

<body>

<div class="brand">
    <img src="../images/dreams_tour.png" class="item_thumb" />
</div>

<div class="header">
  	 <h2>USER REGISTER</h2>
</div>

<form action="user.php" method="post" accept-charset="utf-8">

    <div class="input-group">
  	   <label>Username</label>
  	   <input type="text" name="user_name" value="User name">
  	</div>
  	
    <div class="input-group">
  	   <label>Email</label>
  	   <input type="email" name="user_email" value="Email">
  	</div>
  	
    <div class="input-group">
  	   <label>Password</label>
  	   <input type=password name="user_pass1" lenght=10>
  	</div>
  	
    <div class="input-group">
  	   <label>Confirm password</label>
        <input type=password name="user_pass2" lenght=10>
  	</div>
  	
    <div class="input-group">    
        <button name="cl_conf_reg" type="submit" class="btn" >Register</button>
    </div>

    <div class="input-group">    
        <button name="cl_cancel_reg" type="submit" class="btn" >Cancelar</button>
    </div>

  </form>
</body>
</html>