<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Yorumcu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('yorumcus');
        Schema::create('yorumcus',function (Blueprint $table)
        {
            $table->id();
            $table->string('unick')->unique();
            $table->string('uemail')->unique();
            $table->string('upass');
            $table->char('usex');
            $table->char('urole');
            $table->string('vukuatlari');
            $table->time('updated_at');
            $table->time('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('yorumcus');
    }
}
