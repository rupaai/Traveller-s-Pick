<?php
include 'config.php';

include ('login.php');
//setcookie('labiba', false, time()-3600);


global $connect, $x, $i, $img, $country, $city, $continent, $population, $area, $_SESSION, $count1, $cid;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Traveller's Pick| A guide to the alluring planet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="front.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="icons/map-icons-master/dist/css/map-icons.css">
    <link rel="stylesheet" href="icons/map-icons-master/dist/css/map-icons.min.css">
    <link rel="stylesheet" href="icons/Font-Awesome-master/css/font-awesome.css">
    <link rel="stylesheet" href="icons/Font-Awesome-master/css/font-awesome.min.css">

   <link rel="stylesheet" type="text/css" href="test.css" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>

    </script>
</head>

<body>

<div id="slideshow" class = "cover">

    <section id="miranda" class="menu">
        <span class="link-copy"></span>
        <nav id="nav_bar" class="menu-miranda">
            <ul class="menu-list">
                <li class="bar" id="traveller"><a class="link" href="Traveller's%20Dream.php"> Traveller's Dream </a></li>
                <div class= "fa fa-dot-circle-o" style="font-size: .7em"></div>
                <li class = "bar" id="magazine"><a class="link" href="Magazines.php"> Magazines </a></li>
                <div class= "fa fa-dot-circle-o" style="font-size: .7em"> </div>



                <li class="bar-current bar" id="logobar"><div id="logowrapper">
                    <div id="logo"><a class="link" href="front.php">Home</a> </div>
                </div></li>
                <div class= "fa fa-dot-circle-o" style="font-size: .7em"></div>
                <li class = "bar" id="aboutus"><a class="link" href="aboutus.php"> Explore </a></li>

                <div class= "fa fa-dot-circle-o" style="font-size: .7em"></div>



                <li id = "search" class="bar">  <a class="link" href="signup.php"><?php if(isset($_SESSION['loggedin']) && !$_SESSION['loggedin']): ?>
                            Log In

                        <?php elseif(isset($_SESSION['loggedin']) && $_SESSION['loggedin']):  ?>
                            Hello <?php echo $_SESSION['username'];?>
                        <?php else:?>
                            Log In
                        <?php endif; ?></a></li>
            </ul>
        </nav>
        <div id="quote">Not all those who wander are lost</div>
        <div id="subquote">Cherish your dream with us.</div>


    </section>




    <section id="populardestination" class="populardestination">
        <div id="container" class="container">

            <div id="border" class="border">
    <div id="populardestinationcontainer" class="populardestinationcontainer">



        <hr class= "style17">
        <p id="spotlight">Spotlight Destination</p>
        <hr class= "style17-2">
        <div id="pic">
        <div id="row1contents" class="grid">

            <?php
            for ($x = 1; $x <= 3; $x++) {

                $i = rand(1,4);


                $sql = "SELECT * FROM" . " city WHERE cityID = ". $i;
                $student_query_result = mysqli_query($connect, $sql) or die(mysql_error());
                $count = mysqli_num_rows($student_query_result);
                if (mysqli_num_rows($student_query_result) > 0) {
                    while ($row = mysqli_fetch_array($student_query_result)) {
                        $img = $row['img_city'];
                        $country = $row['countryName'];
                        $city = $row['cityName'];
                        $cid = $row['countryID'];
                        $continent = $row['continent'];
                        $area = $row['area'];
                        $population = $row['population'];
                        ?>

             <div id="r1c<?php echo $x;?>" class="content"><div id="r1p<?php echo $x;?>"><a href="aboutus.php?id=<?php echo $cid?>" name = <?php echo $country;?>><figure class="effect-julia"><img  src=<?php echo $img; ?>> <figcaption>
                <h2><?php echo $city; ?><br> <span><?php echo $country; ?></span></h2>
                <div>
                    <p>Area : <?php echo $area; ?></p><br>
                    <p>Population : <?php echo $population; ?></p><br>
                    <p>Continent : <?php echo $continent; ?>t</p>
                </div>

            </figcaption></figure> </a></div></div>
            <?php       }
            }
            }
            ?>
        </div>

        <div id="row2contents" class="grid">
<?php
for ($x = 1; $x <= 3; $x++) {
    $i = rand(5,8);

    $sql = "SELECT * FROM" . " city WHERE cityID = ". $i;
    $student_query_result = mysqli_query($connect, $sql) or die(mysql_error());
    $count = mysqli_num_rows($student_query_result);
    if (mysqli_num_rows($student_query_result) > 0) {
        while ($row = mysqli_fetch_array($student_query_result)) {
            $img = $row['img_city'];
            $country = $row['countryName'];
            $city = $row['cityName'];
            $continent = $row['continent'];
            $area = $row['area'];
            $cid = $row['countryID'];
            $population = $row['population'];
            ?>

            <div id="r2c<?php echo $x;?>" class="content"><div id="r2p<?php echo $x;?>"><a href="aboutus.php?id=<?php echo $cid?>" name = <?php echo $country;?>><figure class="effect-julia"><img  src=<?php echo $img; ?>> <figcaption>
                                <h2><?php echo $city; ?><br> <span><?php echo $country; ?></span></h2>
                                <div>
                                    <p>Area : <?php echo $area; ?></p><br>
                                    <p>Population : <?php echo $population; ?></p><br>
                                    <p>Continent : <?php echo $continent; ?>t</p>
                                </div>

                            </figcaption></figure> </a></div></div>
        <?php       }
    }
}
?>
        </div>
        <div id="row3contents" class="grid">
<?php
for ($x = 1; $x <= 3; $x++) {
    $i = rand(11,14);
    $sql = "SELECT * FROM" . " city WHERE cityID = ". $i;
    $student_query_result = mysqli_query($connect, $sql) or die(mysql_error());
    $count = mysqli_num_rows($student_query_result);
    if (mysqli_num_rows($student_query_result) > 0) {
        while ($row = mysqli_fetch_array($student_query_result)) {
            $img = $row['img_city'];
            $country = $row['countryName'];
            $city = $row['cityName'];
            $continent = $row['continent'];
            $area = $row['area'];
            $cid = $row['countryID'];
            $population = $row['population'];
            ?>

            <div id="r3c<?php echo $x;?>" class="content"><div id="r3p<?php echo $x;?>"><a href="aboutus.php?id=<?php echo $cid?>" name = <?php echo $country;?>><figure class="effect-julia"><img  src=<?php echo $img; ?>> <figcaption>
                                <h2><?php echo $city; ?><br> <span><?php echo $country; ?></span></h2>
                                <div>
                                    <p>Area : <?php echo $area; ?></p><br>
                                    <p>Population : <?php echo $population; ?></p><br>
                                    <p>Continent : <?php echo $continent; ?>t</p>
                                </div>

                            </figcaption></figure> </a></div></div>

        <?php       }
    }
}
?>
        </div>
    </div>
    </div>
            </div>
        </div>
    </section>

</div>


</body>
</html>
<?php
include 'close.php';
?>