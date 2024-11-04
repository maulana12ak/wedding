<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idpaket'); // Asumsi idpaket adalah foreign key
            $table->date('tgl_order');
            $table->date('tgl_acara');
            $table->date('tgl_selesai');
            $table->string('status');
            $table->decimal('total', 10, 2); // Total dalam format desimal
            $table->timestamps();

            // Tambahkan foreign key constraint jika perlu
            $table->foreign('idpaket')->references('id')->on('pakets')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
