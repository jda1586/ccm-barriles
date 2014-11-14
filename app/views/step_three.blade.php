@section('header')
    <div style="text-align: center; background: url('/img/rectangle.png') repeat-x bottom;">
        <p style="padding: 0px 0px 20px 0px;">{{ HTML::image('/img/logo-ccm.png') }}</p>
    </div>
@stop

@section('content')
     <div class="row">
        <div class="col-md-12" style="margin-top: 40px; font-family: Droid serif; font-size:18px; text-align: center; line-height: 15px;">
           <p>
                <span style="margin: 0px 2px 0px 2px;">PASO <span style="color:rgb(255, 138, 0);">4</span> de 6</span>
                <span> | Identifica los materiales que tienes que solicitar </span>
           </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="margin-top: 40px; font-family: Oswald 300; font-size:33px; text-align: center; line-height: 15px;">
            <span>{{ HTML::image('/img/a-icon.png') }}</span>
           <strong> <span style="margin-left: 15px;">DAVID XL / 10 EQUIPOS / </span></strong>
            <span style="margin-left:20px;">{{ HTML::image('/img/big_logs/tecate-light.png') }}</span>
            <span style="margin-left:20px;">{{ HTML::image('/img/big_logs/sol.png') }}</span>
        </div>
    </div>
    <div class="row" >
        <div class="col-md-6" style="margin-top: 40px; text-align:center;font-family:Oswald 300; font-size:14px; ">
            <table>
                <thead>
                    <tr>
                        <td style="min-width: 80px">SKU</td>
                        <td style="min-width: 300px">DESCRIPCIÓN</td>
                        <td style="min-with: 200px; font-size: 11px;"><p>CANTIDAD A</p><p>ORDENAR</p></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>41002054</td>
                        <td>ENFRIADOR DAVID XL (P0003743-A)</td>
                        <td>2</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6" style="margin-top: 40px;">
            <div class=""></div>
        </div>
    </div>
@stop