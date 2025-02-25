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
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->string('medication_code')->nullable();
            $table->unsignedInteger('stock')->nullable();
            $table->foreignId('type_id')->nullable()->constrained('medication_types')->cascadeOnDelete();
            $table->string('name');
            $table->string('dosage')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->date('expiration_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medications');
    }
};
