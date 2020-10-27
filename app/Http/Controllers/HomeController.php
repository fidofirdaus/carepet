<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->user()->hasRole('admin')) {
            return redirect('admin');
        }

        if ($request->user()->hasRole('petshop')) {
            return redirect('petshop');
        }

        if ($request->user()->hasRole('petowner')) {
            return redirect('petowner');
        }
    }
}
