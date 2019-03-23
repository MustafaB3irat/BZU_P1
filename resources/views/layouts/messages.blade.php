@if(count($errors) > 0)
    @foreach($errors->all() as $err)

        <div class="container alert alert-danger">{{$err}}</div>

    @endforeach

@endif


@if(session('success'))

    <div class="container alert alert-success">{{session('success')}}</div>

@endif

@if(session('error'))

    <div class="container alert alert-danger">{{session('error')}}</div>
@endif