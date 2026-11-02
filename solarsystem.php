<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="solarsystem.css">
</head>
<body>
    <h1 id="main2">Step into the Cosmos</h1>
    <a href="home.html"><button>Back to Home tab</button></a>
    <div class="planets">
    <h1 id="sunn">Sun</h1>
    <img id="sun" src="sun-removebg-preview (1).png" alt="">
    <h4 id="mercuryy">Mercury</h4>
    <img id="mercury" src="mercury.png" alt="">
    <h4 id="venuss">Venus</h4>
    <img id="venus" src="venus-removebg-preview.png" alt="">
    <h4 id="earthh">Earth</h4>
    <img id="earth" src="earth.png" alt="">
    <h6 id="moonn">Moon</h6>
    <img id="moon" src="moon.png" alt="not ">
    <h4 id="marss">Mars</h4>
    <img id="mars" src="mars-removebg-preview.png" alt="">
    <h4 id="jupiterr">Jupiter</h4>
    <img id="jupiter" src="jupiter-removebg-preview.png" alt="">
    <h4 id="saturnn">Saturn</h4>
    <img id="saturn" src="saturn-removebg-preview.png" alt="">
    <h4 id="uranuss">Uranus</h4>
    <img id="uranus" src="uranus.png" alt="">
    <h4 id="neptunee">Neptune</h4>
    <img id="neptune" src="neptune-removebg-preview.png" alt="">
    <h4 id="plutoo">Pluto</h4>
    <img id="pluto" src="pluto-removebg-preview.png" alt="">
    </div>
    <div class="name">
    <?php
    $name=$_POST['name'];
    echo $name;
    ?>
    </div>
    <div class="spaceship">
    <?php
     $ship=$_POST['ship'];
     echo "<img id='spaceship' src='$ship' alt='Select your spaceship to move keep exploring!'>";
    ?>
    </div>
    <h3 id="main"> Click on different planets to visit them</h3>
    <a href="mercury.html"><img id="mercury" src="mercury.png" alt=""></a>
    <a href="venus.html"><img id="venus" src="venus-removebg-preview.png" alt=""></a>
    <a href="earth.html"><img id="earth" src="earth.png" alt=""></a>
    <a href="moon.html"><img id="moon" src="moon.png" alt=""></a>
    <a href="mars.html"><img id="mars" src="mars-removebg-preview.png" alt=""></a>
    <a href="jupiter.html"><img id="jupiter" src="jupiter-removebg-preview.png" alt=""></a>
    <a href="saturn.html"><img id="saturn" src="saturn-removebg-preview.png" alt=""></a>
    <a href="uranus.html"><img id="uranus" src="uranus.png" alt=""></a>
    <a href="neptune.html"><img id="neptune" src="neptune-removebg-preview.png" alt=""></a>
    <a href="pluto.html"><img id="pluto" src="pluto-removebg-preview.png" alt=""></a>
</body>
</html>