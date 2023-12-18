<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductsController extends Controller
{
    public function index()
    {

        return view('backend.products.index');
    }
    public function add()
    {
        return view('backend.products.add');
    }
    public function edit()
    {
        return view('backend.products.edit');
    }
    public function update()
    {
        return Redirect::back();
    }
}
