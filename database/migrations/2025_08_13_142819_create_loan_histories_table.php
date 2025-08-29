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
        Schema::create('loan_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('equipment_name');
            $table->string('type_equipment');
            $table->date('loan_date');
            $table->string('input_status');
            $table->string('exit_status');
            $table->string('condition');
            $table->string('loan_code')->unique();
            $table->string('description');

             $table->integer('loan_id')->unsigned();
            $table->foreign('loan_id')->references('id')->on('loans')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_histories');
    }
};
