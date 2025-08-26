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
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->date('departure_date');
            $table->date('expected_date');
            $table->date('delivery_date');
            $table->string('delivery_observation');
            $table->string('return_observation');
            $table->date('loan_date');
            $table->string('loan_duration');
            $table->string('username');
            $table->string('user_type');
            $table->string('area');
            $table->string('academic_role');
            $table->string('contact_phone')->unique();
            $table->string('user_address');
            $table->string('equipment_name');
            $table->string('equipment_type');
            $table->string('brand');
            $table->string('model');
            $table->string('condition_loan');


            $table->integer('responsible_id')->unsigned();
            $table->foreign('responsible_id')->references('id')->on('responsible')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('technological_equipment_id')->unsigned();
            $table->foreign('technological_equipment_id')->references('id')->on('technological_equipment')
            ->onDelete('cascade')->onUpdate('cascade');





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
