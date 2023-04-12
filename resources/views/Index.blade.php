<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>portfolio</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/font/flaticon.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    {{-- Jquery --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    {{-- Axios --}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<!-- =================Body Started==================== -->

<body>
    <!-- =================================********================================= -->
    <div id="show_menuitems" class="my-menu">
        <div class="menu-box">
            <span>
                <i onclick="hide_menu()" class="flaticon-cancel"></i>
            </span>
            <ul>
                <li><a onclick="hide_menu()" href="#home">Home</a></li>
                <li>
                    <a onclick="hide_menu()" href="#about">Specialization</a>
                </li>
                <li><a onclick="hide_menu()" href="#resume">Resume</a></li>
                <li>
                    <a onclick="hide_menu()" href="#portfolio">Projects</a>
                </li>
                <li>
                    <a onclick="hide_menu()" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- =================================********================================= -->
    <section id="home">
        <header>
            <div class="container">
                <div class="main-nav">
                    <div class="logo">
                        <h2>Prasetyo Putra P.</h2>
                    </div>
                    <div class="social-media">
                        <ul>
                            <li>
                                <a href="https://www.linkedin.com/in/prasetyoputrapratama/"><i
                                        class="flaticon-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div onclick="show_menu()" class="my-toogle">
                        <span><i class="flaticon-menu"></i></span>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="my-wrapper">
                    <div class="inter">
                        <h6>Introduce</h6>
                    </div>
                    <div class="welcome-box">
                        <h3>Welcome</h3>
                    </div>
                    <div class="name-box">
                        <h1>Hello my name is <span>Prasetyo.</span></h1>
                    </div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================================********================================= -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="wrapper">
                    <div class="left-wrapper">
                        <div class="content">
                            <div class="title">
                                <h4>About me</h4>
                                <h2>
                                    MY MISSION IS
                                    <span>MAKE SISTEM</span> THE BEST
                                    EVER
                                </h2>
                                <p>
                                    I am student from Malang State Islamic University with a major in Informatics
                                    Engineering class of 2021, is currently studying Back End Devloper in PHP, Laravel
                                    and Java.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="right-wrapper">
                        <div class="content _yt_er_ol" id="skills-item">
                            {{-- <div class="_re_uy_iu">
                                <div class="_ol_ew_xs">
                                    <span>Laravel</span>
                                    <span>90%</span>
                                </div>
                                <div class="progress">
                                    <div style="width: 90%" class="progress-bar my-bars" role="progressbar"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="inter">
                        <h6>WHAT I DO</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================================********================================= -->
    <section id="resume">
        <div class="container">
            <div class="row">
                <div class="my-wrapper">
                    <div class="left-wrapper">
                        <div class="content">
                            <div class="head">
                                <h2>Education</h2>
                            </div>
                            <div class="list-inner">
                                <ol id="education-items">
                                    {{-- <li>
                                        <h4>Bachelor Engenering Informatics</h4>
                                        <h6>University Islamic of Malang State</h6>
                                        <span>2021 continue
                                        </span>
                                        <p>
                                            Every year, the number of people
                                            using the Internet is increased
                                            to twice that of the previous
                                            year. Also, the increase in
                                            various internet-enabled devices
                                            like Mobile, Tablet, PC, and TV
                                            have turned over a new era in
                                            the progress of Web development.
                                        </p>
                                    </li> --}}
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="right-wrapper">
                        <div class="content">
                            <div class="head">
                                <h2>Experience</h2>
                            </div>
                            <div class="list-inner">
                                <ol id="experience-items">
                                    {{-- <li>
                                        <h4>Inagata</h4>
                                        <h6>Backend Developer | Internship</h6>
                                        <span>16 January 2023 to 16 April 2023</span>
                                        <p>
                                            I use Laravel and mysql technologi for do my jobs in here
                                        </p>
                                    </li> --}}
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="inter">
                        <h6>RESUME</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================================********================================= -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="my-wrapper">
                    <div class="wrapper-box">
                        <div class="content">
                            {{-- <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="free-template" data-toggle="tab" href="#free"
                                        role="tab" aria-controls="free" aria-selected="true">Web Designing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="premium-template" data-toggle="tab" href="#premium"
                                        role="tab" aria-controls="premium" aria-selected="true">Graphic
                                        Designing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="others-template" data-toggle="tab" href="#others"
                                        role="tab" aria-controls="others" aria-selected="true">Others</a>
                                </li>
                            </ul> --}}
                            <div class="tab-content" id="myTabContent">
                                <!-- ------------***----------- -->
                                <div class="tab-pane fade show active" id="free" role="tabpanel"
                                    aria-labelledby="free-template">
                                    <div class="content-list">
                                        <ol id="projects-item">
                                            {{-- <li>
                                                <div class="head"
                                                    style="
                                                background-color: rgba(241, 12, 12, 0.8);
                                                color: white;
                                                text-align: center;
                                                border-radius: 5px;
                                                ">
                                                    <h2 style="font-size: 15px; padding: 5px;">Backend | name_project
                                                    </h2>
                                                </div>
                                                <div class="_ok-vd_zs">
                                                    <figure style="height: 250px;">
                                                        <img src="assets/images/abt/coba.jpg" />
                                                        <div class="inner-content">
                                                            <a href="#">Live
                                                                Preview</a>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </li> --}}
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inter">
                        <h6>Portfolio</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================================********================================= -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>Get in Touch</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input class="form-control" name="121" type="text" required="name"
                                        placeholder="Enter Your Name" id="name-contact" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input class="form-control" name="122" type="text" required="email"
                                        placeholder="Enter Your Email" id="email-contact" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="" cals="40" rows="10" name="124" type="text" placeholder="Message"
                                        id="message-contact"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p style="color: white;" id="success-message"></p>
                    <div class="col-12">
                        <button onclick="sendEmail()" id="button-send"
                            style="text-decoration: none; border: none; background-color: red; color: white;
                            padding: 2px;">Send</button>
                    </div>
                    <div class="inter">
                        <h6>Contact</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================================********================================= -->

    <!-- =================================********================================= -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="backend/index.js"></script>
</body>
<!-- =================Body End==================== -->

</html>
