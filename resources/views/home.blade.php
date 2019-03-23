@extends('layouts.layout')

@section('courses')

    @if(count($Courses)>0)

        @foreach($Courses as $course)

            <a href="#">

                <div class="status-indicator bg-success"></div>

                <div class="font-weight-bold">
                    <div class="text-truncate">{{$course->name}}
                    </div>
                    <div class="small text-gray-500">{!! $course->description !!}</div>
                </div>
            </a>

        @endforeach

    @else

        <a class="dropdown-item d-flex align-items-center" href="#">


            <div class="font-weight-bold">
                <div class="text-truncate">No Courses For {{\Illuminate\Support\Facades\Auth::user()->name}}
                </div>

            </div>
        </a>


    @endif
@endsection
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welceome To Mustafa B3irat First Laravel Project</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>

                <div class="card" id="card">
                    <div class="card-header">Options</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="{{url('/usrview')}}">Users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
