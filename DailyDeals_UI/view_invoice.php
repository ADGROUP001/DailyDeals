<?php
$invoice_path = $_GET['invoice'] ?? '';

if ($invoice_path && file_exists($invoice_path)) {
    // Set headers to force download
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="' . basename($invoice_path) . '"');
    readfile($invoice_path);
    exit();
} else {
    echo "Invoice not found.";
}
?>
