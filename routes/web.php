<?php

$version = config('core.version');
$base = base_path("routes/features/web/$version/");

require($base . "activity.php");
