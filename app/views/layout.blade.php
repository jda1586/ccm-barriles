<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>CCM - Barriles</title>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/ccm.css') }}
</head>
<body>
    <header style="max-width: 980px; margin: 30px auto 0px auto;">
        <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal"
                style="color:#000000;" id="modal_btn">Ayuda</button>
        @yield('header')
    </header>
    <div>
        <div style="max-width: 980px; margin: 0px auto;">
            @yield('content')
        </div>
    </div>
    <footer>
        @yield('footer')


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
                            <img src="/img/img01.jpg" style="width: 100%;"/>

                            <p style="font-family: 'Droid Serif'; padding-bottom: 10px; border-bottom: 2px solid #ff8a00; font-size: 18px;">
                                Presiona la tecla ALT en tu teclado y en el menú HERRAMIENTAS(TOOLS) seleccionar
                                "Confguración de Vista de compatibilidad(Compatibility View Settings)"</p>
                            <img src="/img/img02.jpg" style="width: 100%;"/>

                            <p style="font-family: 'Droid Serif'; padding-bottom: 10px; border-bottom: 2px solid #ff8a00; font-size: 18px;">
                                En la ventana que nos aparece DESACTIVAMOS la opción "Ver sitios de intranet en vista de
                                compatibilidad(Display intranet sites in Compatibility view)" y damos click en
                                "Cerrar(Close)"</p>
                            <img src="/img/img03.jpg" style="width: 100%;"/>

                            <p style="font-family: 'Droid Serif'; padding-bottom: 10px; border-bottom: 2px solid #ff8a00; font-size: 18px;">
                                Ahora nuestra aplicación se debe visualizar de manera correcta. Y a partir de este momento
                                podemos activar o desactivar el modo "Vista de compatibilidad (Compatibility View)" desde el
                                botón que señala el CIRCULO ROJO.</p>
                            <img src="/img/img04.jpg" style="width: 100%;"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('js/bootstrap.min.js') }}
    @yield('script')
</body>
</html>