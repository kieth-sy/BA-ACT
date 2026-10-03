<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AIM Smile Dental Clinic</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">

        <a class="navbar-brand" href="index.php">


            <div>
                <span class="brand-name">AIM Smile</span>
                <small>Dental Clinic</small>
            </div>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu"
        >
            <i class="bi bi-list"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#dentists">Dentists</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

            </ul>

            <div class="nav-buttons">
                <a href="login.php" class="btn-login">
                    Login
                </a>

                <a href="register.php" class="btn-register">
                    Register
                </a>
            </div>

        </div>
    </div>
</nav>


<!-- ================= HERO ================= -->

<section class="hero" id="home">

    <div class="container">

        <div class="row align-items-center">

            <!-- LEFT -->

            <div class="col-lg-6 hero-content">

                <div class="hero-badge">
                    <i class="bi bi-shield-check"></i>
                    Patient-Centered Dental Care
                </div>

                <h1>
                    Your smile deserves
                    <span>better care.</span>
                </h1>

                <p>
                    Welcome to AIM Smile Dental Clinic — a modern dental
                    care space where comfort, prevention, and a healthy
                    smile come together.
                </p>

                <div class="hero-buttons">

                    <a href="login.php" class="btn-main">
                        <i class="bi bi-calendar2-check"></i>
                        Book a Visit
                    </a>

                    <a href="#services" class="btn-outline">
                        Explore Services
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

                <div class="hero-trust">

                    <div class="trust-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Gentle Care</span>
                    </div>

                    <div class="trust-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Modern Approach</span>
                    </div>

                    <div class="trust-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Patient Focused</span>
                    </div>

                </div>

            </div>


            <!-- RIGHT -->

            <div class="col-lg-6 hero-image-column">

                <div class="hero-image-wrapper">

                    <img
                        src="https://images.unsplash.com/photo-1609840114035-3c981b782dfe?auto=format&fit=crop&w=1000&q=85"
                        alt="Dental Care"
                    >

                    <div class="floating-card appointment-card">

                        <div class="floating-icon">
                            <i class="bi bi-calendar-heart"></i>
                        </div>

                        <div>
                            <small>Dental Care</small>
                            <strong>Made Comfortable</strong>
                        </div>

                    </div>

                    <div class="floating-card smile-card">

                        <i class="bi bi-emoji-smile"></i>

                        <div>
                            <strong>Healthy Smile</strong>
                            <small>Starts with proper care</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= QUICK INFO ================= -->

<section class="quick-info">

    <div class="container">

        <div class="quick-grid">

            <div class="quick-item">

                <div class="quick-icon">
                    <i class="bi bi-clock"></i>
                </div>

                <div>
                    <span>Clinic Hours</span>
                    <strong>Monday – Saturday</strong>
                    <small>9:00 AM – 6:00 PM</small>
                </div>

            </div>


            <div class="quick-item">

                <div class="quick-icon">
                    <i class="bi bi-geo-alt"></i>
                </div>

                <div>
                    <span>Our Location</span>
                    <strong>Visit AIM Smile</strong>
                    <small>Convenient dental care near you</small>
                </div>

            </div>


            <div class="quick-item">

                <div class="quick-icon">
                    <i class="bi bi-person-heart"></i>
                </div>

                <div>
                    <span>Our Approach</span>
                    <strong>Comfort First</strong>
                    <small>Care designed around patients</small>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= SERVICES ================= -->

<section class="section services-section" id="services">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                WHAT WE OFFER
            </span>

            <h2>
                Complete care for
                <span>your smile.</span>
            </h2>

            <p>
                From regular checkups to smile-enhancing treatments,
                AIM Smile provides dental services designed to support
                your oral health and confidence.
            </p>

        </div>


        <div class="row g-4">

            <!-- Service 1 -->

            <div class="col-md-6 col-lg-4">

                <div class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-search-heart"></i>
                    </div>

                    <span class="service-number">01</span>

                    <h3>Dental Checkup</h3>

                    <p>
                        Regular examinations to monitor your oral health
                        and identify dental concerns early.
                    </p>

                    <a href="login.php">
                        Learn More
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Service 2 -->

            <div class="col-md-6 col-lg-4">

                <div class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-stars"></i>
                    </div>

                    <span class="service-number">02</span>

                    <h3>Teeth Cleaning</h3>

                    <p>
                        Professional cleaning that helps remove plaque
                        buildup and supports a healthier smile.
                    </p>

                    <a href="login.php">
                        Learn More
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Service 3 -->

            <div class="col-md-6 col-lg-4">

                <div class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-brightness-high"></i>
                    </div>

                    <span class="service-number">03</span>

                    <h3>Teeth Whitening</h3>

                    <p>
                        Smile-enhancing care designed to help improve
                        the appearance of your teeth.
                    </p>

                    <a href="login.php">
                        Learn More
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Service 4 -->

            <div class="col-md-6 col-lg-4">

                <div class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-shield-plus"></i>
                    </div>

                    <span class="service-number">04</span>

                    <h3>Dental Restoration</h3>

                    <p>
                        Care focused on restoring damaged teeth and
                        maintaining everyday oral function.
                    </p>

                    <a href="login.php">
                        Learn More
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Service 5 -->

            <div class="col-md-6 col-lg-4">

                <div class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-grid-3x3-gap"></i>
                    </div>

                    <span class="service-number">05</span>

                    <h3>Orthodontic Care</h3>

                    <p>
                        Dental alignment services focused on creating
                        a healthier and more balanced smile.
                    </p>

                    <a href="login.php">
                        Learn More
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Service 6 -->

            <div class="col-md-6 col-lg-4">

                <div class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-heart-pulse"></i>
                    </div>

                    <span class="service-number">06</span>

                    <h3>Preventive Care</h3>

                    <p>
                        Personalized guidance to help you maintain
                        good oral hygiene between dental visits.
                    </p>

                    <a href="login.php">
                        Learn More
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= ABOUT ================= -->

