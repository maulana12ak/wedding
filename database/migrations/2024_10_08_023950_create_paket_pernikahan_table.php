<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketPernikahanTable extends Migration
{
    public function up()
    {
        Schema::create('paket_pernikahan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->decimal('harga', 10, 2);
            $table->text('deskripsi')->nullable();
            $table->text('fasilitas')->nullable();
            $table->string('foto')->nullable(); // path foto paket
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paket_pernikahan');
    }
}
