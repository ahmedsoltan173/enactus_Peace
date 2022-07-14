@extends('layouts.app')

@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success" style="font-size: 19px;">

            {!! \Session::get('success') !!}
    </div>
    @endif
<div class="container">

    <table class="table table-dark table-striped "style>

        <tr >
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>

            <th>Receive Date</th>
            <th>Amount of Order</th>
            <th>Comment</th>
            <th>Delete</th>
        </tr>
        @foreach ($orders as $order)

        <tr>
            <th>{{ $order->id }}</th>
            <th>{{ $order->name }}</th>
            <th>{{ $order->phone }}</th>
            <th>{{ $order->email }}</th>
            <th>{{ $order->address }}</th>
            <th>{{ $order->date }}</th>
            <th>{{ $order->amount }}</th>
            <th>{{ $order->comment }}</th>
            <th><a href="destroyPackets?id={{ $order->id }}"class="btn btn-danger">Delete</a></th>
        </tr>
        @endforeach

  </table>



</div>
@endsection
