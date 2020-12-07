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
        return view('Dashboard.settings.shippings.edit' , compact('shipping'));
    }

    public function updateShippings(AdminLoginRequest $request , $id)
    {

    }
}
