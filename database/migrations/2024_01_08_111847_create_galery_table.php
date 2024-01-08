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
        Schema::create('galery', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('is_show')->unsigned()->nullable();
            $table->string('seo', 50)->nullable()->collation('utf8mb4_general_ci');
            $table->unsignedBigInteger('file_id')->nullable();
            $table->timestamps();

            $table->foreign('file_id')->references('id')->on('files')->onDelete('set null');
            // Replace 'files' with the actual files table name
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galery');
    }
};
