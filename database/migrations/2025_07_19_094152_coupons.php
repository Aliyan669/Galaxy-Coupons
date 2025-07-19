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
            Schema::create('coupons', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id()->autoIncrement()->primary();;
            $table->string('coupon_title',100);
            $table->string('coupon_desc',250);
            $table->string('store_url',256);
            $table->string('coupon_code',100);
            $table->unsignedBigInteger('store_id')->unsigned(); 
            $table->foreign('store_id')->references('id')->on('stores');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('coupons');
    }
};
