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
        <h1>Manufacturing</h1>
        <p style="width: 500px">Being part of the Vita Vehiculum family means that we support the manufacturing of electric vehicles (EV). Utilizing our solar generation, Vita Vehiculum has built a new electric vehicle manufacturing complex right here at Sonneberg Fields. It provides the capability of building EV in a plant run completely off solar! It is much more efficient than any of our competitors! Please reach out via the Contact Us page for more information regarding our EV manufacturing</p>
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