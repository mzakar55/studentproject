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
extract($_POST);
function validate(){
    extract($_POST);

    
    global  $fullnameError ;
    global $PasswordError ;
    global $emailError;
    global  $UserTypeError;
    global $isValid;

    $fullname = $_POST["fullname"];
    $Password = $_POST["Password"];
    $Email = $_POST["Email"];
   // $UserType = $_POST["UserType"];
    if(empty($fullname)){
        $fullnameError = "Please Enter fullname";
        $isValid = false;
    }
    if(empty($Password)){
        $PasswordError = "Please Enter Password";
        $isValid = false;
    }

    if(empty($Email)){
        $emailError = "Please Enter Email";
        $isValid = false;
    }
    // if(empty($UserType)){
    //     $emailError = "Please Enter Email";
    //     $isValid = false;
    // }
}
if(isset($_POST["save"])){
    validate();
    if($isValid){
       // echo "Welcom ". $fullname . " <br>";
        //echo "Your Email is " . $Email;
         $con = mysqli_connect('localhost','root','','native');
             $stmt="INSERT INTO users (fullname , Password , Email , UserType)
                        VALUES ('$fullname' , '$Password' ,'$Email' ,'Student')";
            mysqli_query($con , $stmt);
            

        // die();
    }else{
        include("addSt.php"); 
        echo "ooooooo";
        // die();
    }
} else {
    include("addSt.php");
    echo "nnnnnnn";
}




?>