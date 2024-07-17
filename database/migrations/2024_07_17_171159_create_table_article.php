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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('lead');
            $table->text('content');
            $table->string('thumbnail')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            //Foreign key constraints
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');  
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};