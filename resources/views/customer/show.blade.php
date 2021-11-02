@extends('layouts.app')

@section('template_title')
    {{ $customer->name ?? 'Show Customer' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Customer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Code:</strong>
                            {{ $customer->code }}
                        </div>
                        <div class="form-group">
                            <strong>Business Name:</strong>
                            {{ $customer->business_name }}
                        </div>
                        <div class="form-group">
                            <strong>Customer Name:</strong>
                            {{ $customer->customer_name }}
                        </div>
                        <div class="form-group">
                            <strong>Type Currency:</strong>
                            {{ $customer->type_currency }}
                        </div>
                        <div class="form-group">
                            <strong>Country:</strong>
                            {{ $customer->country }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $customer->state }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $customer->city }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            {{ $customer->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $customer->email }}
                        </div>
                        <div class="form-group">
                            <strong>Is Active:</strong>
                            {{ $customer->is_active }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
