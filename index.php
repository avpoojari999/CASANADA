<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>CASANADA Resort</title>
    <link rel="stylesheet" href="static/css/style.css" />
</head>
<body>
    <!-- HERO -->
    <header class="hero">
        <video autoplay muted loop class="background-video">
            <source src="static/videos/preview.mp4" type="video/mp4">
        </video>
        <div class="overlay">
            <h1>Welcome to CASANADA</h1>
            <p>Luxury & Serenity by the Sea</p>
        </div>
    </header>

    <!-- ABOUT with VIDEO -->
    <section class="about">
        <div class="about-video-container">
            <video autoplay muted loop class="about-background-video">
                <source src="static/videos/about.mp4" type="video/mp4">
            </video>
            <div class="about-overlay">
                <h2>About CASANADA</h2>
                <h3>Our Philosophy</h3>
                <p>We combine elegance and nature to create a serene getaway. Our goal is to make every guest feel at home in paradise.</p>
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section class="gallery">
        <h2>Gallery</h2>
        <div class="images">
            <img src="static/images/resort1.jpg" alt="Resort View">
            <img src="static/images/resort2.jpg" alt="Beach View">
            <img src="static/images/resort3.jpg" alt="Room Interior">
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="testimonials">
        <h2>What Our Guests Say</h2>
        <blockquote>"An unforgettable experience. The staff made us feel like royalty!" – Ashik P.</blockquote>
        <blockquote>"Absolutely stunning views and peaceful ambiance." – Aahana P.</blockquote>
    </section>

    <!-- CONTACT -->
    <section class="contact">
        <h2>Contact Us</h2>
        <p>Email: reservations@casanadaresort.com</p>
        <p>Phone: +91 8652894307</p>
        <p>Location: CASA NADA, Mattu Beach, Udupi, Karnataka</p>
    </section>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> CASANADA Resort. All rights reserved.</p>
    </footer>
</body>
</html> 