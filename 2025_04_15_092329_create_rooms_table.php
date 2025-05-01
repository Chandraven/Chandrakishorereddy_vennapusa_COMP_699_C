<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number');
            $table->string('room_type');
            $table->integer('floor_number');
            $table->integer('capacity');
            $table->string('bed_type');
            $table->decimal('price_per_night', 8, 2);
            $table->decimal('discount', 5, 2)->nullable();
            $table->boolean('is_available');
            $table->string('status');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('features')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
