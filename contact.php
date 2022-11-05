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
        <div class="row">
            <div class="mainCol">
                <h1>Contact info</h1>
                <p>Welcome to Sole-Zon Solis Energy!<br><br>We are happy to answer any and all questions you may have about our services. Please fill out the contact form and we will get back to you shortly!</p>
            </div>
            <div class="mainCol">
                <form action="" style="display: flex; flex-direction: column;">
                    <input type="text" name="name" id="nameField" placeholder="Name">
                    <input type="email" name="email" id="emailField" placeholder="Email">
                    <input type="tel" name="phone" id="phoneField" placeholder="Phone Number">
                    <input type="file" name="file" id="fileUploadField">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
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
        <?php
        // connect and login to FTP server
        $ftp_server = "10.0.5.73";
        $ftp_username = 'green01';
        $ftp_userpass = 'password';
        $ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
        $login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);


        // upload file
        if (ftp_put($ftp_conn, "C:/Users/serverfile.txt", $file, FTP_ASCII))
        {
            echo "Successfully uploaded $file.";
        }
        else
        {
            echo "Error uploading $file.";
        }

        // close connection
        ftp_close($ftp_conn);
        ?>
