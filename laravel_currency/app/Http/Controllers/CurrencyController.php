<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AmrShawky\LaravelCurrency\Facade\Currency;

class CurrencyController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function convert()
        {
            $currency = Currency::convert()
                        ->from('USD')
                        ->to('EUR')
                        ->get();
                        dd($currency);
        }
    
}
