<?php

class CarBrand {
    private $brandName;
    private $cars;
 
    public function __construct($brandName) {
        $this->brandName = $brandName;
        $this->cars = [];
    }
 
    public function addCar(Car $car) {
        $this->cars[] = $car;
    }
 
    public function getBrandDetails() {
        $details = "Brand: {$this->brandName}\n";
        foreach ($this->cars as $car) {
            $details .= $car->getDetails() . "\n";
        }
        return $details;
    }
}
 

interface PaymentOptions {
    public function fullPayment();
    public function downPaymentWithFinance();
    public function fullFinance();
}
 
// Car Class
class Car extends CarBrand implements PaymentOptions {
    private $model;
    private $price;
    private $engine;
    private $mileage;
    private $dimension;
 
    public function __construct($model, $price, $engine, $mileage, Dimension $dimension) {
        $this->model = $model;
        $this->price = $price;
        $this->engine = $engine;
        $this->mileage = $mileage;
        $this->dimension = $dimension;
    }
 
    public function getDetails() {
        return "Model: {$this->model}, Price: {$this->price}, Engine: {$this->engine}, Mileage: {$this->mileage}, Dimensions: {$this->dimension->getDimensions()}";
    }
    
     public function fullPayment() {
        echo "Full payment made for {$this->model}. Total price: {$this->price}.\n";
    }

    public function downPaymentWithFinance() {
        $downPayment = $this->price * 0.20; 
        $remainingAmount = $this->price - $downPayment;
        echo "Down payment made for {$this->model}. Down payment: {$downPayment}, Remaining amount to be financed: {$remainingAmount}.\n";
    }

    public function fullFinance() {
        echo "Full finance arranged for {$this->model}. Total price to be financed: {$this->price}.\n";
    }
}
 



class Dimension extends Car {
    private $length;
    private $breadth;
    private $height;
 
    public function __construct($length, $breadth, $height) {
        $this->length = $length;
        $this->breadth = $breadth;
        $this->height = $height;
    }
 
    public function getDimensions() {
        return "Length: {$this->length}, Breadth: {$this->breadth}, Height: {$this->height}";
    }
}
 
// Create Dimensions
$dimension1 = new Dimension(4000, 1800, 1500);
$dimension2 = new Dimension(4200, 1900, 1600);
$dimension3 = new Dimension(4500, 2000, 1700);
$dimension4 = new Dimension(4700, 2100, 1800);
 
// Create Cars for Brand A
$carA1 = new Car("Model A1", 20000, "V4", "15 km/l", $dimension1);
$carA2 = new Car("Model A2", 25000, "V6", "12 km/l", $dimension2);
$carA3 = new Car("Model A3", 30000, "V8", "10 km/l", $dimension3);
$carA4 = new Car("Model A4", 35000, "V12", "8 km/l", $dimension4);
 
// Create Cars for Brand B
$carB1 = new Car("Model B1", 22000, "V4", "16 km/l", $dimension1);
$carB2 = new Car("Model B2", 27000, "V6", "13 km/l", $dimension2);
$carB3 = new Car("Model B3", 32000, "V8", "11 km/l", $dimension3);
$carB4 = new Car("Model B4", 37000, "V12", "9 km/l", $dimension4);
 
// Create Car Brands
$brandA = new CarBrand("Brand A");
$brandA->addCar($carA1);
$brandA->addCar($carA2);
$brandA->addCar($carA3);
$brandA->addCar($carA4);
 
$brandB = new CarBrand("Brand B");
$brandB->addCar($carB1);
$brandB->addCar($carB2);
$brandB->addCar($carB3);
$brandB->addCar($carB4);

$carA1->fullPayment();
$carB1->downPaymentWithFinance();
$carB4->fullFinance();
 
// Display Car Brand Details
echo $brandA->getBrandDetails();
echo $brandB->getBrandDetails();
 
?>