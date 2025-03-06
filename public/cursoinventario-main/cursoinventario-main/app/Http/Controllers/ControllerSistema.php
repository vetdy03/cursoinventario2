<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Producto;

use DB;
use Illuminate\Support\Facades\Redirect;

class ControllerSistema extends Controller
{
    //
    public function ejemplo1 (){
        //echo "Hola mundo...";
        $n1=20;
        $n2=25;
        $s=($n1+$n2);
        echo "Suma: ".$s;
    }

    public function ejemplo2 (){
        //echo "Hola mundo...";
        $n1=20;
        $n2=25;

        if($n1 > $n2){
            $r= $n1;
        }else{
            $r= $n2;
        }
        echo "Nro. es: ".$r;
    }
    //modulo categotria
    public function categoria(){

        //$categoria= DB::table('categorias')->where('ca_estado', '!=', 'ELIMINADO')->get();
        //dd($categoria); die;
        return view('categoria.categoria_index');// en laravel el punto se usa para directorios entrar
        //ingresara a catergoria y para la siguiente carpeta se ausa .
    }

    public function guardarNuevoCategoria(Request $request ){
        echo mb_strtoupper($request->post('nombre'),'utf-8');
        exit;
        die();
        $obj=new Categoria();
        $obj->ca_nombre=mb_strtoupper($request->post('nombre'),'utf-8');
        $obj->save();

    }

    //fin modulo categotria si este es el fin







    //modulo producto
    public function producto(){
        return view('producto.producto_index');//redireccionara a la carpeta producto que creamos
        //redireccionar a la carpeta  VIEW, tenemos una carpeta con el nombre producto y dentro tenemos 
        //un archivo llamado producto_index, en el caso de no tener ese archivo lo creamos 
    }
    //fin modulo producto



}
