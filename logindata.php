<?php
    require 'db.php';
    $selqury = "select * from logindb";
    $query = mysqli_query($dbhandale,$selqury);
    $num = mysqli_num_rows($query);
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>logindata</title>
    <link rel="stylsheet" href="logindata.css">
</head>
<body>

<div id="tab">

    <table id="tabid" width="100%" border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Mobile_no</th>
                <th>City</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
                <?php  while($res = mysqli_fetch_array($query)){
       
                ?>
                <tr>
            <td>  <?php echo $res['id'];       ?> </td>
            <td>  <?php echo $res['username']; ?> </td>
            <td>  <?php echo $res['email']; ?> </td>
            <td>  <?php echo $res['password']; ?> </td>
            <td>  <?php echo $res['mobileno']; ?> </td>
            <td>  <?php echo $res['city'];     ?> </td>
            <td><a href="update.php?id= <?php echo $res['id'];?>">upadate</a></td>
            <td><a href="delete.php?id= <?php echo $res['id'];?>" >delelte</a></td>
                </tr>
            <?php

            }
            ?>
        </tbody>
    </table>



</div>
    
</body>
</html>