<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisBarang extends Model
{
    //
    public function up()
    {
        Schema::create('jenis_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jenis');
            $table->timestamps();
        });
    }
}
