<?php

namespace App\Http\Controllers\Web\v1\Activity;

use App\Http\Controllers\Controller;
use App\Models\v1\Activity\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function get(Request $request)
    {
        $activities = Activity::filter($request)->getOrPaginate($request, true);
        return success($activities);
    }
}
