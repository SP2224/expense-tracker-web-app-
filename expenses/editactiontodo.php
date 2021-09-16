<?php
       $id=$_GET['id'];
       $item=$_GET['item'];
       
    include 'config.php';
    $sql="UPDATE todo SET item='$item' WHERE id=$id";
    $result=mysqli_query($con, $sql);

    if($result){
        header("location: incomeandexpensecalender.php");

    }

?>