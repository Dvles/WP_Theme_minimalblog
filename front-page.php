<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimal portfolio Blog</title>
    <script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js "></script>
    <link href=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css " rel="stylesheet">
    <script src="/js/splide.js" defer></script>

    <?php wp_head(); ?>

</head>

<body>

    <!-- Sticky Header -->
    <header class="container">
        <div class="navbar">
            <h2><a href="index.html">Minimal Portfolio</a></h2>
            <nav class="nav-flex">
                <ul>
                    <li><a href="work.html">works</a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Home page spotlight -->
    <main class="homepage1-main-content">
        <section class="splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    
                        <li class="splide__slide">
                            <div class="homepage-image-container">
                                <a href="./article.html"><img src="https://placehold.co/500x400" class="">
                                </a>
                            </div>

                            <a href="./article.html"> <h2 class="hero-title">Redefining a new era of Kenyan Design</h2>
                            </a>
                        </li>
                    
                    <li class="splide__slide">
                        <div class="homepage-image-container">
                            <a href="./article.html"></a><img src="https://placehold.co/500x400" class=""></a>
                        </div>
                        <a href="./article.html"></a><h2 class="hero-title">Typography experimentations with Javascript</h2></a>
                    </li>
                    <li class="splide__slide">
                        <div class="homepage-image-container">
                            <a href="./article.html"></a><img src="https://placehold.co/500x400" class=""></a>
                        </div>
                        <a href="./article.html"></a><h2 class="hero-title">Abstractions within Muluba artforms</h2></a>
                    </li>
                </ul>
            </div>
        </section>

    </main>


    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-contact">
                <p>merveille[@]example.com</p>
                <p>(123) 456-7890</p>
            </div>

            <div class="footer-links">
                <a href="#" class="footer-link block__link">Linkedin</a>
                <a href="#" class="footer-link block__link">Instagram</a>
                <a href="#" class="footer-link block__link">Behance</a>
            </div>
        </div>
    </footer>