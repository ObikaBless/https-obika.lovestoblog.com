<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit General user info</title>
    <!-- <link rel="stylesheet" href="form.css"> -->
    <link rel="stylesheet" href="style.css">
</head>
<style>
    /************************ INPUT BOX STYLING  ****************************/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;600&display=swap");

*{
    /* margin: 0;
    padding: 0; */
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.body {
  min-height: 100vh;
  align-items: center;
  justify-content: center;
  /* background: #ede9e6; */
  position: fixed;
  overflow: auto;
  top: 10px;
  bottom: 10px;

}
.container2 {
  position: relative;
  max-width: 900px;
  width: 100%;
  border-radius: 6px;
  padding: 30px;
  margin: 0 15px;
  background-color: #ede9e6;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container2 header {
  position: relative;
  left: 30px;
  font-size: 20px;
  font-weight: 600;
  color: #333;
}
.container2 header::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px;
  height: 3px;
  width: 27px;
  border-radius: 8px;
  background-color: #4070f4;
}
.container2 form {
  position: relative;
  min-height: 590px;
  margin-top: 16px;
  background-color: #ede9e6;
}
.container2 form .details{
    margin-top: 30px;
}
.container2 form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.container2 form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    /* width: calc(100% / 3 - 15px); */
    flex-direction: column;
    margin: 4px 0;
}
.input-field input{
    /* padding: 0 5px; */
    outline: none;
    border: 2px solid #aaa;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    height: 35px;
    margin: 8px 0;

}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field select{
    /* padding: 0 5px; */
    outline: none;
    border: 2px solid #aaa;
    height: 35px;
    margin: 8px 0;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 400;
    color: #333;
}
.input-field input:is(:focus, :valid){
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
#hr3{
    margin: 10px -3px;
    border: 0;
    margin-top: 10px;
    border-top: 2px solid #ccc;
}
.container2 form .field{
    display: flex;
    align-items: center;
}
.fles1{
    display: flex;
    gap: 50px;
}
.notes{
    width: 240px;
    height: 110%;
    outline: none;
    border: 2px solid #aaa;
    margin: 8px 0;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 400;
    color: #333;
}
.container2 form button{
    margin-top: 70px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 35px;
    max-width: 200px;
    width: 10%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    background-color: rgb(182, 94, 94);
    transition: all 0.3s linear;
    cursor: pointer;
}
form button:hover{
    background-color: green;
    color:white;
    border-radius: 10px;
}
.savebtn{
   margin-left: 85%;

}
.btntext{
    border:none;
    text-transform: uppercase;
    cursor:pointer;
}
.cancel:hover{
    background-color: red;
    color:white;
    border-radius: 10px;
}
.cancel{
    text-decoration: none;
}


@media (max-width: 750px) {
    .container2 form{
        overflow-y: scroll;
    }
    .container2 form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
       
        width: calc(100% / 2 - 15px);
    }
}
@media (max-width: 550px){
    form .fields .input-field{
       
        width: 100%;
    }
}
</style>
<body>
    

<?php

$connection = mysqli_connect("localhost","root","","appointments");

if (isset($_POST['edit_btn'])) {
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM appointments WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $app)
    {
        ?>

<div class="container">
<form action="code.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">General Information</span>

                    <input type="hidden" name="edit_id" value="<?php echo $app["id"]?>">
                    <div class="fields">
                        <div class="input-field">
                            <label>Unique Code</label>
                            <input name = "code" value="<?php echo $app["code"]?>" style="border: none; width: 80px;" type="text" >
                        </div>

                        <div class="input-field">
                            <label>Name</label>
                            <input type="text" name = "name" value="<?php echo $app["name"]?>">
                        </div>

                        <div class="input-field">
                            <label>Sex</label>
                            
                                <input type="text" name = "sex" value="<?php echo $app["sex"]?>">
                            
                        </div>

                        <div class="input-field">
                            <label>Phone</label>
                            <input type="tel" name="phone" value="<?php echo $app["phone"]?>">
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name = "email" value="<?php echo $app["email"]?>">
                        </div>
                        
                        
                    </div>
                    <hr id="hr3">
                    <span class="title">Appointment Information</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Appointment Date</label>
                            <input type="date" name="app_date" value="<?php echo $app["app_date"]?>">
                        </div>

                        <div class="input-field">
                            <label>First Time</label>
                           <input type="text" name="first_time" value="<?php echo $app["first_time"]?>">
                        </div>

                        <div class="input-field">
                            <label>Request Date</label>
                            <input type="date" name="req_date" value="<?php echo $app["req_date"]?>">
                        </div>

                        <div class="input-field">
                            <label>Appointment Status</label>
                            <input type="text" name="status" value="<?php echo $app["status"]?>">
                        </div>

                        <div class="input-field">
                            <label>Appointment Time</label>
                            <input placeholder="AM" name="app_time" value="<?php echo $app["app_time"]?>" style="border: none; width: 120px; text-align: end;" type="text" >
                        </div>
                        
                        
                    </div>
                    
                    <span class="title">Address Information</span>
                    <div  class="fles1">
                        <div class="input-field">
                            <label>Address 1</label>
                            <input class="field" type="text" name="address_one" value="<?php echo $app["address_one"]?>">
                        </div>
    
                        <div class="input-field">
                            <label>City</label>
                            <input class="field" type="text" name="city" value="<?php echo $app["city"]?>">
                        </div>
                    </div>
                    <span>Notes</span>
                    <div  class="fles1">
                        <div class="input-field">
                            <label> Before Appointment</label>
                            <input type="text" name="note_before" value="<?php echo $app["note_before"]?>">
                        </div>
    
                        <div class="input-field">
                            <label>After Appointment</label>
                            <input type="text" name="note_after" value="<?php echo $app["note_after"]?>">
                        </div>
                    </div>
                    

                    <div class="savebtn">
                        <a href="index.php" class="cancel">CANCEL</a>
                        <button type="submit" name="update_btn" class="btntext">
                        <span class="btntext">Update</span>
                        </button>
                 </div>
                </div>
            </div>
        </form>
</div>

        
        <?php
    }
}

?>


<script src="main.js"></script>
</body>
</html>

