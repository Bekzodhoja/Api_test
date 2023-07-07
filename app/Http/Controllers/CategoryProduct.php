<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryProduct extends Controller
{
    public function index(Category $category)
    {
        return $category->products()->cursorPaginate(20);
    }
}
