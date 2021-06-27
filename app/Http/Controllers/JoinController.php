<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    function leftJoinData(){
        $result = DB::table('students')
        ->leftJoin('exam_marks', 'students.roll', '=','exam_marks.roll')
        ->get();
        return $result;
    }

    function rightJoinData(){
        
    }
}
