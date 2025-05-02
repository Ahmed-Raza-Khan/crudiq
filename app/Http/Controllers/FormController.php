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
        $iqforms = Form::all();
        return view('forms.create', compact('iqforms'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'select_campus' => 'required',
            'admission_applying_for' => $request->has('admission_applying_for'),
            'program_applying_for' => $request->has('program_applying_for'),
            'select_shift' => 'required|string',
            'are_you_iu_graduate' => $request->has('are_you_iu_graduate'),
            'are_you_disabled' => $request->has('are_you_disabled'),
            're_admission' => $request->has('re_admission'),
            'applying_for_program_transfer_migration' => $request->has('applying_for_program_transfer_migration'),
            'user_profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'first_name' => 'required|unique:forms,name,',
            'last_name' => 'required|unique:forms,name,',
            'nationality' => 'required',
            'province' => 'required',
            'domicile' => 'required',
            'cnic' => 'required|numeric|digits:13|unique:forms,cnic',
            'date_of_birth' => 'required|date|before:today',
            'gender' => 'required|string|in:male,female',
            'religion' => 'required|string',
            'blood_group' => 'required|string',
            'last_institute_attended' => 'required|string',
            'how_do_you_know_about_us' => 'required|string',
            'father_name' => 'required',
            'father_status' => 'required',
            'father_cnic' => 'required|numeric|digits:13|unique:forms,father_cnic',
            'father_cell' => 'required|numeric|unique:forms,father_cell',
            'father_education' => 'required|string',
            'father_profession' => 'required|string',
            'mother_name' => 'required',
            'mother_status' => 'required',
            'mother_cnic' => 'required|numeric|digits:13|unique:forms,mother_cnic',
            'mother_cell' => 'required|numeric|unique:forms,mother_cell',
            'mother_education' => 'required|string',
            'mother_profession' => 'required|string',
            'sibiling_brother' => 'required|numeric',
            'sibiling_sister' => 'required|numeric',
            'email_address' => 'required|email|unique:forms,email_address',
            'phone_no' => 'required|numeric|unique:forms,phone_no',
            'mobile_no' => 'required|numeric|unique:forms,mobile_no',
            'current_country' => 'required|string',
            'current_city' => 'required|string',
            'current_address' => 'required|string',
            'current_area' => 'required|string',
            'current_zip' => 'required|numeric',
            'is_ame_address' => $request->has('is_ame_address'),
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
            'board_roll_no' => 'required|numeric|unique:forms,board_roll_no',
            'board_name' => 'required|string',
            'degree_document_file' => 'required|mimes:pdf,txt,,xlsx,pptp,zip,doc,docx,rar,csv|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('user_profile_pic')) {
            $image = $request->file('user_profile_pic');
            $filePath = $image->store('uploads/profile_pics', 'public');
            $input['user_profile_pic'] = $filePath;
        }

        if($request->hasFile('degree_document_file')){
            $file = $request->file('degree_document_file');
            $filePath = $file->store('uploads/degree_documents','public');
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

    public function update(Request $request, Form $iqform)
    {
        $request->validate([
            'select_campus' => 'required',
            'admission_applying_for' => $request->has('admission_applying_for'),
            'program_applying_for' => $request->has('program_applying_for'),
            'select_shift' => 'required|string',
            'are_you_iu_graduate' => $request->has('are_you_iu_graduate'),
            'are_you_disabled' => $request->has('are_you_disabled'),
            're_admission' => $request->has('re_admission'),
            'applying_for_program_transfer_migration' => $request->has('applying_for_program_transfer_migration'),
            'user_profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'first_name' => 'required|unique:forms,name,',
            'last_name' => 'required|unique:forms,name,',
            'nationality' => 'required',
            'province' => 'required',
            'domicile' => 'required',
            'cnic' => 'required|numeric|digits:13|unique:forms,cnic',
            'date_of_birth' => 'required|date|before:today',
            'gender' => 'required|string|in:male,female',
            'religion' => 'required|string',
            'blood_group' => 'required|string',
            'last_institute_attended' => 'required|string',
            'how_do_you_know_about_us' => 'required|string',
            'father_name' => 'required',
            'father_status' => 'required',
            'father_cnic' => 'required|numeric|digits:13|unique:forms,father_cnic',
            'father_cell' => 'required|numeric|unique:forms,father_cell',
            'father_education' => 'required|string',
            'father_profession' => 'required|string',
            'mother_name' => 'required',
            'mother_status' => 'required',
            'mother_cnic' => 'required|numeric|digits:13|unique:forms,mother_cnic',
            'mother_cell' => 'required|numeric|unique:forms,mother_cell',
            'mother_education' => 'required|string',
            'mother_profession' => 'required|string',
            'sibiling_brother' => 'required|numeric',
            'sibiling_sister' => 'required|numeric',
            'email_address' => 'required|email|unique:forms,email_address',
            'phone_no' => 'required|numeric|unique:forms,phone_no',
            'mobile_no' => 'required|numeric|unique:forms,mobile_no',
            'current_country' => 'required|string',
            'current_city' => 'required|string',
            'current_address' => 'required|string',
            'current_area' => 'required|string',
            'current_zip' => 'required|numeric',
            'is_ame_address' => $request->has('is_ame_address'),
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
            'board_roll_no' => 'required|numeric|unique:forms,board_roll_no',
            'board_name' => 'required|string',
            'degree_document_file' => 'required|mimes:pdf,txt,,xlsx,pptp,zip,doc,docx,rar,csv|max:2048',
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

        $iqform->update($input);

        return redirect()->route('forms.index')
                        ->with('success', 'Form Updated Successfully...');
    }

    public function destroy(Form $iqform)
    {
        $iqform->delete();
        if (Storage::exists($iqform->user_profile_pic)) {
            Storage::delete($iqform->user_profile_pic);
        }
        if (Storage::exists($iqform->degree_document_file)) {
            Storage::delete($iqform->degree_document_file);
        }
        return redirect()->route('forms.index')
                        ->with('success','Form Deleted Successfully...');
    }
}
