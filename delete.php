<?php 

include 'Config.php';
if(isset($_GET['id']))
{
        $uid=$_GET['id'];
        $sql="DELETE FROM register WHERE id=$uid";
        $result=mysqli_query($conn,$sql);
        
        if($result==TRUE)
        {
            header('location:View.php');
        }

}
?>
