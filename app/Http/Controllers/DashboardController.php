<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Product;
use App\Models\Quotation;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSupplier = Supplier::count();
        $totalBuyer = Buyer::count();
        $totalProduct = Product::count();
        $totalQuotation = Quotation::count();

        return view('dashboard', compact('totalSupplier', 'totalBuyer', 'totalProduct', 'totalQuotation'));
    }
}
