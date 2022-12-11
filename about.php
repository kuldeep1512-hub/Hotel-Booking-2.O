<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>continental hotel-about</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <?php require('inc/links.php') ?>
</head>

<style>
    .box {
        border-top-color: var(--teal) !important;
    }

    .popss:hover {
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3;
    }
</style>
</styl.popss:hover>

<body class="bg-light">
    <?php require('inc/header.php') ?>



    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">About Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Asperiores,<br> cumque sed ducimus accusantium suscipit quam repudiandae?
            Odio quam libero autem.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2 ">
                <h3 class="mb-3"> Lorem ipsum dolor sit</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita
                    Asperiores mollitia explicabo quidem omnis blanditiis atque dist
                    Consequatur architecto deserunt iste commodi unde culpa, laudant
                </p>
            </div>
            <div class="col-lg-5 col-lg-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/team9.jpg" class="img-thumbnail rounded shadow  popss">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 co-md-6 md-4 px-4 ">
                <div class="border-top border-4 text-center bg-white shadow rounded mt-5 box popss border-top border-4">
                    <img src="images/about/hotel.svg" width="90px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 co-md-6 md-4 px-4 ">
                <div
                    class="border-top border-4 text-center bg-white shadow rounded mt-5 box box popss border-top border-4">
                    <img src="images/about/customers.svg" width="90px">
                    <h4 class="mt-3">5000+ Customers</h4>
                </div>
            </div>
            <div class="col-lg-3 co-md-6 md-4 px-4 ">
                <div
                    class="border-top border-4 text-center bg-white shadow rounded  mt-5 box box popss border-top border-4">
                    <img src="images/about/rating.svg" width="90px">
                    <h4 class="mt-3"> 1000+ Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 co-md-6 md-4 px-4 ">
                <div
                    class="border-top border-4 text-center bg-white shadow rounded  mt-5 box box popss border-top border-4">
                    <img src="images/about/staff.svg" width="90px">
                    <h4 class="mt-3">200+ Staffs</h4>
                </div>
            </div>
        </div>
    </div>


    <h3 class="my-5 fw-bold h-font text-center">Management Team</h3>

    <!-- Swiper -->
    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5 ">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded shadow ">
                    <img src="images/about/pablo.jpg" class="w-100">
                    <h5 class="mt-2">random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded shadow">
                    <img src="images/about/pablo.jpg" class="w-100">
                    <h5 class="mt-2">random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded shadow">
                    <img src="images/about/pablo.jpg" class="w-100">
                    <h5 class="mt-2">random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded shadow">
                    <img src="images/about/pablo.jpg" class="w-100">
                    <h5 class="mt-2">random name</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php require('inc/footer.php') ?>



    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,

            pagination: {
                el: ".swiper-pagination",
            },

            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>