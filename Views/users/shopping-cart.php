<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - Shopping Cart</title>
    <link rel="stylesheet" href="../../Public/CSS/header.css">
    <link rel="stylesheet" href="../../Public/CSS/footer.css">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link owl carousel -->
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/blocks/header.php");
    ?>
    <!-- body -->
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">SHOPPING CART</h5>
                        </div>
                        <div class="card-body">
                            <!-- Single item -->
                            <?php
                            if (isset($_SESSION['giohang'])) {
                                $giohang = $_SESSION['giohang'];
                                foreach ($giohang as $product => $sp)
                                    echo "<div class='row'>
                                <div class='col-lg-3 col-md-12 mb-4 mb-lg-0'>
                                    <!-- Image -->
                                    <div class='bg-image hover-overlay hover-zoom ripple rounded' data-mdb-ripple-color='light'>
                                        <img src='https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp' class='w-100' alt='Blue Jeans Jacket' />
                                        <a href='#!'>
                                            <div class='mask' style='background-color: rgba(251, 251, 251, 0.2)'></div>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class='col-lg-5 col-md-6 mb-4 mb-lg-0'>
                                    <!-- Data -->
                                    <p><strong>" . $sp['ten'] . "</strong></p>
                                    <p>Color: blue</p>
                                    <p>Size: M</p>
                                    <button type='button' class='btn btn-primary btn-sm me-1 mb-2' data-mdb-toggle='tooltip' title='Remove item' name='action' value='Xóa hàng'>
                                        <i class='fas fa-trash'></i>
                                    </button>
                                    <button type='button' class='btn btn-danger btn-sm mb-2' data-mdb-toggle='tooltip' title='Move to the wish list'>
                                        <i class='fas fa-heart'></i>
                                    </button>
                                
                                </div>
                                <div class='col-lg-4 col-md-6 mb-4 mb-lg-0'>
                                    <!-- Quantity -->
                                    <div class='d-flex mb-4' style='max-width: 300px'>
                                       
                                        <div class='form-outline'>
                                            <input id='form1' min='0' name='quantity' value='" . $sp['soluong'] . "' type='number' class='form-control' />
                                            <label class='form-label' for='form1'></label>
                                        </div>
                                    </div>
                                   
                                    <!-- Price -->
                                    <p class='text-start text-md-center'>
                                        <strong>$ " . $sp['gia'] * $sp['soluong'] . "</strong>
                                    </p>
                                    
                                </div>
                            </div>
                          
                            <hr class='my-4' />";
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">SUMMARY</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Products
                                    <span>$53.98</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>Gratis</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong>$53.98</strong></span>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-primary btn-lg btn-block">
                                Go to checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/blocks/footer.php");
    ?>
    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>