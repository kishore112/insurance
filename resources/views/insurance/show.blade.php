@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> {{ $insurance->first_name }}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('insurance.index') }}" title="Go Back">Go Back<i class="fas fa-backward"></i>
        </a>
    </div>
</div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First Name</strong>
            {{ $insurance->first_name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last Name</strong>
            {{ $insurance->last_name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Gender</strong>
            {{ $insurance->gender }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Mobile No</strong>
            {{ $insurance->mobile }}
        </div>
    </div>

    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email ID</strong>
            {{ $insurance->email_id }}
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status</strong>
            {{ $insurance->status }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Customer No</strong>
            {{ $insurance->customer_no }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Health Advisor</strong>
            {{ $insurance->health_advisor }}
        </div>
    </div>
</div>
    @endsection