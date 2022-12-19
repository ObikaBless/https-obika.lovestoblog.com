<?php
    require"./config.php";
    $id = $_GET['id'];
    $id = intval($id);

    $del = mysqli_query($con, "DELETE FROM appointments WHERE id=$id");

    if($del){
        $loc = "./../index.php";
        header("Location:$loc");
    }else{
        exho " an error occurred";
    }


?>