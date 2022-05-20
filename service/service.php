<?php

class Response{
    public $status;
    public $result;
    public $logitud;
    public $latitud;
    public $descripcion;
}

//transmite un fichero a una cadena
$postData = file_get_contents("php://input");

//decodifica el json
$data = json_decode($postData);

//crea el objeto
$response = new Response();

if($data){
    //si $data contiene datos
    if(isset($data->lugar)) {
        //asigna las coordenadas
        switch ($data->lugar){
            case 'giralda':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.38617;
                $response->logitud = -5.99255;
                $response->descripcion = "Giralda de Sevilla";
                json_encode($response);                
                break;
            case 'torre':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.38239;
                $response->logitud = -5.99631;
                $response->descripcion = "Torre del oro de Sevilla";
                json_encode($response);
                break;
            case 'alcazar':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.38398;
                $response->logitud = -5.99111;
                $response->descripcion = "Alcazar de Sevilla";
                json_encode($response);
                break;
            case 'archivo':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.3847;
                $response->logitud =  -5.99304;
                $response->descripcion = "Archivo de indias Sevilla";
                json_encode($response);
                break;
            case 'plaza':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.37708;
                $response->logitud = -5.9869;
                $response->descripcion = "Plaza de españa Sevilla";
                json_encode($response);
                break;
            case 'colon':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.2569;
                $response->logitud = -6.95099;
                $response->descripcion = "Monumento Cristobal Colon";
                json_encode($response);
                break;
            case 'casa':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.25541;
                $response->logitud = -6.94647;
                $response->descripcion = "Casa de Cristobal Colon";
                json_encode($response);
                break;
            case 'muelle': //CAMBIAR
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.25110;
                $response->logitud = -6.95804;
                $response->descripcion = "Muelle Rio tinto";
                json_encode($response);
                break;
            case 'carabelas':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.21146;
                $response->logitud = -6.92808;
                $response->descripcion = "Muelle de las Carabelas";
                json_encode($response);
                break;
            case 'rabida':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.20756;
                $response->logitud = -6.92621;
                $response->descripcion = "Monasterio de la Rabida";
                json_encode($response);
                break;
            case 'alhambra':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.1761;
                $response->logitud = -3.5885;
                $response->descripcion = "La Alhambra";
                json_encode($response);
                break;
            case 'catedral':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.17645;
                $response->logitud = -3.59931;
                $response->descripcion = "Catedral de Granada";
                json_encode($response);
                break;
            case 'monasterio':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.17917;
                $response->logitud = -3.60462;
                $response->descripcion = "Monasterio de San Jeronimo";
                json_encode($response);
                break;
            case 'mirador':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.18111;
                $response->logitud = -3.59269;
                $response->descripcion = "Mirador de San Nicolas";
                json_encode($response);
                break;
            case 'ciencia':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.16268;
                $response->logitud = -3.60575;
                $response->descripcion = "Parque de las Ciencias";
                json_encode($response);
                break;
            case 'catedralCa':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 36.52896;
                $response->logitud = -6.29532;
                $response->descripcion = "Catdral de Cadiz";
                json_encode($response);
                break;
            case 'constitucion':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 36.4679;
                $response->logitud = -5.93162;
                $response->descripcion = "Monumento a la Constitucion de 1812";
                json_encode($response);
                break;
            case 'castillo':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 36.52828;
                $response->logitud = -6.31561;
                $response->descripcion = "Castillo de San Sebastian";
                json_encode($response);
                break;
            case 'falla':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 36.5337;
                $response->logitud = -6.30242;
                $response->descripcion = "Teatro Manuel de Falla";
                json_encode($response);
                break;
            case 'romano':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 36.52825;
                $response->logitud = -6.29367;
                $response->descripcion = "Teatro romano";
                json_encode($response);
                break;
            case 'alcazaba':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 36.721;
                $response->logitud = -4.41591;
                $response->descripcion = "Alcazaba";
                json_encode($response);
                break;
            case 'gibralfaro':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 36.72337;
                $response->logitud = -4.41129;
                $response->descripcion = "Castillo de Gibralfaro";
                json_encode($response);
                break;
            case 'picaso':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 36.72154;
                $response->logitud = -4.41828;
                $response->descripcion = "Museo casa natal de Picasso";
                json_encode($response);
                break;
            case 'farola':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 36.71415;
                $response->logitud = -4.41454;
                $response->descripcion = "La Farola de Malaga";
                json_encode($response);
                break;
            case 'camino':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 36.91609;
                $response->logitud = -4.77292;
                $response->descripcion = "Caminito del Rey";
                json_encode($response);
                break;
            case 'alcazabaAl': //CAMBIAR
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.48375;
                $response->logitud = -2.2942;
                $response->descripcion = "Monumento de la Alcazaba de Almeria";
                json_encode($response);
                break;
            case 'encarnacion':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 36.83803;
                $response->logitud = -2.4672;
                $response->descripcion = "Catedral de la Encarnacion de Almeria";
                json_encode($response);
                break;
            case 'muralla':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 36.84283;
                $response->logitud = -2.4677;
                $response->descripcion = "Muralla de Jairan";
                json_encode($response);
                break;
            case 'cerro': //CAMBIAR
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 36.84347;
                $response->logitud = -2.46968;
                $response->descripcion = "Cerro de San Cristobal";
                json_encode($response);
                break;
            case 'santuario':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.11919;
                $response->logitud = -1.83499;
                $response->descripcion = "Santuario de la Virgen del Mar";
                json_encode($response);
                break;
            case 'catalina':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.76746;
                $response->logitud = -3.79928;
                $response->descripcion = "Castillo de Santa Catalina";
                json_encode($response);
                break;
            case 'plaConstitucion':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 38.11514;
                $response->logitud = -3.08755;
                $response->descripcion = "Plaza de la Constitucion";
                json_encode($response);
                break;
            case 'asuncion':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.76505;
                $response->logitud = -3.78981;
                $response->descripcion = "Catedral de la Asuncion";
                json_encode($response);
                break;
            case 'ildefonso':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.76657;
                $response->logitud = -3.78650;
                $response->descripcion = "Basilica de San Ildefonso";
                json_encode($response);
                break;
            case 'iglesia':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.76796;
                $response->logitud = -3.79119;
                $response->descripcion = "Iglesia de San Bartolome";
                json_encode($response);
                break;
            case 'mezquita':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.87900;
                $response->logitud = -4.77953;
                $response->descripcion = "Mezquita-Catedral de Cordoba";
                json_encode($response);
                break;
            case 'cristianos':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.87656;
                $response->logitud = -4.78140;
                $response->descripcion = "Alcazar de los Reyes Cristianos";
                json_encode($response);
                break;
            case 'puente':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.87667;
                $response->logitud = -4.77796;
                $response->descripcion = "Puente romano";
                json_encode($response);
                break;
            case 'templo':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.88475;
                $response->logitud = -4.77637;
                $response->descripcion = "Templo romano";
                json_encode($response);
                break;
            case 'ruinas':
                $response->status = 'OK';
                $response->result = $data->lugar;
                $response->latitud = 37.88630;
                $response->logitud = -4.86747;
                $response->descripcion = "Conjunto Arqueologico Medina Azahara";
                json_encode($response);
                break;
        }
        $response->status = 'OK';
    }
    else{
        $response->status = 'ERR';
    }
    
}
else{
    $response->status = 'NOJSON';
}


echo json_encode($response);

?>


