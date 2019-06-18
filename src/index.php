<?php

require_once 'php/forms.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/main.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
    <title>Adela Portfolio Page</title>
    <link rel="icon" href="img/favicon2.png"  type="image/gif" sizes="32x32">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



</head>

<body>
    <header> <!--  NAV BAR here -->
        <div>
            <nav>
                <div>
                    <ul>
                        <img class="adelalogonav" src="img/logo.png" alt="adelalogo">
                        <!-- List -->
                        <li><a href="#home">Home</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#aboutme">About me</a></li>
                        <li><a href="#contact">Contact</a></li>
    
                    </ul>
    
                </div>
            </nav>
    
            <!-- Social media bar -->
            <div class="socialmedia-banner">
                <div class="socialmedia-banner_bar">
                    <a href="https://github.com/adspirkova"><img class="socialmedia-banner_bar_img" src="img/logo/github-sign.png" alt="github_icon_bar"></a>
                </div>
    
                <div class="socialmedia-banner_bar">
                    <a href="https://www.linkedin.com/in/adela-spirkova/"><img class="socialmedia-banner_bar_img"  src="img/logo/linkedin-sign.png" alt="linkedin_icon_bar"></a>
                </div>
    
            </div>
        </div>
    </header>

    <!-- Home page -->
    <section class="home" id="home">
         <!-- My avatar -->
        <div class="home__intro">
            <div class="avatar" data-aos="fade-right">
                <img class="rooster"src="img/animal-4166416_1920.jpg" alt="avatarphoto">
            </div>
            <div class="home__intro__text">
                <h1>Hi, I'm Adela Spirkova</h1>
                <p>Let's work together. I'm Full-Stack Developer and I'm here at your disposal.</p>
            </div>

            
            <!-- Home page path containers -->
            <div class="container home__intro__path">
                <div class="home__intro__path__box">
                    <h3>Discover</h3>
                    <p>Tell me about your project and we brainstorm together the features to create a plan for your product to launch.</p>

                </div>

                <div class="home__intro__path__box">
                    <h3>Design</h3>
                    <p>We design the wireframe and agree together how to create the best experience for your users to present your brand.</p>

                </div>

                <div class="home__intro__path__box">
                        <h3>Deploy</h3>
                        <p>We prototype and develop your product. We work together intensily to incorporate your feedback.</p>
                        
    
                    </div>

                <div class="home__intro__path__box">
                        <h3>Be Ready</h3>
                        <p>We deploy your product and now your website is ready to get the traction. Get out there and grow your audience.</p>
    
                    </div>

            </div>
        </div>

    </section>



    <!-- Skills page -->
    <section class="skills" id="skills">
        <div class="pagename">
            <h2>Skills</h2>
        </div>

        <!-- Bio section -->
        <div class="container skills__content">
            <div class="container skills__content__bio">
                <div>
                    <h2>Hi, I'm Adela Spirkova</h2>
    
                    <p>I am a starting web developer from Prague, Czech republic. I create beautiful professional websites using best practice accessibility. I enjoy turning complex problems into simple, beautiful and intuitive interface designs.</p>
                </div>
                    
                        <!-- Contact details -->
                        <div class="skills__content__bio__contactdetails">
                            <div class="skills__content__bio__contactdetails__detail">
                                    <i class="fas fa-envelope"></i>
                                    <h4>
                                        Email:
                                    </h4>
                                    <p>ad.spirkova@gmail.com</p>
                            </div>
    
                            <div class="skills__content__bio__contactdetails__detail">
                                    <i class="fas fa-map-marker-alt"></i>
                                        <h4>
                                            Location:
                                        </h4>
                                        <p>Prague, Czech republic</p>
                            </div>
                        </div>  
                         <!-- Social media icons  -->
                         <div class="container skills__content__bio_social">
                                <a href="https://www.linkedin.com/in/adela-spirkova/"><img class="icon" src="img/logo/linkedin.png" alt="linkedin_icon"></a>
                                <a href="https://github.com/adspirkova"><img class="icon" src="img/logo/github-logo.png" alt="github_icon"></a>
                                <a href="img/logo/IMG_0001.JPG"><img class="icon" src="img/logo/wechat.png" alt="wechat_icon"></a>
                            </div>
    
                        </div>

                        <!-- Update a footer with these -->

            <!-- Progress bars -->
            <div class="container progressbar">
                <div class="progressbar__line">
                    <div class="progressbar__line__text">
                        <p>HTML5, CSS3</p>
                    </div>
                    <div class="progressbar__line__score">
                        <span style="width: 98%">98%</span>
                    </div>
                </div>

                <div class="progressbar__line">
                        <div class="progressbar__line__text">
                            <p>JAVASCRIPT</p>
                        </div>
    
                        <div class="progressbar__line__score">
                            <span  style="width: 70%">70%</span>
                        </div>
                </div>
                
                <div class="progressbar__line">
                        <div class="progressbar__line__text">
                            <p>REACT</p>
                        </div>
    
                        <div class="progressbar__line__score">
                            <span  style="width: 60%">60%</span>
                        </div>
    
                </div>

                <div class="progressbar__line">
                        <div class="progressbar__line__text">
                            <p>jQuery</p>
                        </div>
    
                        <div class="progressbar__line__score">
                            <span  style="width: 70%">70%</span>
                        </div>
    
                </div>
                
                
                <div class="progressbar__line">
                        <div class="progressbar__line__text">
                            <p>PHP</p>
                        </div>
    
                        <div class="progressbar__line__score">
                            <span  style="width: 60%">60%</span>
                        </div>
    
                </div>

                <div class="progressbar__line">
                        <div class="progressbar__line__text">
                            <p>LARAVEL</p>
                        </div>
    
                        <div class="progressbar__line__score">
                            <span  style="width: 63%">63%</span>
                        </div>
    
                </div>

                <div class="progressbar__line">
                        <div class="progressbar__line__text">
                            <p>UX</p>
                        </div>
    
                        <div class="progressbar__line__score">
                            <span  style="width: 50%">50%</span>
                        </div>
    
                </div>
    
    

            </div>

        </div>

    </section>

    <!-- Portfolio page -->
    <section class=portfolio id="portfolio">
        <div class="pagename">
            <h2>Portfolio</h2>

        </div>

        <!-- First row -->
        <div class="container portfolioview">
            <div class="portfolioview__body">
                <div class="portfolioview__body__flex">
                    <div class="portfolioview__body__flex_box rightline" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                    data-aos-duration="1500">
                        <div>
                            <input type="image" src="img/FAVICON(1).png" alt="portfolioimage1">
                        </div>
                        <div>
                            <p>Description of hackathon project #1.</p>
                            <p>Description of hackathon project #1.</p>
                            <p>Description of hackathon project #1.</p>
                        </div>
                        <div >
                            <h5>Tech stack</h5>
                        </div>
        
                    </div>
        
                    <div class="portfolioview__body__flex_box rightline " data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="1500">
                        <div >
                            <input type="image" src="img/FAVICON(1).png" alt="portfolioimage2">
                        </div>
                        <div>
                            <p>Description of hackathon project #2.</p>
                            <p>Description of hackathon project #2.</p>
                            <p>Description of hackathon project #2.</p>
                        </div>
                        <div >
                            <h5>Tech stack</h5>
                        </div>
        
                    </div>
        
                    <div class="portfolioview__body__flex_box" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                    data-aos-duration="1500">
                        <div >
                            <input type="image" src="img/FAVICON(1).png" alt="portfolioimage3">
                        </div>
                        <div>
                            <p>Description of hackathon project #3.</p>
                            <p>Description of hackathon project #3.</p>
                            <p>Description of hackathon project #3.</p>
                        </div>
                        <div >
                            <h5>Tech stack</h5>
                        </div>
        
                    </div>
                </div>
                
                <!-- Second row -->
                <div class="portfolioview__body__flex" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                data-aos-duration="1500">
                    <div class="portfolioview__body__flex_box rightline">
                        <div >
                            <input type="image" src="img/FAVICON(1).png" alt="portfolioimage4">
                        </div>
                        <div>
                            <p>Description of hackathon project #4.</p>
                            <p>Description of hackathon project #4.</p>
                            <p>Description of hackathon project #4.</p>
                        </div>
                        <div >
                            <h5>Tech stack</h5>
                        </div>
        
                    </div>
        
                    <div class="portfolioview__body__flex_box rightline" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="1500">
                        <div >
                            <input type="image" src="img/FAVICON(1).png" alt="portfolioimage5">
                        </div>
                        <div>
                            <p>Description of hackathon project #5.</p>
                            <p>Description of hackathon project #5.</p>
                            <p>Description of hackathon project #5.</p>
                        </div>
                        <div >
                            <h5>Tech stack</h5>
                        </div>
        
                    </div>
        
                    <div class="portfolioview__body__flex_box" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                    data-aos-duration="1500">
                        <div >
                            <input type="image" src="img/FAVICON(1).png" alt="portfolioimage6">
                        </div>
                        <div>
                            <p>Description of hackathon project #6.</p>
                            <p>Description of hackathon project #6.</p>
                            <p>Description of hackathon project #6.</p>
                        </div>
                        <div class="portfolioproject">
                            <button id="Explorebutton">Explore</button>
                        </div>
        
                    </div>
                </div>
            </div>


        </div>

    </section>


    <!-- About me -->
    <section class="aboutme" id="aboutme">
        <div class="pagename">
            <h2>About me</h2>

        </div>

        <!-- About me picture -->

        <div class="container aboutme__body">
            <div class="aboutme__body__picture" data-aos="fade-right" data-aos-duration="1500">
                <img class="rooster"src="img/animal-4166416_1920.jpg" alt="aboutmepicture">
            </div>

            <!-- About me content -->

            <div class="aboutme__body__content" data-aos="fade-left" data-aos-duration="1500">
                <div>
                        <p>My name is <strong>Adela Spirkova</strong>. I am a full-stack web developer and enjoy learning new trends. <strong>I am developing user interfaces in JavaScript and React and backend of my projects in PHP and Laravel.</strong></p>

                        <p>
                            I am open to learning new technologies and enjoy working with people
                            who are as passionate about all web-related as me.
                        </p>
                        
                        <p>I have worked and studied in different countries but currently I am based in Prague, Czech Republic.</p> 
                        
                        <p>In my free time I enjoy running, cycling, reading or swimming.  If I do not develop, you can also meet me trekking in the mountains.</p>
                </div>

                <div>
                    <h3>Get in touch and let's do something great together.</h3>
                </div>

                <!-- Contact me button -->
                <div>
                    <button type="button" class="btn btn-outline-secondary" id="Contactmebutton">Contact me</button>
                </div>


            </div>

        </div>

        <!-- horizontal line -->
        <hr> 

    </section>


    <!-- Contact page -->
    <section class="contact" id="contact">
        <div class="pagename">
            <h2>Contact me</h2>
        </div>

        <div class="container contactme__body">

            <!-- Contact me banner -->
            <div class="contactme__body__banner">

                <!-- Phone -->
                <div class="contactinfo">
                        <div class="phonebigiconimg">
                            <i class="fas fa-phone"></i>
                        </div>

                        <div class="phonenumber">
                            <p>+420 123 456 789</p>

                        </div>

                        

                </div>

                <!-- Location -->

                <div class="contactinfo">
                        <a href="mailto:gmail@gmail.com">
                                <div class="emailbigiconimg ">
                                    <i class="fas fa-envelope"></i>
                                </div>
        
                                <div class="emailaddress">
                                    <p>gmail@gmail.com</p>
                                </div>
        
                        </a>
                    </div>

                <!-- Email -->

                <div class="contactinfo">
                            <div class="locationbigiconimg ">
                                    <i class="fas fa-map-marker-alt"></i>
                            </div>
    
                            <div class="locationaddress">
                                <p>Na Paloučku</p>
                                <p>Prague 4</p>
                                <p>Czech republic</p>
    
                            </div>
    
                 </div>
            </div>
                
            <!-- Contact form -->
            <div class="contactme__body__form" data-aos="zoom-in" data-aos-duration="2000">
                <form action="" method="POST">
                    <!-- Contact me inputs -->
                    <div>
                        <div>
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control" id="firstnameinputid" value="" placeholder="First Name *" required>
                            </div>
        
                            <div class="form-group">
                                <input type="text" name="surname" class="form-control" id="lastnameinputid" placeholder="Last Name *" required>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="emailinputid" placeholder="Email *" required>
                        </div>
    
                        <div class="form-group">
                            <input type="tel" name="phone"class="form-control" id="phoneinputid" placeholder="Phone">
                        </div>
                    </div>
                    <!-- Contact me message -->

                    <div class=" form-group contactformmessage">
                        <div class="contactformmessagetext">
                            <textarea name="long_text" class="form-control" id="messageinputid" placeholder="message"></textarea>
                            
                            
                        </div>

                        <div class="button">
                            <button type="submit" class="btn btn-outline-secondary" id="Submitbutton">Submit</button>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </section>

    <!-- Footer - list of social media -->
    <footer>

        <div class="footercontainer">
            <h2>Find me here</h2>
            <div class="socialmediaicons">
                <a href="https://www.linkedin.com/in/adela-spirkova/"><img src="img/logo/linkedin.png" alt="linkedin_icon"></a>
                <a href="https://github.com/adspirkova"><img src="img/logo/github-logo.png" alt="github_icon"></a>

            </div>
            <p>
                &copy Adela Spirkova 2019.
            </p>
            <a href="#home"><p>Back to the top</p></a>
        </div>
    </footer>

    <!-- Javascript -->

    <!-- Scrollreveal -->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script>
        
        document.addEventListener('DOMContentLoaded', () => {
        const hover = document.querySelector('.container');
        hover.addEventListener("mouseenter", ScrollReveal().reveal('.container', { delay: 400 },  { interval: 400 }, { easing: 'ease-in' }));
        console.log('DOM WORKS works');
        }); 


        document.addEventListener('DOMContentLoaded', () => {
        const hover = document.querySelector('.container');
        hover.addEventListener("mouseleave", ScrollReveal().reveal('.container', { opacity: 0 }));
        console.log('DOM WORKS ??');
        }); 

        document.addEventListener('DOMContentLoaded', () => {
        ScrollReveal().reveal('span', { delay: 800 },{ easing: 'ease-in' }, { interval: 10000},), { scale: 0.2 };
        console.log('DOM WORKShuhuhu ??');
        }); 

    </script>

    <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        
        AOS.init();
        console.log('AOS funguje');
        </script>

</body>
</html>
