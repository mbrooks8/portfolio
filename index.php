<?php
include("./assets/template/home/topNav.php");
?>
<style>
    .hidden{
        max-height: 0px;
        overflow: hidden;
        opacity: 0;
        pointer-events: none;
    }
    .notHidden{

        max-height: 70px;
    }
    .animated
    {
        transition: all .4s ease;
    }

</style>

<div class="banner grey lighten-5" style="padding-top:64px;">
    <div class="valign content">
        <div class="container">

            <div class="row" style="width:100%">
                <div class="col s12 m12 l5">
                    <a href="#!" id="showResponse" style="display: none"class="modalToggle button" data-toggle="responseModal" >activate modal</a>
                    <div class="card" style="background-color:rgba(255,255,255,.9);">
                        <div class="cardContent white-text"  style="padding-bottom: 0px">
                            <div id="loginStatus" class="black-text center-align"></div>
                            <form  style="color:black;">
                                <input id="email" class="text" type="email" name="email">
                                <label for="name">E-mail</label>
                                <input id="password" class="text" type="password" name="password">
                                <label for="password">Password</label>

                                <div id="confirm" class=" animated hidden">
                                    <input id="passwordConfirm" style="margin-bottom:0px" class="text" type="password" name="confirmPassword">
                                    <label for="confirmPassword">Confirm Password</label>
                                </div>
                                <div id="confirm" class="hidden center-align" style="margin-bottom:15px">
                                    <span>already a user? <a onclick="showSignIn()">Sign In</a></span>
                                </div>
                                <div class="center-align notHidden" style="margin-bottom:15px">
                                    <span>not a user? <a onclick="showSignUp()">Sign Up</a></span>
                                </div>
                            </form>
                        </div>
                        <div class="cardAction">
                            <a></a>
                            <a class="hidden right" onclick="signUp()" href="#!">Log In</a>
                            <a class="notHidden right" onclick="signIn()" href="#!">Log In</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l7 hide-on-med-and-down">
                    <div class="centered valign">
                        <img class="lazyload" src="assets/img/EutB5iknHzn.png">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="promotion" class="lazyload">
    <div class="container" style="height:90vh;">
        <h1 id="promotionText" class="white-text animation-element slide-left">Intuitive, scalable property management software</h1>
    </div>

    <div class="row" id="things">
        <div class="col m4">
            <div class="row animation-element fade-in">
                <div class="col m4 l2 hide-on-small-only center" style="padding:0px;">
                    <i class="fa fa-cubes fa-3x white-text" style="padding-right:5px;" aria-hidden="true"></i>
                </div>
                <div class="col s12 l10">
                    <h4 class="white-text" style="margin-top:0px;">Save Time</h4>
                    <p class="white-text">Set up your business in less than 30 days and get things done faster from your laptop, iPad, or mobile phone.</p>
                    <br>
                </div>
            </div>

        </div>
        <div class="col m4">
            <div class="row animation-element fade-in">
                <div class="col m4 l2 hide-on-small-only center" style="padding:0px;">
                    <i class="fa fa-paper-plane-o fa-3x white-text" style="padding-right:5px;" aria-hidden="true"></i>
                </div>
                <div class="col s12 l10">
                    <h4 class="white-text" style="margin-top:0px;">Manage Growth</h4>
                    <p class="white-text">Find, win, and onboard new properties to your portfolio without investing more money to grow your staff.</p>
                    <br>
                </div>
            </div>

        </div>
        <div class="col m4">
            <div class="row animation-element fade-in">
                <div class="col m4 l2 hide-on-small-only center" style="padding:0px;">
                    <i class="fa fa-eye fa-3x white-text" style="padding-right:5px;" aria-hidden="true"></i>
                </div>
                <div class="col s12 l10">
                    <h4 class="white-text" style="margin-top:0px;">Maximize Profitiablity</h4>
                    <p class="white-text">12,000+ customers have streamlined business operations and outperform the competition.</p>
                    <br class="hide-on-small-only">
                </div>
            </div>

        </div>
    </div>
</div><!--end promotion-->


<div class="section">

    <div class="row" style="position:relative;">
        <div class="container large">
            <h3 style="text-align: left;" class="primary animation-element fade-in hide-on-large-only">Attract Modern Renters & Owners</h3>
            <div class="col m12 l6 animation-element slide-left" id="leftBackground">
            </div>

            <div class="col m12 l6 lazyload" id="rightBackground">
                <div id="rightText">
                    <br>
                    <br>
                    <h3 style="text-align: left;" class="primary animation-element fade-in hide-on-med-and-down">Attract Modern Renters & Owners</h3>
                    <h5 class="secondary animation-element fade-in">Modern service tools provide a better customer experience.</h5>
                    <p class="black-text">Text Messaging and bulk emailing allow you to communicate with renters and owners quickly. Self-service features like online rent payments and online maintenance requests appeal to the tech-savvy customer.</p>
                    <h5 class="secondary animation-element fade-in">Keep your owners happy with quicker turnaround times.</h5>
                    <p class="black-text">Pay owners faster and more securely with our eCheck functionality. Give owners instant access to online financial statements and documents via a convenient online owner portal.</p>

                    <br><!--end container-->
                </div>
            </div><!--end rightbackground--></div>
    </div>

