<?php
$titulo = "HOME - Pape Home";
$path = "./"
?>
<!doctype html>
<html lang="en">
<head>
    <?php include "./includes_general/header.php" ?>
    <title>Bievenido a la tienda</title>
</head>
<body>
<?php include "./includes_general/nav.php" ?>
<section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/img/min/1-min.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/min/2-min.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/min/3-min.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="line">
            <div class="read-more">
                <h5 class="text-center  mx-4 mt-2">Articulos de Novedad</h5>
            </div>
        </div>
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper" id="swiper-News">
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>


<?php include "./includes_general/ofertas_div.php" ?>
<?php include "./includes_general/footer.php" ?>
<?php include "./includes_general/js.php" ?>

<script src="./service/shop.js"></script>

<!-- Swiper JS -->
<!-- Initialize Swiper -->
<script>
    let propiedades = {
        slidesPerView: 5,
        spaceBetween: 5,
        slidesPerGroup: 5,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    }
    var swiper = new Swiper(".mySwiper", propiedades);
    var swiper2 = new Swiper(".mySwiper2", propiedades);
</script>
</body>
</html>