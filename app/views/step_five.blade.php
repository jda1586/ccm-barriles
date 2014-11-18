@section('header')
<div style="text-align: center; background: url('/img/rectangle.png') repeat-x bottom;">
    <p style="padding: 0px 0px 20px 0px;">{{ HTML::image('/img/logo-ccm.png') }}</p>
</div>
@stop
@section('script')
<script>
$(document).ready(function(){
    var delay=2000;//1 seconds
    setTimeout(function(){
        window.location = '{{ URL::route('step.five.excel') }}';
    },delay);
});
</script>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div style="width: 80%; margin: 80px auto; background-color: #80002D;">
            <div class="row">
                <div class="col-md-5">
                    <hr style="display: block; margin: 55px 0px 50px 20px; border: 1px solid white;">
                </div>
                <div class="col-md-2" style="text-align: center; padding: 20px 0px;">
                    <img src="/img/cerveza.jpg">
                </div>
                <div class="col-md-5">
                    <hr style="display: block; margin: 55px 20px 50px 0px; border: 1px solid white;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: center; letter-spacing: 2px;">
                    <p style="font-size: 25px; width: 80%; margin: 0px auto; padding: 40px 0px;">
                        <span style="font-weight: bold;">Nota:</span> Tu pedido aún
                        <span style="font-weight: bold;">NO</span> está hecho, copia la información de tu archivo
                        <span style="font-weight: bold;">EXCEL</span> generado, en tu sistema de pedidos
                        <span style="font-weight: bold;">SAP</span> para poder concretarlo.
                    </p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-center">
        <p style="font-size: 20px; letter-spacing: 1px;">Si tu archivo EXCEL no se ha descargado correctamente
        <a href="{{ URL::route('step.five.excel') }}" style="color: #FF8A00;" id="download">HAZ CLICK AQUÍ</a></p>
    </div>
</div>
<div class="row" style="margin-top: 50px;">
    <div class="col-md-12 text-center" style="padding-left: 0px; margin-right:-40px;">
        {{ HTML::image('/img/mano-right.png') }}
        <a href="{{ URL::route('step.one') }}">
            <button style="background: url('/img/boton.png');width:217px;height:45px;color: #ffd19a; margin-left: 10px;">
                HACER NUEVO PEDIDO
            </button>
        </a>
    </div>
</div>
@stop