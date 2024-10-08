<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
<nav id="navbar">
    <div id="logonav">
        <img src="Photos/cropped-logo%20UNEED-IT.png">
    </div>
    <div id="logoptions">
        <ul>
            <li class="redc"> <a href="home.blade.php">Home</a> </li>
            <li class="bluec"> <a href="Overons.blade.php">Over ons </a></li>
            <li class="redc"> <a href="service.html">Service </a></li>
            <li class="bluec" > <a href="zakelijk.html">Zakelijk </a></li>
            <li class="redc"> <a href="faq.html">Faq </a> </li>
            <li class="bluec"><a href="Bezorgdiensten.html"> Bezorgdiensten </a></li>
            <li class="redc"> <a href="account.php">Account </a> </li>
        </ul>
    </div>
</nav>
<main id="mainhome">
<div id="hometext">
    <img src="Photos/cropped-logo UNEED-IT(notext).png">
    <p><span class="white-text">voor al uw reparaties kunt u terecht bij </span><span class="red-text">Uneed-</span><span  class="blue-text">it</span></p>
</div>
</main>
<footer id="footer">
    <div id="adress">
        <img src="Photos/location.png">
        <p>ZUIDBAAN 514, 2841MD</p>
       <p> MOORDRECHT</p>
    </div>
    <div id="telefoonnnumer">
        <img src="Photos/phone.png">
        <p>+316 30 985 409 SERVICENUMMER</p>
        <p>+3118 28 202 18 KANTOOR </p>
        <p> BEREIKBAAR VAN 09:00-18:00</p>
    </div>
    <div id="tijd">
        <img src="Photos/clock.png">
        <p>MA T/M VRIJ, 09:00 - 23:00</p>
        <p>TELEFONISCH BEREIKBAAR</p>
        <p>VOOR ABONNEMENTHOUDERS</p>
    </div>
</footer>
</body>
</html>