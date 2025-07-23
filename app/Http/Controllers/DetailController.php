<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Carbon\Carbon;


class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = TravelPackage::with(['galleries'])->
        where('slug', $slug)->firstOrFail();
        return view('pages.detail', [
            'item' => $item,
            'tanggal_kedatangan' => Carbon::now()->addYears(5),
        ]);
    }
}
