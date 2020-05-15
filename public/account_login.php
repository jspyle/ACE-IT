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



<div class="container">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
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