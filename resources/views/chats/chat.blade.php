@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header font-weight-bold">Active chatroom - {{ $chat->name }}</div>

                    <div class="card-body">
                        @foreach($messages as $message)
                            {{ $message->user->name }}:
                            {{ $message->body }}
                            <br />
                        @endforeach
                    </div>

                    <div class="card-footer">
                        <form method="post" action="/chats/{{ $chat->id }}/tasks">
                            @csrf
                            <input type="text" name="body" placeholder="Your message">
                            <button type="submit">Send</button>
                        </form>
                        @if(Auth::id() === $chat->user_id)
                            <form method="post" action="/chats/{{ $chat->id }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit">Delete chatroom</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
