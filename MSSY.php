<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PROJECT | SHRI SOLAR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        p {
            color: black;
        }

        .link {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-weight: bold;
            font-size: 25px;
            color: rgb(96, 236, 96);
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            text-align: center;
            text-decoration: underline;
            transition: color 0.3s ease;
        }

        .link:hover {
            color: yellow;
            /* change to any hover color */
        }

        h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            text-align: center;
        }
    </style>
</head>


<body>
    <!-- Header Start  -->
    <?php
    include('include/header.php')
    ?>
    <!-- Header End  -->

    <!-- Image -->
    <div class="row position-relative">
        <img src="img/installing-solar-panels.jpg" alt="Installation of solar panels"
            style="height: 500px; width: 100%; object-fit: cover;">
        <h1>
            Mukhayamantri Saur Swarojgar Yojana - MSSY
        </h1>
        <a href="index.html" class="link" ;>Home</a>
    </div>
    <!-- Image End -->

    <!-- Details about MSSY -->
    <div class="col-lg-12 pt-5" style="padding: 0 120px;">
        <h2 style="font-size: 30px;">Mukhayamantri Saur Swarojgar Yojana (MSSY)</h2>
        <p>The Mukhya Mantri Saur Swarojgar Yojana (MSSY) is a solar self-employment scheme introduced by the Government
            of Uttarakhand, India. This initiative aims to promote renewable energy while providing sustainable
            livelihood opportunities for the state's residents.</p>
        <h2 style="font-size: 23px;">Objectives:</h2>
        <ol style="color: black;">
            <li>Promotion of Solar Energy: Encourages the use of clean and renewable energy to address environmental
                concerns.</li>
            <li>Employment Generation: Provides self-employment opportunities for residents, especially in rural areas.
            </li>
            <li>Boost to Economy: Enhances the state’s renewable energy capacity and supports the energy sector.</li>
            <li>Rural Development: Focuses on reducing unemployment and empowering rural youth and farmers.</li>
        </ol>
        <h2 style="font-size: 23px;">Key Features:</h2>
        <ol style="color: black;">
            <li>Installation of Solar Power Plants:</li>
            <ul>
                <li>Individuals are encouraged to set up 25 kW to 2 MW capacity solar plants on their land.</li>
                <li>The electricity generated is sold to Uttarakhand Power Corporation Limited (UPCL) under a power
                    purchase agreement (PPA).</li>
            </ul>
            <li>Target Beneficiaries:</li>
            <ul>
                <li>Unemployed youth, small farmers, and others with access to suitable land for setting up solar
                    panels.</li>
            </ul>
            <li>Financial Assistance:</li>
            <ul>
                <li>Loans and subsidies are provided to make solar projects affordable.</li>
                <li>The Uttarakhand government facilitates the process of availing financial support from banks.</li>
            </ul>
            <li>Income Generation:</li>
            <ul>
                <li>The scheme guarantees an annual income from selling electricity to UPCL, ensuring long-term
                    financial stability.</li>
            </ul>
            <li>Simplified Procedures:</li>
            <ul>
                <li>Streamlined application process through a dedicated portal.</li>
                <li>Support for technical guidance and infrastructure development.</li>
            </ul>
        </ol>
        <h2 style="font-size: 23px;">Benifits:</h2>
        <ol style="color: black;">
            <li>Sustainable Income Source: Landowners earn a steady income by utilizing idle land.</li>
            <li>Promotes renewable energy production in the state.</li>
            <li>Reduces dependency on fossil fuels and lowers carbon emissions.</li>
        </ol>
    </div>
    <!-- Details about MSSY End-->

    <!-- Footer and Copyright -->
    <div id="foot&cpy-placeholder"></div>
    <?php
    include('include/footer.php')
    ?>
    <!-- Copyright and Footer End -->

</body>

</html>