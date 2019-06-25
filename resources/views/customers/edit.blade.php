<!--
    form attributes: 
        action = /customers/{customer_id}
        method = patch 

    form parameters will written by 
        edit && create views!
-->


@extends('base')
@section('content')

    <h1 class="text-black-50">Edit Customer ( <span class="text-danger">{{ $customer->name }}</span> ) :</h1>
    
    <br>

    <div class="row">
        <div class="col">

            <!-- Form -->
            <form action="/customers/{{ $customer->id }}" method="POST" class="my-4 bg-light p-5 rounded">
                
                @include('customers.form')

                @method('PATCH')
                
                <button type="submit" class="btn btn-outline-success my-3">Save Changes</button>
            
            </form>

        </div>
    </div>

    <a href="/customers" class="btn btn-outline-info">Back To Customers List</a>
 
@endsection

