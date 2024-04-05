<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

session_start();

if(isset($_POST['logout'])){
    $_SESSION = array ();

    session_destroy();

header("Location: /practice/msumaigo?logout=success");
exit;
}
?>
