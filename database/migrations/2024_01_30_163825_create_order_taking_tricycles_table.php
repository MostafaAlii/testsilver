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
        Schema::create('order_taking_tricycles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_tricycle_id')->constrained('order_tricycles')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('lat_caption')->nullable();
            $table->string('long_caption')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_taking_tricycles');
    }
};
