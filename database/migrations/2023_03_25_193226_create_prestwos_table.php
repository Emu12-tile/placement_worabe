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
        Schema::create('prestwos', function (Blueprint $table) {
            $table->id();
            $table->integer('presidentGrade');
            $table->string('status')->nullable();
            $table->text('remark')->nullable();
            $table->foreignId('secondhr_id')->nullable()->references('id')->on('secondhrs')->constrained()->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('prestwos');
    }
};
