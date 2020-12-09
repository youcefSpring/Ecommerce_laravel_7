<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

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

    public function updateShippings(Request $request , $id)
    {
    //   $settiing =Setting::find($id);
    //   dd($settiing);
    //   $settiing->key = $request->input('key');
    //   $settiing->plain_value=$request->input('name');
    //   $settiing->save();
    //  dump($settiing);
      return  $request;
    }
}
