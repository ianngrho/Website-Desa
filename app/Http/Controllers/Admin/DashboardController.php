<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionRequest;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'travel_package' =>TravelPackage::count(),
            'transaction' =>Transaction::count(),
            'transaction_pending' =>Transaction::where('transaction_status', 'PENDING')->count(),
            'transaction_success' =>Transaction::where('transaction_status', 'SUCCESS')->count()
        ]);
    }
}
