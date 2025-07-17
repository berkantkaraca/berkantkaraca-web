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
            $table->string('title')->default('Berkant Karaca Kimdir?');
            $table->text('description_tr');
            $table->text('description_en')->nullable();
            $table->string('cv_tr_url')->nullable();
            $table->string('cv_en_url')->nullable();
            $table->string('cover_letter_tr_url')->nullable();
            $table->string('cover_letter_en_url')->nullable();
            $table->boolean('is_active')->default(true);
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
