@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Customer Information
                </div>
                <div class="float-end">
                    <a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $customer->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="nic" class="col-md-4 col-form-label text-md-end text-start"><strong>NIC:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $customer->nic }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $customer->email }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="phone_number" class="col-md-4 col-form-label text-md-end text-start"><strong>Phone Number:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $customer->phone_number }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="address" class="col-md-4 col-form-label text-md-end text-start"><strong>Address:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $customer->address }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection