<?php

namespace Source\App\Api;

use Source\Models\Product;

class Products extends Api
{

    public function __construct()
    {
        parent::__construct();
        // quando todas as rotas da classe são autenticadas, o método $this->auth() pode ser evocado aqui
        // $this->auth();
    }

    public function getById (array $data)
    {
        //var_dump($data);
        // método é chamaddo quando a rota precisa de autenticação
        //$this->auth();
        $product = new Product();
        //var_dump($service->selectById($data["serviceId"]));
        $this->back($product->selectById($data["productId"]));
    }

    public function getByCategory(array $data)
    {
        // quando a rota não necessita de autenticação, não evoca o método $this->auth()
        $product = new Product();
        $this->back($product->selectByCategory($data["categoryId"]));
    }


}