<!DOCTYPE html>
<html lang="en">
<!--  -->
<head>
<meta charset="utf-8">
  <title>Dreams Tourism</title>
  <meta name="author" content="Irene Nousiainen">
  <link rel="stylesheet" type="text/css" href="clients_style.css">
  <link rel="icon" type="image/png" href="../images/dreams_tour.png">
</head>

<body>

<div class="brand">
    <img src="../images/dreams_tour.png"/>
</div>

<div class="header">
	<h2>CLIENT REGISTER</h2>

<form action="client.php" method="post" accept-charset="utf-8">
	
<div class="input-client">
	<label>First name</label>
	<input type="text" name="cl_first_name" placeholder="Your first name">
</div>

<div class="input-client">
	<label>Surname name</label>
	<input type="text" name="cl_surname" placeholder="Your complete surname">
</div>

<div class="input-client">
	<label>Street</label>
	<input type="text" name="cl_street" placeholder="Adress - street name">
</div>

<div class="input-client">
	<label>Number</label>
	<input type="text" name="cl_numt" placeholder="Adress - number">
</div>

<div class="input-client">
	<label>Complement</label>
	<input type="text" name="cl_compl" placeholder="Complement">
</div>

<div class="input-client">
	<label>City</label>
	<input type="text" name="cl_cityl" placeholder="City">
</div>

<div class="input-client">
	<label>Country</label>
	<input type="text" name="cl_country" placeholder="Country">
</div>

<div class="input-client">
	<label>Zipcode</label>
	<input type="text" name="cl_zip" placeholder="Zipcode">
</div>

<div class="input-client">
	<label>Cel number</label>
	<input type="text" name="cl_cel" placeholder="Your cel number">
</div>

<div class="input-client">
	<label>Email</label>
	<input type="text" name="cl_email" placeholder="Your email">
</div>


<button type="button" class="btn_confirm" name='cl_conf_reg'formmethod="get">CONFIRM</button>
<button type="button" class="btn_cancel" name='cl_cancel_reg'formmethod="get">CANCEL REGISTER</button>

<!--  -->

<!--* <button type="submit" name="cl_conf_reg" class="btn" value="Confirmar"></button>
<button type="submit" name="btn_cancel" class="btn" value="Cancelar";></button>-->

</form>
	
</div>

</body>
</html>