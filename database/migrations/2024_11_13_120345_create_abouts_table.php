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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('short_content_uz')->nullable();
            $table->text('short_content_ru')->nullable();
            $table->text('short_content_en')->nullable();
            $table->text('about_or_company_uz')->nullable();
            $table->text('about_or_company_ru')->nullable();
            $table->text('about_or_company_en')->nullable();
            $table->text('description_title_uz')->nullable();
            $table->text('description_title_ru')->nullable();
            $table->text('description_title_en')->nullable();
            $table->text('description_uz')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->text('content_title_uz')->nullable();
            $table->text('content_title_ru')->nullable();
            $table->text('content_title_en')->nullable();
            $table->text('content_uz')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('content_en')->nullable();
            $table->string('clinical_trials')->nullable();
            $table->string('insulin')->nullable();
            $table->string('percent')->nullable();
            $table->string('using_product')->nullable();
            $table->string('image')->nullable();
            $table->string('content_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
