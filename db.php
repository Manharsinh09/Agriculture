<?php
    $username = "root";
    $password = "";
    $hostname ="localhost";
    $db = "agriculuture";

    $dbhandale = mysqli_connect($hostname,$username,$password,$db) or die("unable to connect");
?>

<script>
    alert("connect sucsessfuly")
</script>
<?php

?>