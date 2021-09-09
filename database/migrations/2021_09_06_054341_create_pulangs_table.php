<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePulangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pulangs', function (Blueprint $table) {
            $table->id();
            
            $table->string('alamat_semasa')->nullable();
            $table->string('poskod_semasa')->nullable();
            $table->string('daerah_semasa')->nullable();
            $table->string('negeri_semasa')->nullable();
            
            $table->string('nama_ipt')->nullable();
            $table->string('alamat_destinasi')->nullable();
            $table->string('poskod_destinasi')->nullable();
            $table->string('daerah_destinasi')->nullable();
            $table->string('negeri_destinasi')->nullable();

            $table->string('alamat_kediaman')->nullable();
            $table->string('poskod_kediaman')->nullable();
            $table->string('daerah_kediaman')->nullable();
            $table->string('negeri_kediaman')->nullable();

            $table->date('tarikh_tolak')->nullable();
            $table->date('tarikh_sampai')->nullable();
            $table->string('status')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('pulangs');
    }
}
