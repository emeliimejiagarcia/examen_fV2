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
        Schema::create('registration', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('current_condition');
            $table->date('last_update');
            $table->datetime('date_time');
            $table->date('loan_date');
            $table->date('return_date');
            $table->string('loan_duration');
            $table->string('user_type');
            $table->string('equipment_name');
            $table->string('equipment_number');
            $table->string('serial_number');
            $table->string('condition_loan');

            $table->integer('vendor_id')->unsigned();
            $table->foreign('vendor_id')->references('id')->on('vendor')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('loans_id')->unsigned();
            $table->foreign('loans_id')->references('id')->on('loans')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('technological_equipment_id')->unsigned();
            $table->foreign('technological_equipment_id')->references('id')->on('technological_equipment')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('type_equipment_id')->unsigned();
            $table->foreign('type_equipment_id')->references('id')->on('type_equipment')
            ->onDelete('cascade')->onUpdate('cascade');


             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration');
    }
};
