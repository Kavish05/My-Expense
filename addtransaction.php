<?php
session_start();
$name= $_SESSION['username'];

include("dbconnect.php");

if(isset($_POST['save_radio']))
{
    //$username = $_POST['username'];
    $desc  = $_POST['desc'];
    $transaction  = $_POST['transaction'];
    $date  = $_POST['date'];
    $amount  = $_POST['amount'];



    $query = "INSERT INTO transaction (username,date,amount,description,category) VALUES ('$name','$date','$amount','$desc','$transaction')";
    $query_run = mysqli_query($conn, $query);

 if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: homepage.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: homepage.php");
    }
 }
?>