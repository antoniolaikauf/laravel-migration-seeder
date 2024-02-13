<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class MainTrain extends Controller
{
    public function index()

    {
        $train = Train::all();

        return view('pages.index', compact('train'));
    }
}
