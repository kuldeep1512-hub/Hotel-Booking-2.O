<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>continental hotel-rooms</title>
    <?php require('inc/links.php') ?>
    <style>
        .pops:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3;
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php') ?>



    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our Rooms</h2>
        <div class="h-line bg-dark"></div>

    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ps-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow pops border-top border-4">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2 text-center">Filters</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3 shadow-none mt-2">
                                <h5 class="mb-3" style="font-size: 18px;">Check Availiblity</h5>
                                <label class="form-label">Check-In</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-Out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>

                            <div class="border bg-light p-3 rounded mb-3 shadow-none mt-2">
                                <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facility 1</label>
                                </div>

                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Facility 2</label>
                                </div>

                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Facility 3</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3 shadow-none mt-2">
                                <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none mb-2">
                                        <label class="form-label">Childrens</label>
                                        <input type="number" class="form-control shadow-none mb-2">

                                        <!--   for adult and children in one line</div>
                                      <div>-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>


            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow rounded pops border-top border-4">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-2">
                            <img src="images/rooms/1.png" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-2 px-md-2 px-0">
                            <h5 class="mb-3">Simple Room</h5>
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

                            <div class="Facilities mb-3">
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

                            <div class="Guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    4 Childerns
                                </span>
                            </div>
                        </div>

                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-2">₹ 2000 Rupees Per Night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2 ">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none">More
                                Details</a>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 border-0 shadow rounded pops border-top border-4">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-2">
                            <img src="images/rooms/1.png" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-2 px-md-2 px-0">
                            <h5 class="mb-3">Simple Room</h5>
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

                            <div class="Facilities mb-3">
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

                            <div class="Guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    4 Childerns
                                </span>
                            </div>
                        </div>

                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-2">₹ 2000 Rupees Per Night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2 ">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none">More
                                Details</a>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 border-0 shadow rounded pops border-top border-4">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-2">
                            <img src="images/rooms/1.png" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-2 px-md-2 px-0">
                            <h5 class="mb-3">Simple Room</h5>
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

                            <div class="Facilities mb-3">
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

                            <div class="Guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    4 Childerns
                                </span>
                            </div>
                        </div>

                        <div class="col-md-2  mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-2">₹ 2000 Rupees Per Night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2 ">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none">More
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php require('inc/footer.php') ?>






</body>

</html>