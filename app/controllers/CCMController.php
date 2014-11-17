<?php

class CCMController extends \BaseController
{
    protected $layout = 'layout';

    /**
     * Display a listing of the resource.
     * GET /ccm
     *
     * @return Response
     */
    public function index()
    {
        $this->layout->content = View::make('index');
    }

    /**
     * Ir al paso uno
     */
    public function step_one()
    {
        $this->layout->content = View::make('step_one');
    }

    /**
     * Ir al paso dos
     */
    public function step_two()
    {
        if (Session::has('barril') && Session::get('barril') == 'david') {
            $this->layout->content = View::make('step_two');
        } else if (Session::has('barril') && Session::get('barril') == 'heineken') {
            $this->layout->content = View::make('step_two_b');
        } else {
            return Redirect::route('step.one');
        }

    }

    /**
     * Ir al paso tres
     */
    public function step_three()
    {
        if (Session::has('logo_one') && Session::has('number')) {
            $pieces = BarrelDetail::where('barrel_model_id', Session::get('barril') == 'david' ? 1:2 )->get();
            $number = Session::get('number');
            $logo = Session::get('logo_one');
            $logo_2 = Session::get('logo_two');
            $this->layout->content = View::make('step_three', array('pieces' => $pieces, 'logo' => $logo, 'number' => $number,'logo_2'=>$logo_2));
        } else {
            return Redirect::route('step.two');
        }
    }

    /**
     * Ir al paso cuatro
     */
    public function step_four()
    {

    }

    /**
     * Elimina las variables de session
     * @return \Illuminate\Http\RedirectResponse
     */
    public function flush()
    {
        Session::clear();
        Session::flush();
        return Redirect::route('step.one');
    }

}