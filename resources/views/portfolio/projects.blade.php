<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets - Khalid Hamza</title>
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
            --bg-color: #ecf0f1;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            min-height: 100vh;
            padding-top: 80px;
        }

        .navbar {
            background-color: var(--primary-color);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: #ffffff;
            transition: color 0.3s ease;
        }

        .navbar-brand:hover {
            color: var(--secondary-color);
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            font-weight: 500;
            margin: 0 15px;
            transition: color 0.3s ease;
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

        .container {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 50px;
            margin-top: 30px;
        }

        h1 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 40px;
            text-align: center;
            font-weight: 700;
            position: relative;
        }

        h1::after {
            content: '';
            display: block;
            width: 100px;
            height: 3px;
            background: var(--secondary-color);
            margin: 20px auto 0;
        }

        .project-card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            border-left: 5px solid var(--secondary-color);
            position: relative;
            overflow: hidden;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: all 0.5s;
        }

        .project-card:hover::before {
            left: 100%;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .project-card h3 {
            color: var(--primary-color);
            font-size: 1.4rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .project-card p {
            color: var(--text-color);
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .project-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .project-meta i {
            margin-right: 5px;
            color: var(--secondary-color);
        }

        .btn-github {
            background-color: var(--primary-color);
            color: #ffffff;
            border-radius: 25px;
            padding: 10px 20px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-github:hover {
            background-color: var(--secondary-color);
            color: #ffffff;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px;
            }

            h1 {
                font-size: 2rem;
            }

            .project-card h3 {
                font-size: 1.2rem;
            }
        }

        body.dark-mode {
            background-color: #1a1a1a;
            color: #f5f5f5;
        }

        body.dark-mode .navbar {
            background-color: #2a2a2a;
        }

        body.dark-mode .container {
            background-color: #2a2a2a;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        body.dark-mode h1,
        body.dark-mode .project-card h3 {
            color: #f5f5f5;
        }

        body.dark-mode .project-card {
            background-color: #3a3a3a;
            border-left-color: var(--secondary-color);
        }

        body.dark-mode .project-card p {
            color: #d1d1d1;
        }

        body.dark-mode .project-meta {
            color: #b0b0b0;
        }

        body.dark-mode .btn-github {
            background-color: var(--secondary-color);
        }

        body.dark-mode .btn-github:hover {
            background-color: var(--accent-color);
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
                    <a class="nav-link active" href="{{ route('projects') }}"><i class="fas fa-project-diagram"></i> Projets</a>
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

<!-- Projects Section -->
<div class="container">
    <h1 class="animate__animated animate__fadeInDown">Mes Projets GitHub</h1>
    <div class="row">
        @foreach($projects as $project)
        <div class="col-md-6 mb-4">
            <div class="project-card animate__animated animate__fadeInUp">
                <h3>{{ $project['name'] }}</h3>
                <p>{{ $project['description'] ?? 'Aucune description disponible.' }}</p>
                <div class="project-meta">
                    <span><i class="fas fa-code-branch"></i> {{ $project['language'] ?? 'Non spécifié' }}</span>
                    <span><i class="fas fa-star"></i> {{ $project['stargazers_count'] }}</span>
                    <span><i class="fas fa-code-fork"></i> {{ $project['forks_count'] }}</span>
                </div>
                <a href="{{ $project['html_url'] }}" target="_blank" class="btn btn-github">
                    <i class="fab fa-github"></i> Voir sur GitHub
                </a>
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
                $('.navbar').css('background-color', 'rgba(44, 62, 80, 0.9)');
            } else {
                $('.navbar').css('background-color', 'var(--primary-color)');
            }
        });

        // Add animation to elements when they come into view
        $(window).scroll(function() {
            $('.animate__animated').each(function(){
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                if (elementPos < topOfWindow + $(window).height() - 50) {
                    $(this).addClass('animate__fadeInUp');
                }
            });
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