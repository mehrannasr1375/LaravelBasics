@extends('layouts.app')

@section('title','Customers')

@section('content')

    <h1 class="text-black-50">All Customers:</h1>
    <br>
    <div class="row">




        <!-- Registered Customers -->
        <div class="col-12">
            <h4>Registered Customers:</h4>
            <table class="table table-dark table-striped table-responsive-lg my-5">
                <thead>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Family</td>
                    <td>Status</td>
                    <td>Company Name</td>
                    <td>Registered At</td>
                    <td>Actions</td>
                </thead>
                @foreach ($registered_customers as $customer)
                    <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->family }}</td>
                            <td>{{ $customer->registered }}</td>
                            <td>{{ $customer->company->name }}</td>
                            <td>{{ $customer->created_at }}</td>

                            <td class="btn-group">
                                <a class="btn btn-sm btn-info text-light" href="/customers/{{ $customer->id }}">Details
                                <a class="btn btn-sm btn-success" href="/customers/{{ $customer->id }}/edit">Edit</a>
                                <a class="btn btn-sm btn-danger" href="#" onclick="
                                    event.preventDefault();
                                    document.getElementById('btn-delete-registered-customer').click();
                                ">Delete</a>
                                <form action="/customers/{{ $customer->id }}" method="POST">
                                    @method('DELETE')
                                    <button type="submit" id="btn-delete-registered-customer" style="display:none;" >Delete</button>
                                    @csrf
                                </form>
                            </td>
                    </tr>
                @endforeach
            </table>
        </div>




        <!-- Unregistered Customers-->
        <div class="col-12">
            <h4>Unregistered Customers:</h4>
            <table class="table table-dark table-striped table-responsive-lg my-5">
                <thead>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Family</td>
                    <td>Status</td>
                    <td>Company Name</td>
                    <td>Registered At</td>
                    <td>Actions</td>
                </thead>
                @foreach ($unregistered_customers as $customer)
                    <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->family }}</td>
                            <td>{{ $customer->registered }}</td>
                            <td>{{ $customer->company->name }}</td>
                            <td>{{ $customer->created_at }}</td>
                            <td class="btn-group">
                                <a class="btn btn-sm btn-info text-light" href="/customers/{{ $customer->id }}">Details
                                <a class="btn btn-sm btn-success" href="/customers/{{ $customer->id }}/edit">Edit</a>
                                <a class="btn btn-sm btn-danger" href="#" onclick="
                                    event.preventDefault();
                                    document.getElementById('btn-delete-unregistered-customer').click();
                                ">Delete</a> 

                                <form action="/customers/{{ $customer->id }}" method="POST">
                                    @method('DELETE')
                                    <button id="btn-delete-unregistered-customer" style="display:none;" type="submit" style="" class="btn btn-sm btn-danger">Delete</button>
                                    @csrf
                                </form>

                            </td> 
                                            
                        </tr>
                @endforeach
            </table>
        </div>







    
    </div>

    <a href="/customers/create" class="btn btn-outline-info">Create New Customer</a>

@endsection

