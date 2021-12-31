<?php
$con  = mysqli_connect("localhost","root","","expense");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM transaction WHERE username= '$name' ORDER BY date ASC";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $Category[]  = $row['Category'];
            $amount[] = $row['TotalSales'];
        }
 
 
 }
 
 
?>