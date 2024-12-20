<?php

namespace App\Services;

class ServiceApi
{
    public function getToken() {
        
        $url = API_URL.'/Login';

        $data = array(
            'userName' => USER,
            'password' => PASS
        );        
        $json_data = json_encode($data);

        // Inicializar cURL
        $ch = curl_init();

        // Configuración de cURL para POST
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Desactivar la verificación SSL
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // Desactivar la verificación de host
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($json_data)); // Datos que quieres enviar

        // Si necesitas enviar cabeceras personalizadas
       /* curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer your_access_token',
            'Content-Type: application/x-www-form-urlencoded'
        ));*/

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json', // Indicar que el cuerpo es JSON
            //'Authorization: Bearer your_access_token' // Si necesitas autorización
        ));

        // Ejecutar y obtener respuesta
        $response = curl_exec($ch);        
        curl_close($ch);
        return $response;
       
       // return (json_decode($response, true));
       
    } 

    public function getAlumnos($token) {
        
        $url = API_URL.'/Alumno';

        // Inicializar cURL
        $ch = curl_init();

        // Configuración de cURL para POST
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Desactivar la verificación SSL
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // Desactivar la verificación de host
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, ($json_data)); // Datos que quieres enviar

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$token, // Si necesitas autorización
            'Accept: application/json' // Si la API devuelve JSON
        ));

       
        // Ejecutar y obtener respuesta
        $response = curl_exec($ch);        
        curl_close($ch);
        return $response;      
       
    }  
    
    public function getAlumno($token,$busca) {
        
        $url = API_URL.'/Alumno/'.$busca;

        // Inicializar cURL
        $ch = curl_init();

        // Configuración de cURL para POST
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Desactivar la verificación SSL
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // Desactivar la verificación de host
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, ($json_data)); // Datos que quieres enviar

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$token, // Si necesitas autorización
            'Accept: application/json' // Si la API devuelve JSON
        ));

       
        // Ejecutar y obtener respuesta
        $response = curl_exec($ch);        
        curl_close($ch);
        return $response;     
    } 

    public function getCalificaciones($token,$data) {
        
        $url = API_URL.'/Alumno/BuscarCalificacion';
        
        // Inicializar cURL
        $ch = curl_init();
        $data = [
            'sIdAlumno' => $data[0],
            'nGrado' => $data[1],
            'nMes' => $data[2],
            'nYear' => $data[3]
        ];
        $json_data = json_encode($data);
       
        // Configuración de cURL para POST
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Desactivar la verificación SSL
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // Desactivar la verificación de host
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data); // Datos que quieres enviar

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',  // Especifica que estamos enviando JSON
            'Authorization: Bearer ' . $token,  // Agrega el token Bearer en la cabecera
            'Content-Length: ' . strlen($json_data)  // Longitud del contenido
        ]);

        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Ejecutar y obtener respuesta
        $response = curl_exec($ch);        
        curl_close($ch);
        return $response;     
    } 

    public function insertCalificacion($token,$data) {
        
        $url = API_URL.'/Alumno/InsertarCalificacion';
        
        // Inicializar cURL
        $ch = curl_init();
        $data = [
            'nIdCalificacion' => 0,
            'nIdAlumno' => $data['id'],
            'nIdMateria' => $data['materia'],
            'nCalificacion' => $data['calificacion'],
            'nGrado' => $data['grado'],
            'nMes' => $data['mes'],
            'nYear' => $data['year']
        ];
        $json_data = json_encode($data);
       
        // Configuración de cURL para POST
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Desactivar la verificación SSL
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // Desactivar la verificación de host
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data); // Datos que quieres enviar

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',  // Especifica que estamos enviando JSON
            'Authorization: Bearer ' . $token,  // Agrega el token Bearer en la cabecera
            'Content-Length: ' . strlen($json_data)  // Longitud del contenido
        ]);

        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Ejecutar y obtener respuesta
        $response = curl_exec($ch);        
        curl_close($ch);
        return $response;     
    } 

    public function insertAlumno($token,$data) {
        
        $url = API_URL.'/Alumno';
        
        // Inicializar cURL
        $ch = curl_init();

        $data = [
            'nIdAlumno' => 0,
            'nEstatus' => 0,
            'sIdAlumno' => $data['txt_id'],
            'sNombre' => $data['txt_nombre'],
            'sPaterno' => $data['txt_paterno'],
            'sMaterno' => $data['txt_materno'],
            "dFecNacimiento" => $data['fecha'],
            'sGenero' => $data['genero'],
        ];
        $json_data = json_encode($data);
       
        // Configuración de cURL para POST
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Desactivar la verificación SSL
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // Desactivar la verificación de host
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data); // Datos que quieres enviar

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',  // Especifica que estamos enviando JSON
            'Authorization: Bearer ' . $token,  // Agrega el token Bearer en la cabecera
            'Content-Length: ' . strlen($json_data)  // Longitud del contenido
        ]);

        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Ejecutar y obtener respuesta
        $response = curl_exec($ch);        
        curl_close($ch);
        return $response;     
    } 

    public function getMaterias($token) {
        
        $url = API_URL.'/Materia';

        // Inicializar cURL
        $ch = curl_init();

        // Configuración de cURL para POST
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Desactivar la verificación SSL
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // Desactivar la verificación de host
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, ($json_data)); // Datos que quieres enviar

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$token, // Si necesitas autorización
            'Accept: application/json' // Si la API devuelve JSON
        ));

       
        // Ejecutar y obtener respuesta
        $response = curl_exec($ch);        
        curl_close($ch);
        return $response;      
       
    } 
    
    public function getGrados($token) {
        
        $url = API_URL.'/Grado';

        // Inicializar cURL
        $ch = curl_init();

        // Configuración de cURL para POST
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Desactivar la verificación SSL
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // Desactivar la verificación de host
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, ($json_data)); // Datos que quieres enviar

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$token, // Si necesitas autorización
            'Accept: application/json' // Si la API devuelve JSON
        ));

       
        // Ejecutar y obtener respuesta
        $response = curl_exec($ch);        
        curl_close($ch);
        return $response;      
       
    } 
}

?>