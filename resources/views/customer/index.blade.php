@extends('layouts.app')

@section('template_title')
Customer
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Customer') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('customers.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Code</th>
                                    <th>Business Name</th>
                                    <th>Customer Name</th>
                                    <th>Type Currency</th>
                                    <th>Country</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Active</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $customer->code }}</td>
                                    <td>{{ $customer->business_name }}</td>
                                    <td>{{ $customer->customer_name }}</td>
                                    <td>{{ $customer->type_currency }}</td>
                                    <td>{{ $customer->country }}</td>
                                    <td>{{ $customer->state }}</td>
                                    <td>{{ $customer->city }}</td>
                                    <td>{{ $customer->phone_number }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->is_active }}</td>

                                    <td>
                                        <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('customers.show',$customer->id) }}"><Show</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('customers.edit',$customer->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $customers->links() !!}
        </div>
    </div>
</div>
@endsection