<?php

$filename = "text.txt";

// Open in write mode ('w' overwrites, 'a' appends, 'r+' allows read+edit)
$handle = fopen($filename, "r+");

if ($handle) {
    $content = fread($handle, filesize($filename));
    $content = str_replace("old text", "new text", $content);

    // Rewind and overwrite
    rewind($handle);
    fwrite($handle, $content);
    ftruncate($handle, strlen($content)); // remove leftover old content if new is shorter

    fclose($handle);
    echo "File edited successfully.";
} else {
    echo "Could not open file.";
}
?>