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
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table -> insugnedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table ->string('name');
            $table ->string('description');
            $table ->text('link');
            $table ->boolean('hasFeePlan') ->default(false);
            $table->decimal('price', 5,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tools');
    }
};
