<?php
// File: download_invoice.php

// Define the path to the PDF invoice
$file_path = __DIR__ . '/invoices/invoice.pdf';

// Check if the file exists
if (file_exists($file_path)) {
    // Set headers to force download
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="invoice.pdf"');
    // Output the file
    readfile($file_path);
    exit;
} else {
    echo "File not found.";
}
?>
