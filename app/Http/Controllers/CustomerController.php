<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = DB::table('sales.customers')->whereBetween('customer_id', [221, 240])->get();

        return view('welcome', ['customers' => $customers]);
    }
}
