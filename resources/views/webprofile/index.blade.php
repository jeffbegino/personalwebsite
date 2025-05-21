<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jayferson Begino</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- The Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2 class="section-title">Log in</h2>
            
            <!-- Login Form -->
            <form method="POST" action="" class="modal-form">
                <input type="text" id="username" name="username" class="form-input" placeholder="Username" required>
                <input type="password" id="password" name="password" class="form-input" placeholder="Password" required>
                
                <button type="submit" class="submit-button">Continue</button>
            </form>
        </div>
    </div>

    <header>
        <nav class="navbar section-content">
            <a href="#" class="nav-logo">
                <h2 class="logo-text">Jayferson.</h2>
            </a>
            <ul class="nav-menu">
                <button id="menu-close-button" class="fas fa-times"></button>

                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#projects" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
                <button class="nav-login" id="loginBtn">Log in</button>
            </ul>
            <button id="menu-open-button" class="fas fa-bars"></button>
        </nav>
    </header>

    <main>
        <!-- Home -->
        <section class="hero-section">
            <div class="section-content">
                <div class="hero-details">
                    <h2 class="title">Hi, I'm Jayferson Begino</h2>
                    <h3 class="subtitle">Web Developer</h3>
                    <p class="description">I'm looking for an entry-level web development role where I can apply my knowledge, learn from experienced developers, and contribute to meaningful projects.</p>
                    
                    <div class="buttons">
                        <a href="#" class="button hire-me">Hire Me</a>
                        <a href="#contact" class="button lets-talk">Let's Talk</a>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <img src="images/profile.jpg" alt="hero" class="hero-image">
                </div>
            </div>
        </section>
        
        <!-- About -->
        <section class="about-section" id="about">
            <div class="section-content">
                <div class="about-image-wrapper">
                    <img src="images/about.jpg" alt="About" class="about-image">
                </div>
            <div class="about-details">
                <h2 class="section-title">About</h2>
                <p class="text">
                I graduated from Bicol University with a Bachelor of Science in Information Technology in 2023-2024. I craft intuitive, responsive, and visually appealing websites, specializing in PHP, Laravel, JavaScript, and jQuery. My focus is on delivering seamless digital experiences tailored to your needs. Whether you're launching a new project or enhancing an existing one, I bring your vision to life with clean, efficient, and user-friendly solutions.
                </p>
                <div class="social-link-list">
                    <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
            </div>
        </section>

        <!-- Projects -->
         <section class="testimonials-section" id="projects">
            <h2 class="section-title">Projects</h2>
            <div class="section-content">
                <div class="slider-content swiper">
                    <div class="slider-wrapper">
                        <ul class="testimonials-list swiper-wrapper">
                            <li class="testimonial swiper-slide">
                                <img src="images/zytriz-logo2.jpg" alt="User" class="user-image">
                                <h3 class="name">Zytriz Store</h3>
                                <p class="project-link"><a href="https://zytriz.com/">https://zytriz.com/</a></p>
                                <i class="feedback">"Connecting Communities with Technology
                                Empowering individuals and organizations by providing computers to those in need."</i>
                            </li>
                            <li class="testimonial swiper-slide">
                                <img src="images/zytriz-logo2.jpg" alt="User" class="user-image">
                                <h3 class="name">Zytriz Store</h3>
                                <p class="project-link"><a href="https://zytriz.com/">https://zytriz.com/</a></p>
                                <i class="feedback">"Connecting Communities with Technology
                                Empowering individuals and organizations by providing computers to those in need."</i>
                            </li>
                            <li class="testimonial swiper-slide">
                                <img src="images/zytriz-logo2.jpg" alt="User" class="user-image">
                                <h3 class="name">Zytriz Store</h3>
                                <p class="project-link"><a href="https://zytriz.com/">https://zytriz.com/</a></p>
                                <i class="feedback">"Connecting Communities with Technology
                                Empowering individuals and organizations by providing computers to those in need."</i>
                            </li>
                            <li class="testimonial swiper-slide">
                                <img src="images/zytriz-logo2.jpg" alt="User" class="user-image">
                                <h3 class="name">Zytriz Store</h3>
                                <p class="project-link"><a href="https://zytriz.com/">https://zytriz.com/</a></p>
                                <i class="feedback">"Connecting Communities with Technology
                                Empowering individuals and organizations by providing computers to those in need."</i>
                            </li>
                            <li class="testimonial swiper-slide">
                                <img src="images/zytriz-logo2.jpg" alt="User" class="user-image">
                                <h3 class="name">Zytriz Store</h3>
                                <p class="project-link"><a href="https://zytriz.com/">https://zytriz.com/</a></p>
                                <i class="feedback">"Connecting Communities with Technology
                                Empowering individuals and organizations by providing computers to those in need."</i>
                            </li>
                        </ul>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-slide-button swiper-button-prev"></div>
                        <div class="swiper-slide-button swiper-button-next"></div>
                    </div>
                </div>
            </div>
         </section>

        <!-- Gallery -->
         <section class="gallery-section">
            <h2 class="section-title">Gallery</h2>
            <div class="section-content">
                <ul class="gallery-list">
                    <li class="gallery-item">
                        <img src="images/zytriz_home.png" alt="Gallery" class="gallery-image">
                    </li>
                    <li class="gallery-item">
                        <img src="images/zytriz1.png" alt="Gallery" class="gallery-image">
                    </li>
                </ul>
            </div>
         </section>

        <!-- Contact -->
          <section class="contact-section" id="contact">
            <h2 class="section-title">Contact</h2>
            <div class="section-content">
                <ul class="contact-info-list">
                    <li class="contact-info">
                        <i class="fa-solid fa-location-crosshairs"></i>
                        <p>P-5, Pinagbobong Tabaco City, Albay</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-envelope"></i>
                        <p>jayfersonlogicabegino@gmail.com</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-solid fa-phone"></i>
                        <p>09672076783</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-clock"></i>
                        <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-clock"></i>
                        <p>Sunday: Unavailabe</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-solid fa-globe"></i>
                        <p>www.linkedin.com/in/jayferson-begino-b75576231</p>
                    </li>
                </ul>
                <form class="contact-form" method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data" onsubmit="return disableButton();">
                    @csrf
                    <input type="text" placeholder="Fullname" class="form-input" name="name" required>
                    <input type="email" placeholder="Email" class="form-input" name="email" required>
                    <textarea placeholder="Message" class="form-input" name="message" required></textarea>
                    <button type="submit" class="submit-button" name="savedata" id="savedata">Submit</button>
                </form>
            </div>
          </section>

        <!-- Footer -->
         <footer class="footer-section">
            <div class="section-content">
                <p class="copyright-text">© 2025 Jayferson Begino | All rights reserved.</p>
            </div>
         </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        function disableButton(){
            let btn =document.getElementById('savedata');
            btn.disabled = true;
            btn.innerText = 'Sending...';
            return true;
        }
    </script>
</body>
</html>