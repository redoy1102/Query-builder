<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    function deleteSingleRow(){
        $result = DB::table('students')->where('name','=','Fuad')->delete();


        if($result == true){
            return "Delete Success!";
        }
        else{
            return "Delete failed!";
        }
    }

}
