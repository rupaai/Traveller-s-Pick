<?php
include 'config.php';
include ('login.php');

global $connect, $op, $count;
global $count1;
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Traveller's Dream| A guide to the alluring planet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Traveller's%20Dream.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="icons/map-icons-master/dist/css/map-icons.css">
    <link rel="stylesheet" href="icons/map-icons-master/dist/css/map-icons.min.css">
    <link rel="stylesheet" href="icons/Font-Awesome-master/css/font-awesome.css">
    <link rel="stylesheet" href="icons/Font-Awesome-master/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>

</head>
<body>
<section id="miranda" class="menu">
    <span class="link-copy"></span>
    <nav id="nav_bar" class="menu-miranda">
        <ul class="menu-list">
            <li class="bar" ><a class="link" href="front.php"> Home </a></li>
            <div class= "fa fa-dot-circle-o" style="font-size: .7em"></div>
            <li class = "bar" ><a class="link" href="Magazines.php">Magazines </a></li>
            <div class= "fa fa-dot-circle-o" style="font-size: .7em"> </div>



            <li class="bar-current bar" id="logobar"><div id="logowrapper">
                <div id="logo"><a class="link" href="Traveller's%20Dream.php">Traveller's Dream</a> </div>
            </div></li>
            <div class= "fa fa-dot-circle-o" style="font-size: .7em"></div>
            <li class = "bar" id="aboutus"><a class="link" href="aboutus.php"> Explore </a></li>

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






      <section id="vacationideas" class="vacationideas">
            <div id="vwrapper">

<section id="wrap">


                <section class="catagory">
                    <div class="wrapper-interest">
                        <div id="dinterest" class="wrapper-dropdown-4">INTERESTS
                            <ul class="dropdown">
                                <?php



                                // username and password sent from form
                                $sql = "SELECT distinct interestType FROM" . " placesofinterest";
                                $student_query_result = mysqli_query($connect, $sql) or die(mysql_error());
                                $count = mysqli_num_rows($student_query_result);
                                if (mysqli_num_rows($student_query_result) > 0) {
                                    while ($row = mysqli_fetch_array($student_query_result)) {
                                        $op = $row['interestType'];
                                        if($op == null){
                                            $op = "All";
                                        }
?>

                                        <li><form action="#" method="post">
                                                <input type="checkbox" id="in-<?php echo $count; ?>" name="in[]" value="<?php echo $op; ?>">
                                            <label for="in-<?php echo $count; ?>" ><?php echo $op; ?></label>
                                            </form>
                                        </li>
                                 <?php   }



                                }
                                ?>


                            </ul>
                        </div>
                        ​</div>
                </section>


                <section class="catagory">
                    <div class="wrapper-interest">
                        <div id="dseason" class="wrapper-dropdown-4">SEASONS

                            <ul class="dropdown">

                                <?php



                                // username and password sent from form
                                $sql = "SELECT distinct bestSeason FROM" . " placesofinterest";
                                $student_query_result = mysqli_query($connect, $sql) or die(mysql_error());
                                $count = mysqli_num_rows($student_query_result);
                                if (mysqli_num_rows($student_query_result) > 0) {
                                    while ($row = mysqli_fetch_array($student_query_result)) {
                                        $op = $row['bestSeason'];
                                        if($op == null){
                                            $op = "All";
                                        }
                                        ?>

                                        <li>   <form action="#" method="post">
                                                <input type="checkbox" id="s-<?php echo $count; ?>" name="s[]" value="<?php echo $op; ?>">

                                            <label for="s-<?php echo $count; ?>" ><?php echo $op; ?></label>
                                            </form>
                                        </li>

                                    <?php   }



                                }
                                ?>



                            </ul>

                        </div>
                        ​</div>
                </section>

                <section class="catagory">

                    <div class="wrapper-interest">
                        <div id="dbudget" class="wrapper-dropdown-4">BUDGET
                            <ul class="dropdown">
                                <?php



                                // username and password sent from form
                                $sql = "SELECT distinct placeBudget FROM" . " placesofinterest";
                                $student_query_result = mysqli_query($connect, $sql) or die(mysql_error());
                                $count = mysqli_num_rows($student_query_result);
                                if (mysqli_num_rows($student_query_result) > 0) {
                                    while ($row = mysqli_fetch_array($student_query_result)) {
                                        $op = $row['placeBudget'];
                                        if($op == null){
                                            $op = "All";
                                        }
                                        ?>

                                        <li><form action="#" method="post">
                                                <input type="checkbox" id="b-<?php echo $count; ?>" name="b[]" value="<?php echo $op; ?>">
                                            <label for="b-<?php echo $count; ?>" ><?php echo $op; ?></label>
                                            </form>
                                        </li>
                                    <?php   }



                                }
                                ?>

                            </ul>
                        </div>
                        ​</div>
                </section>
