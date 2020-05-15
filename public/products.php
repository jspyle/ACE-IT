<?php
include_once 'header.php';
include_once '../src/model/dbContext.php';
include_once '../src/model/request.php';

if(!isset($db))
{
    $db = new dbContext();
}


if(!isset($db)) {
    $db = new dbContext();
}
if (isset($_POST['submit_Request'])) {

    $submitRequest = new basket($_POST['itemId'], $_POST['itemName'], $_POST['itemDesc'],$_POST['itemPrice'], $result, 1);

    $success = $db->basketInput($submitRequest);

//    //if($_POST['foodQuantity1'] != 0):
//    $submitFoodItem1 = new itemDetails($orderId."1", $orderId,$_POST['foodTable'], $_POST['foodQuantity1']);
//    $db->enterItemRequest($submitFoodItem1);
//    //  endif;
//    // if($_POST['foodQuantity2'] != 0) :
//    $submitFoodItem2 = new itemDetails($orderId."2",$orderId, $_POST['foodTable2'], $_POST['foodQuantity2']);
//    $db->enterItemRequest($submitFoodItem2);
//    //endif;
//    //if($_POST['drinkQuantity1'] != 0) :
//    $submitDrinkItem1 = new itemDetails($orderId."3",$orderId,$_POST['drinkTable'], $_POST['drinkQuantity1']);
//    $db->enterItemRequest($submitDrinkItem1);
//    //endif;
//    //if($_POST['drinkQuantity2'] != 0) :
//    $submitDrinkItem2 = new itemDetails($orderId."4",$orderId,$_POST['drinkTable2'], $_POST['drinkQuantity2']);
//    $db->enterItemRequest($submitDrinkItem2);
//    // endif;
//    //$success = $db->enter_Request($request);
}

$submitItems = $_SERVER['PHP_SELF'];

?>

<title>Products</title>

<style xmlns="http://www.w3.org/1999/html">

    #Operating li{
        margin: 30px;
    }
    ul{
        overflow: hidden;
    }
    .image li{
        line-height: 200px;
    }
    #categories img{
        height: 20%;
    }
    .cat-desc{
        font-size: 1em;
    }

    .itemDesc {
        text-align: left;
        padding-left: 2.5em;
    }

</style>

<!-- Categories Section -->
<div id="categories" class="w3-container w3-center w3-dark-grey" style="padding:60px 16px" id="pricing">
    <h2>Categories</h2>
    <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-quarter w3-section">
            <ul class="w3-ul w3-white w3-hover-shadow">
                <li class="w3-red w3-xlarge w3-padding-32">Workstations</li>
                <li class="image"><img src="../resources/Workstations/WS-2.png"></li>
                <li class="w3-padding-16">
                    <p class="cat-desc">Whether it's simple CAD work, high performance business or high end 3D modeling we have workstations for any of your specialist needs </p>
                </li>
                <li class="w3-light-grey w3-padding-24">
                    <button onclick="window.location.href = '#Workstations';"" class="w3-button w3-black w3-padding-large">GO TO</button>
                </li>
            </ul>
        </div>
        <div class="w3-quarter w3-section">
            <ul class="w3-ul w3-white w3-hover-shadow">
                <li class="w3-red w3-xlarge w3-padding-32">Servers</li>
                <li class="image"><img src="../resources/Servers/SERV-STORE.png"></li>
                <li class="w3-padding-16">
                    <p class="cat-desc">Whether it's simple CAD work, high performance business or high end 3D modeling we have workstations for any of your specialist needs </p>
                </li>
                <li class="w3-light-grey w3-padding-24">
                    <button onclick="window.location.href = '#Servers';" class="w3-button w3-black w3-padding-large">GO TO</button>
                </li>
            </ul>
        </div>
        <div class="w3-quarter w3-section">
            <ul class="w3-ul w3-white w3-hover-shadow">
                <li class="w3-red w3-xlarge w3-padding-32">Routers</li>
                <li class="image"><img src="../resources/Routers/ROUTER-2.png"></li>
                <li class="w3-padding-16">
                    <p class="cat-desc">Whether it's simple CAD work, high performance business or high end 3D modeling we have workstations for any of your specialist needs </p>
                </li>
                <li class="w3-light-grey w3-padding-24">
                    <button onclick="window.location.href = '#Routers';" class="w3-button w3-black w3-padding-large">GO TO</button>
                </li>
            </ul>
        </div>
        <div class="w3-quarter w3-section">
            <ul class="w3-ul w3-white w3-hover-shadow">
                <li class="w3-red w3-xlarge w3-padding-32">Switches</li>
                <li class="image"><img src="../resources/Switches/SW-2.png"></li>
                <li class="w3-padding-16">
                    <p class="cat-desc">Whether it's simple CAD work, high performance business or high end 3D modeling we have workstations for any of your specialist needs </p>
                </li>
                <li class="w3-light-grey w3-padding-24">
                    <button onclick="window.location.href = '#Switches';" class="w3-button w3-black w3-padding-large">GO TO</button>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--Workstations-->
