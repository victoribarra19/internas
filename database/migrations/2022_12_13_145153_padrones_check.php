<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PadronesCheck extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->string('numero_ced');
            $table->string('codigo_sec');
            $table->string('desc_sec');
            $table->string('slocal');
            $table->string('desc_locanr');
            $table->integer('contador');
            $table->integer('id_user')->nullable();
            $table->timestamps();
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
    }
}
