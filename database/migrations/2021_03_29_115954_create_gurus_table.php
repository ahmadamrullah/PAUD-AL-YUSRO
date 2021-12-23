<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip');
            $table->string('nama');
            $table->string('alamat');
            $table->string('jk');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->string('email');
            $table->string('nohp')->nullable();
            $table->string('jabatan');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('gurus');
    }
}
