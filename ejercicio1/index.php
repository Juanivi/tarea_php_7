<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tarea 7 - PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <?php

        /***
         * Hace una solicitud get 
         * 
         * @param type $url
         * @param type $params
         * @return type
         */
        function get($url, $params = null) {
            //Inicia una sesión para transferencia de datos
            $ch = curl_init();

            //Comprueba si $params es un array y si no está vacio
            $tail = is_array($params) && !empty($params) ? '?' . http_build_query($params) : '';

            //Configura la url de la api donde hace la petición
            curl_setopt($ch, CURLOPT_URL, $url . $tail);

            //Sigue cualquier encabezado "Location". es false por defecto
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

            //Indica a cURL que devuelva la cadena en lugar de imprimirla.
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            //Ejecuta la petición HTTP y almacena la respuesta en la variable $output
            $output = curl_exec($ch);

            //cierra la conexión cURL
            curl_close($ch);

            //Devuelve la respuesta HTTP
            return $output;
        }

        /** *
         * Hace una solicitud post 
         * @param type $url
         * @param type $postdata
         * @param type $json
         * @return type
         */
        function post($url, $postdata, $json = false) {
            //Inicia una sesión
            $ch = curl_init();

            //URL donde se hace la petición
            curl_setopt($ch, CURLOPT_URL, $url);

            //Establece la solicitud para publicar el tipo
            curl_setopt($ch, CURLOPT_POST, 1);

            //Agrega los datos a la solicitud
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json ? json_encode($postdata) : $postdata);

            //Sigue cualquier encabezado "Location". es false por defecto
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

            //Establece el tipo de contenido
            $json && curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

            //Devuelve el resultado como string
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            //Ejecuta la petición HTTP y almacena la respuesta en la variable $output
            $output = curl_exec($ch);

            //cierra la conexión cURL
            curl_close($ch);

            //Devuelve la respuesta HTTP
            return $output;
        }


        //Si ha pulsado el botón del formulario
        if (filter_input(INPUT_POST, 'enviar')) {
            //recoge los datos
            $area = $_POST['area'];
            $lenguaje = $_POST['lenguaje'];
            $estilo = $_POST['style'];
            $num = false;
            
            //si el checkbox está seleccionado
            if(isset($_POST['num'])){
                $num = true;
            }
            
            //si el text area está vacio
            if (empty($area)) {
                $error = "<span>Debes escribir código</span>";
                echo "<div class='resul error'>$error</div>";
            }
            //Si no se ha elegido un lenguaje de programación
            elseif(empty($lenguaje)){
                $error = "<span>Selecciona el lenguaje de programación</span>";
                echo "<div class='resul error'>$error</div>";
            }
            else {
                //envia la petición a la API
                $resul = post('http://hilite.me/api', [
                    'code' => $area,
                    'lexer' => $lenguaje,
                    'style' => $estilo,
                    'linenos' => $num]
                );

                //muestra el resultado
                echo "<div class='resul'>$resul</div>";
            }
        }
        ?>
        
        <h1>Ejercicio 1</h1>

        <!-- Formulario -->
        <form name="forumu" id="formu" action="" method="post">
            <label for="selec">Selecciona el lenguaje</label>

            <!-- select con los lenguajes de programación -->
            <select name="lenguaje">
                <option selected="selected" value="">- - -</option>
                <option value="php">PHP</option>
                <option value="javascript">JavaScript</option>
                <option value="java">Java</option>
                <option value="html">Html</option>
            </select>

            <label>Selecciona estilo</label>

            <!-- select con los estilos de visualización -->
            <select name="style" id="pru">
                <option value="autumn">autumn</option>   
                <option value="borland">borland</option>
                <option value="bw">bw</option>
                <option value="colorful">colorful</option>            
                <option value="default">default</option>              
                <option value="emacs">emacs</option>              
                <option value="friendly">friendly</option>              
                <option value="fruity">fruity</option>              
                <option value="manni">manni</option>              
                <option value="monokai">monokai</option>              
                <option value="murphy">murphy</option>              
                <option value="native">native</option>              
                <option value="pastie">pastie</option>              
                <option value="perldoc">perldoc</option>              
                <option value="rrt">rrt</option>              
                <option value="tango">tango</option>              
                <option value="trac">trac</option>              
                <option value="vim">vim</option>              
                <option selected="selected" value="vs">vs</option>              
            </select>
            
            <!-- checkbox -->
            <label>Mostrar numero de líneas</label>
            <input type="checkbox" name="num" id="num">

            <!-- textarea -->
            <label for="select">Escribe el código a formatear</label>
            <textarea name="area" rows="5" cols="50" placeholder="Escribe aquí..."></textarea>

            <input type="submit" name="enviar" id="enviar" value="Enviar">
            <a href="http://localhost/dwes_07/">Menú</a>
        </form>
    </body>
</html>
