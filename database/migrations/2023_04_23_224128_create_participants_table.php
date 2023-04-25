<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('folio');
            $table->string('url');
            $table->string('telefono');
            $table->string('user_whatsapp');
            $table->string('nombre_embarcacion');
            $table->integer('peso_eviscerado')->unsigned()->default(0);
            $table->integer('zona_pesca')->unsigned()->default(0);
            $table->integer('talla')->unsigned()->default(0);
            $table->string('arte_pesca');
            $table->date('fecha_pesca');
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
        Schema::dropIfExists('participants');
    }
};
