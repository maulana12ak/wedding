<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('pakets', function (Blueprint $table) {
        $table->id();
        $table->string('nama_paket');
        $table->foreignId('baju_id')->constrained()->onDelete('cascade');
        $table->foreignId('pelaminan_id')->constrained()->onDelete('cascade');
        $table->foreignId('makeup_id')->constrained()->onDelete('cascade');
        $table->decimal('harga', 10, 2);
        $table->timestamps();
    });
}

};
