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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('title', 255)->collation('utf8mb4_unicode_ci');
            $table->string('slug', 255)->collation('utf8mb4_unicode_ci');
            $table->text('excerpt')->collation('utf8mb4_unicode_ci');
            $table->mediumText('body')->collation('utf8mb4_unicode_ci');
            $table->unsignedBigInteger('created_by');
            $table->tinyInteger('is_show')->default(1);
            $table->bigInteger('file_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->unsignedBigInteger('view_count')->default(0);
            $table->tinyInteger('is_future')->default(0);

            $table->foreign('category_id')
                ->references('id')
                ->on('article_categories')
                ->onDelete('cascade');
            // Add other constraints if necessary
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
