<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComprobantePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobante_pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('cantidad')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('documento_id')->unsigned();
            $table->foreign('documento_id')->references('id')->on('documento')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comprobante_pagos');
    }
}