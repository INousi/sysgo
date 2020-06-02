<?php
//ESSE ARQUIVO PODERIA SE CHAMAR store_prod_purch.php???
//This script add values of selected prods by user into array
//(session: shopping_cart)

$status = ""; //prod add chart

if (isset($_POST['prod_code']) && $_POST['prod_code']!="") {
    $prod_code = $_POST['prod_code'];
    $result = mysqli_query(
        $conn, 
          "SELECT * FROM 'products' WHERE 'prod_code' = '$prod_code'"
);

$row = mysqli_fetch_assoc($result);
$prod_code = $row['prod_code'];
$prod_name = $row['prod_name'];
$prod_image = $row['prod_image'];
$prod_price = $row['prod_price'];
$prod_disc = $row['prod_disc'];
$prod_from = $row['prod_from'];
$prod_to = $row['prod_to'];
$prod_date_start = $row['prod_date_start'];
$prod_date_final = $row['prod_date_final'];
$prod_time_depart = $row['prod_time_depart'];
$prod_time_arrival = $row['prod_time_arrival'];
$prod_obs = $row['prod_obs'];

//array products purchased
$prod_cart = array( 
	'prod_code=>$prod_code = $row['];
	'prod_name'=>$prod_name;
	'prod_image'=>$prod_image;
	'prod_price'=>$prod_price;
	'prod_disc'=>$prod_disc;
	'prod_from'=>$prod_from;
	'prod_to'=>$prod_to;
	'prod_date_start'=>$prod_date_start;
	'prod_date_final'=>$prod_date_final;
	'prod_time_depart'=>$prod_time_depart;
	'prod_time_arrival'=>$prod_time_arrival;
	'prod_obs'=>$prod_obs;
);

if(empty($SESSION['shopping_cart'])){
	$_SESSION['shopping_cart'] = $prod_cart;
	$status = "<div class='box'>Product is added to your cart!</div>";
} else {
	$array_keys = array_keys($_SESSION['shopping_cart']);
	if(in_array($prod_code, $array_keys)){
		$status = "<div class='box' style='color:red;'>Product is already added to your cart!</div>";
	}else{
		$_SESSION['shopping_cart'] = array_merge(
			$_SESSION['shopping_cart'],
			$prod_cart
		);
	}
}



?>