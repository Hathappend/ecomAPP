<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class VendorController extends Controller
{
    public function vendorDashboard(): View
    {
        return \view('vendor.dashboard');
    }
}
