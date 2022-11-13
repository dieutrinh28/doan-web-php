<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allcarta - Login</title>
    <link rel="stylesheet" href="../../Public/CSS/footer.css">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid my-footer px-5 py-3 mt-5">
        <div class="row">
            <div class="logo col-5">
                <img src="../../Assets/logo.png" alt="">
                <p>© Photo, Inc. 10-2022. From 3 dots with love!</p>
            </div>
            <div class="support col-3">
                <h4 class="mb-3">Customer care support</h4>
                <p class="d-flex support-text mb-2">
                    <i class="far fa-envelope"></i>
                    <a href="">Furni3dots@gmail.come</a>
                </p>
                <p class="d-flex support-text mb-2">
                    <i class="fas fa-phone-alt"></i>
                    <a href="">0935050924</a>
                </p>
            </div>
            <div class="infomaion col-2">
                <h4 class="mb-3">Customer Service</h4>
                <a href="">Help & Contact Us</a>
                <a href="">Returns & Refunds</a>
                <a href="">Order Tracking</a>
            </div>
            <div class="infomaion col-2 text-right">
                <h4 class="mb-3">Information</h4>
                <a href="">About Us</a>
                <a href="">Careers</a>
                <a href="">Online Stores</a>
            </div>
        </div>
    </div>
    <!-- Alertify JS -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        <?php
        if (isset($_SESSION['message'])) {
        ?>
            alertify.set('notifier', 'position', 'top-right');
            alertify.success('<?= $_SESSION['message']; ?>');
        <?php
            unset($_SESSION['message']);
        }
        ?>
    </script>
</body>

</html>