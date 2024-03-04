<?php ob_start() ?>
<h1>Accueil</h1>
<?php
$content = ob_get_clean();
require_once "template.view.php";
