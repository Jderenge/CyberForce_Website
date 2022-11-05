<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sole-Zon Solis</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div id="navbar">
        <img src="./assets/img/szs-one.png" alt="Sole-Zon Solis" onclick="window.location.href = 'index.php'">
        <ul>
            <li onclick="window.location.href = 'manufacturing.php'"><p>Manufacturing</p></li>
            <li onclick="window.location.href = 'solar.php'"><p>Solar Generation</p></li>
            <li onclick="window.location.href = 'contact.php'"><p>Contact Us</p></li>
            <li onclick="window.location.href = 'login.php'"><p>Login</p></li>
        </ul>
    </div>
    <div id="page">
        <h1>Login</h1>
        <form action="" method="post"name="Login Form" style="display: flex; flex-direction: column; margin-bottom: 25px;">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">

            <input type="submit" value="Submit" name="Submit">
        </form>
    </div>
    <?php session_start(); /* Starts the session */

        /* Check Login form submitted */
        if(isset($_POST['Submit'])){
                /* Define username and associated password array */
                $logins = array('bob' => 'sjhd76eww!','clem' => 'khsd54#h','alicia' => 'jhsjhsd222!', 'sue' =>'76shshs63', 'plank'=>'5!ys!hhsds');

    /* Check and assign submitted Username and Password to new variable */
    $Username = isset($_POST['username']) ? $_POST['username'] : '';
    $Password = isset($_POST['password']) ? $_POST['password'] : '';

    /* Check Username and Password existence in defined array */
    if (isset($logins[$Username]) && $logins[$Username] == $Password){
    /* Success: Set session variables and redirect to Protected page  */
    $_SESSION['UserData']['Username']=$logins[$Username];
    header("location:admin.php");
    exit;
    } else {
    /*Unsuccessful attempt: Set error message */
    $msg="<span style='color:red'>Invalid Login Details</span>";
    }
    }
    ?>
    <div id="footer">
        <div class="col">
            <img src="./assets/img/vv-one.png" alt="Vita Vehiculum logo">
        </div>
        <div class="col">
            <h1>Subscribe to our newsletter!</h1>
            <form action="">
                <input type="email" placeholder="email">
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="col">
            <ul>
                <li onclick="window.location.href = 'contact.php'">Contact Us</li>
                <li onclick="window.location.href = 'manufacturing.php'">Manufacturing</li>
                <li onclick="window.location.href = 'solar.php'">Solar Generation</li>
            </ul>
        </div>
    </div>
</body>
</html>