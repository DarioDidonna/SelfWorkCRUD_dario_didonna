<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller 
{

    public static function middleware(): array
    {
        return[
            new Middleware('auth', except:['index', 'show'])
        ];
    }

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
        Recipe::create([
            'title' => $request->title,
            'description' => $request->description,
            'preparation_time' => $request->preparation_time,
            'img' => $request->img,
            'category' => $request->category,
            'difficulty' => $request->difficulty,
            'user_id' => Auth::user()->id
        ]);

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
