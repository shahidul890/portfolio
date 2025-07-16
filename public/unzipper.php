<?php
// Example: Extract to parent directory
$zipFile = dirname(__DIR__) . '/archive.zip'; // One level up from current directory
$extractTo = dirname(__DIR__) . '/'; // Extract to '/' folder in parent directory

// Alternative: Use absolute path
// $zipFile = '/path/to/your/archive.zip';
// $extractTo = '/path/to/extraction/directory/';

$zip = new ZipArchive;
if ($zip->open($zipFile) === TRUE) {
    $zip->extractTo($extractTo);
    $zip->close();
    unlink($zipFile); // Delete archive.zip after extraction
    echo 'Unzipped and cleaned up successfully';
} else {
    echo 'Failed to unzip';
}
?>
