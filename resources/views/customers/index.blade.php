@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Customer List</div>
    <div class="card-body">
        @can('create-customer')
            <a href="{{ route('customers.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Customer</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">Name</th>
                <th scope="col">NIC</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $customer)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->nic }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone_number }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                            @can('edit-customer')
                                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            @endcan

                            @can('delete-customer')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this customer?');"><i class="bi bi-trash"></i> Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="7">
                        <span class="text-danger">
                            <strong>No Customer Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $customers->links() }}

    </div>
</div>
@endsection