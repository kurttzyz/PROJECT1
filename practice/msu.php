<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <title>Mindanao State University - Maigo</title>
    <link rel="icon" href="msu.png" type="image/x-icon">
</head>

<body>
    <header>
        <a href="/practice/msumaigo">
        <img src="msu.png" alt="logo" class="logo"></a>
        <h1><a href="/practice/msumaigo">Mindanao State University Maigo</a></h1>
    </header>

    <nav>
        <a href="#">About</a>
        <a href="#">Admissions</a>
        <a href="#">Academics</a>
        <a href="account/">Portal</a>
        <a href="#">Faculty & Staff</a>
        <a href="#">Offices</a>
        <a href="#contact">Contact</a>
    </nav>

    <div class="slideshow-container">
        <div class="slides">
            <img src="car.jpeg" alt="Image 1">
            <img src="car2.jpeg" alt="Image 2">
            <img src="car3.jpeg" alt="Image 3">
        </div>
        <div class="circle-buttons">
            <div class="circle-button active" onclick="changeSlide(0)"></div>
            <div class="circle-button" onclick="changeSlide(1)"></div>
            <div class="circle-button" onclick="changeSlide(2)"></div>
        </div>
    </div>


        <section>
        <article>
            <h2>Welcome to Our School</h2>
            <p>Msu-Maigo is a growing State University in the Southern Philippines.
            Be part of our growing family and experience quality education, academic excellence, and exemplary service.
            </p>
        </article>

        <article>
            <h3>Latest News</h3>
            <p>New website for Msu-Maigo.</p>
        </article>
    </section>
    
    <footer>
        <div class="foot">
            <img src="msu.png" alt="logo">
            <div class="school-name">
                <p><a href="msumaigo/">Mindanao State University<br> Maigo </a></p>
            </div>
            <div class="foot-info" id="contact">
                <p>Labu-ay, Maigo Lanao Del Norte,<br>9206, Philippines<br> Telephone: +63 (063) 221-4056</p>
            </div>

        </div>

        <div class="triple">
            <a href="#">COPYRIGHT</a>
            <a href="#">USAGE POLICY</a>    
            <a href="#">DISCLAIMER</a>
        </div>

        <div class="double">
            <p>&copy; 2024 Mindanao State University Maigo</p>
        </div>
    </footer>
<script>
let slideIndex = 0;
        const intervalTime = 3000;
        const slides = document.querySelectorAll('.slides img');
        const circleButtons = document.querySelectorAll('.circle-button');

        function showSlide(n) {
            slideIndex = n;
            if (slideIndex >= slides.length) {
                slideIndex = 0;
            } else if (slideIndex < 0) {
                slideIndex = slides.length - 1;
            }

            slides.forEach((slide) => {
                slide.style.display = 'none';
            });

            circleButtons.forEach((button) => {
                button.classList.remove('active');
            });

            slides[slideIndex].style.display = 'block';
            circleButtons[slideIndex].classList.add('active');
        }

        function changeSlide(n) {
            showSlide(slideIndex + n);
        }

        function autoSlide() {
            changeSlide(1);
            setTimeout(autoSlide, intervalTime);
        }

        autoSlide();
</script>
</body>

</html>

<script>
        document.addEventListener("DOMContentLoaded", function() {
        const params = new URLSearchParams(window.location.search);
        if (params.has('logout') && params.get('logout') === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Logout successful!',
                text: 'You have been successfully logged out.'
            });
        }
    });
    </script>
