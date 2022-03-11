<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use App\Models\Product;

class ApiProductController extends Controller
{
    public function show($id)
    {
        return new ProductResource(Product::findOrFail($id));

    }

    public function index()
    {
        return new ProductCollection(Product::paginate(2));
    }
}
