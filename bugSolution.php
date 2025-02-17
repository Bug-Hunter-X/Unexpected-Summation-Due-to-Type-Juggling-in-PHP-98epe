```php
function calculateSum(array $numbers): float {
  $sum = 0.0; // Initialize as a float to handle potential decimals
  foreach ($numbers as $number) {
    if (is_numeric($number)) {  // Check if the element is numeric
      $sum += (float)$number; // Type cast to float for safety
    } else {
      trigger_error("Non-numeric value encountered in array", E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum;
```