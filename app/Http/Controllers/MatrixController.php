<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatrixController extends Controller
{
    public function index(){
        return view('welcome');
    }


    public function cal(Request $request){
        $data = $request->all();
        $cid = $request->cid;
        $rid = $request->rid;
     
        
        if($rid==1 && $cid==1)
        {
            echo 'Row Addition:'.$data['r1c1'];
            echo '<br>';
            echo "Colmn Add:".$data['r1c1'];
        }
       
        if($rid==2 && $cid==2)
        {
            echo "Row1 Addition: ".($data['r1c1']+$data['r1c2']);
            echo '<br>';
            echo "Row2 Multiple: ".($data['r2c1']*$data['r2c2']);
            echo "<hr>";

            echo "Column1 Addition: ".($data['r1c1']+$data['r1c2']);
            echo '<br>';
            echo "Column2 Multiple: ".($data['r2c1']*$data['r2c2']);
        }

        if($rid==3 && $cid==3)
        {
            echo "Row1 Addition: ".($data['r1c1']+$data['r1c2']+$data['r1c3']);
            echo '<br>';
            echo "Row2 Multiple: ".($data['r2c1']*$data['r2c2']*$data['r2c3']);
            echo '<br>';
            echo "Row3 Sub: ".($data['r3c1']-$data['r3c2']-$data['r3c3']);
            echo "<hr>";

            echo "Column1 Addition: ".($data['r1c1']+$data['r1c2']+$data['r1c3']);
            echo '<br>';
            echo "Column2 Multiple: ".($data['r2c1']*$data['r2c2']*$data['r1c3']);
            echo '<br>';
            echo "Column3 sub: ".($data['r3c1']-$data['r3c2']-$data['r3c3']);

        }
    }

    
}
