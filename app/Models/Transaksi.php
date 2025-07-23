<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    // database/migrations/xxxx_create_transaksis_table.php
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barang_id')->constrained()->onDelete('cascade');
            $table->enum('jenis_transaksi', ['masuk', 'keluar']);
            $table->integer('jumlah');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

}
