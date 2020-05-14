<?php
    include_once 'header.php';
    include_once '../src/model/dbContext.php';
    include_once '../src/model/request.php';

if(!isset($db))
{
    $db = new dbContext();
}


$customerId = $_COOKIE[$cookie_name]

?>

<head>
    <link rel="stylesheet" href="styles/basket.css">
    <title>Basket</title>
</head>

<style>

</style>

<script>
    /* Set values + misc */
    var promoCode;
    var promoPrice;
    var fadeTime = 300;

    /* Assign actions */
    $('.quantity input').change(function() {
        updateQuantity(this);
    });

    $('.remove button').click(function() {
        removeItem(this);
    });

    $(document).ready(function() {
        updateSumItems();
    });

    $('.promo-code-cta').click(function() {

        promoCode = $('#promo-code').val();

        if (promoCode == '10off' || promoCode == '10OFF') {
            //If promoPrice has no value, set it as 10 for the 10OFF promocode
            if (!promoPrice) {
                promoPrice = 10;
            } else if (promoCode) {
                promoPrice = promoPrice * 1;
            }
        } else if (promoCode != '') {
            alert("Invalid Promo Code");
            promoPrice = 0;
        }
        //If there is a promoPrice that has been set (it means there is a valid promoCode input) show promo
        if (promoPrice) {
            $('.summary-promo').removeClass('hide');
            $('.promo-value').text(promoPrice.toFixed(2));
            recalculateCart(true);
        }
    });

    /* Recalculate cart */
    function recalculateCart(onlyTotal) {
        var subtotal = 0;

        /* Sum up row totals */
        $('.basket-product').each(function() {
            subtotal += parseFloat($(this).children('.subtotal').text());
        });

        /* Calculate totals */
        var total = subtotal;

        //If there is a valid promoCode, and subtotal < 10 subtract from total
        var promoPrice = parseFloat($('.promo-value').text());
        if (promoPrice) {
            if (subtotal >= 10) {
                total -= promoPrice;
            } else {
                alert('Order must be more than £10 for Promo code to apply.');
                $('.summary-promo').addClass('hide');
            }
        }

        /*If switch for update only total, update only total display*/
        if (onlyTotal) {
            /* Update total display */
            $('.total-value').fadeOut(fadeTime, function() {
                $('#basket-total').html(total.toFixed(2));
                $('.total-value').fadeIn(fadeTime);
            });
        } else {
            /* Update summary display. */
            $('.final-value').fadeOut(fadeTime, function() {
                $('#basket-subtotal').html(subtotal.toFixed(2));
                $('#basket-total').html(total.toFixed(2));
                if (total == 0) {
                    $('.checkout-cta').fadeOut(fadeTime);
                } else {
                    $('.checkout-cta').fadeIn(fadeTime);
                }
                $('.final-value').fadeIn(fadeTime);
            });
        }
    }

    /* Update quantity */
    function updateQuantity(quantityInput) {
        /* Calculate line price */
        var productRow = $(quantityInput).parent().parent();
        var price = parseFloat(productRow.children('.price').text());
        var quantity = $(quantityInput).val();
        var linePrice = price * quantity;

        /* Update line price display and recalc cart totals */
        productRow.children('.subtotal').each(function() {
            $(this).fadeOut(fadeTime, function() {
                $(this).text(linePrice.toFixed(2));
                recalculateCart();
                $(this).fadeIn(fadeTime);
            });
        });

        productRow.find('.item-quantity').text(quantity);
        updateSumItems();
    }

    function updateSumItems() {
        var sumItems = 0;
        $('.quantity input').each(function() {
            sumItems += parseInt($(this).val());
        });
        $('.total-items').text(sumItems);
    }

    /* Remove item from cart */
    function removeItem(removeButton) {
        /* Remove row from DOM and recalc cart total */
        var productRow = $(removeButton).parent().parent();
        productRow.slideUp(fadeTime, function() {
            productRow.remove();
            recalculateCart();
            updateSumItems();
        });
    }
</script>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basket</title>
</head>

<body>



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
                        <div class=\"price\">839.99</div>
                        <div class=\"quantity\">
                            <input type=\"number\" value=\"1\" min=\"1\" class=\"quantity-field\">
                        </div>
                        <div class=\"subtotal\">".$basket->getItemPrice()."</div>
                        <div class=\"remove\">
                            <button>Remove</button>
                        </div>
                    </div>
            
                </div>
                <aside>
                    <div class=\"summary\">
                        <div class=\"summary-total-items\"><span class=\"total-items\"></span> Items in your Bag</div>
                        <div class=\"summary-subtotal\">
                            <div class=\"subtotal-title\">Subtotal</div>
                            <div class=\"subtotal-value final-value\" id=\"basket-subtotal\">839.99</div>
                            <div class=\"summary-promo hide\">
                                <div class=\"promo-title\">Promotion</div>
                                <div class=\"promo-value final-value\" id=\"basket-promo\"></div>
                            </div>
                        </div>
                        <div class=\"summary-delivery\">
                            <select name=\"delivery-collection\" class=\"summary-delivery-selection\">
                                <option value=\"0\" selected=\"selected\">Select Collection or Delivery</option>
                                <option value=\"collection\">Collection</option>
                                <option value=\"delivery\">----------------- Delivery coming soon ---------------</option>
                            </select>
                        </div>
                        <div class=\"summary-total\">
                            <div class=\"total-title\">Total</div>
                            <div class=\"total-value final-value\" id=\"basket-total\">839.99</div>
                        </div>
                        <div class=\"summary-checkout\">
                            <button onclick=\"window.alert('Thank you for your order'); window.location.href = 'orders.php'\" class=\"checkout-cta\">Checkout</button>
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


