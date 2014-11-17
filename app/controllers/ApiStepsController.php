<?php

class ApiStepsController extends \BaseController
{
    /**
     * Graba el tipo de barril
     * @return \Illuminate\Http\JsonResponse
     */
    public function step_one()
    {
        if (Input::has('barril')) Session::set('barril', Input::get('barril'));
        return Response::json(['resp' => ((Input::has('barril')) ? true : false)]);
    }

    /**
     * Graba
     */
    public function step_two()
    {

    }
}