@extends('layout.layout')

@section('content')
    <h1>Add New Order</h1>
    <hr>
    <form action="/orders" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="orderLastName"  name="last_name">
        </div>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="orderFirstName" name="first_name">
        </div>
        <div class="form-group">
            <label for="middle_name">Middle Name</label>
            <input type="text" class="form-control" id="orderMiddleName" name="middle_name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="orderPrice" name="price">
        </div>
        <div class="form-group">
            <label for="delivery_address">Delivery Address</label>
            <input type="text" class="form-control" id="orderDeliveryAddress" name="delivery_address">
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
