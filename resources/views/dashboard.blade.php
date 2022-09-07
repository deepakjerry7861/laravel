
@extends('master')
@section('title', ' Student Login')
@section('content')


<div class="card">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    </div>
@endif



<div class="container align center">
    <h1>Hello user Welcome Back on Board !!</h1>
</div>

@endsection
