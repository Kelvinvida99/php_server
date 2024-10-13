<?php

// principio de responsabilidad unica

class Order {
    private array $item = [];
    private float $total = 0;


    public function getTotal(){
        return $this->total;
    }

    public function addItem(string $description, float $price){
        $this->item[] = [
            'description' => $description,
            'prece' => $price
        ];

        $this->total += $price;
    }

    public function createOrder(){
        echo "Se procesa el pedido <br>";
    }
}

class EmailNotification {
    public function send(Order $order){
        echo "Mensaje del pedido, total: ".$order->getTotal();
    }
}

$newOrder = new Order();
$newOrder->addItem("Producto 1", 10.2);
$newOrder->addItem("Producto 2", 10.3);
$newOrder->createOrder();

$newEmailNotification = new EmailNotification();
$newEmailNotification->send($newOrder);
