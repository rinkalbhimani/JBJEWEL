<?php
session_start();
include 'database.php';
if(isset($_POST['submit']))
{
  $fullnm=mysqli_real_escape_string($conn,$_POST['fullname']);
      $unm=mysqli_real_escape_string($conn,$_POST['username']);
      $psw=mysqli_real_escape_string($conn,$_POST['password']);
      $email=mysqli_real_escape_string($conn,$_POST['email']);
      $pno=mysqli_real_escape_string($conn,$_POST['phoneno']);
      $add=mysqli_real_escape_string($conn,$_POST['address']);

      $select="SELECT * FROM register WHERE r_unm='$unm' && r_psw='$psw'";

      $result=mysqli_query($conn,$select);
      if(mysqli_num_rows($result)>0)
      {
        $error[]='user exist!';
      }
      else{
        if($insert="INSERT INTO register(r_fullnm,r_unm,r_psw,r_email,r_pno,r_add) values('$fullnm','$unm','$psw','$email','$pno','$add')");
      }
      mysqli_query($conn,$insert);
      header('location:login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    *{
      margin: 0;
      padding: 0;
    }

    body {
      text-align: center; 
      font-family: Arial, Helvetica, sans-serif;
      background-image: url(bgimg.jpg); 
      background-size:cover;
      /* height: 100vh; */
            background-repeat: no-repeat;
    }
/*opacity */
    section {
      /* background-color: #aca1a169;  */
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 5px;
    }
/*form desing row-col*/
    form {
      background-color:rgba(0, 10, 0,0.3);
      color:white;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction:column;
      box-shadow: 0px 0px 10px rgb(117, 113, 113);
      padding: 40px;
      /* margin-top:20px ; */
    }
/*input type text box desing*/
    input[type=text],
    input[type=password],input[type=email] ,textarea{
      padding: 15px 30px;
      margin: 8px 10;
      display: inline-block;
      border: 2px  solid #ccc;
      box-sizing: border-box;
    }
/* button text color -design
    button {
      background-color: #04AA6D;
      color: white;
      padding: 140px 20px;
      margin: 8px 0;
      border:none;
      cursor:pointer;
      /* width: 200%; */
    } */

    .cancelbtn {
      /* width: 200px; */
      padding: 5px 18px;
      background-color: #f44336;
      
    }
    a{
      text-decoration:none;
    }
    a:hover{
      text-decoration:underline;
    }
    .form-group {
    margin-bottom: 15px;
  }
  .form-group label {
    display: flex;
    font-weight: bold;
    margin-bottom: 5px;
  }
  .form-group input,textarea {
    width: 350px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: px;
  }
  .form-group input[type="submit"] {
    background-color: #007bff;
    color: white;
    cursor: pointer;
  }
  .error-msg{
    margin:10px 0;
    display:block;
    background:crimson;
    color:#fff;
    border-radius:5px;
    font-size:20px;
  }
  </style>
  <link rel="shortcut icon" href="images/jbicon.ico" type="image/x-icon">
    <!-- <link rel="apple-touch-icon" href="images/apple-touch-icon.png">  -->

</head>

<body>

  <section>
    <div class="bg-img">
      <div class="center-form">
        <br>
      
    <form action="#" method="POST">
    <h1 style="text-decoration:underline; margin-bottom:30px;">Registration Form</h1>

      <div class="form-group">
      <div class="form-group">
        <?php
          if(isset($error))
          {
            foreach($error as $error)
            {echo '<span class="error-msg">'.$error.'</span>';}
          }
        ?>
        <label for="fullname">Full Name:</label>
        <input type="text"  id="fullname" name="fullname" required>
      </div>
        <label for="username">UserName:</label>
        <input type="text"  id="username" name="username" required>
      </div>
      
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
     
      <div class="form-group">
        <label for="email">E-Mail:</label>
        <input type="email" id="email" name="email" required>
      </div>
      
      <div class="form-group">
        <label for="phoneno">Phone No:</label>
        <input type="text" id="phoneno" name="phoneno" minlength="10" maxlength="10" required>
</div>
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" name="address" required rows=5 cols=37></textarea>
      </div>
      
      

      
      
      <div class="form-group">
        <input type="submit" value="Register" name="submit">
      </div>
    </form>

         <!-- <form action="index.php" method="post">
          <h2> REGISTRATION FORM  </h2>
          <div class="imgcontainer">

            <img src="download.png" alt="Avatar" width="50" class="avatar">
          </div>
          <label for="uname"><b>Enter Name</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
          <label for="uname"><b>Enter Email:</b></label>
          <input type="email" placeholder="Enter Emailid" name="email" required>
          <label for="psw"><b>Enter Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <label for="psw"><b>Enter Mobile No:</b></label>
          <input type="text" placeholder="Enter MobileNo" name="mobileno" required>
          <label for="psw"><b>Enter Address:</b></label>
          <textarea placeholder="Enter MobileNo"  name="mobileno" required rows=5 cols=30> </textarea>
          
          
          <span class="psw">Already have an Account? <a href="login.php">Login</a></span>
          <div style="display:flex;">
          <button type="submit">Register</button>&nbsp;&nbsp;
          <button type="button" class="cancelbtn">Clear</button>
          </div>

          
           <label>
            
          </label>
          <div class="container">
            <button type="button" class="cancelbtn">Cancel</button> 
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>  -->
      </div>
  </section>
</body>
</html>   