<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
class AnotherApiController extends Controller
{
    public function index(){
        $api_url='https://jsonplaceholder.typicode.com/posts';
    $response =Http::get($api_url);
$data = json_decode($response->body()) ;
return view('api/api-example',['data'=>$data]);
  }
}
