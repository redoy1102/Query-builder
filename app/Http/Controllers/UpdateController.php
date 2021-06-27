<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    function update(){
        $result = DB::table('students')
        ->where('name','=','Rohan')
        ->update(['name'=>'Hridoy', 'Roll'=>'01', 'Class'=>'14']);

        if($result == true){
            return "Update success";
        }
        else{
            return "Update failed";
        }
    }
}
