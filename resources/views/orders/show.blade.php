@extends('layout.layout')

@section('content')
    <h1>Showing Order {{ $order->id }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Last Name:</strong> {{ $order->last_name }}<br>
            <strong>First Name:</strong> {{ $order->first_name }}<br>
            <strong>Middle Name:</strong> {{ $order->middle_name }}<br>
            <strong>Price:</strong> {{ $order->price }}<br>
            <strong>Delivery Address:</strong> {{ $order->delivery_address }}
        </p>
    </div>
@endsection
