<?php
session_start();
if (isset($_SESSION['notas'])) {
  session_destroy();
}
header("Refresh:2; url=nota_media.php");

exit();
?>