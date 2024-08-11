
 
### 1. `array()`

Creates an array.
 
```php

$fruits = array("Apple", "Banana", "Cherry");

print_r($fruits); // Outputs: Array ( [1] => Apple [2] => Banana [3] => Cherry )

```
 
### 2. `array_change_key_case()`

Changes all keys in an array to lowercase or uppercase.
 
```php

$array = array("FName"=>"John", "LName"=>"Doe");

print_r(array_change_key_case($array, CASE_LOWER)); // Outputs: Array ( [fname] => John [lname] => Doe )

```
 
### 3. `array_chunk()`

Splits an array into chunks of arrays.
 
```php

$numbers = array(1, 2, 3, 4, 5);

print_r(array_chunk($numbers, 2)); // Outputs: Array ( [1] => Array ( [1] => 1 [2] => 2 ) [2] => Array ( [1] => 3 [2] => 4 ) [3] => Array ( [1] => 5 ) )

```
 
### 4. `array_count_values()`

Counts all the values of an array.
 
```php

$colors = array("red", "green", "blue", "red");

print_r(array_count_values($colors)); // Outputs: Array ( [red] => 2 [green] => 1 [blue] => 1 )

```
 
### 5. `array_diff()`

Compares arrays, and returns the differences (compare values only).
 
```php

$array1 = array("a" => "green", "b" => "brown", "c" => "blue");

$array2 = array("a" => "green", "b" => "yellow", "c" => "blue");

print_r(array_diff($array1, $array2)); // Outputs: Array ( [b] => brown )

```
 
### 6. `array_filter()`

Filters the values of an array using a callback function.
 
```php

$numbers = array(1, 2, 3, 4, 5);

$filtered = array_filter($numbers, function($value) { return $value > 3; });

print_r($filtered); // Outputs: Array ( [4] => 4 [5] => 5 )

```
 
### 7. `array_flip()`

Flips/exchanges all keys with their associated values in an array.
 
```php

$array = array("a" => "green", "b" => "brown", "c" => "blue");

print_r(array_flip($array)); // Outputs: Array ( [green] => a [brown] => b [blue] => c )

```
 
### 8. `array_merge()`

Merges one or more arrays into one array.
 
```php

$array1 = array("color" => "red", 2, 4);

$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$result = array_merge($array1, $array2);

print_r($result); // Merges arrays and reindexes numeric keys

```
 
These examples illustrate how PHP's array functions can be used to perform common tasks such as creating arrays, modifying keys, splitting arrays, counting values, comparing arrays, filtering elements, flipping keys and values, and merging arrays. Each function serves a unique purpose, allowing for flexible and efficient manipulation of array data within PHP scripts.
 
Citations:

[1] https://www.w3schools.com/php/php_ref_array.asp

[2] https://www.php.net/manual/en/ref.array.php

[3] https://blog.hubspot.com/website/php-array-functions

[4] https://www.geeksforgeeks.org/php-array-functions-complete-reference/

[5] https://www.javatpoint.com/php-array-functions

[6] https://dev.to/karleb/10-php-array-functions-and-how-to-use-them-462n

[7] https://www.tutorialspoint.com/php/php_array_functions.htm

[8] https://www.php.net/manual/en/language.types.array.php

[9] https://www.scaler.com/topics/php-tutorial/array-function-in-php/

[10] https://www.w3schools.com/php/func_array.asp
W3Schools.com
W3Schools offers free online tutorials, references and exercises in all the major languages of the web. Covering popular subjects like HTML, CSS, JavaScript, Python, SQL, Java, and many, many more.
 
Continuing from the previous examples, here are more PHP array functions with their descriptions and usage examples:
 
### 9. `array_column()`

Returns the values from a single column in the input array.
 
```php

$data = array(

    array("name" => "John", "age" => 30),

    array("name" => "Jane", "age" => 25),

);

$ages = array_column($data, 'age');

print_r($ages); // Outputs: Array ( [1] => 30 [2] => 25 )

```
 
### 10. `array_combine()`

Creates an array by using the elements from one "keys" array and one "values" array.
 
```php

$keys = array("one", "two", "three");

$values = array(1, 2, 3);

$result = array_combine($keys, $values);

print_r($result); // Outputs: Array ( [one] => 1 [two] => 2 [three] => 3 )

```
 
### 11. `array_diff_assoc()`

Compares arrays, and returns the differences (compare keys and values).
 
```php

$array1 = array("a" => "green", "b" => "brown", "c" => "blue");

$array2 = array("a" => "green", "b" => "yellow", "c" => "blue");

$result = array_diff_assoc($array1, $array2);

print_r($result); // Outputs: Array ( [b] => brown )

```
 
### 12. `array_fill()`

Fills an array with values.
 
```php

$array = array_fill(0, 10, "Hello");

print_r($array); // Outputs: Array ( [1] => Hello [2] => Hello [3] => Hello ... [10] => Hello )

```
 
### 13. `array_map()`

Sends each value of an array to a user-made function, which returns new values.
 
```php

$numbers = array(1, 2, 3, 4, 5);

$squared = array_map(function($number) {

    return $number * $number;

}, $numbers);

print_r($squared); // Outputs: Array ( [1] => 1 [2] => 4 [3] => 9 [4] => 16 [5] => 25 )

```
 
### 14. `array_product()`

Calculates the product of the values in an array.
 
```php

$numbers = array(1, 2, 3, 4, 5);

$product = array_product($numbers);

echo $product; // Outputs: 120

```
 
### 15. `array_reduce()`

Returns an array as a string, using a user-defined function.
 
```php

$numbers = array(1, 2, 3, 4, 5);

$sum = array_reduce($numbers, function($carry, $item) {

    return $carry + $item;

});

echo $sum; // Outputs: 15

```
 
### 16. `array_search()`

Searches an array for a given value and returns the key.
 
```php

$array = array("apple", "orange", "banana");

$key = array_search("orange", $array);

echo $key; // Outputs: 1

```
 
### 17. `array_slice()`

Returns selected parts of an array.
 
```php

$array = array("a", "b", "c", "d", "e");

$sliced = array_slice($array, 1, 3);

print_r($sliced); // Outputs: Array ( [1] => b [2] => c [3] => d )

```
 
