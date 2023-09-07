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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //格式: 字串，欄位名稱: img_path  可以存在null的值 default('')初始值就是空值
            $table->string('img_path')->nullable()->default('')->comment('圖片路徑');
            //格式: 字串，欄位名稱: title
            $table->string('title')->nullable()->default('')->comment('標題');
            //格式: 字串，欄位名稱: content
            $table->string('content')->nullable()->default('')->comment('內容');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
