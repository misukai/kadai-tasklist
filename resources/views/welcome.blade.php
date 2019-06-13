@extends('layouts.app')

@section('content')

    @if (Auth::check())
        @include('tasks.tasks', ['tasks' => $tasks])
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the TaskAdmin</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
    </div>
    @endif
@endsection