@extends('forms.layout')

@section('content')

<style>
    body{
        background-color:rgb(49, 48, 48);
        color: white;
    }
    .card{
        background-color: rgba(199, 156, 156, 0.7);
        color: black;
    }
</style>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Create Form</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('forms.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h3 class="mt-3">Admission Information:</h3>
                <div class="col-md-3 mb-3 mt-4">
                    <label for="select_campus" class="form-label">Select Campus</label>
                    <select name="select_campus" class="form-select" id="select_campus" required>
                        <option value="" disabled selected>Select a campus</option>
                        <option value="Main Campus">Airport Campus</option>
                        <option value="City Campus">Malir Campus</option>
                        <option value="North Campus">Shah-Faisal Campus</option>
                        <option value="South Campus">Karsaz Campus</option>
                        <option value="N.I.P.A Campus">N.I.P.A Campus</option>
                    </select>
                </div>

                <div class="col-md-5 mb-3">
                    <label for="admission_applying_for" class="form-label">Admission Applying For</label>
                    <select name="admission_applying_for" class="form-select" id="admission_applying_for" required>
                        <option value="" disabled selected>Select a Admission Applying For</option>
                        <option>UG - Under Graduate Programs</option>
                        <option>AD - Associate Degree Programs</option>
                        <option>PG - Post Graduate Programs</option>
                        <option>UG - Under Graduate Programs (2.5 years)</option>
                    </select>
                </div>

                <div class="col-md-5 mb-3">
                    <label for="program_applying_for" class="form-label">Program Applying For</label>
                    <select name="program_applying_for" class="form-select" id="program_applying_for" required>
                        <option disabled selected>Select a Program Applying For</option>
                        <option>BACHELOR OF SCIENCE IN ACCOUNTING & FINANCE (2.5 Y)</option>
                        <option>BACHELOR OF BUSINESS ADMINISTRATION (2.5 Y)</option>
                        <option>BACHELOR OF SCIENCE IN DIGITAL MARKETING (2.5Y)</option>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="select_shift" class="form-label">Select Shift</label>
                    <select name="select_shift" class="form-select" id="select_shift" required>
                        <option disabled selected>Select Shift</option>
                        <option>Morning</option>
                        <option>Evening</option>
                        <option>Night</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-check form-switch">
                        <input type="checkbox" name="are_you_iu_graduate" class="form-check-input" id="are_you_iu_graduate" required>
                        <label for="are_you_iu_graduate" class="form-label">Are You IU Graduate?</label>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-check form-switch">
                        <input type="checkbox" name="are_you_disabled" class="form-check-input" id="are_you_disabled" required>
                        <label for="are_you_disabled" class="form-label">Are You Disabled?</label>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-check form-switch">
                        <input type="checkbox" name="re_admission" class="form-check-input" id="re_admission" required>
                        <label for="re_admission" class="form-label">Re-Admission</label>
                    </div>
                </div>

                <h3>Program Transfer/Migration:</h3>
                <div class="col-md-6 mb-3">
                    <div class="form-check form-switch">
                        <input type="checkbox" name="applying_for_program_transfer_migration" class="form-check-input" id="applying_for_program_transfer_migration" required>
                        <label for="applying_for_program_transfer_migration" class="form-label">Applying for Program Transfer/Migration</label>
                    </div>
                </div>

                <h3>Personal Information</h3>
                    <div class="col-md-5 mb-3">
                        <label for="user_profile_pic" class="form-label"><strong>User Profile Picture</strong></label>
                        <input type="file" id="user_profile_pic" name="user_profile_pic" accept="image/*" class="form-control @error('user_profile_pic') is-invalid @enderror" required>
                            @error('profile')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter Your First Name" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter Your Last Name" required>
                    </div>

                <div class="col-md-3 mb-3">
                    <label for="nationality" class="form-label">Nationality</label>
                    <select name="nationality" class="form-select" id="nationality" required>
                        <option value="" disabled selected>Select Nationality</option>
                        <option value="Pakistani">Pakistani</option>
                        <option value="Indian">Indian</option>
                        <option value="Afghani">Afghani</option>
                        <option value="Irani">Irani</option>
                        <option value="Sudani">Sudani</option>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="province" class="form-label">Province</label>
                    <select name="province" class="form-select" id="province" required>
                        <option value="" disabled selected>Select Province</option>
                        <option value="Pakistani">Sindh</option>
                        <option value="Indian">Punjab</option>
                        <option value="Afghani">Balochistan</option>
                        <option value="Irani">K.P.K</option>
                        <option value="Sudani">Jammmu & Azad Kahmir</option>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="domicile" class="form-label">Domicile</label>
                    <select name="domicile" class="form-select" id="domicile" required>
                        <option value="" disabled selected>Select Domicile</option>
                        <option value="Korangi Domicile">Korangi Domicile</option>
                        <option value="Malir Halt Domicile">Malir Halt Domicile</option>
                        <option value="N.I.P.A Domicile">N.I.P.A Domicile</option>
                        <option value="North Domicile">North Domicile</option>
                        <option value="Central Domicile">Central Domicile</option>
                    </select>
                </div>

                    <div class="col-md-3 mb-3">
                        <label for="cnic" class="form-label">CNIC</label>
                        <input type="text" name="cnic" class="form-control" id="cnic" maxlength="15" placeholder="Enter Your Cnic Here" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" class="form-select" id="gender" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="religion" class="form-label">Religion</label>
                        <select name="religion" class="form-select" id="religion" required>
                            <optio disabled selected>Select Religion</option>
                            <option value="A+ve">Islam</option>
                            <option value="B+ve">Christianity</option>
                            <option value="O+ve">Juddism</option>
                            <option value="AB+ve">Hindhuism</option>
                            <option value="A-ve">Sikhism</option>
                            <option value="B-ve">Any Other Religion</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="blood_group" class="form-label">Blood Group</label>
                        <select name="blood_group" class="form-select" id="blood_group" required>
                            <optio disabled selected>Select Blood Group</option>
                            <option value="A+ve">A+ve</option>
                            <option value="B+ve">B+ve</option>
                            <option value="O+ve">O+ve</option>
                            <option value="AB+ve">AB+ve</option>
                            <option value="A-ve">A-ve</option>
                            <option value="B-ve">B-ve</option>
                            <option value="O-ve">O-ve</option>
                            <option value="AB-ve">AB-ve</option>
                            <option value="Not Known">Not Known</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="last_institute_attended" class="form-label">Last Institute Attended</label>
                        <input type="text" name="last_institute_attended" class="form-control" id="last_institute_attended" maxlength="15" value="None" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="how_do_you_know_about_us" class="form-label">How Do You Known About Us?</label>
                        <select name="how_do_you_know_about_us" class="form-select" id="how_do_you_know_about_us" required> 
                            <option value="Social Media">Social Media</option>
                            <option value="Website">Website</option>
                            <option value="Friend">Friend</option>
                            <option value="Relative">Relative</option>
                            <option value="Newspaper">Newspaper</option>
                            <option value="Reference" selected>Reference</option>
                        </select>
                    </div>

                    <h3>Family Details:</h3>
                    <div class="col-md-3 mb-3">
                        <label for="father_name" class="form-label">Father Name</label>
                        <input type="text" name="father_name" class="form-control" id="father_name" placeholder="Enter Your Father Name" required>
                        
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="father_status" class="form-label">Father Status</label>
                        <select name="father_status" class="form-select" id="father_status" required>
                            <option value="Select Father Status" disabled selected>Select Father Status</option>
                            <option value="Alive">Alive</option>
                            <option value="Deceased">Deceased</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="father_cnic" class="form-label">Father Cnic</label>
                        <input type="text" name="father_cnic" class="form-control" id="father_cnic" maxlength="15" placeholder="Enter Father Cnic-no Here" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="father_cell" class="form-label">Father Cell No</label>
                        <input type="text" name="father_cell" class="form-control" id="father_cell" maxlength="11" placeholder="Enter Father Cell-no Here" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="father_education" class="form-label">Father Education</label>
                        <select name="father_education" class="form-select" id="father_education" required>
                            <option value="Select Father Education" disabled selected>Select Father Education</option>
                            <option value="Matric">Matric</option>
                            <option value="FA/ Fsc or Equivalent">FA/ Fsc or Equivalent</option>
                            <option value="BA/ BS or Equivalent">BA/ BS or Equivalent</option>
                            <option value="M-PHIL/ MS or Equivalent">M-PHIL/ MS or Equivalent</option>
                            <option value="PhD or Equivalent">PhD or Equivalent</option>
                            <option value="Not Applicable">Not Applicable</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="father_profession" class="form-label">Father Profession</label>
                        <select name="father_profession" class="form-select" id="father_profession" required>
                            <option value="Select Father Education" disabled selected>Select Father Profession</option>
                            <option value="Male Nurse">Male Nurse</option>
                            <option value="Lawyer">Lawyer</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Business Man">Business Man</option>
                            <option value="Other">Other</option>
                            <option value="Retired">Retired</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="mother_name" class="form-label">Mother Name</label>
                        <input type="text" name="mother_name" class="form-control" id="mother_name" placeholder="Enter Your Mother Name" required>
                        
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="mother_status" class="form-label">Mother Status</label>
                        <select name="mother_status" class="form-select" id="mother_status" required>
                            <option value="Select Father Status" disabled selected>Select Mother Status</option>
                            <option value="Alive">Alive</option>
                            <option value="Deceased">Deceased</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="mother_cnic" class="form-label">Mother Cnic</label>
                        <input type="text" name="mother_cnic" class="form-control" id="mother_cnic" maxlength="15" placeholder="Enter Mother Cnic-no Here" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="mother_cell" class="form-label">Mother Cell No</label>
                        <input type="text" name="mother_cell" class="form-control" id="mother_cell" maxlength="11" placeholder="Enter Mother Cell-No " required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="mother_education" class="form-label">Mother Education</label>
                        <select name="mother_education" class="form-select" id="mother_education" required>
                            <option value="Select Mother Education" disabled selected>Select Mother Education</option>
                            <option value="Matric">Matric</option>
                            <option value="FA/ Fsc or Equivalent">FA/ Fsc or Equivalent</option>
                            <option value="BA/ BS or Equivalent">BA/ BS or Equivalent</option>
                            <option value="M-PHIL/ MS or Equivalent">M-PHIL/ MS or Equivalent</option>
                            <option value="PhD or Equivalent">PhD or Equivalent</option>
                            <option value="Not Applicable">Not Applicable</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="mother_profession" class="form-label">Mother Profession</label>
                        <select name="mother_profession" class="form-select" id="mother_profession" required>
                            <option value="Select Mother Education" disabled selected>Select Mother Profession</option>
                            <option value="Male Nurse">Male Nurse</option>
                            <option value="Lawyer">Lawyer</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Business Man">Business Man</option>
                            <option value="Other">Other</option>
                            <option value="Retired">Retired</option>
                        </select>
                    </div>

                    <div>
                    <h3>Sibilings:</h3>
                        <div class="col-md-3 mb-3">
                            <label for="sibiling_brother" class="form-label">Number of Brothers</label>
                            <input type="number" name="sibiling_brother" class="form-control" id="sibiling_brother" placeholder="Enter number of brothers" min="0" required>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="sibiling_sister" class="form-label">Number of Sisters</label>
                            <input type="number" name="sibiling_sister" class="form-control" id="sibiling_sister" placeholder="Enter number of sisters" min="0" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="total_marks" class="form-label">Total Marks</label>
                        <input type="number" name="total_marks" class="form-control" id="total_marks" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="percentage" class="form-label">Percentage</label>
                        <input type="number" name="percentage" class="form-control" id="percentage" step="0.01" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="degree_document_file" class="form-label">Degree Document File</label>
                        <input type="file" name="degree_document_file" class="form-control" id="degree_document_file" accept=".pdf,.doc,.docx,.xlsx,.zip,.rar" required>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection