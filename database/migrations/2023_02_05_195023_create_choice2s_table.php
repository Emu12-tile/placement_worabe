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
        Schema::create('choice2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_category_id')->references('id')->on('job_categories')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('position_id')->references('id')->on('positions')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('choice2s');
    }
};
