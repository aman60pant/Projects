<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PROJECT | SHRI SOLAR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />

    <!-- Icon Fonts -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        rel="stylesheet"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        rel="stylesheet"
    />

    <!-- Libraries -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom Styles -->
    <link href="css/style.css" rel="stylesheet" />
    <style>
        body {
            font-family: "Work Sans", sans-serif;
            color: #222;
            background-color: #f8f9fa;
        }

        h1,
        h2,
        h3,
        h5 {
            font-weight: 700;
            color: #004d00;
        }

        p.lead {
            font-size: 1.15rem;
            color: #333;
        }

        main {
            margin-top: 100px;
            margin-bottom: 60px;
        }

        /* Card styles */
        .project-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .project-card:hover,
        .project-card:focus-within {
            transform: translateY(-8px);
            box-shadow: 0 16px 30px rgba(0, 128, 0, 0.3);
        }

        .project-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .project-card:hover img,
        .project-card:focus-within img {
            transform: scale(1.05);
        }

        .project-card h3 {
            padding: 15px 20px 0 20px;
            font-size: 1.3rem;
            color: #006400;
        }

        /* Button styles */
        .btn-contact {
            margin: 15px 20px 20px 20px;
            width: calc(100% - 40px);
            font-weight: 600;
            background: linear-gradient(45deg, #007f00, #004d00);
            border: none;
            color: white;
            transition: background 0.3s ease;
        }

        .btn-contact:hover,
        .btn-contact:focus {
            background: linear-gradient(45deg, #004d00, #007f00);
            box-shadow: 0 6px 12px rgba(0, 77, 0, 0.5);
            color: #e6ffe6;
        }

        /* Section titles */
        .section-header {
            margin-top: 3rem;
            margin-bottom: 1.5rem;
            border-bottom: 3px solid #008000;
            padding-bottom: 0.3rem;
            font-size: 1.9rem;
            text-align: center;
        }

        /* Benefits list */
        .benefit-list h5 {
            color: #006400;
            margin-bottom: 0.8rem;
        }

        /* Responsive container max width */
        @media (min-width: 1400px) {
            main.container {
                max-width: 1300px;
            }
        }
    </style>
</head>

<body>
    <!-- Header Start  -->
    <?php
    include('include/header.php')
    ?>
    <!-- Header End  -->

    <!-- Main Content -->
    <main class="container">
        <header class="text-center mb-5">
            <h1 class="animate__animated animate__fadeInDown">Top Solar Company in Dehradun</h1>
            <p class="lead mx-auto animate__animated animate__fadeIn animate__delay-1s" style="max-width: 720px;">
                Shri Solar is dedicated to providing sustainable and efficient solar energy solutions for homes, businesses,
                and industries across Dehradun and Uttarakhand. Our high-quality solar panels help you harness solar power,
                cut energy bills, and contribute to a greener planet.
            </p>
        </header>

        <section aria-labelledby="projects-title" class="animate__animated animate__fadeInUp animate__delay-2s">
            <h2 id="projects-title" class="section-header">Some of Our Solar Panel Installations in Dehradun, Uttarakhand</h2>
            <div class="row g-4">
                <!-- Cards -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <article class="project-card h-100" tabindex="0">
                        <img src="img/solar1.jpg" alt="30KWp Solar Project in Dehradun" />
                        <h3>30KWp Solar Project</h3>
                        <a href="#" class="btn btn-contact" aria-label="Contact us about 30KWp Solar Project">Contact Us</a>
                    </article>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <article class="project-card h-100" tabindex="0">
                        <img src="img/solar2.jpg" alt="36 KWp Solar Project in Dehradun" />
                        <h3>36 KWp Solar Project</h3>
                        <a href="#" class="btn btn-contact" aria-label="Contact us about 36 KWp Solar Project">Contact Us</a>
                    </article>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <article class="project-card h-100" tabindex="0">
                        <img src="img/solar4.webp" alt="100 KWp Solar Project in Dehradun" />
                        <h3>100 KWp Dehradun</h3>
                        <a href="#" class="btn btn-contact" aria-label="Contact us about 100 KWp Dehradun Solar Project">Contact Us</a>
                    </article>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <article class="project-card h-100" tabindex="0">
                        <img src="img/solar5.jpg" alt="225KWp Solar Project in Dehradun" />
                        <h3>225KWp Solar Project</h3>
                        <a href="#" class="btn btn-contact" aria-label="Contact us about 225KWp Solar Project">Contact Us</a>
                    </article>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <article class="project-card h-100" tabindex="0">
                        <img src="img/solar6.jpg" alt="321 KWp Solar Project in Dehradun" />
                        <h3>321 KWp Solar Project</h3>
                        <a href="#" class="btn btn-contact" aria-label="Contact us about 321 KWp Solar Project">Contact Us</a>
                    </article>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <article class="project-card h-100" tabindex="0">
                        <img src="img/solar7.jpg" alt="435 KWp Solar Project in Dehradun" />
                        <h3>435 KWp Solar Project</h3>
                        <a href="#" class="btn btn-contact" aria-label="Contact us about 435 KWp Solar Project">Contact Us</a>
                    </article>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <article class="project-card h-100" tabindex="0">
                        <img src="img/solar8.webp" alt="100 KWp ONGC Solar Project in Dehradun" />
                        <h3>100 KWp ONGC DEHRADUN</h3>
                        <a href="#" class="btn btn-contact" aria-label="Contact us about 100 KWp ONGC Solar Project">Contact Us</a>
                    </article>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <article class="project-card h-100" tabindex="0">
                        <img src="img/solar9.webp" alt="100 KWp GCPO Solar Project in Dehradun" />
                        <h3>100 KWp GCPO</h3>
                        <a href="#" class="btn btn-contact" aria-label="Contact us about 100 KWp GCPO Solar Project">Contact Us</a>
                    </article>
                </div>
            </div>
        </section>

        <section
            aria-labelledby="why-choose-us"
            class="mt-5 px-3 px-md-0 animate__animated animate__fadeIn animate__delay-3s"
        >
            <h2 id="why-choose-us" class="section-header">Why Choose Us for Your Solar Energy Solutions in Dehradun?</h2>
            <p class="text-center mx-auto mb-4" style="max-width: 720px;">
                As a trusted solar company in Dehradun, we deliver products meeting the highest industry standards.
                Here's why we are the preferred choice for solar energy solutions:
            </p>

            <div class="row justify-content-center gx-5">
                <div class="col-md-6 col-lg-5">
                    <ul class="list-group list-group-flush benefit-list">
                        <li class="list-group-item">
                            <h5><i class="bi bi-check-circle-fill text-success me-2"></i>High-Quality Solar Panels</h5>
                        </li>
                        <li class="list-group-item">
                            <h5><i class="bi bi-check-circle-fill text-success me-2"></i>Custom Solar Solutions for Every Need</h5>
                        </li>
                        <li class="list-group-item">
                            <h5><i class="bi bi-check-circle-fill text-success me-2"></i>Cost-Effective Solar Systems</h5>
                        </li>
                        <li class="list-group-item">
                            <h5><i class="bi bi-check-circle-fill text-success me-2"></i>End-to-End Services</h5>
                        </li>
                        <li class="list-group-item">
                            <h5><i class="bi bi-check-circle-fill text-success me-2"></i>Sustainable Energy Solutions</h5>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <div id="foot&cpy-placeholder"></div>
    <?php
    include('include/footer.php')
    ?>
    <!-- Footer End -->

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
