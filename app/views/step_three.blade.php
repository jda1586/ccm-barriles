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
            $('#tools').modal('hide');
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
        <div class="col-md-12" style="margin-top: 40px; font-family: 'Oswald'; font-size:33px; text-align: center; line-height: 15px;">
            <span>{{ HTML::image( Session::get('barril')=='david' ? '/img/a-icon.png':'/img/b-icon.png') }}</span>
           <strong> <span style="margin-left: 15px;">{{ Session::get('barril')=='david' ? 'DAVID XL':'HEINEKEN EXTRA COLD' }} / {{ $number }} EQUIPOS / </span></strong>
            <span style="margin-left:20px;">{{ HTML::image('/img/big_logs/'. $logo .'.png') }}</span>
            @if($logo_2 != 'none')
                <span style="margin-left:20px;">{{ HTML::image('/img/big_logs/'.$logo_2.'.png') }}</span>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" style="margin: 40px 0px 0px 0px; text-align:center;font-family:'Oswald'; font-size:14px; padding:0px; color: #ff8a00; ">
            <strong><p>* PUEDES SELECCIONAR LOS MATERIALES</p></strong>
            <strong><p>EN EL LISTADO SIGUIENTE PARA UBICARLOS EN EL DIAGRAMA</p></strong>
        </div>
    </div>
    <div class="row" >
        <div class="col-md-6" style="margin: 0px 0px 0px 0px; text-align:center;font-family:'Oswald'; font-size:14px; padding:0px; ">
            <table>
                <thead>
                    <tr>
                        <td style="min-width: 80px">SKU</td>
                        <td style="width: 350px">DESCRIPCIÓN</td>
                        <td style="min-with: 200px; font-size: 11px;"><p>CANTIDAD</p><p>A ORDENAR</p></td>
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
        <div class="col-md-6" style="margin: 0px 0px 10px 0px; padding: 0; color: #000000; font-size: 18px; font-family: 'Oswald'; line-height: 20px">
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
                ¿Ya sabes qué herramientas requieres para tu instalación?  <a href="#" data-toggle="modal" data-target="#tools"> CONSÚLTALAS AQUÍ</a>
           </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 pull-left" style="margin-top: 40px; padding-left: 0px; margin-left:0px;">
            <a href="{{ URL::route('step.two') }}">
            <div class="col-md-8"  style="padding-left: 0px; margin-left:0px;">
               <button style="background: url('/img/boton.png');width:217px;height:45px;color: #ffd19a; margin-right: 10px;">
                    REGRESAR
               </button>
               {{ HTML::image('/img/mano-left.png') }}
            </div>
            </a>
           </div>
           <div class="col-md-6" style="margin-top: 40px;margin-bottom: 40px; padding-left: 0px; margin-right:0px;">
                <a href="{{ URL::route('step.four') }}">
                <div class="col-md-8 pull-right"  style="padding-left: 0px; margin-right:-40px;">
                   {{ HTML::image('/img/mano-right.png') }}
                   <button style="background: url('/img/boton.png');width:217px;height:45px;color: #ffd19a; margin-left: 10px;">
                        CONTINUAR CON TU PEDIDO
                   </button>

                </div>
                </a>
           </div>
           <!-- Modal -->
           <div class="modal fade" id="tools" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div style="max-width: 1024px; margin: 20px auto; font-family: Droid 300;">
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col-md-6">
                            <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center;  padding: 40px 5px 5px 2px;">
                                <p style="font-size: 22px;">SIERRA</p>
                                <p style="font-size: 16px;">Sirve para cortar el tubo roscado.</p>
                            </div>
                            <div class="col-md-6" style="background: url('/img/modal/tools_sierra.jpg');min-height: 200px; "></div>
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center;  padding: 40px 5px 5px 2px;">
                                <p style="font-size: 22px;">TALADRO</p>
                                <p style="font-size: 16px;">Nos permite utilizar la sierra de perforación.</p>
                           </div>
                           <div class="col-md-6" style="background: url('/img/modal/tools_taladro.jpg');min-height: 200px; "></div>
                        </div>
                     </div>
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col-md-6">
                            <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center;  padding: 40px 5px 5px 2px;">
                                <p style="font-size: 24px;">PINZAS</p>
                                <p style="font-size: 18px;">Nos sirve en caso de necesitar sujetar algo fuertemente o cortar algun cable.</p>
                            </div>
                            <div class="col-md-6" style="background: url('/img/modal/tools_pinzas.jpg');min-height: 200px; "></div>
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center;  padding: 40px 5px 5px 2px;">
                                <p style="font-size: 22px;">DESTORNILLADOR AUTOMÁTICO DE PRESICIÓN</p>
                                <p style="font-size: 16px;">Nos sirve para colocar la tornilleria del equipo.</p>
                           </div>
                           <div class="col-md-6" style="background: url('/img/modal/tools_destornilladorpres.jpg');min-height: 200px; "></div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col-md-6">
                            <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center;  padding: 40px 5px 5px 2px;">
                                <p style="font-size: 22px;">TANQUES DE CO2</p>
                                <p style="font-size: 16px;">Es el engardado de proveernos de CO2 para empujar las cerveza.</p>
                            </div>
                            <div class="col-md-6" style="background: url('/img/modal/tools_tanqueCO2.jpg');min-height: 200px; "></div>
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center;  padding: 40px 5px 5px 2px;">
                                 <p style="font-size: 22px;">SOPORTE DE CADENA PARA CO2</p>
                                 <p style="font-size: 16px;">Nos sirve para sujetar el tanque de CO2 y evitar un accidente.</p>
                           </div>
                           <div class="col-md-6" style="background: url('/img/modal/tools_cadenaCO2.jpg');min-height: 200px; "></div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col-md-6">
                            <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center;  padding: 40px 5px 5px 2px;">
                                <p style="font-size: 22px;">SET DE LLAVES ALLEN</p>
                                <p style="font-size: 16px;">Nos sirve para colocar la tornilleria del equipo.</p>
                            </div>
                            <div class="col-md-6" style="background: url('/img/modal/tools_allen.jpg');min-height: 200px; "></div>
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center;  padding: 40px 5px 5px 2px;">
                                <p style="font-size: 22px;">CALIBRADOR MANOMÉTRICO</p>
                                <p style="font-size: 16px;">Sirve para conocer y corregir la preción que maneja el DTO.</p>
                           </div>
                           <div class="col-md-6" style="background: url('/img/modal/tools_calibrador.jpg');min-height: 200px; "></div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col-md-6">
                            <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center;  padding: 40px 5px 5px 2px;">
                                 <p style="font-size: 22px;">DESTORNILLADOR DE ESTRELLA T10, T15 Y PLANO</p>
                                <p style="font-size: 16px;">Para colocar las piezas añadidas al enfriador.</p>
                            </div>
                            <div class="col-md-6" style="background: url('/img/modal/tools_t10t15plano.jpg');min-height: 200px; "></div>
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center;  padding: 40px 5px 5px 2px;">
                                <p style="font-size: 22px;">AEROSOL DETECTOR DE FUGA DE GAS</p>
                                 <p style="font-size: 16px;">Sirve para detectar si quedo alguna fuga de CO2.</p>
                           </div>
                           <div class="col-md-6" style="background: url('/img/modal/tools_aerosol.jpg');min-height: 200px; "></div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col-md-6">
                            <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center;  padding: 40px 5px 5px 2px;">
                                <p style="font-size: 22px;">CORTATUBOS PARA EL TUBO DE CO2</p>
                                 <p style="font-size: 16px;">Para cortar la manguera de CO2.</p>
                            </div>
                            <div class="col-md-6" style="background: url('/img/modal/tools_cortatubo.jpg');min-height: 200px; "></div>
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center;  padding: 40px 5px 5px 2px;">
                                <p style="font-size: 22px;">SOPORTE DE CADENA PARA CO2</p>
                                 <p style="font-size: 16px;">Nos sirve para sujetar el tanque de CO2 y evitar un accidente.</p>
                           </div>
                           <div class="col-md-6" style="background: url('/img/modal/tools_llavenariz.jpg');min-height: 200px; "></div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col-md-6">
                            <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center;  padding: 40px 5px 5px 2px;">
                                 <p style="font-size: 22px;">LLAVE DE TUERCAS 60 MM</p>
                                 <p style="font-size: 16px;">Sirve para apretar las roscas que soportan la torre.</p>
                            </div>
                            <div class="col-md-6" style="background: url('/img/modal/tools_llavetuercas.jpg');min-height: 200px; "></div>
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-6" style="background-color: #80002d; min-height: 200px; text-align: center; padding: 10px 5px 5px 2px;">
                                   <p style="font-size: 22px;">SIERRA DE PERFORACIÓN 51 mm (para bar) 57 mm (refrigerador)</p>
                                     <p style="font-size: 16px;">Sirve para hacer las perforaciones en la parte superior del enfriador para instalar las torres.</p>
                           </div>
                           <div class="col-md-6" style="background: url('/img/modal/tools_sierraperf.jpg');min-height: 200px; "></div>
                        </div>
                    </div>
               </div>
           </div>
    </div>
@stop