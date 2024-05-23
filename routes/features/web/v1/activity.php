<?php

use App\Http\Controllers\Web\v1\Activity\ActivityController;
use Illuminate\Support\Facades\Route;

Route::prefix("activities")
    ->group(function () {

        Route::get("", [ActivityController::class, "get"]);

    });
