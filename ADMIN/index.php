<?php
include_once "./config/database.php";
session_start();
if(isset($_POST['submit']))
{
  $user=($_POST['user']);
  $psw=($_POST['psw']);

  $sql = "SELECT * FROM login WHERE username = '$user' and password = '$psw'";  
  $result = mysqli_query($conn, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
  $count = mysqli_num_rows($result);  
    
  if($count == 1){  
      $_SESSION['username'] = $user;
      header('location:dashboard.php');
  }  
  else
  { ?>  
  <script>
      alert("Incorrect Username or Password");
      window.location.href='index';
  </script>
  <?php }
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
      background-image: url(image/login.jpg);
      background-size:cover;
      height: 100vh;
      background-repeat: no-repeat;
    }
/*opacity */
    section {
      background-color: #aca1a129; 
      height: 100vh;
      display:flex;
      justify-content: center;
      align-items: center;
    }
/*form desing row-col*/
    form {
      display: flex;
      justify-content:center;
      align-items: center;
      flex-direction:column;
      /* box-shadow: 0px 0px 50px rgb(117, 113, 118); */
      box-shadow: 0px 0px 50px rgb(117,113,118);
      
      padding: 40px;
    }
/*input type text box desing*/
    input[type=text],
    input[type=password] {
      padding: 15px 30px;
      margin: 8px 0;
      display: inline-block;
      border: 2px solid #ccc;
      box-sizing: border-box;
    }
/*button text color -design*/
    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border:none;
      cursor:pointer;
      /* width: 200%; */
    }

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
    

</head>

<body>

  <section>
    <div class="bg-img">
      <div class="center-form">

        <form action="#" method="POST">
         <font color="000080"> <h2> LOGIN FORM  </font></h2>
          
          <div class="imgcontainer">

            
          </div>
          
         
          <input type="text" placeholder="Enter Username" name="user" required>

         
          <input type="password" placeholder="Enter Password" name="psw" required>
          <button type="submit" name="submit">Sign in</button>&nbsp;&nbsp;
         
        </form>
      </div>
  </section>
</body>

</html>   
