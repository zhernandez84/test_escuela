<?php

namespace App\Controllers;
use App\Services\ServiceApi;

class Buscar extends BaseController
{
   public function Index()
    {
        $datos=['titulo'=>'Buscar alumno',];
        return view('buscar',$datos);
    } 

    public function buscarAlumno()
    { 
        $operacionService = new ServiceApi();
        $busca=$this->request->getGet('valor');
    
        $resultado = $operacionService->getToken();
        $data = json_decode($resultado);
        $nCodigo= $data->nCodigo; 
        if($nCodigo==1){
            $token=$data->data;
            $response = $operacionService->getAlumno($token,$busca);
            $data = json_decode($response);
            $datos=['titulo'=>'Alumno','alumnos'=>$data->data];           
        }else{
            $datos=['titulo'=>'Alumno'];
        }
        return view('alumno',$datos);
    } 

    public function InsertarAlumno()
    {        
        $datos=['titulo'=>'Inserta Alumno'];
        return view('insertaAlumno',$datos);
    }

    public function Insertar()
    {        
        $operacionService = new ServiceApi();

        $txt_id=$this->request->getPost('txt_id');
        $txt_nombre=$this->request->getPost('txt_nombre');
        $txt_paterno=$this->request->getPost('txt_paterno');
        $txt_materno=$this->request->getPost('txt_materno');
        $fecha=$this->request->getPost('fecha');
        $genero=$this->request->getPost('genero');
       
                    
        $data_array = array("txt_id" =>$txt_id, "txt_nombre" =>$txt_nombre,"txt_paterno" =>$txt_paterno,"txt_materno" =>$txt_materno, "fecha" => $fecha,"genero" =>$genero);
        
        $resultado = $operacionService->getToken();
        $data = json_decode($resultado);
        $nCodigo= $data->nCodigo; 
        
        $msj='';
        $cod=0;

        if($nCodigo==1){
            $token=$data->data;
            $response = $operacionService->insertAlumno($token,$data_array);
            $resp = json_decode($response,true);
            $msj=$resp['sMensaje'];
            $cod=$resp['nCodigo'];  
        }
        $datos=['msj'=>$msj,'cod'=>$cod];
        return json_encode($datos);
    }

    

}
