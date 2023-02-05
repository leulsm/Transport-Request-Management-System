<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/stylerequest.css">
        <title>Request</title>
        <script src="https://kit.fontawesome.com/8c241b4962.js" crossorigin="anonymous"></script>
        <style>
            *, ::after, ::before {
                box-sizing: border-box;
            }
            .section-title {
                text-align: center;
                padding-bottom: 30px;
            }
            .section-title h2::after {
                margin: 0 0 10px 15px;
            }
            .section-title h2::before {
                margin: 0 15px 10px 0;
            }
            .mb-5 {
                margin-bottom: 3rem!important;
            }
            .align-items-stretch {
                align-items: stretch!important;
            }
            .d-flex {
                display: flex!important;
            }
.services .icon-box {
    padding: 30px;
    position: relative;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 0 29px 0 rgb(68 88 144 / 12%);
    transition: all 0.3s ease-in-out;
    border-radius: 8px;
    z-index: 1;
}

.services .icon-box::before {
    content: "";
    position: absolute;
    background: #e1f0fa;
    right: -60px;
    top: -40px;
    width: 100px;
    height: 100px;
    border-radius: 50px;
    transition: all 0.3s;
    z-index: -1;
}
.services .icon {
    margin: 0 auto 20px auto;
    padding-top: 10px;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    background: #3498db;
    transition: all 0.3s ease-in-out;
}
.services .icon i {
    font-size: 36px;
    line-height: 1;
    color: #fff;
}

