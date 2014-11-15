@section('script')
    <script>
        $(document).ready(function(){

        });
    </script>
@stop
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
        <div class="col-md-6" style="margin: 40px 0px 0px 0px; text-align:center;font-family:Oswald 300; font-size:14px; padding:0px; ">
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
        <div class="col-md-6" style="margin: 40px 0px 10px 0px; padding: 0; color: #000000; font-size: 18px; font-family: Oswald 300; line-height: 20px">
            <div style="width: 480px; height: auto;">
                {{ HTML::image('/img/DAVID XXL.jpg',null,['width'=>'480px;','height'=>'auto;']) }}
            </div>
            <div style="width: 480px; height: 180px; background-color: white">
                <div class="col-md-9" style="margin-top: 20px;">
                    <p style="color:#ff8a00;  vertical-align:middle">{{ HTML::image('/img/seleccion.png',null,['style'=>' vertical-align:middle;']) }} ENFRIADOR DAVID XL (P0003743-A)</p>
                    <p>Cantidad del equipo: <span style="color: #ff8a00;">1</span></p>
                    <p>Precio unitario: <span style="color: #ff8a00;">1</span></p>
                    <p>Descripcion: <span style="color: #ff8a00;">1</span></p>
                </div>
                <div class="col-md-3" style="margin-top: 20px;">
                     {{ HTML::image('/img/item-thumb.jpg',null,['class'=>'pull-right']) }}
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center; background: url('/img/rectangleone.png') repeat-x bottom; height: 40px;"></div>
    <div class="row">
         <div class="col-md-12" style="margin-top: 40px; font-family: Droid serif; font-size:16px; text-align: center; line-height: 15px;">
           <p style="color: #ff8a00">
                ¿Ya sabes qué herramientas requieres para tu instalación?  <a href=""> CONSÚLTALAS AQUÍ</a>
           </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 pull-left" style="margin-top: 40px; padding-left: 0px; margin-left:0px;">
            <div class="col-md-8"  style="padding-left: 0px; margin-left:0px;">
               <button style="background: url('/img/boton.png');width:217px;height:45px;color: #ffd19a; margin-right: 10px;">
                    REGRESAR
               </button>
               {{ HTML::image('/img/mano-left.png') }}
            </div>
           </div>
           <div class="col-md-6" style="margin-top: 40px;margin-bottom: 40px; padding-left: 0px; margin-right:0px;">
                <a href="{{ URL::route('step.two') }}">
                <div class="col-md-8 pull-right"  style="padding-left: 0px; margin-right:-40px;">
                   {{ HTML::image('/img/mano-right.png') }}
                   <button style="background: url('/img/boton.png');width:217px;height:45px;color: #ffd19a; margin-left: 10px;">
                        CONTINUAR CON TU PEDIDO
                   </button>

                </div>
                </a>
           </div>
    </div>
@stop