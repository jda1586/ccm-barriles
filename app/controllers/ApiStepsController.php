<?php

class ApiStepsController extends \BaseController
{
    /**
     * Graba el tipo de barril
     * @return \Illuminate\Http\JsonResponse
     */
    public function step_one()
    {
        if (Input::has('barril')) Session::put(['barril' => Input::get('barril')]);
        return Response::json(['resp' => ((Input::has('barril')) ? true : false)]);
    }

    /**
     * Graba
     */
    public function step_two()
    {
        if (Session::get('barril') == 'david' && Input::has('logo_one') && Input::has('logo_two') && Input::has('number')) {
            Session::put([
                'logo_one' => Input::get('logo_one'),
                'logo_two' => Input::get('logo_two'),
                'number' => Input::get('number'),
            ]);
            return Response::json(['resp' => true]);
        } else if (Session::get('barril') == 'heineken' && Input::has('logo_one') && Input::has('number')) {
            Session::put([
                'logo_one' => Input::get('logo_one'),
                'number' => Input::get('number'),
            ]);
            return Response::json(['resp' => true]);
        } else {
            return Response::json(['resp' => false]);
        }
    }

    public function get_data()
    {
        $data = BarrelDetail::find(Input::get('id'));
        return Response::json($data);
    }
}