<?php

class Prodotti{
    private string $name;
    private float $price;
    private string $petType;
    private int $sale = 0;
    private bool $available;

    public function __construct($name, $price, $petType, $available){
        $this->name = $name;
        $this->price = $price;
        $this->petType = $petType;
        $this->available = $$available;
    }

    public function setSale($sale){    
        $this->sale = $sale;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getPT() {
        return $this->petType;
    }

    public function getAvailable() {
        return $this->available;
    }
}

class Cibo extends Prodotti{
    private $bestBefore;
    private string $foodType;
    private $weight;

    public function __construct($name, $price, $petType, $available, $bestBefore, $foodType, $weight){
        parent::__construct($name, $price, $petType, $available);
        $this->bestBefore = $bestBefore;
        $this->foodType = $foodType;
        $this->weight = $weight;
    }

    public function getBB() {
        return $this->bestBefore;
    }

    public function getFT() {
        return $this->foodType;
    }
}

class Giochi extends Prodotti{
    private string $gameType;
    private string $material;

    public function __construct($name, $price, $petType, $available,$gameType,$material){
        parent::__construct($name, $price, $petType, $available);
        $this->gameType = $gameType;
        $this->material = $material;


    }
    public function getGT() {
        return $this->gameType;
    }

    public function getMaterial() {
        return $this->material;
    }
}

