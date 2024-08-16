<?php
// my_function.php in the /hi/ directory

function myPhpFunction($param, $id) {
    // Your PHP logic here
    return "Function executed with param: $param, event_id: $id";
}

if (isset($_GET['param']) && isset($_GET['id'])) {
    $result = myPhpFunction($_GET['param'], $_GET['id']);
    echo $result; // Send the response back to the AJAX call
}
?>