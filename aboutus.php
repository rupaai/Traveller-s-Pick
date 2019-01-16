<?php
include ('login.php');
global $connect, $name, $id, $embed, $image, $country, $capital, $pop, $area, $ind, $continent;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
else{
    $id = 10001;
}
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
    <link href="aboutus.css" rel="stylesheet">
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
                    <div id="logo"><a class="link" href="aboutus.php">Explore</a> </div>
                </div></li>
            <div class= "fa fa-dot-circle-o" style="font-size: .7em"></div>
            <li class = "bar" id="aboutus"><a class="link" href="Magazines.php"> Magazines </a></li>

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

<?php
$sql = "SELECT * FROM" . " country WHERE countryID = " . $id;
$student_query_result = mysqli_query($connect, $sql) or die(mysql_error());
if (mysqli_num_rows($student_query_result) > 0){
while ($row = mysqli_fetch_array($student_query_result))
{
$country = $row['countryName'];
$capital = $row['capital'];
$continent = $row['continent'];
$ind = $row['yearOfIndependence'];
$pop = $row['population'];
$area = $row['area'];
$area = $area* 1000000;
?>
<div class="art">
    <article>
        <h1><?php echo $country;?></h1>
        <p>This country became independent on <?php echo $ind; ?>. <?php echo $capital;?> is the capital of <?php echo $country;?>.
        It is located on <?php echo $continent;?>. The population of the country is <?php echo $pop;?> million and the area is
        <?php echo $area;?> sq. kilometers.</p>
        <?php
        }
        }


        $sql = "SELECT cityName, img_city, cityID FROM" . " city WHERE countryID = " . $id;
        //echo $sql;

        if ($strSQL = mysqli_query($connect, $sql)) {


            while ($Results = mysqli_fetch_assoc($strSQL)) {
                $image = $Results["img_city"];
                $city = $Results["cityName"];
                $cid = $Results["cityID"];
                ?>

                <h2>
                    <?php echo $city; ?>
                </h2>
                <div class="pic"><img src=<?php echo $image; ?>></div>


                <?php
            }
        }
        ?>
    </article>
</div>


</body>
</html>