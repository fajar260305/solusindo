<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('image');
            $table->string('tempat');
            $table->string('tanggal_lahir');
            $table->string('tempat_tinggal');
            $table->string('kebangsaan');
            $table->string('telp')->unique();
            $table->string('code');
            $table->unsignedBigInteger('autor');
            $table->boolean('status')->default(true);

            $table->foreign('autor')->references('id')->on('users');

            $table->softDeletes();
            $table->rememberToken();


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
        Schema::dropIfExists('pesanans');
    }
};
