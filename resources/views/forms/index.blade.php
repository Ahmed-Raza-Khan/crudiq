@extends('forms.layout')
     
@section('content')
<div class="card mt-5">
  <h2 class="card-header text-center">Laravel 11 CRUD with Image Upload</h2>
  <div class="card-body">
  
        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession
  
    <div class="d-flex justify-content-end mb-3">
        <a class="btn btn-success btn-sm" href="{{ route('forms.create') }}">
            <i class="fa fa-plus"></i> Create New Form
        </a>
    </div>
  
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark text-center">
                <tr>
                    <th style="width: 50px;">Campus</th>
                    <th style="width: 150px;">Admission Applying For</th>
                    <th style="width: 300px;">Program Applying For</th>
                    <th style="width: 300px;">Shift</th>
                    <th style="width: 200px;">Are You IU Graduate</th>
                    <th style="width: 120px;">Are You Disabled</th>
                    <th style="width: 200px;">Re-Admission</th>
                    <th style="width: 150px;">Program Transfer/Migration</th>
                    <th style="width: 150px;">User Profile Picture</th>
                    <th style="width: 120px;">First Name</th>
                    <th style="width: 100px;">Last Name</th>
                    <th style="width: 150px;">Nationality</th>
                    <th style="width: 150px;">Province</th>
                    <th style="width: 150px;">Domicile</th>
                    <th style="width: 200px;">CNIC</th>
                    <th style="width: 150px;">Date of Birth</th>
                    <th style="width: 150px;">Gender</th>
                    <th style="width: 200px;">Religion</th>
                    <th style="width: 150px;">Blood Group</th>
                    <th style="width: 150px;">Last Institute Attended</th>
                    <th style="width: 250px;">How Do You Known About U1s</th>
                    <th style="width: 250px;">Father Name</th>
                    <th style="width: 250px;">Father Status</th>
                    <th style="width: 250px;">Father Cnic</th>
                    <th style="width: 250px;">Father Cell No</th>
                    <th style="width: 250px;">Father Education</th>
                    <th style="width: 250px;">Father Profession</th>
                    <th style="width: 250px;">Mother Name</th>
                    <th style="width: 250px;">Mother Status</th>
                    <th style="width: 250px;">Mother Cnic</th>
                    <th style="width: 250px;">Mother Cell No</th>
                    <th style="width: 250px;">Mother Education</th>
                    <th style="width: 250px;">Mother Profession</th>
                    <th style="width: 250px;">Number of Brothers</th>
                    <th style="width: 250px;">Number of Sisters</th>
                    <th style="width: 250px;">Email Address</th>
                    <th style="width: 250px;">Phone No</th>
                    <th style="width: 250px;">Mobile No</th>
                    <th style="width: 250px;">Country</th>
                    <th style="width: 250px;">City</th>
                    <th style="width: 250px;">Current Address</th>
                    <th style="width: 250px;">Current Area</th>
                    <th style="width: 250px;">Zip</th>
                    <th style="width: 250px;">Is Same Address</th>
                    <th style="width: 250px;">Permanent Country</th>
                    <th style="width: 250px;">Permeneant City</th>
                    <th style="width: 250px;">Permeneant Address</th>
                    <th style="width: 250px;">Permeneant Area</th>
                    <th style="width: 250px;">Zip</th>
                    <th style="width: 250px;">Degree Level</th>
                    <th style="width: 250px;">Degree</th>
                    <th style="width: 250px;">Specializations</th>
                    <th style="width: 250px;">Passing Year</th>
                    <th style="width: 250px;">Result Status</th>
                    <th style="width: 250px;">Total Marks</th>
                    <th style="width: 250px;">Obtained Marks</th>
                    <th style="width: 250px;">Percentage</th>
                    <th style="width: 250px;">Institute</th>
                    <th style="width: 250px;">Board Roll No</th>
                    <th style="width: 250px;">Board</th>
                    <th style="width: 250px;">Degree Document</th>
                </tr>
            </thead>

    <tbody>
    @forelse ($iqforms as $iqform)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $iqform->select_campus }}</td>
            <td>{{ $iqform->admission_applying_for }}</td>
            <td>{{ $iqform->program_applying_for }}</td>
            <td>{{ $iqform->select_shift }}</td>
            <td>{{ $iqform->are_you_iu_graduate ? 'Yes' : 'No' }}</td>
            <td>{{ $iqform->are_you_disabled ? 'Yes' : 'No' }}</td>
            <td>{{ $iqform->re_admission ? 'Yes' : 'No' }}</td>
            <td>{{ $iqform->applying_for_program_transfer_migration ? 'Yes' : 'No' }}</td>
            <td>
                <img src="{{ asset('storage/' . $iqform->user_profile_pic) }}" alt="Profile Picture" width="80" height="80" style="object-fit: cover; border-radius: 50%;">
            </td>
            <td>{{ $iqform->first_name }}</td>
            <td>{{ $iqform->last_name }}</td>
            <td>{{ $iqform->nationality }}</td>
            <td>{{ $iqform->province }}</td>
            <td>{{ $iqform->domicile }}</td>
            <td>{{ $iqform->cnic }}</td>
            <td>{{ $iqform->date_of_birth }}</td>
            <td>{{ $iqform->gender }}</td>
            <td>{{ $iqform->religion }}</td>
            <td>{{ $iqform->blood_group }}</td>
            <td>{{ $iqform->last_institute_attended }}</td>
            <td>{{ $iqform->how_do_you_know_about_us }}</td>
            <td>{{ $iqform->father_name }}</td>
            <td>{{ $iqform->father_status }}</td>
            <td>{{ $iqform->father_cnic }}</td>
            <td>{{ $iqform->father_cell }}</td>
            <td>{{ $iqform->father_education }}</td>
            <td>{{ $iqform->father_profession }}</td>
            <td>{{ $iqform->mother_name }}</td>
            <td>{{ $iqform->mother_status }}</td>
            <td>{{ $iqform->mother_cnic }}</td>
            <td>{{ $iqform->mother_cell }}</td>
            <td>{{ $iqform->mother_education }}</td>
            <td>{{ $iqform->mother_profession }}</td>
            <td>{{ $iqform->sibiling_brother }}</td>
            <td>{{ $iqform->sibiling_sister }}</td>
            <td>{{ $iqform->email_address }}</td>
            <td>{{ $iqform->phone_no }}</td>
            <td>{{ $iqform->mobile_no }}</td>
            <td>{{ $iqform->current_country }}</td>
            <td>{{ $iqform->current_city }}</td>
            <td>{{ $iqform->current_address }}</td>
            <td>{{ $iqform->current_area }}</td>
            <td>{{ $iqform->current_zip }}</td>
            <td>{{ $iqform->is_ame_address ? 'Yes' : 'No' }}</td>
            <td>{{ $iqform->permeneant_country }}</td>
            <td>{{ $iqform->permeneant_city }}</td>
            <td>{{ $iqform->permeneant_address }}</td>
            <td>{{ $iqform->permeneant_area }}</td>
            <td>{{ $iqform->permeneant_zip }}</td>
            <td>{{ $iqform->degree_level }}</td>
            <td>{{ $iqform->degree }}</td>
            <td>{{ $iqform->specializations }}</td>
            <td>{{ $iqform->select_passing_year }}</td>
            <td>{{ $iqform->select_result_status }}</td>
            <td>{{ $iqform->total_marks }}</td>
            <td>{{ $iqform->obtained_marks }}</td>
            <td>{{ $iqform->percentage }}</td>
            <td>{{ $iqform->institute }}</td>
            <td>{{ $iqform->board_roll_no }}</td>
            <td>{{ $iqform->board_name }}</td>
            <td>
                <a href="{{ asset('storage/' . $iqform->degree_document_file) }}" target="_blank">View Document</a>
            </td>
            <td class="text-center">{{ $iqform->created_at }}</td>
            <td class="text-center">{{ $iqform->updated_at }}</td>
            <td class="text-center">
                <form action="{{ route('forms.destroy', $iqform->id) }}" method="POST" class="d-inline">
                    <a class="btn btn-info btn-sm" href="{{ route('forms.show', $iqform->id) }}">
                        <i class="fa-solid fa-list"></i> Show
                    </a>
                    <a class="btn btn-primary btn-sm" href="{{ route('forms.edit', $iqform->id) }}">
                        <i class="fa-solid fa-pen-to-square"></i> Edit
                    </a>
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash"></i> Delete
                        </button>
                    </form>
                </td>
        </tr>
            @empty
                <tr>
                    <td colspan="60" class="text-center">No data available.</td>
                </tr>   
    @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="d-flex justify-content-center">
        {!! $iqforms->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
  
  </div>
</div>      
@endsection