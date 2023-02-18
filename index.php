<?php
    if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "curt@airwayinterline.com";
    $subject = $message;

    $message = "Name: $username Email: $email Phone: $phone  Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: @localhost:63342';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
        echo "<script>alert('Your message sent successfully! Thank you!');</script>";
    }else {
        echo "<script>alert('Your message not send..');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Airway Interline</title>
        <link rel="apple-touch-icon" sizes="180x180" href="./img/logo/favicon_io_2/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/logo/favicon_io_2/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/logo/favicon_io_2/favicon-16x16.png">
        <link rel="manifest" href="./img/logo/favicon_io_2/site.webmanifest">
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/media.css">
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
        />
        <script src="/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </head>

    <body>



    <!-- Header start -->
    <header class="header">
        <div class="wrapper-full">
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href="./index.php" class="header__logo-link">
                        <img src="./img/logo/logoai.png" alt="Airway" class="header__logo-pic">
                    </a>
                </div>
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="./index.php" class="header__link js-scroll">Home</a>
                        </li>
                        <li class="header__item">
                            <a href="#about" class="header__link js-scroll">About</a>
                        </li>
                        <li class="header__item">
                            <a href="#services" class="header__link js-scroll">Services</a>
                        </li>
                        <li class="header__item">
                            <a href="#contacts" class="header__link js-scroll">Contact</a>
                        </li>
                        <li class="header__item">
                            <a href="#reviews" class="header__link js-scroll">Reviews</a>
                        </li>
                        <li class="header__item">
                            <a href="./login.html" class="header__link js-scroll">Login</a>
                        </li>

                        <li class="header__lng">
                            <a href="./index.php" class="header__lng-link js-scroll">EN</a>
                            <a href="./fr_home.php" class="header__lng-link js-scroll">FR</a>
                        </li>
                    </ul>
                    <div class="header__nav-close">
                        <span class="header__nav-close-line"></span>
                        <span class="header__nav-close-line"></span>
                    </div>
                </nav>
                <div class="header__burger burger">
                    <span class="burger__line burger__line_first"></span>
                    <span class="burger__line burger__line_second"></span>
                    <span class="burger__line burger__line_third"></span>
                </div>
            </div>
        </div>
    </header>
    <!-- Header end -->
    <main class="main">
        <!-- Intro start -->
        <section class="intro" id="sign-in">
            <div class="wrapper">
                <h1 class="intro__title wow animate__animated animate__fadeInDown">
                    FULL-SERVICE AIRPORT CONCIERGE
                </h1>
                <p class="intro__subtitle wow animate__animated animate__fadeInDown">
                    Airway Interline offers assistance to airlines to provide distressed passengers with a high-level concierge service to organize hotel accommodation and transport.
                </p>
                <form class="search-form">
                    <fieldset class="search-form__wrap">
                        <p class="search-form__info">
                            <label>
                                <input type="text" name="user-review" class="text search-form__field" placeholder="How can we help you?">
                            </label>

                            <button type="submit" class="search-form__submit">CONTACT US</button> 
                        </p>
                    </fieldset>
                </form>
            </div>
        </section>
        <!-- Intro end -->

        <!-- Benefits start -->        
        <section class="benefits" id="services">
            <div class="benefits__wrap">
                <h2 class="benefits__title">
                    Our Services
                </h2>
                <div class="benefits__cards wow animate__animated animate__fadeInUp">
                    <div class="benefits__card">
                        <div class="benefits__card-pic">
                            <img src="./img/benef/01.png" alt="Transportation" class="benefits__card-thumb">
                        </div>
                        <h3 class="benefits__card-title">
                            Transportation
                        </h3>
                        <p class="benefits__card-desc">
                            We offer diverse transport options, from buses to limousines; based on the airline's needs, we provide solutions that offer substantial savings.
                        </p>
                        <a href="#contacts" class="benefits__card-more">
                            LEARN MORE
                        </a>
                    </div>
                    <div class="benefits__card">
                        <div class="benefits__card-pic">
                            <img src="./img/benef/2.jpg" alt="Hotel Accommodation" class="benefits__card-thumb">
                        </div>
                        <h3 class="benefits__card-title">
                            Hotel Accommodation
                        </h3>
                        <p class="benefits__card-desc">
                            Our company has a large inventory of hotel accommodations, ensuring a high level of comfort for each passenger, including families with children and passengers with special needs.
                        </p>
                        <a href="#contacts" class="benefits__card-more">
                            LEARN MORE
                        </a>
                    </div>
                    <div class="benefits__card">
                        <div class="benefits__card-pic">
                            <img src="./img/benef/3.jpg" alt="Cuisine" class="benefits__card-thumb">
                        </div>
                        <h3 class="benefits__card-title">
                                Cuisine
                        </h3>
                        <p class="benefits__card-desc">
                            Along with transportation and hotel accommodation, Airway Interline also ensures to provide meals that cater to the dietary needs of passengers of all ages.
                        </p>
                        <a href="#contacts" class="benefits__card-more">
                            LEARN MORE
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Benefits end -->  

         <!--Additional start-->
         <section class="additional" id="additional">
            <div class="wrapper-full">
                <h2 class="additional__title section-title wow animate__animated animate__fadeInUpBig">
                    Additional Traits
                </h2>
                <div class="additional__cards wow animate__animated animate__fadeInUpBig animate__delay-1s">

                    <div class="additional__card">
                        <div class="additional__card-pic">
                            <img src="./img/additional/Image (1).jpg" alt="Special services" class="additional__card-thumb">
                            <div class="additional__card-stats">
                                <h3 class="additional__card-title">
                                    Special Services
                                </h3>
                                <div class="additional__card-likes wow animate__animated animate__heartBeat animate__delay-1s">
                                    <span class="additional__card-likes-value ">
                                        221
                                    </span>
                                </div>
                                <div class="additional__card-comments">
                                    <span class="additional__card-comments-value">
                                        50
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p class="additional__card-desc">
                            We provide a pool of well-trained and highly motivated agents to cater to the needs of all passengers, including passengers with special needs (such as passengers with disabilities, unaccompanied minors, families with children, and large groups).
                        </p>
                    </div>

                    <div class="additional__card">
                        <div class="additional__card-pic">
                            <img src="./img/additional/Image (2).jpg" alt="Special services" class="additional__card-thumb">
                            <div class="additional__card-stats">
                                <h3 class="additional__card-title">
                                    Fast & Efficient
                                </h3>
                                <div class="additional__card-likes wow animate__animated animate__heartBeat animate__delay-1s">
                                    <span class="additional__card-likes-value ">
                                        312
                                    </span>
                                </div>
                                <div class="additional__card-comments">
                                    <span class="additional__card-comments-value">
                                        35
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p class="additional__card-desc">
                            We offer a streamlined method of passenger processing that is executed in a timely manner. In the event of seasonal workflows, our dedicated team will provide passengers with fast and reliable assistance at the airport and hotels.
                        </p>
                    </div>

                    <div class="additional__card">
                        <div class="additional__card-pic">
                            <img src="./img/additional/Image (3).jpg" alt="Special services" class="additional__card-thumb">
                            <div class="additional__card-stats">
                                <h3 class="additional__card-title">
                                    24/7 Client Support
                                </h3>
                                <div class="additional__card-likes wow animate__animated animate__heartBeat animate__delay-1s">
                                    <span class="additional__card-likes-value ">
                                        269
                                    </span>
                                </div>
                                <div class="additional__card-comments">
                                    <span class="additional__card-comments-value">
                                        47
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p class="additional__card-desc">
                            Our team consists of multilingual who are available 24 hours, 7 days a week to respond to our client’s requests in the most effective and efficient manner and provide our expertise with the best experience possible.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!--Additional end-->

        <!--About start-->
        <div class="services" id="about">
            <div class="wrapper-full">
                <div class="services__service service wow animate__animated animate__fadeInRight">
                    <div class="service__pic">
                        <img src="./img/about/02.jpg" alt="Enjoy Traveling
                        with Airway Interline" class="service__thumb">
                    </div>
                    <div class="service__info">
                        <h3 class="service__title">
                            Welcome to Airway Interline
                        </h3>
                        <p class="service__desc-first">
                            Airway Interline has been offering airport passenger services for over eight years, with an experienced team of aviation and travel professionals dedicated to making travel seamless and stress-free. 
                        </p>
                        <p class="service__desc-second">
                            Our goal is to be a reliable business partner by bringing about progress and success to our partners through resource management solutions. 
                        </p>
                    </div>
                </div>

                <div class="services__service service wow animate__animated animate__fadeInLeft animate__delay-1s">
                    <div class="service__info ">
                        <h3 class="service__title">
                            Processing passengers in a seamless and timely manner
                        </h3>
                        <p class="service__desc-first">
                            Airway Interline is a leader in airport passenger services with a proven track record of innovation, customer satisfaction, and service excellence.
                        </p>
                        <p class="service__desc-second">
                            We help the airlines to continue operating in a smooth flow of business while we reassure them that we will take care of passengers.We help the airlines to continue operating with a smooth flow of business while we reassure them that we will take care of passengers. </p>
                    </div>
                    <div class="service__pic service__pic_mob-first">
                        <img src="./img/about/5.jpg" alt="Enjoy Traveling
                        with Airway Interline" class="service__thumb">
                    </div>
                </div>
            </div>
        </div>
        <!--About end-->

        <!-- Our team start -->

      
        <section class="team" id="team">
            <div class="wrapper-full">
                <div class="team__caption">
                    <h1 class="team__title section-title">
                        Our Team
                    </h1>
                </div>
                <div class="row">
                  <!-- Column 1-->
                  <div class="column">
                    <div class="column__card">
                      <div class="img-container">
                        <img src="./img/team/Kiran Rajdev.jpg" alt="Kiran Rajdev">
                      </div>
                      <h3>Kiran Rajdev</h3>
                      <p class="position">CEO/President</p>
                      <div class="icons">
                        <a href="https://www.linkedin.com/in/kiran-rajdev-mba-92788244/">
                          <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="mailto: info@airwayinterline.com">
                          <i class="fas fa-envelope"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- Column 2-->
                  <div class="column">
                    <div class="column__card">
                      <div class="img-container">
                        <img src="./img/team/curt.jpg" alt="Curt Williams">
                      </div>
                      <h3>Curt Williams</h3>
                      <p class="position">Director of Operations</p>
                      <div class="icons">
                        <a href="https://www.linkedin.com/company/airway-interline-inc/">
                          <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="mailto: info@airwayinterline.com">
                          <i class="fas fa-envelope"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- Column 3-->
                  <div class="column">
                    <div class="column__card">
                      <div class="img-container">
                        <img src="./img/team/JEWEL.jpg" alt="Jewel Apresto">
                      </div>
                      <h3>Jewel Apresto</h3>
                      <p class="position">Operations Manager</p>
                      <div class="icons">
                        <a href="https://www.linkedin.com/company/airway-interline-inc/">
                          <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="mailto: info@airwayinterline.com">
                          <i class="fas fa-envelope"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                    <!-- Column 1-->
                    <div class="column">
                      <div class="column__card">
                        <div class="img-container">
                          <img src="./img/team/sarmad.jpg" alt="Sarmad Alkass Petrous">
                        </div>
                        <h3>Sarmad Alkass Petrous</h3>
                        <p class="position">Operations Supervisor</p>
                        <div class="icons">
                          <a href="https://www.linkedin.com/company/airway-interline-inc/">
                            <i class="fab fa-linkedin"></i>
                          </a>
                          <a href="mailto: info@airwayinterline.com">
                            <i class="fas fa-envelope"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- Column 2-->
                    <div class="column">
                      <div class="column__card">
                        <div class="img-container">
                          <img src="./img/team/diana.jpg" alt="Diana Atakishiyeva">
                        </div>
                        <h3>Diana Atakishiyeva</h3>
                        <p class="position">Operations Supervisor</p>
                        <div class="icons">
                          <a href="https://www.linkedin.com/company/airway-interline-inc/ ">
                            <i class="fab fa-linkedin"></i>
                          </a>
                          <a href="mailto: info@airwayinterline.com">
                            <i class="fas fa-envelope"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- Column 3-->
                    <div class="column">
                      <div class="column__card">
                        <div class="img-container">
                          <img src="./img/team/Mari.jpg" alt="Mariyam Alkhatat">
                        </div>
                        <h3>Mariyam Alkhatat</h3>
                        <p class="position">Montreal Station Supervisor</p>
                        <div class="icons">
                          <a href="https://www.linkedin.com/company/airway-interline-inc/">
                            <i class="fab fa-linkedin"></i>
                          </a>
                          <a href="mailto: info@airwayinterline.com">
                            <i class="fas fa-envelope"></i>
                          </a>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
        </section>

        <!-- Our team end -->

        <!--Partners start-->
        <div class="partners" id="partners">
            <div class="wrapper-full">
                <h2 class="partners__title section-title">
                    Our Partners 
                </h2>
                <div class="slider">
                    <div class="slider-track">
                        <div class="slide"> 
                            <img src="./img/partners/Turkish Airlines.jpg"  alt="Turkish Airlines">
                        </div>

                        <div class="slide"> 
                            <img src="./img/partners/Air France.png" alt="Air France">
                        </div>

                        <div class="slide"> 
                            <img src="./img/partners/LOT Polish Airlines.png"  alt="LOT Polish Airlines">
                        </div>

                        <div class="slide"> 
                            <img src="./img/partners/SATA Air Açores.jpg" alt="SATA Air Açores">
                        </div>

                        <div class="slide"> 
                            <img src="./img/partners/TAP Air Portugal.jpg" alt="TAP Air Portugal">
                        </div>

                        <div class="slide"> 
                            <img src="./img/partners/Eurowings.png" alt="Eurowings">
                        </div>

                        <div class="slide"> 
                            <img src="./img/partners/Biman Bangladesh Airlines.png" alt="Biman Bangladesh Airlines">
                        </div>

                        <div class="slide"> 
                            <img src="./img/partners/China Southern Airlines.png" alt="China Southern Airlines">
                        </div>

                        <div class="slide"> 
                            <img src="./img/partners/Azores Airlines.png" alt="Azores Airlines">
                        </div>

                        <div class="slide"> 
                            <img src="./img/partners/KLM.png" alt="KLM">
                        </div>

                        <div class="slide"> 
                            <img src="./img/partners/Lufthansa.png" alt="Lufthansa">
                        </div>

                        <div class="slide"> 
                            <img src="./img/partners/Qatar Airways.png" alt="Qatar Airways">
                        </div>

                        <div class="slide"> 
                            <img src="./img/partners/Qatar Airways.png" alt="Qatar Airways">
                        </div>

                        <div class="slide"> 
                            <img src="./img/partners/China Eastern Airlines.png" alt="China Eastern Airlines">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Partners end-->


        <!-- Testimonial start -->
        <div class="testi" id="reviews">
            <div class="wrapper-full">
                <h2 class="testimonial__title section-title">
                    Customer Reviews
                </h2>
                <p class="testimonial__subtitle">What client say about us?</p>
                <div class="site">
                    <div class="container__testi">
                    <div class="testimonial">
                        <div class="body swiper">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <div class="wrapper__content">
                                        <div class="thumbnail">
                                            <img src="./img/testimonial/n/f2.jpg" alt="second customer">
                                        </div>
                                        <div class="aside">
                                            <p>I was stuck at Montreal airport after I missed a connection flight due to the delay of a KLM Staff from the Airway Interline helped me to book the next earliest flight and gave me a 40$ food vouchers they were super friendly and helpful and I would never forget them... Thank you Airway Interline for helping me.</p>
                                            <div class="name">
                                                <h4> Ashley Benny </h4>
                                                <p>Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--slide 2-->
                                <li class="swiper-slide">
                                    <div class="wrapper__content">
                                        <div class="thumbnail">
                                            <img src="./img/testimonial/n/f1.jpg" alt="first customer">
                                        </div>
                                        <div class="aside">
                                            <p>My service with this company was excellent. Overall stress free once your assistants arrived. Great listeners and empathic from travel weary person.</p>
                                            <div class="name">
                                                <h4>Jayne Fair</h4>
                                                <p>Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--slide 3-->
                                <li class="swiper-slide">
                                    <div class="wrapper__content">
                                        <div class="thumbnail">
                                            <img src="./img/testimonial/n/f3.jpg" alt="third customer">
                                        </div>
                                        <div class="aside">
                                            <p>Their super helpful staff made our first and unplanned stay in Toronto much more pleasant than we could have hoped for. Due to delay we missed our connection from Toronto to San Jose, Costa Rica, but they handled it and us really great. After taking us to the hotel, feed us, the even bothered coming back to give us some toothbrushes since our baggage was "somewhere" at the airport.</p>
                                            <div class="name">
                                                <h4>Angelica Urenda</h4>
                                                <p>Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--slide 4-->
                                <li class="swiper-slide">
                                    <div class="wrapper__content">
                                        <div class="thumbnail">
                                            <img src="./img/testimonial/n/f4.png" alt="First customer">
                                        </div>
                                        <div class="aside">
                                            <p>The staff here was very responsive and solved a plethora of issues. One of the staff members Christian (that was the gentleman's first name) was awesome. Helping out passengers with their luggage and being on the ball till late in the night when the stranded passengers were checked in the hotel and then being available in the early morning hours to ensure that all of us caught our respective flights.</p>
                                            <div class="name">
                                                <h4>Ahmed Hessan Zafar</h4>
                                                <p>Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Testimonial end -->


        <!--Contacts start-->
        
        <section class="contacts" id="contacts">
            <div class="wrapper-full">
                <h2 class="contact__title section-title">
                    GET IN TOUCH WITH US
                </h2>
                <p class="contact__subtitle">We are here for you! How can we help you?</p>
                <div class="contact-wrap">
                    <div class="contact-in wow animate__animated animate__pulse animate__delay-1s">
                        <h1>Contact Info</h1>
                        <h2><i class="fa-solid fa-phone"></i> Phone</h2>
                        <p>1-905-672-1195 <br>
                            1-888-333-5559</p>
                        <h2><i class="fa-solid fa-envelope"></i> Email</h2>
                        <p>info@airwayinterline.com</p>
                        <h2><i class="fa-solid fa-location-dot"></i> Address</h2>
                        <p class="contacts__address-toronto">
                            5925 Airport Road, Suite 100 Mississauga, ON, L4V 1W1
                        </p>
                        <p class="contacts__address-montreal">
                            975 Romeo-Vachon Blvd.N, Suite 256, Dorval QC, H4Y 1H1
                        </p>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="mailto: info@airwayinterline.com"><i class="fas fa-envelope"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/airway-interline-inc/"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="contact-in wow animate__animated animate__pulse animate__delay-1s">
                        <h1>Send a Message</h1>
                        <form action="" method="post" autocomplete="off" class="contacts__form">
                            <div class="form__row">
                                <div class="form__group">
                                    <input type="text" name="name" class="contact-in-input" placeholder="Full Name">
                                </div>
                            </div>

                            <div class="form__row">
                                <div class="form__group">
                                    <input type="email" name="email" class="contact-in-input" placeholder="Email">
                                </div>
                                <div class="form__group">
                                    <input type="tel" name="phone" class="contact-in-input" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form__row">
                                <div class="form__group">
                                    <textarea name="message" class="contact-in-textarea" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <input type="submit" name="submit" value="Send" class="contact-in-btn" />
                        </form>
                    </div>
                    <div class="contact-in wow animate__animated animate__pulse animate__delay-1s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11540.408848758081!2d-79.6097621!3d43.6876384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7d659d14fc6ae660!2sAirway%20Interline!5e0!3m2!1sru!2sca!4v1671484504644!5m2!1sru!2sca" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!--Contacts end-->

    </main>

        <!--footer start-->
    <footer class="footer">
        <div class="wrapper">
            <div class="footer__item wow animate__animated animate__backInUp">
                <div class="footer__logo">
                    <a href="./index.php">
                        <img src="./img/logo/logoai.png" alt="logo" class="footer__logo-pic">
                    </a>
                </div>
                <nav class="footer__nav">
                    <ul class="footer__menu">
                        <li class="footer__menu-item">
                            <h3 class="footer__menu-title">
                                Company
                            </h3>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#about" class="footer__menu-link"> About</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#partners" class="footer__menu-link"> Partners</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link"> Careers</a>
                        </li>
                    </ul>
                    <ul class="footer__menu">
                        <li class="footer__menu-item">
                            <h3 class="footer__menu-title">
                                Terms & Conditions
                            </h3>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link"> Terms and Conditions</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="https://drive.google.com/file/d/1aQ01L874HWz9aqRzGskjDefYDRP96T7J/view?usp=share_link" class="footer__menu-link"> Privacy Policy</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link"> Cookie Policy</a>
                        </li>
                    </ul>
                    <ul class="footer__menu">
                        <li class="footer__menu-item">
                            <h3 class="footer__menu-title">
                                Help
                            </h3>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#contacts" class="footer__menu-link"> Contact Us</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#contacts" class="footer__menu-link"> Location</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#reviews" class="footer__menu-link"> Reviews</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <hr class="footer__divider">
            <div class="footer__bottom">
                <span class="copyright">
                    Copyright ©2023 Designed by Airway Interline Services Inc.
                </span>
                <ul class="footer__list">
                    <li class="footer__list-item">
                        <a href="#" class="footer__list-link">
                             <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="footer__list-item">
                        <a href="https://www.linkedin.com/company/airway-interline-inc/" class="footer__list-link">
                             <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="footer__list-item">
                        <a href="mailto: info@airwayinterline.com" class="footer__list-link">
                             <i class="fas fa-envelope"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
       <!--footer end-->

    <!--Cookie start-->
    <div class="cookie__wrapper">
        <header class="cookie__header">
            <i class="bx bx-cookie"></i>
            <h2>Cookies Consent</h2>
        </header>

        <div class="data">
            <p>Our website uses cookies to provide your browsing experience and relevant information. <a href="#"> Read more...</a></p>
        </div>

        <div class="buttons">
            <button class="button" id="acceptBtn">Accept</button>
            <button class="button" id="declineBtn">Decline</button>
        </div>
    </div>

    <!--Cookie end-->


        <script>
            (function () {
                const header = document.querySelector('header');
                window.onscroll = () => {
                    if (window.pageYOffset > 80) {
                        header.classList.add('header_active')
                    } else{
                        header.classList.remove('header_active')
                    }
                }
            }());

        </script>

        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

        <script>
        const swiper = new Swiper('.swiper', {
        autoHeight: true,
        loop: true,

        // If we need pagination
        pagination: {
        el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        });
        </script>

        <script src="./js/main.js"></script>

        <script src="./js/cookie.js"></script>

    </body>
</html>