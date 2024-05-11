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
        Schema::create ('user',function (blueprint $table){
            $table->id();
            $table->string ('username');
            $table->string('password');
        });
        Schema::create ('sessions',function(blueprint $table){
            $table->id();
            $table->foreignId('user_id')->nullable()-> index();
            $table->string('ip_addres',45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longtext('payload');
            $table->integer('last,activity')-> index ();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('user');
        Schema::dropIfExist('password_reset_tokens');
        Schema::dropIfExist('sessions');
    }
};
