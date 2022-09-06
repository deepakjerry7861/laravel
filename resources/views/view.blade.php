@extends('master')
@section('title', 'Data List')
@section('content')


<div class="container mt-5">

<h1 class="text-center pb-4">Student Details !</h1>
<table class="table table-bordered text-center table-dark">

    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Class</th>
        <th scope="col">Mobile</th>
      </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($viewdata as $user)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->class }}</td>
            <td>{{ $user->Mobile }}</td>

        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection



