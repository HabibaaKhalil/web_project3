<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['massage'];


include "connect.php";
$insert = "INSERT INTO massages   
            (name , email , massage) 
            VALUES 
            ('$name' ,' $email' , '$massage')";
$query = $conn -> query($insert);

if($query){
    header("location: ../index.php");
}else{
    $conn -> error ;
}