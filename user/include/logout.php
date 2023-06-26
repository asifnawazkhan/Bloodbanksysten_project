<?php 
    session_start();
    session_destroy();
    $_SESSION = array(); // This line is unnecessary, as session_destroy() already clears the session variables.
    header("Location: ../index.php");
    exit; // It's a good practice to include an exit statement after a header redirect.
?>
