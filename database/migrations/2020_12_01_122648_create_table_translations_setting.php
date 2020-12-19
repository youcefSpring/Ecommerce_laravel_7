<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTranslationsSetting extends Migration
{
    public function up()
    {
        Schema::create('setting_translations', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
           $table->bigInteger('setting_id')->unsigned();
           $table->string('locale');
           $table->longText('value')->nullable();

           $table->unique(['setting_id','locale']);
           $table->foreign('setting_id')->references('id')->on('settings')->onDelete('cascade');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('setting_translations');
    }
}
