<?php

namespace Source\Models;

use Source\Core\Connect;
use Source\Core\Model;

class Product extends Model
{
    private $id;
    private $name;
    private $description;
    private $price;

    public function __construct()
    {
        $this->entity = "products";
    }

    /*public function selectById (int $orderId): ?array
    {
        $query = "SELECT products.id, products.name, products.quantity,  products.total
                  FROM products;
                  INNER JOIN orders ON services_categories.id = services.service_category_id  #??????
                  WHERE products.id = :product_id";
        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->bindParam("product_id",$orderId);

        $stmt->execute();

        return (array)$stmt->fetch();
    }*/

    public function selectByCategory (int $idCategory): ?array
    {
        /*$query = "SELECT services.id, services.name, services.description,  services_categories.name as 'category_name'
                  FROM services
                  INNER JOIN services_categories ON services_categories.id = services.service_category_id
                  WHERE services_categories.id = :category_id";
        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->bindParam("category_id", $idCategory);
        $stmt->execute();
        return $stmt->fetchAll();*/
    }

}