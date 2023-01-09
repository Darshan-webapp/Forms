<?php 
$user_name = $_POST['user_name'];
$Email_Id = $_POST['Email_Id']; 
$contact_no = $_POST['contact_no'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$brand_name = $_POST['brand_name'];
$client_name =$_POST['client_name'];

if(empty($user_name)) {
    echo "Please Enter the User Name";
    die();
}

if(empty($Email_Id)) {
    echo "Please Enter Email Id";
    die();
}

if(empty($contact_no)) {
    echo "Please Enter Contact No.";
    die();
}

if(empty($qty)) {
    echo "please fill the qty";
    die();
}
if($qty <=0 || $qty >10) {
    echo "qty must be between 1-10";
    die();
}

if(empty($price)) {
    echo "please fill the price";
    die();
}   
if($price <=1 || $price >10000) {
    echo "price must be between 1-10000";
    die();
}

if(empty($brand_name)) {
    echo "please enter the brand name";
    die();
}

if(empty($client_name)) {
    echo "please enter the client name";
    die();
}

require_once('db.php');

$sql = "INSERT INTO `input` (`user_name`, `Email_Id`, `contact_no`, `qty`, `price`, `brand_name`, `client_name`)  VALUES ('{$user_name}', '{$Email_Id}', '{$contact_no}', '{$qty}', '{$price}', '{$brand_name}', '{$client_name}')";
$query = mysqli_query($conn, $sql);

if($query) {
    echo "<script>alert('Data is Saved')</script>";
}
else {
    echo "<script>alert('Data is not Saved')</script>";
}
header("refresh:1;url=../index.php");
?>  