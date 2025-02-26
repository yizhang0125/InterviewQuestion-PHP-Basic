<?php
// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username from POST data
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    
    // Verify if username is 'abc'
    echo ($username === 'abc') ? 'Verified' : 'Error';
}
?>
