<?php
$servername = "fdb31.runhosting.com";
$username = "4016712_expense"; //username of user
$password = "expense02"; //password of above user
$db = "4016712_expense";
if (!$conn = mysqli_connect($servername, $username, $password, $db)){
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT category,sum(amount) FROM transaction WHERE username= '$name' GROUP BY category";
         $result = mysqli_query($conn,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $Category[]  = $row['Category'];
            $Amount[] = $row['Amount'];
        }
 
 
 }
 
 
?>