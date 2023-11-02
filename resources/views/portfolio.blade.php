!

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nada Bakara Portfolio</title>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                @foreach ($profile as $pro_img)
                <img src="img/{{ $pro_img -> foto_profil }}" alt="" class="img-fluid rounded-circle">
                @endforeach
                <h1 class="text-light"><a href="index.html">Nada Bakara</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="https://www.facebook.com/nada.bakara.7" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/nada_bakara/" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/nada-bakara-941465294/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>

                <div class="header-buttons">
                    <a href="https://drive.google.com/drive/folders/10qIDxffh_NnY128dfuUerURm_rIvtP4-?usp=share_link" target="_blank" class="btn btn-primary">Download CV</a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Hello Everyone :)</h1>
            <p>I'm Nada Bakara as a <span class="typed" data-typed-items="Web Developer"></span></p>
        </div>
    </section>

    <main id="main">
        <section id="about" class="about">
            @foreach ($profile as $profiles)
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-right">
                            <img src="img/{{ $profiles -> foto_profil }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">

                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>

                                        <li><i class="bi bi-chevron-right"></i> <strong>Email: </strong> <span>{{ $profiles -> email }}</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $profiles -> no_hp }}</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $profiles -> birthday }}</span></li>

                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Age :</strong> <span>{{ $profiles -> age }}</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Gender : </strong> <span>{{ $profiles -> gender }}</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $profiles -> city }}</span></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p style="text-indent: 50px;">{{ $profiles -> about }}
                    </p>
                </div>
                <div>
                    <h5><Strong>Fun Facts</Strong></h5>
                    <h6><strong>Hobby :</strong> </h6>
                    <p>
                    <ul>
                        @php
                        $hobbies = explode(';', $profiles->hobby);
                        @endphp

                        @foreach ($hobbies as $hobby)
                        <li>{{ $hobby }}</li>
                        @endforeach
                    </ul>
                    </p>

                </div>
            </div>
            @endforeach
        </section>
        <section id="facts" class="facts">

            <div class="container">
                <div class="section-title">
                    <h2>What I Do</h2>
                </div>
                <div class="row">
                    @foreach ($do as $dos)
                    <div class="col-lg-6 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $dos->number }}" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>{{ $dos -> title }}</strong></p>
                            <p>{{ $dos -> description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
    </section>
    <section id="resume" class="resume">
    @foreach ($resumee as $res)
        <div class="container">
            <div class="section-title">
                <h2>Resume</h2>
                <p>{{ $res -> res_description }}</p>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4>Nada Hitado Bakara</h4>
                        <p><em>{{ $res -> summary }}</em></p>
                        <ul>
                            <li>{{ $res -> res_city }}</li>
                            <li>{{ $res -> res_no }}</li>
                            <li>{{ $res -> res_email }}</li>
                        </ul>
                    </div>

                    <h3 class="resume-title">Education</h3>
                    @foreach ($edu as $educate)
                    <div class="resume-item">
                        <h4>{{ $educate -> school_name }}</h4>
                        <h5>{{ $educate -> year }}</h5>
                        <p>{{ $educate -> school_place }}</p>
                    </div>
                    @endforeach
                </div>
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Experience and Certification</h3>
                    @foreach ($exp as $exps)
                    <div class="resume-item">
                        <h4>{{ $exps -> exp_title }}</h4>
                        <h5>{{ $exps -> exp_year }}</h5>
                        <p><em>{{ $exps -> exp_place }}</em></p>
                        <ul>
                            @php
                            $exps_desc = explode(';', $exps->exp_desc);
                            @endphp

                            @foreach ($exps_desc as $descs)
                            <li>{{ $descs }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        @endforeach
    </section>
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Programing Skills</h2>
                </div>

                <div class="row skills-content">
                    @foreach($skill_pro as $pro)
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="progress">
                            <span class="skill">{{ $pro -> name }} <i class="val">{{ $pro -> rate }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $pro -> rate }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="section-title mt-5">
                    <h2>Soft Skills</h2>
                </div>
                <div class="row skills-content">
                    @foreach($skill_soft as $soft)
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="progress">
                            <span class="skill">{{ $soft -> name }} <i class="val">{{ $soft -> rate }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $soft -> rate }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>
                        During my study in the Informatics undergraduate program, I have had experience several times working on projects. from project design to creating a Java GUI project
                    </p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-project">Project</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($port_app as $app)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="img/{{ $app -> port_images }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/{{ $app -> port_images }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="{{ $app -> detail }}" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach ($port_web as $web)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="img/{{ $web -> port_images }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/{{ $web -> port_images }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="{{ $web -> detail }}" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach($port_proj as $project)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-project">
                        <div class="portfolio-wrap">
                            <img src="img/{{ $project -> port_images }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/{{ $project -> port_images }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="{{ $project -> detail }}" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">
                <div class="text-center">
                    <h2><strong>Contact Me</strong></h2>
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 d-flex align-items-stretch">
                            <form action="" method="post" role="form" class="php-email-form" id="contact-form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Message</label>
                                    <textarea class="form-control" name="message" rows="10" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="sent-message" id="thank-you-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script>
            document.getElementById("contact-form").addEventListener("submit", function(event) {
                event.preventDefault();
                document.getElementById("thank-you-message").style.display = "block";
            });
        </script>
    </main>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/typed.js/typed.umd.js"></script>
    <script src="vendor/waypoints/noframework.waypoints.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="js/main.js"></script>

</body>

</html>