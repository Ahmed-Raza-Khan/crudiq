<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
    'select_campus',
    'admission_applying_for',
    'program_applying_for',
    'select_shift',
    'are_you_iu_graduate',
    'are_you_disabled',
    're_admission',
    'applying_for_program_transfer_migration',
    'user_profile_pic',
    'first_name',
    'last_name',
    'nationality',
    'province',
    'domicile',
    'cnic',
    'date_of_birth',
    'gender',
    'religion',
    'blood_group',
    'last_institute_attended',
    'how_do_you_know_about_us',
    'father_name',
    'father_status',
    'father_cnic',
    'father_cell',
    'father_education',
    'father_profession',
    'father_profession',
    'mother_name',
    'mother_status',
    'mother_cnic',
    'mother_cell',
    'mother_education',
    'mother_profession',
    'sibiling_brother',
    'sibiling_sister',
    'email_address',
    'phone_no',
    'mobile_no',
    'current_country',
    'current_city',
    'current_address',
    'current_area',
    'current_zip',
    'is_ame_address',
    'permeneant_country',
    'permeneant_city',
    'permeneant_address',
    'permeneant_area',
    'permeneant_zip',
    'degree_level',
    'degree',
    'specializations',
    'select_passing_year',
    'select_result_status',
    'total_marks',
    'obtained_marks',
    'percentage',
    'institute',
    'board_roll_no',
    'board_name',
    'degree_document_file'
    ];	
}
