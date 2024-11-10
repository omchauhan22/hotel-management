<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VK hotel - Contact us</title>
    <?php require('includes/links.php'); ?>
</head>

<body class="bg-light">

    <?php require('includes/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, a! Vitae in voluptates, culpa veritatis excepturi mollitia necessitatibus odit, <br> voluptatum nesciunt ex fuga temporibus voluptatibus cumque quod rem at similique.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.4907297672!2d72.25008569347868!3d23.01990207203543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1725799814160!5m2!1sen!2sin" height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/axATLiwBP84zHcBAA" target="_blank" class="d-inline-block text-dark text-decoration-none mb-2">
                        <i class="bi bi-geo-alt-fill"></i> XYZ, Ahmedabad
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel:+916353308847" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +916353308847</a><br>
                    <a href="tel:+916353308847" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +916353308847</a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: com31103@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> com31103@gmail.com</a>
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form action="">
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none" />
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Emai</label>
                            <input type="email" class="form-control shadow-none" />
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none" />
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-white custom-bg mt-3">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require('includes/footer.php'); ?>

</body>

</html>