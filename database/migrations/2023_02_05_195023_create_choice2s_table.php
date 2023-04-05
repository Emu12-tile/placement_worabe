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
            $table->string('position');
            $table->string('experience');
            $table->string('edu_level')->nullable();
            $table->longText('education_type')->nullable();
            $table->string('level')->nullable();
            $table->foreignId('category_id')->nullable()->references('id')->on('categories')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            // $table->foreignId('level_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            // $table->foreignId('edu_level_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('jobcat2_id')->nullable();
            // $table->foreignId('jobcat2_id')->nullable()->references('id')->on('jobcat2s')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('position_type_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();


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
