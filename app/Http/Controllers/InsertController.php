<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    function insertData(){
        $result = DB::table('students')->insertOrIgnore(
            [
                ['name'=>'Rohan','class'=>'7','roll'=>'03'],
                ['name'=>'Tonni','class'=>'8','roll'=>'05'],
                ['name'=>'Badol','class'=>'10','roll'=>'25'],

            ]
        );

        if($result == true){
            return "Insert success";
        }
        else{
            return "Insert failed";
        }
    }
}
