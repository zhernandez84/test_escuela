<?php

namespace App\Controllers;
use App\Services\ServiceApi;

class Calificaciones extends BaseController
{
   public function Index()
    {      
        $operacionService = new ServiceApi();
        $resultado = $operacionService->getToken();
        $data = json_decode($resultado,true);
               
        $nCodigo=0;
        if (isset($data)) {
            $nCodigo= $data['nCodigo']; 
        }

        if($nCodigo==1){
            $token=$data['data'];
            $data = $operacionService->getGrados($token);
            $registro= json_decode($data, true);        
            $grados = $registro['data'];

            $data2 = $operacionService->getAlumnos($token);
            $registro2= json_decode($data2, true);
            $alumnos = $registro2['data']; 

            $datos=['titulo'=>'Buscar calificaciones','grados'=>$grados,'alumnos'=>$alumnos];
        }else{
            $datos=['titulo'=>'Buscar calificaciones'];
        }      
                 
        return view('buscarCalificacion',$datos);
    }  
    
    public function Buscar()
    {        
        $operacionService = new ServiceApi();
        $id=$this->request->getPost('id');
        $grado=$this->request->getPost('grado');
        $mes=$this->request->getPost('mes');
        $year=$this->request->getPost('year');

        
        $data_array = array($id, $grado,  $mes,$year);
    
        $resultado = $operacionService->getToken();
        $data = json_decode($resultado);
        $nCodigo= $data->nCodigo; 
       
        if($nCodigo==1){
            $token=$data->data;
            $response = $operacionService->getCalificaciones($token,$data_array);
            $calificaciones = json_decode($response);            
          
            $datos=['titulo'=>'Buscar','calificaciones'=>$calificaciones->data];           
        }else{
            $datos=['titulo'=>'Buscar'];
        }
        return view('calificaciones',$datos);
    }  

    public function InsertarCalificaciones()
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
            $data3 = $operacionService->getMaterias($token);
            $data4 = $operacionService->getGrados($token);
           
            $registro= json_decode($data2, true);        
            $alumnos = $registro['data']; 
            
            $registro2= json_decode($data3, true);        
            $materias = $registro2['data']; 

            $registro3= json_decode($data4, true);        
            $grados = $registro3['data']; 

            $datos=['titulo'=>'Buscar calificaciones','alumnos'=>$alumnos,'materias'=>$materias,'grados'=>$grados];
        }else{
            $datos=['titulo'=>'Buscar calificaciones'];
        }

        

      //  $registro= json_decode($data2, true);
     //   $var = $registro['nCodigo'];            
      //  $alumnos = $registro['data'];  

      //  $datos=['titulo'=>'Buscar calificaciones'];
        return view('insertarCalificaciones',$datos);
    }

    public function Insertar()
    {        
        $operacionService = new ServiceApi();
        $id=$this->request->getPost('id');
        $materia=$this->request->getPost('materia');
        $calificacion=$this->request->getPost('calificacion');
        $grado=$this->request->getPost('grado');
        $mes=$this->request->getPost('mes');
        $year=$this->request->getPost('year');
       
                    
        $data_array = array("id" =>$id, "materia" =>$materia,"calificacion" =>$calificacion,"grado" =>$grado, "mes" => $mes,"year" =>$year);
        
        $resultado = $operacionService->getToken();
        $data = json_decode($resultado);
        $nCodigo= $data->nCodigo; 
        
        $msj='';
        $cod=0;

        if($nCodigo==1){
            $token=$data->data;
            $response = $operacionService->insertCalificacion($token,$data_array);
            $resp = json_decode($response,true);
            $msj=$resp['sMensaje'];
            $cod=$resp['nCodigo'];  
        }
        $datos=['msj'=>$msj,'cod'=>$cod];
        return json_encode($datos);
    }
}
?>