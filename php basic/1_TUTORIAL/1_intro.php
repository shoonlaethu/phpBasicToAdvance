<?php

  echo "hi";
  $greeting = "konnichiwa";
  echo "I love $greeting!";


//   comments
//--------------------
// This is a single-line comment
# This is also a single-line comment
/* This is a multi-line comment */


//  variable
//--------------------
$x = 5;
var_dump($x);
// returns the data type



// PHP Variables Scope
//--------------------

// local
// global
// static

$xx = 5; // global scope
function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $xx</p>";
    $xxx = 5; // local scope
    echo "<p>Variable x inside function is: $xxx</p>";
  }
myTest();

echo "<p>Variable x outside function is: $xx</p>";
// using x outside the function will generate an error
echo "<p>Variable x outside function is: $xxx</p>";


// PHP Data Types
//--------------------

// String
$name = "Shoon Lae Thu";

// Integer
$age = 21;

// Float (floating point numbers)
$height = 5.11;

// Boolean
$isStudent = true;

// Array
$colors = array("Red", "Green", "Blue");

// Object
class Person {
    public $name;
    public $age;
    
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$person = new Person("Alice", 30);

// NULL
$variable = null;

// Resource (example resource)
$file = fopen("example.txt", "r");

// Using the variables
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Is Student: " . ($isStudent ? "Yes" : "No") . "<br>";
echo "Colors: " . implode(", ", $colors) . "<br>";
echo "Person: " . $person->name . " - " . $person->age . "<br>";
echo "Variable: " . var_export($variable, true) . "<br>";

// Don't forget to close the resource
fclose($file);

// Casting allows you to change data type
$z = 5;
$z = (string) $z;
var_dump($z);



//------Number
// Infinity in PHP can be obtained through division by zero or using the constant INF.

// Using division by zero
$infinity = 1.0 / 0;
echo "Infinity: " . $infinity . "\n"; // Output: Infinity: INF

// Using the constant INF
$infinity = INF;
echo "Infinity: " . $infinity . "\n"; // Output: Infinity: INF

// Checking for infinity
if (is_infinite($infinity)) {
    echo "The value is infinite.\n"; // This will be printed
}

// Positive Infinity
$positive_infinity = INF;
echo "Positive Infinity: " . $positive_infinity . "\n"; // Output: Positive Infinity: INF

// Negative Infinity
$negative_infinity = -INF;
echo "Negative Infinity: " . $negative_infinity . "\n"; // Output: Negative Infinity: -INF

// Checking for negative infinity
if (is_infinite($negative_infinity) && $negative_infinity < 0) {
    echo "The value is negative infinite.\n"; // This will be printed
}

// NaN (Not a Number)
// NaN is a special value used to represent undefined or unrepresentable numerical results, such as the result of an invalid operation.

$nan = acos(2); // The result of acos(2) is NaN because the domain of acos is [-1, 1]
echo "NaN: " . $nan . "\n"; // Output: NaN: NAN

// Another example with sqrt of a negative number
$nan = sqrt(-1);
echo "NaN: " . $nan . "\n"; // Output: NaN: NAN

// Checking for NaN
if (is_nan($nan)) {
    echo "The value is NaN.\n"; // This will be printed
}

// NaN generated by an invalid arithmetic operation
$nan = 0 / 0;
echo "NaN: " . $nan . "\n"; // Output: NaN: NAN

// Another way to generate NaN
$nan = INF - INF;
echo "NaN: " . $nan . "\n"; // Output: NaN: NAN

//-------Integer

// PHP_INT_MAX - The largest integer supported
$maxInt = PHP_INT_MAX;
echo "PHP_INT_MAX: " . $maxInt . "\n"; // Output: PHP_INT_MAX: 9223372036854775807 on a 64-bit system

// PHP_INT_MIN - The smallest integer supported
$minInt = PHP_INT_MIN;
echo "PHP_INT_MIN: " . $minInt . "\n"; // Output: PHP_INT_MIN: -9223372036854775808 on a 64-bit system

// PHP_INT_SIZE - The size of an integer in bytes
$intSize = PHP_INT_SIZE;
echo "PHP_INT_SIZE: " . $intSize . " bytes\n"; // Output: PHP_INT_SIZE: 8 bytes on a 64-bit system

// Checking if a variable is an integer using is_int()
$value1 = 42;
if (is_int($value1)) {
    echo "\$value1 is an integer.\n"; // This will be printed
}

// Checking if a variable is an integer using is_integer() - alias of is_int()
$value2 = 3.14;
if (is_integer($value2)) {
    echo "\$value2 is an integer.\n";
} else {
    echo "\$value2 is not an integer.\n"; // This will be printed
}

// Checking if a variable is an integer using is_long() - alias of is_int()
$value3 = 9223372036854775807;
if (is_long($value3)) {
    echo "\$value3 is an integer.\n"; // This will be printed
}

// Testing other data types
$value4 = "123";
if (is_int($value4)) {
    echo "\$value4 is an integer.\n";
} else {
    echo "\$value4 is not an integer.\n"; // This will be printed
}

$value5 = true;
if (is_int($value5)) {
    echo "\$value5 is an integer.\n";
} else {
    echo "\$value5 is not an integer.\n"; // This will be printed
}



//-------float

// PHP_FLOAT_MAX - The largest representable floating point number
$maxFloat = PHP_FLOAT_MAX;
echo "PHP_FLOAT_MAX: " . $maxFloat . "\n"; // Output: PHP_FLOAT_MAX: 1.7976931348623E+308

// PHP_FLOAT_MIN - The smallest representable positive floating point number
$minFloat = PHP_FLOAT_MIN;
echo "PHP_FLOAT_MIN: " . $minFloat . "\n"; // Output: PHP_FLOAT_MIN: 2.2250738585072E-308

// PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
$floatDig = PHP_FLOAT_DIG;
echo "PHP_FLOAT_DIG: " . $floatDig . "\n"; // Output: PHP_FLOAT_DIG: 15

// PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
$floatEpsilon = PHP_FLOAT_EPSILON;
echo "PHP_FLOAT_EPSILON: " . $floatEpsilon . "\n"; // Output: PHP_FLOAT_EPSILON: 2.2204460492503E-16

// Checking if a variable is a float using is_float()
$value1 = 3.14;
if (is_float($value1)) {
    echo "\$value1 is a float.\n"; // This will be printed
}

// Checking if a variable is a float using is_double() - alias of is_float()
$value2 = 42;
if (is_double($value2)) {
    echo "\$value2 is a float.\n";
} else {
    echo "\$value2 is not a float.\n"; // This will be printed
}

// Testing other data types
$value3 = "3.14";
if (is_float($value3)) {
    echo "\$value3 is a float.\n";
} else {
    echo "\$value3 is not a float.\n"; // This will be printed
}

$value4 = true;
if (is_float($value4)) {
    echo "\$value4 is a float.\n";
} else {
    echo "\$value4 is not a float.\n"; // This will be printed
}

// Special values
$value5 = NAN;
if (is_float($value5)) {
    echo "\$value5 is a float.\n"; // This will be printed
} else {
    echo "\$value5 is not a float.\n";
}

$value6 = INF;
if (is_float($value6)) {
    echo "\$value6 is a float.\n"; // This will be printed
} else {
    echo "\$value6 is not a float.\n";
}

//-------- nan infinite numeric

// Numerical string to number conversion
$numStr = "123.45";
$num = (float)$numStr;
echo "Numerical string to float: " . $num . "\n"; // Output: 123.45

// String that cannot be converted to a valid number
$invalidNumStr = "abc";
$num = (float)$invalidNumStr;
echo "Invalid numerical string to float: " . $num . "\n"; // Output: 0

// Check if a string is numerical
function is_numerical_string($str) {
    return is_numeric($str);
}

$numStr1 = "123.45";
$numStr2 = "abc";
echo "$numStr1 is numerical: " . (is_numerical_string($numStr1) ? "Yes" : "No") . "\n"; // Output: Yes
echo "$numStr2 is numerical: " . (is_numerical_string($numStr2) ? "Yes" : "No") . "\n"; // Output: No

// NaN (Not a Number)
$nan = acos(2); // Invalid operation, acos(2) returns NaN because the domain of acos is [-1, 1]
echo "NaN: " . $nan . "\n"; // Output: NaN

// Check if a value is NaN
if (is_nan($nan)) {
    echo "The value is NaN.\n"; // This will be printed
}

// Infinity
$infinity = 1.0 / 0; // Division by zero results in Infinity
echo "Infinity: " . $infinity . "\n"; // Output: INF

// Negative Infinity
$negInfinity = -1.0 / 0; // Division by negative zero results in negative Infinity
echo "Negative Infinity: " . $negInfinity . "\n"; // Output: -INF

// Check if a value is infinite
if (is_infinite($infinity)) {
    echo "The value is infinite.\n"; // This will be printed
}

//--------- Special cases with string to number conversion resulting in Infinity and NaN
$strInf = "INF";
$strNegInf = "-INF";
$strNan = "NAN";

$infFromStr = (float)$strInf;
$negInfFromStr = (float)$strNegInf;
$nanFromStr = (float)$strNan;

echo "String to Infinity: " . $infFromStr . "\n"; // Output: INF
echo "String to Negative Infinity: " . $negInfFromStr . "\n"; // Output: -INF
echo "String to NaN: " . $nanFromStr . "\n"; // Output: NaN

// Check if the values from strings are special float values
if (is_infinite($infFromStr)) {
    echo "\$infFromStr is infinite.\n"; // This will be printed
}

if (is_infinite($negInfFromStr) && $negInfFromStr < 0) {
    echo "\$negInfFromStr is negative infinite.\n"; // This will be printed
}

if (is_nan($nanFromStr)) {
    echo "\$nanFromStr is NaN.\n"; // This will be printed
}



?>