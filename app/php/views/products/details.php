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
    <div class="d-flex flex-column m-auto pt-5" style="width: 90%">
        <span>Telefones e celulares / Smartphones / Iphone</span>
        <div class="d-flex justify-content-between m-auto mt-4" style="width: min(90vw,700px)">
            <div class="">
                <img src="../../app/assets/img/iphone-12-red.png" width="340" height="340" style="border: solid 1px">
            </div>
            <div class="d-flex flex-column">
                <div>
                    <h3>Iphone 11 pro max 128GB</h3>
                    <h4 class="price">R$ 7.829,90</h4>
                </div>
                <div class="mt-4 d-flex flex-column">
                    <button>Comprar</button>
                    <button class="mt-4">Adicionar ao carrinho</button>
                </div>
                <div class="mt-4 d-flex flex-column">
                    <span>Calcular frente</span>
                    <input type="text" name="" id="">
                </div>
            </div>
        </div>
        <link type="text/css" rel="stylesheet" href="../../app/assets/css/style.css">
        <link type="text/css" rel="stylesheet" href="../../../../admin/app/assets/css/bootstrap.min.css">
    </div>
</body>
</html>