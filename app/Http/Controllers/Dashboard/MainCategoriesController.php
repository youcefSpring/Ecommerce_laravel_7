<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategroyRequest;
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\DB;
class MainCategoriesController extends Controller
{
    public function index(){
       $categories= Category::where('parent_id', NULL)->orderBy('id','DESC')->paginate(PAGINATION_COUNT);
    //    return $categories;
       return view('Dashboard.categories.index',compact('categories'));
    }


    public function delete($id){
          
        $category=Category::find($id);
        if(! $category)
        {
            return redirect()->route('MainCategoriesList')->with(['error' => 'هذا القسم غير موجود']);
        }
        
        $category->delete();
        return redirect()->route('MainCategoriesList')->with(['success' => '  تم الحذف بنجاح ']);

    }

    

    public function edit($id){
        

        $category=Category::find($id);
        if(! $category)
        {
            return redirect()->route('MainCategoriesList')->with(['error' => 'هذا القسم غير موجود']);
        }
        return view('Dashboard.categories.edit',compact('category'));
    }

    public function update (MainCategroyRequest $request , $id)
    {
        

      
       try{
        if(! $request->has('is_active')){
            $request->request->add(['is_active'=> '0']);
        }
        else{
            $request->request->add(['is_active'=> '1']);
        }

        $category = Category::find($id);

        if( ! $category)
        {
            return redirect()->route('MainCategoriesList')->with(['error'=> 'حدث خطا ما ']);
        }
     $category->name= $request->input('name');
     $category->slug=$request->input('slug');
     $category->is_active=$request->input('is_active');
     $category->save();
     
     return redirect()->route('MainCategoriesList')->with(['success'=> ' تم التحديث بنجاح ']);
       }
       catch(\Exception $ex){
        return redirect()->route('MainCategoriesList')->with(['error'=> 'حدث خطا ما ']); 
       }

    }


    public function create()
    {
        return view('Dashboard.categories.create'); 
    }

    public function store(MainCategroyRequest $request){
       
   
      
        if(! $request->has('photo')){
            return redirect()->back()->with(['error'=> '  الصورة اجبارية ']);  
        }

        

        try{

           DB::beginTransaction();

           if(! $request->has('is_active')){
            $request->request->add(['is_active'=> '0']);
        }
        else{
            $request->request->add(['is_active'=> '1']);
        }

        
        $image = time().'.'.$request->photo->extension();  
   
        $request->photo->move(public_path('images'), $image);
        $request->request->add(['image'=> $image]);

        
       
        
        //    $category=\App\Models\Category::create($request->except(['_token','parent_id']));
        $category=new \App\Models\Category();
        
        $category->name="Youcef";
        $category->slug=$request->slug;
        $category->image= $request->image;
        $category->is_active =$request->is_active;
        $category->parent_id=NULL;
    
           $category->save();
         dd($category);
           return redirect()->route('MainCategoriesList')->with(['success'=> '  تمت الاضافة بنجاح ']);  
           DB::commit();

        }

        catch(Exception $e){
            DB::rollback();
            return redirect()->route('MainCategoriesCreate')->with(['error'=> 'حدث خطا ما ']);
        }
    }
}
