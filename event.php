<?php
session_start();
//header('location:login.html');
include 'connection.php';
$conn = OpenCon();
echo "Connected Successfully!!!";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$eventname=$_POST['eventname'];
$guests=$_POST['guests'];
$location=$_POST['location'];
$start=$_POST['start'];
$end=$_POST['end'];

if(!empty($fname)||!empty($lname)||!empty($email)||!empty($phone)||!empty($eventname)||!empty($guests)||!empty($location)||!empty($start)||!empty($end))
{
      //  echo "something";
   
        $sql="INSERT INTO event VALUES ('0','$fname','$lname','$email','$phone','$eventname','$guests','$location','$start','$end')";
        $rs=mysqli_query($conn,$sql);
        if($rs)
        { 
            echo " YOUR EVENT IS SUCCESSFULLY REGISTERED.";
        }
        else
        {
            echo "SOMETHING WRONG IN THE EVENT REGISTRATION";
        }

    CloseCon($conn);
}
else{
    echo "All fields are required";
    die();
}
?>