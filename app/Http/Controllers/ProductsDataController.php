<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ProductsDataController
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index(Request $request)
    {
        return Product::query()
            ->with('user')
            ->when($request->get('page'), function ($bl, $v) {
                if ($v === 'home') {
                    /** @var Builder $bl */
                    $bl->whereNotIn('id', session()->get('cart', []));
                }
                if ($v === 'cart') {
                    $bl->whereIn('id', session()->get('cart', []));
                }
            })
            ->latest()
            ->paginate();
    }
}
