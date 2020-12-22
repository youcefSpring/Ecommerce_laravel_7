<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class MainCategoriesController extends Controller
{
    public function index(){
        Category::where('parent_id', NULL)->paginate(PAGINATION_COUNT);
    }
}
