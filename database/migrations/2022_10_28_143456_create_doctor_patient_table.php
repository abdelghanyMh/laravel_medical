<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_patient', function (Blueprint $table) {
            $table->timestamps();

            $table->foreignId('patient_id')
            ->constrained()
            ->onDelete('cascade');
            
            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctor_patient', function (Blueprint $table) {
            $table->dropForeign(['patient_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn('patient_id');
            $table->dropColumn('user_id');
        });
        
        Schema::dropIfExists('doctor_patient');

    }
};
