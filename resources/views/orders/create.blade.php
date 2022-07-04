@extends('layout.layout')

@section('content')
    <h1>Add New Order</h1>
    <hr>
    <form action="/orders" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="last-name">Last Name</label>
            <input type="text" class="form-control" id="orderLastName"  name="last-name">
        </div>
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" class="form-control" id="orderFirstName" name="first-name">
        </div>
        <div class="form-group">
            <label for="middle-name">Middle Name</label>
            <input type="text" class="form-control" id="orderMiddleName" name="middle-name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="orderPrice" name="price">
        </div>
        <div class="form-group">
            <label for="delivery-address">Delivery Address</label>
            <input type="text" class="form-control" id="orderDeliveryAddress" name="delivery-address">
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
