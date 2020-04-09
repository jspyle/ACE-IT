<?php
include_once 'header.php';
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
    <div class="" style="margin-top:64px">
            <div class="w3-col w3-left" style="width:300px; padding:0">
                <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                    <li style="padding: 0"><img src="../resources/Workstations/WS-1.png" width="100%"></li>
                </ul>
            </div>
            <div id="operating" class="w3-col w3-right" style="width:500px; padding:0">
                <ul class="w3-ul w3-red" style="height: 400px">

                    <label for="noOp">
                        <li class="w3-hover-shadow w3-light-grey">
                            <input class="w3-check" id="noOp" type="checkbox" style="float: right">
                            <h5>No Operating System</h5>
                            <h4>£699.99</h4>
                        </li>
                    </label>
                    <label for="noOp2">
                        <li class="w3-hover-shadow w3-light-grey">
                            <input class="w3-check" id="noOp2" type="checkbox" style="float: right">
                            <h5>Windows 10 Pro</h5>
                            <h4>£839.99</h4>
                        </li>
                    </label>
                    <li class="w3-hover-shadow w3-light-grey w3-padding-24" style="margin: 0">
                        <button onclick="window.alert('Item added to basket')" class="w3-button w3-black w3-padding-large">ADD TO BASKET</button>
                    </li>
                </ul>
            </div>
            <div class="w3-rest w3-center" style="padding:0;">
                <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                    <li>
                        <div class="itemDesc">
                            <h1>ACE-Station v1</h1>
                            <h4>This is our tier 1 workstation it is a great all around but has enough power to take on larger tasks too, while not built for a specific task it is ideal for small to medium sized businesses.</h4>
                            <p>•	9th Generation Intel i5 9400F 2.9GHz Six Core Processor <br>
                                •	8GB DDR4 2400MHz Memory <br>
                                •	240GB NVME M.2 Solid State Drive <br>
                                •	AMD Radeon Pro WX 3100 Graphics Card <br>
                                •	ACE-CASE Micro <br>
                                •	Cooler master MWA White PSU 300W <br>
                                •	Gigabyte H310M S2H H310 Motherboard <br>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>


    </div>

    <div class="" style="margin-top:64px">
        <div class="w3-col w3-left" style="width:300px; padding:0">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li style="padding: 0"><img src="../resources/Workstations/WS-2.png" width="100%"></li>
            </ul>
        </div>
        <div id="operating" class="w3-col w3-right" style="width:500px; padding:0">
            <ul class="w3-ul w3-red" style="height: 400px">

                <label for="noOp">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp" type="checkbox" style="float: right">
                        <h5>No Operating System</h5>
                        <h4>£699.99</h4>
                    </li>
                </label>
                <label for="noOp2">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp2" type="checkbox" style="float: right">
                        <h5>Windows 10 Pro</h5>
                        <h4>£839.99</h4>
                    </li>
                </label>
                <li class="w3-hover-shadow w3-light-grey w3-padding-24" style="margin: 0">
                    <button onclick="window.alert('Item added to basket')" class="w3-button w3-black w3-padding-large">ADD TO BASKET</button>
                </li>
            </ul>
        </div>
        <div class="w3-rest w3-center" style="padding:0;">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li>
                    <div class="itemDesc">
                        <h1>ACE-Station v2</h1>
                        <h4>This is our tier 1 workstation it is a great all around but has enough power to take on larger tasks too, while not built for a specific task it is ideal for small to medium sized businesses.</h4>
                        <p>•	9th Generation Intel i5 9400F 2.9GHz Six Core Processor <br>
                            •	8GB DDR4 2400MHz Memory <br>
                            •	240GB NVME M.2 Solid State Drive <br>
                            •	AMD Radeon Pro WX 3100 Graphics Card <br>
                            •	ACE-CASE Micro <br>
                            •	Cooler master MWA White PSU 300W <br>
                            •	Gigabyte H310M S2H H310 Motherboard <br>
                        </p>
                    </div>
                </li>
            </ul>
        </div>


    </div>

    <div class="" style="margin-top:64px">
        <div class="w3-col w3-left" style="width:300px; padding:0">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li style="padding: 0"><img src="../resources/Workstations/WS-3.jpg" width="100%"></li>
            </ul>
        </div>
        <div id="operating" class="w3-col w3-right" style="width:500px; padding:0">
            <ul class="w3-ul w3-red" style="height: 400px">

                <label for="noOp">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp" type="checkbox" style="float: right">
                        <h5>No Operating System</h5>
                        <h4>£699.99</h4>
                    </li>
                </label>
                <label for="noOp2">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp2" type="checkbox" style="float: right">
                        <h5>Windows 10 Pro</h5>
                        <h4>£839.99</h4>
                    </li>
                </label>
                <li class="w3-hover-shadow w3-light-grey w3-padding-24" style="margin: 0">
                    <button onclick="window.alert('Item added to basket')" class="w3-button w3-black w3-padding-large">ADD TO BASKET</button>
                </li>
            </ul>
        </div>
        <div class="w3-rest w3-center" style="padding:0;">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li>
                    <div class="itemDesc">
                        <h1>ACE-Station v3</h1>
                        <h4>This is our tier 1 workstation it is a great all around but has enough power to take on larger tasks too, while not built for a specific task it is ideal for small to medium sized businesses.</h4>
                        <p>•	9th Generation Intel i5 9400F 2.9GHz Six Core Processor <br>
                            •	8GB DDR4 2400MHz Memory <br>
                            •	240GB NVME M.2 Solid State Drive <br>
                            •	AMD Radeon Pro WX 3100 Graphics Card <br>
                            •	ACE-CASE Micro <br>
                            •	Cooler master MWA White PSU 300W <br>
                            •	Gigabyte H310M S2H H310 Motherboard <br>
                        </p>
                    </div>
                </li>
            </ul>
        </div>


    </div>

