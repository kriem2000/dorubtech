@extends("layouts.app")
@section("styles")
    <link href="{{ asset('css/admincss.css') }}" rel="stylesheet">
    <!--fontawesom -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

@endsection

@section("content")
    <div class="container">
        @if(session()->has("results"))
            @php
                $message=session("results");
            @endphp
            <x-flash_message message="{{$message}}" error="{{false}}"/>
        @endif
            @if(session()->has("error"))
                @php
                    $message=session("error");
                @endphp
                <x-flash_message message="{{$message}}" error="{{true}}"/>
            @endif
       <!--search bar-->
        <div class="row">
            <div class="rounded col">
                <form class="form-inline my-2 my-lg-0" action="/searchindex"    method="post">
                    @csrf
                    @method("post")
                    <input
                        name="search"
                        class="form-control mr-sm-2 @error("search") border border-danger @enderror"
                        type="search"
                        placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" >
                        <i class="fas fa-search"></i>
                    </button>
                </form>

            </div>
            <!--******-->

            <!--webmail button-->
            <div class="col offset-lg-6 mt-3 offset-md-1">
                <a class="d-inline btn btn-dark" href="https://www.dorubtech.com:2096/" >
                     webmail  <i class="fas fa-mail-bulk"></i></a>
            </div>
            <!--******-->
        </div>
        @foreach($messages as $message)
            <div class="card shadow mt-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <b>from : </b>{{ $message->sender_name }}
                        </div>
                        <div class="col">
                            <b>email : </b>{{ $message->sender_email }}
                        </div>
                        <div class="col">
                            <b>phone number : </b>{{ $message->sender_number }}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <b>Message : </b>
                        <p class="small">
                            {{ $message->sender_message}}
                        </p>
                        <footer class="blockquote-footer">date of message :
                            <cite class="small" title="date"><b>{{ $message->created_at }}</b></cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
            @endforeach
    </div>
@endsection