</div><!--end section-->


<div class="section hide-on-small-only">
    <div class="row" style="position:relative;">
        <div class="col m6" id="aboutBackground">
            <h3 style="text-align: right;" class="primary animation-element slide-left">Increase Your Profitability</h3>
            <h5 class="secondary" style="text-align: right; padding-left:10%; padding-right:10px;">See an immediate return on your investment.</h5>
            <p style="text-align: right; padding-left:10%; padding-right:10px;">With everything being online, Hestia Property Manager allows you to fill vacancies faster and collect more rent; save money on costly things like paper, supplies, and storage; and avoid the costs associated with processing checks and mailing owner packets. You'll see immediate results and cost-savings using a cloud-based solution.</p>
        </div>

        <div class="col m6" id="usBackground">
            <div id="usText">
                <h3 style="text-align: left;" class="white-text animation-element slide-right">& Expand Your Portfolio</h3>
            </div>
        </div>
        <div class="bottomText center hide-on-med-and-down">



        </div>
    </div>

</div><!--end section-->

<div class="hide-on-med-and-up">
    <div class="container">
        <h1 class="primary">Increase Your Profitability & Expand Your Portfolio</h1>
        <h5 class="secondary">See an immediate return on your investment.</h5>
        <p>
            With everything being online, Hestia Property Manager allows you to fill vacancies faster and collect more rent; save money on costly things like paper, supplies, and storage; and avoid the costs associated with processing checks and mailing owner packets. You'll see immediate results and cost-savings using a cloud-based solution.
        </p>
        <br>
    </div><!--end container-->
</div>

<div id="filler" class="section lazyload">
    <div class="animation-element slide-right fast" id="greenThing"></div>
    <div id="greenThing1">
        <div class="container" id="greenThing2">
            <h4 class="white-text animation-element slide-right ">Drive Efficiency in Your Processes</h4>
            <h4 class="white-text animation-element slide-right ">(i.e. Save Time & Money)</h4>

            <p class="white-text">
                By implementing our easy-to-use solution, you can manage more properties and grow your business without adding more staff. A great training program gets you up to speed quickly on new features so you can spend more time on finding owners; and with customizable reports you can make informed decisions for any portfolio type.
            </p>
        </div><!--end container-->
    </div>
</div>









<br>
<br class="hide-on-small-only">
<br class="hide-on-small-only">
<div class="container">
    <div class="row">
        <div class="col s12 m7 l6">
            <h2 class="animation-element slide-left">One Price. Free Upgrades. Unlimited Potential.</h2>
            <div class="row">
                <div class="col s12">
                    <div class="row animation-element fade-in center">

                        <h4 class="" style="margin-top:0px;">The Plan</h4>
                        <i class="fa fa-paper-plane-o fa-3x " style="padding-right:5px;" aria-hidden="true"></i>
                        <p class="">20 Dollar Onboarding fee</p>
                        <p class="">200 Monthly Fee</p>
                        <br>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
        <br>
        <div class="col s12 m5 l6">
            <a href="#!" id="showResponse" style="display: none"class="modalToggle button" data-toggle="responseModal" >activate modal</a>
            <div class="card" style="background-color:rgba(255,255,255,.9);">
                <div class="cardContent white-text"  style="padding-bottom: 0px">
                    <div id="loginStatus" class="black-text center-align"></div>
                    <form  style="color:black;">
                        <input id="email2" class="text" type="email" name="email">
                        <label for="name">E-mail</label>
                        <input id="password2" class="text" type="password" name="password">
                        <label for="password">Password</label>

                        <div id="confirm" class=" animated hidden">
                            <input id="passwordConfirm2" style="margin-bottom:0px" class="text" type="password" name="confirmPassword">
                            <label for="confirmPassword">Confirm Password</label>
                        </div>
                        <div id="confirm" class="hidden center-align" style="margin-bottom:15px">
                            <span>already a user? <a onclick="showSignIn()">Sign In</a></span>
                        </div>
                        <div class="center-align notHidden" style="margin-bottom:15px">
                            <span>not a user? <a onclick="showSignUp()">Sign Up</a></span>
                        </div>
                    </form>
                </div>
                <div class="cardAction">
                    <a></a>
                    <a class="hidden right" onclick="signUp()" href="#!">Log In</a>
                    <a class="notHidden right" onclick="signIn()" href="#!">Log In</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("./assets/template/home/botNav.php");
?>




