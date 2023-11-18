<?php

namespace App\Http\Controllers;

use App\Models\API;
use Illuminate\Http\Request;

class NewApiController extends Controller
{

    public function index()
    {
        $blogs = API::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $blogs
        ];
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $blog = API::create($request->all());
        return [
            "status" => 1,
            "data" => $blog
        ];
    }


    public function show(API $blog)
    {
        return [
            "status" => 1,
            "data" =>$blog
        ];
    }


    public function edit(API $blog)
    {
        //
    }

    public function update(Request $request, API $blog)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $blog->update($request->all());

        return [
            "status" => 1,
            "data" => $blog,
            "msg" => "Blog updated successfully"
        ];
    }


    public function destroy(API $blog)
    {
        $blog->delete();
        return [
            "status" => 1,
            "data" => $blog,
            "msg" => "Blog deleted successfully"
        ];
    }
}



