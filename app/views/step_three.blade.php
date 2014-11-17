@section('script')
    <script>
        $(document).ready(function(){
            $('.table-link').click(function(){
                var id = $(this).attr('id');
                $.ajax({
                    type: 'get',
                    url:"{{ URL::route('api.step.two.data') }}",
                    data: { id: id },
                    dataType: "json"
                }).done(function(data){
                    if(data['barrel_id'] == 1){
                        $('#images_here').html('<div class="col-md-12"><img src="/img/david_pieces/'+(data["photo_number"])+'" style="width:480px; height:auto;"></div>');
                        $('#image').html('<img src="/img/david_pieces/'+(data["image"])+'" style="width:100px; height:auto;" >');
                    }else{
                        $('#images_here').html('<div class="col-md-12"><img src="/img/heineken_pieces/'+data["photo_number"]+'" style="width:480px; height:auto;"></div>');
                        $('#image').html('<img src="/img/heineken_pieces/'+data["image"]+'" style="width:100px; height:auto;">');
                    }
                    $('#piece_name').html(data['material']);
                    $('#cantidad').html(data['quantity']);
                    $('#precio').html(data['unit_price']);
                    $('#descripcion').html(data['description']);

                }).fail(function(data){
                    alert( "Error de conexion" );
                })
            })
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
            <span>{{ HTML::image( Session::get('barril')=='david' ? '/img/a-icon.png':'/img/b-icon.png') }}</span>
           <strong> <span style="margin-left: 15px;">{{ Session::get('barril')=='david' ? 'DAVID XL':'HEINEKEN EXTRA COLD' }} / {{ $number }} EQUIPOS / </span></strong>
            <span style="margin-left:20px;">{{ HTML::image('/img/big_logs/'. $logo .'.png') }}</span>
            @if($logo_2 != 'none')
                <span style="margin-left:20px;">{{ HTML::image('/img/big_logs/'.$logo_2.'.png') }}</span>
            @endif
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
                    @foreach($pieces as $piece)
                        @if(explode('_',$piece->image)[0] == 'LENS' || explode('_',$piece->image)[0] == 'MANERAL')
                            @if( strtolower($piece->image) == strtolower(explode('_',$piece->image)[0].'_'.$logo.'.jpg') || strtolower($piece->image) == strtolower(explode('_',$piece->image)[0].'_'.$logo_2.'.jpg'))
                                <tr id="{{ $piece->id }}" class="table-link">
                                    <td>{{$piece->sku}}</td>
                                    <td>{{$piece->material}}</td>
                                    <td>{{$piece->quantity * $number}}</td>
                                </tr>
                            @endif
                        @else
                            <tr id="{{ $piece->id }}" class="table-link">
                                <td>{{$piece->sku}}</td>
                                <td>{{$piece->material}}</td>
                                <td>{{$piece->quantity * $number}}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6" style="margin: 40px 0px 10px 0px; padding: 0; color: #000000; font-size: 18px; font-family: Oswald 300; line-height: 20px">
            <div style="width: 480px; height: auto;" id="images_here" class="row">
                <div class="col-md-12">
                @if($pieces[0]->barrel_id == 1)
                    {{ HTML::image('/img/david_pieces/'.$pieces[0]->photo_number,null,['style'=>'width:480px; height:auto;']) }}
                @else
                    {{ HTML::image('/img/heineken_pieces/'.$pieces[0]->photo_number,null,['style'=>'width:480px; height:auto;']) }}
                @endif
                </div>
            </div>
            <div style="width: 480px; min-height: 200px; background-color: white; margin-left: 1px;" class="row">
                <div class="col-md-12">
                <div class="col-md-9" style="margin-top: 20px;">
                    <p style="color:#ff8a00;  vertical-align:middle">{{ HTML::image('/img/seleccion.png',null,['style'=>' vertical-align:middle;']) }} <span id="piece_name">{{ $pieces[0]->material }}</span></p>
                    <p>Cantidad del equipo: <span style="color: #ff8a00;" id="cantidad">{{ $pieces[0]->quantity }}</span></p>
                    <p>Precio unitario: <span style="color: #ff8a00;" id="precio">{{ $pieces[0]->unit_price }}</span></p>
                    <p>Descripcion: <span style="color: #ff8a00;" id="descripcion">{{ $pieces[0]->description }}</span></p>
                </div>
                <div class="col-md-3" style="margin-top: 20px;width:100px; height:auto;" id="image">
                @if( $pieces[0]->barrel_id == 1 )
                     {{ HTML::image('/img/david_pieces/'.$pieces[0]->image,null,['class'=>'pull-right','style'=>'width:100px; height:auto;']) }}
                @else
                    {{ HTML::image('/img/heineken_pieces/'.$pieces[0]->image,null,['class'=>'pull-right','style'=>'width:100px; height:auto;']) }}
                @endif
                </div>
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