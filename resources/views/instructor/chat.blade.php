@extends('layouts.app')
@section('title', 'Students')
@section('css')
    <style>
        .chat-container {
            max-width: 100%;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .chat-header {
            background-color: #0f5197;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }

        .chat-messages {
            padding: 10px;
            overflow-y: auto;
            max-height: 500px;
        }

        .message {
            margin-bottom: 10px;
        }

        .message.sent {
            text-align: right;

        }

        .message.received {
            text-align: left;
        }

        .message span.timestamp {
            font-size: 0.6em;
            display: block;
            margin-top: 0px;
        }

        .message p {
            background-color: #f1f0f0;
            padding: 8px;
            border-radius: 8px;
            display: inline-block;
            max-width: 70%;
        }

        .input-container {
            padding: 10px;
            background-color: #f4f4f4;
        }

        .input-container input[type="text"] {
            width: calc(100% - 20px);
            padding: 8px;
            border: none;
            border-radius: 20px;
            outline: none;
        }

        .input-container input[type="submit"] {
            background-color: #0f5197;
            color: #fff;
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            cursor: pointer;
        }
    </style>
@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Users List Table -->
        <div class="card">
            <div class="card-body">
                <div class="chat-container">
                    <div class="chat-header">
                        Chat with <strong style="color: #ff992d">{{ $student->fname }} {{ $student->lname }}</strong>
                    </div>
                    <div class="chat-messages">
                        @foreach ($chats as $item)
                            @if ($item->sender_by == 'user')
                                <div class="message sent">
                                    <p style="background-color: #0f5197;color: #f4f4f4;"> {{ $item->message }}
                                        <span style="color: #f4f4f4;"
                                            class="timestamp">{{ $item->created_at->diffForHumans() }}</span>
                                    </p>
                                </div>
                            @else
                                <div class="message received">
                                    <p>{{ $item->message }}
                                        <span class="timestamp">{{ $item->created_at->diffForHumans() }}</span>
                                    </p>
                                </div>
                            @endif
                            <!-- More messages can be added here -->
                        @endforeach
                    </div>
                    <form action="{{ route('instructor.storeChat', $id) }}" method="post">
                        @csrf
                        <div class="input-container">
                            <input name="message" type="text" placeholder="Type your message...">
                            <input type="submit" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
