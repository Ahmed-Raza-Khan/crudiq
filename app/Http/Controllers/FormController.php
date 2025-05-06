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
        // dd($request->all());

        $request->validate([
            'select_campus' => 'required',
            'admission_applying_for' => 'required|string',
            'program_applying_for' => 'required|string',
            'select_shift' => 'required|string',
            'are_you_iu_graduate' => 'required|string',
            'are_you_disabled' => 'required|string',
            're_admission' => 'string',
            'applying_for_program_transfer_migration' => 'required|string',
            'user_profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'nationality' => 'string',
            'province' => 'string',
            'domicile' => 'string',
            'cnic' => 'required|numeric|size:13',
            'date_of_birth' => 'required|date|before:today',
            'gender' => 'required|string',
            'religion' => 'string',
            'blood_group' => 'string',
            'last_institute_attended' => 'string',
            'how_do_you_know_about_us' => 'string',
            'father_name' => 'string',
            'father_status' => 'string',
            'father_cnic' => 'required|numeric|size:13',
            'father_cell' => 'required|numeric|max:15',
            'father_education' => 'string',
            'father_profession' => 'string',
            'mother_name' => 'string',
            'mother_status' => 'required',
            'mother_cnic' => 'required|numeric|size:13',
            'mother_cell' => 'required|numeric|max:15',
            'mother_education' => 'string',
            'mother_profession' => 'string',
            'sibiling_brother' => 'required|numeric',
            'sibiling_sister' => 'required|numeric',
            'email_address' => 'required|email|max:255',
            'phone_no' => 'required|numeric|max:15',
            'mobile_no' => 'required|numeric|max:15',
            'current_country' => 'string',
            'current_city' => 'string',
            'current_address' => 'string',
            'current_area' => 'string',
            'current_zip' => 'required|numeric|max:6',
            'is_same_address' => 'string',
            'permeneant_country' => 'string',
            'permeneant_city' => 'string',
            'permeneant_address' => 'string',
            'permeneant_area' => 'string',
            'permeneant_zip' => 'required|numeric|max:6',
            'degree_level' => 'string',
            'degree' => 'string',
            'specializations' => 'string',
            'select_passing_year' => 'string',
            'select_result_status' => 'string',
            'total_marks' => 'required|numeric',
            'obtained_marks' => 'required|numeric',
            'percentage' => 'required|numeric|min:40|max:100',
            'institute' => 'string',
            'board_roll_no' => 'numeric|max:7',
            'board_name' => 'string',
            'degree_document_file' => 'required|mimes:pdf,doc,docx,xlsx,zip,rar|max:2048',
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
        $input["are_you_iu_graduate"] =  false;
        $input["are_you_disabled"] =  false;
        $input["is_same_address"] =  false;
        $input["re_admission"] =  false;

        $input["applying_for_program_transfer_migration"] =  false;
        Form::create($input);

        return redirect()->route('forms.index')
                        ->with('success','Form Created Successfully...');
    }


    public function show(Form $iqform): View
    {
        return view('forms.show', compact('iqform'));
    }
    
    public function edit($id): View
    {
        $iqform = Form::findOrFail($id);
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
            're_admission' => 'string',
            'applying_for_program_transfer_migration' => 'required|string',
            'user_profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'first_name' => 'required|unique:form,first_name,' . $iqform->id,
            'last_name' => 'unique:form,last_name,' . $iqform->id,
            'nationality' => 'string',
            'province' => 'string',
            'domicile' => 'string',
            'cnic' => 'required|numeric|digits:13|unique:form,cnic' . $iqform->id,
            'date_of_birth' => 'required|date|before:today',
            'gender' => 'required|string',
            'religion' => 'string',
            'blood_group' => 'string',
            'last_institute_attended' => 'string',
            'how_do_you_know_about_us' => 'string',
            'father_name' => 'string',
            'father_status' => 'string',
            'father_cnic' => 'required|numeric|digits:13|unique:form,father_cnic' . $iqform->id,
            'father_cell' => 'required|numeric|unique:form,father_cell' . $iqform->id,
            'father_education' => 'string',
            'father_profession' => 'string',
            'mother_name' => 'string',
            'mother_status' => 'required',
            'mother_cnic' => 'required|numeric|digits:13|unique:form,mother_cnic'. $iqform->id,
            'mother_cell' => 'required|numeric|unique:form,mother_cell' . $iqform->id,
            'mother_education' => 'string',
            'mother_profession' => 'string',
            'sibiling_brother' => 'required|numeric',
            'sibiling_sister' => 'required|numeric',
            'email_address' => 'required|email|unique:form,email_address' . $iqform->id,
            'phone_no' => 'required|numeric|unique:form,phone_no' . $iqform->id,
            'mobile_no' => 'required|numeric|unique:form,mobile_no' . $iqform->id,
            'current_country' => 'string',
            'current_city' => 'string',
            'current_address' => 'string',
            'current_area' => 'string',
            'current_zip' => 'required|numeric',
            'is_same_address' => 'string',
            'permeneant_country' => 'string',
            'permeneant_city' => 'string',
            'permeneant_address' => 'string',
            'permeneant_area' => 'string',
            'permeneant_zip' => 'required|numeric',
            'degree_level' => 'string',
            'degree' => 'string',
            'specializations' => 'string',
            'select_passing_year' => 'string',
            'select_result_status' => 'string',
            'total_marks' => 'required|numeric',
            'obtained_marks' => 'required|numeric',
            'percentage' => 'required|numeric|min:40|max:100',
            'institute' => 'string',
            'board_roll_no' => 'numeric|unique:form,board_roll_no' . $iqform->id,
            'board_name' => 'string',
            'degree_document_file' => 'nullable|mimes:pdf,txt,xlsx,pptp,zip,doc,docx,rar,csv|max:2048',
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
