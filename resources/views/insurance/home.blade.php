@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
               
            </div>
        </div>
    </div>


            <div class="col-lg-12 margin-tb">
            <h2>INSURANCE CRUD</h2>
        <div class="pull-right">
           <a class="btn btn-success" href="{{ route('insurance.create') }}" title="Create New Insurance">
               <i class="fas fa-plus-circle"></i>CREATE
            </a>
        </div>
    </div>


@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    @endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th> SI No</th>
         <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Mobile No</th>
        <th>Email Id </th>
        <th>Customer ID </th>
        <th>Status</th>        
        <th>Health Advisor</th>
        <th>Date created</th>
        <th width="300px">Action</th>
    </tr>
  
    @foreach($insurance as $key => $insurance)
    <tbody>
            <tr>
                <td> {{ ++$i}}</td>
             <td>{{ $insurance->first_name}}</td>
            <td>{{ $insurance->last_name}}</td>
            <td>{{ $insurance->gender }}</td>
            <td>{{ $insurance->mobile_no}}</td>
            <td>{{ $insurance->email_id}}</td>
            <td>{{ $insurance->customer_no}}</td>
            <td>{{ $insurance->status}}</td>
            <td>{{ $insurance->health_advisor}}</td>
            <td>{{ $insurance->created_at }}</td>
    <td>

    
    <form action="{{ route('insurance.destroy',$insurance->id) }}" method="POST">
        <input type="hidden" name="_method" title="DELETE">

    <a class="btn btn-info" href="{{ route('insurance.show',$insurance->id) }}">Show</a>

            <i class="fas fa-eye text-success fa-lg"></i>
        </a>

        <a class="btn btn-primary" href="{{ route('insurance.edit',$insurance->id) }}">Edit</a>

            <i class="fas fa-edit fa-lg"></i>
        </a>
        @csrf
        {{ method_field('DELETE') }};

        <button type="submit" class="btn btn-danger">Delete</button>
       <i class="fas fa-trash fa-lg text-danger"></i>
       </button>

    </form>
    </td>
</tr>
<tbody>
@endforeach

    </table>
    {{ $insurance->links }}
    
@endsection
