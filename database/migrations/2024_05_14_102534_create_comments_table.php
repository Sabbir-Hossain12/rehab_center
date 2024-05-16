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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id');
            $table->string('user_name')->nullable();
            $table->string('user_email')->nullable();
            $table->string('message');
            $table->date('comment_date');
            $table->time('comment_time');
            $table->integer('status')->default(1)->comment('1=active, 2=inactive');
            $table->timestamps();

            $table->foreign('blog_id')->references('id')->on('blogs')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
