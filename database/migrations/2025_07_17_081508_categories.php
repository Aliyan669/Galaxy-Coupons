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
            Schema::create('categories', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id()->autoIncrement()->primary();;
            $table->string('cate_name',100);
            $table->text('meta_title');
            $table->text('meta_desc');
            $table->string('cate_logo',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('categories');
    }
};
