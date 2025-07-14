<html>
<head>
<style>
    table
    {
        margin-top:120px;
    }
    a{
        text-decoration: none;
    }
</style>
<title>
Register Form 
</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <td colspan="2" style="text-align:center;"><h2>Login Form</h2></td>
                </tr>
                <form action="log.php" method="post">
                    <tr>
                        <td>Enter Name : </td>
                        <td><input type="text" name="user" </td>
                        </tr>
                        <tr>
                            <td>Enter Password :</td>
                            <td><input type="password" name="pass"></td><td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center; height: 5opx;">
                                <input type="submit" value="Login" name="submit"</td>
                                <input type="reset" value="Clear">

                                </td></tr>
                                <tr>
                                    <td colspan="2"> Don't have an Account? <a href="Register.php">Sign Up</a></td>
                                </tr>
                                

             
                    
                </form>
            </tr>
        </table>
    </center>
</body>