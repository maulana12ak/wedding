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
            $table->decimal('harga_sewa', 10, 2);
            $table->text('deskripsi')->nullable();
            $table->string('foto')->nullable(); // path foto pelaminan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelaminans');
    }
}
