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
        Schema::create('employee_service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('service_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_service');
    }
};
