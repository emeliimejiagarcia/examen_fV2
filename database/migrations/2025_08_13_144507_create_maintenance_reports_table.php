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
        Schema::create('maintenance_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->date('report_date');
            $table->text('description');
            $table->string('action');
            $table->string('equipment_condition');
            $table->string('equipment_name');
            $table->date('maintenance_date');
            $table->string('maintenance_type');
            $table->string('technician_name');
            $table->decimal('maintenance_cost');
            $table->string('report_status');

            $table->integer('responsible_id')->unsigned();
            $table->foreign('responsible_id')->references('id')->on('responsibles')
            ->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('maintenance_reports');
    }
};
