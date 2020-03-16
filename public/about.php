<?php
?>



<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
    <h3 class="w3-center">THE TEAM</h3>
    <p class="w3-center w3-large">The ones who runs this company</p>
    <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="/w3images/team2.jpg" alt="John" style="width:100%">
                <div class="w3-container">
                    <h3>John Doe</h3>
                    <p class="w3-opacity">CEO & Founder</p>
                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
                <div class="w3-container">
                    <h3>Anja Doe</h3>
                    <p class="w3-opacity">Art Director</p>
                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
                <div class="w3-container">
                    <h3>Mike Ross</h3>
                    <p class="w3-opacity">Web Designer</p>
                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
                <div class="w3-container">
                    <h3>Dan Star</h3>
                    <p class="w3-opacity">Designer</p>
                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
    <div class="w3-quarter">
        <span class="w3-xxlarge">14+</span>
        <br>Partners
    </div>
    <div class="w3-quarter">
        <span class="w3-xxlarge">55+</span>
        <br>Projects Done
    </div>
    <div class="w3-quarter">
        <span class="w3-xxlarge">89+</span>
        <br>Happy Clients
    </div>
    <div class="w3-quarter">
        <span class="w3-xxlarge">150+</span>
        <br>Meetings
    </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
    <h3 class="w3-center">OUR WORK</h3>
    <p class="w3-center w3-large">What we've done for people</p>

    <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-col l3 m6">
            <img src="/w3images/tech_mic.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
        </div>
        <div class="w3-col l3 m6">
            <img src="/w3images/tech_phone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
        </div>
        <div class="w3-col l3 m6">
            <img src="/w3images/tech_drone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
        </div>
        <div class="w3-col l3 m6">
            <img src="/w3images/tech_sound.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
        </div>
    </div>

    <div class="w3-row-padding w3-section">
        <div class="w3-col l3 m6">
            <img src="/w3images/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
        </div>
        <div class="w3-col l3 m6">
            <img src="/w3images/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
        </div>
        <div class="w3-col l3 m6">
            <img src="/w3images/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
        </div>
        <div class="w3-col l3 m6">
            <img src="/w3images/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
        </div>
    </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
    <div class="w3-row-padding">
        <div class="w3-col m6">
            <h3>Our Skills.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                tempor incididunt ut labore et dolore.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-col m6">
            <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
            <div class="w3-grey">
                <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
            </div>
            <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
            <div class="w3-grey">
                <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
            </div>
            <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
            <div class="w3-grey">
                <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
            </div>
        </div>
    </div>
</div>
