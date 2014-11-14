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
        <a href="#">{{ HTML::image('img/tecate.png') }}</a>
    </div>
    <div class="col-md-2" style="text-align: center;">
        {{ HTML::image('img/tecate-light.png') }}
    </div>
    <div class="col-md-2" style="text-align: center;">
        {{ HTML::image('img/indio.png') }}
    </div>
    <div class="col-md-2" style="text-align: center;">
        {{ HTML::image('img/sol.png') }}
    </div>
    <div class="col-md-2" style="text-align: center;">
        {{ HTML::image('img/xx.png') }}
    </div>
    <div class="col-md-2" style="text-align: center;">
        {{ HTML::image('img/xx-ambar-w.png') }}
    </div>
</div>
<div class="row" style="margin-top: 50px;">
    <div class="col-md-4">
        <div class="row" style="vertical-align: middle;">
            {{ HTML::image('/img/a-icon.png') }}
            <span style="font-size: 50px;">&nbsp;&nbsp;DAVID XL</span>
        </div>
    </div>
    <div class="col-md-4">
        {{ HTML::image('/img/solo.png') }}
    </div>
    <div class="col-md-4">
        {{ HTML::image('/img/solo.png') }}
    </div>
</div>
@stop