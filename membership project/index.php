<html>

<head>
    <title>
        Phantom Membership
    </title>
    <link rel=" shortcut icon" type="image/png" href="icon.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css">
    <style>
        * {
            box-sizing: border-box;
        }

        h1.a {

            text-align: left;
            font-family: 'Raleway', sans-serif;
            font-size: 50px;
            white-space: nowrap;
        }

        h1.b {

            text-align: left;
            font-family: 'Raleway', sans-serif;
            font-size: 37px;
            white-space: nowrap;
        }

        @media only screen and (max-device-width: 1024px) {
            .a {
                display: none;
            }
        }

        .about {
            padding: 110px 20px 0px 20px;

        }

        @media only screen and (min-width: 600px) {
            .b {
                display: none;
            }
        }

        @media only screen and ( min-width:1024px) {
            .atext {
                padding: 0px 60px;
            }
        }

        .atext {
            text-align: center;

        }

        .head {
            padding: 240px 0px 120px 55px;
        }


        .w3-wide {
            letter-spacing: 5px;
        }

        ul {
            font-size: 20px;

        }

        /*parallax effect*/

        .bgimg-1 {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.9;
        }

        /* First image (Logo. Full height) */

        .bgimg-1 {
            background-image: url('4.jpg');
            min-height: 100%;
        }

        /* FORM STYLES*/

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }


        input[type=submit] {
            background-color:rgb(16, 207, 207);
            color:black;
            padding: 12px 20px;
            border: 1PX solid rgba(130, 228, 228, 0.452);
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color:rgb(120, 219, 219);
        }

        .container {
            border-radius: 5px;

            padding: 60px 20px 0px 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */

        @media screen and (max-width: 600px) {
            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
    <div class="w3-top ">
        <div class="w3-bar w3-large " id="myNavbar">
            <a class="w3-bar-item w3-hide-medium  w3-button w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()"
                title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>

            <a href="index.html/#home">
                <img src="10.png" class="w3-image w3-bar-item w3-left w3-padding-small">
            </a>
            <a class="w3-bar-item w3-button w3-hide-small w3-large w3-right " href="#contact">
                <i class="fa fa-phone"></i> CONTACT US</a>
            <a class="w3-bar-item w3-button w3-hide-small w3-large w3-right " href="index.html/#services">
                <i class="fa fa-briefcase"></i> SERVICES</a>
            <a class="w3-bar-item w3-button w3-hide-small w3-large w3-right " href="index.html/#portfolio">
                <i class="fa fa-th"></i> PORTFOLIO</a>
            <a class="w3-bar-item w3-button w3-hide-small w3-large w3-right " href="#about">
                <i class="fa fa-user"></i> ABOUT</a>

        </div>

        <!--mobile nav bar start -->
        <div id="navDemo" style="border:2px" class="w3-bar-block w3-card w3-leftbar w3-border-cyan w3-large w3-white w3-hide w3-hide-large w3-hide-medium">

            <a class="w3-bar-item w3-button" href="#about" onclick="toggleFunction()">
                <i class="fa fa-user"></i> ABOUT</a>
            <a class="w3-bar-item w3-button" href="#portfolio" onclick="toggleFunction()">
                <i class="fa fa-th"></i> PORTFOLIO</a>
            <a class="w3-bar-item w3-button" href="#services" onclick="toggleFunction()">
                <i class="fa fa-briefcase"></i> SERVICES</a>
            <a class="w3-bar-item w3-button" href="#contact" onclick="toggleFunction()">
                <i class="fa fa-phone"></i> CONTACT US</a>
        </div>
    </div>
    <!--the title section starts -->
    <div class="w3-display-container bgimg-1 w3-row-padding head ">
        <div class="w3-half">
            <!--desktop header-->
            <h1 class="w3-wide a">
                <b> Phantom
                    <br> Membership </b>
            </h1>
            <h3 class="a">Together Let's Be a Family
                <i class="fa fa-users w3-text-black"></i>
            </h3>
            <!--mobile header-->
            <h1 class="w3-wide  b">
                <b> Phantom
                    <br> Membership </b>
            </h1>
            <h4 class="w3-hide-large w3-hide-medium">
                Together Let's Be a Family
                <i class="fa fa-users w3-text-cyan"></i>
            </h4>
        </div>
    </div>

    <!--the about section starts here-->
    <div class="about w3-container w3-row-padding">
        <div class="w3-half">

            <h3 class="w3-center w3-padding-24">
                <i class="fa fa-users w3-xxlarge w3-text-cyan"></i>
                <br> ABOUT PHANTOM MEMBERSHIP
            </h3>
            <div class="atext  w3-panel w3-leftbar w3-border-yellow w3-pale-yellow w3-round" style=" margin:left;">


                <p>
                    <i class="fa fa-hand-o-right w3-text-red"></i> "Phantom Membership" Is a loyalty programme.</p>

                <p>
                    <i class="fa fa-hand-o-right w3-text-orange"></i> Sign up to get news about latest offers and services.</p>

                <p>
                    <i class=" fa fa-hand-o-right w3-text-blue"></i> The Membership is totally free for all customers.</p>

                <p>
                    <i class="fa fa-hand-o-right w3-text-pink"></i> Members are privilaged on availing any service.</p>


            </div>

        </div>

        <div class="w3-half">

            <h3 class="w3-center w3-padding-24">
                <i class="fa fa-meh-o w3-xxlarge w3-text-cyan"></i>
                <br> WHY PHANTOM ?</h3>
            <div class="atext w3-panel w3-rightbar w3-border-cyan w3-theme-l4 w3-round" style="margin:left;">
                <p>
                    <i class="fa fa-hand-o-right w3-text-red"></i> We have the largest user base in our competition.</p>

                <p>
                    <i class="fa fa-hand-o-right w3-text-orange"></i> QS
                    <sup>TM</sup> (Quality Support) at your place. </p>

                <p>
                    <i class=" fa fa-hand-o-right w3-text-blue"></i> More than HUNDREAD software solutions delivered.
                </p>

                <p>
                    <i class="fa fa-hand-o-right w3-text-pink"></i> Featured in "
                    <em>ACCESS
                        <sup> TM</sup>
                    </em> " Top 10 emerging Star-Ups. </p>

            </div>
        </div>
    </div>

    <div style="padding: 60px;">
        <h3 style="text-align: center;" class="w3-padding-16">Register To The Membership Below</h3>

        <div class="container w3-theme-l5">
            <form action="/action_page.php">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Full Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="name" placeholder="Your name..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="email" name="email" placeholder="Your Email">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="number">Mobile No</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="number" name="number" placeholder="Your Mobile No">
                    </div>
                </div>


                <div class="row">
                    <div class="col-25">
                        <label for="subject">Subject</label>
                    </div>
                    <div class="col-75">
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <br>
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>

    </div>

    <div class="w3-display-container w3-container " style="padding: 80px 16px" id="contact">
        <h2 class="w3-center">CONTACT</h2>
        <h5 class="w3-center">Get In Touch With Us</h5>
        <div class="w3-row-padding w3-theme-l4 ">
            <div class="w3-quarter w3-center" style="padding:20px">
                <div class="w3-half w3-padding-large ">
                    <img src="10.png" alt="logo" class="w3-hover-opacity " title="ps">
                </div>

                <section class="w3-half">

                    <a class="w3-hover-text-cyan w3-large" style="text-decoration:none;" href="#about">About</a>
                    <br>
                    <a class="w3-hover-text-cyan w3-large" style="text-decoration:none;" href="#services">Services</a>
                    <br>
                    <a class="w3-hover-text-cyan w3-large" style="text-decoration:none;" href="#portfolio">Portfolio</a>

                </section>
            </div>

            <section class="w3-quarter" style="padding:20px">
                <div class="w3-large w3-hover-text-cyan">
                    <i class="fa fa-envelope"></i> samtestingbeta@gmail.com</div>
                <div class="w3-large w3-hover-text-cyan">
                    <i class="fa fa-phone"></i>+91-8917300318</div>

                <div class=" w3-xlarge" style="display: inline;">
                    <a href="https://www.facebook.com/sahoo.sambit.7" target="_blank" class="w3-bar-item  w3-hover-text-cyan">
                        <i class="fa fa-facebook-official "></i>
                    </a>
                    <a href="https://www.instagram.com/soul_sam_480/" target="_blank" class="w3-bar-item w3-padding-small  w3-hover-text-cyan ">
                        <i class="fa fa-instagram "></i>
                    </a>
                    <a href="https://twitter.com/blazerhcsam" target="_blank" class="w3-bar-item  w3-hover-text-cyan w3-hover-opacity ">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/sambit-sahoo-5b75b3163/" target="_blank" class="w3-bar-item  w3-padding-small w3-hover-text-cyan ">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/soulsam480" target="_blank" class="w3-bar-item   w3-hover-text-cyan ">
                        <i class="fa fa-github "></i>
                    </a>
                </div>
            </section>

            <div class="w3-quarter" style="padding:20px">
                <div class="w3-large">
                    <b class="w3-xlarge">Phantom Solutions</b>
                    <br> Bhubaneswar
                    <br> Odisha
                    <br> Pin-759146
                </div>
            </div>
            <div class="w3-quarter" style="padding:20px">
                <div class="w3-center w3-large">
                    <i class="fa fa-map-marker  w3-xlarge "></i> Find Me At</div>
                <div id="map" class="w3-round-large " style="width:100%;height:250px;"></div>
            </div>
        </div>
        <p class="w3-center w3-text-grey w3-text-opacity">Copyright &copy Phantom Solns. 2018
            <br/> ~Handcrafted In India~</p>
    </div>


    <script>
        //nav bar on small devices
        function toggleFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        // Change style of navbar on scroll
        window.onscroll = function () {
            myFunction()
        };

        function myFunction() {
            var navbar = document.getElementById("myNavbar");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                navbar.className = "w3-bar" + " w3-card" + " w3-animate-zoom" + " w3-white " +
                    "w3-rightbar w3-leftbar w3-border-cyan";
            } else {
                navbar.className = navbar.className.replace(" w3-card w3-animate-zoom w3-white ", "");
            }
        }
    </script>
</body>


</html>