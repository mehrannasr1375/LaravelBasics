@component('mail::message')

    <p>sender name: {{ $data['name'] }}</p>
    <p>sender email: {{ $data['email'] }}</p>
    <br>
    <br>
    <div>
        <p>message: {{ $data['message'] }}</p>
    </div>

@endcomponent
