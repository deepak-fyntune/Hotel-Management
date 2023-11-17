<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function create()
    {
        return view('admin/add-food');
    }

    public function store(Request $request)
    {

        // dd($request->all());


        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'foodname' => 'required|string',
        //     'description' => 'required|string',
        //     'price' => 'required|numeric',
        // ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);

        $food = new Food([
            'image' => $imageName,
            'foodname' => $request->input('foodname'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        $food->save();

        return redirect()->route('food-view')->with('success', 'Food item added successfully!');

    }




public function index()
{
    $foods = Food::all();
    // dd($foods);

    return view('admin/food-panel', compact('foods'));
}
public function destroy($id)
{
    $food = Food::find($id);



    $food->delete();

    return redirect()->route('food-view')->with('success', 'Food item deleted successfully.');
}
}
