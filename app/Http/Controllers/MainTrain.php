<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

use Illuminate\Support\Carbon;

class MainTrain extends Controller
{
    public function index()

    {
        // Ottiene il giorno corrente come numero
        $currentDay = Carbon::now()->day;

        $train = Train::whereDay('orario_di_partenza', '=', $currentDay)->orderBy('orario_di_partenza')->get();


        return view('pages.index', compact('train'));
    }
}
