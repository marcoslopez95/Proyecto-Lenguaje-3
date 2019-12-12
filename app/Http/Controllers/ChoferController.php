<?php

namespace App\Http\Controllers;

use App\Camion;
use App\Chofer;
use Illuminate\Http\Request;

class ChoferController extends Controller
{
    //
    function formulario(){
        $camion=Camion::all();
        return view('chofer.formulario',compact('camion'));
    }

    function guardar(Request $request){

         $Cedula = $request->input('Cedula');
         $NombreApellidos = $request->input('Nomb_ape');
         $Sueldo = $request->input('Sueldo');
         $Telefono = $request->input('Telefono');
         $direccion = $request->input('Direccion');
         if(empty($Cedula)||empty($NombreApellidos)||empty($Sueldo) ||empty($direccion) || empty($Telefono))
            $data = [
                "status" => 'error'
            ]; 
        else {
            
        $chofer = new Chofer();
        $chofer->Cedula = $Cedula;
        $chofer->NombreApellidos = $NombreApellidos;
        $chofer->Telefono = $Telefono;
        $chofer->DireccionHab = $direccion;
        $chofer->Sueldo = $Sueldo;

        $chofer->save();
        
        $camion = new Camion();
        $camion->Matricula = $request->input('matricula');
        $camion->Modelo = $request->input('modelo');

        // $pokemon->trainers()->associate($trainer)->save();
        $camion->chofer()->associate($chofer)->save();
        // $camion->save();
        
        //  return redirect()->route('reporte');
         
            $data = [
                "status" => 'succesfull',
                "content" => $chofer,
            ];
        }

        return response()->json($data);
        
    }

    function reporte(Request $request){
        $buscador = '%' . $request->input('buscar') . '%';
        $join = Camion::select('camiones.Matricula','camiones.Modelo','camiones.Cedula','choferes.NombreApellidos')->where('camiones.Matricula','like',"$buscador")->join('choferes','camiones.Cedula','=','choferes.Cedula')->get();
        // $sele = marca::distinct()->select('marca.COD_MARCA','marca.NOMBRE_MARCA')->join('Estado','')
        // return view('chofer.reporte',compact('join'));
        
        if(empty($join)){
            
            $data = [
                "status" => 'No encontrado',
            ];
        }
        else{
            $data = [
                "status" => 'succesfull',
                "content" => $join,
            ];
        }    
        
        
        return response()->json($data);
    }
    
    function reporte_chofer(Request $request){
        $buscador = '%' . $request->input('buscar') . '%';
        $join = Chofer::select('choferes.Cedula','choferes.NombreApellidos','choferes.Telefono','choferes.DireccionHab')->where('choferes.Cedula','like',"$buscador")->get();
        
        return response()->json($join);
        
    }
}
