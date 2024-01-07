@extends('layouts.app')
@section('content')
<div class="container">
    <div class="titlebar">
        <a class="btn btn-secondary float-end mt-3" href="{{ route('posts.create') }}" role="button">Add Post</a>
        <h1>Mini post list</h1>
    </div>
    
    <hr>
    <!-- Message if a post is posted successfully -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-2">
                        <img class="img-fluid" style="max-width:50%;" src="{{ asset('images/'.$post->image)}}" alt="">
                    </div>
                    <div class="col-10">
                        <h4>{{$post->title}}</h4>
                    </div>
                </div>
                @if(!empty($post->image))
                    <img src="{{$post->image}}" alt="{{$post->title}}" style="max-width: 30%; float: right;" />
                @endif
                <p>{!! nl2br(e($post->description)) !!}</p>
                <hr>
            </div>
        </div>

</div>
@endsection