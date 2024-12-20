<?php

namespace App\Controllers;
use App\Services\ServiceApi;

class Home extends BaseController
{
   public function index()
    {
        $operacionService = new ServiceApi();
        $resultado = $operacionService->getToken();
        $data = json_decode($resultado,true);
       
        $nCodigo=0;
        if (isset($data)) {
            $nCodigo= $data['nCodigo']; 
        }

        if($nCodigo==1){//obtuvo token
            $token=$data['data'];
            
           $data2 = $operacionService->getAlumnos($token);

            $registro= json_decode($data2, true);
            $var = $registro['nCodigo'];            
            $alumnos = $registro['data'];  
            $datos=['titulo'=>'Alumnos','alumnos'=>$alumnos];
        }else{
            $datos=['titulo'=>'Alumnos',];
        }
        return view('index',$datos);
    }
}
