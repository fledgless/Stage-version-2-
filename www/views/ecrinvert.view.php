<?php ob_start() ?>

<h1>Un écrin vert</h1>

<?php
$content = ob_get_clean();
require "template.view.php";
