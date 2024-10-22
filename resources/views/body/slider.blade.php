<!-- resources/views/body/slider.blade.php -->
<div class="carousel">
    <div class="carousel-item active">
        <img src="path/to/first-image.png" alt="Our Story Image" />
        <div class="carousel-caption">
            <h1>OUR STORY</h1>
            <p>Discover the world of Ralph Lauren</p>
            <a href="#" class="explore-btn">Explore Now</a>
        </div>
    </div>
    <div class="carousel-item">
        <img src="path/to/second-image.png" alt="Polo Classics" />
        <div class="carousel-caption">
            <h1>Polo Classics</h1>
            <p>Shop Women</p>
            <a href="#" class="shop-btn">Shop Women</a>
        </div>
    </div>
</div>

<style>
    .carousel {
        position: relative;
        width: 100%;
    }

    .carousel-item {
        position: absolute;
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
    }

    .carousel-caption {
        position: absolute;
        bottom: 20%;
        left: 10%;
        color: white;
    }

    .carousel-item img {
        width: 100%;
        height: 100vh;
        object-fit: cover;
    }

    .explore-btn, .shop-btn {
        padding: 10px 20px;
        background-color: black;
        color: white;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
    }
</style>
