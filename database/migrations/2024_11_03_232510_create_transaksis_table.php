<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_order'); // Foreign key ke tabel orders
            $table->date('tanggal'); // Tanggal transaksi
            $table->decimal('total', 10, 2); // Total transaksi dalam format desimal
            $table->string('status'); // Status transaksi
            $table->timestamps();

            // Tambahkan foreign key constraint untuk id_order
            $table->foreign('id_order')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
