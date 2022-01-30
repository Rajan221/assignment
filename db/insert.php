<?php

include('../connect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$course_enroll=$_POST['course_enroll'];
$msg="";



if($name==''){
    $msg="Name is required";
}
else if($email==''){
    $msg="Email is required";
}
else if($contact==''){
    $msg="Contact is required";
}
else if($address==''){
    $msg="Address is required";
}
else if($course_enroll==''){
    $msg="Please enter the name of course";
}
else{
$query = "INSERT INTO student(name,contact,email,address,course_enroll) VALUES('$name','$email','$contact','$address','$course_enroll')";

if(mysqli_query($con, $query)){
    $msg= "Success";
}
else{
    $msg= "Error occured".mysqli_error($con);
}
}

echo $msg;
header("Location:../form.php?msg=".$msg);

?>
