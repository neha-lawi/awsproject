<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .about-section {
            padding: 50px 20px;
            flex: 1;
        }
        .about-text {
            text-align: justify;
        }
        .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: auto;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">AWS Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="<?php echo URL; ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?php echo URL; ?>/about">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Us Section -->
    <div class="container about-section">
        <div class="col-md-10 mx-auto">
            <h2 class="mb-4 text-center">About Us</h2>
            <p class="about-text">
                Welcome to <strong>AWS Project</strong>! We are committed to providing the best services in the industry.
                Our team is dedicated to delivering high-quality solutions to meet our customers' needs.
                With years of experience and a passion for innovation, we strive to exceed expectations and
                build long-term relationships with our clients.
            </p>
            <p class="about-text">
                We believe in excellence and innovation, ensuring that every project we undertake is executed with precision.
                Our experts specialize in cutting-edge technologies and industry best practices to deliver exceptional results.
            </p>
            <p class="about-text">
                Your success is our priority, and we take pride in being a trusted partner for businesses worldwide.
                Join us on this journey and experience the difference with <strong>AWS Project</strong>.
            </p>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 AWS Project. All Rights Reserved.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
