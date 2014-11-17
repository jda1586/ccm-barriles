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
        if (Session::has('barril') && Session::get('barril') != 'none') {
            $this->layout->content = View::make('step_two');
        } else {
            return Redirect::route('step.one');
        }

    }

    /**
     * Ir al paso tres
     */
    public function step_three()
    {
        $this->layout->content = View::make('step_three');
    }

    public function step_four()
    {

    }

    public function flush()
    {
        Session::clear();
    }

}