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
            $details .= $car->getDetails() . "\n"; // Concatenate instead of overwriting
        }
        return $details;
    }
}

interface PaymentInterface {
    public function cash();
    public function downPaymentFinance();
    public function fullFinance();
} 

class Pay implements PaymentInterface {
    public function cash() {
        echo "Paid in cash.\n";
    }

    public function downPaymentFinance() {
        echo "Paid with down payment and finance.\n";
    }

    public function fullFinance() {
        echo "Fully financed.\n";
    }
}

class Car implements PaymentInterface {
    private $model;
    private $price;
    private $engine;
    private $mileage;
    private $dimension;
    private $paymentDetails;
   
    public function __construct($model, $price, $engine, $mileage, Dimension $dimension , PaymentInterface $paymentDetails) {
        $this->model = $model;
        $this->price = $price;
        $this->engine = $engine;
        $this->mileage = $mileage;
        $this->dimension = $dimension;
        $this->paymentDetails = $paymentDetails;
    }
   
    public function getDetails() {
        return "Model: {$this->model}, Price: {$this->price}, Engine: {$this->engine}, Mileage: {$this->mileage}, Dimensions: {$this->dimension->getDimensions(), payment:{this->paymentDetails->cash()}";
    }

    // Implementing the PaymentInterface methods
    public function cash() {
      echo "Paid in cash.\n";
    }

    public function downPaymentFinance() {
        echo "Paid with down payment and finance.\n";
    }

    public function fullFinance() {
        echo "Fully financed.\n";
    }
}

class Dimension {
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

// Assuming $paymentDetails1, $paymentDetails2, etc., are instances of Pay or another class implementing PaymentInterface
$paymentDetails1 = new Pay();
$paymentDetails2 = new Pay();
$paymentDetails3 = new Pay();
$paymentDetails4 = new Pay();

$dimension1 = new Dimension(4000, 1800, 1500);
$dimension2 = new Dimension(4200, 1900, 1600);
$dimension3 = new Dimension(4500, 2000, 1700);
$dimension4 = new Dimension(4700, 2100, 1800);

// Create Cars for Brand A
$carA1 = new Car("Model A1", 20000, "V4", "15 km/l", $dimension1, $paymentDetails1);
// Repeat for carA2, carA3, carA4 with corresponding payment details

// Create Cars for Brand B
$carB1 = new Car("Model B1", 22000, "V4", "16 km/l", $dimension1, $paymentDetails1);
// Repeat for carB2, carB3, carB4 with corresponding payment details

// Create Car Brands
$brandA = new CarBrand("Brand A");
$brandA->addCar($carA1);
// Repeat for carA2, carA3, carA4

$brandB = new CarBrand("Brand B");
$brandB->addCar($carB1);
// Repeat for carB2, carB3, carB4

// Display Car Brand Details
echo $brandA->getBrandDetails();
echo $brandB->getBrandDetails();
?>
