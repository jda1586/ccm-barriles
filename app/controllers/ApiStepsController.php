<?php

class ApiStepsController extends \BaseController
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function step_one()
    {
        if (Input::has('barril')) Session::set('barril', Input::get('barril'));
        return Response::json(['resp' => ((Input::has('barril')) ? true : false)]);
    }

    /**
     *
     */
    public function step_two()
    {

    }
}