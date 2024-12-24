<?php
// Initialize variables for the results
$result = 0;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the numbers and operator from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // Perform calculation based on the operator
    if ($operator == 'add') {
        $result = $num1 + $num2;
    } elseif ($operator == 'subtract') {
        $result = $num1 - $num2;
    } elseif ($operator == 'multiply') {
        $result = $num1 * $num2;
    } elseif ($operator == 'divide') {
        // Check to avoid division by zero
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Cannot divide by zero!";
        }
    }
}
?>

