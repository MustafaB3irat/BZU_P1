@extends('layouts.layout')


@section('content')

            <div class="container">
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>

        </tr>
        </thead>
        <tbody>


            @foreach($arr as $user)
                <tr>
                <th scope="row">{{$user['id']}}</th>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['password']}}</td>



        </tr>


                @endforeach





        </tbody>
    </table>
                        <div class="breadcrumb">{{$arr->links()}}</div>

            </div>



@endsection