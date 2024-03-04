<?php ob_start() ?>

<h1>Un projet professionnel</h1>

<?php
$content = ob_get_clean();
require "template.view.php";
