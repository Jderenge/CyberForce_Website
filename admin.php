
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
        <li onclick="window.location.href = 'login.php'"><p>Admin</p></li>
    </ul>
</div>
<div id="page">
    <div class="row">
        <div class="mainCol">
            <h1> </h1>
        <div class="mainCol">

        </div>
    </div>
</div>

<?php
// connect and login to FTP server
$ftp_server = "10.0.5.73";
$ftp_username='green01';
$ftp_userpass='password';
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);
echo $login;

// get file list of current directory
$file_list = ftp_nlist($ftp_conn, "C:\Users\Documents");
var_dump($file_list);

$directory='.';
// close connection
    ftp_nlist($ftp_conn, $directory ); ?>
