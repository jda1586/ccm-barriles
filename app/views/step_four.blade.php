@section('header')
    <div style="text-align: center; background: url('/img/rectangle.png') repeat-x bottom;">
        <p style="padding: 0px 0px 20px 0px;">{{ HTML::image('/img/logo-ccm.png') }}</p>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12" style="margin-top: 40px; font-family: Droid serif; font-size:18px; text-align: center; line-height: 15px;">
           <p>
                <span style="margin: 0px 2px 0px 2px;">PASO <span style="color:rgb(255, 138, 0);">5</span> de 6</span>
                <span> |  Descarga un archivo de EXCEL con la lista de materiales para hacer tu pedido en SAP. </span>
           </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="margin-top: 40px; padding-bottom: 30px; font-family: Oswald 300; font-size:22px; text-align: center; background: url('/img/rectangule-2.png') repeat-x bottom;">
            <span >{{ HTML::image( Session::get('barril')=='david' ? '/img/a-icon.png':'/img/b-icon.png') }}</span>
            <span style="font-size: 40px;"><strong>{{ Session::get('barril')=='david' ? 'DAVID XL':'HEINEKEN EXTRA COLD ' }} <span style="font-size: 50px;">|</span></strong> </span>
           <strong> TU PEDIDO SON <span style=" color:#FF8A00;"> {{ $number }} </span> EQUIPOS <span style="color: #FF8A00;">{{ Session::get('barril')=='david' ? 'DAVID XL':'HEINEKEN EXTRA COLD' }}</span>
            CON UN COSTO DE <span style="color: #FF8A00;">$ {{ money_format('%i',$total_cost) }} pesos</span> </strong>
        </div>
    </div>
    <div class="row" style="margin-top: 40px; text-align: center;">
        <div class="col-md-12">
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <td style="min-width: 80px">SKU</td>
                        <td style="min-width: 300px">DESCRIPCIÓN</td>
                        <td style="min-width: 100px">PRECIO UNITARIO</td>
                        <td style="min-with: 100px; font-size: 11px;">CANTIDAD</td>
                        <td style="min-with: 100px; font-size: 11px;">TOTAL</td>
                        <td style="min-with: 100px; font-size: 11px;">TIPO</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pieces as $piece)
                        <tr>
                            <td>{{$piece->sku}}</td>
                            <td>{{$piece->material}}</td>
                            <td>{{ '$'. money_format('%i',$piece->unit_price) }}</td>
                            <td>{{$piece->quantity * $number}}</td>
                            <td>{{ '$'.money_format('%i',$piece->unit_price * $piece->quantity * $number)}}</td>
                            <td>{{$piece->pep}}</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 pull-left" style="margin-top: 40px; padding-left: 0px; margin-left:0px;">
            <a href="{{ URL::route('step.three') }}">
            <div class="col-md-8"  style="padding-left: 0px; margin-left:0px;">
               <button style="background: url('/img/boton.png');width:217px;height:45px;color: #ffd19a; margin-right: 10px;">
                    REGRESAR
               </button>
               {{ HTML::image('/img/mano-left.png') }}
            </div>
            </a>
        </div>
        <div class="col-md-6" style="margin-top: 40px;margin-bottom: 40px; padding-left: 0px; margin-right:0px;">
            <a href="{{ URL::route('step.five') }}">
            <div class="col-md-8 pull-right"  style="padding-left: 0px; margin-right:-40px;">
               {{ HTML::image('/img/mano-right.png') }}
               <button style="background: url('/img/boton.png');width:217px;height:45px;color: #ffd19a; margin-left: 10px;">
                    DESCARGA TU PEDIDO EN EXCEL
               </button>

            </div>
            </a>
        </div>
    </div>
@stop