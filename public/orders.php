<?php
include_once 'header.php';
?>

<title>Your Orders</title>

<div class="w3-container w3-center w3-light-grey">
    <div class="w3-two-third w3-center w3-white" style="width:60%; height: 100px; margin: auto; border-style: solid">
        <div class="w3-col w3-quarter">
            <h5>Order Placed: </h5>
            <p>23rd March 2020</p>
        </div>
        <div class="w3-col w3-quarter">
            <h5>Total</h5>
            <p>£839.99</p>
        </div>
        <div class="w3-col w3-quarter">
            <h5>Order ID</h5>
            <p>AC454564564564856</p>
        </div>
        <div id="order1" class="w3-white" style="margin-top:64px">
            <div id="item1" class="w3-white w3-left w3-col w3-twothird">
                <div class="w3-left w3-col w3-third">
                    <img src="../resources/Workstations/WS-1.png" width=200px>
                </div>
                <div class="w3-right w3-col w3-twothird">
                    <h1>ACE-Station v1</h1>
                    <p>Item Ready for collection in 3-5 Working days</p>
                </div>
            </div>
            <div id="options" class="w3-white w3-left w3-col w3-third">
                <ul class="w3-ul w3-red">

                    <label for="noOp">
                        <li class="w3-light-grey">
                            <button class="w3-button w3-black w3-padding-large">Cancel Order</button>
                        </li>
                    </label>
                    <label for="noOp2">
                        <li class="w3-light-grey">
                            <button class="w3-button w3-black w3-padding-large">Amend Order</button>
                        </li>
                    </label>
                </ul>
            </div>
        </div>
    </div>



</div>