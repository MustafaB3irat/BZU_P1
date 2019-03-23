@extends('layouts.layout')

@section('content')

    <div class="card container">

        <ul class="card-body">
            @if(count($courses)>0)
                @foreach($courses as $course)
                    <div class="card container">

                        <div class="row">

                            <div class="col-md-4 col-sm-4">
                                <img style="width: 50%" src="/storage/cover_image/{{$course -> cover_image}} ">
                            </div>

                            <div class="col-md-8 col-sm-8">
                                <a href="\courses\{{$course->id}}">
                                    <li>{{$course->name}}</li>
                                    <small>{!! $course->description !!}</small>
                                    <br/>
                                    <small>Created At:{{$course->created_at}} By {{$course->user->name}}</small>

                                </a>

                                <hr/>
                            </div>

                        </div>
                    </div>
                @endforeach
            @else
                <h1>No Posts To show</h1>

            @endif

        </ul>
    </div>
@endsection
