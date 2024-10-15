<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations - Khalid Hamza</title>
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

        h1 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 40px;
            text-align: center;
            font-weight: 700;
        }

        .formation-card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            border-left: 5px solid var(--secondary-color);
        }

        .formation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
        }

        .formation-card h3 {
            color: var(--primary-color);
            font-size: 1.4rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .formation-card p {
            color: var(--text-color);
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .formation-date {
            font-style: italic;
            color: #6c757d;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .formation-date i {
            margin-right: 10px;
            color: var(--secondary-color);
        }

        .institution {
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .institution i {
            margin-right: 10px;
            color: var(--secondary-color);
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

        body.dark-mode .formation-card {
            background-color: rgba(60, 60, 60, 0.9);
            color: #f5f5f5;
        }

        body.dark-mode h1,
        body.dark-mode .formation-card h3 {
            color: #f5f5f5;
        }

        body.dark-mode .formation-card p {
            color: #e0e0e0;
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px;
            }
            h1 {
                font-size: 2rem;
            }
            .formation-card h3 {
                font-size: 1.2rem;
            }
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
                    <a class="nav-link active" href="{{ route('formation') }}"><i class="fas fa-graduation-cap"></i> Formation</a>
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
                    <a class="nav-link" href="{{ route('contact') }}"><i class="fas fa-envelope"></i> Contact</a>
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
    <h1 class="animate__animated animate__fadeInDown">Parcours de Formation</h1>
    
    <div class="row">
        @foreach($formations as $formation)
            <div class="col-lg-6 mb-4 animate__animated animate__fadeInUp">
                <div class="formation-card">
                    <h3>{{ $formation->title }}</h3>
                    <p class="institution">
                        <i class="fas fa-university"></i>
                        {{ $formation->institution }}
                    </p>
                    <p class="formation-date">
                        <i class="fas fa-calendar-alt"></i>
                        {{ $formation->start_date }} - {{ $formation->end_date ?? 'En cours' }}
                    </p>
                    <p>{{ $formation->description }}</p>
                </div>
            </div>
        @endforeach
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
</body>
</html>