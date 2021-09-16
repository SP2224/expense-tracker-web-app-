<?php
    include 'config.php';
    $id=$_GET['id'];

    $sql="DELETE FROM todo WHERE id=$id";
    $result=mysqli_query($con, $sql);

    if($result){
        header("location: incomeandexpensecalender.php");
    }

?>