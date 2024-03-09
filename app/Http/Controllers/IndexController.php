<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        // dd(Auth::user());
        // Listing::make([
        //     'beds' => 2, 'baths' => 2, 'area' => 100, 'city' => 'North', 'street' => 'Tinker st', 'street_nr' => 20, 'code' => 'TS', 'price' => 200_000
        // ])
        // dd(Listing::where('beds','>=','4')->orderBy('price','asc')->first());
        // dd(Auth::check());
        return inertia('Index/Index', [
            'message' => 'Hello  from Laravel'
        ]);
    }
    public function show()
    {

        return inertia('Index/Show');
    }
}
