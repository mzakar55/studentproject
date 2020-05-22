
<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST') {
     	echo "<h1 class='text-center'>Update Member</h1>";
     	echo "<div class='container";
     	
     	$fullname=$_POST['fullname'];
     	$pass=$_POST['password'];
     	$email=$_POST['email'];
     	$UserType=$_POST['UserType'];

     	$hashedPass=sha1($pass);
        
        $formErrors=array();

        if (strlen($fullname) < 4) {
              $formErrors []='User name cant Be less than <strong>4 character </strong>';
        }
        if (strlen($fullname) < 4) {
              $formErrors []='User name cant Be More than <strong>20 character </strong>';
        }
        if (empty($UserType)) {
              $formErrors []='UserType cant Be <strong>Empty </strong>';
        }
        if (empty($email)) {
              $formErrors []='email cant Be <strong>Empty </strong>';
        }if (empty($pass)) {
              $formErrors []='password cant Be <strong>Empty </strong>';
        }
        
        foreach ($formErrors as $error) {
        	echo '<div class="alert alert-danger">'. $error .'</div>';
        }
        if (empty($formErrors)) {
        	//insert User info into database 
            $con = mysqli_connect('localhost','root','','native');
           if(!$con){
            echo "no";
         }else{
            echo "yes";
        }
     

             $stmt="INSERT INTO 
             	                              users (id ,fullname , Password , Email , UserType)
                                             VALUES ('' ,$fullname' , '$pass' , '$email ,
                                             '$UserType')";

            mysqli_query($con , $stmt);
           if($result){
        	//echo success mesage
        	echo '<div class="alert alert-danger">'.  mysql_num_rows($result).'Record Insert </div>';

         }else{
 print_r($_POST);
            echo "no insert";}
     }
 }

     ?>