<div class="w3-container w3-center w3-light-grey" style="padding:60px 16px" id="Workstations">
    <h2>Workstations</h2>

    <?php
    $optionString = "";
    $products = $db->getProductDisplay("WRK");
    $className = 1;


    if($products)
    {
        foreach($products as $product)
        {



            $listProduct.="<div class=\".$className.\" style=\"margin-top:64px\">

            <form method=\"post\" action=\"$submitItems\">

            <div class=\"w3-col w3-left\".$className. style=\"width:300px; padding:0\">
                <ul class=\"w3-ul w3-white w3-hover-shadow\" style=\"height: 400px\">
                    <li style=\"padding: 0\"><img src=\"../resources/Products/".$product->getItemId().".png\" width=\"100%\"></li>
                    <h5 id=timeslutId>".$product->getItemId()."</h5>
                </ul>
            </div>
            <div id=\"operating\" class=\"w3-col w3-right\" style=\"width:500px; padding:0\">
                <ul class=\"w3-ul w3-red\" style=\"height: 400px\">                   
                    </label>
                    <label for=\"noOp2\">
                        <li class=\"w3-hover-shadow w3-light-grey\">
                            <h5>Windows 10 Pro</h5>
                            <h4>£".$product->getItemPrice()."</h4>
                        </li>
                    </label>
                    <li class=\"w3-hover-shadow w3-light-grey w3-padding-24\" style=\"margin: 0\">

                            <input hidden type=\"text\" name=\"itemId\" value=\"".$product->getItemId()."\">
                            <input hidden type=\"text\" name=\"itemName\" value=\"".$product->getItemName()."\">                            
                            <input hidden type=\"text\" name=\"itemDesc\" value=\"".$product->getItemDescription()."\">
                            <input hidden type=\"text\" name=\"itemPrice\" value=".$product->getItemPrice().">
                            
                            
                        <input name=\"submit_Request\" class=\"w3-button w3-black w3-padding-large\" id=\"submitRequest\" onclick=\"\" type=\"submit\" value=\"ADD TO BASKET\">

                    </li>
                </ul>
            </div>
            <div class=\"w3-rest w3-center\" style=\"padding:0;\">
                <ul class=\"w3-ul w3-white w3-hover-shadow\" style=\"height: 400px\">
                    <li>
                        <div class=\"itemDesc\">
                            <h1>".$product->getItemName()."</h1>
                            <h4>".$product->getItemDescription()."</h4>
                            <p>".$product->getItemSpecification()."</p>
                        </div>
                    </li>
                </ul>
            </div>
</form>

    </div>";
            $className += 1;
        }
    }

    echo $listProduct;




    ?>


