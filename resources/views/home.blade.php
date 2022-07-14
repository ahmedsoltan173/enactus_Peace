@extends('layouts.app')

@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success" style="font-size: 19px;">

            {!! \Session::get('success') !!}
    </div>
    @endif
<div class="container">

    {{-- <table class="table table-dark table-striped "style>

        <tr >
            <th>#</th>
            <th >name</th>
            <th>phone</th>
            <th>email</th>
            <th>address</th>
            <th>Receive Date</th>
            <th>white</th>
            <th>Gray</th>
            <th>Black</th>
            <th>Yellow</th>
            <th>Blue</th>
            <th>Red</th>
            <th>Green</th>
            <th>Brown</th>
            <th>Orange</th>
            <th>Pink</th>
            <th>Purple</th>
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
            <th>{{ $order->data_rec }}</th>
            <th>{{ $order->type }}</th>
            <th>{{ $order->white }}</th>
            <th>{{ $order->gray }}</th>
            <th>{{ $order->black }}</th>
            <th>{{ $order->yellow }}</th>
            <th>{{ $order->blue }}</th>
            <th>{{ $order->red }}</th>
            <th>{{ $order->green }}</th>
            <th>{{ $order->brown }}</th>
            <th>{{ $order->orange }}</th>
            <th>{{ $order->pink }}</th>
            <th>{{ $order->purple }}</th>
            <th>{{ $order->comment }}</th>
            <th><a href="destroy?id={{ $order->id }}" class="btn btn-danger">Delete</a></th>
        </tr>
        @endforeach

  </table>
 --}}

 <div class="row">
 @foreach ($orders as $order)
<div class="col-lg-4" style="margin-bottom:15px; ">
 <div class="card" style="width:22rem;border:1px solid #2b561f;box-shadow: 2px 2px 2px 1px #2b561f;
 ">
    <div class="card-body">
      <h5 class="card-title"> {{ $order->name }}</h5>
      <p class="card-text"><b>Phone : </b>{{ $order->phone }}</p>
      <p class="card-text"><b>Email : </b>{{ $order->email }}</p>
      <p class="card-text"><b>Address : </b>{{ $order->address }}</p>
      <p class="card-text"><b>Date To Recieve : </b>{{ $order->date}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"style=""><b>White : </b>{{ $order->white }}</li>
      <li class="list-group-item"style="color:gray;"><b>Gray : </b>{{ $order->gray }}</li>
      <li class="list-group-item"style="color:black;"><b>Black : </b> {{ $order->black }}</li>
      <li class="list-group-item"style="color:yellow;"> <b>Yellow : </b> {{ $order->yellow }}</li>
      <li class="list-group-item"style="color:blue;"><b>Blue : </b> {{ $order->blue }}</li>
      <li class="list-group-item"style="color:red;"><b>Red : </b> {{ $order->red }}</li>
      <li class="list-group-item"style="color:green;"><b>Green : </b> {{ $order->green }}</li>
      <li class="list-group-item"style="color:brown;"><b>Brown : </b> {{ $order->brown }}</li>
      <li class="list-group-item"style="color:orange;"><b>Orange : </b> {{ $order->orange }}</li>
      <li class="list-group-item"style="color:pink;"><b>Pink : </b>{{ $order->pink }}</li>
      <li class="list-group-item"style="color:purple;"><b>Purple : </b> {{ $order->purple }}</li>
<hr>
      <li class="list-group-item">Comment : {{ $order->comment }}</li>
      
    </ul>


    <div class="card-body" style="text-align: center;">
        <a href="destroy?id={{ $order->id }}" class="btn btn-danger">Delete</a>
    </div>
  </div>
</div>
  @endforeach
</div>
</div>
@endsection
