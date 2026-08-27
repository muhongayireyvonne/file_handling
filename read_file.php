
<?php
// Read entire file into a string
$content = file_get_contents("The 9MP Fall 2025 Application Form.pdf");
echo $content;

// Read file into an array (one line per element)
$lines = file("The 9MP Fall 2025 Application Form.pdf");

// Manual open/read/close (more control)
$handle = fopen("The 9MP Fall 2025 Application Form.pdf", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        echo $line;
    }
    fclose($handle);
}
?>