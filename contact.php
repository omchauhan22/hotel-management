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
                    <iframe class="w-100 rounded mb-4" src="<?php echo $contact_r['iframe']; ?>" height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="<?php echo $contact_r['gmap']; ?>" target="_blank" class="d-inline-block text-dark text-decoration-none mb-2">
                        <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address']; ?>
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel:+<?php echo $contact_r['pn1']; ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1']; ?></a><br>
                    <?php
                    if ($contact_r['pn2'] != '') {
                        echo <<<data
                        <a href="tel:+$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]</a>
                        data;
                    }
                    ?>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: <?php echo $contact_r['email']; ?>" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email']; ?></a>
                    <h5 class="mt-4">Follow us</h5>
                    <?php
                    if ($contact_r['tw'] != '') {
                        echo <<<data
                        <a href="$contact_r[tw]" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x me-1"></i>
                        </a>
                        data;
                    }
                    ?>
                    <a href="<?php echo $contact_r['fb']; ?>" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="<?php echo $contact_r['insta']; ?>" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form action="" method="post">
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" name="name" class="form-control shadow-none" required/>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Emai</label>
                            <input type="email" name="email" class="form-control shadow-none" required/>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" name="subject" class="form-control shadow-none" required/>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea name="message" class="form-control shadow-none" rows="5" style="resize: none;" required></textarea>
                        </div>
                        <button type="submit" name="send" class="btn btn-white custom-bg mt-3">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['send'])){
        $frm_data = filteration($_POST);
        $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
        $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];
        $res = insert($q,$values,'ssss');
        if($res==1){
            alert('success','Message sent...');
        }else{
            alert('error', 'Server down try again letter...');
        }
    }
    ?>

    <?php require('includes/footer.php'); ?>

</body>

</html>