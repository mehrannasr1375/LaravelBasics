@extends('base')

@section('title','Customer Details')

@section('content')

    <h1 class="text-black-50">Customer Details:</h1>
    <br>
    <div class="row">



        <!--  Customer Descriptions -->
        <div class="col-12">
            <table class="table table-dark table-striped table-responsive-lg my-5">
                <thead>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Family</td>
                    <td>Status</td>
                    <td>Company ID</td>
                    <td>Company Name</td>
                    <td>Registered At</td>
                    <td>Updated At</td>
                </thead>
                <a href="/customers/{{ $customer->id }}">
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->family }}</td>
                        <td>{{ $customer->registered }}</td>
                        <td>{{ $customer->company_id }}</td>
                        <td>{{ $customer->company->name }}</td>
                        <td>{{ $customer->created_at }}</td>
                        <td>{{ $customer->updated_at }}</td>
                    </tr>
                </a>
            </table>
        </div>




    
    </div>

    <a href="/customers" class="btn btn-outline-info">Go Back To Customers List</a>

@endsection