.bx {
    font-family: boxicons!important;
    font-weight: 400;
    font-style: normal;
    font-variant: normal;
    line-height: 1;
    text-rendering: auto;
    display: inline-block;
    text-transform: none;
    speak: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.bxl-dribbble:before {
    content: "\e920";
}
.services .title {
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 18px;
}
div {
    display: block;
}
.services .icon-box:hover .icon {
    background: #fff;
}
.services .icon-box::before {
    content: "";
    position: absolute;
    background: #e1f0fa;
    right: -60px;
    top: -40px;
    width: 100px;
    height: 100px;
    border-radius: 50px;
    transition: all 0.3s;
    z-index: -1;
}
            .content{
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);
                z-index: 1;
            }
            .leftbutton{
	            position: relative;
	            display: inline-block;
                left: 1000px;
            }
            .content a{
	            color: black;
	            padding: 12px 16px;
	            text-decoration: none;
	            display: block;
                left:900px;
            }
            .content a:hover{
            	background-color: #ddd;
            }
            .dropdown:hover .content{
            	display: block;
            }
            .brandt{
                color:red;
                font-size: 100px !important;
            }
            body::before{
                display: block;
                content:'';
                height:60px;
            }
            .navbar-brand{
                color:bisque; 
                font-size: 30px !important;
                padding:0;
            }
            .section-title h2::before, .section-title h2::after {
                content: "";
                width: 50px;
                height: 2px;
                background: #3498db;
                display: inline-block;
            }
            .section-title h2 {
                font-size: 32px;
                font-weight: bold;
                text-transform: uppercase;
                position: relative;
                color: #222222;
            }
            h2 {
                display: block;
                font-size: 1.5em;
                margin-block-start: 0.83em;
                margin-block-end: 0.83em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                font-weight: bold;
}
            section {
                padding: 60px 0;
                overflow: hidden;
                display: block;
            }
            /* contact */
            .contact .social-links {
    padding-bottom: 20px;
}

            .contact .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #fff;
    color: #3498db;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
    border: 1px solid #3498db;
}
.contact .php-email-form .form-group {
    margin-bottom: 20px;
}
.contact .php-email-form input, .contact .php-email-form textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
    padding: 10px 15px;
}
/* go up */
.back-to-top.active {
    visibility: visible;
    opacity: 1;
}
.back-to-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: 15px;
    z-index: 996;
    background: #3498db;
    width: 40px;
    height: 40px;
    border-radius: 4px;
    transition: all 0.4s;
}
.align-items-center {
    align-items: center!important;
}
.justify-content-center {
    justify-content: center!important;
}
/* --------------------- */
.form-container{
    position:absolute;
    background-color: #fff;
    font-family: 'Titillium Web', sans-serif;
    font-size: 0;
    width:500px;
    top:140px;
    left:555px;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 0 25px -15px rgba(0, 0, 0, 0.3);
    opacity: 0;
    z-index: 11000000;
}
.form-container .title{
    color: #000;
    font-size: 25px;
    font-weight: 600;
    text-transform: capitalize;
    margin: 0 0 25px;
}
.form-container .title:after{
    content: '';
    background-color: #00A9EF;
    height: 3px;
    width: 60px;
    margin: 10px 0 0;
    display: block;
    clear: both;
}
.form-container .sub-title{
    color: #333;
    font-size: 18px;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;
    margin: 0 0 20px;
}
.form-container .form-horizontal{ font-size: 0; }
.form-container .form-horizontal .form-group{
    color: #333;
    width: 50%;
    padding: 0 8px;
    margin: 0 0 15px;
    display: inline-block;
}
.form-container .form-horizontal .form-group:nth-child(4){ margin-bottom: 30px; }
.form-container .form-horizontal .form-group label{
    font-size: 17px;
    font-weight: 600;
}
.form-container .form-horizontal .form-control{
    color: #888;
    background: #fff;
    font-weight: 400;
    letter-spacing: 1px;
    height: 40px;
    padding: 6px 12px;
    border-radius: 10px;
    border: 2px solid #e7e7e7;
    box-shadow: none;
}
.form-container .form-horizontal .form-control:focus{ box-shadow: 0 0 5px #dcdcdc; }
.form-container .form-horizontal .check-terms{
    padding: 0 8px;
    margin: 0 0 25px;
}
.form-container .form-horizontal .check-terms .check-label{
    color: #333;
    font-size: 14px;
    font-weight: 500;
    font-style: italic;
    vertical-align: top;
    display: inline-block;
}
.form-container .form-horizontal .check-terms .checkbox{
    height: 17px;
    width: 17px;
    min-height: auto;
    margin: 2px 8px 0 0;
    border: 2px solid #d9d9d9;
    border-radius: 2px;
    cursor: pointer;
    display: inline-block;
    position: relative;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    transition: all 0.3s ease 0s;
}
.form-container .form-horizontal .check-terms .checkbox:before{
    content: '';
    height: 5px;
    width: 9px;
    border-bottom: 2px solid #00A9EF;
    border-left: 2px solid #00A9EF;
    transform: rotate(-45deg);
    position: absolute;
    left: 2px;
    top: 2.5px;
    transition: all 0.3s ease;
}
.form-container .form-horizontal .check-terms .checkbox:checked:before{ opacity: 1; }
.form-container .form-horizontal .check-terms .checkbox:not(:checked):before{ opacity: 0; }
.form-container .form-horizontal .check-terms .checkbox:focus{ outline: none; }
.form-container .signin-link{
    color: #333;
    font-size: 14px;
    width: calc(100% - 190px);
    margin-right: 30px;
    display: inline-block;
    vertical-align: top;
}
.form-container .signin-link a{
    color: #00A9EF;
    font-weight: 600;
    transition: all 0.3s ease 0s;
}
.form-container .signin-link a:hover{ text-decoration: underline; }
.form-container .form-horizontal .signup{
    color: #fff;
    background: #00A9EF;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    width: 160px;
    padding: 8px 15px 9px;
    border-radius: 10px;
    transition: all 0.3s ease 0s;
}
.form-container .form-horizontal .btn:hover,
.form-container .form-horizontal .btn:focus{
    text-shadow: 0 0 5px rgba(0,0,0,0.5);
    box-shadow: 3px 3px rgba(0,0,0,0.15),5px 5px rgba(0,0,0,0.1);
    outline: none;
}
@media only screen and (max-width:479px){
    .form-container .form-horizontal .form-group{ width: 100%; }
    .form-container .signin-link{
        width: 100%;
        margin: 0 10px 15px;
    }
}
.content a:active, .form-container{
opacity: 1;
}


/* --------------------- */


        </style>
    </head>
    <!-- /*---------------HOME PAGE----------------*/ -->
    <body>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-black navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand"><span class="navbar-brand mb-0 h2 ">HU-TRMS</span></a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Service</a>
                    </li><li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>                
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    <section id="home"class="bg-dark text-light p-5 text-center text-sm-start">
        <div class="sontainone">
            <div class="leftbutton d-sm-flex px-2">
                <div class="dropdown">
                    <button class="btn btn-primary btn-lg mr-1">SIGNIN</button>
                    <div class="content">
                        <a href="stafflogin.php">Staff member</a>
                        <a href="collagelogin.php">Collage</a>
                        <!-- <a href="vicelogin.php">Vice President</a>
                        <a href="Vehiclelogin.php">Vehicle request office</a>
                        <a href="MainGatelogin.php">Main Gate Security</a> -->
                    </div>
                </div>
                <a href="addminlogin.php" ><button class="btn btn-warning btn-lg p-2 mr-2">ADMIN</button></a>
            </div>
            <script>
              var t=document.getElementById("");
            </script>
            <!-- ------------------------------- -->
 

            <!-- ------------------------------- -->

        
            <div class="d-sm-flex align-items-center justify-content-between">
                <img class="img-fluid w-50 d-none d-sm-block"src="img/R.png" alt="" />
                <div>
                    <h1>EASY WAY FOR <span class="text-warning">VEHICLE REQEUST</span></h1>   
                    <p class="lead my-6">
                        HU-Transport request management system  
                        automats the transport request operations like 
                        requesting for service, approval of the request. 
                        The main job of the system is to provide easy and 
                        simple transport request service to users.  
                    </p>
                    <p>If you are new <a href="staffregister.php">click here</a>
                    
                </div>
            </div>
        </div>
    </section>
<!-- ======= Services Section ======= -->
<section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Free service</a></h4>
              <p class="description">One of the service that we provide is /FREE/ morning and night home transportation service for the university community.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">For vacation</a></h4>
              <p class="description">A Transportation service for those who request a Vehicle for trip, vacation , long distance research and other approved requests.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Easy way</a></h4>
              <p class="description">This website provide an easy, good and understandable way of requesting vehicle, users requset for the service the approeal body check the request and respond for the request.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Community service</a></h4>
              <p class="description">We also provide a service for the compunity outside the compoud </p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>HU_TRMS</h3>
              <p>We are available 24/7. follow us on owr social media chanals.</p>
              <div class="social-links">
                <a href="#" ><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa-brands fa-facebook"></i></a>
            
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="fa-brands fa-adress"></i>
                <p>Haramaya UV.<br>Haramaya, bate main campas</p>
              </div>

              <div>
                <i class="fa-brands fa-email"></i>
                <p>hutrms@gmail.com</p>
              </div>

              <div>
                <i class="fa-brands fa-mobile"></i>
                <p>+251000000000</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button class="btn btn-primary btn-lg"type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div class="b-example-divider"></div>
<div class="bg-dark text-warning">
<div class="container ">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><p class="text-white">Home</p></a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><p class="text-white">service</p></a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><p class="text-white">contact</p></a></li>
    </ul>
    <p class="text-white text-center">&copy;2022 Mafia's Group, Inc</p>
  </footer>
</div>
</div>
    </body>
<html>
