<?php
    $title = "WEBXSTUDIO : About Us";
    include("./includes/header.php");
?>
<body>
    <?php
        include("./includes/navigation.php");
    ?>
    <header class="header header__about">
        <h1 class="heading-primary">Welcome to</h1>
        <h1 class="heading-primary--sub">Web <span class="brand-X">X</span> Studio</h1>
    </header>
    <div class="about">
        <h1 class="heading-secondary margin-top-medium">Who are we?</h1>
        <p class="about__intro margin-top-large">
            Webxstudio is a startup firm that specializes in designing and developing websites, mobile applications and computer softwares.
            We believe in collaborative work and think clients as a partner.
            We provide services like graphic designing, Web design and development and designing and building application for android devices.
            We believe that a beautiful design makes a great impression therefore we work for creation of aesthic and amazing websites and applications.
            We also provide services like digital marketing of products and seo for websites.
        </p>
    </div>
    <div class="services margin-top-large">
        <h1 class="heading-secondary">Our Services</h1>
        <div class="services__box">
            <img src="img/graphic.jpg" alt="graphic design" class="services__img">
            <span class="services__heading">Graphic Design</span>
            <span class="services__text">Graphic design is the process of visual communication and problem-solving through the use of typography, photography and illustration. Using all our ideas, creativity and experience we love to bring designs that are approchable, innovative, responsive, valuable and alige. We love to create stunning visuals and arts. </span>
        </div>
        <div class="services__box">
            <img src="img/website.png" alt="Website designing" class="services__img">
            <span class="services__heading">Website development</span>
            <span class="services__text">We love to design and develop beautiful and stunning websites. Our experience and creativity leads us to develop amazing websites that are reponsive and clean at same time. We love to bring your ideas to life with beautiful websites. Along with the website compatibity with mobile we can alos develop a mobile version of web applications.</span>
        </div>
        <div class="services__box">
            <img src="img/mobile.jpg" alt="Mobile Applications" class="services__img">
            <span class="services__heading">Mobile development</span>
            <span class="services__text">Mobile app development is the act or process by which a mobile app is developed for mobile devices, such as personal digital assistants, enterprise digital assistants or mobile phones. We develop beautifully designed mobile applications for android.</span>
        </div>
        <div class="services__box">
            <img src="img/software.jpg" alt="Software" class="services__img">
            <span class="services__heading">Software Development</span>
            <span class="services__text">We create computer software as required. Software development is concieved as specifying, designing and developing software applications as per reqirement. We specialize in development of softwares for windows and linux operating system. </span>
        </div>
        <div class="services__box">
            <img src="img/digital_marketing.jpg" alt="Degital Marketing" class="services__img">
            <span class="services__heading">Digital Marketing</span>
            <span class="services__text">Digital marketing encompasses all marketing efforts that use an electronic device or the internet. Businesses leverage digital channels such as search engines, social media, email, and their websites to connect with current and prospective customers.</span>
        </div>
        <div class="services__box">
            <img src="img/seo.jpg" alt="Seo" class="services__img">
            <span class="services__heading">SEO</span>
            <span class="services__text">Search engine optimization is a methodology of strategies, techniques and tactics used to increase the amount of visitors to a website by obtaining a high-ranking placement in the search results page of a search engine (SERP) — including Google, Bing, Yahoo and other search engines.</span>
        </div>
    </div>
    <!-- <hr class="margin-top-large">
    <div class="team margin-top-medium">
        <h1 class="heading-secondary">Meet Our team</h1>
    </div> -->
    <?php
        include("./includes/footer.php");
    ?>