<?php
    require 'db.php';

    $id =$_GET['id'];

       $delqr = "delete from logindb where id ='$id'";
       $query =mysqli_query($dbhandale,$delqr);

  
       header('location:logindata.php');
?>


