<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExchangeController extends Controller
{
    function toMmk($amount, $fromCurrency)
    {
        $res = Http::get('http://forex.cbm.gov.mm/api/latest');
        $rates = $res->collect()['rates'];
        $currentToMmk = $amount * str_replace(",", "", $rates[strtoupper($fromCurrency)]);
        dd($currentToMmk);
    }
}
