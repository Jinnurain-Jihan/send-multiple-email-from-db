<?php
    include("db.php");

    $sql="SELECT * FROM students";
    $query=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($query);
    if($count>0){
        while($row=mysqli_fetch_assoc($query)){
            $to_email =$row["email"];
            $subject ="Simple Email Test2";
            $body ="Hi,This is test email send by PHP Script2";
            $headers ="From:zinnurainzihan171@gmail.com";
        
            if (mail($to_email, $subject, $body, $headers)) {
                echo "<h2 style='color:green'>Email successfully sent  $to_email</h2>";
            } else {
                echo "<strong style='color:red'>Email sending failed!<br></strong>";
            }
        }
       
    }else{
        echo "You don't have any data in your database";
    }
?>