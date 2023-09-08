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
        Schema::create('discussion_heads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('discussion_head_id')->nullable()->comment('樓主層數');
            $table->text('discussion_head_message')->nullable()->comment('樓主留言');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discussion_heads');
    }
};