</div>

<!--Servers-->
<div class="w3-container w3-center w3-light-grey" style="padding:60px 16px" id="Servers">
    <h2>Servers</h2>
    <div class="" style="margin-top:64px">
        <div class="w3-col w3-left" style="width:300px; padding:0">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li style="padding: 0"><img src="../resources/Servers/SERV-1.png" width="100%"></li>
            </ul>
        </div>
        <div id="operating" class="w3-col w3-right" style="width:500px; padding:0">
            <ul class="w3-ul w3-red" style="height: 400px">

                <label for="noOp">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp" type="checkbox" style="float: right">
                        <h5>No Operating System</h5>
                        <h4>£699.99</h4>
                    </li>
                </label>
                <label for="noOp2">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp2" type="checkbox" style="float: right">
                        <h5>Windows Server 2019</h5>
                        <h4>£839.99</h4>
                    </li>
                </label>
                <li class="w3-hover-shadow w3-light-grey w3-padding-24" style="margin: 0">
                    <button class="w3-button w3-black w3-padding-large">ADD TO BASKET</button>
                </li>
            </ul>
        </div>
        <div class="w3-rest w3-center" style="padding:0;">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li>
                    <div class="itemDesc">
                        <h1>ACE-Serv V1</h1>
                        <h4>This is our tier 1 Server, it’s a great start for smaller businesses not requiring large computing power but will be great for smaller offices, providing vital services or network attached storage</h4>
                        <p>
                            •	Intel Xeon Bronze 3204 Processor Six Core 1.90GHz Processor<br>
                            •	16GB DDR4 2666MHz ECC Registered DIMM<br>
                            •   2x WD RED 1TB HDD<br>
                            •	ACE-CASE TowerServ<br>
                            •	SuperMicro X11SPL-F Motherboard<br>
                            •	Supermicro 3647 Cooler<br>

                        </p>
                    </div>
                </li>
            </ul>
        </div>


    </div>

    <div class="" style="margin-top:64px">
        <div class="w3-col w3-left" style="width:300px; padding:0">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li style="padding: 0"><img src="../resources/Servers/SERV-2.png" width="100%"></li>
            </ul>
        </div>
        <div id="operating" class="w3-col w3-right" style="width:500px; padding:0">
            <ul class="w3-ul w3-red" style="height: 400px">

                <label for="noOp">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp" type="checkbox" style="float: right">
                        <h5>No Operating System</h5>
                        <h4>£699.99</h4>
                    </li>
                </label>
                <label for="noOp2">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp2" type="checkbox" style="float: right">
                        <h5>Windows Server 2019</h5>
                        <h4>£839.99</h4>
                    </li>
                </label>
                <li class="w3-hover-shadow w3-light-grey w3-padding-24" style="margin: 0">
                    <button class="w3-button w3-black w3-padding-large">ADD TO BASKET</button>
                </li>
            </ul>
        </div>
        <div class="w3-rest w3-center" style="padding:0;">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li>
                    <div class="itemDesc">
                        <h1>ACE-Serv V2</h1>
                        <h4>This is our tier 2 Server, it’s a great start for smaller businesses not requiring large computing power but will be great for smaller offices, providing vital services or network attached storage</h4>
                        <p>
                            •	Intel Xeon Bronze 3204 Processor Six Core 1.90GHz Processor<br>
                            •	16GB DDR4 2666MHz ECC Registered DIMM<br>
                            •   2x WD RED 1TB HDD<br>
                            •	ACE-CASE TowerServ<br>
                            •	SuperMicro X11SPL-F Motherboard<br>
                            •	Supermicro 3647 Cooler<br>

                        </p>
                    </div>
                </li>
            </ul>
        </div>


    </div>

    <div class="" style="margin-top:64px">
        <div class="w3-col w3-left" style="width:300px; padding:0">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li style="padding: 0"><img src="../resources/Servers/SERV-STORE.png" width="100%"></li>
            </ul>
        </div>
        <div id="operating" class="w3-col w3-right" style="width:500px; padding:0">
            <ul class="w3-ul w3-red" style="height: 400px">

                <label for="noOp">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp" type="checkbox" style="float: right">
                        <h5>No Operating System</h5>
                        <h4>£699.99</h4>
                    </li>
                </label>
                <label for="noOp2">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp2" type="checkbox" style="float: right">
                        <h5>Windows Server 2019</h5>
                        <h4>£839.99</h4>
                    </li>
                </label>
                <li class="w3-hover-shadow w3-light-grey w3-padding-24" style="margin: 0">
                    <button class="w3-button w3-black w3-padding-large">ADD TO BASKET</button>
                </li>
            </ul>
        </div>
        <div class="w3-rest w3-center" style="padding:0;">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li>
                    <div class="itemDesc">
                        <h1>ACE-Serv Store</h1>
                        <h4>This is our storage Server, it’s a great start for smaller businesses not requiring large computing power but will be great for smaller offices, providing vital services or network attached storage</h4>
                        <p>
                            •	Intel Xeon Bronze 3204 Processor Six Core 1.90GHz Processor<br>
                            •	16GB DDR4 2666MHz ECC Registered DIMM<br>
                            •   2x WD RED 1TB HDD<br>
                            •	ACE-CASE TowerServ<br>
                            •	SuperMicro X11SPL-F Motherboard<br>
                            •	Supermicro 3647 Cooler<br>

                        </p>
                    </div>
                </li>
            </ul>
        </div>


    </div>

