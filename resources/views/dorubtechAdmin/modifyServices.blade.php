@extends("layouts.app")
@section('styles')
    <link href="{{ asset('css/admincss.css') }}" rel="stylesheet">
    <!--fontawesom -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

@endsection

@section("content")
    @if (session()->has("success"))
        @php
            $message=session("success")
        @endphp
        <x-flash_message message="{{ $message }}" error="{{ false }}"/>
            @endif

    <div class="container">
            <div class="row justify-content-center text-center">
                @foreach($services as $service)

                    <div class="card m-4 shadow" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $service->img }}" alt="Card image cap">
                        <form action="/modify_service" method="post" enctype="multipart/form-data">
                        @csrf
                           <!-- usefull hidden inputs -->
                            <input name="id" type="hidden" value="{{ $service->id }}">
                            <input name="img" type="hidden" value="{{ $service->img }}">
                            <!--************-->
                            <!-- //for the image  -->
                            <i
                                onclick="document.getElementById('getFile').click()"
                                class="display-1 btn btn-lg btn-info text-white mt-1 mx-2 fas fa-cloud-upload-alt" >
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
                            <!-- //for the image ends here -->

                            <div class="card-body">
                             <!-- for the name -->
                                <label class="mt-1 d-block" for="service_name"><b>service name :</b></label>
                                <input
                                    type="text"
                                    name="service_name",
                                    class="form-control @error('service_name') border border-danger @enderror"
                                    value="{{ old('service_name') ?? $service->name  }}">

                                @error('service_name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror

                             <!-- for the name ends here-->

                              <!-- for the description -->
                                <label class="mt-3" for="service_description"><b>service description :</b></label>
                                <textarea
                                    cols="6"
                                    rows="8"
                                    name="service_desc",
                                    class="mb-2 form-control @error('service_desc') border border-danger @enderror">
                                    {{ old("service_desc") ?? $service->desc  }}
                                 </textarea>

                                @error('service_desc')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <!-- for the description end here-->

                                <input
                                    type="submit"
                                    class="text-white btn btn-info mt-3 form-control"
                                    value="update">

                            </div>
                        </form>

                        <form  action="/delete_service" method="post" class="px-3 pb-3">
                            @csrf
                            <input name="id" type="hidden" value="{{ $service->id }}">
                            <input name="img" type="hidden" value="{{ $service->img }}">
                            <input
                                type="submit"
                                class="text-white btn btn-danger form-control "
                                value="delete">
                        </form>
                    </div>
                @endforeach

                <h5  class="text-secondary"> {{ sizeof($services)==0 ? "there is no services in the database..." : '' }}</h5>
            </div>
    </div>
@endsection
