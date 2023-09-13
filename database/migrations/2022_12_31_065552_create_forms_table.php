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
            $table->string('firstName')->nullable();
            $table->string('middleName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('ethinicity')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('jobcat')->nullable();


            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('sex')->nullable();
            $table->string('fee')->nullable();
            $table->string('UniversityHiringEra')->nullable();
            $table->string('positionofnow')->nullable();

            $table->string('servicPeriodAtUniversity')->nullable();
            $table->string('servicPeriodAtAnotherPlace')->nullable();
            $table->string('serviceBeforeDiplo')->nullable();
            $table->string('serviceAfterDiplo')->nullable();
            $table->decimal('resultOfrecentPerform')->nullable();
            $table->string('DisciplineFlaw')->nullable();
            $table->string('MoreRoles')->nullable();
            $table->string('hrs')->nullable();
            $table->string('secondhrs')->nullable();

            $table->boolean('isEditable')->default(false);
            $table->string('tag_slug')->unique();
            $table->string('firstdergee')->nullable();
            // $table->softDeletes();

            $table->foreignId('jobcat2_id')->nullable()->references('id')->on('jobcat2s')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('choice2_id')->nullable()->references('id')->on('choice2s')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('h_r_id')->nullable()->references('id')->on('h_r_s')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('secondhr_id')->nullable()->references('id')->on('secondhrs')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('position_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('education_type_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('job_category_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('level_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('edu_level_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
