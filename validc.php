<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST') {
     	echo "<h1 class='text-center'>Update Member</h1>";
     	echo "<div class='container";
     	
     	$ids=$_POST['ids'];
     	$idt=$_POST['idt'];
     	$coursename=$_POST['coursename'];
     	

     	$hashedPass=sha1($pass);
        
        $formErrors=array();

        if (strlen($ids) < 4) {
              $formErrors []='User name cant Be less than <strong>4 character </strong>';
        }
        if (strlen($idt) < 4) {
              $formErrors []='User name cant Be More than <strong>20 character </strong>';
        }
        if (empty($coursename)) {
              $formErrors []='UserType cant Be <strong>Empty </strong>';
        
        
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
             	                              courses (id ,CourseID , courseName , TeacherID )
                                             VALUES ('$ids' ,'$idt' ,'$coursename')";

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