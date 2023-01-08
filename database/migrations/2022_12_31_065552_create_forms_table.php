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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('email');
            $table->string('phone');
            $table->string('file');
            // $table->foreignId('admin_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->DATE('startingDate')->nullable();
            $table->DATE('endingDate')->nullable();

            // $table->string('evaluated_by_hr')->default(0);
            // $table->string('evaluated_by_president')->default(0);

            $table->foreignId('admin_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            // $table->foreignId('educationType_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();


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
        Schema::dropIfExists('forms');
    }
};
