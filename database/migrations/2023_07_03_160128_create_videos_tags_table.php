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
        Schema::create('videos_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('v_id');
            $table->string('tags');            
            $table->timestamps();
            $table->foreign('v_id')->references('id')->on('videos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos_tags');
    }
};
