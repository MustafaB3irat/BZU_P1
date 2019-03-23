@extends('layouts.layout')

@section('content')
    <div class="row">
        <form method="get" action="{{route('UserIndex')}}">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Users</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span
                                    class="glyphicon glyphicon-filter"></span>
                            Filter
                        </button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" name="id" class="form-control" placeholder="#"></th>
                        <th><input type="text" name="name" class="form-control" placeholder="Username"></th>
                        <th><input type="email" name="email" class="form-control" placeholder="email"></th>

                    </tr>
                    </thead>
                    <tbody>

                    @if($user != null)
                        @foreach($user as $u)
                            <tr>
                                <td>{{$u->id}}</td>
                                <td>{{$u->name}}</td>
                                <td>{{$u->email}}</td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>
            </div>


        </form>
    </div>
@endsection