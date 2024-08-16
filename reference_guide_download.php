<?php
// We'll be outputting a PDF
header('Content-type: application/pdf');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="reference_guide.pdf"');
// header("Content-Disposition: inline; filename=filename.pdf");

// The PDF source is in original.pdf
readfile('./assets/reference_guide.pdf');
?>