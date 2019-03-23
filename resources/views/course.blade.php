@extends('layouts.app')


@section('content')



    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');

    </script>

    <div class="container">


        {!! Form::open(["action" => "coursesController@store", "method" => "POST", "class" => "form" , 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">


            {{Form::Label('title' , 'Course Name')}}
            {{Form::text('name' , '' ,['class'=> 'form-control' ,'placeholder'=>'Course Name'] )}}

            {{Form::Label('title' , 'Credits')}}
            {{Form::text('credits' , '' ,['class'=> 'form-control' ,'placeholder'=>'Course Credits'] )}}

            {{Form::Label('title' , 'Course Description')}}
            {{Form::textarea('description' , '' ,['id' => 'article-ckeditor','class'=> 'form-control' ,'placeholder'=>'Course Description'] )}}

                    {{Form::file('cover_image')}}
            {{Form::submit('submit' , ['class'=> 'btn btn-primary'])}}

            {!! ! Form::close() !!}


        </div>



    </div>



@endsection

