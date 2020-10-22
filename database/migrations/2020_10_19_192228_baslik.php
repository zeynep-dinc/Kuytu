<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Baslik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('basliks');
        Schema::create('basliks',function (Blueprint $table){
            $table->id();
            $table->string('bname');
            $table->smallInteger('uid');
            $table->string('btur');
            $table->string('bhakkinda');
            $table->time('updated_at');
            $table->time('created_at');
        });
     
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('basliks');
    }
}
