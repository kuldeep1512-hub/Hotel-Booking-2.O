<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>continental hotel-contact</title>
    <?php require('inc/links.php') ?>
    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3;
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php') ?>



    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Asperiores,<br> cumque sed ducimus accusantium suscipit quam repudiandae?
            Odio quam libero autem.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-3 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <iframe class="w-100 rounded shadow mt-4" height="320px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.03900799053!2d72.88118615!3d19.082250749999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1670572871372!5m2!1sen!2sin"
                        loading="lazy">
                    </iframe>
                    <h5 class="mt-3">Address</h5>
                    <a href="https://goo.gl/maps/CczX58LveyEEwzKU9" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2 badge bg-light text-dark fs-6 p-2 pop">
                        <i class="bi bi-geo-alt-fill me-2"></i>Nariman Point, Mumbai, <br>Maharashtra 400021
                    </a>
                    <h5 class="mt-3">Call Us </h5>
                    <a href="tel: +912343456345"
                        class="d-inline-block mb-2 text-decoration-none text-dark badge bg-light text-dark fs-6 p-2 pop"><i
                            class="bi bi-telephone-fill"></i>
                        +(91)1234567890
                    </a>
                    <br>
                    <a href="tel: +912343456345"
                        class="d-inline-block mb-2 text-decoration-none text-dark badge bg-light text-dark fs-6 p-2 pop">
                        <i class="bi bi-telephone-fill"></i>
                        +(91)1234567890
                    </a>
                    <h5 class="mt-3 mb-3">Email</h5>
                    <a href="mailto: ask.kphhr934@gmail.com"
                        class="d-inline-block mb-2 text-decoration-none text-dark badge bg-light text-dark fs-6 p-2 pop"><i
                            class="bi bi-envelope-at-fill me-2"></i>Ask.kphhr934@gmail.com
                    </a>

                    <h5 class="mt-3 mb-3">Follow Us </h5>
                    <a href="#" class="d-inline-block  text-dark fs-5 me-2 pop">
                        <i class="bi bi-twitter me-2 "></i>
                    </a>
                    <a href="#" class="d-inline-block  text-dark fs-5 me-2 pop ">
                        <i class="bi bi-instagram me-2"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 pop">
                        <i class="bi bi-facebook me-2"></i>
                    </a>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 mb-5 px-4">

                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <form>
                        <h5>Send A Message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label " style="font-weight: 500; ">Message</label>
                            <textarea class="form-control shadow-none" rows="3" style="resize:none"></textarea>
                        </div>
                        <button type="submit" button class="btn btn-dark shadow rounded custom-bg mt-3 sh">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php require('inc/footer.php') ?>






</body>

</html>