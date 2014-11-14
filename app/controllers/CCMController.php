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

    public function first_step()
    {
        $this->layout->content = View::make('step_one');
    }

}