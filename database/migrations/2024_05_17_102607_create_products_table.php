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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->unique()->nullable(false);
            $table->float('price')->default(0);
            $table->float('discount')->default(0);
            $table->unsignedBigInteger('category_id')->nullable(true);
            $table->unsignedBigInteger('image_id')->nullable(true);

            $table->unsignedInteger('amount')->default(1);
            $table->boolean('is_available')->default(true);
            $table->boolean('is_new')->default(false);
            $table->text('description')->nullable(true);
            $table->timestamps();


            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreign('image_id')
                ->references('id')->on('images')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
