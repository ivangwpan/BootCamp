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
        Schema::create('order_lists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('order_list_id')->comment('訂單ID');
            $table->bigInteger('order_number')->comment('訂單編號');
            $table->text('shipping_address')->comment('運送地址');
            $table->integer('contact_number')->comment('聯絡電話');
            $table->integer('order_status')->default(1)->comment('1:已建立/2:已付款/3:運送中/4:已抵達/5:完成/6:已取消');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_lists');
    }
};
