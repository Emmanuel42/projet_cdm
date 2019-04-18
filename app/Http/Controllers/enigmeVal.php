<?php

namespace App\Http\Controllers;

Class EnigmeVal extends Controller {


    public function enigmeVal(){

        if (isset($_POST['enigme1bl'])){
    
        if ($_POST['enigme1bl'] == 'DESIGN'){
        
            return view('ebl2');
        
        }
    
        else {
        
            return view('ebl1');
        
            }
        }
}

}