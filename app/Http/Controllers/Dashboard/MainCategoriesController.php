<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class MainCategoriesController extends Controller
{
    public function index(){
       $categories= Category::where('parent_id', NULL)->paginate(PAGINATION_COUNT);
    //    return $categories;
       return view('Dashboard.categories.index',compact('categories'));
    }


    public function delete($id){

    }

    public function edit($id){
        

        $category=Category::find($id);
        if(! $category)
        {
            return redirect()->route('MainCategoriesList')->with(['error' => 'هذا القسم غير موجود']);
        }
        return view('Dashboard.categories.edit',compact('category'));
    }
}
