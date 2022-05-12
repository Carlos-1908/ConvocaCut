<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Integrantes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function kardex(){ 
        return view('kardex');
    }

    public function listo(){ 
        return view('registroListo');
    }

    public function mguardar(Request $request){
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
        return redirect()->route('registroListo');
    }

    public function descargar(){
        $file = public_path(). "/archivos/Carta compromiso.pdf";   
        return response()->download($file);
    }

    /*public function index(Request $request)
    {
        $nombre = $request->input('nombre_del_equipo');
        $Generar = DB::table('integrantes')->where('nombre_del_equipo', 'like', '%'.$nombre.'%')->get();
        return view('generarPdf',array('Generar' => $Generar));
    }*/
    public function pdf(Request $request){
        //$Generar = DB::table('integrantes')->get();
        $nombre = $request->input('nombre_del_equipo');
        $Generar = DB::table('integrantes')->where('nombre_del_equipo', 'like', '%'.$nombre.'%')->get();
        $pdf = App::make("dompdf.wrapper"); 
        $pdf->loadView("generarPdf", ['Generar'=>$Generar]);
        //return $pdf->stream();
        return $pdf->download("mi_equipo.pdf");
    }
}