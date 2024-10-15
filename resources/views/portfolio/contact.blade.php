<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Khalid Hamza</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --text-color: #333;
            --bg-color: rgba(236, 240, 241, 0.8);
            --bg-color-dark: rgba(26, 26, 26, 0.8);
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            min-height: 100vh;
            transition: color 0.3s ease;
            background-image: url('/placeholder.svg?height=1080&width=1920');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .navbar {
            background-color: rgba(44, 62, 80, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            transition: all 0.3s ease;
            top: 0;
            position: sticky;
            z-index: 1000;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            font-weight: 500;
            margin: 0 15px;
            transition: all 0.3s ease;
            position: relative;
            display: flex;
            align-items: center;
        }

        .navbar-nav .nav-link i {
            margin-right: 5px;
            font-size: 1.1em;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--secondary-color);
            transition: width 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .container {
            background: var(--bg-color);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 50px;
            margin-top: 30px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        h1, h2 {
            color: var(--primary-color);
            margin-bottom: 40px;
            text-align: center;
            font-weight: 700;
        }

        h1 { font-size: 2.5rem; }
        h2 { font-size: 2rem; }

        .contact-card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: var(--text-color);
            display: block;
            border-left: 5px solid var(--secondary-color);
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
        }

        .contact-card i {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .contact-card:hover i {
            color: var(--accent-color);
            transform: scale(1.1);
        }

        .form-label {
            font-weight: 600;
            color: var(--primary-color);
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #ced4da;
            transition: all 0.3s ease;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .form-control:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
            background-color: rgba(255, 255, 255, 0.9);
        }

        .btn-primary {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            border-radius: 10px;
            padding: 10px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .container { padding: 30px; }
            h1 { font-size: 2rem; }
            h2 { font-size: 1.5rem; }
        }

        body.dark-mode {
            color: #f5f5f5;
            background-image: url('/placeholder.svg?height=1080&width=1920&darkMode=true');
        }

        body.dark-mode .navbar {
            background-color: rgba(26, 26, 26, 0.9);
        }

        body.dark-mode .container {
            background-color: var(--bg-color-dark);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        body.dark-mode .contact-card {
            background-color: rgba(60, 60, 60, 0.9);
            color: #f5f5f5;
        }

        body.dark-mode .form-control {
            background-color: rgba(60, 60, 60, 0.8);
            border-color: #4a4a4a;
            color: #f5f5f5;
        }

        body.dark-mode .form-control:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
            background-color: rgba(60, 60, 60, 0.9);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode .form-label {
            color: #f5f5f5;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Khalid Hamza</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('formation') }}"><i class="fas fa-graduation-cap"></i> Formation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('skills') }}"><i class="fas fa-cogs"></i> Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('experience') }}"><i class="fas fa-briefcase"></i> Expériences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('projects') }}"><i class="fas fa-project-diagram"></i> Projets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('contact') }}"><i class="fas fa-envelope"></i> Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="dark-mode-toggle">
                        <i class="fas fa-moon" id="theme-icon"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenu principal -->
<div class="container">
    <h1 class="animate__animated animate__fadeInDown">Contactez-moi</h1>
    
    <!-- Formulaire de contact -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 animate__animated animate__fadeInUp">
            <h2 class="mb-4">Formulaire de Contact</h2>
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone">
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Sujet</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Coordonnées -->
    <h2 class="mb-4">Mes Coordonnées</h2>
    <div class="row justify-content-center animate__animated animate__fadeInUp">
        @if(!empty($contact->github))
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="https://github.com/{{ $contact->github }}" target="_blank" class="contact-card text-center">
                <i class="fab fa-github mb-3"></i>
                <h3 class="h5">GitHub</h3>
                <p>{{ $contact->github }}</p>
            </a>
        </div>
        @endif
        @if(!empty($contact->linkedin))
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="https://www.linkedin.com/in/{{ $contact->linkedin }}" target="_blank" class="contact-card text-center">
                <i class="fab fa-linkedin mb-3"></i>
                <h3 class="h5">LinkedIn</h3>
                <p>{{ $contact->linkedin }}</p>
            </a>
        </div>
        @endif
        @if(!empty($contact->telephone))
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="tel:{{ $contact->telephone }}" class="contact-card text-center">
                <i class="fas fa-phone mb-3"></i>
                <h3 class="h5">Téléphone</h3>
                <p>{{ $contact->telephone }}</p>
            </a>
        </div>
        @endif
        @if(!empty($contact->email))
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="mailto:{{ $contact->email }}" class="contact-card text-center">
                <i class="fas fa-envelope mb-3"></i>
                <h3 class="h5">Email</h3>
                <p>{{ $contact->email }}</p>
            </a>
        </div>
        @endif
        @if(!empty($contact->facebook))
        <div class="col-md-4 col-sm-6 mb-4">
            <a  href="https://www.facebook.com/{{ $contact->facebook }}" target="_blank" class="contact-card text-center">
                <i class="fab fa-facebook mb-3"></i>
                <h3 class="h5">Facebook</h3>
                <p>{{ $contact->facebook }}</p>
            </a>
        </div>
        @endif
        @if(!empty($contact->instagram))
        <div class="col-md-4 col-sm-6 mb-4">
            <a  href="https://www.instagram.com/{{ $contact->instagram }}" target="_blank" class="contact-card text-center">
                <i class="fab fa-instagram mb-3"></i>
                <h3 class="h5">Instagram</h3>
                <p>{{ $contact->instagram }}</p>
            </a>
        </div>
        @endif
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('.navbar-nav .nav-link').hover(function() {
            $(this).addClass('animate__animated animate__pulse');
        }, function() {
            $(this).removeClass('animate__animated animate__pulse');
        });

        // Smooth scrolling for anchor links
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        });

        // Navbar color change on scroll
        $(window).scroll(function() {
            if ($(window).scrollTop() > 50) {
                $('.navbar').css({
                    'padding': '10px 0',
                    'background-color': 'rgba(44, 62, 80, 0.98)'
                });
            } else {
                $('.navbar').css({
                    'padding': '15px 0',
                    'background-color': 'rgba(44, 62, 80, 0.95)'
                });
            }
        });

        // Animate elements when they come into view
        function animateElements() {
            $('.animate__animated').each(function(){
                var elementPosition = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (elementPosition < topOfWindow + windowHeight - 50) {
                    $(this).addClass('animate__fadeInUp');
                }
            });
        }

        // Initial call to animate elements
        animateElements();

        // Animate elements on scroll
        $(window).scroll(function() {
            animateElements();
        });

        // Dark mode toggle
        const toggle = document.getElementById('dark-mode-toggle');
        const themeIcon = document.getElementById('theme-icon');
        
        // Check for saved theme preference
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            document.body.classList.add(savedTheme);
            themeIcon.classList.toggle('fa-moon', savedTheme === 'dark-mode');
            themeIcon.classList.toggle('fa-sun', savedTheme !== 'dark-mode');
        }

        // Toggle dark mode on icon click
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            document.body.classList.toggle('dark-mode');
            const isDarkMode = document.body.classList.contains('dark-mode');
            
            // Change icon based on the theme
            themeIcon.classList.toggle('fa-moon', !isDarkMode);
            themeIcon.classList.toggle('fa-sun', isDarkMode);

            // Save the preference
            localStorage.setItem('theme', isDarkMode ? 'dark-mode' : '');
        });
    });
</script>
<script>
    $(document).ready(function() {
        // ... other script content ...

        // Navbar color change on scroll
        $(window).scroll(function() {
            if ($(window).scrollTop() > 50) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });

        // ... rest of the script content ...
    });
</script>

</body>
</html>