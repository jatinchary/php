 <?php

// trait comp1{
//     public function total_emp(){
//         echo 500;
//     }

// }

// trait comp2{
//     public function total_emp(){
//         echo 700;
//     }

// }

// class Company{
// use comp1;
// use comp2{
//     comp1 ::total_emp insteadof comp2;
//     comp2 ::total_emp as empcomp2;   
// }

// // public function total_emp(){
// //     echo 600;
// // }


// }

// $data = new Company;
// $data->total_emp() ;
// echo "\n";
// $data->empcomp2();



<?php

// Define the arrays
$data = [
    "x" => ["a" => 1, "b" => 2, "s" => 3, "d" => 4, "f" => 5],
    "y" => ["a1" => 1, "b1" => 2, "s1" => 3, "d1" => 9, "f1" => 5, "g1" => 6],
    "z" => ["a2" => 1, "b3" => 2, "s4" => 3]
];

// Initialize variables to track the maximum value and its key
$maxValue = PHP_INT_MIN; // Start with the smallest possible integer
$maxKey = '';


foreach ($data as $subArray) {
    foreach ($subArray as $key => $value) {
        
        if ($value > $maxValue) {
            $maxValue = $value; // Update the maximum value
            $maxKey = $key;     // Update the corresponding key
        }
    }
}

// Output the result
echo "The key with the maximum value is: '$maxKey' with a value of $maxValue.\n";

?>





<?php
// Original array
$originalArray = array(
    "one" => "1",
    "two" => "2",
    "three" => "3"
);

// Swapping keys and values
$swappedArray = array_flip($originalArray);

// Displaying the original and swapped arrays
echo "Original Array:\n";
print_r($originalArray);
echo "\nSwapped Array:\n";
print_r($swappedArray);
?>





?> 