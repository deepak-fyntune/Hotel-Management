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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foodname' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);

        $food = new Food([
            'image_name' => $imageName,
            'food_name' => $request->get('food_name'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
        ]);

        $food->save();

        return redirect()->route('food.create')->with('success', 'Food item added successfully!');
    }
}
