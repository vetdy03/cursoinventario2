<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSistema extends Controller
{
    public function ejemplo1(){
        //echo "<h1>hola mundo..</h1>";
        $n1= 20;
        $n2= 25;
        $suma= ($n1+$n2);
        
        echo "Resultado: ".$suma;
    }
    public function ejemplo2(){
        //echo "<h1>hola mundo..</h1>";
        $n1= 20;
        $n2= 25;
        if($n1 > $n2){
            $sr= $n1;
        }else{
            $sr= $n2;
        }
        
        echo "Nro. es: ".$sr;
    }


    public function categoria(){//la carpeta que se encuetra enRESOURCES/VIEWS
        return view('categoria.categoria_index');//debemos crear ese archivo categoria index
    }



    public function producto(){//la carpeta que se encuetra enRESOURCES/VIEWS
        return view('producto.producto_index');//debemos crear ese archivo categoria index
    }
}
