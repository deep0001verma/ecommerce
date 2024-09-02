<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        if (strlen($query) < 4) {
            return response()->json([]);
        }

        $results = Item::where(function($q) use ($query) {
            $q->where('name', 'like', "%{$query}%")
              ->orWhere('keywords', 'like', "%{$query}%");
        })->get(['id', 'name']);
        return response()->json($results);
    }
    public function index()
    {
        // Return all clothing items
        $items = Item::all(['id', 'name']);
        return response()->json($items);
    }
}
