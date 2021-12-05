@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Insurance Form</h2>
           <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('insurance.index') }}"> Go Back
                    <i class="fas fa-backward"></i>
                </a>
            </div>
            </div>
        </div>
   

    @if($errors->any())
<div class="alert alert-danger">
    <strong>Wh
        oops!</strong> There were some problem with your input.<br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
</div>

    <form action="{{ route('insurance.update',$insurance->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
   
        <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>First Name </strong>
                <input type="text" name="first_name"  value="{{ $insurance->first_name }}" class"form-control" placeholder="Enter First Name">
            </div>
        </div>      


        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Last Name </strong>
                <input type="text" name="last_name"   value="{{ $insurance->last_name }}" class"form-control" placeholder="Enter First Name">
            </div>
        </div>    

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Gender </strong>
                <select class="form-control" name="gender"  id="gender">
                <option selected>Select Gender</option>
                      <option value="1" {{($insurance->gender === '1') ? 'Selected' : ''}}>Male</option>
                      <option value="2" {{($insurance->gender === '2') ? 'Selected' : ''}}>FeMale</option>
               </select>
            </div>
        </div>    

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Mobile No </strong>
                <input type="number" name="mobile" value="{{ $insurance->mobile }}" class"form-control" placeholder="Enter Mobile No">
            </div>
        </div>    

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Email Id </strong>
                <input type="email" name="email_id" value="{{ $insurance->email_id }}" class"form-control" placeholder="Enter Your Email">
            </div>
        </div> 
        
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                 <input type="hidden" name="status" value="{{ $insurance->status }}" class"form-control" placeholder="Enter Your Status">
            </div>
        </div> 

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Customer No </strong>
                <input type="number" name="customer_no" value="{{ $insurance->customer_no }}" class"form-control" placeholder="Enter Customer Number">
            </div>
        </div>    


        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Health Advisor </strong>
                <input type="text" name="health_advisor"  value="{{ $insurance->health_advisor }}" class"form-control" placeholder="Enter Your Health Advisor">
            </div>
        </div>    
        
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
    </div>
</div>

</form>
@endsection