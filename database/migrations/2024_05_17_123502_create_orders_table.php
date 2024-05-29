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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('address',100);
            $table->string('phoneNumber',25);
            $table->string('email',125);
            $table->float('fees')->default(0);
            $table->unsignedBigInteger('user_id')->nullable(true);
            $table->boolean('is_delivered')->default(false);
            $table->boolean('is_completed')->default(false);
            $table->timestamps();


            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
