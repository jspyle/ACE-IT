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

echo date('Y-m-d', $date);

$timeslotId = rand(1,4);

$deliveryId = $db->getNextDeliveryId();
$orderId = $db->getNextOrderId();





if (isset($_POST['submit_Request'])) {

    $submitDelivery = new delivery($deliveryId, $dateFormat, $timeslotId);
    $submitCustomerOrder = new customerOrder($orderId, $count, $deliveryId, $dateFormat, 1);
    $submitOrderItem = new orderItem2(400,$orderId,"WRK1",1);

    $success = $db->delivery($submitDelivery);
    $success = $db->customerOrder($submitCustomerOrder);
    $success = $db->orderItemIn($submitOrderItem);

}

$submitItems = $_SERVER['PHP_SELF'];




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
        <form method="post" action="">
            <input type="submit" value="Submit" name="submit_Request" id="but_submit" />
        </form>
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
                <option value="collection">Collection</option>
                <option value="delivery">----------------- Delivery coming soon ---------------</option>
            </select>
        </div>
        <div class="summary-total">
            <div class="total-title">Total</div>
            <div class="total-value final-value" id="basket-total">839.99</div>
        </div>
        <div class="summary-checkout">
            <button onclick="window.alert('Thank you for your order'); window.location.href = 'account.php'" class="checkout-cta">Checkout</button>
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


