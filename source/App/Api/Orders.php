<?php

namespace Source\App\Api;

use Source\Models\Order;

class Orders extends Api
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
        $order = new Order();
        //var_dump($service->selectById($data["serviceId"]));
        $this->back($order->selectById($data["orderId"]));
    }

    public function getByCategory(array $data)
    {
        // quando a rota não necessita de autenticação, não evoca o método $this->auth()
        $service = new Service();
        $this->back($service->selectByCategory($data["categoryId"]));
    }


}