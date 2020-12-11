<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\ShippingRequest;
use App\Models\Setting;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    public function editShippings($type)
    {
        if($type === 'free')
        {
            $shipping=Setting::where('key', 'free_shipping_label')->first();
            // return $shipping;
        }
        elseif($type === 'inner')
        {
            $shipping=Setting::where('key', 'local_label')->first();
        }
        elseif($type === 'outer')
        {
            $shipping=Setting::where('key', 'outer_label')->first();
        }
        else
        {
            $shipping=Setting::where('key', 'free_shipping_label')->first();
        }
        // dump($shipping->plain_value);
        return view('Dashboard.settings.shippings.edit' , compact('shipping'));
    }

    public function updateShippings(ShippingRequest $request , $id)
    {
        try{
            $setting =Setting::find($id);
   
            DB::beginTransaction();
            //update db
          $setting->update([
              'plain_value' => $request->plain_value,
               ]);
      
          //save translation
          $setting->value =$request->value;
          $setting->save();
          DB::commit();
            return  redirect()->back()->with(['success' => ' تم التعديل بنجاح']);
        }
        catch(ModelNotFoundException $e){
            return  redirect()->back()->with(['error' => ' خطا ما عند التعديل يرجي المحاولة مرو اخرى']);
            DB::rollback();
        }
     
    }
}