<!--Servers-->
<div class="w3-container w3-center w3-light-grey" style="padding:60px 16px" id="Servers">

    <h2>Servers</h2>




    <?php
    $optionString = "";
    $servers = $db->getProductDisplay("SVR");
    $className = 1;


    if($servers)
    {
        foreach($servers as $server)
        {



            $listServer.="<div class=\".$className.\" style=\"margin-top:64px\">

            <form method=\"post\" action=\"$submitItems\">
            
            <div class=\"w3-col w3-left\".$className. style=\"width:300px; padding:0\">
                <ul class=\"w3-ul w3-white w3-hover-shadow\" style=\"height: 400px\">
                    <li style=\"padding: 0\"><img src=\"../resources/Products/".$server->getItemId().".png\" width=\"100%\"></li>
                    <h5 name='itemId' id=timeslutId>".$server->getItemId()."</h5>
                </ul>
            </div>
            <div id=\"operating\" class=\"w3-col w3-right\" style=\"width:500px; padding:0\">
                <ul class=\"w3-ul w3-red\" style=\"height: 400px\">

                    <label for=\"noOp\">
                        <li class=\"w3-hover-shadow w3-light-grey\">
                            <input class=\"w3-check\" id=\"noOp\" type=\"checkbox\" style=\"float: right\">
                            <h5>No Operating System</h5>
                            <h4>£".$server->getItemPriceNoOs()."</h4>
                        </li>
                    </label>
                    <label for=\"noOp2\">
                        <li class=\"w3-hover-shadow w3-light-grey\">
                            <input class=\"w3-check\" id=\"noOp2\" type=\"checkbox\" style=\"float: right\">
                            <h5>Windows 10 Pro</h5>
                            <h4>£".$server->getItemPrice()."</h4>
                        </li>
                    </label>
                    <li class=\"w3-hover-shadow w3-light-grey w3-padding-24\" style=\"margin: 0\">
                        
                            <input hidden type=\"text\" name=\"itemId\" value=\"".$server->getItemId()."\">
                            <input hidden type=\"text\" name=\"itemName\" value=\"".$server->getItemName()."\">                            
                            <input hidden type=\"text\" name=\"itemDesc\" value=\"".$server->getItemDescription()."\">
                            <input hidden type=\"text\" name=\"itemPrice\" value=".$server->getItemPrice().">
                            
                            <input name=\"submit_Request\" class=\"w3-button w3-black w3-padding-large\" id=\"submitRequest\" onclick=\"\" type=\"submit\" value=\"ADD TO BASKET\">
                            
                    </li>
                </ul>
            </div>
            <div class=\"w3-rest w3-center\" style=\"padding:0;\">
                <ul class=\"w3-ul w3-white w3-hover-shadow\" style=\"height: 400px\">
                    <li>
                        <div class=\"itemDesc\">
                            <h1 name='itemName'>".$server->getItemName()."</h1>
                            <h4>".$server->getItemDescription()."</h4>
                            <p>".$server->getItemSpecification()."</p>
                        </div>
                    </li>
                </ul>
            </div>

  </form>
    </div>";
            $className += 1;
        }
    }

    echo $listServer


    ?>




<!--Routers-->
<div class="w3-container w3-center w3-light-grey" style="padding:60px 16px" id="Routers">
    <h2>Rotuers</h2>

    <?php
    $optionString = "";
    $routers = $db->getProductDisplay("RTR");
    $className = 1;


    if($products)
    {
        foreach($routers as $router)
        {



            $listRouter.="<div class=\".$className.\" style=\"margin-top:64px\">

            <form method=\"post\" action=\"$submitItems\">
            <div class=\"w3-col w3-left\".$className. style=\"width:300px; padding:0\">
                <ul class=\"w3-ul w3-white w3-hover-shadow\" style=\"height: 400px\">
                    <li style=\"padding: 0\"><img src=\"../resources/Products/".$router->getItemId()."\" width=\"100%\"></li>
                    <h5 id=timeslutId>".$router->getItemId()."</h5>
                </ul>
            </div>
            <div id=\"operating\" class=\"w3-col w3-right\" style=\"width:500px; padding:0\">
                <ul class=\"w3-ul w3-red\" style=\"height: 400px\">

                    <label for=\"noOp\">
                        <li class=\"w3-hover-shadow w3-light-grey\">
                            <input class=\"w3-check\" id=\"noOp\" type=\"checkbox\" style=\"float: right\">
                            <h5>No Operating System</h5>
                            <h4>£".$router->getItemPriceNoOs()."</h4>
                        </li>
                    </label>
                    <label for=\"noOp2\">
                        <li class=\"w3-hover-shadow w3-light-grey\">
                            <input class=\"w3-check\" id=\"noOp2\" type=\"checkbox\" style=\"float: right\">
                            <h5>Windows 10 Pro</h5>
                            <h4>£".$router->getItemPrice()."</h4>
                        </li>
                    </label>
                    <li class=\"w3-hover-shadow w3-light-grey w3-padding-24\" style=\"margin: 0\">
                    
                            <input hidden type=\"text\" name=\"itemId\" value=\"".$router->getItemId()."\">
                            <input hidden type=\"text\" name=\"itemName\" value=\"".$router->getItemName()."\">                            
                            <input hidden type=\"text\" name=\"itemDesc\" value=\"".$router->getItemDescription()."\">
                            <input hidden type=\"text\" name=\"itemPrice\" value=".$router->getItemPrice().">
                            
                             <input name=\"submit_Request\" class=\"w3-button w3-black w3-padding-large\" id=\"submitRequest\" onclick=\"\" type=\"submit\" value=\"ADD TO BASKET\">
                    </li>
                </ul>
            </div>
            <div class=\"w3-rest w3-center\" style=\"padding:0;\">
                <ul class=\"w3-ul w3-white w3-hover-shadow\" style=\"height: 400px\">
                    <li>
                        <div class=\"itemDesc\">
                            <h1>".$router->getItemName()."</h1>
                            <h4>".$router->getItemDescription()."</h4>
                            <p>".$router->getItemSpecification()."</p>
                        </div>
                    </li>
                </ul>
            </div>
</form>

    </div>";
            $className += 1;
        }
    }

    echo $listRouter


    ?>


