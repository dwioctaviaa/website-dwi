<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create ('dokter',function (blueprint $table){
            $table->id();
            $table->string ('Nama Dokter');
            $table->string('Jabatan');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        chema::dropIfExist('dokter');
    }
};
