<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khalid Hamza - Portfolio</title>
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
            text-align: center;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        .profile-pic {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-bottom: 30px;
            border: 5px solid var(--secondary-color);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-pic:hover {
            transform: scale(1.05) rotate(5deg);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 3.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .description {
            font-size: 1.2rem;
            color: var(--text-color);
            margin-bottom: 40px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.8;
        }

        .bienvenue {
            font-size: 1.4rem;
            color: var(--secondary-color);
            margin-bottom: 30px;
            font-weight: 500;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .contact-btn, .cv-btn {
            padding: 12px 30px;
            background-color: var(--secondary-color);
            color: #ffffff;
            border: none;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin: 0;
            position: relative;
            overflow: hidden;
            flex: 0 1 auto;
            min-width: 180px;
        }

        .contact-btn::before, .cv-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: all 0.5s;
        }

        .contact-btn:hover::before, .cv-btn:hover::before {
            left: 100%;
        }

        .contact-btn:hover, .cv-btn:hover {
            background-color: var(--accent-color);
            color: #ffffff;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px;
            }

            h1 {
                font-size: 2.5rem;
            }

            .description {
                font-size: 1rem;
            }
        }
        
        @media (max-width: 576px) {
            .button-container {
                flex-direction: column;
                align-items: center;
            }

            .contact-btn, .cv-btn {
                width: 100%;
                max-width: 250px;
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
        body.dark-mode .description,
        body.dark-mode .bienvenue {
            color: #f5f5f5;
        }

        body.dark-mode .contact-btn,
        body.dark-mode .cv-btn {
            background-color: var(--secondary-color);
        }

        body.dark-mode .contact-btn:hover,
        body.dark-mode .cv-btn:hover {
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
                    <a class="nav-link active" href="{{ route('home') }}"><i class="fas fa-home"></i> Accueil</a>
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
    <img src="{{ asset('images/profile.jpeg') }}" alt="Photo de Profil" class="profile-pic animate__animated animate__fadeIn">
    <h1 class="animate__animated animate__fadeInDown">Khalid Hamza</h1>
    <p class="description animate__animated animate__fadeInUp">
        Développeur Full Stack junior passionné par l'innovation et la création de solutions web performantes. 
        Avec une solide formation en développement et une curiosité insatiable pour les nouvelles technologies, 
        je suis prêt à relever des défis stimulants et à apporter ma contribution à des projets ambitieux.
    </p>
    <p class="bienvenue animate__animated animate__fadeIn animate__delay-1s">Bienvenue sur mon portfolio !</p>
    <div class="button-container">
        <a href="{{ route('contact') }}" class="contact-btn animate__animated animate__fadeInUp animate__delay-1s">Contactez-moi</a>
        <button type="button" class="cv-btn animate__animated animate__fadeInUp animate__delay-1s" data-bs-toggle="modal" data-bs-target="#cvModal">
            Voir mon CV
        </button>
    </div>
</div>

<!-- Modal pour le CV -->
<div class="modal fade" id="cvModal" tabindex="-1" aria-labelledby="cvModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cvModalLabel">Mon CV</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Inclusion du fichier PDF dans l'iframe -->
        <iframe src="{{ asset('Files/hamza.khalid_cv.pdf') }}" width="100%" height="500px"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
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