<!--Switches-->
<div class="w3-container w3-center w3-light-grey" style="padding:60px 16px" id="Switches">
    <h2>Switches</h2>

    <?php
    $optionString = "";
    $switches = $db->getProductDisplay("SWI");
    $className = 1;


    if($switches)
    {
        foreach($switches as $switch)
        {



            $listSwitches.="<div class=\".$className.\" style=\"margin-top:64px\">

            <form method=\"post\" action=\"$submitItems\">
            <div class=\"w3-col w3-left\".$className. style=\"width:300px; padding:0\">
                <ul class=\"w3-ul w3-white w3-hover-shadow\" style=\"height: 400px\">
                    <li style=\"padding: 0\"><img src=\"../resources/Products/".$switch->getItemId()."\" width=\"100%\"></li>
                    <h5 id=timeslutId>".$switch->getItemId()."</h5>
                </ul>
            </div>
            <div id=\"operating\" class=\"w3-col w3-right\" style=\"width:500px; padding:0\">
                <ul class=\"w3-ul w3-red\" style=\"height: 400px\">

                    <label for=\"noOp\">
                        <li class=\"w3-hover-shadow w3-light-grey\">
                            <input class=\"w3-check\" id=\"noOp\" type=\"checkbox\" style=\"float: right\">
                            <h5>No Operating System</h5>
                            <h4>£".$switch->getItemPriceNoOs()."</h4>
                        </li>
                    </label>
                    <label for=\"noOp2\">
                        <li class=\"w3-hover-shadow w3-light-grey\">
                            <input class=\"w3-check\" id=\"noOp2\" type=\"checkbox\" style=\"float: right\">
                            <h5>Windows 10 Pro</h5>
                            <h4>£".$switch->getItemPrice()."</h4>
                        </li>
                    </label>
                    <li class=\"w3-hover-shadow w3-light-grey w3-padding-24\" style=\"margin: 0\">
                        
                            <input hidden type=\"text\" name=\"itemId\" value=\"".$switch->getItemId()."\">
                            <input hidden type=\"text\" name=\"itemName\" value=\"".$switch->getItemName()."\">                            
                            <input hidden type=\"text\" name=\"itemDesc\" value=\"".$switch->getItemDescription()."\">
                            <input hidden type=\"text\" name=\"itemPrice\" value=".$switch->getItemPrice().">
                            
                             <input name=\"submit_Request\" class=\"w3-button w3-black w3-padding-large\" id=\"submitRequest\" onclick=\"\" type=\"submit\" value=\"ADD TO BASKET\">
                    </li>
                </ul>
            </div>
            <div class=\"w3-rest w3-center\" style=\"padding:0;\">
                <ul class=\"w3-ul w3-white w3-hover-shadow\" style=\"height: 400px\">
                    <li>
                        <div class=\"itemDesc\">
                            <h1>".$switch->getItemName()."</h1>
                            <h4>".$switch->getItemDescription()."</h4>
                            <p>".$switch->getItemSpecification()."</p>
                        </div>
                    </li>
                </ul>
            </div>

</form>
    </div>";
            $className += 1;
        }
    }

    echo $listSwitches


    ?>

</div>
