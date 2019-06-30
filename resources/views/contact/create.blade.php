@extends('layouts.app')
@section('content')

    <h1 class="text-black-50">Send a mail to us:</h1>

    <br>

    <div class="row">
        <div class="col">


            @if (session()->has('success'))
                <div class="alert alert-success" >
                    <strong>Success</strong>
                    {{ session()->get('success') }}
                </div>
            @endif


            @if ( ! session()->has('success') )

                <!-- Form -->
                    <form action="{{ route('contact.store') }}" method="POST" class="bg-light p-5 rounded shadow mb-5">


                        <!-- Full Name -->
                        <p class="text-light bg-danger">{{ $errors->first('name') }}</p>
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>


                        <!-- Email -->
                        <p class="text-light bg-danger">{{ $errors->first('email') }}</p>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>


                        <!-- Message -->
                        <p class="text-light bg-danger">{{ $errors->first('message') }}</p>
                        <div class="form-group">
                            <label for="message">Your Message:</label>
                            <textarea type="text" id="message" name="message" class="form-control" >

                    </textarea>
                        </div>


                        <!-- Btn Send -->
                        <button type="submit" class="btn btn-success my-3">Send Message</button>

                        @csrf
                    </form>

            @endif

        </div>
    </div>


@endsection

