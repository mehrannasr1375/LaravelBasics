<!--
    form attributes: 
        action = /customers
        method = post

    form parameters will written by 
        edit && create views!
-->


@extends('layouts.app')
@section('content')

    <h1 class="text-black-50">Create New Customer:</h1>

    <br>

    <div class="row">
        <div class="col mb-5">

            <!-- Form -->
            <form action="{{ route('customers.store') }}" method="POST" class="bg-light p-5 rounded shadow">
                
                @include('customers.form')
                
                <button type="submit" class="btn btn-success my-3">Save</button>
            
            </form>

        </div>
    </div>

    <a href="/customers" class="btn btn-outline-info">Back To Customers List</a>

@endsection

