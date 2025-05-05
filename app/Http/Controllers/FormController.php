<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function index(): View
    {
        $iqforms = Form::paginate(5);
        return view('forms.index', compact('iqforms'));
    }

    public function create(): View
    {
        return view('forms.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'select_campus' => 'required|string',
            'admission_applying_for' => 'required|string',
            'program_applying_for' => 'required|string',
            'select_shift' => 'required|string',
            'are_you_iu_graduate' => 'required|boolean',
            'are_you_disabled' => 'required|boolean',
            're_admission' => 'required|boolean',
            'applying_for_program_transfer_migration' => 'required|boolean',
            'user_profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'nationality' => 'required|string',
            'province' => 'required|string',
            'domicile' => 'required|string',
            'cnic' => 'required|string|size:13',
            'date_of_birth' => 'required|date|before:today',
            'gender' => 'required|string|in:male,female',
            'religion' => 'required|string',
            'blood_group' => 'required|string',
            'last_institute_attended' => 'required|string',
            'how_do_you_know_about_us' => 'required|string',
            'father_name' => 'required|string',
            'father_status' => 'required|string',
            'father_cnic' => 'required|string|size:13',
            'father_cell' => 'required|string|max:15',
            'father_education' => 'required|string',
            'father_profession' => 'required|string',
            'mother_name' => 'required|string',
            'mother_status' => 'required|string',
            'mother_cnic' => 'required|string|size:13',
            'mother_cell' => 'required|string|max:15',
            'mother_education' => 'required|string',
            'mother_profession' => 'required|string',
            'sibiling_brother' => 'required|integer|min:0',
            'sibiling_sister' => 'required|integer|min:0',
            'email_address' => 'required|email|max:255',
            'phone_no' => 'required|string|max:15',
            'mobile_no' => 'required|string|max:15',
            'current_country' => 'required|string',
            'current_city' => 'required|string',
            'current_address' => 'required|string',
            'current_area' => 'required|string',
            'current_zip' => 'required|string|max:5',
            'is_ame_address' => 'required|boolean',
            'permeneant_country' => 'required|string',
            'permeneant_city' => 'required|string',
            'permeneant_address' => 'required|string',
            'permeneant_area' => 'required|string',
            'permeneant_zip' => 'required|string|max:5',
            'degree_level' => 'required|string',
            'degree' => 'required|string',
            'specializations' => 'required|string',
            'select_passing_year' => 'required|string',
            'select_result_status' => 'required|string',
            'total_marks' => 'required|integer|min:0',
            'obtained_marks' => 'required|integer|min:0',
            'percentage' => 'required|numeric|min:0|max:100',
            'institute' => 'required|string',
            'board_roll_no' => 'required|string|max:7',
            'board_name' => 'required|string',
            'degree_document_file' => 'nullable|mimes:pdf,doc,docx,xlsx,zip,rar|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('user_profile_pic')) {
            $image = $request->file('user_profile_pic');
            $filePath = $image->store('uploads/profile_pics', 'public');
            $input['user_profile_pic'] = $filePath;
        }

        if ($request->hasFile('degree_document_file')) {
            $file = $request->file('degree_document_file');
            $filePath = $file->store('uploads/degree_documents', 'public');
            $input['degree_document_file'] = $filePath;
        }

        Form::create($input);

        return redirect()->route('forms.index')
                        ->with('success','Form Created Successfully...');
    }


    public function show(Form $iqform): View
    {
        return view('forms.show', compact('iqform'));
    }
    
    public function edit(Form $iqform): View
    {
        return view('forms.edit', compact('iqform'));
    }

    public function update(Request $request, Form $iqform): RedirectResponse
    {
        $request->validate([
            'select_campus' => 'required',
            'admission_applying_for' => 'required|string',
            'program_applying_for' => 'required|string',
            'select_shift' => 'required|string',
            'are_you_iu_graduate' => 'required|string',
            'are_you_disabled' => 'required|string',
            're_admission' => 'required|string',
            'applying_for_program_transfer_migration' => 'required|string',
            'user_profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'first_name' => 'required|unique:iqforms,first_name,' . $iqform->id,
            'last_name' => 'required|unique:iqforms,last_name,' . $iqform->id,
            'nationality' => 'required',
            'province' => 'required',
            'domicile' => 'required',
            'cnic' => 'required|numeric|digits:13|unique:iqforms,cnic' . $iqform->id,
            'date_of_birth' => 'required|date|before:today',
            'gender' => 'required|string|in:male,female',
            'religion' => 'required|string',
            'blood_group' => 'required|string',
            'last_institute_attended' => 'required|string',
            'how_do_you_know_about_us' => 'required|string',
            'father_name' => 'required',
            'father_status' => 'required',
            'father_cnic' => 'required|numeric|digits:13|unique:iqforms,father_cnic',
            'father_cell' => 'required|numeric|unique:iqforms,father_cell',
            'father_education' => 'required|string',
            'father_profession' => 'required|string',
            'mother_name' => 'required',
            'mother_status' => 'required',
            'mother_cnic' => 'required|numeric|digits:13|unique:iqforms,mother_cnic',
            'mother_cell' => 'required|numeric|unique:iqforms,mother_cell',
            'mother_education' => 'required|string',
            'mother_profession' => 'required|string',
            'sibiling_brother' => 'required|numeric',
            'sibiling_sister' => 'required|numeric',
            'email_address' => 'required|email|unique:iqforms,email_address' . $iqform->id,
            'phone_no' => 'required|numeric|unique:iqforms,phone_no',
            'mobile_no' => 'required|numeric|unique:iqforms,mobile_no',
            'current_country' => 'required|string',
            'current_city' => 'required|string',
            'current_address' => 'required|string',
            'current_area' => 'required|string',
            'current_zip' => 'required|numeric',
            'is_ame_address' => 'required|string',
            'permeneant_country' => 'required|string',
            'permeneant_city' => 'required|string',
            'permeneant_address' => 'required|string',
            'permeneant_area' => 'required|string',
            'permeneant_zip' => 'required|numeric',
            'degree_level' => 'required|string',
            'degree' => 'required|string',
            'specializations' => 'required|string',
            'select_passing_year' => 'required|string',
            'select_result_status' => 'required|string',
            'total_marks' => 'required|numeric',
            'obtained_marks' => 'required|numeric',
            'percentage' => 'required|numeric|min:0|max:100',
            'institute' => 'required|string',
            'board_roll_no' => 'required|numeric|unique:iqforms,board_roll_no',
            'board_name' => 'required|string',
            'degree_document_file' => 'required|mimes:pdf,txt,xlsx,pptp,zip,doc,docx,rar,csv|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('user_profile_pic')) {
            if ($iqform->user_profile_pic && Storage::exists($iqform->user_profile_pic)) {
                Storage::delete($iqform->user_profile_pic);
            }
            $image = $request->file('user_profile_pic');
            $filePath = $image->store('uploads/profile_pics', 'public');
            $input['user_profile_pic'] = $filePath;
        }

        if ($request->hasFile('degree_document_file')) {
            if ($iqform->degree_document_file && Storage::exists($iqform->degree_document_file)) {
                Storage::delete($iqform->degree_document_file);
            }
            $file = $request->file('degree_document_file');
            $filePath = $file->store('uploads/degree_documents', 'public');
            $input['degree_document_file'] = $filePath;
        }

        $iqform->update($input);

        return redirect()->route('forms.index')
                        ->with('success', 'Form Updated Successfully...');
    }

    public function destroy(Form $iqform): RedirectResponse
    {
        if ($iqform->user_profile_pic && Storage::exists($iqform->user_profile_pic)) {
            Storage::delete($iqform->user_profile_pic);
        }
        if ($iqform->degree_document_file && Storage::exists($iqform->degree_document_file)) {
            Storage::delete($iqform->degree_document_file);
        }
        $iqform->delete();

        return redirect()->route('forms.index')
                        ->with('success','Form Deleted Successfully...');
    }
}
