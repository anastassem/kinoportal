<?php
ob_start();
?>
ОЙ! Error 404
<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>