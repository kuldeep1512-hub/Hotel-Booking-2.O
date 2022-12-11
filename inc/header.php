<style>
    .popsssss:hover {
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3;
    }
</style>





<nav class="navbar navbar-expand-lg navbar-light bg-white  px-lg-3 py-lg-2 shadow-sm sticky-top ">
    <div class="container-fluid">
        <a class="navbar-brand  me-4 fw-bold fs-3  h-font col-lg-2 popsssss " href="index.php">Continental Hotel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation shadow-none">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active  popsssss fw-bold" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2 popsssss fw-bold" href="rooms.php">Rooms</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  me-2 popsssss fw-bold" href="facilities.php">Facilities</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  me-2 popsssss fw-bold" href="contact.php">Contact us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  me-2 popsssss fw-bold" href="about.php">About Us</a>
                </li>

            </ul>
            <div class="d-flex">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-dark shadow  me-2 me-lg-2 custom-bg "
                    data-bs-toggle="modal" data-bs-target="#Loginmodal">
                    Login
                </button>

                <button type="button" class="btn btn-outline-dark shadow me-lg-2 me-lg-2 ml-1 custom-bg"
                    data-bs-toggle="modal" data-bs-target="#Registermodal">
                    Register
                </button>
            </div>
        </div>
    </div>
    </div>
</nav>



<!-- Modal -->
<div class="modal fade" id="Loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>

                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center ">
                        <i class="bi bi-person-circle  fs-3 me-3"></i>
                        User Login
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="Password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-item-center justify-content-between mb-2">
                            <button type="submit" button class="btn btn-dark shadow rounded custom-bg">Login</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot
                                Password?</a>
                        </div>

                    </form>
                </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="Registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>

                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-3"></i>
                        User Register
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base mx-4">
                        Note:Your Details Match With Your ID (Aadhaard Card , Passport , Driving License , Etc.)
                        That Will Be Required During<br>
                        Check-In And Check-Out.
                    </span>
                    <div class="container container-fluid">
                        <div class="row">
                            <div class="col-md-6 mb-3 ps-0">
                                <label class="form-label">Name</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3 ps-0">
                                <label class="form-label">Phone number</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Picture</label>
                                <input type="file" class="form-control shadow-none">
                            </div>
                            <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">Address</label>
                                <!--<input type="text" class="form-control shadow-none">-->
                                <textarea class="form-control shadow-none" rows="1"></textarea>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">PinCode</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="psaaword" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Confirmm Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-1">
                        <button type="submit" class="btn btn-dark shadow custom-bg">Register</button>
                    </div>
                </div>


                <form>

        </div>
    </div>
</div>