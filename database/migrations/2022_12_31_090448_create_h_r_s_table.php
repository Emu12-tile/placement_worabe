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
        Schema::create('h_r_s', function (Blueprint $table) {
            $table->id();
            $table->integer('performance')->nullable();
            $table->integer('exam')->nullable();
            $table->integer('experience')->nullable();
            $table->text('remark')->nullable();

            $table->float('resultbased')->nullable();
            $table->integer('presidentGrade')->nullable();
            $table->boolean('status_hr')->default(0);
            $table->boolean('status_president')->default(0);
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('form_id')->references('id')->on('forms')->constrained()->cascadeOnDelete()->cascadeOnUpdate();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_r_s');
    }
};
