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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',60);
            $table->string('last_name',60);
            $table->unsignedBigInteger('image_id')->nullable(true);
            $table->string('username',60)->unique()->nullable(false);
            $table->string('email',125)->unique()->nullable(false);
            $table->string('password',125);
            $table->timestamps();

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
        Schema::dropIfExists('users');
    }
};
