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
        Schema::create('chooses', function (Blueprint $table) {
            $table->id();
            $table->string('title_1');
            $table->string('title_2')->nullable();
            $table->string('title_3')->nullable();
            $table->string('title_4')->nullable();
            $table->string('title_5')->nullable();
            $table->string('title_6')->nullable();
            
            $table->text('img_1')->nullable();
            $table->text('img_2')->nullable();
            
            $table->longText('text_1')->nullable();
            $table->longText('text_2')->nullable();
            $table->longText('text_3')->nullable();
            $table->longText('text_4')->nullable();
            $table->longText('text_5')->nullable();
            $table->longText('text_6')->nullable();
          
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chooses');
    }
};
