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
        Schema::create('tabelmurids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id');
            $table->string('nama', 255);
            $table->string('alamat', 255);
            $table->date('tgllahir');
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
        Schema::dropIfExists('tabelmurids');
    }
};
