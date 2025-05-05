@extends('forms.layout')

@section('content')

<style>
    body {
        background-color: rgb(49, 48, 48);
        color: white;
    }

    .card {
        background-color: rgba(144, 233, 255, 0.7);
        color: black;
    }

    .form-section {
        margin-bottom: 30px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f8f9fa;
    }

    .form-section h3 {
        margin-bottom: 20px;
        color: #333;
    }
</style>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Edit Admission Form</h3>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm me-3 mt-3" href="{{ route('forms.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <div class="card-body">
            <form action="{{ route('forms.update', $form->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div style="border-radius: 10px; background-color: rgb(255, 255, 255); padding: 20px; color: black;" class="mb-4">
                    <h3 class="mt-3 ms-4">Admission Information:</h3>
                    <div class="row ms-3">
                        <div class="col-md-4 mb-3 ms-2">
                            <label for="select_campus" class="form-label">Campus:</label>
                            <select name="select_campus" class="form-select" id="select_campus" required>
                                <option value="Airport Campus" {{ $form->select_campus == 'Airport Campus' ? 'selected' : '' }}>Airport Campus</option>
                                <option value="Malir Campus" {{ $form->select_campus == 'Malir Campus' ? 'selected' : '' }}>Malir Campus</option>
                                <option value="Shah-Faisal Campus" {{ $form->select_campus == 'Shah-Faisal Campus' ? 'selected' : '' }}>Shah-Faisal Campus </option>
                                <option value="Karsaz Campus" {{ $form->select_campus == 'Karsaz Campus' ? 'selected' : '' }}>Karsaz Campus</option>
                                <option value="N.I.P.A Campus" {{ $form->select_campus == 'N.I.P.A Campus' ? 'selected' : '' }}>N.I.P.A Campus</option>
                            </select>
                        </div>

                        <div class="col-md-5 mb-3">
                            <label for="admission_applying_for" class="form-label">Admission Applying For:</label>
                            <select name="admission_applying_for" class="form-select" id="admission_applying_for" required>
                                <option value="UG - Under Graduate Programs" {{ $form->admission_applying_for == 'UG - Under Graduate Programs' ? 'selected' : '' }}>UG - Under Graduate Programs</option>
                                <option value="AD - Associate Degree Programs" {{ $form->admission_applying_for == 'AD - Associate Degree Programs' ? 'selected' : '' }}>AD - Associate Degree Programs</option>
                                <option value="PG - Post Graduate Programs" {{ $form->admission_applying_for == 'PG - Post Graduate Programs' ? 'selected' : '' }}>PG - Post Graduate Programs</option>
                                <option value="UG - Under Graduate Programs (2.5 years)" {{ $form->admission_applying_for == 'UG - Under Graduate Programs (2.5 years)' ? 'selected' : '' }}>UG - Under Graduate Programs (2.5 years)</option>
                            </select>
                        </div>

                        <div class="col-md-7 mb-3 ms-2">
                            <label for="program_applying_for" class="form-label">Program Applying For:</label>
                            <select name="program_applying_for" class="form-select" id="program_applying_for" required>
                                <option value="BACHELOR OF SCIENCE IN ACCOUNTING & FINANCE (2.5 Y)" {{ $form->program_applying_for == 'BACHELOR OF SCIENCE IN ACCOUNTING & FINANCE (2.5 Y)' ? 'selected' : '' }}>BACHELOR OF SCIENCE IN ACCOUNTING & FINANCE (2.5 Y)</option>
                                <option value="BACHELOR OF BUSINESS ADMINISTRATION (2.5 Y)" {{ $form->program_applying_for == 'BACHELOR OF BUSINESS ADMINISTRATION (2.5 Y)' ? 'selected' : '' }}>BACHELOR OF BUSINESS ADMINISTRATION (2.5 Y)</option>
                                <option value="BACHELOR OF SCIENCE IN DIGITAL MARKETING (2.5Y)" {{ $form->program_applying_for == 'BACHELOR OF SCIENCE IN DIGITAL MARKETING (2.5Y)' ? 'selected' : '' }}>BACHELOR OF SCIENCE IN DIGITAL MARKETING (2.5Y)</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="select_shift" class="form-label">Shift:</label>
                            <select name="select_shift" class="form-select" id="select_shift" required>
                                <option value="Morning" {{ $form->select_shift == 'Morning' ? 'selected' : '' }}>Morning</option>
                                <option value="Evening" {{ $form->select_shift == 'Evening' ? 'selected' : '' }}>Evening</option>
                                <option value="Night" {{ $form->select_shift == 'Night' ? 'selected' : '' }}>Night</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3 ms-2">
                            <div class="form-check form-switch">
                                <input type="checkbox" value="1" name="are_you_iu_graduate" class="form-check-input" id="are_you_iu_graduate" {{ $form->are_you_iu_graduate ? 'checked' : '' }}>
                                <label for="are_you_iu_graduate" class="form-label">Are You IU Graduate?</label>
                            </div>
                        </div>

                        <div class="col-md-3 mb-1">
                            <div class="form-check form-switch">
                                <input type="checkbox" value="1" name="are_you_disabled" class="form-check-input" id="are_you_disabled" {{ $form->are_you_disabled ? 'checked' : '' }}>
                                <label for="are_you_disabled" class="form-label">Are You Disabled?</label>
                            </div>
                        </div>

                        <div class="col-md-2 mb-3">
                            <div class="form-check form-switch">
                                <input type="checkbox" value="1" name="re_admission" class="form-check-input" id="re_admission" {{ $form->re_admission ? 'checked' : '' }}>
                                <label for="re_admission" class="form-label">Re-Admission</label>
                            </div>
                        </div>
                    </div>

                    <h5>________________________________________________________________________________________________________________________</h5>

                    <div class="row ms-2">
                        <h3>Program Transfer/Migration:</h3>
                        <div class="col-md-6 mb-3 ms-3">
                            <div class="form-check form-switch">
                                <input type="checkbox" value="1" name="applying_for_program_transfer_migration" class="form-check-input" id="applying_for_program_transfer_migration" {{ $form->applying_for_program_transfer_migration ? 'checked' : '' }}>
                                <label for="applying_for_program_transfer_migration" class="form-label">Applying for Program Transfer/Migration</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="border-radius: 10px; background-color: rgb(63 63 63); padding: 20px; color: #ffffff;" class="mb-4">
    <div class="row ms-2">
        <h3>Personal Information</h3>
        <div class="col-md-4 mb-3">
            <label for="user_profile_pic" class="form-label"><strong>User Profile Picture:</strong></label>
            <input type="file" id="user_profile_pic" name="user_profile_pic" accept="image/*" class="form-control">
            @if ($form->user_profile_pic)
                <img src="{{ asset('storage/' . $form->user_profile_pic) }}" alt="Profile Picture" width="100" height="100" class="mt-2">
            @endif
        </div>

        <div class="col-md-3 mb-3">
            <label for="first_name" class="form-label">First Name:</label>
            <input type="text" value="{{ old('first_name', $form->first_name) }}" name="first_name" class="form-control" id="first_name" placeholder="Enter Your First Name" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="last_name" class="form-label">Last Name:</label>
            <input type="text" value="{{ old('last_name', $form->last_name) }}" name="last_name" class="form-control" id="last_name" placeholder="Enter Your Last Name" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="nationality" class="form-label">Nationality:</label>
            <select name="nationality" class="form-select" id="nationality" required>
                <option value="" disabled>Select Nationality</option>
                <option value="Pakistani" {{ $form->nationality == 'Pakistani' ? 'selected' : '' }}>Pakistani</option>
                <option value="Indian" {{ $form->nationality == 'Indian' ? 'selected' : '' }}>Indian</option>
                <option value="Afghani" {{ $form->nationality == 'Afghani' ? 'selected' : '' }}>Afghani</option>
                <option value="Irani" {{ $form->nationality == 'Irani' ? 'selected' : '' }}>Irani</option>
                <option value="Sudani" {{ $form->nationality == 'Sudani' ? 'selected' : '' }}>Sudani</option>
            </select>
        </div>

        <div class="col-md-4 mb-3">
            <label for="province" class="form-label">Province:</label>
            <select name="province" class="form-select" id="province" required>
                <option value="" disabled>Select Province</option>
                <option value="Sindh" {{ $form->province == 'Sindh' ? 'selected' : '' }}>Sindh</option>
                <option value="Punjab" {{ $form->province == 'Punjab' ? 'selected' : '' }}>Punjab</option>
                <option value="Balochistan" {{ $form->province == 'Balochistan' ? 'selected' : '' }}>Balochistan</option>
                <option value="K.P.K" {{ $form->province == 'K.P.K' ? 'selected' : '' }}>K.P.K</option>
                <option value="Jammmu & Azad Kahmir" {{ $form->province == 'Jammmu & Azad Kahmir' ? 'selected' : '' }}>Jammmu & Azad Kahmir</option>
            </select>
        </div>

        <div class="col-md-3 mb-3 me-4">
            <label for="domicile" class="form-label">Domicile:</label>
            <select name="domicile" class="form-select" id="domicile" required>
                <option value="" disabled>Select Domicile</option>
                <option value="Korangi Domicile" {{ $form->domicile == 'Korangi Domicile' ? 'selected' : '' }}>Korangi Domicile</option>
                <option value="Malir Halt Domicile" {{ $form->domicile == 'Malir Halt Domicile' ? 'selected' : '' }}>Malir Halt Domicile</option>
                <option value="N.I.P.A Domicile" {{ $form->domicile == 'N.I.P.A Domicile' ? 'selected' : '' }}>N.I.P.A Domicile</option>
                <option value="North Domicile" {{ $form->domicile == 'North Domicile' ? 'selected' : '' }}>North Domicile</option>
                <option value="Central Domicile" {{ $form->domicile == 'Central Domicile' ? 'selected' : '' }}>Central Domicile</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="cnic" class="form-label">CNIC:</label>
            <input type="text" value="{{ old('cnic', $form->cnic) }}" name="cnic" class="form-control" id="cnic" maxlength="15" placeholder="Enter Your CNIC Here" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="date_of_birth" class="form-label">Date of Birth:</label>
            <input type="date" value="{{ old('date_of_birth', $form->date_of_birth) }}" name="date_of_birth" class="form-control" id="date_of_birth" required>
        </div>

        <div class="col-md-3 mb-3 me-3">
            <label for="gender" class="form-label">Gender:</label>
            <select name="gender" class="form-select" id="gender" required>
                <option value="" disabled>Select Gender</option>
                <option value="male" {{ $form->gender == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $form->gender == 'female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="religion" class="form-label">Religion:</label>
            <select name="religion" class="form-select" id="religion" required>
                <option value="" disabled>Select Religion</option>
                <option value="Islam" {{ $form->religion == 'Islam' ? 'selected' : '' }}>Islam</option>
                <option value="Christianity" {{ $form->religion == 'Christianity' ? 'selected' : '' }}>Christianity</option>
                <option value="Juddism" {{ $form->religion == 'Juddism' ? 'selected' : '' }}>Juddism</option>
                <option value="Hindhuism" {{ $form->religion == 'Hindhuism' ? 'selected' : '' }}>Hindhuism</option>
                <option value="Sikhism" {{ $form->religion == 'Sikhism' ? 'selected' : '' }}>Sikhism</option>
                <option value="Any Other Religion" {{ $form->religion == 'Any Other Religion' ? 'selected' : '' }}>Any Other Religion</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="blood_group" class="form-label">Blood Group:</label>
            <select name="blood_group" class="form-select" id="blood_group" required>
                <option value="" disabled>Select Blood Group</option>
                <option value="A+ve" {{ $form->blood_group == 'A+ve' ? 'selected' : '' }}>A+ve</option>
                <option value="B+ve" {{ $form->blood_group == 'B+ve' ? 'selected' : '' }}>B+ve</option>
                <option value="O+ve" {{ $form->blood_group == 'O+ve' ? 'selected' : '' }}>O+ve</option>
                <option value="AB+ve" {{ $form->blood_group == 'AB+ve' ? 'selected' : '' }}>AB+ve</option>
                <option value="A-ve" {{ $form->blood_group == 'A-ve' ? 'selected' : '' }}>A-ve</option>
                <option value="B-ve" {{ $form->blood_group == 'B-ve' ? 'selected' : '' }}>B-ve</option>
                <option value="O-ve" {{ $form->blood_group == 'O-ve' ? 'selected' : '' }}>O-ve</option>
                <option value="AB-ve" {{ $form->blood_group == 'AB-ve' ? 'selected' : '' }}>AB-ve</option>
                <option value="Not Known" {{ $form->blood_group == 'Not Known' ? 'selected' : '' }}>Not Known</option>
            </select>
        </div>

        <div class="col-md-5 mb-3 me-4">
            <label for="last_institute_attended" class="form-label">Last Institute Attended:</label>
            <input type="text" value="{{ old('last_institute_attended', $form->last_institute_attended) }}" name="last_institute_attended" class="form-control" id="last_institute_attended" maxlength="15" placeholder="Enter Last Institute Attended" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="how_do_you_know_about_us" class="form-label">How Do You Know About Us?</label>
            <select name="how_do_you_know_about_us" class="form-select" id="how_do_you_know_about_us" required>
                <option value="Social Media" {{ $form->how_do_you_know_about_us == 'Social Media' ? 'selected' : '' }}>Social Media</option>
                <option value="Website" {{ $form->how_do_you_know_about_us == 'Website' ? 'selected' : '' }}>Website</option>
                <option value="Friend" {{ $form->how_do_you_know_about_us == 'Friend' ? 'selected' : '' }}>Friend</option>
                <option value="Relative" {{ $form->how_do_you_know_about_us == 'Relative' ? 'selected' : '' }}>Relative</option>
                <option value="Newspaper" {{ $form->how_do_you_know_about_us == 'Newspaper' ? 'selected' : '' }}>Newspaper</option>
                <option value="Reference" {{ $form->how_do_you_know_about_us == 'Reference' ? 'selected' : '' }}>Reference</option>
            </select>
        </div>
    </div>
</div>

<div style="border-radius: 10px; background-color: rgb(63 63 63); padding: 20px; color: #ffffff;" class="mb-4">
    <div class="row ms-2">
        <h3>Family Details:</h3>
        <div class="col-md-3 mb-3">
            <label for="father_name" class="form-label">Father Name:</label>
            <input type="text" value="{{ old('father_name', $form->father_name) }}" name="father_name" class="form-control" id="father_name" placeholder="Enter Your Father Name" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="father_status" class="form-label">Father Status:</label>
            <select name="father_status" class="form-select" id="father_status" required>
                <option value="" disabled>Select Father Status</option>
                <option value="Alive" {{ $form->father_status == 'Alive' ? 'selected' : '' }}>Alive</option>
                <option value="Deceased" {{ $form->father_status == 'Deceased' ? 'selected' : '' }}>Deceased</option>
            </select>
        </div>

        <div class="col-md-3 me-3 mb-3">
            <label for="father_cnic" class="form-label">Father CNIC:</label>
            <input type="text" value="{{ old('father_cnic', $form->father_cnic) }}" name="father_cnic" class="form-control" id="father_cnic" maxlength="15" placeholder="Enter Father CNIC Here" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="father_cell" class="form-label">Father Cell No:</label>
            <input type="text" value="{{ old('father_cell', $form->father_cell) }}" name="father_cell" class="form-control" id="father_cell" maxlength="11" placeholder="Enter Father Cell No Here" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="father_education" class="form-label">Father Education:</label>
            <select name="father_education" class="form-select" id="father_education" required>
                <option value="" disabled>Select Father Education</option>
                <option value="Matric" {{ $form->father_education == 'Matric' ? 'selected' : '' }}>Matric</option>
                <option value="FA/ Fsc or Equivalent" {{ $form->father_education == 'FA/ Fsc or Equivalent' ? 'selected' : '' }}>FA/ Fsc or Equivalent</option>
                <option value="BA/ BS or Equivalent" {{ $form->father_education == 'BA/ BS or Equivalent' ? 'selected' : '' }}>BA/ BS or Equivalent</option>
                <option value="M-PHIL/ MS or Equivalent" {{ $form->father_education == 'M-PHIL/ MS or Equivalent' ? 'selected' : '' }}>M-PHIL/ MS or Equivalent</option>
                <option value="PhD or Equivalent" {{ $form->father_education == 'PhD or Equivalent' ? 'selected' : '' }}>PhD or Equivalent</option>
                <option value="Not Applicable" {{ $form->father_education == 'Not Applicable' ? 'selected' : '' }}>Not Applicable</option>
            </select>
        </div>

        <div class="col-md-3 mb-3 me-3">
            <label for="father_profession" class="form-label">Father Profession:</label>
            <select name="father_profession" class="form-select" id="father_profession" required>
                <option value="" disabled>Select Father Profession</option>
                <option value="Male Nurse" {{ $form->father_profession == 'Male Nurse' ? 'selected' : '' }}>Male Nurse</option>
                <option value="Lawyer" {{ $form->father_profession == 'Lawyer' ? 'selected' : '' }}>Lawyer</option>
                <option value="Doctor" {{ $form->father_profession == 'Doctor' ? 'selected' : '' }}>Doctor</option>
                <option value="Business Man" {{ $form->father_profession == 'Business Man' ? 'selected' : '' }}>Business Man</option>
                <option value="Other" {{ $form->father_profession == 'Other' ? 'selected' : '' }}>Other</option>
                <option value="Retired" {{ $form->father_profession == 'Retired' ? 'selected' : '' }}>Retired</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="mother_name" class="form-label">Mother Name:</label>
            <input type="text" value="{{ old('mother_name', $form->mother_name) }}" name="mother_name" class="form-control" id="mother_name" placeholder="Enter Your Mother Name" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="mother_status" class="form-label">Mother Status:</label>
            <select name="mother_status" class="form-select" id="mother_status" required>
                <option value="" disabled>Select Mother Status</option>
                <option value="Alive" {{ $form->mother_status == 'Alive' ? 'selected' : '' }}>Alive</option>
                <option value="Deceased" {{ $form->mother_status == 'Deceased' ? 'selected' : '' }}>Deceased</option>
            </select>
        </div>

        <div class="col-md-3 mb-3 me-3">
            <label for="mother_cnic" class="form-label">Mother CNIC:</label>
            <input type="text" value="{{ old('mother_cnic', $form->mother_cnic) }}" name="mother_cnic" class="form-control" id="mother_cnic" maxlength="15" placeholder="Enter Mother CNIC Here" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="mother_cell" class="form-label">Mother Cell No:</label>
            <input type="text" value="{{ old('mother_cell', $form->mother_cell) }}" name="mother_cell" class="form-control" id="mother_cell" maxlength="11" placeholder="Enter Mother Cell No Here" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="mother_education" class="form-label">Mother Education:</label>
            <select name="mother_education" class="form-select" id="mother_education" required>
                <option value="" disabled>Select Mother Education</option>
                <option value="Matric" {{ $form->mother_education == 'Matric' ? 'selected' : '' }}>Matric</option>
                <option value="FA/ Fsc or Equivalent" {{ $form->mother_education == 'FA/ Fsc or Equivalent' ? 'selected' : '' }}>FA/ Fsc or Equivalent</option>
                <option value="BA/ BS or Equivalent" {{ $form->mother_education == 'BA/ BS or Equivalent' ? 'selected' : '' }}>BA/ BS or Equivalent</option>
                <option value="M-PHIL/ MS or Equivalent" {{ $form->mother_education == 'M-PHIL/ MS or Equivalent' ? 'selected' : '' }}>M-PHIL/ MS or Equivalent</option>
                <option value="PhD or Equivalent" {{ $form->mother_education == 'PhD or Equivalent' ? 'selected' : '' }}>PhD or Equivalent</option>
                <option value="Not Applicable" {{ $form->mother_education == 'Not Applicable' ? 'selected' : '' }}>Not Applicable</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="mother_profession" class="form-label">Mother Profession:</label>
            <select name="mother_profession" class="form-select" id="mother_profession" required>
                <option value="" disabled>Select Mother Profession</option>
                <option value="Male Nurse" {{ $form->mother_profession == 'Male Nurse' ? 'selected' : '' }}>Male Nurse</option>
                <option value="Doctor" {{ $form->mother_profession == 'Doctor' ? 'selected' : '' }}>Doctor</option>
                <option value="Business Women" {{ $form->mother_profession == 'Business Women' ? 'selected' : '' }}>Business Women</option>
                <option value="Other" {{ $form->mother_profession == 'Other' ? 'selected' : '' }}>Other</option>
                <option value="Retired" {{ $form->mother_profession == 'Retired' ? 'selected' : '' }}>Retired</option>
            </select>
        </div>

        <h5>________________________________________________________________________________________________________________________</h5>

        <div class="d-flex align-items-center mb-3">
            <h3 class="me-4 mt-3">Siblings:</h3>
            <div class="col-md-3 mb-3 me-4">
                <label for="sibiling_brother" class="form-label mt-1">Number of Brothers:</label>
                <input type="number" value="{{ old('sibiling_brother', $form->sibiling_brother) }}" name="sibiling_brother" class="form-control" id="sibiling_brother" placeholder="Enter Number of Brothers" min="0" required>
            </div>

            <div class="col-md-3 mb-3 me-4">
                <label for="sibiling_sister" class="form-label">Number of Sisters:</label>
                <input type="number" value="{{ old('sibiling_sister', $form->sibiling_sister) }}" name="sibiling_sister" class="form-control" id="sibiling_sister" placeholder="Enter Number of Sisters" min="0" required>
            </div>
        </div>
    </div>
</div>

<div style="border-radius: 10px; background-color: rgb(63 63 63); padding: 20px; color: #ffffff;" class="mb-4">
    <div class="row ms-2">
        <h3>Contact Information</h3>
        <div class="col-md-3 mb-3">
            <label for="email_address" class="form-label">Email Address:</label>
            <input type="email" value="{{ old('email_address', $form->email_address) }}" name="email_address" class="form-control" id="email_address" placeholder="Enter Your Email Address" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="phone_no" class="form-label">Phone No:</label>
            <input type="text" value="{{ old('phone_no', $form->phone_no) }}" name="phone_no" class="form-control" id="phone_no" maxlength="11" placeholder="Enter Your Phone No" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="mobile_no" class="form-label">Mobile No:</label>
            <input type="text" value="{{ old('mobile_no', $form->mobile_no) }}" name="mobile_no" class="form-control" id="mobile_no" maxlength="11" placeholder="Enter Your Mobile No" required>
        </div>

        <h3>Current Address</h3>
        <div class="col-md-3 mb-3">
            <label for="current_country" class="form-label">Country:</label>
            <select name="current_country" class="form-select" id="current_country" required>
                <option value="" disabled>Select Your Country</option>
                <option value="Pakistan" {{ $form->current_country == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                <option value="Oman" {{ $form->current_country == 'Oman' ? 'selected' : '' }}>Oman</option>
                <option value="Sudan" {{ $form->current_country == 'Sudan' ? 'selected' : '' }}>Sudan</option>
                <option value="Iran" {{ $form->current_country == 'Iran' ? 'selected' : '' }}>Iran</option>
                <option value="Iraq" {{ $form->current_country == 'Iraq' ? 'selected' : '' }}>Iraq</option>
                <option value="Syria" {{ $form->current_country == 'Syria' ? 'selected' : '' }}>Syria</option>
                <option value="Palestine" {{ $form->current_country == 'Palestine' ? 'selected' : '' }}>Palestine</option>
                <option value="Lebonon" {{ $form->current_country == 'Lebonon' ? 'selected' : '' }}>Lebonon</option>
                <option value="Egypt" {{ $form->current_country == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                <option value="Turkey" {{ $form->current_country == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                <option value="India" {{ $form->current_country == 'India' ? 'selected' : '' }}>India</option>
                <option value="Austria" {{ $form->current_country == 'Austria' ? 'selected' : '' }}>Austria</option>
                <option value="Afghanistan" {{ $form->current_country == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="current_city" class="form-label">City:</label>
            <select name="current_city" class="form-select" id="current_city" required>
                <option value="" disabled>Select Your City</option>
                <option value="Karachi" {{ $form->current_city == 'Karachi' ? 'selected' : '' }}>Karachi</option>
                <option value="Sakhar" {{ $form->current_city == 'Sakhar' ? 'selected' : '' }}>Sakhar</option>
                <option value="Hyderabad" {{ $form->current_city == 'Hyderabad' ? 'selected' : '' }}>Hyderabad</option>
                <option value="Lahore" {{ $form->current_city == 'Lahore' ? 'selected' : '' }}>Lahore</option>
                <option value="Multan" {{ $form->current_city == 'Multan' ? 'selected' : '' }}>Multan</option>
                <option value="Gujranwala" {{ $form->current_city == 'Gujranwala' ? 'selected' : '' }}>Gujranwala</option>
                <option value="Peshawar" {{ $form->current_city == 'Peshawar' ? 'selected' : '' }}>Peshawar</option>
                <option value="Quetta" {{ $form->current_city == 'Quetta' ? 'selected' : '' }}>Quetta</option>
                <option value="Kabul" {{ $form->current_city == 'Kabul' ? 'selected' : '' }}>Kabul</option>
                <option value="Islamabad" {{ $form->current_city == 'Islamabad' ? 'selected' : '' }}>Islamabad</option>
                <option value="Jhelum" {{ $form->current_city == 'Jhelum' ? 'selected' : '' }}>Jhelum</option>
                <option value="Ladakh" {{ $form->current_city == 'Ladakh' ? 'selected' : '' }}>Ladakh</option>
                <option value="Bahawalpur" {{ $form->current_city == 'Bahawalpur' ? 'selected' : '' }}>Bahawalpur</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="current_address" class="form-label">Current Address:</label>
            <input type="text" value="{{ old('current_address', $form->current_address) }}" name="current_address" class="form-control" id="current_address" placeholder="Enter Your Current Address" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="current_area" class="form-label">Current Area:</label>
            <input type="text" value="{{ old('current_area', $form->current_area) }}" name="current_area" class="form-control" id="current_area" placeholder="Enter Your Current Area" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="current_zip" class="form-label">Zip:</label>
            <input type="text" value="{{ old('current_zip', $form->current_zip) }}" name="current_zip" class="form-control" id="current_zip" maxlength="5" placeholder="Enter Your Zip Code" required>
        </div>

        <div class="col-md-3 mb-3">
            <div class="form-check form-switch">
                <input type="checkbox" value="1" name="is_ame_address" class="form-check-input" id="is_ame_address" {{ $form->is_ame_address ? 'checked' : '' }}>
                <label for="is_ame_address" class="form-label">Is Same Address</label>
            </div>
        </div>

        <h3>Permanent Address</h3>
        <div class="col-md-4 mb-3">
            <label for="permeneant_country" class="form-label">Permanent Country:</label>
            <select name="permeneant_country" class="form-select" id="permeneant_country" required>
                <option value="" disabled>Select Your Permanent Country</option>
                <option value="Pakistan" {{ $form->permeneant_country == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                <option value="Oman" {{ $form->permeneant_country == 'Oman' ? 'selected' : '' }}>Oman</option>
                <option value="Sudan" {{ $form->permeneant_country == 'Sudan' ? 'selected' : '' }}>Sudan</option>
                <option value="Iran" {{ $form->permeneant_country == 'Iran' ? 'selected' : '' }}>Iran</option>
                <option value="Iraq" {{ $form->permeneant_country == 'Iraq' ? 'selected' : '' }}>Iraq</option>
                <option value="Syria" {{ $form->permeneant_country == 'Syria' ? 'selected' : '' }}>Syria</option>
                <option value="Palestine" {{ $form->permeneant_country == 'Palestine' ? 'selected' : '' }}>Palestine</option>
                <option value="Lebonon" {{ $form->permeneant_country == 'Lebonon' ? 'selected' : '' }}>Lebonon</option>
                <option value="Egypt" {{ $form->permeneant_country == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                <option value="Turkey" {{ $form->permeneant_country == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                <option value="India" {{ $form->permeneant_country == 'India' ? 'selected' : '' }}>India</option>
                <option value="Austria" {{ $form->permeneant_country == 'Austria' ? 'selected' : '' }}>Austria</option>
                <option value="Afghanistan" {{ $form->permeneant_country == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
            </select>
        </div>

        <div class="col-md-4 mb-3">
            <label for="permeneant_city" class="form-label">Permanent City:</label>
            <select name="permeneant_city" class="form-select" id="permeneant_city" required>
                <option value="" disabled>Select Your Permanent City</option>
                <option value="Karachi" {{ $form->permeneant_city == 'Karachi' ? 'selected' : '' }}>Karachi</option>
                <option value="Sakhar" {{ $form->permeneant_city == 'Sakhar' ? 'selected' : '' }}>Sakhar</option>
                <option value="Hyderabad" {{ $form->permeneant_city == 'Hyderabad' ? 'selected' : '' }}>Hyderabad</option>
                <option value="Lahore" {{ $form->permeneant_city == 'Lahore' ? 'selected' : '' }}>Lahore</option>
                <option value="Multan" {{ $form->permeneant_city == 'Multan' ? 'selected' : '' }}>Multan</option>
                <option value="Gujranwala" {{ $form->permeneant_city == 'Gujranwala' ? 'selected' : '' }}>Gujranwala</option>
                <option value="Peshawar" {{ $form->permeneant_city == 'Peshawar' ? 'selected' : '' }}>Peshawar</option>
                <option value="Quetta" {{ $form->permeneant_city == 'Quetta' ? 'selected' : '' }}>Quetta</option>
                <option value="Kabul" {{ $form->permeneant_city == 'Kabul' ? 'selected' : '' }}>Kabul</option>
                <option value="Islamabad" {{ $form->permeneant_city == 'Islamabad' ? 'selected' : '' }}>Islamabad</option>
                <option value="Jhelum" {{ $form->permeneant_city == 'Jhelum' ? 'selected' : '' }}>Jhelum</option>
                <option value="Ladakh" {{ $form->permeneant_city == 'Ladakh' ? 'selected' : '' }}>Ladakh</option>
                <option value="Bahawalpur" {{ $form->permeneant_city == 'Bahawalpur' ? 'selected' : '' }}>Bahawalpur</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="permeneant_address" class="form-label">Permanent Address:</label>
            <input type="text" value="{{ old('permeneant_address', $form->permeneant_address) }}" name="permeneant_address" class="form-control" id="permeneant_address" placeholder="Enter Your Permanent Address" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="permeneant_area" class="form-label">Permanent Area:</label>
            <input type="text" value="{{ old('permeneant_area', $form->permeneant_area) }}" name="permeneant_area" class="form-control" id="permeneant_area" placeholder="Enter Your Permanent Area" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="permeneant_zip" class="form-label">Zip:</label>
            <input type="text" value="{{ old('permeneant_zip', $form->permeneant_zip) }}" name="permeneant_zip" class="form-control" id="permeneant_zip" maxlength="5" placeholder="Enter Your Zip Code" required>
        </div>
    </div>
</div>

<div style="border-radius: 10px; background-color: rgb(63 63 63); padding: 20px; color: #ffffff;" class="mb-4">
    <div class="row ms-2">
        <h3>Academic Information</h3>
        <div class="col-md-4 mb-3">
            <label for="degree_level" class="form-label">Degree Level:</label>
            <select name="degree_level" class="form-select" id="degree_level" required>
                <option value="" disabled>Select Degree Level</option>
                <option value="Secondary School Certificate" {{ $form->degree_level == 'Secondary School Certificate' ? 'selected' : '' }}>Secondary School Certificate</option>
                <option value="Higher Secondary-School Certificate" {{ $form->degree_level == 'Higher Secondary-School Certificate' ? 'selected' : '' }}>Higher Secondary-School Certificate</option>
                <option value="UnderGraduate - 14 Years" {{ $form->degree_level == 'UnderGraduate - 14 Years' ? 'selected' : '' }}>UnderGraduate - 14 Years</option>
                <option value="UnderGraduate - 16 Years" {{ $form->degree_level == 'UnderGraduate - 16 Years' ? 'selected' : '' }}>UnderGraduate - 16 Years</option>
                <option value="Graduate - 18 Years" {{ $form->degree_level == 'Graduate - 18 Years' ? 'selected' : '' }}>Graduate - 18 Years</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="degree" class="form-label">Degree:</label>
            <select name="degree" class="form-select" id="degree" required>
                <option value="" disabled>Select Degree</option>
                <option value="MS/M.Phil" {{ $form->degree == 'MS/M.Phil' ? 'selected' : '' }}>MS/M.Phil</option>
                <option value="MBA" {{ $form->degree == 'MBA' ? 'selected' : '' }}>MBA</option>
                <option value="B.Edu (18 years)" {{ $form->degree == 'B.Edu (18 years)' ? 'selected' : '' }}>B.Edu (18 years)</option>
                <option value="Matric" {{ $form->degree == 'Matric' ? 'selected' : '' }}>Matric</option>
            </select>
        </div>

        <div class="col-md-5 mb-3">
            <label for="specializations" class="form-label">Specializations:</label>
            <select name="specializations" class="form-select" id="specializations" required>
                <option value="" disabled>Select Specializations</option>
                <option value="Computing Sciences" {{ $form->specializations == 'Computing Sciences' ? 'selected' : '' }}>Computing Sciences</option>
                <option value="Education" {{ $form->specializations == 'Education' ? 'selected' : '' }}>Education</option>
                <option value="Public Administration" {{ $form->specializations == 'Public Administration' ? 'selected' : '' }}>Public Administration</option>
                <option value="Commerce" {{ $form->specializations == 'Commerce' ? 'selected' : '' }}>Commerce</option>
                <option value="Media Studies" {{ $form->specializations == 'Media Studies' ? 'selected' : '' }}>Media Studies</option>
                <option value="Management Sciences" {{ $form->specializations == 'Management Sciences' ? 'selected' : '' }}>Management Sciences</option>
                <option value="DESIGN MARKETING & MERCHANDIZING" {{ $form->specializations == 'DESIGN MARKETING & MERCHANDIZING' ? 'selected' : '' }}>DESIGN MARKETING & MERCHANDIZING</option>
                <option value="English" {{ $form->specializations == 'English' ? 'selected' : '' }}>English</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="select_passing_year" class="form-label">Passing Year:</label>
            <select name="select_passing_year" class="form-select" id="select_passing_year" required>
                <option value="" disabled>Select Passing Year</option>
                <option value="2025" {{ $form->select_passing_year == '2025' ? 'selected' : '' }}>2025</option>
                <option value="2024" {{ $form->select_passing_year == '2024' ? 'selected' : '' }}>2024</option>
                <option value="2023" {{ $form->select_passing_year == '2023' ? 'selected' : '' }}>2023</option>
                <option value="2022" {{ $form->select_passing_year == '2022' ? 'selected' : '' }}>2022</option>
                <option value="2021" {{ $form->select_passing_year == '2021' ? 'selected' : '' }}>2021</option>
                <option value="2020" {{ $form->select_passing_year == '2020' ? 'selected' : '' }}>2020</option>
                <option value="2019" {{ $form->select_passing_year == '2019' ? 'selected' : '' }}>2019</option>
                <option value="2018" {{ $form->select_passing_year == '2018' ? 'selected' : '' }}>2018</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="select_result_status" class="form-label">Result Status:</label>
            <select name="select_result_status" class="form-select" id="select_result_status" required>
                <option value="" disabled>Select Result Status</option>
                <option value="Waiting" {{ $form->select_result_status == 'Waiting' ? 'selected' : '' }}>Waiting</option>
                <option value="Declared" {{ $form->select_result_status == 'Declared' ? 'selected' : '' }}>Declared</option>
            </select>
        </div>

        <div class="col-md-2 mb-3">
            <label for="total_marks" class="form-label">Total Marks:</label>
            <input type="number" value="{{ old('total_marks', $form->total_marks) }}" name="total_marks" class="form-control" id="total_marks" min="0" max="400" required>
        </div>

        <div class="col-md-2 mb-3">
            <label for="obtained_marks" class="form-label">Obtained Marks:</label>
            <input type="number" value="{{ old('obtained_marks', $form->obtained_marks) }}" name="obtained_marks" class="form-control" id="obtained_marks" min="0" max="400" required>
        </div>

        <div class="col-md-2 mb-3">
            <label for="percentage" class="form-label">Percentage:</label>
            <input type="number" value="{{ old('percentage', $form->percentage) }}" name="percentage" class="form-control" id="percentage" step="0.01" max="100" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="institute" class="form-label">Institute:</label>
            <input type="text" value="{{ old('institute', $form->institute) }}" name="institute" class="form-control" id="institute" placeholder="Enter Your Institute Name" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="board_roll_no" class="form-label">Board Roll No:</label>
            <input type="text" value="{{ old('board_roll_no', $form->board_roll_no) }}" name="board_roll_no" class="form-control" id="board_roll_no" maxlength="7" placeholder="Enter Your Board Roll-No" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="board_name" class="form-label">Board:</label>
            <select name="board_name" class="form-select" id="board_name" required>
                <option value="" disabled>Select Board</option>
                <option value="Sindh Board of Technical Education (SBTE), Karachi" {{ $form->board_name == 'Sindh Board of Technical Education (SBTE), Karachi' ? 'selected' : '' }}>Sindh Board of Technical Education (SBTE), Karachi</option>
                <option value="Ziauddin board" {{ $form->board_name == 'Ziauddin board' ? 'selected' : '' }}>Ziauddin board</option>
                <option value="BIEK, Karachi" {{ $form->board_name == 'BIEK, Karachi' ? 'selected' : '' }}>BIEK, Karachi</option>
                <option value="Sindh Nurses Examination Board Karachi" {{ $form->board_name == 'Sindh Nurses Examination Board Karachi' ? 'selected' : '' }}>Sindh Nurses Examination Board Karachi</option>
                <option value="IBCC" {{ $form->board_name == 'IBCC' ? 'selected' : '' }}>IBCC</option>
                <option value="BISE, Karachi" {{ $form->board_name == 'BISE, Karachi' ? 'selected' : '' }}>BISE, Karachi</option>
                <option value="Aga Khan Board, Karachi" {{ $form->board_name == 'Aga Khan Board, Karachi' ? 'selected' : '' }}>Aga Khan Board, Karachi</option>
            </select>
        </div>

        <div class="col-md-5 mb-3">
            <label for="degree_document_file" class="form-label">Degree Document:</label>
            <input type="file" name="degree_document_file" class="form-control" id="degree_document_file" accept=".pdf,.doc,.docx,.xlsx,.zip,.rar">
            @if ($form->degree_document_file)
                <a href="{{ asset('storage/' . $form->degree_document_file) }}" target="_blank" class="d-block mt-2">View Uploaded Document</a>
            @endif
        </div>
    </div>
</div>

                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection