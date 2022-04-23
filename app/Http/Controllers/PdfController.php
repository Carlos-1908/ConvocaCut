<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Integrantes;

class PdfController extends Controller
{
    public function kardex(){ 
        return view('kardex');
    }

    public function mguardar(Request $request){
        //dd($request->all());

        request()->validate(Integrantes::$rules);

        if($request->hasfile("Kardex")){
            $file=$request->file("Kardex");
            
            $nombre = $file->getClientOriginalName();

            $ruta = public_path("archivosKardex/".$nombre);

            if($file->guessExtension()=="pdf"){
                copy($file, $ruta);
                Integrantes::create($request->all());
            }else{
                return redirect()->route('kardex')
                    ->with('warning', 'El archivo debe ser pdf');
            }
        }  
        return redirect()->route('kardex')
            ->with('success', 'Se han enviado los datos');   
    }

    public function descargar(){
        $file = public_path(). "/archivos/Carta compromiso.pdf";   
        return response()->download($file);
    }
}