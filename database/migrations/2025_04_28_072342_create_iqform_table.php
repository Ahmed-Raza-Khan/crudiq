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
        Schema::create('Form', function (Blueprint $table) {
            $table->id();
            $table->string('select_campus');
            $table->string('admission_applying_for');
            $table->string('program_applying_for');
            $table->string('select_shift');
            $table->boolean('are_you_iu_graduate')->default(false);
            $table->boolean('are_you_disabled')->default(false);
            $table->boolean('re_admission')->default(false);
            $table->boolean('applying_for_program_transfer_migration')->default(false);
            $table->string('user_profile_pic');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nationality');
            $table->string('province');
            $table->string('domicile');
            $table->integer('cnic')->unique();
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('religion');
            $table->string('blood_group');
            $table->string('last_institute_attended');
            $table->string('how_do_you_know_about_us');
            $table->string('father_name');
            $table->string('father_status');
            $table->integer('father_cnic')->unique();
            $table->integer('father_cell')->unique();
            $table->string('father_education');
            $table->string('father_profession');
            $table->string('mother_name');
            $table->string('mother_status');
            $table->integer('mother_cnic')->unique();
            $table->integer('mother_cell')->unique();
            $table->string('mother_education');
            $table->string('mother_profession');
            $table->string('sibiling_brother')->default(0);
            $table->string('sibiling_sister')->default(0);
            $table->string('email_address')->unique();
            $table->integer('phone_no')->unique();
            $table->integer('mobile_no')->unique();
            $table->string('current_country');
            $table->string('current_city');
            $table->string('current_address');
            $table->string('current_area');
            $table->integer('current_zip');
            $table->boolean('is_ame_address')->default(false);
            $table->string('permeneant_country');
            $table->string('permeneant_city');
            $table->string('permeneant_address');
            $table->string('permeneant_area');
            $table->integer('permeneant_zip');
            $table->string('degree_level');
            $table->string('degree');
            $table->string('specializations');
            $table->string('select_passing_year');
            $table->string('select_result_status');
            $table->integer('total_marks');
            $table->integer('obtained_marks');
            $table->float('percentage', 5, 2);
            $table->string('institute');
            $table->integer('board_roll_no',)->unique();
            $table->string('board_name');
            $table->string('degree_document_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Form');
    }
};
