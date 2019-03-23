@extends('layouts.cs')

@section('content')

    <div class="card container">

        <div class="card-body">
        <h1 >Course Name: {{$courses->name}}</h1>
        <h3> Course Credits: {{$courses->credits}}</h3>
        <p> Course Description: {!! $courses->description !!}</p>


        </div>

    </div>

@endsection