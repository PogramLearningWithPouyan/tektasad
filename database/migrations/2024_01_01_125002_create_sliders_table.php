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
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 254)->nullable()->collation('utf8mb4_persian_ci');
            $table->longText('link')->nullable()->collation('utf8mb4_persian_ci');
            $table->tinyInteger('is_show')->nullable();
            $table->tinyInteger('target')->nullable()->default(0);
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
        Schema::dropIfExists('sliders');
    }
};
