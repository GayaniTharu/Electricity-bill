<?php
// Get the number of units from the form
$units = $_POST['units'];

// Calculate the total amount
$amount = 0;
if ($units <= 50) {
  $amount = $units * 3.50;
} elseif ($units <= 150) {
  $amount = 50 * 3.50 + ($units - 50) * 4.00;
} elseif ($units <= 250) {
  $amount = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
} else {
  $amount = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
}

// Print the total amount
echo "Total amount of $units - Rs. $amount";
?>
