<?php ob_start() ?>

<h1>Nos métiers</h1>

<?php
$content = ob_get_clean();
require "template.view.php";
