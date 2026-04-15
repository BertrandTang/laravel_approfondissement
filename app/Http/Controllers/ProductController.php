<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Product::class);
    }

    public function create()
    {
        Gate::authorize('create', Product::class);
    }

    public function store(Request $request)
    {
        Gate::authorize('create', Product::class);
    }

    public function show(Product $product)
    {
        Gate::authorize('view', $product);
    }

    public function edit(Product $product)
    {
        Gate::authorize('update', $product);
    }

    public function update(Request $request, Product $product)
    {
        Gate::authorize('update', $product);
    }

    public function destroy(Product $product)
    {
        Gate::authorize('delete', $product);
    }
}
