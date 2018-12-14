@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header font-weight-bold">Active chatrooms</div>

                    <div class="card-body">
                        @if($chats->count())
                            @foreach($chats as $chat)
                                <a href="/chats/{{ $chat->id }}">
                                    {{ $chat->name }}
                                </a>
                                <span>by {{ $chat->user->name }}</span>
                                <br />
                            @endforeach
                        @else
                            No active chatrooms at the moment.
                        @endif
                    </div>

                    <div class="card-footer">
                        <a href="/chats/create">Create a chatroom</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
