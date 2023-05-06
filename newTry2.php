<?php
$dir_path = 'C:\nvflash\marlor';
$zip_path = 'C:\nvflash\marlor\newrarfile.rar';

$new_folder = 'drucktemplat';

// Create a new RAR file if it doesn't exist
if (!file_exists($zip_path)) {
    $new_rar = sprintf('rar a %s %s', $zip_path, $dir_path);
    exec($new_rar);
}

// Add files to the new folder in the RAR file
$add_files = sprintf('rar a %s %s\%s\* %s', $zip_path, $new_folder, basename($dir_path), $dir_path);
exec($add_files);
?>