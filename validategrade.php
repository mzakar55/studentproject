<?php
$Grade ="";
 $sname="";
 $cname="";
$gradeError ="";
$isValid = true;


function validate1(){
    //extract($_POST);
    global $gradeError;
    global $isValid;


    $Grade=$_POST['grade'];
    $sname=$_POST['student'];
	$cname=$_POST['courseName'];

    if(empty($Grade)){
        $gradeError = "Please Enter grade";
        $isValid = false;
    }

}







if (isset($_POST['save'])) {
	 validate1();
    if($isValid){
	
	//$grade=$_POST['grade'];
	$q3="INSERT INTO grades(studentID,courseID,grade)VALUES('$sname','$cname','$Grade')";
	mysqli_query($con,$q3);
    // die();
    }else{
        //include("addSt.php"); 
        echo "ooooooo";
        // die();
    }
} else {
    //include("addSt.php");
    echo "nnnnnnn";
}


?>