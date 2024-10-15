<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences - Khalid Hamza</title>
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
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 40px;
            font-weight: 700;
            text-align: center;
        }

        h2 {
            font-size: 2rem;
            color: var(--secondary-color);
            margin-top: 40px;
            margin-bottom: 30px;
            font-weight: 600;
            text-align: center;
            position: relative;
        }

        h2::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background: var(--secondary-color);
            margin: 10px auto 0;
        }

        .skill-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
            height: 100%;
        }

        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .skill-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .skill-content {
            padding: 20px;
        }

        .skill-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .skill-level {
            background-color: #e9ecef;
            border-radius: 10px;
            height: 10px;
            overflow: hidden;
        }

        .skill-level-bar {
            height: 100%;
            background-color: var(--secondary-color);
            border-radius: 10px;
            transition: width 1s ease-in-out;
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px;
            }

            h1 {
                font-size: 2.5rem;
            }

            h2 {
                font-size: 1.8rem;
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
        body.dark-mode h2,
        body.dark-mode .skill-name {
            color: #f5f5f5;
        }

        body.dark-mode .skill-card {
            background-color: #3a3a3a;
        }

        body.dark-mode .skill-level {
            background-color: #4a4a4a;
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
                    <a class="nav-link active" href="{{ route('skills') }}"><i class="fas fa-cogs"></i> Compétences</a>
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

<!-- Contenu des compétences -->
<div class="container">
    <h1 class="animate__animated animate__fadeInDown">Mes Compétences</h1>

    <!-- Compétences groupées par type -->
    @foreach($skills->groupBy('type') as $type => $skillsGroup)
        <h2 class="animate__animated animate__fadeInUp">{{ $type }}</h2>
        <div class="row g-4">
            @foreach($skillsGroup as $skill)
                <div class="col-md-4 col-sm-6 animate__animated animate__fadeInUp">
                    <div class="skill-card">
                        <img src="{{ $skill->image_url }}" alt="{{ $skill->name }}" class="skill-image">
                        <div class="skill-content">
                            <h3 class="skill-name">{{ $skill->name }}</h3>
                            <div class="skill-level">
                                <div class="skill-level-bar" style="width: 0%;"></div>
                            </div>
                            <p class="mt-2 text-muted">Niveau: <span class="skill-level-text">0</span>/100</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
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

        // Animate skill bars when they come into view
        function animateSkillBars() {
            $('.skill-card').each(function(){
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                
                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    var skillBar = $(this).find('.skill-level-bar');
                    var skillLevel = parseInt(skillBar.parent().next().find('.skill-level-text').text());
                    skillBar.css('width', skillLevel + '%');
                    
                    var counter = 0;
                    var interval = setInterval(function() {
                        if (counter >= skillLevel) {
                            clearInterval(interval);
                        } else {
                            counter++;
                            skillBar.parent().next().find('.skill-level-text').text(counter);
                        }
                    }, 20);
                }
            });
        }

        // Initial call to animate skill bars
        animateSkillBars();

        // Animate skill bars on scroll
        $(window).scroll(function() {
            animateSkillBars();
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