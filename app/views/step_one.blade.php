@section('header')
    <div style="text-align: center; background: url('/img/rectangle.png') repeat-x bottom;">
        <p style="padding: 0px 0px 20px 0px;">{{ HTML::image('/img/logo-ccm.png') }}</p>
    </div>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12" style="margin-top: 40px; font-family: Droid serif; font-size:18px; text-align: center; line-height: 15px;">
           <p>
                <span style="margin: 0px 2px 0px 2px;">PASO <span style="color:rgb(255, 138, 0);">1</span> de 6</span>
                <span> | Elige el equipo de enfriamiento de barril que requieres.</span>
           </p>
           <p style="font-size:16px;">(Sólo se puede un tipo de equipo a la vez, si requieres pedir de los 2 tipos, hazlo en procesos separados)</p>
        </div>
    </div>
    <br/>
    <br/>
    <div class="row" style="margin-top: 40px; font-family: Oswald 300; font-size:22px; text-align: center; line-height: 15px;">
        <div class="col-md-6 col-lg-6 col-sm-6" style="text-align: center;">
            <p style="margin-bottom: 50px;">{{ HTML::image('/img/a-icon.png') }}</p>
            <p style="margin-bottom: 50px;"><span>{{ HTML::image('/img/plus.png') }}</span><strong><span style="font-weight:bold; color:rgb(255,138,0);">  DAVID XL</span></strong></p>
            <p style="margin-bottom: 50px;">{{ HTML::image('/img/david-xl.png') }}</p>

        </div>
        <div class="col-md-6 col-lg-6 col-sm-6" style="text-align: center;">
            <p style="margin-bottom: 50px;">{{ HTML::image('/img/b-icon.png') }}</p>
            <p style="margin-bottom: 50px;"><span>{{ HTML::image('/img/plus.png') }}</span><strong><span style="font-weight:bold; color:rgb(255,138,0);">  HEINEKEN EXTRA COLD</span></strong></p>
            <p style="margin-bottom: 50px;">{{ HTML::image('/img/heineken-extra-cold.png') }}</p>

        </div>
    </div>
    <div class="row">
         <div class="col-md-6 col-lg-6 col-sm-6" style="text-align: center;">

                <div style="background: url('/img/rectangleone.png') repeat-x bottom">
                    <span>&nbsp;</span>
                </div>
                <br/>
                <p style="font-size:16px">Esta tecnología asegura la calidad y frescura de la cerveza en clientes que desplazan</p>
                <p style="font-size:16px">entre 4 y 50 barriles totales al mes. </p>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6" style="text-align: center;">

                <div style="background: url('/img/rectangleone.png') repeat-x bottom">
                    <span>&nbsp;</span>
                </div>
                <br/>
                <p style="font-size:16px">Esta tecnología permite ofrecer cerveza Heineken extra fría, al mismo tiempo que una</p>
                <p style="font-size:16px">visibilidad diferenciada a través de una torre congelada. </p>
            </div>
    </div>
    <div class="col-sm-5" style="margin: 0px; padding: 0px; margin-top: 40px; font-family: Droid serif; font-size:18px; text-align: center; line-height: 15px;">
        <div class="row" style="background-color: #282b30; padding: 10px; min-height: 70px">
            <p>  > Soporta  2 marcas de cerveza </p>
            <p> > Utiliza barriles de 20 litros  </p>
        </div>
        <div class="row" style="background-color: #ffffff; min-height: 50px;">
             <div class="col-md-2" style="padding-top: 10px">
                {{ HTML::image('/img/tecate.png')}}
             </div>
             <div class="col-md-2" style="padding-top: 10px">
                {{ HTML::image('/img/tecate-light.png')}}
             </div>
             <div class="col-md-2" style="padding-top: 18px">
                {{ HTML::image('/img/indio.png')}}
             </div>
             <div class="col-md-2" style="padding-top: 10px">
                {{ HTML::image('/img/sol.png')}}
             </div>
             <div class="col-md-2" style="padding-top: 10px">
                {{ HTML::image('/img/xx.png')}}
             </div>
             <div class="col-md-2" style="padding-top: 10px">
                {{ HTML::image('/img/xx-amb.png')}}
             </div>

        </div>
    </div>

    <div class="col-sm-2" style="margin: 0px;  margin-top: 40px; min-height: 50px;">
        <div class="row" style="background-color: #282b30; min-height: 70px">
            <div style="min-height: 70px; background-image: url('/img/icon-beer.png'); background-repeat: no-repeat; background-position: center top; background-size: 38px;"></div>
        </div>
        <div class="row" style="background-color: #ffffff; min-height: 50px">
            <div style="min-height: 50px; background-image: url('/img/icon-beer.png'); background-repeat: no-repeat; background-position: center bottom; background-size: 39px;"></div>
        </div>
    </div>

    <div class="col-sm-5" style="margin: 0px; padding: 0px; margin-top: 40px; font-family: Droid serif; font-size:18px; text-align: center; line-height: 15px;">
        <div class="row" style="background-color: #282b30;padding: 10px; min-height: 70px">
            <p> > Unicamente para marca Heineken </p>
            <p> > Utiliza barriles de 20 litros  </p>
        </div>
        <div class="row" style="background-color: #ffffff; min-height: 50px;">
            <div class="col-md-12" style="padding-top: 5px;">
                {{ HTML::image('/img/Heineken.png') }}
            </div>
        </div>
    </div>
    <div class="row" >
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

@section('foolter')
@stop