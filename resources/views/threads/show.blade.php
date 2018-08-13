@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/threads">All Threads</a>
            <div class="card border-primary ">
                <div class="card-header">
                    <a href="#">{{ $thread->creator->name }}</a> posted :
                    {{ $thread->title }}
                </div>

                <div class="card-body">
                    <div class="body">{{ $thread->body }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            @foreach($thread->replies as $reply)
                @include('threads.reply')
            @endforeach
        </div>
    </div>

    @if(auth()->check())
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="mt-3">
              <form action="{{ route('reply.save', ['id' => $thread->id]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <textarea class="form-control" id="reply" rows="5" placeholder="Do you have to say anything?"></textarea>
                  <button type="submit" class="btn btn-primary mt-3">Post</button>
                </div>
              </form>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
