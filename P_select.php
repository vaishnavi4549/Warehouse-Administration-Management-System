<?php
    include_once'Connection.php';

    $sql = "SELECT PID,NAME,PRICE,MD,ED,TYPE,PBY FROM product ";

    $result=mysqli_query($conn,$sql);
    $resultcheck=mysqli_num_rows($result);

    if($resultcheck>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<br>Product ID:".$row['PID']."<BR><br>"."Product Name:".$row['NAME']."<br><br>"."Product Price:".$row['PRICE']."<br><br>"."Product Manifacturing Date:".$row['MD']."<br><br>"."Product Expiry Date".$row['ED']."<br><br>"."Type of Product:".$row['TYPE']."<br><br>"."Manufactred ID:".$row['PBY'];
            echo"<br>"."_________________________________________________________________________________________________";
        }
    }
?>
    