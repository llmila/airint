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
    <link rel="stylesheet" href="./css/fr_style.css">
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
                    <img src="./img/logo/logo.png" alt="Airway" class="header__logo-pic">
                </a>
            </div>
            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item">
                        <a href="./fr_home.php" class="header__link js-scroll">Home</a>
                    </li>
                    <li class="header__item">
                        <a href="#about" class="header__link js-scroll">À propos de</a>
                    </li>
                    <li class="header__item">
                        <a href="#services" class="header__link js-scroll">Services</a>
                    </li>
                    <li class="header__item">
                        <a href="#contacts" class="header__link js-scroll">Contact</a>
                    </li>
                    <li class="header__item">
                        <a href="#reviews" class="header__link js-scroll">Commentaires</a>
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
                SERVICE CONCIERGE À l'AÉROPORT
            </h1>
            <p class="intro__subtitle wow animate__animated animate__fadeInDown">
                Airway interline offere une assistance aux compagnies aériennes, afin de mettre à la disposition des passagers en détresse un service de conciergerie de haut niveau pour organiser l'hébergement et le transport.            </p>
            <form class="search-form">
                <fieldset class="search-form__wrap">
                    <p class="search-form__info">
                        <label>
                            <input type="text" name="user-review" class="text search-form__field" placeholder="Comment pouvons-nous vous aider?">
                        </label>

                        <button type="submit" class="search-form__submit">CONTACTEZ-NOUS</button>
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
                Nos services
            </h2>
            <div class="benefits__cards wow animate__animated animate__fadeInUp">
                <div class="benefits__card">
                    <div class="benefits__card-pic">
                        <img src="./img/benef/01.png" alt="Transportation" class="benefits__card-thumb">
                    </div>
                    <h3 class="benefits__card-title">
                        Le transport
                    </h3>
                    <p class="benefits__card-desc">
                        Nous offrons diverses options de transport, des bus, limousines... , en fonction des besoins de la compagnie aérienne, nous proposons des solutions qui offrent des économies substantielles.
                    </p>
                    <a href="#contacts" class="benefits__card-more">
                        EN SAVOIR PLUS
                    </a>
                </div>
                <div class="benefits__card">
                    <div class="benefits__card-pic">
                        <img src="./img/benef/2.jpg" alt="Hotel Accommodation" class="benefits__card-thumb">
                    </div>
                    <h3 class="benefits__card-title">
                        Hébergement à l'hôtel
                    </h3>
                    <p class="benefits__card-desc">
                        Notre société dispose d'un large inventaire d'hébergements hôteliers, assurant un haut niveau de confort pour chaque passager, y compris les familles avec enfants et les passagers ayant des besoins spéciaux.
                    </p>
                    <a href="#contacts" class="benefits__card-more">
                        EN SAVOIR PLUS
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
                        En plus du transport et de l'hébergement à l'hôtel, Airway Interline s'assure également de fournir des repas qui répondent aux besoins alimentaires des passagers de tous âges.
                    </p>
                    <a href="#contacts" class="benefits__card-more">
                        EN SAVOIR PLUS
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
                Caractéristiques supplémentaires
            </h2>
            <div class="additional__cards wow animate__animated animate__fadeInUpBig animate__delay-1s">

                <div class="additional__card">
                    <div class="additional__card-pic">
                        <img src="./img/additional/Image (1).jpg" alt="Special services" class="additional__card-thumb">
                        <div class="additional__card-stats">
                            <h3 class="additional__card-title">
                                Services spéciaux
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
                        Nous fournissons une equipe  bien formee et très motivé pour répondre aux besoins de tous les passagers y compris ceux a mobilite reduite, les mineurs non accompagnés, les familles  et les groupes).
                    </p>
                </div>

                <div class="additional__card">
                    <div class="additional__card-pic">
                        <img src="./img/additional/Image (2).jpg" alt="Special services" class="additional__card-thumb">
                        <div class="additional__card-stats">
                            <h3 class="additional__card-title">
                                Rapide & Efficace
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
                        Nous offrons une méthode simplifiée de traitement de passagers qui est exécutée en temps opportun. En cas de flux de travail saisonniers, notre équipe dédiée fournira  une assistance rapide et fiable à l'aéroport et dans les hôtels.
                    </p>
                </div>

                <div class="additional__card">
                    <div class="additional__card-pic">
                        <img src="./img/additional/Image (3).jpg" alt="Special services" class="additional__card-thumb">
                        <div class="additional__card-stats">
                            <h3 class="additional__card-title">
                                Assistance 24h/24 et 7j/7
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
                        Notre équipe est composée de polyglottes disponibles 24 heures sur 24, 7 jours sur 7 pour répondre aux demandes de nos clients de la manière la plus efficace et fournir notre meilleure expérience.
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
                        Bienvenue  à  Airway Interligne.
                    </h3>
                    <p class="service__desc-first">
                        Airway Interligne propose des services aux passagers à l'aéroport. Depuis plus de huit ans, avec une équipe expérimentée de professionnels de l'aviation et du voyage dédiés à rendre les voyages fluides et sans stress.
                    </p>
                    <p class="service__desc-second">
                        Notre objectif est d'être un partenaire commercial fiable en apportant progrès et succès à nos partenaires grâce à des solutions de gestion des ressources.
                    </p>
                </div>
            </div>

            <div class="services__service service wow animate__animated animate__fadeInLeft animate__delay-1s">
                <div class="service__info ">
                    <h3 class="service__title">
                        Traiter les passagers de manière transparente et rapide
                    </h3>
                    <p class="service__desc-first">
                        Airway Interligne est un leader des services aux passagers dans les aéroports avec une expérience éprouvée en matière d'innovation,  satisfaction de la clientèle et l'excellence du service.
                    </p>
                    <p class="service__desc-second">
                        Nous collaborons avec des compagnies aériennes afin de continuer à fonctionner avec un flux d'affaires fluide tout en les rassurant que nous prendrons soin des passagers. </p>
                </div>
                <div class="service__pic service__pic_mob-first">
                    <img src="./img/about/5.jpg" alt="Enjoy Traveling with Airway Interline" class="service__thumb">
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
                    Notre équipe
                </h1>
            </div>
            <div class="row">
                <!-- Column 1-->
                <div class="column">
                    <div class="column__card">
                        <div class="img-container">
                            <img src="./img/team/Kiran%20Rajdev.jpg" alt="Kiran Rajdev">
                        </div>
                        <h3>Kiran Rajdev</h3>
                        <p class="position">PDG/PRÉSIDENT</p>
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
                        <p class="position">DIRECTEUR DES OPÉRATIONS</p>
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
                        <p class="position">CHEF DES OPÉRATIONS</p>
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
                        <p class="position">SUPERVISEUR DES OPÉRATIONS</p>
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
                        <p class="position">SUPERVISEUR DES OPÉRATIONS</p>
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
                        <p class="position">SUPERVISEUR DE MONTRÉAL</p>
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
                Nos partenaires
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
                Avis des clients
            </h2>
            <p class="testimonial__subtitle">Qu'est-ce que le client dit de nous?</p>
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
                                            <p>J'ai été coincé à l'aéroport de Montréal après avoir manqué mon vol de correspondance en raison du retard de KLM. Les agents de Airway Interline m'ont aidé à trouver un endroit pour passé la nuit et m'ont donné des bons de repas. Ils étaient super sympas et serviables. Merci Airway Interline de m'avoir aidé.</p>
                                            <div class="name">
                                                <h4> Ashley Benny </h4>
                                                <p>Client</p>
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
                                            <p>Mon expérience avec cette compagnie était excellente. Mon stress avait disparu immediatement que les assistants est arrivés.ils sont très empathiques et patientes avec les gens enervé avec leur voyage.</p>
                                            <div class="name">
                                                <h4>Jayne Fair</h4>
                                                <p>Client</p>
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


    <!-- <section class="testimonial">
        <div class="testimonial__wrap">
            <div class="container">
                <div class="wrapper-full">
                    <h2 class="partners__title section-title">
                        Our Testimonial
                    </h2>
                    <p>What client say about us?</p>
                <div class="row wow animate__animated animate__slideInRight animate__delay-1s">
                    <div class="row__wrap">
                        <div class="service__pic service__pic_mob-first">
                            <img src="./img/about/aboutimg.png" alt="Enjoy Traveling
                            with Airway Interline" class="service__thumb">
                        </div>
                        <div id="testimonial-slider" class="owl-carousel">  -->
    <!--1-->
    <!-- <div class="testi-in">
        <div class="testi-in-content">
                <p>Their superhelpfull staff made our first and unplanned stay in Toronto much more pleasant than we could have hoped for. Due to delay we missed our connection from Toronto to San Jose, Costa Rica, but they handled it and us really great. After taking us to the hotel, feed us, the even bothered coming back to give us some toothbrushes since our baggage was "somewhere" at the airport.</p>
        </div>
        <div class="testi-in-image">
            <img src="./img/testimonial/01.png" alt="customer" class="testi-thumb">
            <h3>Kevin Mercado
                <br>
                <span>Customer</span>
            </h3>
        </div>
    </div>   -->
    <!--2-->
    <!-- <div class="testi-in">
        <div class="testi-in-content">
            <p>My service with this company was excellent. Overall stress free once your assistants arrived. Great listeners and empathic from travel weary person.</p>
        </div>
        <div class="testi-in-image">
            <img src="./img/testimonial/04.png" alt="customer" class="testi-thumb">
            <h3>Jayne Fair
                <br>
                <span>Customer</span>
            </h3>
        </div>
    </div> -->
    <!--3-->
    <!-- <div class="testi-in">
        <div class="testi-in-content">
            <p>Their superhelpfull staff made our first and unplanned stay in Toronto much more pleasant than we could have hoped for. Due to delay we missed our connection from Toronto to San Jose, Costa Rica, but they handled it and us really great. After taking us to the hotel, feed us, the even bothered coming back to give us some toothbrushes since our baggage was "somewhere" at the airport.</p>
        </div>
        <div class="testi-in-image">
            <img src="./img/testimonial/1.jpg" alt="customer" class="testi-thumb">
            <h3>Angelica Urenda
                <br>
                <span>Customer</span>
            </h3>
        </div>
    </div> -->
    <!--4-->
    <!-- <div class="testi-in">
        <div class="testi-in-content">
            <p>I was stuck at Montreal airport after I missed a connection flight due to the delay of a KLM Staff from the Airway Interline helped me to book the next earliest flight and gave me a 40$ food vouchers they were super friendly and helpful and I would never forget them... Thank you Airway Interline for helping me.</p>
        </div>
        <div class="testi-in-image">
            <img src="./img/testimonial/02.png" alt="customer" class="testi-thumb">
            <h3>Ashley Benny
                <br>
                <span>Customer</span>
            </h3>
        </div>
    </div>  -->
    <!--5-->
    <!-- <div class="testi-in">
        <div class="testi-in-content">
            <p>The staff here was very responsive and solved a plethora of issues. One of the staff members Christian (that was the gentleman's first name) was awesome. Helping out passengers with their luggage and being on the ball till late in the night when the stranded passengers were checked in the hotel and then being available in the early morning hours to ensure that all of us caught our respective flights.</p>
        </div>
        <div class="testi-in-image">
            <img src="./img/testimonial/05.png" alt="customer" class="testi-thumb">
            <h3>Ahmed Hessan Zafar
                <br>
                <span>Customer</span>
            </h3>
        </div>
    </div> -->

    <!--5-->
    <!-- <div class="testi-in">
        <div class="testi-in-content">
            <p>The staff here was very responsive and solved a plethora of issues. One of the staff members Christian (that was the gentleman's first name) was awesome. Helping out passengers with their luggage and being on the ball till late in the night when the stranded passengers were checked in the hotel and then being available in the early morning hours to ensure that all of us caught our respective flights.</p>
        </div>
        <div class="testi-in-image">
            <img src="./img/testimonial/05.png" alt="customer" class="testi-thumb">
            <h3>Ahmed Hessan Zafar
                <br>
                <span>Customer</span>
            </h3>
        </div>
    </div> -->

    <!--5-->
    <!-- <div class="testi-in">
        <div class="testi-in-content">
            <p>The staff here was very responsive and solved a plethora of issues. One of the staff members Christian (that was the gentleman's first name) was awesome. Helping out passengers with their luggage and being on the ball till late in the night when the stranded passengers were checked in the hotel and then being available in the early morning hours to ensure that all of us caught our respective flights.</p>
        </div>
        <div class="testi-in-image">
            <img src="./img/testimonial/05.png" alt="customer" class="testi-thumb">
            <h3>Ahmed Hessan Zafar
                <br>
                <span>Customer</span>
            </h3>
        </div>
    </div> -->

    <!--5-->
    <!-- <div class="testi-in">
        <div class="testi-in-content">
            <p>The staff here was very responsive and solved a plethora of issues. One of the staff members Christian (that was the gentleman's first name) was awesome. Helping out passengers with their luggage and being on the ball till late in the night when the stranded passengers were checked in the hotel and then being available in the early morning hours to ensure that all of us caught our respective flights.</p>
        </div>
        <div class="testi-in-image">
            <img src="./img/testimonial/05.png" alt="customer" class="testi-thumb">
            <h3>Ahmed Hessan Zafar
                <br>
                <span>Customer</span>
            </h3>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</section> -->
    <!--Testimonial Slider end-->


    <!--Contacts start-->

    <section class="contacts" id="contacts">
        <div class="wrapper-full">
            <h2 class="contact__title section-title">
                Prendre contact avec nous!
            </h2>
            <p class="contact__subtitle">Nous sommes là pour vous! Comment pouvons-nous vous aider?</p>
            <div class="contact-wrap">
                <div class="contact-in wow animate__animated animate__pulse animate__delay-1s">
                    <h1>INFORMATIONS DE CONTACT</h1>
                    <h2><i class="fa-solid fa-phone"></i> Téléphone fixe</h2>
                    <p>1-905-672-1195 <br>
                        1-888-333-5559</p>
                    <h2><i class="fa-solid fa-envelope"></i> E-mail</h2>
                    <p>info@airwayinterline.com</p>
                    <h2><i class="fa-solid fa-location-dot"></i> Adresse</h2>
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
                    <h1>ENVOYER UN MESSAGE</h1>
                    <form action="" method="post" autocomplete="off" class="contacts__form">
                        <div class="form__row">
                            <div class="form__group">
                                <input type="text" name="name" class="contact-in-input" placeholder="Nom et prénom">
                            </div>
                        </div>

                        <div class="form__row">
                            <div class="form__group">
                                <input type="email" name="email" class="contact-in-input" placeholder="E-mail">
                            </div>
                            <div class="form__group">
                                <input type="tel" name="phone" class="contact-in-input" placeholder="Téléphone fixe">
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__group">
                                <textarea name="message" class="contact-in-textarea" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <input type="submit" name="submit" value="Envoyer" class="contact-in-btn" />
                    </form>
                </div>
                <div class="contact-in wow animate__animated animate__pulse animate__delay-1s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11540.408848758081!2d-79.6097621!3d43.6876384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7d659d14fc6ae660!2sAirway%20Interline!5e0!3m2!1sru!2sca!4v1671484504644!5m2!1sru!2sca" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--Contacts end-->

    <!--Cookie start-->
    <div class="cookie__wrapper">
        <header class="cookie__header">
            <i class="bx bx-cookie"></i>
            <h2>Consentement aux cookies</h2>
        </header>

        <div class="data">
            <p>Notre site Web utilise des cookies pour fournir votre expérience de navigation et des informations pertinentes.<a href="#"> En savoir plus...</a></p>
        </div>

        <div class="buttons">
            <button class="button" id="acceptBtn">Accepter</button>
            <button class="button" id="declineBtn">Refuser</button>
        </div>
    </div>

    <!--Cookie end-->

</main>

<!--footer start-->
<footer class="footer">
    <div class="wrapper">
        <div class="footer__item wow animate__animated animate__backInUp">
            <div class="footer__logo">
                <a href="./index.php">
                    <img src="./img/logo/logo.png" alt="logo" class="footer__logo-pic">
                </a>
            </div>
            <nav class="footer__nav">
                <ul class="footer__menu">
                    <li class="footer__menu-item">
                        <h3 class="footer__menu-title">
                            Société
                        </h3>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#about" class="footer__menu-link"> À propos de</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#partners" class="footer__menu-link"> Les partenaires</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#!" class="footer__menu-link"> Carrières</a>
                    </li>
                </ul>
                <ul class="footer__menu">
                    <li class="footer__menu-item">
                        <h3 class="footer__menu-title">
                            Termes et Conditions
                        </h3>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#!" class="footer__menu-link"> Termes et Conditions</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#!" class="footer__menu-link"> Politique de confidentialité</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#!" class="footer__menu-link"> Politique relative aux cookies</a>
                    </li>
                </ul>
                <ul class="footer__menu">
                    <li class="footer__menu-item">
                        <h3 class="footer__menu-title">
                            Aider
                        </h3>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#contacts" class="footer__menu-link"> Nous contacter</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#contacts" class="footer__menu-link"> Emplacement</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#reviews" class="footer__menu-link"> Avis des clients</a>
                    </li>
                </ul>
            </nav>
        </div>
        <hr class="footer__divider">
        <div class="footer__bottom">
                <span class="copyright">
                    Copyright ©2023 Conçu par Airway Interline Services Inc.
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