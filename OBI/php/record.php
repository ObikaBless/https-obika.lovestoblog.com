<?php
require"./config.php";
if(isset($_POST["submit"])){
    $code = mysqli_real_escape_string($con,$_POST["code"]);
    $name = mysqli_real_escape_string($con,$_POST["name"]);
    $sex = mysqli_real_escape_string($con,$_POST["sex"]);
    $phone = mysqli_real_escape_string($con,$_POST["phone"]);
    $email = mysqli_real_escape_string($con,$_POST["email"]);
    $app_date = mysqli_real_escape_string($con,$_POST["app_date"]);
    $first_time = mysqli_real_escape_string($con,$_POST["first_time"]);
    $req_date = mysqli_real_escape_string($con,$_POST["req_date"]);
    $status = mysqli_real_escape_string($con,$_POST["status"]);
    $app_time = mysqli_real_escape_string($con,$_POST["app_time"]);
    $address_one = mysqli_real_escape_string($con,$_POST["address_one"]);
    $city = mysqli_real_escape_string($con,$_POST["city"]);
    $note_before = mysqli_real_escape_string($con,$_POST["note_before"]);
    $note_after = mysqli_real_escape_string($con,$_POST["note_after"]);

    $query_statement = "INSERT INTO `appointments`(`code`, `name`, `sex`, `phone`, `email`, `app_date`, `first_time`, `req_date`, `status`, `app_time`, `address_one`, `city`, `note_before`, `note_after`) VALUES ('$code', '$name', '$sex', '$phone', '$email', '$app_date', '$first_time', '$req_date', '$status', '$app_time', '$address_one', '$city', '$note_before', '$note_after')";
    $query = mysqli_query($con, $query_statement);

    if($query){
        $loc = "./../index.php";
        header("Location:$loc");
    }else{
        echo "An error occurred";
    }


}else{
    echo "<script> alert('An error occurred'); </script>";
    echo "an error occured";
}

?>