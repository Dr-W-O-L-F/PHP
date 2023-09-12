<?php
function calculateAverage($input) {
    // Split the input string into an array using ',' as the delimiter
    $numbersArray = explode(',', $input);

    // Remove any leading or trailing white spaces from each element in the array
   /* $numbersArray = array_map('trim', $numbersArray);

    // Filter out any empty elements
    $numbersArray = array_filter($numbersArray);*/

    // Calculate the average
    $sum = array_sum($numbersArray);
    $count = count($numbersArray);

    if ($count > 0) {
        $average = $sum / $count;
        return $average;
    } else {
        return false; // Return false if no valid numbers are entered
    }
}

if (isset($_POST['calculate'])) {
    $input = $_POST['numbers'];

    $average = calculateAverage($input);

    if ($average !== false) {
        echo "The average of the numbers is: $average";
    } else {
        echo "Please enter valid numbers separated by commas.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Average Calculator</title>
</head>
<body>
    <h1>Average Calculator</h1>
    <form method="post">
        <label for="numbers">Enter numbers (comma-separated):</label>
        <input type="text" name="numbers" id="numbers" required>
        <input type="submit" name="calculate" value="Calculate Average">
    </form>
</body>
</html>
