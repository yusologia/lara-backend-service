<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function testing(Request $request)
    {
        try {

            return success();

        } catch (\Error $error) {
            exception($error);
        }
    }
}
