<?php
 include "./config/database.php";
if(isset($_POST['upload']) && isset($_FILES['file']))
{
      
      echo "<pre>";
      print_r($_FILES['file']);
      echo "</pre>";

      $name=$_FILES['file']['name'];
      $size=$_FILES['file']['size'];
      $tmp_nm=$_FILES['file']['tmp_name'];
      $error=$_FILES['file']['error'];

      $location="./images/";
        $image=$location.$name;

        $target_dir="../images/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($tmp_nm,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO gallery
         (g_img) 
         VALUES ('$image')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
             header("location:dashboard.php");
         }
      // if($error === 0)
      // {
      //       if($size > 1250000)
      //       {
      //             $em="sorry,too large";
      //             header("location:dashboard.php");
      //       }
      //       else
      //       {
      //             $img_ex=pathinfo($name, PATHINFO_EXTENSION);
      //             $img_ex_lc=strtolower($img_ex);
      //             $allowd_exs=array("jpg","jpeg","png","JPEG");

      //             if(in_array($img_ex_lc,$allowd_exs))
      //             {
      //                   $new_img_name= uniqid("IMG-" , true).'.'.$img_ex_lc;
      //                   $img_upload_path = 'uploads/'.$new_img_name;
      //                   move_uploaded_file($tmp_nm,$img_upload_path);

      //                   $sql = "INSERT INTO gallery (g_img) VALUES ('$new_img_name')";
      //                   mysqli_query($conn,$sql);
      //                   header("location: dashboard.php");
      //             }
      //             else
      //             {
      //                   $em = "dont upload this type file";
      //       header("location:dashboard.php");
      //             }
      //       }
      // }
      // else
      // {
      //       $em = "unknown error";
      //       header("location:dashboard.php");
      // }
}
else
{
      header("location:dashboard.php");
}
?>