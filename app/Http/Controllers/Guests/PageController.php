<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $comics = Comic::all();
        return view('partials.card', compact('comics'));
    }
}
