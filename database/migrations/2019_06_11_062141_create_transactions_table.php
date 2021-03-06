<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{

    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_transaksi');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('program_id');
            $table->unsignedBigInteger('bank_id');
            $table->string('atas_nama');
            $table->string('nominal');
            $table->string('bukti_tf')->nullable()->default(null);
            $table->enum('status', ['1', '2', '3', '4'])->default('1');
            $table->string('tgl_bayar');
            $table->string('metode_bayar');            
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('bank_id')->references('id')->on('banks');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
