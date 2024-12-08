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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount');
            $table->enum('payment_type', ['CONTRIBUTION', 'DONATION']);
            $table->longText('purpose')->nullable();
            $table->string('month');
            $table->integer('year');
            $table->foreignId('contributor_id')->onDelete('cascade');
            $table->foreignId('user_id');
            $table->foreignId('project_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
