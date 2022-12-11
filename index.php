<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>continental hotel -home</title>
    <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <style>
        .avilability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .avilability-form {
                margin-top: 20px;
                padding: 0 35px;
            }
        }

        .popssss:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3;
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php') ?>

    <!--carousel-->

    <div class="container-fluid px-lg-4 mt-4 ">
        <div class="swiper Swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.png" class="w-100 d-block" />
                </div>
            </div>
            <!--<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination "></div>-->
        </div>
    </div>

    <!--check avilability form-->

    <div class="container avilability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded popssss ">
                <h5 class="mb-4">Check Booking Avilability</h5>
                <form>
                    <div class="row  align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check-In</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check-Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Adult</label>
                            <select class="form-select" class="shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight:500;">Children</label>
                            <select class="form-select" class="shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit"
                                class="btn- text-white shadow-none custom-bg  rounded mb-1">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--Rooms-->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Our Room</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3 ">
                <div class="card border-0 shadow popssss" style="max-width: 330px; margin:auto ;">
                    <img src="images/rooms/1.png" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h5>Simple Room</h5>
                        <h6 class="mb-2">₹ 2000 Rupees Per Night</h6>
                        <h6 class="mb-2">$ 25 Dollor Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Room
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 sofa
                            </span>
                        </div>
                        <div class="Facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                Ac
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                Room Heater
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                massage
                            </span>
                        </div>
                        <div class="Guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                4 Childerns
                            </span>
                        </div>
                        <div class="Rating mb-4">
                            <div>
                                <h6 class="mb-1">Rating</h6>
                                <span class=" badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill  text-warning"></i>
                                    <i class="bi bi-star-fill  text-warning"></i>
                                    <i class="bi bi-star-fill  text-warning"></i>
                                    <i class="bi bi-star-fill  text-warning"></i>
                                </span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm  text-white custom-bg shadow-none">More
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow popssss" style="max-width: 330px; margin:auto ;">
                    <img src="images/rooms/1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simple Room</h5>
                        <h6 class="mb-2">₹ 2000 Rupees Per Night</h6>
                        <h6 class="mb-2">$ 25 Dollor Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Room
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 sofa
                            </span>
                        </div>


                        <div class="Facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                Ac
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                Room Heater
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                massage
                            </span>
                        </div>
                        <div class="Guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                4 Childerns
                            </span>
                        </div>
                        <div class="Rating mb-4">
                            <div>
                                <h6 class="mb-1">Rating</h6>
                                <span class=" badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill  text-warning"></i>
                                    <i class="bi bi-star-fill  text-warning"></i>
                                    <i class="bi bi-star-fill  text-warning"></i>
                                    <i class="bi bi-star-fill  text-warning"></i>
                                </span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm  text-white custom-bg shadow-none">More
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow popssss" style="max-width: 330px; margin:auto ;">
                    <img src="images/rooms/1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simple Room</h5>
                        <h6 class="mb-2">₹ 2000 Rupees Per Night</h6>
                        <h6 class="mb-2">$ 25 Dollor Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Room
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 sofa
                            </span>
                        </div>
                        <div class="Facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                Ac
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                Room Heater
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                massage
                            </span>
                        </div>
                        <div class="Guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                4 Childerns
                            </span>
                        </div>
                        <div class="Rating mb-4">
                            <div>
                                <h6 class="mb-1">Rating</h6>
                                <span class=" badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill  text-warning"></i>
                                    <i class="bi bi-star-fill  text-warning"></i>
                                    <i class="bi bi-star-fill  text-warning"></i>
                                    <i class="bi bi-star-fill  text-warning"></i>
                                </span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm  btn-o text-white custom-bg shadow-none">More
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded custom-bg fw-bold">More Rooms >>> </a>
            </div>
        </div>
    </div>

    <!-- our Facilities-->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Our Facilities</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5 ">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 popssss border-top border-4">
                <img src="images/features/1.svg" width=" 80px">
                <h5 class="mt-3 fw-bold">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 popssss border-top border-4">
                <img src="images/features/2.svg" width=" 80px">
                <h5 class="mt-3 fw-bold">Television</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 popssss border-top border-4">
                <img src="images/features/3.svg" width=" 80px">
                <h5 class="mt-3 fw-bold">Massage</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 popssss border-top border-4">
                <img src="images/features/4.svg" width=" 80px">
                <h5 class="mt-3 fw-bold">Room Heater</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 popssss border-top border-4">
                <img src="images/features/5.svg" width=" 80px">
                <h5 class="mt-3 fw-bold">Air conditioner</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded custom-bg fw-bold">More Facilities >>> </a>
            </div>
        </div>
    </div>

    <!-- our testimonials-->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4 shadow py-4 my-3">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/1.svg" width="30px">
                        <h6 class="m-0 ms-2">Kuldeep prajapati</h6>
                    </div>
                    <p>
                        The rooms were clean, very comfortable, and the staff was amazing.
                        They went over and beyond to help make our stay enjoyable.
                        I highly recommend this hotel for anyone visiting downtown
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 shadow py-4 my-3">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/2.svg" width="30px">
                        <h6 class="m-0 ms-2">Rohit Sharma</h6>
                    </div>
                    <p>
                        hey were extremely accommodating and allowed us to check in early at like 10am. We got to hotel
                        super early and I didn’t wanna wait.
                        So this was a big plus.
                        The sevice was exceptional as well. Would definitely send a friend there.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 shadow py-4 my-3">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/3.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        The staff at this property are all great! They all go above and beyond to make your stay
                        comfortable. Please (HN) give your staff awards!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 shadow py-4 my-3">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/1.svg" width="30px">
                        <h6 class="m-0 ms-2">Kuldeep prajapati</h6>
                    </div>
                    <p>
                        The rooms were clean, very comfortable, and the staff was amazing.
                        They went over and beyond to help make our stay enjoyable.
                        I highly recommend this hotel for anyone visiting downtown
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-3 mb-">
            <a href="#" class="btn btn-sm btn-outline-dark rounded custom-bg fw-bold">Know More >>> </a>
        </div>
    </div>



    <!-- Reach Us -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded shadow popssss border-top border-4">
                <iframe class="w-100 rounded shadow mt-4 " height="320px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.03900799053!2d72.88118615!3d19.082250749999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1670572871372!5m2!1sen!2sin"
                    loading="lazy">
                </iframe>
            </div>
            <div class="col-lg-4 col-md-4 px-4">
                <div class="bg-white p-4 rounded mb-4 shadow popssss border-top border-4">
                    <h5>Call Us </h5>
                    <a href="tel: +912343456345" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i>
                        +(91)1234567890
                    </a>
                    <br>
                    <a href="tel: +912343456345" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>
                        +(91)1234567890
                    </a>
                </div>
                <div class="bg-white p-4 rounded mb-4 shadow popssss border-top border-4 ">
                    <h5>Follow Us </h5>
                    <a href="#" class="d-inline-block mb-3  text-dark">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-2"></i>
                            Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3  text-dark">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-2"></i>
                            Instagram
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3  text-dark">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-2"></i>Facebook
                        </span>
                    </a>
                    <br>
                </div>
            </div>
        </div>
    </div>


    <?php require('inc/footer.php') ?>




    <!-- font-family:'Signika Negative', sans-serif -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".Swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
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