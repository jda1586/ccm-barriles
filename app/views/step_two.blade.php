@section('script')
    <script>
        $(document).ready(function(){
            $('a.logo').click(function(){
                var logo = $(this).attr('id');
                var grifo1 = $('#one').data('grifo')
                var grifo2 = $('#two').data('grifo')
                var quantity = $('#quantity').val();
                if(grifo1 === 'none' && grifo2 === 'none'){
                    $('#one').html('<img src="/img/grifos/'+logo+'.png">').data('grifo',logo);
                }else if(grifo1 != 'none' && grifo2 === 'none'){
                    if (logo != grifo1){
                         $('#two').html('<img src="/img/grifos/'+logo+'.png">').data('grifo',logo);
                    }else{
                        $('#one').html('<img src="/img/solo.png">').data('grifo','none');
                    }
                }else if(logo === grifo1){
                    $('#one').html('<img src="/img/solo.png">').data('grifo','none');
                }else if(logo === grifo2){
                    $('#two').html('<img src="/img/solo.png">').data('grifo','none');
                }else if(grifo1 === 'none' && grifo2 != 'none'){
                    $('#one').html('<img src="/img/grifos/'+logo+'.png">').data('grifo',logo);
                }
                if(quantity != ' ' && quantity != 0 && grifo1 != 'none' && grifo2 != 'none'){
                    $('#next').css('display','');
                }else{
                    $('#next').css('display','none');
                }
                return false;
            });
            $('#quantity').blur(function(){
                var quantity = $(this).val();
                var grifo1 = $('#one').data('grifo')
                var grifo2 = $('#two').data('grifo')
                if(quantity != ' ' && quantity != 0 && grifo1 != 'none' && grifo2 != 'none'){
                    $('#next').css('display','');
                }else{
                    $('#next').css('display','none');
                }
            });
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
            <span style="margin: 0px 2px 0px 2px;">PASO <span style="color: #FF8A00;">2</span> de 6</span>
            <span> | Selecciona las marcas con las que utilizarás el equipo.</span>
       </p>
       <p style="font-size:16px;">(Todo tu pedido en proceso, será con el mismo combo de marcas, si requieres otro combo distinto, hazlo en un nuevo proceso)</p>
    </div>
</div>
<div class="row" style="margin-top: 30px;">
    <div class="col-md-2" style="text-align: center;">
        <a href="#" id="grifo-tecate" class="logo">{{ HTML::image('img/big_logs/tecate.png') }}</a>
    </div>
    <div class="col-md-2" style="text-align: center;">
        <a href="#" id="grifo-tecate-light" class="logo">{{ HTML::image('img/big_logs/tecate-light.png') }}</a>
    </div>
    <div class="col-md-2" style="text-align: center;">
        <a href="#" id="grifo-indio" class="logo">{{ HTML::image('img/big_logs/indio.png') }}</a>
    </div>
    <div class="col-md-2" style="text-align: center;">
        <a href="#" id="grifo-sol" class="logo">{{ HTML::image('img/big_logs/sol.png') }}</a>
    </div>
    <div class="col-md-2" style="text-align: center;">
        <a href="#" id="grifo-xxlager" class="logo">{{ HTML::image('img/big_logs/xx.png') }}</a>
    </div>
    <div class="col-md-2" style="text-align: center;">
        <a href="#" id="grifo-ambar" class="logo">{{ HTML::image('img/big_logs/xx-ambar-w.png') }}</a>
    </div>
</div>
<div class="row" style="margin-top: 50px;">
    <div class="col-md-4 col-sm-12">
        <div class="row" style="vertical-align: middle; text-align: center;">
            <div class="col-md-4 col-sm-4">
                {{ HTML::image('/img/a-icon.png') }}
            </div>
            <div class="col-md-8 col-sm-8" style="padding-top: 8px; font-weight: bold;">
                <span style="font-size: 50px;">&nbsp;DAVID XL</span>
            </div>
        </div>
    </div>
    <div class="col-md-4" id="one" data-grifo="none">
        {{ HTML::image('/img/solo.png') }}
    </div>
    <div class="col-md-4" id="two" data-grifo="none">
        {{ HTML::image('/img/solo.png') }}
    </div>
</div>
<div class="row" style="width: 100%; height: 17px; background-image: url('/img/rectangule-2.png')"></div>
<div class="row">
    <div class="col-md-12" style="margin-top: 40px; font-family: Droid serif; font-size:18px; text-align: center; line-height: 15px;">
       <p>
            <span style="margin: 0px 2px 0px 2px;">PASO <span style="color: #FF8A00;">3</span> de 6</span>
            <span> | Elige la cantidad de equipos que requieres para tu combo de marcas seleccionado.</span>
       </p>
    </div>
</div>
<div class=row style="margin-top: 20px;">
    <div class="col-md-12" style="text-align: center; font-size: 20px;">
        <p>CANTIDAD DE EQUIPOS</p>
        <p>{{ Form::text('cantidad',null,['style'=>'color: black;','id'=>'quantity']) }}</p>
    </div>
</div>
<div class="row" >
   <div class="col-md-6 pull-left" style="margin-top: 40px; padding-left: 0px; margin-left:0px;">
   <a href="{{ URL::route('step.one') }}">
    <div class="col-md-8"  style="padding-left: 0px; margin-left:0px;">
       <button style="background: url('/img/boton.png');width:217px;height:45px;color: #ffd19a; margin-right: 10px;">
            REGRESAR
       </button>
       {{ HTML::image('/img/mano-left.png') }}
    </div>
    </a>
   </div>
   <div class="col-md-6" style="margin-top: 40px;margin-bottom: 40px; padding-left: 0px; margin-right:0px; display: none;" id="next">
        <a href="{{ URL::route('step.three') }}">
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