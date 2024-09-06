<?php
$filename = 'data.txt';

// Check if the file exists
if (file_exists($filename)) {
    
    // Read the content of the file
    $content = file_get_contents($filename);
    echo "File content:\n";
    echo nl2br(htmlspecialchars($content)) . "\n\n"; // Convert newlines to <br> and escape special characters

    // Read the file into an array of lines
    $lines = file($filename);
    echo "Lines in the file:\n";
    foreach ($lines as $line) {
        echo htmlspecialchars($line) . "<br>"; // Escape special characters and display each line
    }
} else {
    
    // Create the file and write content to it
    $newContent = "Hello, this a new php file.\n";
    file_put_contents($filename, $newContent);
    echo "File created and content written to 'data.txt'.";
}
?>





