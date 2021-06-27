<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RetriveController extends Controller
{
    function allRows(){
        $result = DB::table('students')->get();
        return json_encode($result);
    }

    function singleRow(){
        $result = DB::table('students')->find(2);
        return json_encode($result);
    }

    function singlecolumn(){
        $result = DB::table('students')->pluck('name');
        return json_encode($result);
    }

    function multicolumn(){
        $result = DB::table('students')->pluck('id','name');
        return json_encode($result);
    }

    function condition(){
        $result = DB::table('students')->where('id','=',3)->value('name');
        return json_encode($result);
    }

    
}
