<?php
    include_once'Connection.php';

    $sql = "SELECT * FROM supply ";
    
    $result=mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);

    if($resultcheck>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<br>Supply ID:".$row['SUPPLYID']."<br><br>"."Manufacturer ID:".$row['MFRID']."<br><br>"."Product ID:".$row['PRODUCTID'];
	echo"<br>________________________________________________________________________";
        }
    }

?>
