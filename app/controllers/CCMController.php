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
     * Show the form for creating a new resource.
     * GET /ccm/create
     *
     * @return Response
     */

    public function step_one()
    {
           $this->layout->content = View::make('step_one');
    }

    /**
     * Ir al paso 2
     */
    public function step_two()
    {
        $this->layout->content = View::make('step_two');
    }

    public function step_three()
    {
        $this->layout->content = View::make('step_three');
    }

}