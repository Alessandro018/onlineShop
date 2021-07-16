<?php
include "../../../database/Connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details product</title>
</head>
<body>
    <?php include "../navbar.php";?>
    <div class="custom-content">
        <div class="d-flex flex-column px-5 pt-4" style="background-color: #f2f2f2;">
            <div class="breadcrumb">
               <a href="" class="active-link">Telefones e celulares</a>    <span class="link-separation">&#10095;</span>
               <a href="" class="active-link">Smartphones</a>   <span class="link-separation">&#10095;</span>
               <a class="desactive-link">Iphone</a>
            </div>
            <div class="show-product-details">
                <img src="../../app/assets/img/iphone-12-red.png">
                <div class="product-info">
                    <div>
                        <h3 class="product-name">Iphone 11 pro max 128GB</h3>
                        <h4 class="price">R$ 7.829,90</h4>
                    </div>
                    <div class="buttons">
                        <button class="button buy-button">Comprar</button>
                        <button class="button add-cart-button" class="mt-4">Adicionar ao carrinho</button>
                    </div>
                    <div class="shipping">
                        <span>Calcular frente</span>
                        <input type="text" name="" id="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link type="text/css" rel="stylesheet" href="../../app/assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="../../../../admin/app/assets/css/bootstrap.min.css">
</body>
</html>