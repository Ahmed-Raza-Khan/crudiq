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
            <form action="{{ route('forms.update', $iqform->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div style="border-radius: 10px; background-color: rgb(255, 255, 255); padding: 20px; color: black;" class="mb-4">
                    <h3 class="mt-3 ms-4">Admission Information:</h3>
                    <div class="row ms-3">
                        <div class="col-md-4 mb-3 ms-2">
                            <label for="select_campus" class="form-label">Campus:</label>
                            <select name="select_campus" class="form-select" id="select_campus" required>
                                <option value="Airport Campus" {{ $iqform->select_campus == 'Airport Campus' ? 'selected' : '' }}>Airport Campus</option>
                                <option value="Malir Campus" {{ $iqform->select_campus == 'Malir Campus' ? 'selected' : '' }}>Malir Campus</option>
                                <option value="Shah-Faisal Campus" {{ $iqform->select_campus == 'Shah-Faisal Campus' ? 'selected' : '' }}>Shah-Faisal Campus </option>
                                <option value="Karsaz Campus" {{ $iqform->select_campus == 'Karsaz Campus' ? 'selected' : '' }}>Karsaz Campus</option>
                                <option value="N.I.P.A Campus" {{ $iqform->select_campus == 'N.I.P.A Campus' ? 'selected' : '' }}>N.I.P.A Campus</option>
                            </select>
                        </div>

                        <div class="col-md-5 mb-3">
                            <label for="admission_applying_for" class="form-label">Admission Applying For:</label>
                            <select name="admission_applying_for" class="form-select" id="admission_applying_for" required>
                                <option value="UG - Under Graduate Programs" {{ $iqform->admission_applying_for == 'UG - Under Graduate Programs' ? 'selected' : '' }}>UG - Under Graduate Programs</option>
                                <option value="AD - Associate Degree Programs" {{ $iqform->admission_applying_for == 'AD - Associate Degree Programs' ? 'selected' : '' }}>AD - Associate Degree Programs</option>
                                <option value="PG - Post Graduate Programs" {{ $iqform->admission_applying_for == 'PG - Post Graduate Programs' ? 'selected' : '' }}>PG - Post Graduate Programs</option>
                                <option value="UG - Under Graduate Programs (2.5 years)" {{ $iqform->admission_applying_for == 'UG - Under Graduate Programs (2.5 years)' ? 'selected' : '' }}>UG - Under Graduate Programs (2.5 years)</option>
                            </select>
                        </div>

                        <div class="col-md-7 mb-3 ms-2">
                            <label for="program_applying_for" class="form-label">Program Applying For:</label>
                            <select name="program_applying_for" class="form-select" id="program_applying_for" required>
                                <option value="BACHELOR OF SCIENCE IN ACCOUNTING & FINANCE (2.5 Y)" {{ $iqform->program_applying_for == 'BACHELOR OF SCIENCE IN ACCOUNTING & FINANCE (2.5 Y)' ? 'selected' : '' }}>BACHELOR OF SCIENCE IN ACCOUNTING & FINANCE (2.5 Y)</option>
                                <option value="BACHELOR OF BUSINESS ADMINISTRATION (2.5 Y)" {{ $iqform->program_applying_for == 'BACHELOR OF BUSINESS ADMINISTRATION (2.5 Y)' ? 'selected' : '' }}>BACHELOR OF BUSINESS ADMINISTRATION (2.5 Y)</option>
                                <option value="BACHELOR OF SCIENCE IN DIGITAL MARKETING (2.5Y)" {{ $iqform->program_applying_for == 'BACHELOR OF SCIENCE IN DIGITAL MARKETING (2.5Y)' ? 'selected' : '' }}>BACHELOR OF SCIENCE IN DIGITAL MARKETING (2.5Y)</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="select_shift" class="form-label">Shift:</label>
                            <select name="select_shift" class="form-select" id="select_shift" required>
                                <option value="Morning" {{ $iqform->select_shift == 'Morning' ? 'selected' : '' }}>Morning</option>
                                <option value="Evening" {{ $iqform->select_shift == 'Evening' ? 'selected' : '' }}>Evening</option>
                                <option value="Night" {{ $iqform->select_shift == 'Night' ? 'selected' : '' }}>Night</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3 ms-2">
                            <div class="form-check form-switch">
                                <input type="checkbox" value="1" name="are_you_iu_graduate" class="form-check-input" id="are_you_iu_graduate" {{ $iqform->are_you_iu_graduate ? 'checked' : '' }}>
                                <label for="are_you_iu_graduate" class="form-label">Are You IU Graduate?</label>
                            </div>
                        </div>

                        <div class="col-md-3 mb-1">
                            <div class="form-check form-switch">
                                <input type="checkbox" value="1" name="are_you_disabled" class="form-check-input" id="are_you_disabled" {{ $iqform->are_you_disabled ? 'checked' : '' }}>
                                <label for="are_you_disabled" class="form-label">Are You Disabled?</label>
                            </div>
                        </div>

                        <div class="col-md-2 mb-3">
                            <div class="form-check form-switch">
                                <input type="checkbox" value="1" name="re_admission" class="form-check-input" id="re_admission" {{ $iqform->re_admission ? 'checked' : '' }}>
                                <label for="re_admission" class="form-label">Re-Admission</label>
                            </div>
                        </div>
                    </div>

                    <h5>________________________________________________________________________________________________________________________</h5>

                    <div class="row ms-2">
                        <h3>Program Transfer/Migration:</h3>
                        <div class="col-md-6 mb-3 ms-3">
                            <div class="form-check form-switch">
                                <input type="checkbox" value="1" name="applying_for_program_transfer_migration" class="form-check-input" id="applying_for_program_transfer_migration" {{ $iqform->applying_for_program_transfer_migration ? 'checked' : '' }}>
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
            @if ($iqform->user_profile_pic)
                <img src="{{ asset('storage/' . $iqform->user_profile_pic) }}" alt="Profile Picture" width="100" height="100" class="mt-2">
            @endif
        </div>

        <div class="col-md-3 mb-3">
            <label for="first_name" class="form-label">First Name:</label>
            <input type="text" value="{{ old('first_name', $iqform->first_name) }}" name="first_name" class="form-control" id="first_name" placeholder="Enter Your First Name" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="last_name" class="form-label">Last Name:</label>
            <input type="text" value="{{ old('last_name', $iqform->last_name) }}" name="last_name" class="form-control" id="last_name" placeholder="Enter Your Last Name" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="nationality" class="form-label">Nationality:</label>
            <select name="nationality" class="form-select" id="nationality" required>
                <option value="" disabled>Select Nationality</option>
                <option value="Pakistani" {{ $iqform->nationality == 'Pakistani' ? 'selected' : '' }}>Pakistani</option>
                <option value="Indian" {{ $iqform->nationality == 'Indian' ? 'selected' : '' }}>Indian</option>
                <option value="Afghani" {{ $iqform->nationality == 'Afghani' ? 'selected' : '' }}>Afghani</option>
                <option value="Irani" {{ $iqform->nationality == 'Irani' ? 'selected' : '' }}>Irani</option>
                <option value="Sudani" {{ $iqform->nationality == 'Sudani' ? 'selected' : '' }}>Sudani</option>
            </select>
        </div>

        <div class="col-md-4 mb-3">
            <label for="province" class="form-label">Province:</label>
            <select name="province" class="form-select" id="province" required>
                <option value="" disabled>Select Province</option>
                <option value="Sindh" {{ $iqform->province == 'Sindh' ? 'selected' : '' }}>Sindh</option>
                <option value="Punjab" {{ $iqform->province == 'Punjab' ? 'selected' : '' }}>Punjab</option>
                <option value="Balochistan" {{ $iqform->province == 'Balochistan' ? 'selected' : '' }}>Balochistan</option>
                <option value="K.P.K" {{ $iqform->province == 'K.P.K' ? 'selected' : '' }}>K.P.K</option>
                <option value="Jammmu & Azad Kahmir" {{ $iqform->province == 'Jammmu & Azad Kahmir' ? 'selected' : '' }}>Jammmu & Azad Kahmir</option>
            </select>
        </div>

        <div class="col-md-3 mb-3 me-4">
            <label for="domicile" class="form-label">Domicile:</label>
            <select name="domicile" class="form-select" id="domicile" required>
                <option value="" disabled>Select Domicile</option>
                <option value="Korangi Domicile" {{ $iqform->domicile == 'Korangi Domicile' ? 'selected' : '' }}>Korangi Domicile</option>
                <option value="Malir Halt Domicile" {{ $iqform->domicile == 'Malir Halt Domicile' ? 'selected' : '' }}>Malir Halt Domicile</option>
                <option value="N.I.P.A Domicile" {{ $iqform->domicile == 'N.I.P.A Domicile' ? 'selected' : '' }}>N.I.P.A Domicile</option>
                <option value="North Domicile" {{ $iqform->domicile == 'North Domicile' ? 'selected' : '' }}>North Domicile</option>
                <option value="Central Domicile" {{ $iqform->domicile == 'Central Domicile' ? 'selected' : '' }}>Central Domicile</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="cnic" class="form-label">CNIC:</label>
            <input type="text" value="{{ old('cnic', $iqform->cnic) }}" name="cnic" class="form-control" id="cnic" maxlength="15" placeholder="Enter Your CNIC Here" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="date_of_birth" class="form-label">Date of Birth:</label>
            <input type="date" value="{{ old('date_of_birth', $iqform->date_of_birth) }}" name="date_of_birth" class="form-control" id="date_of_birth" required>
        </div>

        <div class="col-md-3 mb-3 me-3">
            <label for="gender" class="form-label">Gender:</label>
            <select name="gender" class="form-select" id="gender" required>
                <option value="" disabled>Select Gender</option>
                <option value="male" {{ $iqform->gender == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $iqform->gender == 'female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="religion" class="form-label">Religion:</label>
            <select name="religion" class="form-select" id="religion" required>
                <option value="" disabled>Select Religion</option>
                <option value="Islam" {{ $iqform->religion == 'Islam' ? 'selected' : '' }}>Islam</option>
                <option value="Christianity" {{ $iqform->religion == 'Christianity' ? 'selected' : '' }}>Christianity</option>
                <option value="Juddism" {{ $iqform->religion == 'Juddism' ? 'selected' : '' }}>Juddism</option>
                <option value="Hindhuism" {{ $iqform->religion == 'Hindhuism' ? 'selected' : '' }}>Hindhuism</option>
                <option value="Sikhism" {{ $iqform->religion == 'Sikhism' ? 'selected' : '' }}>Sikhism</option>
                <option value="Any Other Religion" {{ $iqform->religion == 'Any Other Religion' ? 'selected' : '' }}>Any Other Religion</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="blood_group" class="form-label">Blood Group:</label>
            <select name="blood_group" class="form-select" id="blood_group" required>
                <option value="" disabled>Select Blood Group</option>
                <option value="A+ve" {{ $iqform->blood_group == 'A+ve' ? 'selected' : '' }}>A+ve</option>
                <option value="B+ve" {{ $iqform->blood_group == 'B+ve' ? 'selected' : '' }}>B+ve</option>
                <option value="O+ve" {{ $iqform->blood_group == 'O+ve' ? 'selected' : '' }}>O+ve</option>
                <option value="AB+ve" {{ $iqform->blood_group == 'AB+ve' ? 'selected' : '' }}>AB+ve</option>
                <option value="A-ve" {{ $iqform->blood_group == 'A-ve' ? 'selected' : '' }}>A-ve</option>
                <option value="B-ve" {{ $iqform->blood_group == 'B-ve' ? 'selected' : '' }}>B-ve</option>
                <option value="O-ve" {{ $iqform->blood_group == 'O-ve' ? 'selected' : '' }}>O-ve</option>
                <option value="AB-ve" {{ $iqform->blood_group == 'AB-ve' ? 'selected' : '' }}>AB-ve</option>
                <option value="Not Known" {{ $iqform->blood_group == 'Not Known' ? 'selected' : '' }}>Not Known</option>
            </select>
        </div>

        <div class="col-md-5 mb-3 me-4">
            <label for="last_institute_attended" class="form-label">Last Institute Attended:</label>
            <input type="text" value="{{ old('last_institute_attended', $iqform->last_institute_attended) }}" name="last_institute_attended" class="form-control" id="last_institute_attended" maxlength="15" placeholder="Enter Last Institute Attended" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="how_do_you_know_about_us" class="form-label">How Do You Know About Us?</label>
            <select name="how_do_you_know_about_us" class="form-select" id="how_do_you_know_about_us" required>
                <option value="Social Media" {{ $iqform->how_do_you_know_about_us == 'Social Media' ? 'selected' : '' }}>Social Media</option>
                <option value="Website" {{ $iqform->how_do_you_know_about_us == 'Website' ? 'selected' : '' }}>Website</option>
                <option value="Friend" {{ $iqform->how_do_you_know_about_us == 'Friend' ? 'selected' : '' }}>Friend</option>
                <option value="Relative" {{ $iqform->how_do_you_know_about_us == 'Relative' ? 'selected' : '' }}>Relative</option>
                <option value="Newspaper" {{ $iqform->how_do_you_know_about_us == 'Newspaper' ? 'selected' : '' }}>Newspaper</option>
                <option value="Reference" {{ $iqform->how_do_you_know_about_us == 'Reference' ? 'selected' : '' }}>Reference</option>
            </select>
        </div>
    </div>
</div>

<div style="border-radius: 10px; background-color: rgb(63 63 63); padding: 20px; color: #ffffff;" class="mb-4">
    <div class="row ms-2">
        <h3>Family Details:</h3>
        <div class="col-md-3 mb-3">
            <label for="father_name" class="form-label">Father Name:</label>
            <input type="text" value="{{ old('father_name', $iqform->father_name) }}" name="father_name" class="form-control" id="father_name" placeholder="Enter Your Father Name" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="father_status" class="form-label">Father Status:</label>
            <select name="father_status" class="form-select" id="father_status" required>
                <option value="" disabled>Select Father Status</option>
                <option value="Alive" {{ $iqform->father_status == 'Alive' ? 'selected' : '' }}>Alive</option>
                <option value="Deceased" {{ $iqform->father_status == 'Deceased' ? 'selected' : '' }}>Deceased</option>
            </select>
        </div>

        <div class="col-md-3 me-3 mb-3">
            <label for="father_cnic" class="form-label">Father CNIC:</label>
            <input type="text" value="{{ old('father_cnic', $iqform->father_cnic) }}" name="father_cnic" class="form-control" id="father_cnic" maxlength="15" placeholder="Enter Father CNIC Here" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="father_cell" class="form-label">Father Cell No:</label>
            <input type="text" value="{{ old('father_cell', $iqform->father_cell) }}" name="father_cell" class="form-control" id="father_cell" maxlength="11" placeholder="Enter Father Cell No Here" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="father_education" class="form-label">Father Education:</label>
            <select name="father_education" class="form-select" id="father_education" required>
                <option value="" disabled>Select Father Education</option>
                <option value="Matric" {{ $iqform->father_education == 'Matric' ? 'selected' : '' }}>Matric</option>
                <option value="FA/ Fsc or Equivalent" {{ $iqform->father_education == 'FA/ Fsc or Equivalent' ? 'selected' : '' }}>FA/ Fsc or Equivalent</option>
                <option value="BA/ BS or Equivalent" {{ $iqform->father_education == 'BA/ BS or Equivalent' ? 'selected' : '' }}>BA/ BS or Equivalent</option>
                <option value="M-PHIL/ MS or Equivalent" {{ $iqform->father_education == 'M-PHIL/ MS or Equivalent' ? 'selected' : '' }}>M-PHIL/ MS or Equivalent</option>
                <option value="PhD or Equivalent" {{ $iqform->father_education == 'PhD or Equivalent' ? 'selected' : '' }}>PhD or Equivalent</option>
                <option value="Not Applicable" {{ $iqform->father_education == 'Not Applicable' ? 'selected' : '' }}>Not Applicable</option>
            </select>
        </div>

        <div class="col-md-3 mb-3 me-3">
            <label for="father_profession" class="form-label">Father Profession:</label>
            <select name="father_profession" class="form-select" id="father_profession" required>
                <option value="" disabled>Select Father Profession</option>
                <option value="Male Nurse" {{ $iqform->father_profession == 'Male Nurse' ? 'selected' : '' }}>Male Nurse</option>
                <option value="Lawyer" {{ $iqform->father_profession == 'Lawyer' ? 'selected' : '' }}>Lawyer</option>
                <option value="Doctor" {{ $iqform->father_profession == 'Doctor' ? 'selected' : '' }}>Doctor</option>
                <option value="Business Man" {{ $iqform->father_profession == 'Business Man' ? 'selected' : '' }}>Business Man</option>
                <option value="Other" {{ $iqform->father_profession == 'Other' ? 'selected' : '' }}>Other</option>
                <option value="Retired" {{ $iqform->father_profession == 'Retired' ? 'selected' : '' }}>Retired</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="mother_name" class="form-label">Mother Name:</label>
            <input type="text" value="{{ old('mother_name', $iqform->mother_name) }}" name="mother_name" class="form-control" id="mother_name" placeholder="Enter Your Mother Name" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="mother_status" class="form-label">Mother Status:</label>
            <select name="mother_status" class="form-select" id="mother_status" required>
                <option value="" disabled>Select Mother Status</option>
                <option value="Alive" {{ $iqform->mother_status == 'Alive' ? 'selected' : '' }}>Alive</option>
                <option value="Deceased" {{ $iqform->mother_status == 'Deceased' ? 'selected' : '' }}>Deceased</option>
            </select>
        </div>

        <div class="col-md-3 mb-3 me-3">
            <label for="mother_cnic" class="form-label">Mother CNIC:</label>
            <input type="text" value="{{ old('mother_cnic', $iqform->mother_cnic) }}" name="mother_cnic" class="form-control" id="mother_cnic" maxlength="15" placeholder="Enter Mother CNIC Here" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="mother_cell" class="form-label">Mother Cell No:</label>
            <input type="text" value="{{ old('mother_cell', $iqform->mother_cell) }}" name="mother_cell" class="form-control" id="mother_cell" maxlength="11" placeholder="Enter Mother Cell No Here" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="mother_education" class="form-label">Mother Education:</label>
            <select name="mother_education" class="form-select" id="mother_education" required>
                <option value="" disabled>Select Mother Education</option>
                <option value="Matric" {{ $iqform->mother_education == 'Matric' ? 'selected' : '' }}>Matric</option>
                <option value="FA/ Fsc or Equivalent" {{ $iqform->mother_education == 'FA/ Fsc or Equivalent' ? 'selected' : '' }}>FA/ Fsc or Equivalent</option>
                <option value="BA/ BS or Equivalent" {{ $iqform->mother_education == 'BA/ BS or Equivalent' ? 'selected' : '' }}>BA/ BS or Equivalent</option>
                <option value="M-PHIL/ MS or Equivalent" {{ $iqform->mother_education == 'M-PHIL/ MS or Equivalent' ? 'selected' : '' }}>M-PHIL/ MS or Equivalent</option>
                <option value="PhD or Equivalent" {{ $iqform->mother_education == 'PhD or Equivalent' ? 'selected' : '' }}>PhD or Equivalent</option>
                <option value="Not Applicable" {{ $iqform->mother_education == 'Not Applicable' ? 'selected' : '' }}>Not Applicable</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="mother_profession" class="form-label">Mother Profession:</label>
            <select name="mother_profession" class="form-select" id="mother_profession" required>
                <option value="" disabled>Select Mother Profession</option>
                <option value="Male Nurse" {{ $iqform->mother_profession == 'Female Nurse' ? 'selected' : '' }}>Female Nurse</option>
                <option value="Doctor" {{ $iqform->mother_profession == 'Doctor' ? 'selected' : '' }}>Doctor</option>
                <option value="Business Women" {{ $iqform->mother_profession == 'Business Women' ? 'selected' : '' }}>Business Women</option>
                <option value="Other" {{ $iqform->mother_profession == 'Other' ? 'selected' : '' }}>Other</option>
                <option value="Retired" {{ $iqform->mother_profession == 'Retired' ? 'selected' : '' }}>Retired</option>
            </select>
        </div>

        <h5>________________________________________________________________________________________________________________________</h5>

        <div class="d-flex align-items-center mb-3">
            <h3 class="me-4 mt-3">Siblings:</h3>
            <div class="col-md-3 mb-3 me-4">
                <label for="sibiling_brother" class="form-label mt-1">Number of Brothers:</label>
                <input type="number" value="{{ old('sibiling_brother', $iqform->sibiling_brother) }}" name="sibiling_brother" class="form-control" id="sibiling_brother" placeholder="Enter Number of Brothers" min="0" required>
            </div>

            <div class="col-md-3 mb-3 me-4">
                <label for="sibiling_sister" class="form-label">Number of Sisters:</label>
                <input type="number" value="{{ old('sibiling_sister', $iqform->sibiling_sister) }}" name="sibiling_sister" class="form-control" id="sibiling_sister" placeholder="Enter Number of Sisters" min="0" required>
            </div>
        </div>
    </div>
</div>

<div style="border-radius: 10px; background-color: rgb(63 63 63); padding: 20px; color: #ffffff;" class="mb-4">
    <div class="row ms-2">
        <h3>Contact Information</h3>
        <div class="col-md-3 mb-3">
            <label for="email_address" class="form-label">Email Address:</label>
            <input type="email" value="{{ old('email_address', $iqform->email_address) }}" name="email_address" class="form-control" id="email_address" placeholder="Enter Your Email Address" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="phone_no" class="form-label">Phone No:</label>
            <input type="text" value="{{ old('phone_no', $iqform->phone_no) }}" name="phone_no" class="form-control" id="phone_no" maxlength="11" placeholder="Enter Your Phone No" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="mobile_no" class="form-label">Mobile No:</label>
            <input type="text" value="{{ old('mobile_no', $iqform->mobile_no) }}" name="mobile_no" class="form-control" id="mobile_no" maxlength="11" placeholder="Enter Your Mobile No" required>
        </div>

        <h3>Current Address</h3>
        <div class="col-md-3 mb-3">
            <label for="current_country" class="form-label">Country:</label>
            <select name="current_country" class="form-select" id="current_country" required>
                <option value="" disabled>Select Your Country</option>
                <option value="Pakistan" {{ $iqform->current_country == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                <option value="Oman" {{ $iqform->current_country == 'Oman' ? 'selected' : '' }}>Oman</option>
                <option value="Sudan" {{ $iqform->current_country == 'Sudan' ? 'selected' : '' }}>Sudan</option>
                <option value="Iran" {{ $iqform->current_country == 'Iran' ? 'selected' : '' }}>Iran</option>
                <option value="Iraq" {{ $iqform->current_country == 'Iraq' ? 'selected' : '' }}>Iraq</option>
                <option value="Syria" {{ $iqform->current_country == 'Syria' ? 'selected' : '' }}>Syria</option>
                <option value="Palestine" {{ $iqform->current_country == 'Palestine' ? 'selected' : '' }}>Palestine</option>
                <option value="Lebonon" {{ $iqform->current_country == 'Lebonon' ? 'selected' : '' }}>Lebonon</option>
                <option value="Egypt" {{ $iqform->current_country == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                <option value="Turkey" {{ $iqform->current_country == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                <option value="India" {{ $iqform->current_country == 'India' ? 'selected' : '' }}>India</option>
                <option value="Austria" {{ $iqform->current_country == 'Austria' ? 'selected' : '' }}>Austria</option>
                <option value="Afghanistan" {{ $iqform->current_country == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="current_city" class="form-label">City:</label>
            <select name="current_city" class="form-select" id="current_city" required>
                <option value="" disabled>Select Your City</option>
                <option value="Karachi" {{ $iqform->current_city == 'Karachi' ? 'selected' : '' }}>Karachi</option>
                <option value="Sakhar" {{ $iqform->current_city == 'Sakhar' ? 'selected' : '' }}>Sakhar</option>
                <option value="Hyderabad" {{ $iqform->current_city == 'Hyderabad' ? 'selected' : '' }}>Hyderabad</option>
                <option value="Lahore" {{ $iqform->current_city == 'Lahore' ? 'selected' : '' }}>Lahore</option>
                <option value="Multan" {{ $iqform->current_city == 'Multan' ? 'selected' : '' }}>Multan</option>
                <option value="Gujranwala" {{ $iqform->current_city == 'Gujranwala' ? 'selected' : '' }}>Gujranwala</option>
                <option value="Peshawar" {{ $iqform->current_city == 'Peshawar' ? 'selected' : '' }}>Peshawar</option>
                <option value="Quetta" {{ $iqform->current_city == 'Quetta' ? 'selected' : '' }}>Quetta</option>
                <option value="Kabul" {{ $iqform->current_city == 'Kabul' ? 'selected' : '' }}>Kabul</option>
                <option value="Islamabad" {{ $iqform->current_city == 'Islamabad' ? 'selected' : '' }}>Islamabad</option>
                <option value="Jhelum" {{ $iqform->current_city == 'Jhelum' ? 'selected' : '' }}>Jhelum</option>
                <option value="Ladakh" {{ $iqform->current_city == 'Ladakh' ? 'selected' : '' }}>Ladakh</option>
                <option value="Bahawalpur" {{ $iqform->current_city == 'Bahawalpur' ? 'selected' : '' }}>Bahawalpur</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="current_address" class="form-label">Current Address:</label>
            <input type="text" value="{{ old('current_address', $iqform->current_address) }}" name="current_address" class="form-control" id="current_address" placeholder="Enter Your Current Address" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="current_area" class="form-label">Current Area:</label>
            <input type="text" value="{{ old('current_area', $iqform->current_area) }}" name="current_area" class="form-control" id="current_area" placeholder="Enter Your Current Area" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="current_zip" class="form-label">Zip:</label>
            <input type="text" value="{{ old('current_zip', $iqform->current_zip) }}" name="current_zip" class="form-control" id="current_zip" maxlength="5" placeholder="Enter Your Zip Code" required>
        </div>

        <div class="col-md-3 mb-3">
            <div class="form-check form-switch">
                <input type="checkbox" value="1" name="is_same_address" class="form-check-input" id="is_same_address" {{ $iqform->is_same_address ? 'checked' : '' }}>
                <label for="is_same_address" class="form-label">Is Same Address</label>
            </div>
        </div>

        <h3>Permanent Address</h3>
        <div class="col-md-4 mb-3">
            <label for="permeneant_country" class="form-label">Permanent Country:</label>
            <select name="permeneant_country" class="form-select" id="permeneant_country" required>
                <option value="" disabled>Select Your Permanent Country</option>
                <option value="Pakistan" {{ $iqform->permeneant_country == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                <option value="Oman" {{ $iqform->permeneant_country == 'Oman' ? 'selected' : '' }}>Oman</option>
                <option value="Sudan" {{ $iqform->permeneant_country == 'Sudan' ? 'selected' : '' }}>Sudan</option>
                <option value="Iran" {{ $iqform->permeneant_country == 'Iran' ? 'selected' : '' }}>Iran</option>
                <option value="Iraq" {{ $iqform->permeneant_country == 'Iraq' ? 'selected' : '' }}>Iraq</option>
                <option value="Syria" {{ $iqform->permeneant_country == 'Syria' ? 'selected' : '' }}>Syria</option>
                <option value="Palestine" {{ $iqform->permeneant_country == 'Palestine' ? 'selected' : '' }}>Palestine</option>
                <option value="Lebonon" {{ $iqform->permeneant_country == 'Lebonon' ? 'selected' : '' }}>Lebonon</option>
                <option value="Egypt" {{ $iqform->permeneant_country == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                <option value="Turkey" {{ $iqform->permeneant_country == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                <option value="India" {{ $iqform->permeneant_country == 'India' ? 'selected' : '' }}>India</option>
                <option value="Austria" {{ $iqform->permeneant_country == 'Austria' ? 'selected' : '' }}>Austria</option>
                <option value="Afghanistan" {{ $iqform->permeneant_country == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
            </select>
        </div>

        <div class="col-md-4 mb-3">
            <label for="permeneant_city" class="form-label">Permanent City:</label>
            <select name="permeneant_city" class="form-select" id="permeneant_city" required>
                <option value="" disabled>Select Your Permanent City</option>
                <option value="Karachi" {{ $iqform->permeneant_city == 'Karachi' ? 'selected' : '' }}>Karachi</option>
                <option value="Sakhar" {{ $iqform->permeneant_city == 'Sakhar' ? 'selected' : '' }}>Sakhar</option>
                <option value="Hyderabad" {{ $iqform->permeneant_city == 'Hyderabad' ? 'selected' : '' }}>Hyderabad</option>
                <option value="Lahore" {{ $iqform->permeneant_city == 'Lahore' ? 'selected' : '' }}>Lahore</option>
                <option value="Multan" {{ $iqform->permeneant_city == 'Multan' ? 'selected' : '' }}>Multan</option>
                <option value="Gujranwala" {{ $iqform->permeneant_city == 'Gujranwala' ? 'selected' : '' }}>Gujranwala</option>
                <option value="Peshawar" {{ $iqform->permeneant_city == 'Peshawar' ? 'selected' : '' }}>Peshawar</option>
                <option value="Quetta" {{ $iqform->permeneant_city == 'Quetta' ? 'selected' : '' }}>Quetta</option>
                <option value="Kabul" {{ $iqform->permeneant_city == 'Kabul' ? 'selected' : '' }}>Kabul</option>
                <option value="Islamabad" {{ $iqform->permeneant_city == 'Islamabad' ? 'selected' : '' }}>Islamabad</option>
                <option value="Jhelum" {{ $iqform->permeneant_city == 'Jhelum' ? 'selected' : '' }}>Jhelum</option>
                <option value="Ladakh" {{ $iqform->permeneant_city == 'Ladakh' ? 'selected' : '' }}>Ladakh</option>
                <option value="Bahawalpur" {{ $iqform->permeneant_city == 'Bahawalpur' ? 'selected' : '' }}>Bahawalpur</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="permeneant_address" class="form-label">Permanent Address:</label>
            <input type="text" value="{{ old('permeneant_address', $iqform->permeneant_address) }}" name="permeneant_address" class="form-control" id="permeneant_address" placeholder="Enter Your Permanent Address" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="permeneant_area" class="form-label">Permanent Area:</label>
            <input type="text" value="{{ old('permeneant_area', $iqform->permeneant_area) }}" name="permeneant_area" class="form-control" id="permeneant_area" placeholder="Enter Your Permanent Area" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="permeneant_zip" class="form-label">Zip:</label>
            <input type="text" value="{{ old('permeneant_zip', $iqform->permeneant_zip) }}" name="permeneant_zip" class="form-control" id="permeneant_zip" maxlength="5" placeholder="Enter Your Zip Code" required>
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
                <option value="Secondary School Certificate" {{ $iqform->degree_level == 'Secondary School Certificate' ? 'selected' : '' }}>Secondary School Certificate</option>
                <option value="Higher Secondary-School Certificate" {{ $iqform->degree_level == 'Higher Secondary-School Certificate' ? 'selected' : '' }}>Higher Secondary-School Certificate</option>
                <option value="UnderGraduate - 14 Years" {{ $iqform->degree_level == 'UnderGraduate - 14 Years' ? 'selected' : '' }}>UnderGraduate - 14 Years</option>
                <option value="UnderGraduate - 16 Years" {{ $iqform->degree_level == 'UnderGraduate - 16 Years' ? 'selected' : '' }}>UnderGraduate - 16 Years</option>
                <option value="Graduate - 18 Years" {{ $iqform->degree_level == 'Graduate - 18 Years' ? 'selected' : '' }}>Graduate - 18 Years</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="degree" class="form-label">Degree:</label>
            <select name="degree" class="form-select" id="degree" required>
                <option value="" disabled>Select Degree</option>
                <option value="MS/M.Phil" {{ $iqform->degree == 'MS/M.Phil' ? 'selected' : '' }}>MS/M.Phil</option>
                <option value="MBA" {{ $iqform->degree == 'MBA' ? 'selected' : '' }}>MBA</option>
                <option value="B.Edu (18 years)" {{ $iqform->degree == 'B.Edu (18 years)' ? 'selected' : '' }}>B.Edu (18 years)</option>
                <option value="Matric" {{ $iqform->degree == 'Matric' ? 'selected' : '' }}>Matric</option>
            </select>
        </div>

        <div class="col-md-5 mb-3">
            <label for="specializations" class="form-label">Specializations:</label>
            <select name="specializations" class="form-select" id="specializations" required>
                <option value="" disabled>Select Specializations</option>
                <option value="Computing Sciences" {{ $iqform->specializations == 'Computing Sciences' ? 'selected' : '' }}>Computing Sciences</option>
                <option value="Education" {{ $iqform->specializations == 'Education' ? 'selected' : '' }}>Education</option>
                <option value="Public Administration" {{ $iqform->specializations == 'Public Administration' ? 'selected' : '' }}>Public Administration</option>
                <option value="Commerce" {{ $iqform->specializations == 'Commerce' ? 'selected' : '' }}>Commerce</option>
                <option value="Media Studies" {{ $iqform->specializations == 'Media Studies' ? 'selected' : '' }}>Media Studies</option>
                <option value="Management Sciences" {{ $iqform->specializations == 'Management Sciences' ? 'selected' : '' }}>Management Sciences</option>
                <option value="DESIGN MARKETING & MERCHANDIZING" {{ $iqform->specializations == 'DESIGN MARKETING & MERCHANDIZING' ? 'selected' : '' }}>DESIGN MARKETING & MERCHANDIZING</option>
                <option value="English" {{ $iqform->specializations == 'English' ? 'selected' : '' }}>English</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="select_passing_year" class="form-label">Passing Year:</label>
            <select name="select_passing_year" class="form-select" id="select_passing_year" required>
                <option value="" disabled>Select Passing Year</option>
                <option value="2025" {{ $iqform->select_passing_year == '2025' ? 'selected' : '' }}>2025</option>
                <option value="2024" {{ $iqform->select_passing_year == '2024' ? 'selected' : '' }}>2024</option>
                <option value="2023" {{ $iqform->select_passing_year == '2023' ? 'selected' : '' }}>2023</option>
                <option value="2022" {{ $iqform->select_passing_year == '2022' ? 'selected' : '' }}>2022</option>
                <option value="2021" {{ $iqform->select_passing_year == '2021' ? 'selected' : '' }}>2021</option>
                <option value="2020" {{ $iqform->select_passing_year == '2020' ? 'selected' : '' }}>2020</option>
                <option value="2019" {{ $iqform->select_passing_year == '2019' ? 'selected' : '' }}>2019</option>
                <option value="2018" {{ $iqform->select_passing_year == '2018' ? 'selected' : '' }}>2018</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="select_result_status" class="form-label">Result Status:</label>
            <select name="select_result_status" class="form-select" id="select_result_status" required>
                <option value="" disabled>Select Result Status</option>
                <option value="Waiting" {{ $iqform->select_result_status == 'Waiting' ? 'selected' : '' }}>Waiting</option>
                <option value="Declared" {{ $iqform->select_result_status == 'Declared' ? 'selected' : '' }}>Declared</option>
            </select>
        </div>

        <div class="col-md-2 mb-3">
            <label for="total_marks" class="form-label">Total Marks:</label>
            <input type="number" value="{{ old('total_marks', $iqform->total_marks) }}" name="total_marks" class="form-control" id="total_marks" min="0" max="400" required>
        </div>

        <div class="col-md-2 mb-3">
            <label for="obtained_marks" class="form-label">Obtained Marks:</label>
            <input type="number" value="{{ old('obtained_marks', $iqform->obtained_marks) }}" name="obtained_marks" class="form-control" id="obtained_marks" min="0" max="400" required>
        </div>

        <div class="col-md-2 mb-3">
            <label for="percentage" class="form-label">Percentage:</label>
            <input type="number" value="{{ old('percentage', $iqform->percentage) }}" name="percentage" class="form-control" id="percentage" step="0.01" max="100" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="institute" class="form-label">Institute:</label>
            <input type="text" value="{{ old('institute', $iqform->institute) }}" name="institute" class="form-control" id="institute" placeholder="Enter Your Institute Name" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="board_roll_no" class="form-label">Board Roll No:</label>
            <input type="text" value="{{ old('board_roll_no', $iqform->board_roll_no) }}" name="board_roll_no" class="form-control" id="board_roll_no" maxlength="7" placeholder="Enter Your Board Roll-No" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="board_name" class="form-label">Board:</label>
            <select name="board_name" class="form-select" id="board_name" required>
                <option value="" disabled>Select Board</option>
                <option value="Sindh Board of Technical Education (SBTE), Karachi" {{ $iqform->board_name == 'Sindh Board of Technical Education (SBTE), Karachi' ? 'selected' : '' }}>Sindh Board of Technical Education (SBTE), Karachi</option>
                <option value="Ziauddin board" {{ $iqform->board_name == 'Ziauddin board' ? 'selected' : '' }}>Ziauddin board</option>
                <option value="BIEK, Karachi" {{ $iqform->board_name == 'BIEK, Karachi' ? 'selected' : '' }}>BIEK, Karachi</option>
                <option value="Sindh Nurses Examination Board Karachi" {{ $iqform->board_name == 'Sindh Nurses Examination Board Karachi' ? 'selected' : '' }}>Sindh Nurses Examination Board Karachi</option>
                <option value="IBCC" {{ $iqform->board_name == 'IBCC' ? 'selected' : '' }}>IBCC</option>
                <option value="BISE, Karachi" {{ $iqform->board_name == 'BISE, Karachi' ? 'selected' : '' }}>BISE, Karachi</option>
                <option value="Aga Khan Board, Karachi" {{ $iqform->board_name == 'Aga Khan Board, Karachi' ? 'selected' : '' }}>Aga Khan Board, Karachi</option>
            </select>
        </div>

        <div class="col-md-5 mb-3">
            <label for="degree_document_file" class="form-label">Degree Document:</label>
            <input type="file" name="degree_document_file" class="form-control" id="degree_document_file" accept=".pdf,.doc,.docx,.xlsx,.zip,.rar">
            @if ($iqform->degree_document_file)
                <a href="{{ asset('storage/' . $iqform->degree_document_file) }}" target="_blank" class="d-block mt-2">View Uploaded Document</a>
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