<?php
try {
$curl = curl_init('https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&current_weather=true&hourly=temperature_2m,relativehumidity_2m,windspeed_10m');
} catch (Exception $e) {
    die($e->getMessage());
    return [];
};
$data = curl_exec($curl);

//permet de desactiver la verification SSL - mauvaise pratique
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//Methode clean - recupérer le certificat via le cadenas dans le navigateur et executer:
curl_setopt_array(
    $curl, [
        CURLOPT_CAINFO  => 'path',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 1    

    ]
);

if ($data === false) {

    $error= curl_error($curl);
    throw new Exception($error);
} else {
    if (curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200){
        $data = json_decode($data, true);
        echo '<pre>';
            var_dump($data);
        echo '</pre>';
    }
    }
  
curl_close($curl);