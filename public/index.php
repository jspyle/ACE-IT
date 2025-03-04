<?php
include_once 'header.php';
include_once '../src/model/dbContext.php';
?>

<!DOCTYPE html>
<html>
<title>ACE-IT - Professional IT Solutions</title>




<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:30px 16px">
    <div class="w3-row-padding">
        <div class="w3-col m12">
            <h3>Welcome to Ace-IT</h3>
            <p>At Ace-IT we provide Curabitur et ipsum vitae sapien pretium eleifend. Aliquam et interdum nulla. Cras eget ipsum porta neque lobortis porta. Fusce iaculis, nibh vel tempus imperdiet, lacus leo blandit elit, nec suscipit velit diam in quam. Praesent dictum, neque et tempus commodo, dolor lectus lobortis nisi, at mattis velit tortor nec nisl. Morbi id ante ut elit placerat cursus. </p>
            <!-- About Section -->
            <div class="w3-container" style="padding:30px 16px" id="about">
                <h3 class="w3-center">What We Provide</h3>
                <div class="w3-row-padding w3-center" style="margin-top:64px">
                    <div class="w3-quarter">
                        <i class="fas fa-ethernet w3-margin-bottom w3-jumbo w3-center"></i>
                        <p class="w3-large">Networking</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="w3-quarter">
                        <i class="fas fa-server w3-margin-bottom w3-jumbo"></i>
                        <p class="w3-large">Servers</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="w3-quarter">
                        <i class="fas fa-desktop w3-margin-bottom w3-jumbo"></i>
                        <p class="w3-large">Workstations</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <div class="w3-quarter">
                        <i class="fas fa-shield-alt w3-margin-bottom w3-jumbo"></i>
                        <p class="w3-large">Security</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Pricing Section -->
<!--
<div class="w3-container w3-center w3-dark-grey" style="padding:60px 16px" id="pricing">
    <h2>Popular Products</h2>
    <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-third w3-section">
            <ul class="w3-ul w3-white w3-hover-shadow">
                <li class="w3-black w3-xlarge w3-padding-32">AceStaion Video Pro</li>
                <li><img src="../resources/pc1.webp" width="300px"></li>
                <li class="w3-padding-16"><b>3 TB</b> Storage</li>
                <li class="w3-padding-16"><b>i5 9400F 6 Core Processor</b> Processer</li>
                <li class="w3-padding-16"><b>64GB DDR4</b> Memory</li>
                <li class="w3-padding-16"><b>Quadro P1000</b> Graphics</li>
                <li class="w3-padding-16">
                    <h2 class="w3-wide">£1099</h2>
                    <span class="w3-opacity">EXCLUSIVE OFFER!</span>
                </li>
                <li class="w3-light-grey w3-padding-24">
                    <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                </li>
            </ul>
        </div>
        <div class="w3-third">
            <ul class="w3-ul w3-white w3-hover-shadow">
                <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
                <li class="w3-padding-16"><b>25GB</b> Storage</li>
                <li class="w3-padding-16"><b>25</b> Emails</li>
                <li class="w3-padding-16"><b>25</b> Domains</li>
                <li class="w3-padding-16"><b>Endless</b> Support</li>
                <li class="w3-padding-16">
                    <h2 class="w3-wide">$ 25</h2>
                    <span class="w3-opacity">per month</span>
                </li>
                <li class="w3-light-grey w3-padding-24">
                    <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                </li>
            </ul>
        </div>
        <div class="w3-third w3-section">
            <ul class="w3-ul w3-white w3-hover-shadow">
                <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
                <li class="w3-padding-16"><b>50GB</b> Storage</li>
                <li class="w3-padding-16"><b>50</b> Emails</li>
                <li class="w3-padding-16"><b>50</b> Domains</li>
                <li class="w3-padding-16"><b>Endless</b> Support</li>
                <li class="w3-padding-16">
                    <h2 class="w3-wide">$ 50</h2>
                    <span class="w3-opacity">per month</span>
                </li>
                <li class="w3-light-grey w3-padding-24">
                    <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                </li>
            </ul>
        </div>
    </div>
</div>
-->



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
</script>

</body>
</html>


