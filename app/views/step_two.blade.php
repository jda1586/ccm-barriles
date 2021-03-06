@section('script')
    <script>
        $(document).ready(function(){
            $(".grifo-content").mouseenter(function(){
                var $this = $(this);
                if($('#one').attr('data-grifo') != $this.find('.logo').attr('id') && $('#two').attr('data-grifo') != $this.find('.logo').attr('id')){
                    $this.css('border-bottom','2px orange solid');
                }
            });
            $(".grifo-content").mouseleave(function(){
                var $this = $(this);
                if($('#one').attr('data-grifo') != $this.find('.logo').attr('id') && $('#two').attr('data-grifo') != $this.find('.logo').attr('id')){
                    $this.css('border-bottom','2px transparent solid');
                }
            });
            $("a.logo").click(function(){
                var $this = $(this);
                var logo = $(this).attr('id');
                var quantity = $('#quantity').val();
                //
                if($('#one').attr('data-grifo') == 'none' && $('#two').attr('data-grifo') != $this.attr('id')){
                    $('#one').attr('data-grifo',logo).attr('data-logo',$(this).data('logo')).html('<img src="/img/grifos/'+logo+'.png">');
                    $this.parent().css('border-bottom','2px orange solid');
                }else if($('#two').attr('data-grifo') == 'none' && $('#one').attr('data-grifo') != $this.attr('id')){
                    $('#two').attr('data-grifo',logo).attr('data-logo',$(this).data('logo')).html('<img src="/img/grifos/'+logo+'.png">');
                    $this.parent().css('border-bottom','2px orange solid');
                }else if(logo == $('#one').attr('data-grifo')){
                    $('#one').attr('data-grifo','none').attr('data-logo','none').html('<img src="/img/solo.png">');
                    $this.parent().css('border-bottom','2px transparent solid');
                }else if(logo == $('#two').attr('data-grifo')){
                    $('#two').attr('data-grifo','none').attr('data-logo','none').html('<img src="/img/solo.png">');
                    $this.parent().css('border-bottom','2px transparent solid');
                }
                //
                if(quantity != '' && quantity > 0 && $('#one').attr('data-grifo') != 'none' && $('#two').attr('data-grifo') != 'none'){
                    $('#next').fadeIn('fast');
                }else{
                    $('#next').fadeOut('fast');
                }
                return false;
            });
            $('#quantity').keyup(function($key){
                var quantity = $(this).val();
                if(quantity != '' && quantity > 0 && $('#one').attr('data-grifo') != 'none' && $('#two').attr('data-grifo') != 'none'){
                    $('#next').fadeIn('fast');
                }else{
                    $('#next').fadeOut('fast');
                }
            });
            $("#continuar").click(function(){
                var $this = $(this);
                $.ajax({
                    type: "POST",
                    url: "{{ URL::route('api.step.two') }}",
                    data: {
                        logo_one: $('#one').attr('data-logo'),
                        logo_two: $('#two').attr('data-logo'),
                        number: $("input[name=cantidad]").val()
                        }
                }).done(function( data ) {
                    if(data.resp){
                        window.location = "{{ URL::route('step.three') }}"
                    }else{
                        alert( "Error al seleccionar el barril" );
                    }
                }).fail(function(data) {
                    alert( "Error de conexion" );
                });
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
    <div class="col-md-2 grifo-content" style="text-align: center;">
        <a href="#" id="grifo-tecate" data-logo="tecate" class="logo">{{ HTML::image('img/big_logs/tecate.png') }}</a>
    </div>
    <div class="col-md-2 grifo-content" style="text-align: center;">
        <a href="#" id="grifo-tecate-light" data-logo="tecate-light" class="logo">{{ HTML::image('img/big_logs/tecate-light.png') }}</a>
    </div>
    <div class="col-md-2 grifo-content" style="text-align: center;">
        <a href="#" id="grifo-indio" class="logo" data-logo="indio">{{ HTML::image('img/big_logs/indio.png') }}</a>
    </div>
    <div class="col-md-2 grifo-content" style="text-align: center;">
        <a href="#" id="grifo-sol" class="logo" data-logo="sol">{{ HTML::image('img/big_logs/sol.png') }}</a>
    </div>
    <div class="col-md-2 grifo-content" style="text-align: center;">
        <a href="#" id="grifo-xxlager" class="logo" data-logo="xx">{{ HTML::image('img/big_logs/xx.png') }}</a>
    </div>
    <div class="col-md-2 grifo-content" style="text-align: center;">
        <a href="#" id="grifo-ambar" class="logo" data-logo="xx-ambar-w">{{ HTML::image('img/big_logs/xx-ambar-w.png') }}</a>
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
    <div class="col-md-4" id="one" data-grifo="none" data-logo="none">
        {{ HTML::image('/img/solo.png') }}
    </div>
    <div class="col-md-4" id="two" data-grifo="none" data-logo="none">
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
        <p>{{ Form::text('cantidad',null,['style'=>'color: black; width:50px; text-align:center; color: orange; ','id'=>'quantity']) }}</p>
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
        <div class="col-md-8 pull-right"  style="padding-left: 0px; margin-right:-40px;">
           {{ HTML::image('/img/mano-right.png') }}
           <button id="continuar" style="background: url('/img/boton.png');width:217px;height:45px;color: #ffd19a; margin-left: 10px;">
                CONTINUAR CON TU PEDIDO
           </button>
        </div>
   </div>
</div>
@stop