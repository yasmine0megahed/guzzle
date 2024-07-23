<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HttpPostController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $jsondata = $response->json();
        // dd($jsondata);
        return view('welcome',compact('jsondata'));
    }


    public function store(){
        $response = Http::post('https://jsonplaceholder.typicode.com/posts',[
            'title'=>'test title',
            'body'=>'test body'
        ]);
        $jsondata = $response->json();
        dd($jsondata);

    }
    public function update(){
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title'=>'test title',
            'body'=>'test body'
        ]);
        $jsondata = $response->json();
        dd($jsondata);

    }
    public function delete(){
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/1');
        $jsondata = $response->json();
        dd($jsondata);

    }

}
