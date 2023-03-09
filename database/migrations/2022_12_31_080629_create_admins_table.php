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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('education_level')->nullable();
            $table->string('education_type')->nullable();
            $table->string('position')->nullable(); //አሁን ያሉበት የ ስራ መደብ
            $table->string('position_type')->nullable();
            $table->string('apply_for_position')->nullable();//የስራ መደብ
            $table->string('job_category')->nullable();//የስራ ክፍል
            
            $table->string('level')->nullable();


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
        Schema::dropIfExists('admins');
    }
};
