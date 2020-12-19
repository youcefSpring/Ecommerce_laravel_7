<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditProfileAdmin;
use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function editProfile (){
    $user=Auth::user();
    return view('Dashboard.settings.profile.editProfile', compact('user'));
    }

    public function updateProfile(EditProfileAdmin $request){

        // $id= Auth::user()->id;
        // return $id;
        try{
       $admin=Admin::find(Auth::user()->id);

       

    //    if($request->password != $request->repassword){
    //     return redirect()->back()->with(['error'=>'   كلمة السر غير متطابقة  ']); 
    //    }
       
    $admin->update($request->only(['name','email']));
  
    return redirect()->back()->with(['success'=>'تم لتحديث بنجاح']);

        }
        catch(Exception $e){
            return redirect()->back()->with(['error'=>'  حدث خظا ما ']);
        }

    }
}
