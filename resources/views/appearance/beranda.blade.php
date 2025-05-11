@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sidebar dengan Logo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1 {
                text-align: center;
                font-weight: bold;
            }

            .chat {
                border-bottom: 1px solid #eaeaea;
                padding: 15px 0;
                display: flex;
                align-items: center;
            }

            .chat:last-child {
                border-bottom: none;
            }

            .message {
                max-width: 400px;
            }

            .name {
                font-weight: bold;
                color: #333;
            }

            .bolo {
                margin-right: 13px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1 style="text-align: left;">History Chat</h1>
            <hr>
            <div class="row mt-4">
                <div class="col">
                    <div class="chat">
                        <img src="../image/user.png" alt="gambar" width="40" class="bolo">
                        <div class="message">
                            <span class="name">Nasa</span><br>
                            <span>Good morning..</span>
                        </div>
                    </div>
                    <div class="chat">
                        <img src="../image/user.png" alt="gambar" width="40" class="bolo">
                        <div class="message">
                            <span class="name">Lisa</span><br>
                            <span>How are you?</span>
                        </div>
                    </div>
                    <div class="chat">
                        <img src="../image/user.png" alt="gambar" width="40" class="bolo">
                        <div class="message">
                            <span class="name">Jennie</span><br>
                            <span>Hey, Rose..</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection
