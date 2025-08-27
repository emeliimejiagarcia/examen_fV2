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
        Schema::create('technological_equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mark');
            $table->string('equipment_name');
            $table->string('serial_number')->unique();
            $table->string('condition');
            $table->string('location');
            $table->date('entry_date');
            $table->string('brand');
            $table->date('acquisition_date');
            $table->string('availability');
            $table->string('inventory_code')->unique();
            $table->string('technology_category');

            $table->integer('vendor_id')->unsigned();
            $table->foreign('vendor_id')->references('id')->on('vendors')
            ->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technological_equipments');
    }
};
