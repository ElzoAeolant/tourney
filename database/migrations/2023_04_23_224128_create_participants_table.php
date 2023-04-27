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
            $table->string('url_pepebot')->default("none");
            $table->string('tel')->default("none");
            $table->string('user')->default("none");
            $table->string('AreaPesca')->default("none");
            $table->string('NombreEmbarcacion')->default("none");
            $table->string('fechaPesca')->default("none");
            $table->string('artePesca')->default("none");
            $table->string('pesoEviserado')->default("none");
            $table->string('talla')->default("none");
            $table->boolean('validated')->default(false);
            $table->boolean('showed')->default(false);
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
