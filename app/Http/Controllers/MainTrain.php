<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

// usato carbo per predere la data attuale perche nella queri dava problemi usare solo day con orario_di_partenza
use Illuminate\Support\Carbon;

class MainTrain extends Controller
{
    public function index()

    {
        // Ottiene il giorno corrente come numero
        $currentDay = Carbon::now()->day;
        // query da fare al database 
        $train = Train::whereDay('orario_di_partenza', '=', $currentDay)->orderBy('orario_di_partenza')->get();


        return view('pages.index', compact('train'));
    }
}
