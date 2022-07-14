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
                <th>name</th>
                <th>email</th>
                <th>Delete</th>

            </tr>
            @foreach ($contacts as $contact)

            <tr>
                <th>{{ $contact->id }}</th>
                <th>{{ $contact->name }}</th>
                <th>{{ $contact->email }}</th>
                <th><a href="destroyComment?id={{ $contact->id }}" class="btn btn-danger">Delete</a></th>
            </tr>
            @endforeach

      </table>



      @endsection
