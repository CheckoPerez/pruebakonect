<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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
    public function index()
    {
        if (Auth::user()->is_admin) {
            $productos = Product::paginate();
            return view('general.lista', compact('productos'));
        }else{
            $productos = Product::paginate();
            return $productos;
        }
        
    }
}
