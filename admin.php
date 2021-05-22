<?php
include_once('connection.php');
$conn = OpenCon();
$query="SELECT * FROM event";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
        this is admin page.....
        <table align="center" border="1px" style="width:1000px; line-height:40px;">
        <tr>
                <th colspan="10"><h2>Student Record</h2></th>
        </tr>
        <t>
                <th>id</th>
                <th>fname</th>
                <th>lname</th>
                <th>email</th>
                <th>phone</th>
                <th>eventname</th>
                <th>guests</th>
                <th>location</th>
                <th>start</th>
                <th>end</th>
        </t>
        <?php
                while($rows=mysqli_fetch_assoc($result))
                {
        ?>
                        <tr>
                                <td><?php echo $rows['id'];?></td>
                                <td><?php echo $rows['fname'];?></td>
                                <td><?php echo $rows['lname'];?></td>
                                <td><?php echo $rows['email'];?></td>
                                <td><?php echo $rows['phone'];?></td>
                                <td><?php echo $rows['eventname'];?></td>
                                <td><?php echo $rows['guests'];?></td>
                                <td><?php echo $rows['location'];?></td>
                                <td><?php echo $rows['start'];?></td>
                                <td><?php echo $rows['end'];?></td>
                        </tr>
        <?php
                }
        ?>
        </table>
        click here for logout <a href=" logout.php ">LOG-OUT</a>
</body>
</html>