<section class="about-section" id="about">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="about-image">

                    <img
                        src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=1000&q=85"
                        alt="AIM Smile Dental Clinic"
                    >

                    <div class="experience-card">

                        <strong>AIM</strong>

                        <span>
                            Smile-focused<br>
                            dental care
                        </span>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="about-content">

                    <span class="section-label">
                        ABOUT AIM SMILE
                    </span>

                    <h2>
                        More than dental care,
                        <span>it's about confidence.</span>
                    </h2>

                    <p>
                        AIM Smile Dental Clinic is designed around one
                        simple idea: dental care should feel comfortable,
                        clear, and accessible.
                    </p>

                    <p>
                        Our goal is to provide a welcoming environment
                        where patients can understand their dental needs
                        and take an active role in maintaining their smile.
                    </p>


                    <div class="about-points">

                        <div>
                            <i class="bi bi-check2-circle"></i>

                            <div>
                                <strong>Patient-centered care</strong>
                                <small>
                                    Your comfort and concerns matter.
                                </small>
                            </div>
                        </div>


                        <div>
                            <i class="bi bi-check2-circle"></i>

                            <div>
                                <strong>Clear communication</strong>
                                <small>
                                    Understand your care before every visit.
                                </small>
                            </div>
                        </div>


                        <div>
                            <i class="bi bi-check2-circle"></i>

                            <div>
                                <strong>Modern dental experience</strong>
                                <small>
                                    A clean and comfortable clinic environment.
                                </small>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= HOW IT WORKS ================= -->

<section class="section process-section">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                SIMPLE PROCESS
            </span>

            <h2>
                Your dental visit,
                <span>made simple.</span>
            </h2>

        </div>


        <div class="process-grid">

            <div class="process-card">

                <span>01</span>

                <div class="process-icon">
                    <i class="bi bi-person-plus"></i>
                </div>

                <h3>Create an Account</h3>

                <p>
                    Register your patient account to access your
                    dental care information.
                </p>

            </div>


            <div class="process-line"></div>


            <div class="process-card">

                <span>02</span>

                <div class="process-icon">
                    <i class="bi bi-calendar2-check"></i>
                </div>

                <h3>Request a Visit</h3>

                <p>
                    Choose the service you need and provide your
                    preferred appointment details.
                </p>

            </div>


            <div class="process-line"></div>


            <div class="process-card">

                <span>03</span>

                <div class="process-icon">
                    <i class="bi bi-emoji-smile"></i>
                </div>

                <h3>Care for Your Smile</h3>

                <p>
                    Visit the clinic and receive care focused on
                    your dental needs.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- ================= CTA ================= -->

<section class="cta-section">

    <div class="container">

        <div class="cta-box">

            <div class="cta-content">

                <span>
                    READY FOR YOUR NEXT VISIT?
                </span>

                <h2>
                    Take the first step
                    toward a healthier smile.
                </h2>

                <p>
                    Create your patient account and start managing
                    your dental care with AIM Smile.
                </p>

                <a href="register.php" class="btn-cta">
                    Create Patient Account
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>

            <div class="cta-decoration">
                <i class="bi bi-tooth"></i>
            </div>

        </div>

    </div>

</section>


<!-- ================= CONTACT ================= -->

<section class="contact-section" id="contact">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-5">

                <span class="section-label">
                    GET IN TOUCH
                </span>

                <h2>
                    We're here for
                    <span>your smile.</span>
                </h2>

                <p>
                    Have questions about our services? Contact AIM Smile
                    Dental Clinic for more information.
                </p>

            </div>


            <div class="col-lg-7">

                <div class="contact-grid">

                    <div class="contact-item">

                        <div class="contact-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>

                        <div>
                            <span>Location</span>
                            <strong>123 Smile Avenue</strong>
                            <small>Your City, Philippines</small>
                        </div>

                    </div>


                    <div class="contact-item">

                        <div class="contact-icon">
                            <i class="bi bi-telephone"></i>
                        </div>

                        <div>
                            <span>Phone</span>
                            <strong>(02) 1234-5678</strong>
                            <small>Monday – Saturday</small>
                        </div>

                    </div>


                    <div class="contact-item">

                        <div class="contact-icon">
                            <i class="bi bi-envelope"></i>
                        </div>

                        <div>
                            <span>Email</span>
                            <strong>hello@aimsmileclinic.com</strong>
                            <small>We'll respond as soon as possible</small>
                        </div>

                    </div>


                    <div class="contact-item">

                        <div class="contact-icon">
                            <i class="bi bi-clock"></i>
                        </div>

                        <div>
                            <span>Clinic Hours</span>
                            <strong>9:00 AM – 6:00 PM</strong>
                            <small>Monday – Saturday</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <div class="container">

        <div class="footer-top">

            <div class="footer-brand">

                <div class="brand-logo">
                    <i class="bi bi-heart-pulse-fill"></i>
                </div>

                <div>
                    <strong>AIM Smile</strong>
                    <span>Dental Clinic</span>
                </div>

            </div>


            <p>
                Modern dental care with a patient-first approach.
            </p>

        </div>


        <div class="footer-bottom">

            <span>
                © 2026 AIM Smile Dental Clinic. All rights reserved.
            </span>

            <div>
                <a href="#home">Home</a>
                <a href="#services">Services</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>

        </div>

    </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>