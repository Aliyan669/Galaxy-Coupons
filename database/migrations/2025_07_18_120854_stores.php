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
            Schema::create('stores', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id()->autoIncrement()->primary();;
            $table->string('store_name',100);
            $table->string('store_url',256);
            $table->string('meta_title',250);
            $table->string('meta_desc',250);
            $table->unsignedBigInteger('cate_id')->unsigned(); 
            $table->foreign('cate_id')->references('id')->on('categories');
            $table->string('store_logo',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('stores');
        
    }
};
