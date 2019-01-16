<?php
include 'config.php';
include ('login.php');

/*
    1. mysql connection
    2. embedding php within html
*/
global $connect;
global $count1;


/*
    1. mysql connection
    2. embedding php within html
*/
global $connect;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us| Traveller's Pick| A guide to the alluring planet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Magazines.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="icons/map-icons-master/dist/css/map-icons.css">
    <link rel="stylesheet" href="icons/map-icons-master/dist/css/map-icons.min.css">
    <link rel="stylesheet" href="icons/Font-Awesome-master/css/font-awesome.css">
    <link rel="stylesheet" href="icons/Font-Awesome-master/css/font-awesome.min.css">

</head>
<body>
<section id="miranda" class="menu">
    <span class="link-copy"></span>
    <nav id="nav_bar" class="menu-miranda">
        <ul class="menu-list">
            <li class="bar" ><a class="link" href="front.php"> Home </a></li>
            <div class= "fa fa-dot-circle-o" style="font-size: .7em"></div>
            <li class = "bar" ><a class="link" href="Traveller's%20Dream.php"> Traveller's Dream </a></li>
            <div class= "fa fa-dot-circle-o" style="font-size: .7em"> </div>



            <li class="bar-current bar" id="logobar"><div id="logowrapper">
                <div id="logo"><a class="link" href="Magazines.php">Magazines</a> </div>
            </div></li>
            <div class= "fa fa-dot-circle-o" style="font-size: .7em"></div>
            <li class = "bar" id="aboutus"><a class="link" href="aboutus.php"> About Us </a></li>

            <div class= "fa fa-dot-circle-o" style="font-size: .7em"></div>



            <li  class="bar"><a class="link" href="signup.php"><?php if(isset($_SESSION['loggedin']) && !$_SESSION['loggedin']): ?>
                        Log In

                    <?php elseif(isset($_SESSION['loggedin']) && $_SESSION['loggedin']):  ?>
                        Hello <?php echo $_SESSION['username'];?>
                    <?php else:?>
                        Log In
                    <?php endif; ?></a></li>
        </ul>
    </nav>

</section>

<div id="firstpage">


    <div id="border"><h2>Discover the best of the earth <br></h2><h3>...because it's worth seeing.</h3></div>
    <div id="takeatour">
        <div id="text"><p>Take a tour</p></div>

        <div id="shield">
            <div id="diamondshape">

            </div>
        </div>
    </div>
    <!--<div id="fcolor"></div>-->
</div>
<div id="magazinebodywrpper">
<div id="topic1">
    <div id="festivals">
        <div id="festpic"></div>
        <div id="festtext">
            <div id="festdes">
                <header>Festivals</header>
                <p>Being at festivals is like standing inside the mind of a culture as it dreams. They have the ability to be both extremely intimate and public spectacles at the same time. Here are 10 of the world's best festivals. Let yourself go....<a href="#" id="seemore">See more</a></p></div>

        </div>
        <div id="borderwrapper">
            <div id="desborder1"></div>
        </div>
        </div>


</div>
</div>
</body>
</html>
<?php
include 'close.php';
?>