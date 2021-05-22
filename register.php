<?php
session_start();
header('location:login.html');
include 'connection.php';
$conn = OpenCon();
echo "Connected Successfully!!!";
$username=$_POST['username'];
$email=$_POST['email'];
$Pass=$_POST['Pass'];
$usertype=$_POST['usertype'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$stat=$_POST['stat'];
$dist=$_POST['dist'];
$city=$_POST['city'];

if(!empty($username)||!empty($email)||!empty($Pass)||!empty($usertype)||!empty($gender)||!empty($phone)||!empty($stat)||!empty($dist)||!empty($city))
{
    echo "something";
    $s="SELECT * FROM regis WHERE email='$email'";
    $result=mysqli_query($conn,$s);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
        echo "Username with this Email already exists";
       // header('location:register.html');
    }
    else
    {
        $sql="INSERT INTO regis VALUES ('0','$username','$email','$Pass','$usertype','$gender','$phone','$stat','$dist','$city')";
        $rs=mysqli_query($conn,$sql);
        if($rs)
        { 
            echo " success";
        }
        else
        {
            echo "not success";
        }
    }
    CloseCon($conn);
}
else{
    echo "All fields are required";
    die();
}
?>