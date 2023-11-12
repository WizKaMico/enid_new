<?php 

$current_level = 'GRADE 1';

// Extract numeric part from the string
preg_match('/\d+/', $current_level, $matches);
$numeric_level = intval($matches[0]);

// Add 1 to the numeric part
$next_level = 'GRADE ' . ($numeric_level + 1);

echo $next_level; // This will output "GRADE 2"