<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function kardex(){
        return view('kardex');
    }

    public function mguardar(Request $request){
        if($request->hasFile("Kardex")){
            $file=$request->file("Kardex");
            
            $nombre = time()."_".$file->getClientOriginalName();
            /*$nombre = "pdf_".time().".".$file->guessExtension();*/

            $ruta = public_path("archivosKardex/".$nombre);

            if($file->guessExtension()=="pdf"){
                copy($file, $ruta);
            }else{
                dd("NO ES UN PDF");
            }
        }
        return 'ok';
    }

    public function descargar(){
        $file = public_path(). "/archivos/Carta compromiso.pdf";   
        return response()->download($file);
    }
}