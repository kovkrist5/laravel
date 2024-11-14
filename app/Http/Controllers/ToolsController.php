<?php

namespace App\Http\Controllers;

use App\Models\Tools;
use App\Models\Category;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tools = Tools::all();
        return view('tools.index', compact('tools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('tools.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hasFreePlan = $request->has('hasFreePlan');
        if($hasFreePlan)
        {
            $request->merge(['hasFreePlan'=> true]);
        }      

        $request->validate([
            'name' => 'required|string|min:3',
            'category_id' => 'exists:categories.id',
            'desc' => 'string',
            'link' => 'url',
            'plan' => 'boolean',
            'price' => 'nullable|numeric',
        ]);

        Tools::create($request->all());

        return redirect() ->route('tools.index')->with('success', 'Tools added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