</div>

<!--Routers-->
<div class="w3-container w3-center w3-light-grey" style="padding:60px 16px" id="Routers">
    <h2>Rotuers</h2>
    <div class="" style="margin-top:64px">
        <div class="w3-col w3-left" style="width:300px; padding:0">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li style="padding: 0"><img src="../resources/Routers/ROUTER-2.png" width="100%"></li>
            </ul>
        </div>
        <div id="operating" class="w3-col w3-right" style="width:500px; padding:0">
            <ul class="w3-ul w3-red" style="height: 400px">

                <label for="noOp">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp" type="checkbox" style="float: right">
                        <h5>No Operating System</h5>
                        <h4>£699.99</h4>
                    </li>
                </label>
                <label for="noOp2">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp2" type="checkbox" style="float: right">
                        <h5>Windows 10 Pro</h5>
                        <h4>£839.99</h4>
                    </li>
                </label>
                <li class="w3-hover-shadow w3-light-grey w3-padding-24" style="margin: 0">
                    <button class="w3-button w3-black w3-padding-large">ADD TO BASKET</button>
                </li>
            </ul>
        </div>
        <div class="w3-rest w3-center" style="padding:0;">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li>
                    <div class="itemDesc">
                        <h1>Router</h1>
                        <h4>This is our tier 1 workstation it is a great all around but has enough power to take on larger tasks too, while not built for a specific task it is ideal for small to medium sized businesses.</h4>
                        <p>•	9th Generation Intel i5 9400F 2.9GHz Six Core Processor <br>
                            •	8GB DDR4 2400MHz Memory <br>
                            •	240GB NVME M.2 Solid State Drive <br>
                            •	AMD Radeon Pro WX 3100 Graphics Card <br>
                            •	ACE-CASE Micro <br>
                            •	Cooler master MWA White PSU 300W <br>
                            •	Gigabyte H310M S2H H310 Motherboard <br>
                        </p>
                    </div>
                </li>
            </ul>
        </div>


    </div>
