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
        Schema::create('article_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->collation('utf8mb4_unicode_ci');
            $table->string('slug', 255)->unique()->collation('utf8mb4_unicode_ci');
            $table->tinyInteger('is_show')->default(1);
            $table->integer('sort')->default(0);
            $table->text('description')->nullable()->collation('utf8mb4_unicode_ci');
            $table->bigInteger('file_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_categories');
    }
};
