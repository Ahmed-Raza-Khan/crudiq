@extends('forms.layout')
     
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
@endsection