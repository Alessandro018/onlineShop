<?php 
include "../../../../database/Connection.php";

class Product {
    private $id;
    public $name;
    public $description;
    private $price;
    private $category_id;

    public function __construct($name, $description, $price, $category_id){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category_id = $category_id;
    }

    public function save(Product $product) {
        $connection = new Connection();
        $connection->query("INSERT INTO Products SET name=?, description=?, price=?, category_id=?",
        [$product->name, $product->description, $product->price, $product->category_id]);
    }

    public function getProduct($idProduct) {
        $connection = new Connection();
        $connection->query("SELECT * FROM Products WHERE id=?", [$idProduct]);
        if($connection->rowCount() > 0) {
            return $connection->fetchAll();
        }
        return ;
    }
}

?>