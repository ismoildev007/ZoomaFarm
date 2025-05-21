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
        Schema::create('responsibilities', function (Blueprint $table) {
        $table->id();
        $table->string('title_uz');
        $table->string('title_ru')->nullable();
        $table->string('title_en')->nullable();
        $table->text('description_uz')->nullable();
        $table->text('description_ru')->nullable();
        $table->text('description_en')->nullable();
        $table->string('image')->nullable();
        $table->string('attachment')->nullable();

        $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsibilities');
    }
};
