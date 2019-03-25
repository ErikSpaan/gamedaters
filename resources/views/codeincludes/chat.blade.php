<head>
    <!-- include css -->
    <link rel="stylesheet" href="{{ asset('/css/chatpage.css') }}">
</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Player 2 Chat</div>

                <div class="card-body" id="app">
                <chat-app :user="{{ auth()->user()}}"></chat-app>
                </div>
            </div>
        </div>
    </div>
</div>