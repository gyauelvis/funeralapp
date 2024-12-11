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
        Schema::create('contributors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('membership_id')
                ->nullable()
                ->unique();
            $table->string('phone_number');
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['MALE', 'FEMALE'])->nullable();
            $table->enum('clan', ['OYOKO', 'AGONA', 'BRETUO', 'ASOMAKOMA', 'ASONA', 'ABRADE', 'EKUONA', 'ADUANA'])
                ->nullable();
            $table->string('contact_person_name')
                ->nullable();
            $table->string('contact_person_number')
                ->nullable();
            $table->string('hometown')
                ->nullable();
            $table->boolean('is_member');
            $table->string('suburb')
                ->nullable();
            $table->string('denomination')
                ->nullable();
            $table->string('picture_path')
                ->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributors');
    }
};
