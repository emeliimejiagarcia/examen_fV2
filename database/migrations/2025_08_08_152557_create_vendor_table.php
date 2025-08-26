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
        Schema::create('vendor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('point_contact');
            $table->string('phone_number')->unique();
            $table->string('mail')->unique();
            $table->integer('delivered_products');
            $table->string('warranty');
            $table->string('address');
            $table->string('department', 20);
            $table->string('age',3);
            $table->string('identity_card',18)->unique();
            $table->string('authorization_provide');

             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor');
    }
};
