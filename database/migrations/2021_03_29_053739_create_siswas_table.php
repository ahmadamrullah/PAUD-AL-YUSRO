<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nisn', 100);
            $table->string('nama', 100);
            $table->string('jk');
            $table->text('alamat');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir', 100);
            $table->string('kelas', 100);
            $table->string('nama_ayah', 100)->nullable();
            $table->string('nama_ibu', 100)->nullable();
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
        Schema::dropIfExists('siswas');
    }
}
