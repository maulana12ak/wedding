<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBajusTable extends Migration
{
    public function up()
    {
        Schema::create('bajus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_baju');
            $table->string('foto')->nullable();
            $table->decimal('harga', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bajus');
    }
}
