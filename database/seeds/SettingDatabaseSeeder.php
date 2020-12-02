<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{
    public function run()
    {
        Setting::setMany([
         'default_locale' => 'ar',
         'default_timezone' => 'Africa/cairo',
         'reviews_enabled' => true,
         'auto_approve_reviews' => true,
         'supported_currencies'=> ['USD','LE','SAR'],
         'default_currency'=> 'USD',
         'store_email'=>'youcef@youcef.com',
         'search_engine'=>'mysql',
         'local_shipping_cost'=>0,
         'outer_shipping_cost'=>0,
         'free_shipping_cost'=>0,
         'transatable' =>[
             'store_name' => 'youcef Store',
             'free_shipping_label' => 'Free Shipping',
             'local_label' => 'Local Shipping ',
             'outer_shipping' => 'Outer Shipping'
         ],


         

        ]);
    }
}
