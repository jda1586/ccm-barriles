@section('header')
    <div style="margin: 20px auto 10px auto; text-align: center; font-size: 35px; font-weight: bold;">
        <p>BIENVENIDO A</p>

        <p><img src="/img/logo-ccm.png"></p>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <p style="margin: 80px 0px; font-size: 20px; text-align: center; letter-spacing: 1px;">CALCULADORA DE
                MATERIALES DE BARRIL</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-lg-4 col-sm-12" style="text-align: center; padding-top: 20px;">
            <p><img src="/img/tutorial-icon.png"></p>

            <p>
                <a href="#" data-toggle="modal" data-target="#modal_video">
                    <img src="/img/tutorial.png">
                </a>
            </p>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12" style="text-align: center;">
            <img src="/img/logo-barriles.png" style="width: 100%;">
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12" style="text-align: center; padding-top: 20px;">
            <p><img src="/img/iniciar-icon.png"></p>

            <p>
                <a href="{{ URL::route('step.one') }}">
                    <img src="/img/iniciar.png">
                </a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <p style="text-align: center; font-family: 'Droid Serif'; margin: 80px 0px; font-size: 19px; font-weight: 300;">
                Esta herramienta te llevará paso a paso a la generación del pedido de materiales de barril que requieres
                para tu plan de instalaciones. Al mismo tiempo, te ayudará a identificar todos los equipos y componentes
                requeridos para una instalación correcta.
            </p>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"
            style="display: none;" id="modal_btn"></button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 80%;">
            <div class="modal-content">
                <div class="modal-header">
                    {{--<button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>--}}
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
                    <div class="home" style="text-align: center; background: black; color: white; width: 100%;">
                        <h1 style="font-family: 'Oswald';">Solución de Problemas</h1>

                        <p style="font-family: 'Droid Serif'; padding-bottom: 10px; border-bottom: 2px solid #ff8a00; font-size: 18px;">
                            Si usted visualiza la aplicación distinta a la siguiente imagen, siga los siguientes pasos
                            para corregir el problema.</p>
                        <img src="img/img01.jpg" style="width: 100%;"/>

                        <p style="font-family: 'Droid Serif'; padding-bottom: 10px; border-bottom: 2px solid #ff8a00; font-size: 18px;">
                            Presiona la tecla ALT en tu teclado y en el menú HERRAMIENTAS(TOOLS) seleccionar
                            "Confguración de Vista de compatibilidad(Compatibility View Settings)"</p>
                        <img src="img/img02.jpg" style="width: 100%;"/>

                        <p style="font-family: 'Droid Serif'; padding-bottom: 10px; border-bottom: 2px solid #ff8a00; font-size: 18px;">
                            En la ventana que nos aparece DESACTIVAMOS la opción "Ver sitios de intranet en vista de
                            compatibilidad(Display intranet sites in Compatibility view)" y damos click en
                            "Cerrar(Close)"</p>
                        <img src="img/img03.jpg" style="width: 100%;"/>

                        <p style="font-family: 'Droid Serif'; padding-bottom: 10px; border-bottom: 2px solid #ff8a00; font-size: 18px;">
                            Ahora nuestra aplicación se debe visualizar de manera correcta. Y a partir de este momento
                            podemos activar o desactivar el modo "Vista de compatibilidad (Compatibility View)" desde el
                            botón que señala el CIRCULO ROJO.</p>
                        <img src="img/img04.jpg" style="width: 100%;"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" style="width: 80%;">
            <div class="modal-content">
                <div class="modal-header">
                    {{--<button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>--}}
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body" style="background-color: #000000;">
                    <video style="width: 100%;" controls>
                        <source src="https://proddmst.blob.core.windows.net/assets/videoTutorial_CCM720p.mp4"
                                type="video/mp4">
                        <source src="https://proddmst.blob.core.windows.net/assets/videoTutorial_CCM720p.webm"
                                type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script>
        $(document).ready(function () {
            $("#modal_btn").trigger('click');
            $("video").trigger('play');
        });
        $("video").focusout(function () {
            $("video").trigger('pause');
        });
    </script>
@stop