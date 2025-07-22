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
          Schema::create('site_contents', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id()->autoIncrement()->primary();
            $table->string('site_title', 256);
            $table->string('meta_title', 250);
            $table->string('meta_tag', 250);
            $table->string('meta_keyword', 250);
            $table->text('meta_desc');
            $table->text('site_about');
            $table->string('site_logo', 250);
            $table->string('footer_logo', 250);
            $table->string('favicon_logo', 250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_contents');
    }
};
