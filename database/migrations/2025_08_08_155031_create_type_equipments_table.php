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
        Schema::create('type_equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('equipment_name');
            $table->text('description');
            $table->date('loan_time');
            $table->decimal('worth');
            $table->string('power_consumption');
            $table->string('technology_category');
            $table->string('code')->unique();
            $table->string('type_status');
            $table->date('creation_date');

            $table->integer('technological_equipment_id')->unsigned();
            $table->foreign('technological_equipment_id')->references('id')->on('technological_equipments')
            ->onDelete('cascade')->onUpdate('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_equipments
        ');
    }
};
