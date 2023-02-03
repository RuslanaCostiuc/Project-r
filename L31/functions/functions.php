<?php
$servername ="localhost";
$username="root";
$password="";
$db="electronics";

$conn = mysqli_connect($servername, $username,$password, $db);

if(!$conn){
    die("Connection failed :".mysqli_connect_error());
    }
    function count_brand($id){
    global $conn;
    $count_ob = "select count(prd_id) from products where prd_brand = $id";
    $brands_run = mysqli_query($conn, $count_ob);
    $row_brands = mysqli_fetch_array($brands_run);
    $num = $row_brands["count(prd_id)"];
    return $num;

}
function count_cat($id){
    global $conn;
    $count_ob = "select count(prd_id) from products where prd_cat = $id";
    $cat_run = mysqli_query($conn, $count_ob);
    $row_cat = mysqli_fetch_array($cat_run);
    $num = $row_cat["count(prd_id)"];
    return $num;
}
?>
