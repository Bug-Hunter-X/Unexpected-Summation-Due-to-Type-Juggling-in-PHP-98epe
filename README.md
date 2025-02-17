# PHP Type Juggling Bug
This example demonstrates a common error in PHP related to type juggling. The `calculateSum` function is intended to sum up numeric values in an array. However, if the array contains a string, PHP's loose typing system will perform type juggling, potentially leading to unexpected results.

The bug is shown in `bug.php`. The solution is demonstrated in `bugSolution.php` which uses strict type checking to prevent such errors. 