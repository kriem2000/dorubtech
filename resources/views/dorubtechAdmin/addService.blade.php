@extends('layouts.app')
@section('styles')
    <link href="{{ asset('css/admincss.css') }}" rel="stylesheet">
         <!--fontawesom -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

@endsection

@section('content')
    <div class="container">

    <div class="row justify-content-center">
    <div class="col-5">
        <h4 align="center">Add new service to dorubtech</h4>
        <div class="form-group container border border-light bg-light shadow">

            <form action="/add_service" method="post" enctype="multipart/form-data">
                @method("post")
                @csrf

                <label class="mt-3" for="image">
                    image
                </label>
                    <i
                    onclick="document.getElementById('getFile').click()"
                    class="display-1 btn btn-lg btn-info text-white m-3 fas fa-cloud-upload-alt" >
                    </i>

                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input
                id="getFile"
                 type="file"
                 name="image"
                 class="d-none"
                 value="upload">

                <label class="mt-3 d-block" for="service_name">service name </label>
                <input
                type="text"
                name="service_name",
                class="form-control @error('service_name') border border-danger @enderror"
                value="{{ old('service_name') }}"
                >

                @error('service_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <label class="mt-3" for="service_description">service description </label>
                <textarea
                name="service_desc",
                class="form-control @error('service_desc') border border-danger @enderror"
                >{{ old("service_desc") }}
                </textarea>

                @error('service_desc')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <input
                type="submit"
                class="text-white btn btn-info mt-3 mb-3 form-control "
                value="publish"
                >

                @if (session()->has("success"))
                    @php
                        $message=session("success")
                    @endphp
                    <x-flash_message message="{{ $message }}" error="{{ false }}"/>
                @endif

            </form>
        </div>
    </div>
    </div>
    </div>
@endsection
