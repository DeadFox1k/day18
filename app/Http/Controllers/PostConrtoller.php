<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class PostConrtoller extends Controller
{
    function index(Request $request) {
        /*var_dump($request->all());
        echo '<br>';
        var_dump($request->password);
        return view('welcome');
        */
        $st = Student::where('age','=', 21)->first();
        $re->fname;
        dd($st);
    }
}
