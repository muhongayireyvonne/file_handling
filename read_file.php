
<?php
require 'vendor/autoload.php';

use Smalot\PdfParser\Parser;

$parser = new Parser();
$pdf = $parser->parseFile('The 9MP Fall 2025 Application Form.pdf');
$text = $pdf->getText();

echo nl2br($text); 
?>