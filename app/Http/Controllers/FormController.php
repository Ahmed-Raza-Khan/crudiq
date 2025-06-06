<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $iqform = Form::latest()->paginate(10);

        return view('forms.index',compact('forms'))
                    ->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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
            'how_do_you_know_about_us' => 'requied|string',
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
            'mobile_no' => 'require|numeric|unique:forms,mobile_no',
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

        if($request->hasFile('user_profile_pic')){
            $image = $request->file('user_profile_pic');
            $filePath = $file->store('uploads/profile_pics','public');
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

    /**
     * Display the specified resource.
     */
    public function show(Form $forms): View
    {
        return view('forms.show', compact('forms'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $forms): View
    {
        return view('forms.edit', compact('forms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $forms)
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
            'how_do_you_know_about_us' => 'requied|string',
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
            'mobile_no' => 'require|numeric|unique:forms,mobile_no',
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $forms)
    {
        $forms->delete();

        return redirect()->route('forms.index')
                        ->with('success','Forms Deleted Successfully...');
    }
}
