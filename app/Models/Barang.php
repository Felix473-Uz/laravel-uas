<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_barang_id')->constrained()->onDelete('cascade');
            $table->string('nama_barang');
            $table->integer('stok')->default(0);
            $table->timestamps();
        });
    }
}
