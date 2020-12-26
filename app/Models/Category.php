<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;


    protected $with=['translations'];

    //responsable du traduction
   protected  $translatedAttributes=['name'];

    protected $fillable=['parent_id', 'slug', 'is_active'];

    protected $hidden=['translations'];//pour cacher la translation

    protected $casts=[
          'is_active' => 'boolean'
    ];


    public function getActive(){
        return $this->is_active == 0 ? 'غير مفعل ' : 'مفعل';
    }
}
