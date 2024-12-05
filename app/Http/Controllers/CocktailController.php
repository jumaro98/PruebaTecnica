<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use App\Models\Cocktail;
use Illuminate\Support\Facades\Log;

class CocktailController extends Controller
{
    public function index()
    {
        $response = Http::get('https://www.thecocktaildb.com/api/json/v1/1/search.php?s=margarita');

        $cocktails = collect($response->json()['drinks']);

        return view('cocktails.index', compact('cocktails'));
    }

    public function store($cocktailId)
    {
        $response = Http::get("https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i={$cocktailId}");

        $cocktail = $response->json()['drinks'][0];
        Cocktail::create([
            'name' => $cocktail['strDrink'],
            'category' => $cocktail['strCategory'],
            'image_url' => $cocktail['strDrinkThumb'],
            'instructions' => $cocktail['strInstructions'],

        ]);

        return redirect()->route('cocktails.show');
    }

    public function saveNews(){
        return redirect()->route('cocktails');
    }

    public function show()
    {
        $id=3;
        /* $cocktail = Cocktail::findOrFail($id); */
        $cocktail2 = Cocktail::all();

        /* return $cocktail->count(); */
        return view('cocktails.show', compact('cocktail2'));
    }

    public function edit($id)
    {
        $cocktail = Cocktail::findOrFail($id);
        return view('cocktails.edit', compact('cocktail'));
    }

    public function update(Request $request, $id)
    {
        $cocktail = Cocktail::findOrFail($id);
        $cocktail->update($request->all());
        return redirect()->route('cocktails.index');
    }

    public function destroy($id)
    {
        $cocktail = Cocktail::findOrFail($id);
        $cocktail->delete();
        return redirect()->route('cocktails.index');
    }

}
