@extends('layouts.app')

@section('content')
<html>
    <head>
<style>
         .error {color: #FF0000;}
      </style>
</head>
<div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
        <h4>Add Insurance form</h4>
       <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('insurance.index') }}" title="Go back">Back <i class="fas fa-backward"></i></a>
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

<form action="{{ route('insurance.store') }}" method="POST">
    @csrf 
    
    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>First Name </strong>
                <input type="text" name="first_name" class"form-control" placeholder="Enter First Name">
            </div>
        </div>      

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Last Name</strong>
                <input type="text" name="last_name" class"form-control" placeholder="Enter Last Name">
            </div>
        </div>      

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Gender</strong>
               <span> <input type="radio" name="gender" value="1"> Male<br>
                <input type="radio" name="gender" value="2"> Female<br> </span>
            </div>
        </div>      

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Mobile No</strong>
                <input type="number" name="mobile" class"form-control" placeholder="Enter 10 digit Mobile">
            </div>
        </div>  


        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Email ID</strong>
                <input type="email" name="email_id" class"form-control" placeholder="Enter your email address">
            </div>
        </div>  

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                 <input type="hidden" name="status" class"form-control" value="1">
            </div>
        </div> 

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Customer No: </strong>
                <input type="number" name="customer_no" class"form-control" placeholder="Enter the Customer No">
            </div>
        </div>
                
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Health Advisor</strong>
                <input type="text" name="health_advisor" class"form-control" placeholder="Enter your Health Advisor">
            </div>
        </div>  

        <div class="col-xs-12 col-md-12 col-sm-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
<form>
    @endsection
