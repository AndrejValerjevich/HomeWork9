<?php

class Car {
    public $color;
    private $price;
    protected $model;

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function changeColor($color) {
        //меняем свойство $color
    }
}

class Television {
    public $size;
    public $producer;
    public $discount;
    private $price;

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price * ((100 - ($this->getDiscount()))*0.01);
    }

}

class Pen {
    private $color;
    private $material;
    public $ability_to_write;

    public function getColor()
    {
        return $this->color;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function isWrite() {
        //метод проверки, пишет ли ручка
    }
}

class Duck {
    public $class;
    public $gender;
    public $age;
    private $progeny;

    /**
     * @return mixed
     */
    public function getProgeny()
    {
        return $this->progeny;
    }

    /**
     * @param mixed $progeny
     */
    public function setProgeny($progeny)
    {
        $this->progeny = $progeny;
    }

    public function newProgeny() {
        //метод для увеличения размера потомства утки:)))
    }

}

class Product {
    private $category;
    private $name;
    private $price;

    public function __construct()
    {
        //конструктор класса Product
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}

//создаем объекты класса Car
$car1 = new Car();
$car2 = new Car();

//создаем объекты класса Television
$television1 = new Television();
$television2 = new Television();

//создаем объекты класса Pen
$pen1 = new Pen();
$pen2 = new Pen();

//создаем объекты класса Duck
$duck1 = new Duck();
$duck2 = new Duck();
//создаем объекты класса Product
$product1 = new Product();
$product2 = new Product();

?>