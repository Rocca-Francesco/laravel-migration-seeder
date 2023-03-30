<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function trainList () {
        $trains = Train::all();
        return view('homepage', compact('trains'));
    }
}
