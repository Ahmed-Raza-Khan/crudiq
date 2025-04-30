@extends('forms.layout')

@section('content')

<style>
    body {
        background-color: rgb(49, 48, 48);
        color: white;
    }

    .card {
        background-color: rgba(199, 156, 156, 0.7);
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
            <h3>Create Form</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('forms.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Admission Information -->
                <div class="form-section">
                    <h3>Admission Information</h3>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="select_campus" class="form-label">Campus</label>
                            <select name="select_campus" class="form-select" id="select_campus" required>
                                <option value="" disabled selected>Select a campus</option>
                                <option value="Main Campus">Airport Campus</option>
                                <option value="City Campus">Malir Campus</option>
                                <option value="North Campus">Shah-Faisal Campus</option>
                                <option value="South Campus">Karsaz Campus</option>
                                <option value="N.I.P.A Campus">N.I.P.A Campus</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="admission_applying_for" class="form-label">Admission Applying For</label>
                            <select name="admission_applying_for" class="form-select" id="admission_applying_for" required>
                                <option value="" disabled selected>Select Admission Applying For</option>
                                <option>UG - Under Graduate Programs</option>
                                <option>AD - Associate Degree Programs</option>
                                <option>PG - Post Graduate Programs</option>
                                <option>UG - Under Graduate Programs (2.5 years)</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="program_applying_for" class="form-label">Program Applying For</label>
                            <select name="program_applying_for" class="form-select" id="program_applying_for" required>
                                <option disabled selected>Select Program Applying For</option>
                                <option>BACHELOR OF SCIENCE IN ACCOUNTING & FINANCE (2.5 Y)</option>
                                <option>BACHELOR OF BUSINESS ADMINISTRATION (2.5 Y)</option>
                                <option>BACHELOR OF SCIENCE IN DIGITAL MARKETING (2.5Y)</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="select_shift" class="form-label">Shift</label>
                            <select name="select_shift" class="form-select" id="select_shift" required>
                                <option disabled selected>Select Shift</option>
                                <option>Morning</option>
                                <option>Evening</option>
                                <option>Night</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Personal Information -->
                <div class="form-section">
                    <h3>Personal Information</h3>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter Your First Name" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter Your Last Name" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="cnic" class="form-label">CNIC</label>
                            <input type="text" name="cnic" class="form-control" id="cnic" maxlength="15" placeholder="Enter Your CNIC" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="date_of_birth" class="form-label">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" class="form-select" id="gender" required>
                                <option value="" disabled selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="religion" class="form-label">Religion</label>
                            <select name="religion" class="form-select" id="religion" required>
                                <option value="" disabled selected>Select Religion</option>
                                <option value="Islam">Islam</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="form-section">
                    <h3>Contact Information</h3>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email_address" class="form-label">Email Address</label>
                            <input type="email" name="email_address" class="form-control" id="email_address" placeholder="Enter Your Email Address" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="phone_no" class="form-label">Phone No</label>
                            <input type="text" name="phone_no" class="form-control" id="phone_no" maxlength="11" placeholder="Enter Your Phone No" required>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection