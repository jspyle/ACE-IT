<?php


include "..\src\model\config.php";
include_once "..\src\model\dbContext.php";

if(!isset($db))
{
    $db = new dbContext();
}


if (isset($_POST['but_submit'])) {

    $uname = mysqli_real_escape_string($con, $_POST['txt_uname']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pwd']);

    if ($uname != "" && $password != "") {

        $sql_query = "select MAX(Customer_Id) as Customer_Id from customer where Customer_Email='" . $uname . "' and Customer_Password='" . $password . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['Customer_Id'];

        $_SESSION['customerID'] = $count;

        if ($count > 0) {
            $_SESSION['uname'] = $uname;
            header('Location: account.php');

        } else {
            echo "Invalid username and password";
        }

    }

}


$customerId = $db->getNextCustomerId();

if (isset($_POST['submit_Request'])) {

    $submitUser = new customer($customerId, $_POST['customerName'], $_POST['customerAddress'], $_POST['customerPostcode'],$_POST['customerEmail'], $_POST['customerPassword']);

    $success = $db->newUser($submitUser);

}

$submitItems = $_SERVER['PHP_SELF'];

?>

<script>

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            var x = document.getElementsByClassName("w3-button")
            var i;
            for (i = 0; i < x.length; i++) {
                x[i].style.padding = "20px 20px";
            }

            document.getElementById("logo").style.height = "50px";
            document.getElementById("myNavbar").style.padding = "0px";
        }
        else {
            var x = document.getElementsByClassName("w3-button")
            var i;
            for (i = 0; i < x.length; i++){
                x[i].style.padding = "50px 32px";
            }

            document.getElementById("logo").style.height = "100px";
            document.getElementById("myNavbar").style.padding = "0px";
        }
    }



    window.onload = function() {

        var titlePage = document.title;
        document.getElementById("test").innerHTML = titlePage;


    }


</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

    body, html {
        height: 100%;
        line-height: 1.8;
    }

    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url('../resources/mainBanner3.jpg');
        min-height: 60%;
    }

    .w3-bar .w3-button {
        padding: 32px;
        transition: 0.5s;
    }

    #myNavbar{
        transition: 0.5s;
    }
    #logo{

        transition: 0.5s;
    }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="index.php" class="w3-bar-item  w3-wide"><img id="logo" src="../resources/ACE-IT%20LOGO.png" </a>
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
            <a href="about.php" id="test1" class="w3-bar-item w3-button">ABOUT</a>
            <a href="products.php" id="test2" class="w3-bar-item w3-button"><i class="fa fa-th"></i> PRODUCTS</a>
            <a href="orders.php" class="w3-bar-item w3-button"><i class="fa fa-list"></i> ORDERS</a>
            <a href="account.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ACCOUNT</a>
            <a href="basket.php" onclick="//document.getElementById('contact').style.display='block'" class="w3-bar-item w3-button"><i class="fa fa-shopping-basket"></i> BASKET</a>
            <form method='post' action="">
                <input type="submit" value="Logout" name="but_logout">
            </form>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="products.php" onclick="w3_close()" class="w3-bar-item w3-button">PRODUCTS</a>
    <a href="orders.php" onclick="w3_close()" class="w3-bar-item w3-button">ORDERS</a>
    <a href="account.php" onclick="w3_close()" class="w3-bar-item w3-button">ACCOUNT</a>
    <a href="basket.php" onclick="w3_close()" class="w3-bar-item w3-button">BASKET</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div id="mainBanner" class="w3-display-left w3-text-white" style="padding:48px">
        <span onload="pageTitle()" id="test" class="w3-jumbo w3-hide-small">Professional IT Solutions</span><br>
        <span class="w3-xxlarge w3-hide-large w3-hide-medium">ACE-IT</span><br>
        <span class="w3-large">Make sure you ACE your next IT upgrade with ACE-IT</span>
        <p><a href="products.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Browse Products <Today></Today></a></p>
    </div>
    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</header>


<div class="container-fluid">
<div class="container">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="form-control input-lg" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
</div>
</div>

<div class="newUser">
    <form method="post" action="">
    <h1>New User</h1>
    <div>
        <input type="text" class="textbox" id="customerName" name="customerName" placeholder="Customer Name" />
    </div>
    <div>
        <input type="text" class="textbox" id="customerAddress" name="customerAddress" placeholder="Address"/>
    </div>
        <div>
            <input type="text" class="textbox" id="customerPostcode" name="customerPostcode" placeholder="Postcode"/>
        </div>
        <div>
            <input type="text" class="textbox" id="customerEmail" name="customerEmail" placeholder="Email"/>
        </div>
        <div>
            <input type="password" class="textbox" id="customerPassword" name="customerPassword" placeholder="Password"/>
        </div>
    <div>
        <input type="submit" value="Submit" name="submit_Request" id="but_submit" />
    </div>
    </form>
</div>