<?php
$url = explode("/", addslashes($_GET['url']));

if($_GET['url'] == "home") {
    include "../../../index.php";
}
if($url[0] == "products" && $url[2] == "details") {
    include ("../views/products/details.php");
}