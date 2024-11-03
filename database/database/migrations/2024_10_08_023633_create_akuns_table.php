<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunsTable extends Migration
{
    public function up()
    {
        Schema::create('akuns', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('user'); // 'admin' atau 'user'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('akuns');
    }
}
