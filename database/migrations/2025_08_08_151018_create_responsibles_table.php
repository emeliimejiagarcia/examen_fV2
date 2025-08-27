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
        Schema::create('responsibles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('age',3);
            $table->string('mail')->unique();
            $table->string('identity_card')->unique();
            $table->string('phone_number')->unique();
            $table->string('departament');
            $table->string('gender');
            $table->string('nationality');
            $table->string('address');
            $table->string('academic_role');
            $table->string('registration_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsibles');
    }
};
