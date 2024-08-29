README.md EXPLICANDO O WEB SERVICE:
1. Products
GET /products
Descrição: Retorna a lista de todos os produtos.
Exemplo de Requisição:
http
GET /products HTTP/1.1


Exemplo de Resposta:
json
[
    {
        "id": 2,
        "name": "Hamburger",
        "price": 99,99,
        "description": "Pão, Carne, Queijo, Alface, Tomate e Cebola"
    },
    {
        "id": 3,
        "name": "Pizza",
        "price": 99,99,
        "description": "Massa de Pizza, Molho de Tomate, Queijo, Pepperoni, Cebola"
    }
]
GET /products/product/{id}
Descrição: Retorna os detalhes de um produto específico, identificado por seu ID.
Parâmetros:
id (obrigatório): ID do produto.
Exemplo de Requisição:
http

GET /products/product/1 HTTP/1.1

Exemplo de Resposta:
json
{
    
        "id": 2,
        "name": "Hamburger",
        "price": 99,99,
        "description": "Pão, Carne, Queijo, Alface, Tomate e Cebola"
    
}
POST /products
Descrição: Cria um novo produto.
Parâmetros:
Os dados do produto devem ser fornecidos no corpo da requisição no formato JSON.
Campos obrigatórios: name, price, description.
Exemplo de Requisição:
http
POST /products HTTP/1.1
Content-Type: application/json

{
    "name": "Produto C",
    "price": 199.99,
    "description": "Descrição do Produto C"
}
Exemplo de Resposta:
json

{
    "id": 3,
    "name": "Produto C",
    "price": 199.99,
    "description": "Descrição do Produto C"
}


Códigos de Status:
201 Created: Produto criado com sucesso.
400 Bad Request: Erro nos dados fornecidos.
PUT /products/product/{id}
Descrição: Atualiza as informações de um produto específico, identificado por seu ID.
Parâmetros:
id (obrigatório): ID do produto.
Os dados atualizados devem ser fornecidos no corpo da requisição no formato JSON.
Exemplo de Requisição:
http

PUT /products/product/1 HTTP/1.1
Content-Type: application/json

{
    "name": "Produto A Atualizado",
    "price": 109.99,
    "description": "Nova descrição do Produto A"
}


Exemplo de Resposta:
json
Copiar código
{
    "id": 1,
    "name": "Produto A Atualizado",
    "price": 109.99,
    "description": "Nova descrição do Produto A"
}

DELETE /products/product/{id}
Descrição: Remove um produto específico, identificado por seu ID, do sistema.
Parâmetros:
id (obrigatório): ID do produto.
Exemplo de Requisição:
http
Copiar código
DELETE /products/product/1 HTTP/1.1


Exemplo de Resposta:
json
{
    "message": "Produto removido com sucesso."
}


2. Orders 
GET /orders
Descrição: Retorna a lista de todos os pedidos.
Exemplo de Requisição:
http
GET /orders HTTP/1.1
Exemplo de Resposta:
json
[
    {
        "id": 1,
        "customer_id": 123,
        "order_date": "29/08/2024",
        "status": "Processing",
        "total_amount": 299.99
    },
    {
        "id": 2,
        "customer_id": 456,
        "order_date": "30/08/2024",
        "status": "Shipped",
        "total_amount": 149.99
    }
]

GET /orders/order/{id}
Descrição: Retorna os detalhes de um pedido específico, identificado por seu ID.
Parâmetros:
id (obrigatório): ID do pedido.
Exemplo de Requisição:
http
GET /orders/order/1 HTTP/1.1


Exemplo de Resposta:
json

{
    "id": 1,
    "customer_id": 123,
    "order_date": "29/08/2024",
    "status": "Processing",
    "total_amount": 299.99,
    "items": [
        {
            "product_id": 1,
            "quantity": 2,
            "price": 99.99
        },
        {
            "product_id": 3,
            "quantity": 1,
            "price": 99.99
        }
    ]
}
POST /orders
Descrição: Cria um novo pedido.
Parâmetros:
Os dados do pedido devem ser fornecidos no corpo da requisição no formato JSON.
Campos obrigatórios: customer_id, items (lista de objetos com product_id e quantity).
Exemplo de Requisição:
http
POST /orders HTTP/1.1
Content-Type: application/json

{
    "customer_id": 123,
    "items": [
        {
            "product_id": 1,
            "quantity": 2
        },
        {
            "product_id": 3,
            "quantity": 1
        }
    ]
}
Exemplo de Resposta:
json
{
    "id": 3,
    "customer_id": 123,
    "order_date": "29/08/2024",
    "status": "Processing",
    "total_amount": 299.97,
    "items": [
        {
            "product_id": 1,
            "quantity": 2,
            "price": 99.99
        },
        {
            "product_id": 3,
            "quantity": 1,
            "price": 99.99
        }
    ]
}
PUT /orders/order/{id}
Descrição: Atualiza as informações de um pedido específico, identificado por seu ID.
Parâmetros:
id (obrigatório): ID do pedido.
Os dados atualizados devem ser fornecidos no corpo da requisição no formato JSON.
Exemplo de Requisição:
http
PUT /orders/order/1 HTTP/1.1
Content-Type: application/json

{
    "status": "Shipped"
}
Exemplo de Resposta:
json
{
    "id": 1,
    "customer_id": 123,
    "order_date": "2023-08-29T14:23:45Z",
    "status": "Shipped",
    "total_amount": 299.99,
    "items": [
        {
            "product_id": 1,
            "quantity": 2,
            "price": 99.99
        },
        {
            "product_id": 3,
            "quantity": 1,
            "price": 99.99
        }
    ]
}

DELETE /orders/order/{id}
Descrição: Remove um pedido específico, identificado por seu ID, do sistema.
Parâmetros:
id (obrigatório): ID do pedido.
Exemplo de Requisição:
http
DELETE /orders/order/1 HTTP/1.1


Exemplo de Resposta:
json
{
    "message": "Pedido removido com sucesso."
}
