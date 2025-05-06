@extends('forms.layout')
   
@section('content')
<div class="card mt-5">
  <h2 class="card-header">Show Form Details</h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('forms.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Campus:</strong> <br/>
                {{ $iqform->select_campus }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Admission Applying For:</strong> <br/>
                {{ $iqform->admission_applying_for }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Program Applying For:</strong> <br/>
                {{ $iqform->program_applying_for }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Shift:</strong> <br/>
                {{ $iqform->select_shift }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Are You IU Graduate:</strong> <br/>
                {{ $iqform->are_you_iu_graduate ? 'Yes' : 'No' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Are You Disabled:</strong> <br/>
                {{ $iqform->are_you_disabled ? 'Yes' : 'No' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Re-Admission:</strong> <br/>
                {{ $iqform->re_admission ? 'Yes' : 'No' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Applying for Program Transfer/Migration:</strong> <br/>
                {{ $iqform->applying_for_program_transfer_migration ? 'Yes' : 'No' }}
            </div>
        </div>

        <h4 class="mt-4">Personal Information</h4>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>First Name:</strong> <br/>
                {{ $iqform->first_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Last Name:</strong> <br/>
                {{ $iqform->last_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>CNIC:</strong> <br/>
                {{ $iqform->cnic }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Date of Birth:</strong> <br/>
                {{ $iqform->date_of_birth }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Gender:</strong> <br/>
                {{ ucfirst($iqform->gender) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Religion:</strong> <br/>
                {{ $iqform->religion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Blood Group:</strong> <br/>
                {{ $iqform->blood_group }}
            </div>
        </div>

        <h4 class="mt-4">Contact Information</h4>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Email Address:</strong> <br/>
                {{ $iqform->email_address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Phone No:</strong> <br/>
                {{ $iqform->phone_no }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Mobile No:</strong> <br/>
                {{ $iqform->mobile_no }}
            </div>
        </div>

        <h4 class="mt-4">Academic Information</h4>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Degree Level:</strong> <br/>
                {{ $iqform->degree_level }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Degree:</strong> <br/>
                {{ $iqform->degree }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Specializations:</strong> <br/>
                {{ $iqform->specializations }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Institute:</strong> <br/>
                {{ $iqform->institute }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Board Roll No:</strong> <br/>
                {{ $iqform->board_roll_no }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Board:</strong> <br/>
                {{ $iqform->board_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Degree Document:</strong> <br/>
                @if ($iqform->degree_document_file)
                    <a href="{{ asset('storage/' . $iqform->degree_document_file) }}" target="_blank">View Document</a>
                @else
                    No Document Uploaded
                @endif
            </div>
        </div>
    </div>
  </div>
</div>
@endsection