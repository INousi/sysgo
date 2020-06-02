<?php 
session_start();
include('../dbconn.php');
$cl_first_name = $_POST['cl_first_name'];
$cl_surname = $_POST['cl_surname'];
$cl_street = $_POST['cl_street'];
$cl_num = $_POST['cl_num'];
$cl_compl = $_POST['cl_compl'];
$cl_city = $_POST['cl_city'];
$cl_country = $_POST['cl_country'];
$cl_zip = $_POST['cl_zip'];
$cl_cel = $_POST['cl_cel'];
$cl_email = $_POST['cl_email'];
$cl_cel = filter_var($cl_cel, FILTER_SANITIZE_NUMBER_INT);

if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) { echo "Invalid Email!"; }


$sql = "INSERT INTO clients (cl_first_name, cl_surname, cl_street, cl_num, cl_compl, cl_city, cl_country, cl_zip, cl_cel, cl_email) VALUES ('$cl_first_name', '$cl_surname', '$cl_street', '$cl_num', '$cl_compl', '$cl_city', '$cl_country', '$cl_zip', '$cl_cel', '$cl_email')";

if (mysqli_query ($conn, $sql)){
	echo "Registered successfully.";
	header("location: index.php?pesquisar=$cl_first_name");
}else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


function btn_cancel(){

//validation removed..
if ($_GET['Confirmar'] == 'submit')
{
echo "Nice! You are now in our special clients team!";
}
if ($_GET['foo'] == 'cancel')
{
echo "Suas informações de cliente estão canceladas";
}
return ('store_prod_form.php');
}


$cl_conf_reg = $_GET['cl_conf_reg'];
if (isset('cl_conf_reg') == true)



?>



