<?php
    include_once 'header.php';
    include_once '../src/model/dbContext.php';
    include_once '../src/model/request.php';
if(!isset($db))
{
    $db = new dbContext();
}

$count = $_SESSION['customerID'];

$customerId = $_COOKIE[$cookie_name];

$randDate = rand(3,14);

$date = strtotime("$randDate day");
$dateFormat = date('Y-m-d', $date);
$dateCurrent = date('Y-m-d');

echo date('Y-m-d');

$timeslotId = rand(1,4);

$deliveryId = $db->getNextDeliveryId();
$orderId = $db->getNextOrderId();
$orderItemId = $db->getNextOrderItemId();





if (isset($_POST['submit_Request'])) {

    $submitDelivery = new delivery($deliveryId, $dateFormat, $timeslotId);
    $submitCustomerOrder = new customerOrder($orderId, $count, $deliveryId, $dateCurrent, 1);
    //$submitOrderItem = new orderItem2(400,$orderId,"WRK1",1);

    $success = $db->delivery($submitDelivery);
    $success = $db->customerOrder($submitCustomerOrder);
    //$success = $db->orderItemIn($submitOrderItem);

    $baskets = $db->getBasket($customerId);
    $className = 1;

    if($baskets) {
        foreach ($baskets as $basket) {

            $itemId = $basket->getItemId();
            $submitOrderItem = new orderItem2($orderItemId,$orderId,$itemId,1);

            $success = $db->orderItemIn($submitOrderItem);

            $orderItemId += 1;
        }
    }

    deleteTempTable();
}

$submitItems = $_SERVER['PHP_SELF'];


function deleteTempTable() {

$mysqli = new mysqli("proj-mysql.uopnet.plymouth.ac.uk","PRCO204_H","S6qYB7BMQ0YurT43","PRCO204_H");

// Check connection
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}

// Perform query
if ($result = $mysqli -> query("DELETE FROM basket;")) {
    echo "Returned rows are: " . $result -> num_rows;
    // Free result set
    $result -> free_result();
}

$mysqli -> close();

}



?>

<head>
    <link rel="stylesheet" href="styles/basket.css">
    <title>Basket</title>
</head>

<style>

</style>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basket</title>
</head>

<body>

<aside>
    <div class="summary">
        <div class="summary-total-items\"><span class="total-items"></span> Items in your Bag</div>

        <div class="summary-subtotal">
            <div class="subtotal-title">Subtotal</div>
            <div class="subtotal-value final-value" id="basket-subtotal">839.99</div>
            <div class="summary-promo hide">
                <div class="promo-title">Promotion</div>
                <div class="promo-value final-value" id="basket-promo"></div>
            </div>
        </div>
        <div class="summary-delivery">
            <select name="delivery-collection" class="summary-delivery-selection">
                <option value="0" selected="selected">Select Collection or Delivery</option>
                <option value="collection">Delivery</option>
                <option value="delivery">------------------ Collection Coming Soon ------------------</option>
            </select>
        </div>
        <div class="summary-total">
            <div class="total-title">Total</div>
            <div class="total-value final-value" id="basket-total">839.99</div>
        </div>
        <div class="summary-checkout">
            <form method="post" action="">
                <input onclick="window.alert('Thank you for your order'); window.location.href = 'account.php'" class="w3-button w3-black w3-padding-large" type="submit" value="Submit" name="submit_Request" id="but_submit" />
            </form>
        </div>
    </div>



    </div>
</aside>

<?php
$optionString = "";
$baskets = $db->getBasket($customerId);
$className = 1;

if($baskets)
{
    foreach($baskets as $basket)
    {



        $listBasket.="<div class=\".$className.\" style=\"margin-top:64px\">
             <div class=\"basket\">
                    <div class=\"basket-labels\">
                        <ul>
                            <li class=\"item item-heading\">Item</li>
                            <li class=\"price\">Price</li>
                            <li class=\"quantity\">Quantity</li>
                            <li class=\"subtotal\">Subtotal</li>
                        </ul>
                    </div>
                    <div class=\"basket-product\">
                        <div class=\"item\">
                            <div class=\"product-image\">
                                <img src=\"../resources/Products/".$basket->getItemId()."\" alt=\"Placholder Image 2\" class=\"product-frame\">
                            </div>
                            <div class=\"product-details\">
                                <h1><strong><span class=\"item-quantity\"></span>".$basket->getItemName()."</strong></h1>
                                <p><strong>".$basket->getItemDescription()."</strong></p>
                                <p>Product Code: ".$basket->getItemId()."</p>
                            </div>
                        </div>
                        <div class=\"price\">".$basket->getItemPrice()."</div>
                        <div class=\"quantity\">
                            <input type=\"number\" value=\"1\" min=\"1\" class=\"quantity-field\">
                        </div>
                        <div class=\"subtotal\">".$basket->getItemPrice()."</div>
                        <div class=\"remove\">
                            <button>Remove</button>
                        </div>
                    </div>
            
                </div>
                


    </div>";
        $className += 1;
    }
}

echo $listBasket;




?>







</body>

</html>