</section>
                <form action="#" method="post">
<section id="btn"> <span id="button">
        <input type="submit" name="submit" class="btn" value="LOOK OUT"/>
                </span></section>

                </form>







            </div>




        </section>
<!-- jQuery if needed -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">

    function DropDown(el) {
        this.dinterest = el;
        this.opts = this.dinterest.find('ul.dropdown > li');
        this.val = [];
        this.index = [];
        this.initEvents();
    }
    DropDown.prototype = {
        initEvents : function() {
            var obj = this;

            obj.dinterest.on('click', function(event){
                $(this).toggleClass('active');
                event.stopPropagation();
            });

            obj.opts.children('label').on('click',function(event){
                var opt = $(this).parent(),
                    chbox = opt.children('input'),
                    val = chbox.val(),
                    idx = opt.index();

                ($.inArray(val, obj.val) !== -1) ? obj.val.splice( $.inArray(val, obj.val), 1) : obj.val.push( val );
                ($.inArray(idx, obj.index) !== -1) ? obj.index.splice( $.inArray(idx, obj.index), 1 ) : obj.index.push( idx );
            });
        },
        getValue : function() {
            return this.val;
        },
        getIndex : function() {
            return this.index;
        }
    }

    $(function() {

        var dd = new DropDown( $('#dinterest') );

        $(document).click(function() {
            // all dropdowns
            $('.wrapper-dropdown-4').removeClass('active');
        });

    }
    );

</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">

    function DropDown(el) {
        this.dinterest = el;
        this.opts = this.dinterest.find('ul.dropdown > li');
        this.val = [];
        this.index = [];
        this.initEvents();
    }
    DropDown.prototype = {
        initEvents : function() {
            var obj = this;

            obj.dinterest.on('click', function(event){
                $(this).toggleClass('active');
                event.stopPropagation();
            });

            obj.opts.children('label').on('click',function(event){
                var opt = $(this).parent(),
                    chbox = opt.children('input'),
                    val = chbox.val(),
                    idx = opt.index();

                ($.inArray(val, obj.val) !== -1) ? obj.val.splice( $.inArray(val, obj.val), 1 ) : obj.val.push( val );
                ($.inArray(idx, obj.index) !== -1) ? obj.index.splice( $.inArray(idx, obj.index), 1 ) : obj.index.push( idx );
            });
        },
        getValue : function() {
            return this.val;
        },
        getIndex : function() {
            return this.index;
        }
    }

    $(function() {

            var dd = new DropDown( $('#dbudget') );

            $(document).click(function() {
                // all dropdowns
                $('.wrapper-dropdown-4').removeClass('active');
            });

        }
    );

</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">

    function DropDown(el) {
        this.dinterest = el;
        this.opts = this.dinterest.find('ul.dropdown > li');
        this.val = [];

        this.index = [];
        this.initEvents();
    }
    DropDown.prototype = {
        initEvents : function() {
            var obj = this;

            obj.dinterest.on('click', function(event){
                $(this).toggleClass('active');
                event.stopPropagation();
            });

            obj.opts.children('label').on('click',function(event){
                var opt = $(this).parent(),
                    chbox = opt.children('input'),
                    val = chbox.val(),
                    idx = opt.index();

                ($.inArray(val, obj.val) !== -1) ? obj.val.splice( $.inArray(val, obj.val), 1 ) : obj.val.push( val );
                ($.inArray(idx, obj.index) !== -1) ? obj.index.splice( $.inArray(idx, obj.index), 1 ) : obj.index.push( idx );
            });
        },
        getValue : function() {
            return this.val;
        },
        getIndex : function() {
            return this.index;
        }
    }

    $(function() {

            var dd = new DropDown( $('#dseason') );

            $(document).click(function() {
                // all dropdowns
                $('.wrapper-dropdown-4').removeClass('active');
            });

        }
    );

</script>

</body>
</html>
<?php
include 'close.php';
?>