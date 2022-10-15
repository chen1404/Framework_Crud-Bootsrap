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
        Schema::create('sahams', function (Blueprint $table) {
            $table->id();
            $table->string('Kode_Saham');
            $table->string('Nama');
            $table->string('Saham');
            $table->string('Papan_Pencatatan');
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
        Schema::dropIfExists('sahams');
    }
};
