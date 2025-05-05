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
                {{ $forms->select_campus }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Admission Applying For:</strong> <br/>
                {{ $forms->admission_applying_for }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Program Applying For:</strong> <br/>
                {{ $forms->program_applying_for }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Shift:</strong> <br/>
                {{ $forms->select_shift }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Are You IU Graduate:</strong> <br/>
                {{ $forms->are_you_iu_graduate ? 'Yes' : 'No' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Are You Disabled:</strong> <br/>
                {{ $forms->are_you_disabled ? 'Yes' : 'No' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Re-Admission:</strong> <br/>
                {{ $forms->re_admission ? 'Yes' : 'No' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Applying for Program Transfer/Migration:</strong> <br/>
                {{ $forms->applying_for_program_transfer_migration ? 'Yes' : 'No' }}
            </div>
        </div>

        <h4 class="mt-4">Personal Information</h4>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>First Name:</strong> <br/>
                {{ $forms->first_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Last Name:</strong> <br/>
                {{ $forms->last_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>CNIC:</strong> <br/>
                {{ $forms->cnic }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Date of Birth:</strong> <br/>
                {{ $forms->date_of_birth }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Gender:</strong> <br/>
                {{ ucfirst($forms->gender) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Religion:</strong> <br/>
                {{ $forms->religion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Blood Group:</strong> <br/>
                {{ $forms->blood_group }}
            </div>
        </div>

        <h4 class="mt-4">Contact Information</h4>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Email Address:</strong> <br/>
                {{ $forms->email_address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Phone No:</strong> <br/>
                {{ $forms->phone_no }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Mobile No:</strong> <br/>
                {{ $forms->mobile_no }}
            </div>
        </div>

        <h4 class="mt-4">Academic Information</h4>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Degree Level:</strong> <br/>
                {{ $forms->degree_level }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Degree:</strong> <br/>
                {{ $forms->degree }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Specializations:</strong> <br/>
                {{ $forms->specializations }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Institute:</strong> <br/>
                {{ $forms->institute }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Board Roll No:</strong> <br/>
                {{ $forms->board_roll_no }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Board:</strong> <br/>
                {{ $forms->board_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Degree Document:</strong> <br/>
                @if ($forms->degree_document_file)
                    <a href="{{ asset('storage/' . $forms->degree_document_file) }}" target="_blank">View Document</a>
                @else
                    No Document Uploaded
                @endif
            </div>
        </div>
    </div>
  </div>
</div>
@endsection