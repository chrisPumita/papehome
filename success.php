<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "./includes/header.php" ?>
    <title>Bievenido a la tienda</title>
    <style>
        .title {
            margin-bottom: 5vh
        }


        .cart {
            background-color: #fff;
            padding: 4vh 5vh;
            border-bottom-left-radius: 1rem;
            border-top-left-radius: 1rem
        }

        @media(max-width:767px) {
            .cart {
                padding: 4vh;
                border-bottom-left-radius: unset;
                border-top-right-radius: 1rem
            }
        }

        .summary {
            background-color: #ddd;
            border-top-right-radius: 1rem;
            border-bottom-right-radius: 1rem;
            padding: 4vh;
            color: rgb(65, 65, 65)
        }

        @media(max-width:767px) {
            .summary {
                border-top-right-radius: unset;
                border-bottom-left-radius: 1rem
            }
        }

        .summary .col-2 {
            padding: 0
        }

        .summary .col-10 {
            padding: 0
        }

        .title b {
            font-size: 1.5rem
        }


        .back-to-shop {
            margin-top: 2rem
        }

        .payment
        {
            border:1px solid #f2f2f2;
            border-radius:20px;
            background:#fff;
        }
        .payment_header
        {
            background: rgb(30, 63, 115);
            padding:20px;
            border-radius:20px 20px 0px 0px;

        }

        .check
        {
            margin:0px auto;
            width:50px;
            height:50px;
            border-radius:100%;
            background:#fff;
            text-align:center;
        }

        .check i
        {
            vertical-align:middle;
            line-height:50px;
            font-size:30px;
        }

        .content
        {
            text-align:center;
        }

        .content  h1
        {
            font-size:25px;
            padding-top:25px;
        }


        .content a:hover
        {
            text-decoration:none;
            background:#000;
        }

    </style>
</head>
<body>
<?php include "./includes/nav.php" ?>
<section class="container py-3">
    <div class="row">
        <div class="cart">
            <div class="col-md-6 mx-auto mt-5">
                <div class="payment">
                    <div class="payment_header">
                        <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                    </div>
                    <div class="content p-3">
                        <h1>Pago realizado</h1>
                        <div class="card mb-1 text-start">
                            <div class="row px-3">
                                <div class="col-2 m-auto px-2">
                                    <strong>PEDIDO</strong>
                                </div>
                                <div class="col-10">
                                    <div class="card-body">
                                        <p class="card-text">15615615</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1 w-100">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="card-body">
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Ab animi neque voluptatem voluptates. Autem laudantium qui sed ullam voluptate!
                                            At blanditiis dicta, impedit iusto nemo quos repellendus tenetur voluptatem
                                            voluptatibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary my-3">Ver mis Pedidos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "./includes/footer.php"?>
<?php include "./includes/js.php"?>

</body>
</html>