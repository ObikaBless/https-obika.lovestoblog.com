<?php
session_start();


$connection = mysqli_connect("localhost","root","","appointments");
// here is the edit button 
if (isset($_POST['edit_btn'])) {
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM appointments WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
}


// here is the update edit button 
if (isset($_POST['update_btn'])) {

    $id = $_POST['edit_id'];

    $code = $_POST['code'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $app_date = $_POST['app_date'];
    $req_date = $_POST['req_date'];
    $status = $_POST['status'];
    $app_time = $_POST['app_time'];
    $address_one = $_POST['address_one'];
    $city = $_POST['city'];
    $note_before = $_POST['note_before'];
    $note_after = $_POST['note_after'];


    $query = "UPDATE appointments SET code='$code', name='$name', sex='$sex', phone='$phone', email='$email', app_date='$app_date', req_date='$req_date', status='$status', app_time='$app_time', address_one='$address_one', city='$city', note_before='$note_before', note_after='$note_after' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
      $_SESSION['success'] = "Update successful";
      header('Location: index.php');
    }
    else {
        $_SESSION['status'] = "Update FAILED";
        header('Location: index.php');
    }
}




// here is the delete of user section 

if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];
    $query = "DELETE * FROM `appointments` WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {  
        $_SESSION['success'] = "Delete successful";
        header('Location: index.php');
      }
      else {
          $_SESSION['status'] = "Delete FAILED";
          header('Location: index.php');
      }
}

?>