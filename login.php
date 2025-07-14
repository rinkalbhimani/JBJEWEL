<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $username = $_POST["uname"];
  $password = $_POST["psw"];


  // $sql = "INSERT INTO user (u_nm, u_psw) VALUES ('$username', '$password')";

  // if ($conn->query($sql) === TRUE) 
  // {
    
  //     echo "Login data stored successfully!";
  // }
  // else 
  // {
  //     echo "Error: " . $sql . "<br>" . $conn->error;
  // }
  $sql1 = "SELECT * FROM register WHERE r_unm = '$username' AND r_psw = '$password'";
  $result = mysqli_query($conn, $sql1);

  if (!$result)
   {
    die("Query failed: " . mysqli_error($conn));
    }

// Check if a matching user was found
    if (mysqli_num_rows($result) == 1) 
    {
    // Successful login, redirect the user to a welcome page
    header("Location: index.php");
     } 
     else 
     {
    // Failed login, display an error message
    echo "Invalid username or password";
    }
  
  // Close the database connection
  mysqli_close($conn);
  
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
    <!-- <link rel="apple-touch-icon" href="images/apple-touch-icon.png">  -->

</head>

<body>

  <section>
    <div class="bg-img">
      <div class="center-form">

        <form action="#" method="POST">
          <h2> LOGIN FORM  </h2>
          
          <div class="imgcontainer">

            <img src="download.png" alt="Avatar" width="50" class="avatar">
          </div>
          
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <span class="psw"> <a href="#">Forgot password?</a></span>
          <div style="display:flex;">
          <button type="submit" name="submit">Login</button>&nbsp;&nbsp;
          <button type="button" class="cancelbtn">Cancel</button>
          </div>
          Don't Have an Account? <a href="Register.php">Create Account</a>
          <!-- <label>
            
          </label>
          <div class="container">
            <button type="button" class="cancelbtn">Cancel</button> -->
            <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
          </div>
        </form>
      </div>
  </section>
</body>

</html>   