<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'patients', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('name');
                $table->string('lastname');
                $table->integer('noSSocial');
                $table->date('dob');
                $table->string('phone');
                $table->string('email');
                $table->string('diseases')->nullable();
                $table->string('allergies')->nullable();
                $table->string('antecedents')->nullable();
                $table->string('comments')->nullable();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};