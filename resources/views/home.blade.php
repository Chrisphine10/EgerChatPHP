@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">EgerChat Messenger</div>

                <div class="card-body" id="app">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to EgerChat Messenger

                    <chat-app :user='{{ auth() -> user() }}'></chat-app>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
