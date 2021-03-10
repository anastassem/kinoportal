<?php
ob_start();
?>
<h1>Все фильмы</h1>
<br>

<?php
ViewNews::AllNews($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>