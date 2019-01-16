<?php
//session_start();
include ('login.php');

global $fetchid, $img;
if(isset($_SESSION['id'])) {
    $fetchid = $_SESSION['id'];
}
//var_dump($_SESSION);
?>

    <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Be a member| Traveller's Pick| A guide to the alluring planet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="signup.css" rel="stylesheet">


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
            <li  class="bar"><a class="link" href="front.php">Home</a></li>

            <div class= "fa fa-dot-circle-o" style="font-size: .7em"></div>
            <li class="bar" ><a class="link" href="Traveller's%20Dream.php"> Traveller's Dream </a></li>

            <div class= "fa fa-dot-circle-o" style="font-size: .7em"> </div>



            <li class="bar-current bar" id="logobar"><div id="logowrapper">
                <div id="logo"><a class="link" href="signup.php"><?php if(isset($_SESSION['loggedin']) && !$_SESSION['loggedin']): ?>
                            Log In

                        <?php elseif(isset($_SESSION['loggedin']) && $_SESSION['loggedin']):  ?>
                            Hello <?php echo $_SESSION['username'];?>
                            <?php else:?>
                            Log In
                        <?php endif; ?></a> </div>
            </div></li>
            <div class= "fa fa-dot-circle-o" style="font-size: .7em"></div>
            <li class = "bar" ><a class="link" href="Magazines.php"> Magazines </a></li>

            <div class= "fa fa-dot-circle-o" style="font-size: .7em"></div>
            <li class = "bar" id="aboutus"><a class="link" href="aboutus.php"> Explore </a></li>






        </ul>
    </nav>

</section>


<div class="login-wrap">

    <div class="login-html">
        <?php if(!isset($_SESSION['loggedin'])|| !$_SESSION['loggedin']): ?>
        <form action="" method="post">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <form action="" method="post">
            <div class="sign-in-htm">
                <div class="group">

                    <label for="userin" class="label">Username</label>
                    <input id="userin" type="text" name="username" class="input" >
                </div>
                <div class="group">
                    <label for="passin" class="label">Password</label>
                    <input id="passin" type="password" name="password" class="input" data-type="password">

                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check" class = "label"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <input name="action" type="hidden" value="login" />
                    <input type="submit" class="button" value="Sign In">
                </div>
                <div class="hr sign"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Forgot Password?</a>
                </div>
            </div>
            </form>

            <form action="" method="post">
            <div class="sign-up-htm">
                <div class="group">
                    <label for="userup" class="label">Username</label>
                    <input id="userup" name="username" type="text" class="input">
                </div>
                <div class="group">
                    <label for="passup" class="label">Password</label>
                    <input id="passup"  type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="passrepeat" class="label">Repeat Password</label>
                    <input id="passrepeat" name="password" type="password" class="input" data-type="password">
                    <input name="action" type="hidden" value="signup" />
                </div>
                <div class="group">
                    <label for="pass" class="label">Email Address</label>
                    <input id="pass" name="email" type="text" class="input">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign Up">
                </div>
                <div class="hr sign"></div>
                <div class="foot-lnk">
                    <label for="tab-1"><a>Already Member?</a></label>
                </div>
            </div>
            </form>
        </div>
    </div>
    <?php elseif(isset($_SESSION['loggedin']) && $_SESSION['loggedin']):
?>
<div id="userinfo">
  <?php // echo $sql;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "country_review";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // $sql = "insert into" . " user (emailID, password, userName, mName, lName, countrylives) " . "values('" . $email . "', '" .$password . "', '" . $name . "',  NULL, NULL, NULL)";

// $sql = "insert into" ." user (emailID, password, userName, mName, lName, countrylives) "."values('"."labiba.kanij@gmail.com"."', '"."labiba"."', '" ."kanij"."',  NULL, NULL, NULL)";

// use exec() because no results are returned
        $sql = "select image, username, mname, lname from"." user where userID = ". $fetchid;
        //echo $_SESSION['id'];
        foreach ($conn->query($sql) as $row) {?>
            <h1 id="name"><?php echo $row['username']." ".$row['mname']." ".$row['lname']; ?> </h1>



      <?php $img = $row['image']; }?>
        <div id="signout"><a href="logout.php" >
                <img src="logout-32.png">

            </a> </div>

        <div class="hr user"></div>
        <div id="imageup">

        <img src=<?php echo $img; ?>>
        </div>
      <?php
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// use exec() because no results are returned
      $sql = "select emailid, username, mname, lname, countrylives from"." user where userID = ". $fetchid;

      ?>
    <div id="infoblock">
      <?php
      foreach ($conn->query($sql) as $row) {?>


          <h3 class="eid" id="e"><label for="e">Email :</label><?php echo $row['emailid']; ?> </h3>
          <h3 class="eid" id="n"><label for="n">Name :</label> <?php echo $row['username']." ".$row['mname']." ".$row['lname']; ?> </h3>
          <h3 class="eid" id="c"><label for="c">Whereabouts :</label><?php echo $row['countrylives']; ?>  </h3>

      <?php  }?>
      </div>
      <?php
  }


  catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
  }

        ?>

    <section id="btn"> <span id="button">
                    <a class="btn" href="update.php">Edit Profile
                  </a>
                </span></section>



    <div class="hr sign"
</div>
</div>


<?php endif; ?>
</body>.



</html>
<?php
include 'close.php';
?>