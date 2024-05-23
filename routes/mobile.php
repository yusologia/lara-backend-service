<?php

$version = config('core.version');
$base = base_path("routes/features/mobile/$version/");

require($base . "activity.php");
