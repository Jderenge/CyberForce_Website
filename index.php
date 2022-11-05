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
            <li onclick="window.location.href = 'contact.php'"><p>Contact Us</p></li>
            <li onclick="window.location.href = 'manufacturing.php'"><p>Manufacturing</p></li>
            <li onclick="window.location.href = 'solar.php'"><p>Solar Generation</p></li>
            <li onclick="window.location.href = 'login.php'"><p>Login</p></li>
        </ul>
    </div>
    <div id="page">
        <img src="./assets/img/download.jfif" alt="Solar Panels">
        <div id="sonnenberg">
            <h1>Sonnenberg Fields</h1>
            <div class="row">
                <div class="mainCol">
                    <h2>List of solar arrays here</h2>
                    <ul>
                        <li>Array One</li>
                        <li>Array Two</li>
                        <li>Array Three</li>
                    </ul>
                </div>
                <div class="mainCol">
                    <h2>Power Generation data</h2>
                    <h3>Data goes here</h3>
                </div>
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