</div>

<!--Switches-->
<div class="w3-container w3-center w3-light-grey" style="padding:60px 16px" id="Switches">
    <h2>Switches</h2>
    <div class="" style="margin-top:64px">
        <div class="w3-col w3-left" style="width:300px; padding:0">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li style="padding: 0"><img src="../resources/Switches/SW-2.png" width="100%"></li>
            </ul>
        </div>
        <div id="operating" class="w3-col w3-right" style="width:500px; padding:0">
            <ul class="w3-ul w3-red" style="height: 400px">

                <label for="noOp">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp" type="checkbox" style="float: right">
                        <h5>No Operating System</h5>
                        <h4>£699.99</h4>
                    </li>
                </label>
                <label for="noOp2">
                    <li class="w3-hover-shadow w3-light-grey">
                        <input class="w3-check" id="noOp2" type="checkbox" style="float: right">
                        <h5>Windows 10 Pro</h5>
                        <h4>£839.99</h4>
                    </li>
                </label>
                <li class="w3-hover-shadow w3-light-grey w3-padding-24" style="margin: 0">
                    <button class="w3-button w3-black w3-padding-large">ADD TO BASKET</button>
                </li>
            </ul>
        </div>
        <div class="w3-rest w3-center" style="padding:0;">
            <ul class="w3-ul w3-white w3-hover-shadow" style="height: 400px">
                <li>
                    <div class="itemDesc">
                        <h1>Switch</h1>
                        <h4>This is our tier 1 workstation it is a great all around but has enough power to take on larger tasks too, while not built for a specific task it is ideal for small to medium sized businesses.</h4>
                        <p>•	9th Generation Intel i5 9400F 2.9GHz Six Core Processor <br>
                            •	8GB DDR4 2400MHz Memory <br>
                            •	240GB NVME M.2 Solid State Drive <br>
                            •	AMD Radeon Pro WX 3100 Graphics Card <br>
                            •	ACE-CASE Micro <br>
                            •	Cooler master MWA White PSU 300W <br>
                            •	Gigabyte H310M S2H H310 Motherboard <br>
                        </p>
                    </div>
                </li>
            </ul>
        </div>



    </div>
</div>
