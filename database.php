<?php
      
     
      $conn=mysqli_connect('localhost','root','','mydatabase');
      if(!$conn)
      {
            die('not connect'.mysqli_error());
      }
     // else { echo "success";}


      // if($conn->connect_error)
      // {
      //       die("Connection failed.".$conn->connect_error);
      // }
      // // else{
      // //       $stmt=$conn->prepare("");
      // //       $stmt->bind_param("ssssis",$fullnm,$unm,$psw,$email,$pno,$add);
      // //       $stmt->execute();
      // //       echo "succeddddd";
      // //       $stmt->close();
      // //       $conn->close();
      // // }
      

?>