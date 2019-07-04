<?php

namespace App\Http\Controllers;

use App\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // Return all fruits -- GET/fruits endpoint
    public function index()
    {
     
     $fruits = Fruit::all();
     return response()->json($fruits);
    }
    
    // POST/fruits end point
    public function create(Request $request)
     {
        $fruit = new Fruit;
        // $fruit->name= $request->name;
        // $fruit->season = $request->season;
        // $fruit->description = $request->description;
        $data = $request->all();
        
        $response = $fruit->firstOrCreate(['name' => $request->name], $data);
        return response()->json($response, 201);
     }
    
     // GET/fruit/{id} -- Getting a single post
    public function show($id)
     {
        $fruit = Fruit::find($id);
        return response()->json($fruit, 200);
     }
    
     // PUT/fruit/{id} Updating a single data from the DB
    public function update(Request $request, $id)
     { 
        $fruit= Fruit::find($id);
        
        $fruit->name = $request->input('name');
        $fruit->season = $request->input('season');
        $fruit->description = $request->input('description');
        
        $fruit->save();
        return response()->json($fruit, 201);
     }
    
     // DELETE/fruit/{id} -- Deleting a particular fruit
    public function destroy($id)
     {
        $fruit = Fruit::find($id);
        $fruit->delete();
         return response()->json('Fruit removed successfully', 204);
     }
    }