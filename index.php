<?php
include "database/Connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?//php include "app/php/navbar.php";?>
    <nav class="custom-navbar">
        <a class="navbar-brand" href="#">
            <img src="app/assets/img/logo.png" width="80" height="80" alt="">
            <span style="color: #5e17eb">ONLINE</span>
            <span style="color: #5f5f66">SHOP</span>
        </a>
    </nav>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="show-offers">
            <!-- <img src="app/assets/img/logo.png" width="50" height="50"> -->
            <div>
                <h1 class="offer-title">Lorem ipsum</h1>
                <div class="offer-description">
                    <h4>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                         the industry's standard dummy text ever since the 1500s...
                    </h4>
                </div>
            </div>
        </div>
        <div class="offer-separation">
            <span>&#10095;</span>
        </div>
        <div class="d-flex flex-column align-items-center" style="width: 90%">
            <div class="my-5">
                <h2>Todos os produtos</h2>
                <?=var_dump($_GET);?>
            </div>
            <div class="show-products">
                <a class="product" href="/products/1/details">
                    <div class="photo">
                        <img src="app/assets/img/iphone-12-red.png">
                    </div>
                    <span class="price">R$ 7.829,90</span>
                    <div class="description">
                        <span>Agora você pode navegar com privacidade, e as outras pessoas que usarem este dispositivo não 
                            verão suas atividades.
                        </span> 
                    </div>
                </a>
                <a class="product">
                    <div class="photo">
                        <img src="app/assets/img/iphone-12-red.png">
                    </div>
                    <span class="price">R$ 7.829,90</span>
                    <div class="description">
                        <span>Agora você pode navegar com privacidade, e as outras pessoas que usarem este dispositivo não 
                            verão suas atividades.
                        </span> 
                    </div>
                </a><a class="product">
                    <div class="photo">
                        <img src="app/assets/img/iphone-12-red.png">
                    </div>
                    <span class="price">R$ 7.829,90</span>
                    <div class="description">
                        <span>Agora você pode navegar com privacidade, e as outras pessoas que usarem este dispositivo não 
                            verão suas atividades.
                        </span> 
                    </div>
                </a><a class="product">
                    <div class="photo">
                        <img src="app/assets/img/iphone-12-red.png">
                    </div>
                    <span class="price">R$ 7.829,90</span>
                    <div class="description">
                        <span>Agora você pode navegar com privacidade, e as outras pessoas que usarem este dispositivo não 
                            verão suas atividades.
                        </span> 
                    </div>
                </a>
                <a class="product">
                    <div class="photo">
                        <img src="app/assets/img/iphone-12-red.png">
                    </div>
                    <span class="price">R$ 7.829,90</span>
                    <div class="description">
                        <span>Agora você pode navegar com privacidade, e as outras pessoas que usarem este dispositivo não 
                            verão suas atividades.
                        </span> 
                    </div>
                </a>
            </div>
        </div>
        <link type="text/css" rel="stylesheet" href="app/assets/css/style.css">
        <link type="text/css" rel="stylesheet" href="admin/app/assets/css/bootstrap.min.css">
    </div>
</body>
</html>