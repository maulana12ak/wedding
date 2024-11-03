<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelaminansTable extends Migration
{
    public function up()
    {
        Schema::create('pelaminans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelaminan');
            $table->string('foto')->nullable();
            $table->decimal('harga', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelaminans');
    }
}
