<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakeupsTable extends Migration
{
    public function up()
{
    Schema::create('makeups', function (Blueprint $table) {
        $table->id();
        $table->string('nama_makeup');
        $table->string('jenis');
        $table->decimal('harga', 10, 2);
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('makeups');
    }
}
