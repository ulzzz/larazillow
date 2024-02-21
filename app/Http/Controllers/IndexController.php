<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        
        // dd(Listing::where('beds','>=','4')->orderBy('price','asc')->first());
        return inertia('Index/Index', [
            'message' => 'Hello  from Laravel'
        ]);
    }
    public function show(){
        return inertia('Index/Show');
    }
    
}
