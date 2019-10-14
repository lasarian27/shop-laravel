<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Return 'home' with the products that are not in the cart
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('home');
    }
}
