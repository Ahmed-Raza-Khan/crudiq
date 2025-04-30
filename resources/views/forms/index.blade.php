<!-- @extends('forms.layout')
     
@section('content')
<div class="card mt-5">
  <h2 class="card-header">Laravel 11 CRUD with Image Upload Tutorial - ItSolutionStuff.com</h2>
  <div class="card-body">
          
        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession
  
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('forms.create') }}"> <i class="fa fa-plus"></i> Create New Product</a>
        </div>
  
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            @forelse ($forms as $forms)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="/images/{{ $forms->image }}" width="100px"></td>
                    <td>{{ $forms->name }}</td>
                    <td>{{ $forms->detail }}</td>
                    <td>
                        <form action="{{ route('forms.destroy',$forms->id) }}" method="POST">
             
                            <a class="btn btn-info btn-sm" href="{{ route('forms.show',$forms->id) }}"><i class="fa-solid fa-list"></i> Show</a>
              
                            <a class="btn btn-primary btn-sm" href="{{ route('forms.edit',$forms->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
             
                            @csrf
                            @method('DELETE')
                
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">There are no data.</td>
                </tr>
            @endforelse
            </tbody>
  
        </table>
        
        {!! $forms->withQueryString()->links('pagination::bootstrap-5') !!}
  
  </div>
</div>      
@endsection -->


@extends('forms.layout')

@section('content')
<div class="card mt-5">
  <h2 class="card-header">Admission Form Data</h2>
  <div class="card-body">
          
        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession
  
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('forms.create') }}"> <i class="fa fa-plus"></i> Create New Entry</a>
        </div>
  
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Campus</th>
                    <th>Program</th>
                    <th>Shift</th>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Academic Info</th>
                    <th>Actions</th>
                </tr>
            </thead>
  
            <tbody>
            @forelse ($forms as $form)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="/images/{{ $form->user_profile_pic }}" width="100px"></td>
                    <td>{{ $form->first_name }} {{ $form->last_name }}</td>
                    <td>{{ $form->select_campus }}</td>
                    <td>{{ $form->program_applying_for }}</td>
                    <td>{{ $form->select_shift }}</td>
                    <td>{{ $form->father_name }}</td>
                    <td>{{ $form->mother_name }}</td>
                    <td>
                        Email: {{ $form->email_address }}<br>
                        Phone: {{ $form->phone_no }}<br>
                        Mobile: {{ $form->mobile_no }}
                    </td>
                    <td>
                        Current: {{ $form->current_address }}, {{ $form->current_city }}<br>
                        Permanent: {{ $form->permeneant_address }}, {{ $form->permeneant_city }}
                    </td>
                    <td>
                        Degree: {{ $form->degree }}<br>
                        Marks: {{ $form->obtained_marks }}/{{ $form->total_marks }}<br>
                        Percentage: {{ $form->percentage }}%
                    </td>
                    <td>
                        <form action="{{ route('forms.destroy', $form->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('forms.show', $form->id) }}"><i class="fa-solid fa-list"></i> Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('forms.edit', $form->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="12">There are no data.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        
        {!! $forms->withQueryString()->links('pagination::bootstrap-5') !!}
  
  </div>
</div>      
@endsection