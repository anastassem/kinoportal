<?php
ob_start();
?>
<h1>Топ 3 Фильма</h1>
<br>
<?php
ViewNews::NewsByCategory($arr);

$content = ob_get_clean();

include_once 'view/layout.php';
?>