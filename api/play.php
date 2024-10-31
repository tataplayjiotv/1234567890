<?php
// Get the 'id' parameter from the URL
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Check if id is not empty, then proceed with the redirection
if (!empty($id)) {
    // Redirect to the new URL with the dynamic id
    header("Location: https://jio.jiotv.link/api/3.php?live=true&in=ts_live_$id");
    exit;
} else {
    // If no id is provided, you can handle the error or redirect to a default page
    echo "No ID provided!";
}
?>
