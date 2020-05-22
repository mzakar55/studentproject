<?php
$fullname = "";
$Password = "";
$Email = "";
$UserType = "";
$fullnameError = "";
$PasswordError = "";
$emailError = "";
$UserTypeError = "";
$isValid = true;
function validate(){
    extract($_POST);
    global $fullname;
    global $Password;
    global $Email;
    global $UserType;
    global  $fullnameError ;
    global $PasswordError ;
    global $emailError;
    global  $UserTypeError;
    
    $fullname = $_POST["fullname"];
    $Password = $_POST["Password"];
    $Email = $_POST["Email"];
  
    if(empty($fullname)){
        $fullnameError = "Please Enter fullname";
        $isValid = false;
    }
    if(empty($Password)){
        $fullnameError = "Please Enter Password";
        $isValid = false;
    }

    if(empty($Email)){
        $emailError = "Please Enter Email";
        $isValid = false;
    }
   
}
if(isset($_POST["save"])){
    validate();
    if($isValid){
       // echo "Welcom ". $fullname . " <br>";
        //echo "Your Email is " . $Email;
         $con = mysqli_connect('localhost','root','','native');
             $stmt="INSERT INTO users (fullname , Password , Email , UserType)
                        VALUES ('$fullname' , '$Password' ,'$Email' ,'Teacher')";
           mysqli_query($con , $stmt);
          
        // die();
    }else{
        include("addTe.php"); 
        echo "ooooooo";
        // die();
    }
} else {
    include("addTe.php");
    echo "nnnnnnn";
}

?>


