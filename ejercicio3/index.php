<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>daw tarea 7</title>

        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/> 
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    </head>
    <body>   
        <h1>Monumentos de Andalucía </h1>

        <div class="grid">
            <!-- formulario -->
            <form id="formu" name="formu" action="" method="post">
                <fieldset>
                    <legend>Monumentos de Andalucía</legend>
                    <div class="container">
                        <label>Elija provincia</label>

                        <!-- selec con las provincias de Andalucía -->
                        <select class="lugar" name="lugar">
                            <option value="">Seleccione ...</option>
                            <option value="sevilla">Sevilla</option>
                            <option value="huelva">Huelva</option>
                            <option value="granada">Granada</option>
                            <option value="cadiz">Cadiz</option>
                            <option value="malaga">Málaga</option>
                            <option value="almeria">Almeria</option>
                            <option value="jaen">Jaén</option>
                            <option value="cordoba">Cordoba</option>
                        </select>

                        <!-- select con los monumentos de Sevilla -->
                        <select name="sevilla" id="sevilla" class="hide monu">
                            <option value="giralda">Giralda</option>
                            <option value="torre">Torre del oro</option>
                            <option value="alcazar">Alcazar</option>
                            <option value="archivo">Archivo de indias</option>
                            <option value="plaza">Plaza de españa</option>
                        </select>

                        <!-- select con los monumentos de Huelva -->
                        <select name="huelva" id="huelva" class="hide monu">
                            <option value="colon">Monumento Colón</option>
                            <option value="casa">Casa Colón</option>
                            <option value="muelle">Muelle río tinto</option>
                            <option value="carabelas">Muelle de las carabelas</option>
                            <option value="rabida">Monasterio de la Rabida</option>
                        </select>

                        <!-- select con los monumentos de Granada -->
                        <select name="granada" id="granada" class="hide monu">
                            <option value="alhambra">Alhambra</option>
                            <option value="catedral">Catedral</option>
                            <option value="monasterio">Monasterio de San Jeronimo</option>
                            <option value="mirador">Mirador de San Nicolás</option>
                            <option value="ciencia">Parque de la Ciencias</option>
                        </select>

                        <!-- select con los monumentos de Cadiz -->
                        <select name="cadiz" id="cadiz" class="hide monu">
                            <option value="catedralCa">Catedral</option>
                            <option value="constitucion">Monumento a la constitución 1812</option>
                            <option value="castillo">Castillo de San Sebastian</option>
                            <option value="falla">Teatro Falla</option>
                            <option value="romano">Teatro romano</option>
                        </select>

                        <!-- select con los monumentos de Málaga -->
                        <select name="malaga" id="malaga" class="hide monu">
                            <option value="alcazaba">Alcazaba</option>
                            <option value="gibralfaro">Castillo de Gibralfaro</option>
                            <option value="picaso">Museo Picaso</option>
                            <option value="farola">La farola</option>
                            <option value="camino">Caminito del rey</option>
                        </select>

                        <!-- select con los monumentos de Almeria -->
                        <select name="almeria" id="almeria" class="hide monu">
                            <option value="alcazabaAl">Alcazaba</option>
                            <option value="encarnacion">Catedral de la Encarnación</option>
                            <option value="muralla">Murallas de Jairán</option>
                            <option value="cerro">Cerro de san Cristobal</option>
                            <option value="santuario">Santuario virgen del mar</option>
                        </select>

                        <!-- select con los monumentos de Jaén -->
                        <select name="jaen" id="jaen" class="hide monu">
                            <option value="catalina">Castillo Santa Catalina</option>
                            <option value="plaConstitucion">Plaza de la Constitución</option>
                            <option value="asuncion">Catedral de la Asunción</option>
                            <option value="ildefonso">Basilica San Ildefonso</option>
                            <option value="iglesia">Iglesia de San Bartolome</option>
                        </select>

                        <!-- select con los monumentos de Cordoba -->
                        <select name="cordoba" id="cordoba" class="hide monu">
                            <option value="mezquita">Mezquita</option>
                            <option value="cristianos">Alcázar Reyes Cristianos</option>
                            <option value="puente">Puente romano</option>
                            <option value="templo">Templo romano</option>
                            <option value="ruinas">Ruinas Medina Azahara</option>
                        </select>

                    </div>

                    <input type="submit" name="enviar" id="enviar" value="ver datos">
                    <a href="http://localhost/dwes_07/">Menú</a>
                </fieldset>
            </form>



            <?php
            //Si ha pulsado el botón del formulario
            if (filter_input(INPUT_POST, 'enviar')) {
                //recoge los datos del formulario
                $lugar = $_POST['lugar'];

                //Si no se ha seleccionado provincia
                if (empty($lugar)) {
                    $error = "<span>Debes seleccionar una provincia</span>";
                    echo "<div class='resul error'>$error</div>";
                } 
                else {
                    //Si ha seleccionado una provincia
                    switch ($lugar) {
                        case 'sevilla':
                            $monu = $_POST['sevilla'];
                            break;
                        case 'huelva':
                            $monu = $_POST['huelva'];
                            break;
                        case 'granada':
                            $monu = $_POST['granada'];
                            break;
                        case 'cadiz':
                            $monu = $_POST['cadiz'];
                            break;
                        case 'malaga':
                            $monu = $_POST['malaga'];
                            break;
                        case 'almeria':
                            $monu = $_POST['almeria'];
                            break;
                        case 'jaen':
                            $monu = $_POST['jaen'];
                            break;
                        case 'cordoba':
                            $monu = $_POST['cordoba'];
                            break;
                    }

                    /**                     *
                     * Hace una solicitud post
                     * @param type $url
                     * @param type $postdata
                     * @param type $json
                     * @return type
                     */
                    function post($url, $postdata, $json = false) {
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_POST, 1);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $json ? json_encode($postdata) : $postdata);
                        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                        $json && curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        $output = curl_exec($ch);
                        curl_close($ch);
                        return $output;
                    }

                    /**                     *
                     * Hace una solicitud get
                     * @param type $url
                     * @param type $params
                     * @return type
                     */
                    function get($url, $params = null) {
                        $ch = curl_init();
                        $tail = is_array($params) && !empty($params) ? '?' . http_build_query($params) : '';
                        curl_setopt($ch, CURLOPT_URL, $url . $tail);
                        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        $output = curl_exec($ch);
                        curl_close($ch);
                        return $output;
                    }

                    //hace la peticion al servidor
                    $resul = post('http://localhost/dwes07/service.php', [
                        'lugar' => $monu,
                            ], true
                    );

                    //descodifica el json a un array asociativo
                    $json = json_decode($resul, true);
                    ?>

                    <!-- muestra los datos -->
                    <div class='resul'>
                        <div class='cor'>Coordenadas: <?php echo $json['descripcion']; ?></div><br>
                        Latitud: <?php echo $json['latitud']; ?><br>
                        Longitud: <?php echo $json['logitud']; ?><br>
                        Descripción: <?php echo $json['descripcion']; ?><br>
                    </div>

                    <!-- muestra el mapa -->
                    <div id="map"></div>

        <?php
        /*if (isset($monu)) {
            echo "<div id='img'><img src='imagenes/$lugar/$monu.jpg'></div>";
        }*/

        //guarda las coordenadas para pasarlas al mapa
        $lat = $json['latitud'];
        $lon = $json['logitud'];
    }
}
?>


            <!-- Enlaza el archivo javaScript -->
            <script src="JS/script.js"></script>

            <!-- script para mostrar el mapa -->
            <script type="text/javascript">

                var map = L.map('map').setView([<?php echo $lat; ?>, <?php echo $lon; ?>], 25);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                var popup = L.popup()
                        .setLatLng([<?php echo $lat; ?>, <?php echo $lon; ?>])
                        .setContent('<a href="https://www.youtube.com/watch?v=YcAW-VbTYnY" target="_blank">La capital del mundo</a>');

                var marker = L.marker([<?php echo $lat; ?>, <?php echo $lon; ?>]).bindPopup(popup).openPopup().addTo(map);

            </script>

        </div>


    </body>
</html>


