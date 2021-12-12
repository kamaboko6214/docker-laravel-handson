<?php

namespace App\Http\Controllers;//名前空間の指定

use Illuminate\Http\Request;//Requestを使えるようにしている。
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request){
        $data = [
            'msg' => 'これはコントローラーから渡されたメッセージでやんす',
            'id'=>$request->id
        ];
        return view('hello.index',$data);
    } 
}
