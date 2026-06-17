<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:150',
            'description' => 'required|string|min:10',
            'preparation_time' => 'required|integer|min:1',
            'category' => 'required|string',
            'difficulty' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('img') && $request->file('img')->isValid()) {

            $path = $request->file('img')->store('recipes', 'public');

            $validated['img'] = $path;
        }

        Recipe::create($validated);

        return redirect(route('recipes_index'))->with('success', 'La tua ricetta è stata pubblicata con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.detail', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:150',
            'description' => 'required|string',
            'preparation_time' => 'required|integer',
            'category' => 'required|string',
            'difficulty' => 'required|string',
            'img' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $path = $request->file('img')->store('recipes', 'public');
            $validated['img'] = $path;
        }

        
        $recipe->update($validated);

        return redirect()->route('recipes_index')->with('success', 'Ricetta aggiornata!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect()->route('recipes_index')->with('success', 'Ricetta eliminata!');
    }
}
