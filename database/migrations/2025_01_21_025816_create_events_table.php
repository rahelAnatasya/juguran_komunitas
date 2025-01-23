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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->date('from_date');
            $table->date('to_date')->nullable();
            $table->string('name_location');
            $table->text('link_location');
            $table->text('description');
            $table->string('coupon_code')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('type', ['online', 'offline'])->default('offline');
            $table->enum('mode', ['paid', 'free'])->default('free');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
