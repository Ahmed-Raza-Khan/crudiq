@extends('forms.layout')

@section('content')

<style>
    body{
        background-color:rgb(49, 48, 48);
        color: white;
    }

    .card{
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
            <h3>Admission Form</h3>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm me-3 mt-3" href="{{ route('forms.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <div class="card-body">
            <form action="{{ route('forms.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

    <div style="border-radius: 10px; background-color: rgb(255, 255, 255); padding: 20px; color: black;" class="mb-4">
                <h3 class="mt-3 ms-4">Admission Information:</h3>
            <div class="row ms-3">
                <div class="col-md-4 mb-3 ms-2">
                    <label for="select_campus" class="form-label">Campus:</label>
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
                    <label for="admission_applying_for" class="form-label">Admission Applying For:</label>
                    <select name="admission_applying_for" class="form-select" id="admission_applying_for" required>
                        <option value="" disabled selected>Select a Admission Applying For</option>
                        <option>UG - Under Graduate Programs</option>
                        <option>AD - Associate Degree Programs</option>
                        <option>PG - Post Graduate Programs</option>
                        <option>UG - Under Graduate Programs (2.5 years)</option>
                    </select>
                </div>

                <div class="col-md-7 mb-3 ms-2">
                    <label for="program_applying_for" class="form-label">Program Applying For:</label>
                    <select name="program_applying_for" class="form-select" id="program_applying_for" required>
                        <option disabled selected>Select a Program Applying For</option>
                        <option>BACHELOR OF SCIENCE IN ACCOUNTING & FINANCE (2.5 Y)</option>
                        <option>BACHELOR OF BUSINESS ADMINISTRATION (2.5 Y)</option>
                        <option>BACHELOR OF SCIENCE IN DIGITAL MARKETING (2.5Y)</option>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="select_shift" class="form-label">Shift:</label>
                    <select name="select_shift" class="form-select" id="select_shift" required>
                        <option disabled selected>Select Shift</option>
                        <option>Morning</option>
                        <option>Evening</option>
                        <option>Night</option>
                    </select>
                </div>

                
                <div class="col-md-3 mb-3 ms-2">
                    <div class="form-check form-switch">
                        <input type="checkbox" value="{{ old('are_you_iu_graduate') }}" name="are_you_iu_graduate" class="form-check-input" id="are_you_iu_graduate" required>
                        <label for="are_you_iu_graduate" class="form-label">Are You IU Graduate?</label>
                    </div>
                </div>

                <div class="col-md-3 mb-1">
                    <div class="form-check form-switch">
                        <input type="checkbox" value="{{ old('are_you_disabled') }}" name="are_you_disabled" class="form-check-input" id="are_you_disabled" required>
                        <label for="are_you_disabled" class="form-label">Are You Disabled?</label>
                    </div>
                </div>

                <div class="col-md-2 mb-3">
                    <div class="form-check form-switch">
                        <input type="checkbox" value="{{ old('re_admission') }}" name="re_admission" class="form-check-input" id="re_admission" required>
                        <label for="re_admission" class="form-label">Re-Admission</label>
                    </div>
                </div>
            </div>

            <h5>________________________________________________________________________________________________________________________</h5>

            <div class="row ms-2">
                <h3>Program Transfer/Migration:</h3>
                    <div class="col-md-6 mb-3 ms-3  ">
                        <div class="form-check form-switch">
                        <input type="checkbox" value="{{ old('applying_for_program_transfer_migration') }}" name="applying_for_program_transfer_migration" class="form-check-input" id="applying_for_program_transfer_migration" required>
                        <label for="applying_for_program_transfer_migration" class="form-label">Applying for Program Transfer/Migration</label>
                        </div>    
                    </div>
            </div>
</div>

<div style="border-radius: 10px; background-color: rgb(255, 255, 255); padding: 20px; color: black;" class="mb-4">
<div class="row ms-2">
                <h3>Personal Information</h3>
                    <div class="col-md-4 mb-3">
                        <label for="user_profile_pic" class="form-label"><strong>User Profile Picture:</strong></label>
                        <input type="file" value="{{ old('user_profile_pic') }}" id="user_profile_pic" name="user_profile_pic" accept="image/*" class="form-control" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="first_name" class="form-label">First Name:</label>
                        <input type="text" value="{{ old('first_name') }}" name="first_name" class="form-control" id="first_name" placeholder="Enter Your First Name" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="last_name" class="form-label">Last Name:</label>
                        <input type="text" value="{{ old('last_name') }}" name="last_name" class="form-control" id="last_name" placeholder="Enter Your Last Name" required>
                    </div>

                <div class="col-md-3 mb-3">
                    <label for="nationality" class="form-label">Nationality:</label>
                    <select name="nationality" value="{{ old('nationality') }}" class="form-select" id="nationality" required>
                        <option value="" disabled selected>Select Nationality</option>
                        <option value="Pakistani">Pakistani</option>
                        <option value="Indian">Indian</option>
                        <option value="Afghani">Afghani</option>
                        <option value="Irani">Irani</option>
                        <option value="Sudani">Sudani</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="province" class="form-label">Province:</label>
                    <select name="province" class="form-select" id="province" required>
                        <option value="" disabled selected>Select Province</option>
                        <option value="Pakistani">Sindh</option>
                        <option value="Indian">Punjab</option>
                        <option value="Afghani">Balochistan</option>
                        <option value="Irani">K.P.K</option>
                        <option value="Sudani">Jammmu & Azad Kahmir</option>
                    </select>
                </div>

                <div class="col-md-3 mb-3 me-4">
                    <label for="domicile" class="form-label">Domicile:</label>
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
                        <label for="cnic" class="form-label">CNIC:</label>
                        <input type="text" value="{{ old('cnic') }}" name="cnic" class="form-control" id="cnic" maxlength="15" placeholder="Enter Your Cnic Here" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="date_of_birth" class="form-label">Date of Birth:</label>
                        <input type="date" value="{{ old('date_of_birth') }}" name="date_of_birth" class="form-control" id="date_of_birth" required>
                    </div>

                    <div class="col-md-3 mb-3 me-3">
                        <label for="gender" class="form-label">Gender:</label>
                        <select name="gender" class="form-select" id="gender" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="religion" class="form-label">Religion:</label>
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
                        <label for="blood_group" class="form-label">Blood Group:</label>
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

                    <div class="col-md-5 mb-3 me-4">
                        <label for="last_institute_attended" class="form-label">Last Institute Attended:</label>
                        <input type="text" value="{{ old('last_institute_attended') }}" name="last_institute_attended" class="form-control" id="last_institute_attended" maxlength="15" value="None" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="how_do_you_know_about_us" class="form-label">How Do You Known About Us?</label>
                        <select name="how_do_you_know_about_us" value="{{ old('how_do_you_know_about_us') }}" class="form-select" id="how_do_you_know_about_us" required> 
                            <option value="Social Media">Social Media</option>
                            <option value="Website">Website</option>
                            <option value="Friend">Friend</option>
                            <option value="Relative">Relative</option>
                            <option value="Newspaper">Newspaper</option>
                            <option value="Reference" selected>Reference</option>
                        </select>
                    </div>
</div>
</div>

<div style="border-radius: 10px; background-color: rgb(255, 255, 255); padding: 20px; color: black;" class="mb-4">
<div class="row ms-2">
                    <h3>Family Details:</h3>
                    <div class="col-md-3 mb-3">
                        <label for="father_name" class="form-label">Father Name:</label>
                        <input type="text" value="{{ old('father_name') }}" name="father_name" class="form-control" id="father_name" placeholder="Enter Your Father Name" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="father_status" class="form-label">Father Status:</label>
                        <select name="father_status" value="{{ old('father_status') }}" class="form-select" id="father_status" required>
                            <option value="Select Father Status" disabled selected>Select Father Status</option>
                            <option value="Alive">Alive</option>
                            <option value="Deceased">Deceased</option>
                        </select>
                    </div>

                    <div class="col-md-3 me-3 mb-3">
                        <label for="father_cnic" value="{{ old('father_cnic') }}" class="form-label">Father Cnic:</label>
                        <input type="text" name="father_cnic" class="form-control" id="father_cnic" maxlength="15" placeholder="Enter Father Cnic-no Here" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="father_cell" value="{{ old('father_cell') }}" class="form-label">Father Cell No:</label>
                        <input type="text" name="father_cell" class="form-control" id="father_cell" maxlength="11" placeholder="Enter Father Cell-no Here" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="father_education" class="form-label">Father Education:</label>
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

                    <div class="col-md-3 mb-3 me-3">
                        <label for="father_profession" class="form-label">Father Profession:</label>
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
                        <label for="mother_name" class="form-label">Mother Name:</label>
                        <input type="text" value="{{ old('mother_name') }}" name="mother_name" class="form-control" id="mother_name" placeholder="Enter Your Mother Name" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="mother_status" class="form-label">Mother Status:</label>
                        <select name="mother_status" class="form-select" id="mother_status" required>
                            <option value="Select Father Status" disabled selected>Select Mother Status</option>
                            <option value="Alive">Alive</option>
                            <option value="Deceased">Deceased</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3 me-3">
                        <label for="mother_cnic" class="form-label">Mother Cnic:</label>
                        <input type="text" value="{{ old('mother_cnic') }}" name="mother_cnic" class="form-control" id="mother_cnic" maxlength="15" placeholder="Enter Mother Cnic-no Here" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="mother_cell" class="form-label">Mother Cell No:</label>
                        <input type="text" value="{{ old('mother_cell') }}" name="mother_cell" class="form-control" id="mother_cell" maxlength="11" placeholder="Enter Mother Cell-No " required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="mother_education" class="form-label">Mother Education:</label>
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
                        <label for="mother_profession" class="form-label">Mother Profession:</label>
                        <select name="mother_profession" class="form-select" id="mother_profession" required>
                            <option value="Select Mother Education" disabled selected>Select Mother Profession</option>
                            <option value="Male Nurse">MaleFemaleer</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Business Man">Business Women</option>
                            <option value="Other">Other</option>
                            <option value="Retired">Retired</option>
                        </select>
                    </div>

                    <h5>________________________________________________________________________________________________________________________</h5>
                    
                    <div class="d-flex align-items-center mb-3">
                        <h3 class="me-4 mt-3">Sibilings:</h3>
                            <div class="col-md-3 mb-3 me-4">
                                <label for="sibiling_brother" class="form-label mt-1">Number of Brothers:</label>
                                <input type="number" value="{{ old('sibiling_brother') }}" name="sibiling_brother" class="form-control" id="sibiling_brother" placeholder="Enter Number of Brothers" min="0" required>
                            </div>

                            <div class="col-md-3 mb-3 me-4">
                                <label for="sibiling_sister" class="form-label">Number of Sisters:</label>
                                <input type="number" value="{{ old('sibiling_sister') }}" name="sibiling_sister" class="form-control" id="sibiling_sister" placeholder="Enter Number of Sisters" min="0" required>
                            </div>
                    </div>
</div>
</div>

<div style="border-radius: 10px; background-color: rgb(255, 255, 255); padding: 20px; color: black;" class="mb-4">
<div class="row ms-2">
                    <h3>Contact Information</h3>
                    <div class="col-md-3 mb-3">
                        <label for="email_address" class="form-label">Email Address:</label>
                        <input type="email" value="{{ old('email_address') }}" name="email_address" class="form-control" id="email_address" placeholder="Enter Your Email Address" required>   
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="phone_no" class="form-label">Phone No:</label>
                        <input type="text" value="{{ old('phone_no') }}" name="phone_no" class="form-control" id="phone_no" maxlength="11" placeholder="Enter Your Phone-no " required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="mobile_no" class="form-label">Mobile No:</label>
                        <input type="text" value="{{ old('mobile_no') }}" name="mobile_no" class="form-control" id="mobile_no" maxlength="11" placeholder="Enter Your Mobile-no " required>
                    </div>

                    <h3>Current Address</h3>
                        <div class="col-md-3 mb-3">
                            <label for="current_country" class="form-label">Country:</label>
                            <select name="current_country" class="form-select" id="current_country" required>
                                <option value="" disabled selected>Select Your Country</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Oman">Oman</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Syria">Syria</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Lebonon">Lebonon</option>
                                <option value="Egypt">Egypt</option>
                                <option value="Turkey">Turkey</option>
                                <option value="India">India</option>
                                <option value="Austria">Austria</option>
                                <option value="Afghanistan">Afghanistan</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="current_city" class="form-label">City:</label>
                            <select name="current_city" class="form-select" id="current_city" required>
                                <option value="" disabled selected>Select Your City</option>
                                <option value="Karachi">Karachi</option>
                                <option value="Sakhar">Sakhar</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Lahore">Lahore</option>
                                <option value="Multan">Multan</option>
                                <option value="Gujranwala">Gujranwala</option>
                                <option value="Peshawar">Peshawar</option>
                                <option value="Quetta">Quetta</option>
                                <option value="Kabul">Kabul</option>
                                <option value="Islamabad">Islamabad</option>
                                <option value="Jhelum">Jhelum</option>
                                <option value="Ladakh">Ladakh</option>
                                <option value="Bahawalpur">Bahawalpur</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="current_address" class="form-label">Current Address:</label>
                            <input type="text" value="{{ old('current_address') }}" name="current_address" class="form-control" id="current_address" placeholder="Enter Your Current Address" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="current_area" class="form-label">Current Area:</label>
                            <input type="text" value="{{ old('current_area') }}" name="current_area" class="form-control" id="current_area" placeholder="Enter Your Current Area" required>
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="current_zip" class="form-label">Zip:</label>
                            <input type="text" value="{{ old('current_zip') }}" name="current_zip" class="form-control" id="current_zip" maxlength="5" placeholder="Enter Your Zip Code" required>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-check form-switch">
                                <input type="checkbox" value="{{ old('is_ame_address') }}" name="is_ame_address" class="form-check-input" id="is_ame_address" required>
                                <label for="is_ame_address" class="form-label">Is Same Address</label>
                            </div>
                        </div>

                    <h3>Permanent Address</h3>
                        <div class="col-md-4 mb-3">
                            <label for="permeneant_country" class="form-label">Permanent Country:</label>
                            <select name="permeneant_country" class="form-select" id="permeneant_country" required>
                                <option value="" disabled selected>Select Your Permanent Country</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Oman">Oman</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Syria">Syria</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Lebonon">Lebonon</option>
                                <option value="Egypt">Egypt</option>
                                <option value="Turkey">Turkey</option>
                                <option value="India">India</option>
                                <option value="Austria">Austria</option>
                                <option value="Afghanistan">Afghanistan</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="permeneant_city" class="form-label">Permeneant City:</label>
                            <select name="permeneant_city" class="form-select" id="permeneant_city" required>
                                <option value="" disabled selected>Select Your Permeneant City</option>
                                <option value="Karachi">Karachi</option>
                                <option value="Sakhar">Sakhar</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Lahore">Lahore</option>
                                <option value="Multan">Multan</option>
                                <option value="Gujranwala">Gujranwala</option>
                                <option value="Peshawar">Peshawar</option>
                                <option value="Quetta">Quetta</option>
                                <option value="Kabul">Kabul</option>
                                <option value="Islamabad">Islamabad</option>
                                <option value="Jhelum">Jhelum</option>
                                <option value="Ladakh">Ladakh</option>
                                <option value="Bahawalpur">Bahawalpur</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="permeneant_address" class="form-label">Permeneant Address:</label>
                            <input type="text" value="{{ old('permeneant_address') }}" name="permeneant_address" class="form-control" id="permeneant_address" placeholder="Enter Your Permeneant Address" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="permeneant_area" class="form-label">Permeneant Area:</label>
                            <input type="text" value="{{ old('permeneant_area') }}" name="permeneant_area" class="form-control" id="permeneant_area" placeholder="Enter Your Permeneant Area" required>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="permeneant_zip" class="form-label">Zip</label>
                            <input type="text" value="{{ old('permeneant_zip') }}" name="permeneant_zip" class="form-control" id="permeneant_zip" maxlength="5" placeholder="Enter Your Zip-Code" required>
                        </div>
</div>
</div>

                                    <div style="border-radius: 10px; background-color: rgb(255, 255, 255); padding: 20px; color: black;" class="mb-4">
                                    <div class="row ms-2">
                    <h3>Academic Information</h3>
                        <div class="col-md-4 mb-3">
                            <label for="degree_level" class="form-label">Degree Level:</label>
                            <select name="degree_level" class="form-select" id="degree_level" required>
                                <option value="" disabled selected>Select Degree Level</option>
                                <option value="Secondary School Certificate">Secondary School Certificate</option>
                                <option value="Higher Secondary-School Certificate">Higher Secondary-School Certificate</option>
                                <option value="UnderGraduate - 14 Years">UnderGraduate - 14 Years</option>
                                <option value="UnderGraduate - 16 Years">UnderGraduate - 16 Years</option>
                                <option value="Graduate - 18 Years">Graduate - 18 Years</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="degree" class="form-label">Degree:</label>
                            <select name="degree" class="form-select" id="degree" required>
                                <option value="" disabled selected>Select Degree</option>
                                <option value="MS/M.Phil">MS/M.Phil</option>
                                <option value="MBA">MBA</option>
                                <option value="B.Edu (18 years)">B.Edu (18 years)</option>
                                <option value="Matric">Matric</option>
                            </select>
                        </div>

                        <div class="col-md-5 mb-3">
                            <label for="specializations" class="form-label">Specializations:</label>
                            <select name="specializations" class="form-select" id="specializations" required>
                                <option value="" disabled selected>Select Specializations</option>
                                <option value="Computing Sciences">Computing Sciences</option>
                                <option value="Education">Education</option>
                                <option value="Public Administration">Public Administration</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Media Studies">Media Studies</option>
                                <option value="Management Sciences">Management Sciences</option>
                                <option value="DESIGN MARKETING & MERCHANDIZING">DESIGN MARKETING & MERCHANDIZING</option>
                                <option value="English">English</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="select_passing_year" class="form-label">Passing Year:</label>
                            <select name="select_passing_year" class="form-select" id="select_passing_year" required>
                                <option value="" disabled selected>Select Passing Year</option>
                                <option value="2025">2025</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="select_result_status" class="form-label">Result Status:</label>
                            <select name="select_result_status" class="form-select" id="select_result_status" required>
                                <option value="" disabled selected>Select Result Status</option>
                                <option value="Waiting">Waiting</option>
                                <option value="Declared">Declared</option>
                            </select>
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="total_marks" class="form-label">Total Marks</label>
                            <input type="number" value="{{ old('total_marks') }}" name="total_marks" class="form-control" id="total_marks" min="0" max="400" required>
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="obtained_marks" class="form-label">Obtained Marks</label>
                            <input type="number" value="{{ old('obtained_marks') }}" name="obtained_marks" class="form-control" id="obtained_marks" min="0" max="400" required>
                        </div>

                    <div class="col-md-2 mb-3">
                        <label for="percentage" class="form-label">Percentage</label>
                        <input type="number" value="{{ old('percentage') }}" name="percentage" class="form-control" id="percentage" step="0.01" max="100" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="institute" class="form-label">Institute</label>
                        <input type="text" value="{{ old('institute') }}" name="institute" class="form-control" id="institute" placeholder="Enter Your Institute Name" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="board_roll_no" class="form-label">Board Roll No</label>
                        <input type="text" value="{{ old('board_roll_no') }}" name="board_roll_no" class="form-control" id="board_roll_no" maxlength="7" placeholder="Enter Your Board Roll-No" required>
                    </div>

                    <div class="col-md-6 mb-3">
                            <label for="board_name" class="form-label">Board</label>
                            <select name="board_name" class="form-select" id="board_name" required>
                                <option value="" disabled selected>Select Board</option>
                                <option value="Sindh Board of Technical Education (SBTE), Karachi">Sindh Board of Technical Education (SBTE), Karachi</option>
                                <option value="Ziauddin board">Ziauddin board</option>
                                <option value="BIEK, Karachi">BIEK, Karachi</option>
                                <option value="Sindh Nurses Examination Board Karachi">Sindh Nurses Examination Board Karachi</option>
                                <option value="IBCC">IBCC</option>
                                <option value="BISE, Karachi">BISE, Karachi</option>
                                <option value="Aga Khan Board, Karachi">Aga Khan Board, Karachi</option>
                            </select>
                        </div>

                        <div class="col-md-5 mb-3">
                            <label for="degree_document_file" class="form-label">Degree Document</label>
                            <input type="file" value="{{ old('degree_document_file') }}" name="degree_document_file" class="form-control" id="degree_document_file" accept=".pdf,.doc,.docx,.xlsx,.zip,.rar" required>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                        </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection