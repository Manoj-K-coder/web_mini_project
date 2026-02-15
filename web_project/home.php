<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Grand Palace Hotel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    font-family: Arial, sans-serif;
}

.carousel-item img{
    height: 90vh;
    object-fit: cover;
    filter: brightness(70%);
}

.carousel-caption{
    bottom: 30%;
}

.section{
    padding:60px 0;
}

.room-card img{
    height:200px;
    object-fit:cover;
}

.footer{
    background:#212529;
    color:white;
    padding:20px;
    text-align:center;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<div class="container">
<a class="navbar-brand fw-bold" href="#">Grand Palace</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ms-auto align-items-center">

<li class="nav-item">
<a class="nav-link active" href="#">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#about">About</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#rooms">Rooms</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#contact">Contact</a>
</li>

<li class="nav-item ms-3">
<a class="btn btn-warning" href="booking.html">Book Now</a>
</li>

<li class="nav-item ms-2">
<a class="btn btn-danger" href="login.php">Admin</a>
</li>

</ul>
</div>
</div>
</nav>

<!-- CAROUSEL -->
<div id="hotelCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

<div class="carousel-indicators">
<button type="button" data-bs-target="#hotelCarousel" data-bs-slide-to="0" class="active"></button>
<button type="button" data-bs-target="#hotelCarousel" data-bs-slide-to="1"></button>
<button type="button" data-bs-target="#hotelCarousel" data-bs-slide-to="2"></button>
</div>

<div class="carousel-inner">

<div class="carousel-item active">
<img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa" class="d-block w-100">
<div class="carousel-caption text-center">
<h1 class="display-4 fw-bold">Luxury & Comfort</h1>
<p>Experience world-class hospitality</p>
<a href="booking.html" class="btn btn-warning btn-lg">Book Your Stay</a>
</div>
</div>

<div class="carousel-item">
<img src="https://images.unsplash.com/photo-1590490360182-c33d57733427" class="d-block w-100">
<div class="carousel-caption text-center">
<h1 class="display-4 fw-bold">Elegant Interiors</h1>
<p>Designed for your perfect relaxation</p>
<a href="booking.html" class="btn btn-warning btn-lg">Reserve Now</a>
</div>
</div>

<div class="carousel-item">
<img src="https://images.unsplash.com/photo-1560448075-bb485b067938" class="d-block w-100">
<div class="carousel-caption text-center">
<h1 class="display-4 fw-bold">Premium Suites</h1>
<p>Make your stay unforgettable</p>
<a href="booking.html" class="btn btn-warning btn-lg">Book Today</a>
</div>
</div>

</div>

<button class="carousel-control-prev" type="button" data-bs-target="#hotelCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#hotelCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

</div>

<!-- ABOUT -->
<section id="about" class="section text-center">
<div class="container">
<h2>About Us</h2>
<p class="mt-3">
Grand Palace Hotel offers premium luxury rooms with modern amenities,
fine dining, and exceptional hospitality in the heart of the city.
</p>
</div>
</section>

<!-- ROOMS -->
<section id="rooms" class="section bg-light">
<div class="container">
<h2 class="text-center mb-5">Our Rooms</h2>

<div class="row">

<div class="col-md-4">
<div class="card room-card shadow">
<img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85" class="card-img-top">
<div class="card-body text-center">
<h5>Standard Room</h5>
<p>Comfortable stay at affordable price.</p>
<p><strong>₹1000 / Night</strong></p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card room-card shadow">
<img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" class="card-img-top">
<div class="card-body text-center">
<h5>Deluxe Room</h5>
<p>Luxury experience with premium comfort.</p>
<p><strong>₹2000 / Night</strong></p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card room-card shadow">
<img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b" class="card-img-top">
<div class="card-body text-center">
<h5>Suite Room</h5>
<p>Ultimate luxury with royal facilities.</p>
<p><strong>₹3000 / Night</strong></p>
</div>
</div>
</div>

</div>
</div>
</section>

<!-- FACILITIES -->
<section class="section text-center">
<div class="container">
<h2>Facilities</h2>
<div class="row mt-4">
<div class="col-md-3">✔ Free WiFi</div>
<div class="col-md-3">✔ Swimming Pool</div>
<div class="col-md-3">✔ 24/7 Room Service</div>
<div class="col-md-3">✔ Free Parking</div>
</div>
</div>
</section>

<!-- CONTACT -->
<section id="contact" class="section bg-light text-center">
<div class="container">
<h2>Contact Us</h2>
<p>Email: info@grandpalace.com</p>
<p>Phone: +91 9876543210</p>
<p>Address: Opposit To Dr. Ambedkar Institute Of Technology , Bengaluru, Karnataka 560056</p>
</div>
</section>

<!-- FOOTER -->
<div class="footer">
© 2025 Grand Palace Hotel | All Rights Reserved
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
