@extends('email._layouts.base')

@section('content')
<h1>Vlogic Brochure Request</h1>

    <p>You have received a brochure request. Please login to <a href="{{route('admin.auth.login')}}">admin portal</a> for more details. 👍</p>

    <table class="email-table">
        <thead >

            <tr> <td>Name:</td><td > {{$data->name}}</td> </tr>
            <tr> <td>Phone:</td><td > {{$data->phone_number}}</td> </tr>
            <tr> <td>Email:</td><td > {{$data->email}}</td> </tr>
            @if($data->message)
            <tr> <td>Message:</td><td > {{$data->message}}</td> </tr>
            @endif
            @if($data->address)
            <tr> <td>Address:</td><td > {{$data->address}}</td> </tr>
            @endif
            @if($data->country)
            <tr> <td>Country:</td><td > {{$data->country}}</td> </tr>
            @endif

        </thead>


    </table>

@endsection
