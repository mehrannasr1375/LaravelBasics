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
        <div class="col">

            <!-- Form -->
            <form action="/customers" method="POST" class="my-4 bg-light p-5 rounded">
                
                @include('customers.form')
                
                <button type="submit" class="btn btn-outline-success my-3">Save</button>
            
            </form>

        </div>
    </div>

    <a href="/customers" class="btn btn-outline-info">Back To Customers List</a>

@endsection

