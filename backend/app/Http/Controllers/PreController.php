<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PreController extends Controller
{
    public function index(Request $request,Response $response){
        $html = <<<EOF
        
<html>
<head>
<html>
<head>
<meta charset="UTF-8">
<title>Request/Response</title>
<style>body{font-size:16pt;} h1{font-size:100px; color:#eee;}</style>
</head>
<body>
<h1>Request/Response</h1>
<p>これはRequest/Responseオブジェクトを利用したアクションです。</p>
<hr>
<h3>Request</h3>
<pre>{$request}</pre>
<ul>
<li>url()メソッド：{$request->url()}</li>
<li>fullUrl()メソッド：{$request->fullUrl()}</li>
<li>path()メソッド：{$request->path()}</li>
</ul>
<hr>
<h3>Response</h3>
<pre>{$response}</pre>
</body>
</html>
EOF;

        $response->setContent($html);
        return $response;
    }
}
