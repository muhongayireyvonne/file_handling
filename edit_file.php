<?php

$filename = "text.txt";

$handle = fopen($filename, "r+");

if ($handle) {
    $content = fread($handle, filesize($filename));
    $content = str_replace("old text", "new text", $content);

    // Rewind and overwrite
    rewind($handle);
    fwrite($handle, $content);
    ftruncate($handle, strlen($content)); 

    fclose($handle);
    echo "File edited successfully.";
} else {
    echo "Could not open file.";
}
?>