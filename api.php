<?php
$curl = curl_init('https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&current_weather=true&hourly=temperature_2m,relativehumidity_2m,windspeed_10m');
$data = curl_exec($curl);

//permet de desactiver la verification SSL - mauvaise pratique
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//Methode clean - recupérer le certificat via le cadenas dans le navigateur et executer:
// curl_setopt($curl, CURLOPT_CAINFO, 'path');

if ($data === false) {
    var_dump(curl_error($curl));
} else {

}
curl_close($curl);