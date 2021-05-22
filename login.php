<?php
session_start();
include 'connection.php';
$conn = OpenCon();
echo "Connected Successfully";

$user=$_POST['username'];
$Pass=$_POST['Pass'];
$usertype=$_POST['usertype'];
$s= "SELECT * FROM regis WHERE username='$user' && Pass='$Pass' && usertype='$usertype'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num==1)
{ 
	echo "1111";
	while($row=mysqli_fetch_array($result)){
		echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['usertype'].'")</script>';
		}
		
	if($usertype=="admin")
	{
		?>
				<script type="text/javascript">
				window.location.href="admin.php"</script>
		<?php
	}
	else if($usertype=="user"){
		?>
		<script type="text/javascript">
		window.location.href="dashboard.html"</script>
		<?php
	}
	else
	{
		echo "data insufficient";
	}
}
else
 {
 	 echo " No user is present with this credentials";
 }











/*if($num==1)
{
   //echo " ok";
    header('location:dashboard.html');
}
else
{
    //echo " Not Ok";
   // header('location:login.html');
   echo "Username or Password is Invalid.<br> 
        Click here to <a href='login.html'>try again</a>";

}*/
?>