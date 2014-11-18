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
            $pieces = BarrelDetail::where('barrel_id', ((Session::get('barril') == 'david') ? 1 : 2))->get();
            $this->layout->content = View::make('step_three', array(
                'pieces' => $pieces,
                'logo' => Session::get('logo_one'),
                'number' => Session::get('number'),
                'logo_2' => (Session::has('logo_two')) ? Session::get('logo_two') : 'none'
            ));
        } else {
            return Redirect::route('step.two');
        }
    }

    /**
     * Ir al paso cuatro
     */
    public function step_four()
    {
        if (Session::has('logo_one') && Session::has('number')) {
            $pieces = BarrelDetail::where('barrel_id', ((Session::get('barril') == 'david') ? 1 : 2))->get();
            $price = 0;
            $array = [];
            foreach ($pieces as $piece) {
                if (explode('_', $piece->image)[0] == 'LENS' || explode('_', $piece->image)[0] == 'MANERAL') {
                    if (strtolower($piece->image) == strtolower(explode('_', $piece->image)[0] . '_' . Session::get('logo_one') . '.jpg') || strtolower($piece->image) == strtolower(explode('_', $piece->image)[0] . '_' . Session::get('logo_two') . '.jpg')) {
                        $price += $piece->unit_price * $piece->quantity * Session::get('number');
                        array_push($array, $piece);
                    }
                } else {
                    $price += $piece->unit_price * $piece->quantity * Session::get('number');
                    array_push($array, $piece);
                }
            }
            $this->layout->content = View::make('step_four', array(
                'pieces' => $array,
                'number' => Session::get('number'),
                'total_cost' => $price
            ));
        } else {
            return Redirect::route('step.two');
        }
    }

    /**
     * Ir al paso 5
     */
    public function step_five()
    {
        $this->layout->content = View::make('step_five');
    }

    public function excel()
    {
        $pieces = BarrelDetail::where('barrel_id', ((Session::get('barril') == 'david') ? 1 : 2))->get();
        $price = 0;
        $array = [['SKU', 'Material', 'Cantidad por equipo', 'Precio', 'Descripcion', 'Tipo de PEP a utilizar', 'Cantidad a ordenar', 'Presupuesto requerido']];
        foreach ($pieces as $piece) {
            if (explode('_', $piece->image)[0] == 'LENS' || explode('_', $piece->image)[0] == 'MANERAL') {
                if (strtolower($piece->image) == strtolower(explode('_', $piece->image)[0] . '_' . Session::get('logo_one') . '.jpg') || strtolower($piece->image) == strtolower(explode('_', $piece->image)[0] . '_' . Session::get('logo_two') . '.jpg')) {
                    array_push($array, [$piece->sku, $piece->material, $piece->quantity, $piece->unit_price, $piece->description, $piece->pep, $piece->quantity * Session::get('number'), $piece->quantity * Session::get('number') * $piece->unit_price]);
                }
            } else {
                array_push($array, [$piece->sku, $piece->material, $piece->quantity, $piece->unit_price, $piece->description, $piece->pep, $piece->quantity * Session::get('number'), $piece->quantity * Session::get('number') * $piece->unit_price]);
            }
        }
        Excel::create('Listado de Materiales', function ($excel) use ($array) {
            $excel->sheet('sheet 1', function ($sheet) use ($array) {
                $sheet->fromArray($array);
            });
        })->download('xlsx');
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